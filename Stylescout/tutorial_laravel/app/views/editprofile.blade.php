<html>
<head>
<!--Edit Profile -->
<meta charset="utf-8" />
	
    <title>Edit Profile </title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link rel="stylesheet" type="text/css" href="assets/bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="assets/bootstrap/font-awesome/css/font-awesome.min.css" />

    <script type="text/javascript" src="assets/bootstrap/js/jquery-1.10.2.min.js"></script>
    <script type="text/javascript" src="assets/bootstrap/js/bootstrap.min.js"></script>
	<p>&nbsp;</p>
	<p>&nbsp;</p>
	<p>&nbsp;</p>
</head>

<body>
	<!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
					<span class="glyphicon glyphicon-log-out" > </span>
					<span class="glyphicon glyphicon-upload"></span>

					
                </button>
				
                <a class="navbar-brand" href="blank.html">STYLESCOUTAPP</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="About.html">About</a>
                    </li>
                    <li>
                        <a href="profile">Profile</a>
                    </li>
                    <li>
                         <a href="HashtagList.html">HashtagList </a>
                    </li>
					<li>
						<a class="glyphicon glyphicon-log-out" href="logout"> Signout </a>
					</li>
					<li>
						<a class="glyphicon glyphicon-upload" href="upload">  </a>
					</li>
					
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
	
	<form action="{{ url('/edit') }}" role="form" method="post" class ="col-md-8" enctype="multipart/form-data">
	<!-- Blocks to fill info -->
	<center>Username : {{$user->username}}</center>
    <br></br>
	<center>Contact:<br> <input type="text" name="contact" value="{{$user->contact}}" style="margin:20px; padding:20px; "></center>
	<p>
	<center>Bio:<br> <textarea style="resize:  none;" rows="4" cols="50" name="bio" >{{$user->bio}}</textarea></center>
	</p>

<center><p> Choose Profile Picture</p></center>

    <p></p>
 <center> <img id="uploadPreview" width="50%"; height="auto"; /> </center>
          <center> <input id="profilepic" type="file" name="profilepic" value ="{{$user->profile_pic}}" onchange="PreviewImage();" /></center>
            <script type="text/javascript">
//function show preview image
    function PreviewImage() {
        var oFReader = new FileReader();
        oFReader.readAsDataURL(document.getElementById("profilepic").files[0]);

        oFReader.onload = function (oFREvent) {
            document.getElementById("uploadPreview").src = oFREvent.target.result;
        };
    };

</script>
	<p></p>
	<!--Messages-->
	<p><center><font color="Maroon">Image file limit at most 2000Kb </font></center></p>
	<!-- Buttons -->
	
	
	<center><input type="submit" name="submit" id="submit" value="Submit" onclick="window.location='http://localhost:7777/testtest/profile.html'" / class="btn btn-info"><br><br></center>
	

	</form> 	
	<body background="uploadpic/background/nike.jpg">


</body>
</html>
