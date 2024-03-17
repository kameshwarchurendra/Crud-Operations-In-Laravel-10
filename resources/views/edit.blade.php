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
<h1>Update Employee</h1>

@if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
        
    </div>
@endif

@if(!empty($employee))
  <form action="{{ url('update') }}" method="post">
    @csrf
  <div class="form-group">
      <label for="text">Name<span style="color:red">*</span></label>
      <input type="text" class="form-control" id="name"  value="{{  $employee->name }}" placeholder="Enter Name" name="name">
      @error('name')
        <div style="color:red">
            {{$message}}
        </div>
      @enderror
    </div>
    <div class="form-group">
      <label for="email">Email<span style="color:red">*</span></label>
      <input type="email" class="form-control" id="email"  value="{{  $employee->email }}" placeholder="Enter email" name="email">
      @error('email')
        <div style="color:red">
            {{$message}}
        </div>
      @enderror
    </div>
    <div class="form-group">
      <label for="Phone">Phone<span style="color:red">*</span></label>
      <input type="number" class="form-control" id="phone"  value="{{  $employee->phone }}" placeholder="Enter phone Number" name="phone">
      @error('phone')
        <div style="color:red">
            {{$message}}
        </div>
      @enderror
    </div>
    <input type="hidden" class="form-control" id="id"  value="{{$employee->id}}"  name="id">

    <button type="submit" class="btn btn-primary">Update</button>
  </form>
  @endif
</div>

</body>
</html>
