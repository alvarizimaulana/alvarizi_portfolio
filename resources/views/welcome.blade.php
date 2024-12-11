<!DOCTYPE html>
<html lang="en">
  <head>
    <title>portfolio alpa</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Barlow+Condensed:900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('template_fe/css/open-iconic-bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('template_fe/css/animate.css') }}">
    
    <link rel="stylesheet" href="{{ asset('template_fe/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('template_fe/css/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ asset('template_fe/css/magnific-popup.css') }}">

    <link rel="stylesheet" href="{{ asset('template_fe/css/aos.css') }}">

    <link rel="stylesheet" href="{{ asset('template_fe/css/ionicons.min.css') }}">

    <link rel="stylesheet" href="{{ asset('template_fe/css/bootstrap-datepicker.css') }}">
    <link rel="stylesheet" href="{{ asset('template_fe/css/jquery.timepicker.css') }}">

    
    <link rel="stylesheet" href="{{ asset('template_fe/css/flaticon.css') }}">
    <link rel="stylesheet" href="{{ asset('template_fe/css/icomoon.css') }}">
    <link rel="stylesheet" href="{{ asset('template_fe/css/style.css') }}">
  </head>
  <body>
	  <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container">
	      <a class="navbar-brand" href="index.html">My Portfolio</a>
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>

		  @if (Route::has('login'))
  <div class="collapse navbar-collapse" id="ftco-nav">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item"><a href="#about" class="nav-link">About</a></li>
      <li class="nav-item"><a href="#skil" class="nav-link">Skil</a></li>
      <li class="nav-item"><a href="#project" class="nav-link">Project</a></li>
      <li class="nav-item"><a href="#certificate" class="nav-link">Certificate</a></li>
      <li class="nav-item"><a href="#contact" class="nav-link">Contact</a></li>
      @auth
        <li class="nav-item"><a href="{{ url('/dashboard') }}" class="nav-link">Dashboard</a></li>
      @else
        <li class="nav-item"><a href="{{ route('login') }}" class="nav-link">Log in</a></li>
        @if (Route::has('register'))
          <li class="nav-item"><a href="{{ route('register') }}" class="nav-link">Register</a></li>
        @endif
      @endauth
    </ul>
  </div>
@endif

	    </div>
	  </nav>
    <!-- END nav -->
    
    <section id="home-section" class="hero">
    	<h1 class="vr text-center">ALVA</h1>
		  <div class="js-fullheight home-wrap d-flex">
		  	<div class="half order-md-last"></div>
		  	<div class="half">
			  	<div class="home-slider owl-carousel">
			      <div class="slider-item js-fullheight">
			      	<div class="overlay"></div>
			        <div class="container-fluid p-0">
			          <div class="row d-md-flex no-gutters slider-text js-fullheight align-items-center justify-content-end" data-scrollax-parent="true">
			          	<div class="one-third img js-fullheight" style="background-image:url(template_fe/images/ALPA5.jpg);">
			          	</div>
			        	</div>
			        </div>
			      </div>

			      <div class="slider-item js-fullheight">
			      	<div class="overlay"></div>
			        <div class="container-fluid p-0">
			          <div class="row d-flex no-gutters slider-text js-fullheight align-items-center justify-content-end" data-scrollax-parent="true">
			          	<div class="one-third img js-fullheight" style="background-image:url(template_fe/images/ALPA6.jpg);">
			          		<div class="overlay"></div>
			          	</div>
			        	</div>
			        </div>
			      </div>
			    </div>
			  </div>
	    </div>
    </section>

	@foreach($about as $about)
    <section class="ftco-section ftco-intro" id="about">
    	<div class="container">
    		<div class="row justify-content-end">
    			<div class="col-md-8">
					<h2><span>{{ $about->name }}</span>,XI PPLG 3</h2>
    				<p>{{ $about->description }}</p>
					<h4>Gender: {{ $about->gender }}</h4>
					<h4>Job: {{ $about->pekerjaan }}</h4>
    			</div>
    		</div>
    	</div>
    </section>
	@endforeach

    <section class="services-section py-5 py-md-0" id="skil"> 
		<div class="container">
			<div class="row no-gutters d-flex">
		  @foreach($skil as $skil)
          <div class="col-md-6 col-lg-3 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services d-block">
              <!-- <div class="icon"><span class="flaticon-layers"></span></div> -->
              <div class="media-body">
                <h3 class="heading mb-3">{{ $skil->title }}</h3>
                <p>	{{ $skil->description }}</p>
              </div>
            </div>      
          </div>
		  @endforeach
        </div>
      </div>
    </section>


    <section class="ftco-section ftco-portfolio" id="project"> 
    	<div class="container-fluid">
    		<div class="row justify-content-center pb-3">
          <div class="col-md-12 mb-5 heading-section text-center ftco-animate">
            <h2 class="mb-5">Project &amp; <span>Alvarizi</span></h2>
          </div>
        </div>
    	</div>

    	<div class="container">
		@foreach($project as $project)
  <div class="row no-gutters">
    <div class="col-md-12 portfolio-wrap">
      <div class="row no-gutters align-items-center">
        <div class="col-md-5 img js-fullheight" style="
            background-image: url('{{ $project->photo ? asset('storage/' . $project->photo) : asset('storage/photo/default.jpg') }}'); 
            background-position: center; 
            background-size: cover;
            height: 100%; 
            aspect-ratio: 1 / 1;
            max-height: 300px;
          ">
        </div>
        <div class="col-md-7">
          <div class="text pt-5 pl-0 pl-lg-5 pl-md-4 ftco-animate">
            <div class="px-4 px-lg-4">
              <div class="desc">
                <div class="top">
                  <span class="subheading">{{ $project->date }}</span>
                  <h2 class="mb-4"><a href="work.html">{{ $project->name }}</a></h2>
                </div>
                <div class="absolute">
                  <p>{{ $project->description }}</p>
                  <p><a href="{{ $project->link }}" class="custom-btn">View Portfolio</a></p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endforeach

    	</div>
    </section>

    @foreach($certificate as $certificate)
    <section class="ftco-section ftco-portfolio" id="certificate">
    	<div class="container-fluid px-0 portfolio-entry">
    <div class="row no-gutters d-xl-flex justify-content-end text-wrapper">
        <div class="one-half half-text d-flex justify-content-end align-items-center ftco-animate">
            <div class="text align-items-center d-flex">
                <div class="desc pt-5 pl-4 pr-4 pt-lg-0 pl-lg-5 pl-xl-0 pr-xl-0">
                    <div class="top">
                        <span class="subheading">My certificate</span>
                        <h2 class="mb-4">
                            <a href="work.html">{{ $certificate->name }}</a>
                        </h2>
                    </div>
                    <div class="absolute">
                        <p>{{ $certificate->description }}</p>
                        <p>{{ $certificate->issued_by }}</p>
                        <p>{{ $certificate->issued_at }}</p>
                        @if ($certificate->file)
                            <p><a href="{{ asset('storage/certificates/' . $certificate->file) }}" class="custom-btn">View Certificate</a></p>
                        @else
                            <span>No file uploaded</span>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
  </div>
</section>
@endforeach

    <footer class="ftco-footer ftco-section" >
      <div class="container">
        <div class="row mb-5">
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">About Me</h2>
              <p>saya lahir di bogor,08 Desember 2007,Seorang murid SMKN 1 CIOMAS Jurusan PPLG</p>
              <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-5">
                <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                <li class="ftco-animate"><a href="https://www.instagram.com/maulanalpa?igsh=MThkbTZrNW5iajRp"><span class="icon-instagram"></span></a></li>
              </ul>
            </div>
          </div>
          <div class="col-md">
            <div class="ftco-footer-widget mb-4 ml-md-5">
              <h2 class="ftco-heading-2">Information</h2>
              <ul class="list-unstyled">
                <li><a href="#" class="py-2 d-block">Portfolio</a></li>
                <li><a href="#" class="py-2 d-block">Certificate</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md">
             <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Links</h2>
              <ul class="list-unstyled">
                <li><a href="#about" class="py-2 d-block">About</a></li>
                <li><a href="#project" class="py-2 d-block">Project</a></li>
                <li><a href="#certificate" class="py-2 d-block">Certificate</a></li>
                <li><a href="#contact" class="py-2 d-block">Contact</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md">
            <div class="ftco-footer-widget mb-4" id="contact">
            	<h2 class="ftco-heading-2">Have a Questions?</h2>
            	<div class="block-23 mb-3">
	              <ul>
					@foreach($contact as $contact)
	                <li><span class="icon icon-user"></span><span class="text">{{ $contact->name }}</span></li>
	                <li><a href="#"><span class="icon icon-phone"></span><span class="text">{{ $contact->phone }}</span></a></li>
	                <li><a href="#"><span class="icon icon-envelope"></span><span class="text">{{ $contact->email }}</span></a></li>
	                <li><a href="https://www.instagram.com/maulanalpa?igsh=MThkbTZrNW5iajRp"><span class="icon icon-instagram"></span><span class="text">{{ $contact->sosial_media }}</span></a></li>
					@endforeach
	              </ul>
	            </div>  
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 text-center">

            <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
  
  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
          </div>
        </div>
      </div>
    </footer>
    
  

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  <script src="{{ asset('template_fe/js/jquery.min.js') }}"></script>
  <script src="{{ asset('template_fe/js/jquery-migrate-3.0.1.min.js') }}"></script>
  <script src="{{ asset('template_fe/js/popper.min.js') }}"></script>
  <script src="{{ asset('template_fe/js/bootstrap.min.js') }}"></script>
  <script src="{{ asset('template_fe/js/jquery.easing.1.3.js') }}"></script>
  <script src="{{ asset('template_fe/js/jquery.waypoints.min.js') }}"></script>
  <script src="{{ asset('template_fe/js/jquery.stellar.min.js') }}"></script>
  <script src="{{ asset('template_fe/js/owl.carousel.min.js') }}"></script>
  <script src="{{ asset('template_fe/js/jquery.magnific-popup.min.js') }}"></script>
  <script src="{{ asset('template_fe/js/aos.js') }}"></script>
  <script src="{{ asset('template_fe/js/jquery.animateNumber.min.js') }}"></script>
  <script src="{{ asset('template_fe/js/scrollax.min.js') }}"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="{{ asset('template_fe/js/google-map.js') }}"></script>
  <script src="{{ asset('template_fe/js/main.js') }}"></script>
    
  </body>
</html>