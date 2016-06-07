
<!DOCTYPE html>
<html>
<head>
	<title>@yield('title')</title>

	<!-- bootstrap CSS-->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

	<!-- Font Awsome cdn-->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

	<!-- external CSS -->
	<link rel="stylesheet" href="/css/main.css"> 

	@yield('top-script')

</head>
<body>
	<nav class="navbar navbar-default">
        <div class="container-fluid">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="/">James' Laravel</a>
          </div>
          <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
              <li><a href="/"><i class="fa fa-home"></i> Home</a></li>
              <li><a href="/posts/"><i class="fa fa-list"></i> Posts</a></li>
              <li><a href="/posts/create/"><i class="fa fa-paint-brush"></i> Create</a></li>
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Recent posts<span class="caret"></span></a>
                <ul class="dropdown-menu">
                  <li><a href="#">Last post</a></li>
                  <li><a href="#">Next most recent post</a></li>
                  <li><a href="#">Next most recent post</a></li>
                  <li><a href="#">Next most recent post</a></li>
                  <li><a href="#">Next most recent post</a></li>
                </ul>
              </li>
            </ul>
            <div class="col-sm-3 col-md-3 pull-right">
        		<form class="navbar-form" role="search">
        		<div class="input-group">
            		<input type="text" class="form-control" placeholder="Search" name="srch-term" id="srch-term">
            	<div class="input-group-btn">
                	<button class="btn btn-default" type="submit"><i class="glyphicon glyphicon-search"></i></button>
            	</div>
        	</div>
        </form>
        </div>
            <ul class="nav navbar-nav navbar-right">
              <li><a href="https://github.com/bitedgeco/blog.dev"><i class="fa fa-github"></i> Github</a></li>
				<li><a href="http://www.bitedge.co/" target="_blank"><i class="fa fa-desktop"></i> Bitedge</li></a>
            </ul>
          </div><!--/.nav-collapse -->
        </div><!--/.container-fluid -->
      </nav>
	<a href="top"></a>
@if (Session::has('successMessage'))
    <div class="alert alert-success">{{{ Session::get('successMessage') }}}</div>
@endif
@if (Session::has('errorMessage'))
    <div class="alert alert-danger">{{{ Session::get('errorMessage') }}}</div>
@endif
	<div class ='container'>
		@yield('content')
	</div>

	<!-- Jquery -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>

	<!-- bootstrap JS -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>

	<!-- external JS -->
	<!-- <script src=".js"></script> -->
</body>
</html>