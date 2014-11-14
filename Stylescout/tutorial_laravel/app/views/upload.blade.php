<?php 

// filename: upload.form.php 

// first let's set some variables 

// make a note of the current working directory relative to root. 
$directory_self = str_replace(basename($_SERVER['PHP_SELF']), '', $_SERVER['PHP_SELF']); 

// make a note of the location of the upload handler script 
$uploadHandler = 'http://' . $_SERVER['HTTP_HOST'] . $directory_self . 'upload.processor.php'; 

// set a max file size for the html upload form 
$max_file_size = 30000; // size in bytes 

// now echo the html page 
?> 

<html lang="en"> 
    <head> 
	
	
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>STYLESCOUTAPP</title>

    <!-- Bootstrap Core CSS -->
    <link href="assests/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="assets/bootstrap/css/full.css" rel="stylesheet">

    
        <meta http-equiv="content-type" content="text/html; charset=iso-8859-1"> 
     
        <link rel="stylesheet" type="assets/bootstrap/text/css" href="stylesheet.css"> 
		<p><br></p>
	<p>&nbsp;</p>
	<p>&nbsp;</p>
	<p>&nbsp;</p>
	<p style="font-size:20pt;">&nbsp;</p>
        <p> 
        <title>UPLOAD</title> 
		</p>
		
		
     
    </head> 
     
    <body> 
     
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
                        <a href="About.html">About</a>
                    </li>
                    <li>
                        <a href="profile">Profile </a>
                    </li>
					
                    
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

	 
	 
    <form id="Upload" action="<?php echo $uploadHandler ?>" enctype="multipart/form-data" method="post"> 
     
        <h1> 
           <center> <font face="verdana" size=50 color="Black">STYLE SCOUT APP </font></center>
        </h1> 
         
        <p> 
            <center><input type="hidden" name="MAX_FILE_SIZE" value="<?php echo $max_file_size ?>"> </center>
        </p> 
         
        <p> 
           <center> <label for="file"><font color="IndianRed">File to upload:</font> </label> </center>
		   <p>
            <center><input id="file" type="file" name="file"> </center>
			</p>
        </p> 
                 
        <p> 
            <center><label for="submit"><font color="Crimson">Press to Upload: </font></label> </center>
			<p>
            <center><input id="submit" type="submit" name="submit" value="Upload me!"> </center>
			</p>
        </p> 
     
    </form> 
	<body background="gold.jpg">
	</body>
     
     
    </body> 

</html> 