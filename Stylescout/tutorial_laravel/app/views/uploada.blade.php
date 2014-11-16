<html lang="en"> 
    <head> 
	
	
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>STYLESCOUTAPP</title>

    <!-- Bootstrap Core CSS -->
    <link href="assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">

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
      <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
	<div class="container">

        
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
               
				
                <a class="navbar-brand" href="blank">STYLESCOUTAPP</a>
				<a class="navbar-brand" href="profile">Profile</a>
				<a class="navbar-brand" href="aboutus">About</a>
				
				
            </div>
			
            
            <!-- /.navbar-collapse -->
        </div>
		
        <!-- /.container -->
    </nav>

	 
	 
    <form action="{{url('/upload')}}" enctype="multipart/form-data" method="post"> 
    
     
        <h1> 
           <center> <font face="verdana" size=50 color="Black">STYLE SCOUT APP </font></center>
        </h1>
        <p> 
       
          <center> <img id="uploadPreview" width = "50%"; height = "auto"; ></center>
          <center> <input id="image" type="file" name="images" onchange="PreviewImage();"  /></center>
            <script type="text/javascript">
<!-- function to preview image -->
    function PreviewImage() {
        var oFReader = new FileReader();
        oFReader.readAsDataURL(document.getElementById("image").files[0]);

        oFReader.onload = function (oFREvent) {
            document.getElementById("uploadPreview").src = oFREvent.target.result;
        };
    };
</script>
        </p> 
    <center>Choose your hashtag: <select name ="hashtag"> 
    <?php $list = DB::table('hashtag')->lists('hashtag')?> <!-- get all hashtag name-->
   @foreach($list as $lists)  <!-- loop for keep hashtag in the list -->
            <option id = "hashtag" value="{{$lists}}">{{$lists}}</option>
  @endforeach
        </center> </select>
  
         <p>
             <center>Details:<br><textarea style="resize: none;" rows="4" cols="50" name="caption"></textarea></center>
        </p>
        <p> 
            <center><label for="submit"><font color="Crimson">Press to Upload:</font></label></center>
            
        </p>
            <p>
            <center><input id="submit" type="submit" name="submit" value="Upload me!"> </center>
            </p>

    </p>
     
    </form>
	<body background="">
	</body>
    
    </body> 

</html> 
