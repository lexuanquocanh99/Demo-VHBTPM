<!DOCTYPE html>
<html>
<head>
	<title>Hukcommerce Scroll Progress Bar Pricing</title>
	@include('includes.head')
</head>
<body>
	<header>
		@include('includes.header')
	</header>
	<div class="content container-md">
<section class="pricing py-5">
  <div class="container">
    <div class="row">
      <!-- Free Plan -->
      <div class="free-plan col-lg-4 mx-auto">
        <div class="free-plan card shadow rounded-lg">
          <div class="free-plan card-body">
            <h5 class="card-title text-muted text-uppercase text-center">Free</h5>
            <h6 class="card-price text-center">$99<span class="period">/month</span></h6>
            <hr>
            <ul class="fa-ul">
              <li><span class="fa-li"><i class="fa fa-check" aria-hidden="true"></i></span>Change Scroll Progress Bar Position</li>
              <li><span class="fa-li"><i class="fa fa-check" aria-hidden="true"></i></span>Change Unlimited Color Options</li>
              <li><span class="fa-li"><i class="fa fa-check" aria-hidden="true"></i></span>Adjust Scroll Progress Bar Size</li>
              <li><span class="fa-li"><i class="fa fa-check" aria-hidden="true"></i></span>Show Scroll Progress Bar On Option Pages</li>
              <li><span class="fa-li"><i class="fa fa-check" aria-hidden="true"></i></span>Customer Support</li>
            </ul>
            <button type="button" class="btn btn-block btn-primary text-uppercase rounded-lg" disabled>ACTIVATED</button>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
	</div>
	<footer>
		@include('includes.footer')
	</footer>
</body>
</html>

<style type="text/css">

.pricing .card {
  border: none;
  transition: all 0.2s;
}

.pricing hr {
  margin: 1.5rem 0;
}

.pricing .card-title {
  margin: 0.5rem 0;
  font-size: 0.9rem;
  letter-spacing: .1rem;
  font-weight: bold;
}

.pricing .card-price {
  font-size: 3rem;
  margin: 0;
}

.pricing .card-price .period {
  font-size: 0.8rem;
}

.pricing ul li {
  margin-bottom: 1rem;
}

.pricing .text-muted {
  opacity: 0.7;
}

.pricing .btn {
  font-size: 80%;
  letter-spacing: .1rem;
  font-weight: bold;
  padding: 1rem;
  opacity: 0.7;
  transition: all 0.2s;
}
</style>