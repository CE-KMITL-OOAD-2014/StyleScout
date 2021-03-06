<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>User History</title>
	<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css" rel="stylesheet">

    <!-- Bootstrap Core CSS -->
    <link href="assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="assets/bootstrap/css/4-col-portfolio.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

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
				
                <a class="navbar-brand" >STYLESCOUTAPP</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
         <li>
                        <a href="{{asset(url('/aboutus'))}}"><font color="Snow">About</font></a>
                    </li>
                    <li>
                        <a href="{{asset(url('/profile'))}}"><font color="Snow">Profile</font></a>
                    </li>
                    <li>
                         <a href="{{asset(url('/hashtag'))}}"><font color="Snow">HashtagList</font> </a>
                    </li>
					<li>
						<a class="glyphicon glyphicon-log-out" href="{{asset(url('/logout'))}}"> <font color="Snow">Signout </font></a>
					</li>
					<li>
						<a class="glyphicon glyphicon-upload" href="{{asset(url('/upload'))}}">Upload</a>
					</li>
					
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Page Content -->
    <div class="container">

<?php
$a = 1; //variable for break the line
$username = Auth::user()->username; // get username from user
$images = Imagea::where('username','=',$username)->get();// get image uploaded by this user

?>
        <!-- Page Heading -->
        <div class="row">
            <div class="col-lg-12">

			<p><br></p>
			
				<p>&nbsp;</p>
				<p>&nbsp;</p>
				<p>&nbsp;</p>
			<p>
                <h1 class="page-header"><font color="Snow">{{$username}}  </font>
                    <small><font color="BurlyWood">Let's see what you've been uploaded ! Shall we?</font></small>
                </h1>
			</p>
            </div>
        </div>
        <!-- /.row -->

<!-- Display uploaded image-->
@foreach ($images as $image)
        <!-- Projects Row -->
        @if($a%4==1)
        <div class="row">
            @endif
           <div class="col-md-3 portfolio-item">
                <a href="{{url('/history')}}/{{$image->name}}">
                    <img class="img-responsive " src="{{$image->path}}" alt=""> 
                 </a>   
             <span class="pull-right"><button><a class="glyphicon glyphicon-trash" href = "delete/{{$image->name}}" onCLick="return confirm('Are you SURE you want to delete this record?')" ></button></a></span>           
           </div>
        @if($a%4==0)
        </div> 
        @endif
       <?php $a++?>
@endforeach
        <!-- /.row -->



        <hr>

        <!-- Footer -->
        <footer>
            <div class="row">
                <div class="col-lg-12">
                    <p>Copyright &copy; Your Website 2014</p>
                </div>
            </div>
            <!-- /.row -->
        </footer>

    </div>
    <!-- /.container -->

    <!-- jQuery Version 1.11.0 -->
    <script src="js/jquery-1.11.0.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
	<body background="uploadpic/background/step.jpg">
	
</body>

</html>