<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <h1>Expense</h1>
    <form action="{{ ('store') }}" method="POST" class="row g-3">
        @csrf
        <div class="col-auto">
          <label for="account" class="">Account</label>
          <input for="account"type="text" class="form-control" name="account" placeholder="">
        </div>
        <div class="col-auto">
            <label for="category" class="">Category</label>
            <input for="category" type="text" class="form-control" name="category" value="">
          </div>
          <div class="col-auto">
            <label for="amount" class="">Amount</label>
            <input for="amount" type="text" class="form-control" name="amount" placeholder="">
          </div>
        <div class="col-auto">
          <button type="submit" class="btn btn-primary mb-3">Save</button>
        </div>
      </form>
    
</body>
</html>