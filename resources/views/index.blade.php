<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" type="text/css" href="./css/styles.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    
    <title>Home</title>
</head>
<body>
    <style>
        .btn {
          margin-left: 10px;
          margin-bottom: 10px;
        }

        p {
          margin-left: 10px;
        }
    </style>
    
    <nav class="navbar navbar-light bg-dark">
      <div class="container">
        <a class="navbar-brand" href="#">
        </a>
      </div>
    </nav>
    
    <div class="container">
      <div class="container mt-3">
        {{-- <h1 class="display-5">Money Manager</h1> --}}
        <ul class="nav justify-content-center">
          <li class="">
            <a class="btn btn-secondary" href="#" role="button">Daily</a>
          </li>
          <li class="nav-item">
            <a class="btn btn-secondary" href="#" role="button">Calendar</a>
          </li>
          <li class="nav-item">
            <a class="btn btn-secondary" href="{{ url('weeklyViews') }}" role="button">Weekly</a>
          </li>
          <li class="nav-item">
            <a class="btn btn-secondary" href="{{ url('monthlyViews') }}">Monthly</a>
          </li>
          <li class="nav-item">
            <a class="btn btn-secondary" href="#" role="button">Total</a>
          </li>
        </ul>
      </div>
      <hr>
        <div class="container mt-5">
          <ul class="nav justify-content-center">
            <li class="nav-item">
              <a class="btn btn-primary" role="button" href="{{url('income')}}">Income</a>
                <p class="text-primary">₱ {{ $income_account }}</p>
            </li>
            <li class="nav-item">
              <a class="btn btn-danger" role="button" href="{{url('expense')}}">Expense</a>
               <p class="text-danger">₱ {{ $expense_account }}</p>
            </li>
            <li class="nav-item mb-3">
              <button class="btn btn-info" type="button" href="#" disabled>Total</button>
               <p>₱ {{ $total }}</p>
            </li>
          </ul>
        </div>
        <hr> 
    </div>
        
</body>
</html>