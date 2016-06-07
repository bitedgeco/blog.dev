@extends('layouts.master')

@section('title')
James Canning Portfoliow
@stop

@section('top-script')
<!-- external CSS -->
<link rel="stylesheet" href="/css/portfolio.css">
@stop

@section('content')


		<div class="top_bar">
			<ul>
				<li><i class="fa fa-phone"></i>+201 3642 543</li>
				<li><i class="fa fa-envelope-o"></i><a href="mailto:james.canning@gmail.com" target="top"> james.canning@gmail.com</a></li>
				<li><i class="fa fa-skype"></i> james.canning</li>
				<li><a href="https://github.com/bitedgeco" target="_blank"><i class="fa fa-github"></i> bitedgeco</a></li>
				<li><a href="https://ph.linkedin.com/in/jamescanningbitcoin" target="_blank"><i class="fa fa-linkedin"> Linkedin</i></a></li>
			</ul>
		</div>
		<div class="portrait"> 
			<img src="/img/james_canning.jpg" height="550";>
		</div>
		<h1 class="name">James Canning</h1>
		<h1 class="job">Web Developer</h1>
		<div class="col-md-4">
			<h2>Bootstrap</h2> 
			<a href="http://codeup.dev/bootstrap.html" target="_blank"><img class="img-circle bootstrap-img" src="img/bootstrap_screenshot.png"></a>
			<p><a href="https://github.com/bitedgeco" target="_blank">view the code</a></p>
			<hr>
		</div>
		<div class="col-md-4">
			<h2>Wordpress</h2> 
			<a href="http://www.bitedge.co" target="_blank"><img class=" bitedge-img" src="img/bitedge_large.png"></a>
			<hr>
		</div>
		<div class="col-md-4">
			<h2>JavaScript</h2> 
			<a href="http://codeup.dev/bootstrap.html" target="_blank"><img class="img-circle bootstrap-img" src="img/bootstrap_screenshot.png"></a>
			<p><a href="https://github.com/bitedgeco" target="_blank">view the code</a></p>
		<hr>
		</div>
		<div class="col-md-4">
			<h2>JQuery</h2> 
			<a href="http://codeup.dev/bootstrap.html" target="_blank"><img class="img-circle bootstrap-img" src="img/bootstrap_screenshot.png"></a>
			<p><a href="https://github.com/bitedgeco" target="_blank">view the code</a></p>
			<hr>
		</div>
		<div class="col-md-4">
			<h2>PHP</h2> 
			<a href="http://codeup.dev/bootstrap.html" target="_blank"><img class="img-circle bootstrap-img" src="img/bootstrap_screenshot.png"></a>
			<p><a href="https://github.com/bitedgeco" target="_blank">view the code</a></p>
			<hr>
		</div>
		<div class="col-md-4">
			<h2>APIs</h2> 
			<a href="http://codeup.dev/bootstrap.html" target="_blank"><img class="img-circle bootstrap-img" src="img/bootstrap_screenshot.png"></a>
			<p><a href="https://github.com/bitedgeco" target="_blank">view the code</a></p>
		<hr>
		</div>
		<p class="cv_link"><a href="{{{ action('HomeController@showResume') }}}" target="_blank">See James' CV</a></p>
		<hr>
		<div class="container">
		    <div class="row">
		        <div class="col-md-12">
		            <div class="well well-sm">
		                <form class="form-horizontal" method="post">
		                    <fieldset>
		                        <legend class="contact-header">Contact James</legend>
		                        <div class="form-group">
		                            <span class="col-md-1 col-md-offset-2 text-right"><i class="fa fa-user bigicon"></i></span>
		                            <div class="col-md-8">
		                                <input id="name" name="name" type="text" placeholder="Name" class="form-control">
		                            </div>
		                        </div>
		                        <div class="form-group">
		                            <span class="col-md-1 col-md-offset-2 text-right"><i class="fa fa-envelope-o bigicon"></i></span>
		                            <div class="col-md-8">
		                                <input id="email" name="email" type="text" placeholder="Email Address" class="form-control">
		                            </div>
		                        </div>

		                        <div class="form-group">
		                            <span class="col-md-1 col-md-offset-2 text-right"><i class="fa fa-phone-square bigicon"></i></span>
		                            <div class="col-md-8">
		                                <input id="phone" name="phone" type="text" placeholder="Phone" class="form-control">
		                            </div>
		                        </div>

		                        <div class="form-group">
		                            <span class="col-md-1 col-md-offset-2 text-right"><i class="fa fa-pencil-square-o bigicon"></i></span>
		                            <div class="col-md-8">
		                                <textarea class="form-control" id="message" name="message" placeholder="Enter your massage here." rows="7"></textarea>
		                            </div>
		                        </div>

		                        <div class="form-group">
		                            <div class="col-md-8 col-md-offset-3">
		                                <button type="submit" class="btn btn-primary btn-lg">Submit</button>
		                            </div>
		                        </div>
		                    </fieldset>
		                </form>
		            </div>
		        </div>
		    </div>
		</div>
@stop