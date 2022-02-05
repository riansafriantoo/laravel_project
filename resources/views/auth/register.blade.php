<!DOCTYPE html>
<html lang="en">
<head>
    <link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/css/bootstrap-combined.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="admin/assets/css/register.css" media="none">
    <link rel="apple-touch-icon" sizes="76x76" href="{{asset('admin/assets/img/apple-icon.png')}}">
	<link rel="icon" type="image/png" sizes="96x96" href="{{asset('admin/assets/img/favicon.png')}}">
    <title>Register Page</title>
</head>
<body>

<!------ Include the above in your HEAD tag ---------->

<form class="form-horizontal" action='/createUser' method="POST">
{{csrf_field()}}
  <fieldset>
    <div id="legend">
      <legend class="">Register</legend>
    </div>
    <div class="control-group">
      <!-- Username -->
      <label class="control-label"  for="username">Nama</label>
      <div class="controls">
        <input type="text" id="name" name="name" placeholder="" class="input-xlarge">
      </div>
    </div>
 
    <div class="control-group">
      <!-- E-mail -->
      <label class="control-label" for="email">E-mail</label>
      <div class="controls">
        <input type="text" id="email" name="email" placeholder="" class="input-xlarge">
      </div>
    </div>
 
    <div class="control-group">
      <!-- Password-->
      <label class="control-label" for="password">Password</label>
      <div class="controls">
        <input type="password" id="password" name="password" placeholder="" class="input-xlarge">
      </div>
    </div>

          <!-- Confirm Password-->
    <!-- <div class="control-group">
      <label class="control-label" for="password">Confirm Password</label>
      <div class="controls">
        <input type="password" id="confirm_password" name="confirm_password" placeholder="" class="input-xlarge">
      </div>
    </div> -->

    <div class="control-group">
      <!-- Password -->
      <label class="control-label" for="role">Jenis Role</label>
      <div class="controls">
        <select class="form-control" name="role" id="role">
            <option value="">Pilih jenis Role</option>
            <option value="admin">Admin</option>
            <option value="user">User</option>
        </select>
    </div>
    </div>
 
    <div class="control-group">
      <!-- Button -->
      <div class="controls">
        <button type="submit" class="btn btn-info btn-md">Register</button>
        <a href="/login" class="btn btn-warning btn-sm">Login</a>
      </div>
    </div>
  </fieldset>
</form>
</body>
</html>