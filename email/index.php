<!DOCTYPE html>
<html lang="en">
  <head>
    <title>HBUT International Students - Campus Life</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/ionicons.min.css">
    
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">
	<style>


.file-upload {
  background-color: #ffffff;
  width: 100%;
  margin: 0 auto;
  padding: 20px;
}

.file-upload-btn {
  width: 100%;
  margin: 0;
  color: #fff;
  background: #1FB264;
  border: none;
  padding: 10px;
  border-radius: 4px;
  border-bottom: 4px solid #15824B;
  transition: all .2s ease;
  outline: none;
  text-transform: uppercase;
  font-weight: 700;
}

.file-upload-btn:hover {
  background: #1AA059;
  color: #ffffff;
  transition: all .2s ease;
  cursor: pointer;
}

.file-upload-btn:active {
  border: 0;
  transition: all .2s ease;
}

.file-upload-content {
  display: none;
  text-align: center;
}

.file-upload-input {
  
  
  width: 100%;
  height: 100%;
  outline: none;
  opacity: 0;
  cursor: pointer;
}

.image-upload-wrap {
  margin-top: 20px;
  border: 4px dashed #1FB264;
  position: relative;
}

.image-dropping,
.image-upload-wrap:hover {
  background-color: #1FB264;
  border: 4px dashed #ffffff;
}

.image-title-wrap {
  padding: 0 15px 15px 15px;
  color: #222;
}

.drag-text {
  text-align: center;
}

.drag-text h3 {
  font-weight: 100;
  text-transform: uppercase;
  color: #15824B;
  padding: 60px 0;
}

.file-upload-image {
  max-height: 200px;
  max-width: 200px;
  margin: auto;
  padding: 20px;
}

.remove-image {
  width: 200px;
  max-width:auto;
  margin: 0;
  color: #fff;
  background: #cd4535;
  border: none;
  padding: 10px;
  border-radius: 4px;
  border-bottom: 4px solid #b02818;
  transition: all .2s ease;
  outline: none;
  text-transform: uppercase;
  font-weight: 700;
}

.remove-image:hover {
  background: #c13b2a;
  color: #ffffff;
  transition: all .2s ease;
  cursor: pointer;
}

.remove-image:active {
  border: 0;
  transition: all .2s ease;
}



</style>
<script>
function readURL(input) {
  if (input.files && input.files[0]) {

    var reader = new FileReader();

    reader.onload = function(e) {
      $('.image-upload-wrap').hide();

      $('.file-upload-image').attr('src', e.target.result);
      $('.file-upload-content').show();

      $('.image-title').html(input.files[0].name);
    };

    reader.readAsDataURL(input.files[0]);

  } else {
    removeUpload();
  }
}

