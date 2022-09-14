<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;


class SummaryController extends Controller
{
    public function daily()
    {
        //
    }


    public function weekly(Request $request) {

        // get all sunday
        $today = Carbon::now();

        //$today = Carbon::parse($requst->date_today);

        $date = $today->copy()->firstOfMonth()->startOfWeek(Carbon::SUNDAY);
        $endOfMonth = $today->copy()->endOfMonth()->endOfWeek(Carbon::SATURDAY);

        $weekly = [];

        // lte - loop to end
        for($i = 0; $date->lte($endOfMonth); $i++) {

            //record start date
            $startDate = $date->copy();

            while($date->dayOfWeek != Carbon::SATURDAY && $date->lte($endOfMonth)) {
                $date->addDay();
            }

            $firstWeek = Carbon::parse($startDate)->format('F d');
            $secondWeek = Carbon::parse($date)->format('F d');
            $range = $firstWeek. '  ~  ' .$secondWeek;


            //return $range;
            $query = DB::select(
                "SELECT
                    ? AS 'Range',
                    IFNULL(SUM(income_account.amount), 0) AS 'Total Income',
                    (SELECT
                            IFNULL(SUM(expense_account.amount), 0)
                        FROM expense_account
                        WHERE created_at BETWEEN ? AND DATE_ADD(?, INTERVAL 1 DAY))
                     AS 'Total Expense',
                    (
                        IFNULL(SUM(income_account.amount), 0)
                        -
                        (SELECT
                                IFNULL(SUM(expense_account.amount), 0)
                            FROM expense_account
                            WHERE created_at BETWEEN ? AND DATE_ADD(?, INTERVAL 1 DAY))
                        ) AS 'Total'
                    
                    FROM income_account
                    WHERE created_at BETWEEN ? AND DATE_ADD(?, INTERVAL 1 DAY)
                    ",
                     
                    [$range, $startDate, $date, $startDate, $date, $startDate, $date]
            );

            $weekly[] = $query[0];

            $date->addDay();
        }

        return response()->json($weekly);

    }



    public function monthly(Request $request){

        $monthly = [];

        $year = $request->year;

        for($buwan=1; $buwan<=12; $buwan++) {

            $date = Carbon::parse(date('Y-m-d', mktime(0,0,0,$buwan, 1, $year)));

            $x = Carbon::parse($date->copy()->firstOfMonth())->toDateString().'%';
            $y = Carbon::parse($date->copy()->endOfMonth())->toDateString().'%';

            $currentMonth = $date->format('F Y');
            
            $query = DB::select(
                "SELECT
                    ? AS 'Month',
                    IFNULL(SUM(income_account.amount), 0) AS 'Total Income',
                    (SELECT
                            IFNULL(SUM(expense_account.amount), 0)
                        FROM expense_account
                        WHERE created_at BETWEEN ? AND DATE_ADD(?, INTERVAL 1 DAY))
                     AS 'Total Expense',
                    (
                        IFNULL(SUM(income_account.amount), 0)
                        -
                        (SELECT
                                IFNULL(SUM(expense_account.amount), 0)
                            FROM expense_account
                            WHERE created_at BETWEEN ?  AND DATE_ADD(?, INTERVAL 1 DAY))
                        ) AS 'Total'
                    
                    FROM income_account
                    WHERE created_at BETWEEN ?  AND DATE_ADD(?, INTERVAL 1 DAY)
                ",
                [$currentMonth, $x, $y, $x, $y, $x, $y]
            );

            $monthly[] = $query[0];
        }
        // Get he last number of the current month
        return $monthly;
    }

}