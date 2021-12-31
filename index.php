<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Square and Cube using for loop</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<form action="result.php" method="post" class="w-50 m-auto mt-5 shadow-lg bg-light p-5 rounded">
  <div class="row mb-3">
    <div class="col">
        <input type="number" min="0" class="form-control" name="start" placeholder="Starting Number" required>
    </div>
    <div class="col">
      <input type="number" min="0" name="end" placeholder="Ending Number" class="form-control" required>
    </div>
  </div>
  <select name="multiply" class="form-select mb-3" aria-label="Default select example">
            <option selected>Open this select menu</option>
            <option value="Square">Square</option>
            <option value="Cube">Cube</option>
        </select>
        <input type="submit" value="Submit" class="btn btn-primary">
</form>
    
</body>
</html>