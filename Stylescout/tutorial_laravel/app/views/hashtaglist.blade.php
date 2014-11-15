<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>HashtagLists</title>

    <!-- Bootstrap Core CSS -->
    <link href="assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="assets/bootstrap/css/round-hashtag.css" rel="stylesheet">
	
	

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
					<span class="glyphicon glyphicon-log-out"></span>
					<span class="glyphicon glyphicon-upload"></span>
                </button>
				
				
                <a class="navbar-brand" href="blank.html">STYLESCOUTAPP</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="profile">Profile </a>
                    </li>
                    <li>
                        <a href="HashtagList">HashtagList </a>
                    </li>
                    <li>
                        <a href="About">About</a>
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

    <!-- Page Content -->
    <div class="container">
<a href="index.html">Home </a> || <a href="hashtag">HashtagList </a>
        <!-- Introduction Row -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">HashtagList
                    <small>It's Nice to Meet You!</small>
                </h1>
               
            </div>
        </div>


        <!-- Team Members Row -->
        <div class="row">
            <div class="col-lg-12">
                <h2 class="page-header">Categories</h2>
            </div>
            @foreach($tag as $hashtag)

            <div class="col-lg-4 col-sm-6 text-center">
                <img class="img-circle img-responsive img-center" src="assets/bootstrap/image/upload/dandy.jpg" alt="">
                <h3>{{$hashtag->hashtag}}
					<button class="btn" onclick ="window.location='{{url('/hashtag')}}'+'/'+'{{$hashtag->id}}'">{{$hashtag->hashtag}}</button>
				
                </h3>
                <p>{{$hashtag->caption}}</p>
            </div>
        
     @endforeach       
         
        <!-- Footer -->
        <footer>
            <div class="row">
                <div class="col-lg-12">
                    <p></p>
                    <p>Copyright &copy; Your Website 2014</p>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
        </footer>

    </div>
    <!-- /.container -->

    <!-- jQuery Version 1.11.0 -->
    <script src="assets/bootstrap/js/jquery-1.11.0.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>

</body>

</html>