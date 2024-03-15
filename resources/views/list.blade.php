<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>

<div class="container mt-3">
  <h2>Employee List</h2>
 <a href="{{ url('add')}}"> <button class="btn btn-primary" style="float:right">Add Employee</button></a><br><br>
  <table class="table table-bordered">
    <thead>
      <tr>
        <th>Name</th>
        <th>Email</th>
        <th>Phone</th>
        <th>Action</th>

      </tr>
    </thead>
    <tbody>
    @foreach($employee as $val)
      <tr>
        <td>{{ $val->name }}</td>
        <td>{{ $val->email }}</td>
        <td>{{ $val->phone }}</td>
        <td><a href="{{ url('edit/'.$val->id )}}"><i class="fa fa-edit" style="font-size:24px"></i></a><a href="{{ url('delete/'.$val->id)}}"><i class="fa fa-trash" aria-hidden="true" style="color:red;font-size:24px;"></i></a>
        
</td>
      </tr>
    @endforeach
    </tbody>
  </table>
</div>

</body>
</html>
