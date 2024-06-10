<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Astro</title>
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  <link rel="stylesheet" href="sty.css">
<link rel="stylesheet" href="css/bootstrap.min.css">
 <script src="https://kit.fontawesome.com/15bc5dc973.js" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
   
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    
<!-- Font Awesome 5 CSS -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-circle-progress/1.2.2/circle-progress.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>

</head>



	<body>
	

<!-- header -->
<section style="background-color:#0f0d1d;">
<div class="d-flex justify-content-center">
		<div class="container header-bottom">
		<div class="row">
			<div class="col-lg-6 col-md-3 col-6">
				<div class="d-flex">
					<div class="ms-2">
					<i class="fa fa-phone text-white" aria-hidden="true" style="font-size: 1.5rem;"></i>
					
				   </div>
				   <div class="ms-3">
					<small class="sm-none text-white">+91 8081426940</small>
				  </div>


				  <div class="ms-4">
                  		<i class="fa fa-home text-white" aria-hidden="true" style="font-size: 1.5rem;" id="fom"></i>
                  	</div>

                  	<div id="fom">
                  		<small class=" ms-2 text-white">
                  			1243 , Kalyanpur Kanpur (U.P)
                  		</small>
                  	</div>
				</div>
                  
                  

			</div>
			<div class="col-lg-6 col-md-9 col-6">
				<div class="d-flex">
				    <div class="ms-auto">
				    	<button class="btn text-white" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal1" style="border-radius:22px;font-size:1rem;background:#e54b4b;">
				    	Login/Register</button>

				    	<div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <!--<div class="modal-header">
        
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>-->
      <div class="modal-body bg-dark">
        <form>

        	<div class="mb-3">
    <label for="exampleInputEmail1" class="form-label text-white">Name</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    
  </div>


        	<div class="mb-3">
    <label for="exampleInputEmail1" class="form-label text-white">Contact</label>
    <input type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label text-white">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label text-white">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1">
  </div>
  
  <button type="submit" class="btn w-100 text-white" style="background:#75429c;font-weight: bold;">SUBMIT FORM</button>
</form>
      </div>
      
    </div>
  </div>
</div>




				    </div>
				    <div>
				    	<div class="ms-3 mt-2">
				    	<i class="fa fa-search text-white" aria-hidden="true" style="font-size: 1.2rem;"></i>
				    </div>
				    </div>
				</div>
			</div>
		</div>
	</div>
</div>

<nav class="navbar navbar-expand-lg headerfixed border-top mt-0">
  <div class="container">
    <a class="navbar-brand" href="#"><img src="gallery/lg1.png" style="width:4.3rem;"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" style="background:white;">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item">
          <a class="nav-link text-white" href="">Home</a>
        </li>
        

        <li class="nav-item dropdown">
          <a class="nav-link text-white" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Services
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="#">Family Relationship Consultancy</a></li>
            <li><a class="dropdown-item" href="#">Health Consultancy</a></li>
            <li><a class="dropdown-item" href="#">Know your life partner</a></li>
            <li><a class="dropdown-item" href="#">Lifetime reports</a></li>
            <li><a class="dropdown-item" href="#">Love Analysis</a></li>
            <li><a class="dropdown-item" href="#">Personal appointment consultancy</a></li>
            <li><a class="dropdown-item" href="#">Tantra </a></li>
             <li><a class="dropdown-item" href="#">Vastu Consultancy</a></li>

          </ul>
        </li>
        
        <li class="nav-item">
          <a class="nav-link text-white" href="rudra.php">Online Store</a>
        </li>
       
        <li class="nav-item dropdown">
          <a class="nav-link text-white" href="##" id="navbarDropdown1" role="button" data-bs-toggle="dropdown" aria-expanded="false">Yagya Pooja</a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown1">
            <li><a class="dropdown-item" href="#">Family Relationship Consultancy</a></li>
            <li><a class="dropdown-item" href="#">Health Consultancy</a></li>
            <li><a class="dropdown-item" href="#">Know your life partner</a></li>
            <li><a class="dropdown-item" href="#">Lifetime reports</a></li>
            <li><a class="dropdown-item" href="#">Love Analysis</a></li>
            <li><a class="dropdown-item" href="#">Personal appointment consultancy</a></li>
            <li><a class="dropdown-item" href="#">Tantra </a></li>
             <li><a class="dropdown-item" href="#">Vastu Consultancy</a></li>

          </ul>

        </li>

        <li class="nav-item">
          <a class="nav-link text-white" href="##">Blogs</a>
        </li>

        <li class="nav-item">
          <a class="nav-link text-white" href="##">About Us</a>
        </li>

        <li class="nav-item">
          <a class="nav-link text-white" href="##">Contact</a>
        </li>

        <li>
          <div class="d-flex">
            <div class="ms-3">
              <a class="nav-link text-white" href="##">
            <i class="fa-regular fa-heart text-white" style="font-size:28px;"></i>
          </a>
            </div>

            <div>
              <a class="nav-link text-white" href="##">
            <img src="  https://kamleshyadav.com/html/astrology/version-3/assets/images/svg/cart.svg" style="width:2rem;">
          </a>
            </div>
          </div>
        </li>

      </ul>
      <div>
      	
         
         <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <!--<div class="modal-header bg-dark">
        
        <button type="button" class="btn-close text" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>-->
      <div class="modal-body bg-dark">
        <div class="row">
  <div class="col">
    <input type="text" class="form-control shadow-none" placeholder="First name" aria-label="First name">
  </div>
  <div class="col">
    <input type="text" class="form-control shadow-none" placeholder="Last name" aria-label="Last name">
  </div>
