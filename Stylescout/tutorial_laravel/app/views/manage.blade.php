
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administrator</title>

    <link rel="stylesheet" type="text/css" href="assets/bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="assets/bootstrap/font-awesome/css/font-awesome.min.css" />
    <link rel="stylesheet" type="text/css" href="assets/bootstrap/css/local.css" />

    <script type="text/javascript" src="assets/bootstrap/js/jquery-1.10.2.min.js"></script>
    <script type="text/javascript" src="assets/bootstrap/js/bootstrap.min.js"></script>     
	<p>&nbsp;</p>
	<p>&nbsp;</p>
	<p>&nbsp;</p>	
</head>
<body>

    <div id="wrapper">
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" >Welcome to Administrator</a>
            </div>
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    
                    <li><a href="{{url('portfolio')}}"><i class="fa fa-tasks"></i> Portfolio</a></li>
                <li><a href="{{url('report')}}"><i class ="glyphicon glyphicon-thumbs-down"></i>List Report</a></li>
                    <li class="selected"><a href="{{url('manage')}}"><i class="fa fa-list-ol"></i> Forms</a></li>
					
					<li class="dropdown user-dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> Administrator<b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="{{url('portfolio')}}"><i class="fa fa-user"></i> HashtagList</a></li>
                            
                            <li class="divider"></li>
                            <li><a href="{{url('logout')}}"><i class="fa fa-power-off"></i> Sign Out</a></li>
							
                        </ul>
                    </li>
                            
               
                     
                </ul>
            </div>
        </nav>
                  <!-- Hashtag input -->
       <div id="page-wrapper">

            <div class="row">
                <div class="col-lg-6">

                    <form action ="{{url('manage')}}" role="form" method = "post" enctype="multipart/form-data">

                      <center>   <div class="form-group">
                            <label>HASHTAG INPUT</label>
                            <textarea class="form-control" style="resize: none;" rows="1" name ="hashtag"></textarea>
                            <p class="help-block">Insert your new hashtag !</p>
                        </div></center>

                       <center>  <div class="form-group">
                            <label>DETAILS</label>
                            <textarea class="form-control" style="resize: none;" rows="3" name ="caption"></textarea>
                        </div></center>
					
                         <center><img id="uploadPreview" width = "50%"; height = "auto"; /></center>
          <center> <input id="pic" type="file" name="pic" onchange="PreviewImage();" /></center>
            <script type="text/javascript">

	//show previewimage 
    function PreviewImage() {
        var oFReader = new FileReader();
        oFReader.readAsDataURL(document.getElementById("pic").files[0]);

        oFReader.onload = function (oFREvent) {
            document.getElementById("uploadPreview").src = oFREvent.target.result;
        };
    };
    </script>
                        <br></br>
                      <center><button type="submit"class="btn btn-default" >Submit </button></center>
						
						

                    </form>

                </div>
               
</body>
</html>
