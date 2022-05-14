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
  <h2>Companies</h2>

<a href="{{ route('create-company') }}" class="btn btn-success" role="button"> Create new company</a>
 
<h3>companies list</h3>

  <table class="table">
    <thead>
      <tr>
        <th>id</th>
        <th>name</th>
        <th>email</th>
        <th>website</th>
        <th>logo</th>
      </tr>
      @foreach($companies as $company)
<tr>
        <td>{{$company->id}}</td>
        <td>{{$company->name}}</td>
        <td>{{$company->email}}</td>
        <td>{{$company->website}}</td>
        
        <td> <img src="{{ asset('uploads/logo/'.$company->logo) }}" alt="image"></td>
</tr>
@endforeach
    </thead>
  </table>
</div>

</body>
</html>



