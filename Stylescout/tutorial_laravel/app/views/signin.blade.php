<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>SIGN IN</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link rel="stylesheet" type="text/css" href="assets/bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="assets/bootstrap/font-awesome/css/font-awesome.min.css" />

    <script type="text/javascript" src="assets/bootstrap/js/jquery-1.10.2.min.js"></script>
    <script type="text/javascript" src="assets/bootstrap/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">

<div class="page-header">
    <h1>Sign in <small>พิมพ์รหัสสิหนู</small></h1>
</div>

<!-- Simple sigin to App - START -->
<form action="{{ url('/login') }}" role="form" method="post" class ="col-md-8">

    <div class="form-group">
       <input type="username" class="form-control input-lg" name="username" id="username" placeholder="Username" required>
    </div>

        <div class="form-group">
       <input type="password" class="form-control input-lg" name="password" id="password" placeholder="Password" required>
        </div>

		<input type="submit" value="Log in" / class="btn btn-primary btn-lg btn-block">
        <span><a href="About.html">Need help?</a></span>
        <span class="pull-right"><a href="register">New Registration</a></span>


</form>
<!-- Simple Login - END -->

</div>

</body>
</html>