</div>

 <div class="col-12 mt-4">
    <input type="date" class="form-control shadow-none" id="inputAddress" placeholder="Date Of Birth">
  </div>

 <div class="col-12 mt-4">
    <input type="number" class="form-control shadow-none" id="inputAddress" placeholder="Contact">
  </div>

  <div class="col-12 mt-4">
    <input type="text" class="form-control shadow-none" id="inputAddress" placeholder="Email">
  </div>

  <div class=" mt-4">
	<button type="submit" class="btn text-white w-100" style="background:#75429c;font-weight: bold;">SUBMIT FORM</button>
   </div>

 </div>
      
    </div>
  </div>
</div>

      	

      </div>
    </div>
  </div>
</nav>
</section>

<section class="slide1">
  <div class="d-flex justify-content-between">
    <div class="container">
      <div class="row mx-auto">
        <div class="col-lg-6 col-md-6 col-sm-12">
          <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner mt-4">
    <div class="carousel-item active" style="font-family: 'Anton', sans-serif;">
      <h3 class="text-white mt-3">Whats you sign ?</h3>
      <h1 class="text-white display-2" style="font-family:'Philosopher', sans-serif;font-weight: bold;">Read Your Daily <br> Horoscope Today</h1>
      <p class="text-white mt-4" style="text-align:justify;line-height: 30px;">Communicate with your stars to bring prosperity to Earth! Learn how astrology changes your routine life into a cosmic mission with the greatest astrologer of this century, Acharya Satish Awasthi.</p>
      <div class="mt-4">
        <button class="btn text-white btn-outline-secondary ml-auto" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal" style="border-radius:22px;font-size:1.2rem;" id="blink">APPOINTMENT</button>
      </div>
    </div>
    <div class="carousel-item" style="font-family: 'FedraSansStd-medium',sans-serif;">
     <h3 class="text-white mt-3">Trust our experience</h3>
      <h1 class="text-white display-2" style="font-family:'Philosopher', sans-serif;font-weight: bold;">Read Your Daily <br> Horoscope Today</h1>
      <p class="text-white mt-4" style="text-align:justify;line-height: 30px;">Communicate with your stars to bring prosperity to Earth! Learn how astrology changes your routine life into a cosmic mission with the greatest astrologer of this century, Acharya Satish Awasthi.</p>
      <div class="mt-4">
        <button class="btn text-white btn-outline-secondary ml-auto" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal" style="border-radius:22px;font-size:1.2rem;" id="blink">APPOINTMENT</button>
      </div>
    </div>
    <div class="carousel-item" style="font-family: 'FedraSansStd-medium',sans-serif;">
      <h3 class="text-white mt-3">Whats you sign ?</h3>
      <h1 class="text-white display-2" style="font-family:;font-weight: bold;">Read Your Daily <br> Horoscope Today</h1>
      <p class="text-white mt-4" style="text-align:justify;line-height: 30px;">Communicate with your stars to bring prosperity to Earth! Learn how astrology changes your routine life into a cosmic mission with the greatest astrologer of this century, Acharya Satish Awasthi.</p>
      <div class="mt-4">
        <button class="btn text-white btn-outline-secondary ml-auto" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal" style="border-radius:22px;font-size:1.2rem;" id="blink">APPOINTMENT</button>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
        </div>

        <div class="col-lg-6 col-md-6 col-sm-12">
          <div class="text-center">
            <img src="https://kamleshyadav.com/html/astrology/version-3/assets/images/hand_bg.png" class="as_banner_img1" style="width:100%;height: 100%;">
            <img src="https://kamleshyadav.com/html/astrology/version-3/assets/images/hand.png" class="as_banner_img">
          </div>
        </div>

      </div>
    </div>
  </div>
