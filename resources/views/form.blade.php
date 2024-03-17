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
<h1>Add New Employee</h1>

@if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
        
    </div>
@endif

  <form action="{{ url('store') }}" method="post">
    @csrf
  <div class="form-group">
      <label for="text">Name<span style="color:red">*<span></label>
      <input type="text" class="form-control"  value="{{ old('name') }}" id="name" placeholder="Enter Name" name="name">
      @error('name')
        <div style="color:red">
            {{$message}}
        </div>
      @enderror
    </div>
    <div class="form-group">
      <label for="email">Email<span style="color:red">*<span></label>
      <input type="email" class="form-control"   value="{{ old('email') }}" id="email" placeholder="Enter email" name="email">
      @error('email')
        <div style="color:red">
            {{$message}}
        </div>
      @enderror
    </div>
    <div class="form-group">
      <label for="Phone">Phone<span style="color:red">*<span></label>
      <input type="number" class="form-control"   value="{{ old('phone') }}" id="phone" placeholder="Enter phone Number" name="phone">
      @error('phone')
        <div style="color:red">
            {{$message}}
        </div>
      @enderror
    </div>
   
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>

</body>
</html>
