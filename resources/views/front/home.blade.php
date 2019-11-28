@extends('front.layout.master')
@section('content')
	<!-- heroslider --> 
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
      <li data-target="#myCarousel" data-slide-to="3"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
      <div class="item active">
        <img src="{{url('frontend/img/car3.jpg')}}" alt="" style="width:100%;">
      </div>
      <div class="item">
        <img src="{{url('frontend/img/car1.jpg')}}" alt="" style="width:100%;">
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
	<!-- /heroslider -->
	<!-- about futshall -->
	<section class="section-padding">
		<div class="container">
			<div class="row">
				<div class="col-md-8">
					<h1 class="heading">About Futshall</h1>
					<p> Futsal is played between two teams of five players each, one of whom is the goalkeeper. Unlimited substitutions are permitted. Unlike some other forms of indoor football, the game is played on a hard court surface delimited by lines; walls or boards are not used. Futsal is also played with a smaller ball with less bounce than a regular football due to the surface of the field. The surface, ball and rules create an emphasis on improvisation, creativity, and technique as well as ball control and passing in small spaces.</p>
					<a href="{{url('pages/aboutfutshall')}}"><button class="btn primary_btn">Read more</button></a>
				</div>
				<div class="col-md-4">
					<img src="{{url('frontend/img/futsal.jpg')}}" alt="" class="img-responsive">
				</div>
			</div>
		</div>
	</section>
	<!-- /about -->
	


	<!-- contact -->
	<!-- <section class="section-padding" id="contact">
		<div class="container">
			<h1 class="heading">Contact</h1>
			<div class="row">
				<div class="col-md-6">
					<form action="">
						<div class="form-group">
							<label>Full Name</label>
							<input type="text" class="form-control">
						</div>
						<div class="form-group">
							<label>Email</label>
							<input type="email" class="form-control">
						</div>
						<div class="form-group">
							<label>Phone No.</label>
							<input type="number" class="form-control">
						</div>
						<div class="form-group">
							<label>Subject</label>
							<input type="text" class="form-control">
						</div>
						<div class="form-group">
							<label>Message</label>
							<textarea class="form-control" rows="6"></textarea>
						</div>
						<input type="submit" class="btn primary_btn" name="" value="SEND">
					</form>
				</div>
				
			</div>
		</div>
	</section> -->
	<!-- /contact -->
@endsection
