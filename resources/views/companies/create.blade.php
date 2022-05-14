<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Company </h2>
  <form method="POST" action="{{route('add-company')}}" enctype="multipart/form-data">
    @csrf
  <div class="form-group">
      <label for="name">name:</label>
      <input type="text" class="form-control" id="name" placeholder="Enter your name" name="name">
    </div>
    <div class="form-group">
      <label for="email">Email:</label>
      <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
    </div>
    <div class="form-group">
      <label for="web">website:</label>
      <input type="website" class="form-control" id="web" placeholder="Enter website" name="website">
    </div>
    <div class="form-group">
      <label for="logo">logo:</label>
      <input type="file" class="form-control" id="logo" placeholder="Add logo" name="logo">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>

</body>
</html>