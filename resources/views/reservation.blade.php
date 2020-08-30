
	
@extends('layouts.app')

@section('content')

	<div id="page">
		<nav class="fh5co-nav" role="navigation">
			<!-- <div class="top-menu"> -->
				<div class="container">
					<div class="row">
						<div class="col-xs-12 text-center logo-wrap">
							<div id="fh5co-logo"><a href="index.html">Tasty<span>.</span></a></div>
						</div>
						<div class="col-xs-12 text-center menu-1 menu-wrap">
							<ul>
								<li><a href="index.html">Home</a></li>
								<li><a href="menu.html">Menu</a></li>
								<li class="has-dropdown">
									<a href="gallery.html">Gallery</a>
									<ul class="dropdown">
										<li><a href="#">Events</a></li>
										<li><a href="#">Food</a></li>
										<li><a href="#">Coffees</a></li>
									</ul>
								</li>
								<li class="active"><a href="reservation.html">Reservation</a></li>
								<li><a href="about.html">About</a></li>
								<li><a href="contact.html">Contact</a></li>
							</ul>
						</div>
					</div>
					
				</div>
			<!-- </div> -->
		</nav>

		<header id="fh5co-header" class="fh5co-cover js-fullheight" role="banner" style="background-image: url(images/hero_1.jpeg);" data-stellar-background-ratio="0.5">
			<div class="overlay"></div>
			<div class="container">
				<div class="row">
					<div class="col-md-12 text-center">
						<div class="display-t js-fullheight">
							<div class="display-tc js-fullheight animate-box" data-animate-effect="fadeIn">
								<h1>Reserved a Table Today!</h1>
								<h2>Brought to you by <a href="http://freehtml5.co/" target="_blank">freehtml5.co</a></h2>
							</div>
						</div>
					</div>
				</div>
			</div>
		</header>
		
		<div id="fh5co-reservation-form" class="fh5co-section">
			<div class="container">
				<div class="row">
					<div class="col-md-12 fh5co-heading animate-box">
						<h2>Reservation</h2>
						<div class="row">
							<div class="col-md-6">
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis ab debitis sit itaque totam, a maiores nihil, nulla magnam porro minima officiis! Doloribus aliquam voluptates corporis et tempora consequuntur ipsam, itaque, nesciunt similique commodi omnis. Ad magni perspiciatis, voluptatum repellat.</p>
							</div>
						</div>
					</div>
					
					<div class="col-md-6 col-md-push-6 col-sm-6 col-sm-push-6">
						<form action="#" id="form-wrap">
							<div class="row form-group">
								<div class="col-md-12">
									<label for="name">Your Name</label>
									<input type="text" class="form-control" id="name">
								</div>
							</div>
							<div class="row form-group">
								<div class="col-md-12">
									<label for="many">How Many People</label>
									<select name="many" id="many" class="form-control custom_select">
										<option value="#">1</option>
										<option value="#">2</option>
										<option value="#">3</option>
										<option value="#">4+</option>
									</select>
								</div>
							</div>
							<div class="row form-group">
								<div class="col-md-12">
									<label for="taskdatetime">When</label>
									<input type="text" name="task-datetime" id="taskdatetime" class="form-control"/>
								</div>
							</div>
							<div class="row form-group">
								<div class="col-md-12">
									<input type="submit" class="btn btn-primary btn-outline btn-lg" value="Submit Form">
								</div>
							</div>

						</form>
					</div>
					
					
				</div>
			</div>
		</div>

		<div id="fh5co-featured-testimony" class="fh5co-section">
			<div class="container">
				<div class="row">
					<div class="col-md-12 fh5co-heading animate-box">
						<h2>Testimony</h2>
						<div class="row">
							<div class="col-md-6">
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis ab debitis sit itaque totam, a maiores nihil, nulla magnam porro minima officiis! Doloribus aliquam voluptates corporis et tempora consequuntur ipsam, itaque, nesciunt similique commodi omnis.</p>
							</div>
						</div>
					</div>

					<div class="col-md-5 animate-box img-to-responsive animate-box" data-animate-effect="fadeInLeft">
							<img src="images/person_1.jpg" alt="">
					</div>
					<div class="col-md-7 animate-box" data-animate-effect="fadeInRight">
						<blockquote>
							<p> &ldquo; Quantum ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis ab debitis sit itaque totam, a maiores nihil, nulla magnam porro minima officiis! Doloribus aliquam voluptates corporis et tempora consequuntur ipsam. &rdquo;</p>
							<p class="author"><cite>&mdash; Jane Smith</cite></p>
						</blockquote>
					</div>
				</div>
			</div>
		</div>	
		
		<div id="fh5co-started" class="fh5co-section animate-box" style="background-image: url(images/hero_1.jpeg);" data-stellar-background-ratio="0.5">
			<div class="overlay"></div>
			<div class="container">
				<div class="row animate-box">
					<div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
						<h2>Book a Table</h2>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae enim quae vitae cupiditate, sequi quam ea id dolor reiciendis consectetur repudiandae. Rem quam, repellendus veniam ipsa fuga maxime odio? Eaque!</p>
						<p><a href="reservation.html" class="btn btn-primary btn-outline">Book Now</a></p>
					</div>
				</div>
			</div>
		</div>

		<footer id="fh5co-footer" role="contentinfo" class="fh5co-section">
			<div class="container">
				<div class="row row-pb-md">
					<div class="col-md-4 fh5co-widget">
						<h4>Tasty</h4>
						<p>Facilis ipsum reprehenderit nemo molestias. Aut cum mollitia reprehenderit. Eos cumque dicta adipisci architecto culpa amet.</p>
					</div>
					<div class="col-md-2 col-md-push-1 fh5co-widget">
						<h4>Links</h4>
						<ul class="fh5co-footer-links">
							<li><a href="#">Home</a></li>
							<li><a href="#">About</a></li>
							<li><a href="#">Menu</a></li>
							<li><a href="#">Gallery</a></li>
						</ul>
					</div>

					<div class="col-md-2 col-md-push-1 fh5co-widget">
						<h4>Categories</h4>
						<ul class="fh5co-footer-links">
							<li><a href="#">Landing Page</a></li>
							<li><a href="#">Real Estate</a></li>
							<li><a href="#">Personal</a></li>
							<li><a href="#">Business</a></li>
							<li><a href="#">e-Commerce</a></li>
						</ul>
					</div>

					<div class="col-md-4 col-md-push-1 fh5co-widget">
						<h4>Contact Information</h4>
						<ul class="fh5co-footer-links">
							<li>198 West 21th Street, <br> Suite 721 New York NY 10016</li>
							<li><a href="tel://1234567920">+ 1235 2355 98</a></li>
							<li><a href="mailto:info@yoursite.com">info@yoursite.com</a></li>
							<li><a href="http://https://freehtml5.co">freehtml5.co</a></li>
						</ul>
					</div>

				</div>

				<div class="row copyright">
					<div class="col-md-12 text-center">
						<p>
							<small class="block">&copy; 2016 Free HTML5. All Rights Reserved.</small> 
							<small class="block">Designed by <a href="http://freehtml5.co/" target="_blank">FreeHTML5.co</a> Demo Images: <a href="http://unsplash.co/" target="_blank">Unsplash</a></small>
						</p>
						<p>
							<ul class="fh5co-social-icons">
								<li><a href="#"><i class="icon-twitter2"></i></a></li>
								<li><a href="#"><i class="icon-facebook2"></i></a></li>
								<li><a href="#"><i class="icon-linkedin2"></i></a></li>
								<li><a href="#"><i class="icon-dribbble2"></i></a></li>
							</ul>
						</p>
					</div>
				</div>

			</div>
		</footer>
	</div>

@endsection