</section>

<div class="d-flex align-item-center mt-4 cardee ">
	<div class="container sect mt-4">
		<h1 class="display-3 fw-bold  text-center" data-aos="zoom-in-up"  data-aos-duration="1500">Sectors <span style="color:#e54b4b;text-underline-offset: 4px;">we work</span>  in</h1>
		<div class="row mt-4 mx-auto" data-aos="zoom-in-up"  data-aos-duration="1500">
			<div class="col-lg-4 col-md-4 col-sm-12 mt-3" data-aos="fade-right">
				<div class="card shadow-lg p-2">
					<div class="text-center">
						<div class="box-circle mx-auto">
	                      <div>
		                  <img src="https://lovewithastrology.com/wp-content/uploads/2021/07/sodder-slid-img-1.png">
	                     </div>
                    </div>
						
					</div>
					<div class="text-center mt-3">
						<h5 class="">Family Relationship</h5>
					</div>
					<p class="mt-2" style="text-align: justify;">
							Do you know there is a really smart way to ensure your family’s prosperity? Acharya Satish Awasthi brings the magic of psychic healing to add life to your family relationships.
						</p>
            <div class="text-center">
              <button class="btn text-white" type="button" style="border-radius:22px;font-size:1rem;background:#e54b4b;font-weight: bold;">
              Read More</button>
            </div>
				</div>
			</div>

			<div class="col-lg-4 col-md-4 col-sm-12 mt-3">
				<div class="card shadow-lg p-2">
					<div class="">
						<div class="box-circle mx-auto">
	                      <div>
		                  <img src="https://lovewithastrology.com/wp-content/uploads/2021/07/sodder-slid-img-2.png">
	                     </div>
                    </div>
					
					
					</div>
					<div class="text-center mt-3">
						<h5 class="">Life Partner</h5>
					</div>
					<p class="mt-2" style="text-align: justify;">
							Do you know there is a really smart way to ensure your family’s prosperity? Acharya Satish Awasthi brings the magic of psychic healing to add life to your family relationships.
						</p>
            
            <div class="text-center">
              <button class="btn text-white" type="button" style="border-radius:22px;font-size:1rem;background:#e54b4b;font-weight: bold;">
              Read More</button>
            </div>
				</div>
			</div>

			<div class="col-lg-4 col-md-4 col-sm-12 mt-3" data-aos="fade-left"  data-aos-duration="1500">
				<div class="card shadow-lg p-2">
					<div class="text-center ">
						<div class="box-circle mx-auto">
	                      <div>
		                  <img src="https://lovewithastrology.com/wp-content/uploads/2021/07/sodder-slid-img-3.png">
	                     </div>
                    </div>
						<h5 class="mt-3">Love Analysis</h5>
					</div>
					<p class="mt-2" style="text-align: justify;">
							Do you know there is a really smart way to ensure your family’s prosperity? Acharya Satish Awasthi brings the magic of psychic healing to add life to your family relationships.
						</p>
            <div class="text-center">
              <button class="btn text-white" type="button" style="border-radius:22px;font-size:1rem;background:#e54b4b;font-weight: bold;">
              Read More</button>
            </div>
				</div>
			</div>


		</div>
	</div>
