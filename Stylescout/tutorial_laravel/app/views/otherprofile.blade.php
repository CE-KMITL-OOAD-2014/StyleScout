<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>PROFILE</title>

    <!-- Bootstrap Core CSS -->
    <link href="{{asset('assets/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="{{asset('assets/bootstrap/css/portfolio-item.css')}}" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
	<!-- script for keep text in the areabox -->
	<style type="text/css">
                    .contain{
                    width:400px;
                    background:Red;
                    }
                    .hard_break{
                        word-wrap: break-word; /* Internet Explorer 5.5+ */
                }
                </style>
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
					<span class="glyphicon glyphicon-log-out"></span>
					<span class="glyphicon glyphicon-upload"></span>

					
                </button>
				
                <a class="navbar-brand" href="blank.php">STYLESCOUTAPP</a>
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
<?php $member = User::where('username','=',$user)->first() //get member details
	 
?>
    <!-- Page Content -->
    <div class="container">

        <!-- Portfolio Item Heading -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">PROFILE
                    <small>{{$member->username}}</small>
                </h1>
            </div>
        </div>
        <!-- /.row -->

        <!-- Portfolio Item Row -->
        <div class="row">

            <div class="col-md-8">
                <img class="img-responsive" src="{{asset($member->profile_pic)}}" alt=""> <!-- Display Profile pic -->
            </div>

             <div class="col-md-4 , hard_break">
                <h3>Profile & Contact</h3>
                <ul>
                <li>{{$member->contact}}</li> <!-- Contact -->
                </ul>
                <h3>Details</h3>
                <ul>
                    <li>{{$member->bio}}</li> <!-- Bio -->
                </ul>
            </div>

        </div>
        
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
    <script src="{{asset('js/jquery-1.11.0.js')}}"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="{{asset('js/bootstrap.min.js')}}"></script>

</body>

</html>
