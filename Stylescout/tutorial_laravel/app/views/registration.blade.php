<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Registration form </title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link rel="stylesheet" type="text/css" href="assets/bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="assets/bootstrap/font-awesome/css/font-awesome.min.css" />

    <script type="text/javascript" src="assets/bootstrap/js/jquery-1.11.1.min.js"></script>
    <script type="text/javascript" src="assets/bootstrap/js/bootstrap.min.js"></script>
</head>


<body>

<div class="container">

<div class="page-header">
    <h1>Registration form <small>Registration to be a part of our community</small></h1>
</div>

<!-- Registration form - START -->
                 <form action="{{ url('/registered') }}" role="form" method="post">
<div class="container">
    <div class="row">
      
            <div class="col-lg-6">
                <div class="well well-sm"><strong><span class="glyphicon glyphicon-asterisk"></span>Required Field</strong></div>
                <div class="form-group">
                    <label for="InputName">Enter Name</label>
                    <div class="input-group">
                        <input type="text" class="form-control" name="username" id="username" placeholder="Enter Name" required>
                        <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                    </div>
                </div>
                <div class="form-group">
                    <label for="InputEmail">Enter Email</label>
                    <div class="input-group">
                        <input type="email" class="form-control" id="email" name="email" placeholder="Enter Email" required>
                        <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                    </div>
                </div>
                <div class="form-group">
                    <label for="InputEmail">Confirm Email</label>
                    <div class="input-group">
                        <input type="email" class="form-control" id="email_con" name="email_con" placeholder="Confirm Email" required>
                        <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                    </div>
                </div>
                
                <div class="form-group">
                    <label for="InputPassword">Enter Password</label>
                    <div class="input-group">
                        <input type="password" class="form-control" id="password" name="password" placeholder="Enter Password" required>
                        <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                    </div>
                </div>
                
                         <div class="form-group">
                    <label for="InputPassword">Confirm Password</label>
                    <div class="input-group">
                        <input type="password" class="form-control" id="pass_con" name="pass_con" placeholder="Re-Enter Password" required>
                        <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                    </div>
                </div>
                  
               
                <input type="submit" name="submit" id="submit" value="Submit" / class="btn btn-info pull-right">
            </div>
         
                
       </form>
     
    </div>
</div>
<!-- Registration form - END -->

</div>
    
</body>
</html>