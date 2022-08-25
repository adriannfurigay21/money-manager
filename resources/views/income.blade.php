<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Income</title>
</head>
<body>

    

    <div class="container mt-5">
      <h1 class="display-3">INCOME</h1>

      <form action="{{ route('incomeaccounts.store') }}" method="POST" class="row g-3">
        {{-- <div class="input-group mb-3">
          <span class="input-group-text" id="basic-addon1">Account</span>
          <input for="account" type="text" name="account" class="form-control" placeholder="" aria-label="Username" aria-describedby="basic-addon1">
        </div>
        
        <div class="input-group mb-3">
          <span class="input-group-text" id="basic-addon1">Category   </span>
          <input for="category" type="text" name="category" class="form-control" placeholder="" aria-label="Username" aria-describedby="basic-addon1">
        </div> --}}
        <div class="mb-3">
          <select for="account" class="form-select" name="account" required aria-label="select example">
            <option selected disabled value="">Select Account</option>
            <option name="account" value="Cash">Cash</option>
            <option name="account" value="Accounts">Accounts</option>
            <option name="account" value="Card">Card</option>
          </select>
          <div class="invalid-feedback">Example invalid select feedback</div>
        </div>

        <div class="mb-3">
          <select for="category" name="category" class="form-select" required aria-label="select example">
            <option select disabled value="">Select Category</option>
            <option name="category" value="Allowance">Allowance</option>
            <option name="category" value="Salary">Salary</option>
            <option name="category" value="Petty cash">Petty cash</option>
            <option name="category" value="Bonus">Bonus</option>
            <option name="category" value="Other">Other</option>
          </select>
          <div class="invalid-feedback">Example invalid select feedback</div>
        </div>

        <div class="input-group mb-3">
          <span class="input-group-text" id="basic-addon1">Amount</span>
          <input for="amount" type="text" name="amount" class="form-control" placeholder="" aria-label="Username" aria-describedby="basic-addon1">
        </div>
        
        <div class="col-auto">
          <button type="submit" class="btn btn-success mb-3">Save</button>
        </div>

        <div class="col-auto">
          <button onclick="history.back()" class="btn btn-danger mb-3">Back</button>
        </div>
      </form>
    </div>
    
    
</body>
</html>