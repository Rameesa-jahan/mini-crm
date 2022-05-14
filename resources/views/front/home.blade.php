<!DOCTYPE html>
<html lang="en">
<head>
  <title>admin panel</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Employees</h2>

<a href="{{ route('employees-create') }}" class="btn btn-success" role="button"> Add new employee</a>

<h3>Employees list</h3>
  <table class="table">
    <thead>
      <tr>
        <th>Id</th>
        <th>Firstname</th>
        <th>Lastname</th>
        <th>Email</th>
        <th>Password</th>
        <th>Company id</th>
        <th>Phone</th>
      </tr>
      @foreach($employees as $employee)
<tr>
        <td>{{$employee->id}}</td>
        <td>{{$employee->first_name}}</td>
        <td>{{$employee->last_name}}</td>
        <td>{{$employee->email}}</td>
        <td>{{$employee->password}}</td>
        <td>{{$employee->company_id}}</td>
        <td>{{$employee->phone}}</td>
</tr>
@endforeach
    </thead>
  </table>
</div>

</body>
</html>
