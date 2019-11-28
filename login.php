<html>
<head>
<style>


</style>
<title>user login and registration</title>
<link rel="stylesheet" type="text/css" href="style.css"/>

<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"/>
</head>
<body>
<div class="container">
<div class="login-box">
<div class="row">
<div class="col-md-6 login-left">
<h2>Visitor Details</h2>
<form action="valid.php" method="post">
<div class="form-group">
<label>name</label>
<input type="text" name="user" class="form-control" required>
</div>
<div class="form-group">
<label>Email id</label>
<input type="email" name="email" class="form-control" required>
</div>
<div class="form-group">
<label>Phone number</label>
<input type="number" name="phone" class="form-control" required>
</div>




</div>
<div class="col-md-6 login-right">
<h2>Host Details</h2>

<div class="form-group">
<label>name</label>
<input type="text" name="user1" class="form-control" required>
</div>
<div class="form-group">
<label>Email id</label>
<input type="email" name="email1" class="form-control" required>
</div>

<div class="form-group">
<label>phonenumber</label>
<input type="number" name="phone1" class="form-control" required>
</div>

<button type="submit" class="btn btn-primary">Login</button>
</form>
</div>
</div>
</div>







</body>














</html>