</div>





</div>





<section class="owl mt-4">
  <div class="mt-4">
<div class="owl-carousel owl-theme mt-3" >
    <div class="item" style="width:5rem;" >
      <img src="https://i0.wp.com/astroarunpandit.org/wp-content/uploads/elementor/thumbs/CM6I85g6_400x400-qnis27a3t3h066ay1u4qyeng8xtis3p7zq8rtlq0w0.png?w=640&ssl=1" class="rounded-circle"  style="width:100%;height:100%;">
    </div>

    <div class="item" style="width:5rem;">
      <img src="https://i0.wp.com/astroarunpandit.org/wp-content/uploads/elementor/thumbs/Aaj-Tak-2-qnis1wxvpx2umgpyq7nuoz9dpp8hffk6ab2fjk5csg.png?w=640&ssl=1" style="width: 100%;height: 100%;">
    </div>

    

    <div class="item " style="width:5rem;">
      <img src="https://i0.wp.com/astroarunpandit.org/wp-content/uploads/elementor/thumbs/Deccan_Herald_logo-qnis27a3t3h066ay1u4qyeng8xtis3p7zq8rtlq0w0.png?w=640&ssl=1" class="rounded-circle" style="width:100%;height: 100%;">
    </div>

    <div class="item" style="width:5rem;">
      <img src="https://i0.wp.com/astroarunpandit.org/wp-content/uploads/elementor/thumbs/ABP-Hindi-qnis1xvpwr44y2olkq2h9h0ub33un4nwmfpx0u3ym8.png?w=640&ssl=1"  class="rounded-circle" style="width: 100%;height:100%;">
    </div>

    <div class="item " style="width:5rem;">
      <img src="https://i0.wp.com/astroarunpandit.org/wp-content/uploads/elementor/thumbs/GNT-Logo1_10-qnis2ji09xxqd3t72hewctkfyy5ak61qdeq3277wn4.png?w=640&ssl=1" class="rounded-circle">
    </div>

    <div class="item " style="width:5rem;">
      <img src="https://i0.wp.com/astroarunpandit.org/wp-content/uploads/elementor/thumbs/news18_1-removebg-preview-1-qnis2swe6aall7fjjlh61r71wsuyp531qp8xuytyww.png?w=640&ssl=1">
    </div>

    

    
</div>
</div>
</section>

<!-- products start-->

