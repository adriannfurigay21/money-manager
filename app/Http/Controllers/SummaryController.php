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
                        (
                            SELECT
                                IFNULL(SUM(expense_account.amount), 0)
                            FROM expense_account
                            WHERE created_at BETWEEN ? AND DATE_ADD(?, INTERVAL 1 DAY))
                        ) AS 'Total'
                    
                    FROM income_account
                    WHERE created_at BETWEEN ? AND DATE_ADD(?, INTERVAL 1 DAY)
                    ",
            
                    [
                        $range,
                        Carbon::parse($startDate)->toDateString().'%',
                        Carbon::parse($date)->toDateString().'%',
                        Carbon::parse($startDate)->toDateString().'%',
                        Carbon::parse($date)->toDateString().'%',
                        Carbon::parse($startDate)->toDateString().'%',
                        Carbon::parse($date)->toDateString().'%'
                    ]
            );

            $weekly[] = $query[0];

            $date->addDay();
        }

        return response()->json($weekly);

    }








    public function monthly()
    {
        //
    }
}










// $query = DB::select(
//     "SELECT
//         ? AS 'Range',
//         IFNULL(SUM(i.amount), 0) AS 'Total Income',
//         (
//             (SELECT
//                 IFNULL(SUM(e.amount), 0)
//             FROM expenses e
//             WHERE cretaed_at BETWEEN ? AND DATE_ADD(?, INTERVAL 1 DAY))
//         +

//             (SELECT
//                 IFNULL(SUM(t.fees), 0)
//             FROM transfers t
//             WHERE created_at BETWEEN ? AND DATE_ADD(?, INTERVAL 1 DAY))
//         ) AS 'Total Expense',
//         (
//             IFNULL(SUM(i.amount), 0)
//             -
//             (
//                 (SELECT
//                     IFNULL(SUM(e.amount), 0)
//                 FROM expense e
//                 WHERE created_at BETWEEN ? AND DATE_ADD(?, INTERVAL 1 DAY))
//                 +
//                 (SELECT
//                     IFNULL(SUM(t.fees), 0)
//                 FROM transfers t
//                 WHERE created_at BETWEEN ? AND DATE_ADD(?, INTERVAL 1 DAY)))
//             ) AS 'Total'
        
//         FROM incomes i
//         WHERE created_at BETWEEN ? AND DATE_ADD(?, INTERVAL 1 DAY)
//         ",

//         [
//             $range,
//             Carbon::parse($startDate)->toDateString().'%',
//             Carbon::parse($date)->toDateString().'%',
//             Carbon::parse($startDate)->toDateString().'%',
//             Carbon::parse($date)->toDateString().'%',
//             Carbon::parse($startDate)->toDateString().'%',
//             Carbon::parse($date)->toDateString().'%',
//             Carbon::parse($startDate)->toDateString().'%',
//             Carbon::parse($date)->toDateString().'%',
//             Carbon::parse($startDate)->toDateString().'%',
//             Carbon::parse($date)->toDateString().'%',
//         ]
// );