function removeUpload() {
  $('.file-upload-input').replaceWith($('.file-upload-input').clone());
  $('.file-upload-content').hide();
  $('.image-upload-wrap').show();
}
$('.image-upload-wrap').bind('dragover', function () {
        $('.image-upload-wrap').addClass('image-dropping');
    });
    $('.image-upload-wrap').bind('dragleave', function () {
        $('.image-upload-wrap').removeClass('image-dropping');
});
</script>
	
  </head>
  <body>
	  <div class="bg-top navbar-light">
    	<div class="container">
    		<div class="row no-gutters d-flex align-items-center align-items-stretch">
    			<div class="col-md-4 d-flex align-items-center py-4">
    				<a class="navbar-brand" href="index.html">HBUT. <span style="font-size:18px; padding : 2px 2px;">International Students' Campus Life</span></a>
    			</div>
	    		<div class="col-lg-8 d-block">
		    		<div class="row d-flex">
					    
					    <div class="col-md topper d-flex align-items-center justify-content-end">
					    	
						   
						    	<img class="img-responsive" src="images/logo.png" width="95" height="95" style="padding:5px 0px;" />
						   
					   
					    
					    	<p class="mb-0">
					    		 <img class="img-responsive" src="images/label.jfif" style="padding:0px;" />
					    	</p>
					    </div>
				    </div>
			    </div>
		    </div>
		  </div>
    </div>
	  <nav class="navbar navbar-expand-lg navbar-dark bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container d-flex align-items-center px-4">
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>
	      <form action="#" class="searchform order-lg-last">
          <div class="form-group d-flex">
            <input type="text" class="form-control pl-3" placeholder="Search">
            <button type="submit" placeholder="" class="form-control search"><span class="ion-ios-search"></span></button>
          </div>
        </form>
	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav mr-auto">
				<li class="nav-item active"><a href="#" class="nav-link pl-0">Home</a></li>
                <li class="nav-item" ><a href="#about" class="nav-link">About</a></li>
                <li class="nav-item"><a href="#academic" class="nav-link">Academic Life</a></li>
                <li class="nav-item"><a href="#section-counter" class="nav-link">Sports</a></li>
                <li class="nav-item"><a href="#accomodation" class="nav-link">Accomodation</a></li>
				<li class="nav-item"><a href="#food" class="nav-link">Food Arena</a></li>
				<li class="nav-item"><a href="#other" class="nav-link">Other Activities</a></li>
	        </ul>
	      </div>
	    </div>
	  </nav>
    <!-- END nav -->
    
    <section class="home-slider owl-carousel">
      <div class="slider-item" style="background-image:url(images/bg_5.jpg);">
      	<div class="overlay"></div>
        <div class="container">
          <div class="row no-gutters slider-text align-items-center justify-content-start" data-scrollax-parent="true">
          <div class="col-md-6 ftco-animate">
            <h1 class="mb-4">Welcome to</h1>
            <h3 style="color:#005092;" class="mb-4">Hubei University Of Technology</h3>
            <p><a href="#" class="btn btn-primary px-4 py-3 mt-3">Contact Us</a></p>
          </div>
        </div>
        </div>
      </div>

      <div class="slider-item" style="background-image:url(images/bg_6.jpg);">
      	<div class="overlay"></div>
        <div class="container">
          <div class="row no-gutters slider-text align-items-center justify-content-start" data-scrollax-parent="true">
          <div class="col-md-6 ftco-animate">
            <h1 class="mb-4">Welcome to</h1>
            <h3 style="color:#005092;" class="mb-4">Hubei University Of Technology</h3>
            <p><a href="#" class="btn btn-primary px-4 py-3 mt-3">Contact Us</a></p>
          </div>
        </div>
        </div>
      </div>
    </section>

    
		<br><br>
		<section class="ftco-section ftco-no-pt ftc-no-pb">
			<div class="container">
				<div class="row d-flex">
					<div class="col-md-5 order-md-last wrap-about wrap-about d-flex align-items-stretch">
						<div class="img" style="background-image: url(images/campus.jpg); border"></div>
					</div>
					<div class="col-md-7 wrap-about py-5 pr-md-4 ftco-animate" id="about">
          	<h2 class="mb-4">What We Offer</h2>
						<p>Hubei University of Technology(HBUT) is one of the outstanding Institutions in China. HBUT allow overseas students to effectively enroll in autumn or spring admissions. Over the years, HBUT has produced excellent students due to the efficient teaching and learning approach and the provision of necessary facilities in order to enhance the comfort of International students.</p>
						<div class="row mt-5">
							
							<div class="col-lg-6">
								<div class="services-2 d-flex">
									<div class="icon mt-2 d-flex justify-content-center align-items-center"><span class="flaticon-reading"></span></div>
									<div class="text pl-3">
										<h3>Regular Classes</h3>
										
									</div>
								</div>
							</div>
							
							<div class="col-lg-6">
								<div class="services-2 d-flex">
									<div class="icon mt-2 d-flex justify-content-center align-items-center"><span class="flaticon-education"></span></div>
									<div class="text pl-3">
										<h3>Skillful Tution</h3>
									</div>
								</div>
							</div>
							<div class="col-lg-6">
								<div class="services-2 d-flex">
									<div class="icon mt-2 d-flex justify-content-center align-items-center"><span class="flaticon-jigsaw"></span></div>
									<div class="text pl-3">
										<h3>Creative Lessons</h3>

									</div>
								</div>
							</div>
							<div class="col-lg-6">
								<div class="services-2 d-flex">
									<div class="icon mt-2 d-flex justify-content-center align-items-center"><span class="flaticon-kids"></span></div>
									<div class="text pl-3">
										<h3>Sports Facilities</h3>
										
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		
				<section class="ftco-section" id="academic">
			<div class="container-fluid px-4">
				<div class="row justify-content-center mb-5 pb-2">
          <div class="col-md-8 text-center heading-section ftco-animate">
            <h2 class="mb-4"><span>Academic</span> Life</h2>
          </div>
        </div>	
				<div class="row">
							<div class="col-md-3 course ftco-animate">
						<div class="img" style="background-image: url(images/Academics/Library.jpg); border-radius:30%;"></div>
						<div class="text pt-4">
							<center><h4>LIBRARY</h4>
							<p>
							There is also a sizeable library to accommodate as many students as possible within campus. 
							A vast provision of high level books have been stocked in the library. 
							Some foreign students spend their leisure in the library as it is a quiet and relaxing place to be. 
							</p></center>
						</div>
					</div>
					<div class="col-md-3 course ftco-animate">
						<div class="img" style="background-image: url(images/Academics/teachbuild.jpg); border-radius:30%;"></div>
						<div class="text pt-4">
							<center><h4>TEACHING BUILDING 5</h4>
							<p>
							The school has several lecture halls for foreign students for both theory and practical lessons. The school engages it students with intensive teaching and learning approach. 
							As it is the primary purpose of a student to acquire his/her academic certificate, it is the pride of HBUT to ensure the success of these students.  
							</p></center>
						</div>
					</div>
					<div class="col-md-3 course ftco-animate">
						<div class="img" style="background-image: url(images/Academics/lab.jpg); border-radius:30%;"></div>
						<div class="text pt-4">
							<center><h4>LABORATORY</h4>
							<p>
						
							</p></center>
						</div>
					</div>
					<div class="col-md-3 course ftco-animate">
						<div class="img" style="background-image: url(images/Academics/TEFL.jpg); border-radius:30%;"></div>
						<div class="text pt-4">
							<center><h4>TEFL</h4>
							<p>
						
							</p></center>
						</div>
					</div>
				</div>
			</div>
			 <center><p class="mb-0"><a href="courses.html" class="btn btn-primary">Read More <span class="ion-ios-arrow-round-forward"></span></a></p></center>
		</section>

		<section class="ftco-section ftco-counter img" id="section-counter" style="background-image: url(images/Sports/GYM.jpg); " data-stellar-background-ratio="0.5" >
    	<div class="container">
    		<div class="row justify-content-center mb-5 pb-2 d-flex">
    			<div class="col-md-6 align-items-stretch d-flex">
    				<div class="img img-video d-flex align-items-center" style="background-image: url(images/Sports/sports.jpg); border-radius:30%;">
    					<div class="video justify-content-center">
								
		  				
							</div>
    				</div>
    			</div>
          <div class="col-md-6 heading-section heading-section-white ftco-animate pl-lg-5 pt-md-0 pt-5">
            <h2 class="mb-4">Sports</h2>
            <p>The saying;’All work and no play make Jack a dull boy, All play and no work make Jack a lazy boy’, signifies the essence of exercising the body. In as much as the School is concerned about the academic excellence of foreign students, they have made available all forms of sport facilities within campus. Most foreign Students Spend their leisure at the football ground, basketball ground, GYM, Tennis Courts and other sports centers.