<!-- Team -->
<section  class=" owl mt-4">
    <div class="container">
        <h5 class="display-3 fw-bold text-center" data-aos="zoom-in-up"  data-aos-duration="1500">Top <span style="color:#e54b4b;">Selling</span> Services</h5>
        <div class="row mt-4 mx-auto">
            
            <div class="col-xs-12 col-sm-6 col-md-4 " data-aos="fade-right"  data-aos-duration="1500">
                <div class="image-flip" ontouchstart="this.classList.toggle('hover');">
                    <div class="mainflip">
                        <div class="frontside">
                            <div class="card">
                                <div class="card-body text-center">
                                    <img class="img-fluid" src="gallery/gaurishankar.jpg" alt="card image">
                                    <h4 class="card-title">Gaurishankar Rudraksha</h4>
                                    <p class="card-text text-white">₹ 9000.00</p>
                                    <a href="#" class="btn btn-danger btn-lgs">Add to cart</a>
                                </div>
                            </div>
                        </div>
                        <div class="backside">
                            <div class="card">
                                <div class="card-body text-center mt-4">
                                    <h4 class="card-title">Gaurishankar Rudraksha</h4>
                                    <p class="card-text" style="text-align: justify;">This is basic card with image on top, title, description and button.This is basic card with image on top, title, description and button.This is basic card with image on top, title, description and button.</p>
                                    <div class="text-center">
                                      <a href="#" class="btn btn-danger btn-lg text-white">Add to cart</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ./Team member -->
            <!-- Team member -->
            <div class="col-xs-12 col-sm-6 col-md-4" data-aos="fade-left"  data-aos-duration="1500">
                <div class="image-flip" ontouchstart="this.classList.toggle('hover');">
                    <div class="mainflip">
                        <div class="frontside">
                            <div class="card">
                                <div class="card-body text-center">
                                    <img class=" " src="gallery/maha-kavach.jpg" alt="card image">
                                    <h4 class="card-title">Mahakavach</h4>
                                    <p class="card-text text-white">₹ 15000.00</p>
                                    <a href="#" class="btn btn-danger">Add to cart</a>
                                </div>
                            </div>
                        </div>
                        <div class="backside">
                            <div class="card">
                                <div class="card-body text-center mt-4">
                                    <h4 class="card-title">Mahakavach</h4>
                                    <p class="card-text" style="text-align: justify;">This is basic card with image on top, title, description and button.This is basic card with image on top, title, description and button.This is basic card with image on top, title, description and button.</p>
                                    <ul class="list-inline">
                                        <li class="list-inline-item">
                                            <a class="social-icon text-xs-center" target="_blank" href="https://www.fiverr.com/share/qb8D02">
                                                <i class="fa fa-facebook"></i>
                                            </a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a class="social-icon text-xs-center" target="_blank" href="https://www.fiverr.com/share/qb8D02">
                                                <i class="fa fa-twitter"></i>
                                            </a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a class="social-icon text-xs-center" target="_blank" href="https://www.fiverr.com/share/qb8D02">
                                                <i class="fa fa-skype"></i>
                                            </a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a class="social-icon text-xs-center" target="_blank" href="https://www.fiverr.com/share/qb8D02">
                                                <i class="fa fa-google"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ./Team member -->
            <!-- Team member -->
            <div class="col-xs-12 col-sm-6 col-md-4" data-aos="fade-left"  data-aos-duration="1500">
                <div class="image-flip" ontouchstart="this.classList.toggle('hover');">
                    <div class="mainflip">
                        <div class="frontside">
                            <div class="card">
                                <div class="card-body text-center">
                                    <img class=" " src="gallery/thumbring.jpg" alt="card image">
                                    <h4 class="card-title">Thumbring</h4>
                                    <p class="card-text text-white">₹ 3500.00</p>
                                    <a href="#" class="btn btn-danger">Add to cart</a>
                                </div>
                            </div>
                        </div>
                        <div class="backside">
                            <div class="card">
                                <div class="card-body text-center mt-4">
                                  <h4 class="card-title" style="text-align: justify;">Thumbring</h4>
                                    <p class="card-text">This is basic card with image on top, title, description and button.This is basic card with image on top, title, description and button.This is basic card with image on top, title, description and button.</p>
                                    <ul class="list-inline">
                                        <li class="list-inline-item">
                                            <a class="social-icon text-xs-center" target="_blank" href="https://www.fiverr.com/share/qb8D02">
                                                <i class="fa fa-facebook"></i>
                                            </a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a class="social-icon text-xs-center" target="_blank" href="https://www.fiverr.com/share/qb8D02">
                                                <i class="fa fa-twitter"></i>
                                            </a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a class="social-icon text-xs-center" target="_blank" href="https://www.fiverr.com/share/qb8D02">
                                                <i class="fa fa-skype"></i>
                                            </a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a class="social-icon text-xs-center" target="_blank" href="https://www.fiverr.com/share/qb8D02">
                                                <i class="fa fa-google"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ./Team member -->

        </div>
    </div>
</section>
<!-- Team -->

<!-- products end -->




