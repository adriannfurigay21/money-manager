<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    
    <title>Expense</title>
</head>
<body>

    
    <nav class="navbar navbar-light bg-dark">
      <div class="container">
        <a class="navbar-brand" href="#">
          {{-- <img src="/docs/5.0/assets/brand/bootstrap-logo.svg" alt="" width="30" height="24"> --}}
        </a>
      </div>
    </nav>

    <div class="container mt-5">
      <h1 class="display-3 mb-5">EXPENSE</h1>
      <form action="{{ route('expenseaccounts.store') }}" method="POST" class="row g-3">
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
              <option selected disabled value="">Select Category</option>
              <option name="category" value="Food">Food</option>
              <option name="category" value="Social Life">Social Life</option>
              <option name="category" value="Self-development">Self-development</option>
              <option name="category" value="Transportation">Transportation</option>
              <option name="category" value="Culture">Culture</option>
              <option name="category" value="Household">Household</option>
              <option name="category" value="Apparel">Apparel</option>
              <option name="category" value="Beauty">Beauty</option>
              <option name="category" value="Health">Health</option>
              <option name="category" value="Education">Education</option>
              <option name="category" value="Gift">Gift</option>
              <option name="category" value="Other">Other</option>
            </select>
            <div class="invalid-feedback">Example invalid select feedback</div>
          </div>

          <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1">Amount</span>
            <input for="validationCuston03" type="text" name="amount" class="form-control" placeholder="" aria-label="Username" aria-describedby="basic-addon1" required>
          </div>
          
          <div class="col-auto">
            <button type="submit" class="btn btn-success mb-3">Save</button>
          </div>
          <div class="col-auto">
            <button onclick="history.back()" class="btn btn-danger mb-3">Back</button>
          </div>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    
</body>
</html>