Aside spending leisure on sporting activities, the school also arranges sports competitions and Olympic games among foreign and Chinese students.</p>

          </div>
        </div>	
    
    	</div>
    </section>

<section style="margin-left:10px;margin-right:10px;"class="ftco-gallery" id="accomodation">

    	<div class="container-wrap">
		<div class="col-md-8 text-center heading-section ftco-animate">
            <center><h2 class="mb-4">Accommodation</h2>
            <p>Interestingly, HBUT provides one of the best accommodation facilities and services in China. Pictures are not adequate enough to describe the comfort and beauty of these facilities. Often times, students see more than they expect upon arrival. 
</p>
          </center></div>
    		<div class="row no-gutters">
					<div class="col-md-3 ftco-animate">
						<a href="images/Accomodation/apartment.jpg" class="gallery image-popup img d-flex align-items-center" style="background-image: url(images/Accomodation/apartment.jpg);">
							<div class="icon mb-4 d-flex align-items-center justify-content-center">
    						<span class="icon-instagram"></span>
							
    					</div>
						</a>
						<center><h4>Apartments</h4><p>
						Here, there are 3 partitioned rooms in a single room. Each student has his/her own room even though they all share same sitting room , kitchen and bathroom. This allows a student have his/her peace of mind since there is much privacy.  
						</p></center>
					</div>

					<div class="col-md-3 ftco-animate">
						<a href="images/Accomodation/apartment1.jpg"  class="gallery image-popup img d-flex align-items-center" style="background-image: url(images/Accomodation/apartment1.jpg);">
							<div class="icon mb-4 d-flex align-items-center justify-content-center">
    						<span class="icon-instagram"></span>
    					</div>
						</a>
						
					</div>
					<div class="col-md-3 ftco-animate">
						<a href="images/Accomodation/apartment2.jpg" class="gallery image-popup img d-flex align-items-center" style="background-image: url(images/Accomodation/apartment2.jpg);">
							<div class="icon mb-4 d-flex align-items-center justify-content-center">
    						<span class="icon-instagram"></span>
    					</div>
						</a>
						
					</div>
					<div class="col-md-3 ftco-animate">
						<a href="images/Accomodation/Rooms.jpg" class="gallery image-popup img d-flex align-items-center" style="background-image: url(images/Accomodation/Rooms.jpg);">
							<div class="icon mb-4 d-flex align-items-center justify-content-center">
    						<span class="icon-instagram"></span>
    					</div>
						</a>
						
					</div>
					
										<div class="col-md-3 ftco-animate">
						<a href="images/Accomodation/dormitory.jpg" class="gallery image-popup img d-flex align-items-center" style="background-image: url(images/Accomodation/dormitory.jpg);">
							<div class="icon mb-4 d-flex align-items-center justify-content-center">
    						<span class="icon-instagram"></span>
    					</div>
						</a>
						<center><h4>Dormitory </h4><p>