<!-- testimonial -->

 <section class="mt-4">
  <div class="container">
    <div class="row text-center">
      <div class="col-12" data-aos="zoom-in-up"  data-aos-duration="1500">
        <h1 class="display-3 fw-bold">What <span style="color:#e54b4b;">our  clients</span>  are saying</h1>
        <hr class="bg-dark mb-4 mt-0 d-inline-block mx-auto" style="width: 200px; height:3px;">
        
      </div>
    </div>
    <div class="row align-items-md-center text-white" data-aos="fade-up-right" data-aos-duration="1500">
      <div class="col-lg-12 col-md-12 col-sm-12">
     <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
              <!-- Wrapper for slides -->
    <div class="carousel-inner">
      <div class="carousel-item active">
        <div class="row p-4">
          <div class="t-card">
                <i class="fa fa-quote-left" aria-hidden="true"></i>
        <p class="lh-lg">I love Acharya Satish Awasthi, he is a genius. I met him during a seminar where he was a panelist. Coming from the West, I had little idea about Vedas and all that stuff. But hearing Acharya Ji speak about how Vedas forecasted the modern world changed my perspective about life. I talk to him whenever I face an existential crisis and want a spiritual guru to bless me.</p>
                      <i class="fa fa-quote-right" aria-hidden="true"></i>

                    </div>
          <div class="row">                    
           <div class="col-sm-2 pt-3">
             <img src="https://lovewithastrology.com/wp-content/uploads/2021/08/testi-user-img1.png" class="rounded-circle img-responsive img-fluid">
                        </div>                    
              <div class="col-sm-10">
            <div class="arrow-down d-none d-lg-block"></div>
             <h4><strong>Anuj Kumar</strong></h4>
        <p class="testimonial_subtitle"><span>Gorakhpur, U.P</span>

            
                        </p>
                    </div>
                    </div>
                  </div>
                </div>


               <div class="carousel-item">
                   <div class="row p-4">
                    <div class="t-card">
                    <i class="fa fa-quote-left" aria-hidden="true"></i>
                    <p class="lh-lg"> I was very sad after my wife passed away. My 2-year girl wanted a mother and I wanted company. But got no luck, my money was getting over. Acharya Satish Ji came to rescue me. He asked my horoscope and told me to wear a silver ring. I didn’t know I would get married in just six months. Thank You Satish Ji.
 </p>
           <i class="fa fa-quote-right" aria-hidden="true"></i>

           </div>
        <div class="row">
         <div class="col-sm-2 pt-4">
   <img src="https://lovewithastrology.com/wp-content/uploads/2021/08/love-testi-img.png" class="rounded-circle img-responsive img-fluid">
                        </div>
           <div class="col-sm-10">
            <div class="arrow-down d-none d-lg-block"></div>
             <h4><strong>Mukesh Kumar</strong></h4>
             <span>Pune, Maharastra</span>
                </p>
                    </div>
                    </div>
                  </div>
                </div>


               <div class="carousel-item">
                   <div class="row p-4">
                    <div class="t-card">
                    <i class="fa fa-quote-left" aria-hidden="true"></i>
                    <p class="lh-lg">I love Acharya Satish Awasthi, he is a genius. I met him during a seminar where he was a panelist. Coming from the West, I had little idea about Vedas and all that stuff. But hearing Acharya Ji speak about how Vedas forecasted the modern world changed my perspective about life. I talk to him whenever I face an existential crisis and want a spiritual guru to bless me.</p>
                      <i class="fa fa-quote-right" aria-hidden="true"></i>

                    </div>
                    <div class="row text-lg-start">
                    <div class="col-sm-2 pt-4 align-items-center">
                        <img src="https://lovewithastrology.com/wp-content/uploads/2021/08/testi-user-img2.png" class="rounded-circle img-responsive img-fluid">
                        </div>
                        <div class="col-sm-10">
                          <div class="arrow-down d-none d-md-block"></div>
                        <h4><strong>Gauri Desai</strong></h4>
                        <p class="testimonial_subtitle"><span>Norway</span>

                        
                        </p>
                    </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="controls push-right">
                <a class="left fa fa-chevron-left text-white btn btn btn-outline-light" href="#carouselExampleCaptions"
                  data-bs-slide="prev"></a>
                <a class="right fa fa-chevron-right text-white btn btn btn-outline-light" href="#carouselExampleCaptions"
                  data-bs-slide="next"></a>
              </div>
        </div>
    </div>
  </div>
  </section>

