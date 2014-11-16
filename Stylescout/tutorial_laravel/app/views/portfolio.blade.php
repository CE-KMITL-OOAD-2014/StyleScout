
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio</title>

    <link rel="stylesheet" type="text/css" href="assets/bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="assets/bootstrap/font-awesome/css/font-awesome.min.css" />
    <link rel="stylesheet" type="text/css" href="assets/bootstrap/css/local.css" />

    <script type="text/javascript" src="assets/bootstrap/js/jquery-1.10.2.min.js"></script>
    <script type="text/javascript" src="assets/bootstrap/js/bootstrap.min.js"></script>

    <style>
        img {
            filter: gray; /* IE6-9 */
            -webkit-filter: grayscale(1); /* Google Chrome, Safari 6+ & Opera 15+ */
            -webkit-box-shadow: 0px 2px 6px 2px rgba(0,0,0,0.75);
            -moz-box-shadow: 0px 2px 6px 2px rgba(0,0,0,0.75);
            box-shadow: 0px 2px 6px 2px rgba(0,0,0,0.75);
            margin-bottom: 20px;
        }
        img:hover {
            filter: none; /* IE6-9 */
            -webkit-filter: grayscale(0); /* Google Chrome, Safari 6+ & Opera 15+ */
        }
    </style>
    <style type="text/css">
                    .contain{
                    width:343px;
                    background:Red;
                    }
                    .hard_break{
                        word-wrap: break-word; /* Internet Explorer 5.5+ */
                }
                </style>
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

   <?php $tags = Hashtag::all();  //get all Hashtag
   $row = 3; //variable for break the row
   ?>
	<!--Container-->
        <div class="container">
            <div class="row">
                <div class="text-center">
                    <h1>Completed HashtagList</h1>
                </div>

                 @foreach($tags as $tag) <!-- display all hashtag in admin page -->
                 @if($row%3==0) <!-- break row -->
                <div class="row">
                    @endif
                    <div class="col-md-4">
                        <div class="well">
                            <div>{{$tag->hashtag}}</div> 
                            <img class="thumbnail img-responsive" alt="Bootstrap template" src="{{$tag->pic}}" />
                            <div class = "hard_break">
                            {{$tag->caption}}
                            </div>
                <span class="pull-right"><button><a class="glyphicon glyphicon-trash" href = "deletes/{{$tag->hashtag}}" onCLick="return confirm('Are you sure you want to delete this hashtag?')" ></button></a></span>  
                        </div>

                    </div>
                        @if($row%3 == 2)    <!-- break Row -->
                </div>   
                 @endif
              <?php $row++?>
               @endforeach      
                </div>
           
            </div>
        </div>
    </div>

</body>
</html>
