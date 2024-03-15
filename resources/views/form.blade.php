<!DOCTYPE html>
<html lang="en">
<head>
  <title>Add Employee Form</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <form action="{{ url('store') }}" method="post">
    @csrf
  <div class="form-group">
      <label for="text">Name:</label>
      <input type="text" class="form-control" id="name" placeholder="Enter Name" name="name">
    </div>
    <div class="form-group">
      <label for="email">Email:</label>
      <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
    </div>
    <div class="form-group">
      <label for="Phone">Phone:</label>
      <input type="number" class="form-control" id="phone" placeholder="Enter phone Number" name="phone">
    </div>
   
    <button type="submit" class="btn btn-default">Submit</button>
  </form>
</div>

</body>
</html>