<!-- counter -->

<!-- <div class="d-flex align-item-center owls">
<div class="container">
  <div class="row mx-auto" data-aos="zoom-in-up" data-aos-duration="1500">
    <div class="col-lg-3 col-md-3 col-1sm-12">
    <div class="counter-container">
      <img src="https://www.lovewithastrology.com/wp-content/themes/bridge-child/images/count-bg-img.png">
      <div class="counter text-white" data-target="200000"></div>
      <h4 class="text-white">Million Trusted By Many Clients</h4>
    </div>
  </div>

  <div class="col-lg-3 col-md-3 col-1sm-12">
    <div class="counter-container">
      <img src="https://www.lovewithastrology.com/wp-content/themes/bridge-child/images/count-bg-img.png">
      <div class="counter text-white" data-target="39"></div>
      <h4 class="text-white">Years Of Experience</h4>
    </div>
  </div>

  <div class="col-lg-3 col-md-3 col-1sm-12">
       <div class="counter-container">
      <img src="https://www.lovewithastrology.com/wp-content/themes/bridge-child/images/count-bg-img.png">
      <div class="counter text-white" data-target="95"></div>
      <h4 class="text-white">Success Horoscope</h4>
    </div>
  </div>

  <div class="col-lg-3 col-md-3 col-1sm-12">
    <div class="counter-container">
      <img src="https://www.lovewithastrology.com/wp-content/themes/bridge-child/images/count-bg-img.png">
      <div class="counter text-white" data-target="50"></div>
      <h4 class="text-white">Types Of Horoscope</h4>
    </div>
  </div>

  </div>
</div>
</div>
<!-- counter end -->


<!-- cardeee-->

<div class="d-flex align-item-center mt-4" style="background:#0f0d1d;">
  <div class="container">
    <div class="row mx-auto mt-3">
      <div class="col-lg-6 col-md-6 col-sm-12" data-aos="fade-right"  data-aos-duration="1500">
        <div>
          <img src="gallery/111.png" style="width: 100%;height: 100%;" class="text-center">
        </div>
      </div>

      <div class="col-lg-6 col-md-6 col-sm-12" data-aos="fade-left"  data-aos-duration="1500">
        <div>
          <h1 class="display-3 fw-bold text-white ">World <span style="color:#e54b4b;"> Wide</h1>
        </div>
        <div>
          <h1 class="display-3 fw-bold" style="color:#e54b4b;">Extensions</h1>
        </div>
        <div class="text-white mt-4">
          <p style="text-align:justify;">Transcending all barriers, you can knock your destiny on TV. Satish Awasthi Ji reaches millions of admiring audiences through his special widely available programme. Discussing health, spirituality, and social harmony among others, Satish Awasthi is inspiring people to relate with natural forces. Join him to get the words of knowledge of Vedas. Guruji is widely available on platforms like Youtube, Jio and Airtel.</p>
        </div>

        <div>
          <h2 class=" fw-bold" style="font-weight: bold;color:#e54b4b;">Follows us on</h2>
  
        </div>

        <div class="d-flex mt-2">
          <div class="rounded-circle1" style="color:#ee8722;font-size: 25px;">
             <i class="fa fa-instagram" aria-hidden="true"></i>
          </div>

          <div class="ms-3 rounded-circle1" style="color:#ee8722;font-size: 25px;">
            <i class="fa fa-whatsapp" aria-hidden="true"></i>
          </div>

          <div class="ms-3 rounded-circle1" style="color:#ee8722;font-size: 25px;">
            <i class="fa fa-youtube" aria-hidden="true"></i>
          </div>
        </div>


      </div>


    </div>
  </div>
</div>


<!--cardee end -->


  <!-- Bootstrap 5 JavaScript Bundle with Popper -->





<?php include("foot.php");?>



