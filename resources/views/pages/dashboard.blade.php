<!DOCTYPE html>
<html>
<head>
	<title>Hukcommerce Scroll Progress Bar</title>
	@include('includes.head')
</head>
<body>
	<header>
		@include('includes.header')
	</header>
	<div class="content container-md py-3 mt-3">
		<div class="welcome container-fluid text-center shadow rounded-lg">
			<div class="col-md-8 p-lg-5 mx-auto my-3">
        		<h2 class="display-5 font-weight-normal"><strong>Hello, Aaron!</strong></h2>
        		<p class="lead font-weight-normal"><strong>Welcome to Hukcommerce Scroll Progress Bar</strong></p>
        		<p class="lead font-weight-normal">Have a nice day!</p>
        		<a class="btn btn-lg btn-outline-primary mb-2" href="/customize">Let's Get Started</a>
      		</div>
		</div>
		<div class="row">
			<div class="col-md-8">
				<div class="about-app rounded-lg container shadow border pt-3 mt-2">
					<h5>About App</h5>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris.</p>
					<a class="btn btn-outline-info mb-3" href="/doc">View Documentation</a>
				</div>
				<div class="customize-app rounded-lg container shadow border pt-3 mt-3">
					<h5>Customize</h5>
					<div class="enable-app container d-flex align-items-center">
						<div class="enable-icon p-2">
							<img src="/icons/enable.png" height="32px" width="32px">
						</div>
						<div class="enable-content p-2">
							<p class="mb-0"><strong>Enable App</strong></p>
							<p class="mb-0">Displaying Scroll Progress Bar on your store</p>
						</div>
						<div class="enable-button p-2 ml-auto">
							<button class="btn btn-outline-primary">Enable App</button>
						</div>
					</div>
					<div class="customize-app container d-flex align-items-center mb-2">
						<div class="customize-icon p-2">
							<img src="/icons/controls.png" height="32px" width="32px">
						</div>
						<div class="customize-content p-2">
							<p class="mb-0"><strong>Customize App</strong></p>
							<p class="mb-0">Starting customize your Scroll Progress Bar</p>
						</div>
						<div class="customize-button p-2 ml-auto">
							<a class="btn btn-outline-primary" href="/customize">Customize</a>
						</div>
					</div>
				</div>
				<div class="our-app rounded-lg container shadow border pt-3 mt-3">
					<h5>Our App</h5>
					<div class="ajax-cart-pro container d-flex align-items-center mb-2">
						<div class="ajax-cart-pro-thumbnail p-2">
							<img src="https://cdn.shopify.com/app-store/listing_images/e4f215849b3a37e8e6acc0de27ffca94/icon/COzf/+7Q++8CEAE=.png?height=168&width=168" height="32px" width="32px">
						</div>
						<div class="enable-content p-2">
							<p class="mb-0"><strong>Ajax Cart Pro</strong></p>
							<p class="mb-0">Improves the user experience when purchasing a product</p>
						</div>
						<div class="enable-button p-2 ml-auto">
							<a class="btn btn btn-outline-info" href="https://apps.shopify.com/ajax-cart-pro">Set Up App</a>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="pricing-plan rounded-lg container shadow border pt-3 mt-2">
					<h5>Pricing Plan</h5>
					<p>You are curently on the <strong>FREE</strong> plan</p>
					<a class="btn btn-outline-info mb-3" href="/pricing">See Plan</a>
				</div>
				<div class="contact-us rounded-lg container shadow border pt-3 mt-3">
					<h5>Contact Us</h5>
					<p>We're here to help you! You can get in touch with us via Contact Us</p>
					<a class="btn btn-outline-info mb-3" href="https://www.hukcommerce.com/contacts" target="_blank">Contact Us</a>
				</div>
				<div class="contact-us rounded-lg container shadow border pt-3 mt-3">
					<h5>Connect Online</h5>
					<p>Follow us on social networks</p>
					<div class="social-connect container mb-2">
						<a href="https://www.facebook.com/hukcommerce" target="_blank" class="btn btn-sm" data-toggle="tooltip" data-placement="top" title="Facebook">
              				<i class="fa fa-facebook fa-2x"></i>
              				<span class="hidden-xs"></span>
            			</a>
            			<a href="https://twitter.com/hukcommerce" target="_blank" class="btn btn-sm" data-toggle="tooltip" data-placement="top" title="Twitter">
              				<i class="fa fa-twitter fa-2x"></i>
              				<span class="hidden-xs"></span>
            			</a>
            			<a href="https://www.linkedin.com/company/hukcommerce/" target="_blank" class="btn btn-sm" data-toggle="tooltip" data-placement="top" title="LinkedIn">
              				<i class="fa fa-linkedin fa-2x"></i>
              				<span class="hidden-xs"></span>
            			</a>
						<a href="https://github.com/hukcommerce" target="_blank" class="btn btn-sm" data-toggle="tooltip" data-placement="top" title="GitHub">
              				<i class="fa fa-github fa-2x"></i>
              				<span class="hidden-xs"></span>
            			</a>
            			<a href="https://www.pinterest.com/hukcommerce/" target="_blank" class="btn btn-sm" data-toggle="tooltip" data-placement="top" title="Pinterest">
              				<i class="fa fa-pinterest fa-2x"></i>
              				<span class="hidden-xs"></span>
            			</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<footer>
		@include('includes.footer')
	</footer>
</body>
</html>

<style type="text/css">
	.welcome{
		background-image: url("/images/hukcommerce-bg.png");
		background-repeat: no-repeat; 
  		background-size: 1110px 100%;
	}

	.fa {
	  width: 35px;
	  padding: 3px;
	  text-decoration: none;
	  height: 35px;
	  border-radius: 3px;
	}

	.fa:hover {
	    opacity: 0.7;
	}
	
	.fa-facebook {
	  background: #3B5998;
	  color: white;
	}
	.fa-twitter {
	  background: #55ACEE;
	  color: white;
	}
	.fa-linkedin {
	  background: #007bb5;
	  color: white;
	}
	.fa-pinterest {
	  background: #cb2027;
	  color: white;
	}
	.fa-github {
	  background: #666666;
	  color: white;	
	}
</style>