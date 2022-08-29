<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" type="text/css" href="">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    
    <title>Home</title>
</head>
<body>

    
    <nav class="navbar navbar-light bg-dark">
      <div class="container">
        <a class="navbar-brand" href="#">
          {{-- <img src="/docs/5.0/assets/brand/bootstrap-logo.svg" alt="" width="30" height="24"> --}}
        </a>
      </div>
    </nav>
    
    <div class="container">
      <div class="container mt-3">
        {{-- <h1 class="display-5">Money Manager</h1> --}}
        <ul class="nav justify-content-center">
          <li class="nav-item">
            <a class="nav-link" href="#">Daily</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Calendar</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Weekly</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Monthly</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Total</a>
          </li>
         
        </ul>
      </div>
      <hr>
        <div class="container mt-5">
          <ul class="nav justify-content-center">
            <li class="nav-item">
              <a class="nav-link" href="{{url('income')}}">Income</a>
              <p>{{ route('ShowIncome.show') }}</p>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{url('expense')}}">Expense</a>
            </li>
            <li class="nav-item mb-3">
              <a class="nav-link" href="#">Total</a>
            </li>
          </ul>
        </div>
        <hr>
    </div>
    





      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>