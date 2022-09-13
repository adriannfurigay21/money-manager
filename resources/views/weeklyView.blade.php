<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <h1 class="display-5 mt-3 mb-5">Weekly Summary</h1>
        <table class="table">
            <thead>
                <tr>  
                    <th scope="col">Income</th>
                    <th scope="col">Expense</th>
                    <th scope="col">Total</th>
                </tr>
                <tr>                   
                    <th class="text-primary">₱{{ $income_account }}</th>
                    <th class="text-danger">₱{{ $expense_account }}</th>
                    <th>₱{{ $total }}</th>
                </tr>
            </thead>
            <tbody>
          
                <tr>               
                    <td>asd</td>
                    <td>Otto</td>
                    <td>mdo</td>
                </tr>
                <tr>                
                    <td>Jacob</td>
                    <td>Thornton</td>
                    <td>@fat</td>
                </tr>
                <tr>               
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>@mdo</td>
                </tr>
                <tr>                
                    <td>Jacob</td>
                    <td>Thornton</td>
                    <td>@fat</td>
                </tr>
                <tr>               
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>@mdo</td>
                </tr>
            </tbody>
        </table>
        <div class="col-auto">
          <button onclick="history.back()" class="btn btn-danger mb-3">Back</button>
        </div>
    </div>
</body>
</html>