Foreign students dormitory is located at the north side of the school. It’s not too far from the lecture hall ( about 8-13 minutes walk ). It comprises of single rooms, double rooms and triple rooms. There is a general kitchen and laundry available for use.   	</p></center>
					</div>
					<div class="col-md-3 ftco-animate">
						<a href="images/Accomodation/dormdroom.jpg" class="gallery image-popup img d-flex align-items-center" style="background-image: url(images/Accomodation/dormdroom.jpg);">
							<div class="icon mb-4 d-flex align-items-center justify-content-center">
    						<span class="icon-instagram"></span>
    					</div>
						</a>
						
					</div>
					<div class="col-md-3 ftco-animate">
						<a href="images/Accomodation/dormsroom.jpg" class="gallery image-popup img d-flex align-items-center" style="background-image: url(images/Accomodation/dormsroom.jpg);">
							<div class="icon mb-4 d-flex align-items-center justify-content-center">
    						<span class="icon-instagram"></span>
    					</div>
						</a>
						
					</div>
					<div class="col-md-3 ftco-animate">
						<a href="images/Accomodation/dormkitchen.jpg" class="gallery image-popup img d-flex align-items-center" style="background-image: url(images/Accomodation/dormkitchen.jpg);">
							<div class="icon mb-4 d-flex align-items-center justify-content-center">
    						<span class="icon-instagram"></span>
    					</div>
						</a>
						
					</div>
        </div>
    	</div>
    </section><br><br>

		

		<section class="ftco-section ftco-counter img" id="section-counter" style="background-image: url(images/Food/canteen.jpg);" data-stellar-background-ratio="0.5">
    	<div class="container">
    		<div class="row justify-content-center mb-5 pb-2 d-flex">
    			<div class="col-md-6 align-items-stretch d-flex">
    				<div class="img img-video d-flex align-items-center" style="background-image: url(images/Food/food1.jpg); border-radius:30%;">
    					<div class="video justify-content-center">
								
							</div>
    				</div>&nbsp&nbsp
					<div class="img img-video d-flex align-items-center" style="background-image: url(images/Food/food2.jpg); border-radius:30%;">
    					<div class="video justify-content-center">
								
							</div>
    				</div>
    			</div>
          <div class="col-md-6 heading-section heading-section-white ftco-animate pl-lg-5 pt-md-0 pt-5" id="food">
            <h2 class="mb-4">Food Arena</h2>
            <p>For international students, adaptation of Chinese foods is a common experience. Most foreign students enjoy a variety of Chinese cuisine. Some foreigners make use of the kitchens provided by the school.
          </div>
        </div>	
    
    	</div>
    </section>



		<section class="ftco-section bg-light" id="other">
			<div class="container">
				<div class="row justify-content-center mb-5 pb-2">
          <div class="col-md-8 text-center heading-section ftco-animate">
            <h2 class="mb-4"><span>Other</span> Activities</h2>
            <p>HBUT engages students in diversity of activities like Chinese quiz competition, Talent Shows, Excursions, Field Trips ( for more practical experience ), exchange programs, Annual Dinner for foreign students and many more. </p>
          </div>
        </div>
				<div class="row">
          <div class="col-md-6 col-lg-4 ftco-animate">
            <div class="blog-entry">
              <a href="#" class="block-20 d-flex align-items-end" style="background-image: url('images/other/talent.jpg');">
								<div class="meta-date text-center p-2">
                  <span class="day">26</span>
                  <span class="mos">June</span>
                  <span class="yr">2019</span>
                </div>
              </a>
              <div class="text bg-white p-4">
                <h3 class="heading"><a href="#">Talent Show</a></h3>
                <p></p>
                <div class="d-flex align-items-center mt-4">
	                <p class="mb-0"><a href="#" class="btn btn-primary">Read More <span class="ion-ios-arrow-round-forward"></span></a></p>
	                
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 ftco-animate">
            <div class="blog-entry">
              <a href="#" class="block-20 d-flex align-items-end" style="background-image: url('images/other/graduate.jpg');">
								<div class="meta-date text-center p-2">
                  <span class="day">26</span>
                  <span class="mos">June</span>
                  <span class="yr">2019</span>
                </div>
              </a>
              <div class="text bg-white p-4">
                <h3 class="heading"><a href="#">Graduation</a></h3>
                <p></p>
                <div class="d-flex align-items-center mt-4">
	                <p class="mb-0"><a href="#" class="btn btn-primary">Read More <span class="ion-ios-arrow-round-forward"></span></a></p>
	                
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 ftco-animate" >
            <div class="blog-entry">
              <a href="" class="block-20 d-flex align-items-end" style="background-image: url('images/other/vacation.jpg');">
								<div class="meta-date text-center p-2">
                  <span class="day">26</span>
                  <span class="mos">June</span>
                  <span class="yr">2019</span>
                </div>
              </a>
              <div class="text bg-white p-4">
                <h3 class="heading"><a href="#">Winter Vacation</a></h3>
                <p></p>
                <div class="d-flex align-items-center mt-4">
	                <p class="mb-0"><a href="#" class="btn btn-primary">Read More <span class="ion-ios-arrow-round-forward"></span></a></p>
	               
                </div>
              </div>
            </div>
          </div>
		  
        </div>
			</div>
		</section>

	<section class="ftco-section testimony-section">
      <div class="container">
        <div class="row justify-content-center mb-5 pb-2">
          <div class="col-md-8 text-center heading-section ftco-animate">
            <h2 class="mb-4">What they think...</h2>
            <p>Here are some comments from around the world about campus life. <i><b>You can also get to share your comment at the footer</b></i></p>
          </div>
        </div>
        <div class="row ftco-animate justify-content-center">
          <div class="col-md-12">
            <div class="carousel-testimony owl-carousel">
			
			<?php
			include('viewcomment.php');
			
			?>
           
            </div>
          </div>
        </div>
      </div>
    </section>


		
    <footer class="ftco-footer ftco-bg-dark ftco-section" id="contact">
      <div class="container">
        <div class="row mb-5">
          <div class="col-md-6 col-lg-3">
            <div class="ftco-footer-widget mb-5">
            	<h2 class="ftco-heading-2">Have a Questions?</h2>
            	<div class="block-23 mb-3">
	              <ul>
	                <li><span class="icon icon-map-marker"></span><span class="text">School of International Education<br> Dean: Mr. Ye Chaocheng(Terry Ye)</span></li>
	                <li><a href="#"><span class="icon icon-phone"></span><span class="text">(86) 27-59750228</span></a></li>
	                <li><a href="#"><span class="icon icon-envelope"></span><span class="text">sie@mail.hbut.edu.cn</span></a></li>
	              </ul>School of International Education Dean: Mr. Ye Chaocheng(Terry Ye) Tel: (86) 27-59750228 Email: sie@mail.hbut.edu.cn Fax: (86)27-59750228
	            </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-3">
            <div class="ftco-footer-widget mb-5">
              <h2 class="ftco-heading-2">Recent Events</h2>
              <div class="block-21 mb-4 d-flex">
                <a class="blog-img mr-4" style="background-image: url(images/image_1.jpg);"></a>
                <div class="text">
                  <h3 class="heading"><a href="#">Even the all-powerful display of varied talents </a></h3>
                  <div class="meta">
                    <div><a href="#"><span class="icon-calendar"></span> June 27, 2019</a></div>
                    <div><a href="#"><span class="icon-person"></span> Admin</a></div>
                    
                  </div>
                </div>
              </div>
              <div class="block-21 mb-5 d-flex">
                <a class="blog-img mr-4" style="background-image: url(images/image_2.jpg);"></a>
                <div class="text">
                  <h3 class="heading"><a href="#">Batch of 2019 graduate Gracefully.</a></h3>
                  <div class="meta">
                    <div><a href="#"><span class="icon-calendar"></span> June 27, 2019</a></div>
                    <div><a href="#"><span class="icon-person"></span> Admin</a></div>
                   
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-3">
            <div class="ftco-footer-widget mb-5 ml-md-4">
              <h2 class="ftco-heading-2">Links</h2>
              <ul class="list-unstyled">
                <li><a href="#"><span class="ion-ios-arrow-round-forward mr-2"></span>Home</a></li>
                <li><a href="#about"><span class="ion-ios-arrow-round-forward mr-2"></span>About</a></li>
                <li><a href="#academic"><span class="ion-ios-arrow-round-forward mr-2"></span>Academic Life</a></li>
                <li><a href="#section-counter"><span class="ion-ios-arrow-round-forward mr-2"></span>Sports</a></li>
                <li><a href="#accomodation"><span class="ion-ios-arrow-round-forward mr-2"></span>Accomodation</a></li>
				<li><a href="#food"><span class="ion-ios-arrow-round-forward mr-2"></span>Food Arena</a></li>
				<li><a href="#other"><span class="ion-ios-arrow-round-forward mr-2"></span>Other Activities</a></li>
			  </ul>
            </div>
          </div>
          <div class="col-md-6 col-lg-3">
            <div class="ftco-footer-widget mb-5">
            	<h2 class="ftco-heading-2">Share your Experience!</h2>
              <form  class="subscribe-form" method="POST" enctype="multipart/form-data">
                <div class="form-group">
                  <input type="text" class="form-control mb-2 text-center" placeholder="Enter Your Name" name="studentname" >
				  <label>Select your School or Faculty</label>
				  <select type="text" class="form-control mb-2 text-center" name="faculty">
					<option>School of Mechanical Engineering</option>
					<option>School of Electrical & Electronic Engineering</option>
					<option>School of Computer Science</option>
					<option>School of Light Industry</option>
					<option>School of Civil Engineering</option>
					<option>School of Economics & Management</option>
					<option>School of Science</option>
					<option>School of Foreign Languages</option>
					<option>School of Art & Design</option>
					<option>Higher Vocational Education Research Center</option>
					<option>Other</option>
					
				<select>
				  <label>Enter your comment</label>
				  <textarea class="form-control mb-2 text-center" placeholder="Enter Your Comment here" name="comment">
				  
				  </textarea>
				  
				   <div class="form-group">
                                        <label class="col-md-12"><b>Add your photo(optional)</b></label>
                                        <div class="col-md-12">
                                            <script class="jsbin" src="https://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
                                              <div class="file-upload">
                                                
                                                   <div class="image-upload-wrap">
                                                 <input class="file-upload-input" type='file' onchange="readURL(this);" accept="image/*" name="image"/>
                                             <div class="drag-text">
                                                    <h3>Click to change photo</h3>
                                                     </div>
                                                    </div>
                                                      <div class="file-upload-content">
                                                   <img class="file-upload-image" src="#" alt="your image" />
                                                   <div class="image-title-wrap">
                                                <button type="button" onclick="removeUpload()" class="btn btn-danger">Remove <span class="image-title">Uploaded Image</span></button>
                                                    </div>
                                            </div>
                                          </div>
                                        </div>
                                    </div><br>
                  <input type="submit" value="Comment" class="form-control submit px-3" name="post">
                </div>
              </form>
			  <?php
		include('addcomment.php');					
			  ?>
            </div>
            <div class="ftco-footer-widget mb-5">
            	<h2 class="ftco-heading-2 mb-0">Connect With Us</h2>
            	<ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-3">
                <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
              </ul>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 text-center">

            <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | | Powered by Domi Technologies</a>
  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
          </div>
        </div>
      </div>
    </footer>
    
  

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  <script src="js/jquery.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="js/scrollax.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="js/google-map.js"></script>
  <script src="js/main.js"></script>
    
  </body>
</html>