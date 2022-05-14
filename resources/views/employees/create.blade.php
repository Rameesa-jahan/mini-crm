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
    <h2>Employee form</h2>
    <form method="POST" action="{{route('add-employee')}}">
    @csrf
      <div class="form-group">
        <label for="fname">Firstname:</label>
        <input type="text" class="form-control" id="fname" placeholder="Enter first name" name="first_name">
      </div>
      <div class="form-group">
        <label for="lname">Lasttname:</label>
        <input type="text" class="form-control" id="lname" placeholder="Enter last name" name="last_name">
      </div>
      <div class="form-group">
        <label for="email">Email:</label>
        <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
      </div>
      <div class="form-group">
        <label for="pwd">Password:</label>
        <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="password">
      </div>
      <div class="form-group">
        <label for="phon">phone number:</label>
        <input type="number" class="form-control" id="phon" placeholder="Enter phone number" name="phone">
      </div>



      <div class="col-3">
        <div class="form-group">
            <label class="control-label" for="status">company</label>
            <select id="company" name="company_id" class="form-control" required>
          @foreach($companies as $company)

          <option value="{{$company->id}}"> {{$company->name}}</option>
          @endforeach

            </select>
        </div>
    </div>

      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
  </div>

</body>

</html>