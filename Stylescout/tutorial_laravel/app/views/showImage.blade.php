<!DOCTYPE html>
<html lang="en">


<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title></title>

    <!-- Bootstrap Core CSS -->
    <link href="{{asset('assets/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="{{('assets/bootstrap/css/portfolio-item.css')}}" rel="stylesheet">
    
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
   <!-- Script for keep text in areabox -->
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
<?php 

$image = Imagea::where('name','=',$img)->first(); //get image to display
$relatePic = Imagea::latest('id')->where('hashtag','=',$image->hashtag)->take(4)->get(); // get 4 related image order by hashtag
?>
    <!-- Page Content -->
    <div class="container">

        <!-- Portfolio Item Heading -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">PROFILE
				    <a href ="{{asset('profile/'.$image->username)}}">
                    <small> {{$image->username}}</small>
					</a>
                </h1>
            </div>
        </div>
        <!-- /.row -->

        <!-- Portfolio Item Row -->
        <div class="row">

            <div class="col-md-8">
                <img class="img-responsive" src="{{asset($image->path)}}" alt="">
            </div>

            <div class="col-md-4,hard_contain">
                <h3>Caption</h3>
                 <ul>{{$image->caption}}  </ul> <!-- Image caption -->
            </div>

        </div>
        <!-- /.row -->

        <!-- Related  Row -->
        <div class="row">

            <div class="col-lg-12">
                <h3 class="page-header">Related</h3>
            </div>

            @foreach($relatePic as $relate)    <!--Display Related image-->
            <div class="col-sm-3 col-xs-6">
                <a href="#">
                    <img class="img-responsive portfolio-item" src="{{asset($relate->path)}}" alt="" onclick="window.location='{{url('/history')}}/{{$relate->name}}'">
                </a>
            </div>
         @endforeach

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
    <script src="{{asset('assets/bootstrap/js/jquery-1.11.0.js')}}"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="{{asset('assets/bootstrap/js/bootstrap.min.js')}}"></script>

</body>

</html>
