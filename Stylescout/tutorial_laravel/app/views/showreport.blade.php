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
    <link href="{{asset('assets/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="{{asset('assets/bootstrap/css/4-col-portfolio.css')}}" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

	<body>
	<!--Navigation-->
    <div id="wrapper">

        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="manage">Back to Administrator</a>
            </div>
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    
                    <li><a href="{{url('manage')}}"><i class="fa fa-list-ol"></i> Form</a></li>
                    <li><a href="{{url('report')}}"><i class ="glyphicon glyphicon-thumbs-down"></i>List Report</a></li>
                <ul class="nav navbar-nav navbar-right navbar-user">
                    
                    <li class="dropdown user-dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i>Administrator<b class="caret"></b></a>
                        <ul class="dropdown-menu">
                           
                            <li class="divider"></li>
                            <li><a href="{{url('logout')}}"><i class="fa fa-power-off"></i> Sign Out</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </nav>

        <hr />

    <!-- Page Content -->
    <div class="container">
			
        <!-- Page Heading -->
        <div class="row">
            <div class="col-lg-12">

			<p><br></p>
			
				<p>&nbsp;</p>
				<p>&nbsp;</p>
				<p>&nbsp;</p>
			<p>
			</p>
            </div>
        </div>
        <!-- /.row -->
<?php
$a = 1; 
$i =0;
$reportImages = Imagea::where('report','=','1')->lists('path');
$reportName = Imagea::where('report','=','1')->lists('name');
?>

@foreach($reportImages as $image)
	
        <!-- Projects Row -->
        @if($a%4==1)
        <div class="row">
        	@endif
           <div class="col-md-3 portfolio-item">
                    <img class="img-responsive" src="{{asset($reportImages[$i])}}">          
				<span class="pull-right"><button><a class="glyphicon glyphicon-thumbs-up" href = "{{asset('reportkeep/'.$reportName[$i])}}" onCLick="return confirm('This image is save. Right ?')" ></button></a></span>
				<span class="pull-right"><button><a class="glyphicon glyphicon-thumbs-down" href = "{{asset('reportdel/'.$reportName[$i])}}" onCLick="return confirm('Do you want to delete this picture ?')" ></button></a></span>
           </div>

        @if($a%4==4)
        </div> 
        @endif
       <?php
       $i++	;	   
	   $a++;
	   ?>
       
@endforeach

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

