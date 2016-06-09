
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
          @if (Auth::check())
          <li><a href="/posts/create/"><i class="fa fa-paint-brush"></i> Create</a></li>
          @endif
          </li>
        </ul>
      <!-- Logout & Profile Buttons -->
      <!-- These buttons only show if the user is logged IN --> 
      <div class="nav-menu btn-group">
        @if (Auth::check())
        <a href="{{action ('HomeController@logOut') }}" type="button" class="btn btn-default" id="logout-button">Logout</a>
        <a href="/profile" type="button" class="btn btn-default" id="profile-button">Profile</a>
        @else 
        <!-- Login & Signup Buttons -->
        <!-- These only show if the user is logged OUT -->
        <button type="button" class="btn btn-default" id="login-modal-button" data-toggle="modal" data-target=".login-modal">Login</button>
        <button type="button" class="btn btn-default" id="signup-modal-button" data-toggle="modal" data-target=".signup-modal">Sign up</button>
        @endif
      </div>
      <!-- Login modal -->
      <div class="modal fade login-modal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-sm">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
              <form method="POST" action="{{action('HomeController@logIn')}}">
                {{ Form::token() }}
                <div id="email" class="form-group col-sm-10 col-sm-offset-1">
                  <label for="email" class="sr-only">Email</label>
                  <input name="email" id="email" type="text" class="form-control" placeholder="Email">
                </div>
                <div id="password" class="form-group col-sm-10 col-sm-offset-1">
                    <label for="password" class="sr-only">Password</label>
                    <input name="password" id="password" type="password" class="form-control" placeholder="Password">
                </div>
                <div id="emailLoginBtnDiv" class="form-group col-sm-10 col-sm-offset-1 text-center">
                    <button id="login-button" type="submit" class="btn btn-primary btn-block">Click to log in</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
      <!-- Signup modal -->
      <div class="modal fade signup-modal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-sm">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
              <form method="POST" action = "{{{ action('HomeController@storeUser') }}}">  
                  {{ Form::token() }}
                <div id="screen_name" class="form-group col-sm-10 col-sm-offset-1">
                  <label for="screen_name" class="sr-only">Sceen name</label>
                  <input name='screen_name' id="screen_name" type="text" class="form-control" name="title" maxlength="50" placeholder="Sceen name" required>
                </div>
                <div id="email" class="form-group col-sm-10 col-sm-offset-1">
                    <label for="email" class="sr-only">E-mail</label>
                    <input name='email' id="email" type="text" class="form-control" name="title" maxlength="50" placeholder="Your E-mail" required>
                </div>
                <div id="password" class="form-group col-sm-10 col-sm-offset-1">
                  <label for="password" class="sr-only">Password</label>
                  <input name='password' id="password" type="password" class="form-control" name="title" maxlength="20" placeholder="Create a password" required>
                </div>
                <div id="password_confirmation" class="form-group col-sm-10 col-sm-offset-1">
                    <label for="password_confirmation" class="sr-only">Confirm password</label>
                    <input name='password_confirmation' id="password_confirmation" type="password" class="form-control" name="title" maxlength="20" placeholder="Confirm Password" required>
                </div>
                <div id="signup-button" class="form-group col-sm-10 col-sm-offset-1 text-center">
                    <button type="submit" class="btn btn-primary btn-block">Sign up</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
      <div>
        @if (Auth::check())
        Welcome {{{Auth::user()->screen_name}}}
        @endif
      </div>
      <!-- Search bar  -->
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
	<div class ='container' id='content'>
		@yield('content')
	</div>

	<!-- Jquery -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>

	<!-- bootstrap JS -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>

	<!-- external JS -->
	<!-- <script src=".js"></script> -->

    <div id="push"></div>
    </div>

  <footer class="panel-footer">
    <div class="container">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="https://github.com/bitedgeco/blog.dev"><i class="fa fa-github"></i> Github</a></li>
        <li><a href="http://www.bitedge.co/" target="_blank"><i class="fa fa-desktop"></i> Bitedge</li></a>
      </ul>
    </div>
  </footer>
</body>
</html>