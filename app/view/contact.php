<?php 

  import('app/view/components/header');
  import('app/view/components/menus');
  ?>

	
	<section class="inner-header">
		<div class="container">
			<div class="row">
				<div class="col-md-12 sec-title colored text-center">
					<h2>Contact</h2>
					<ul class="breadcumb">
						<li><a href="index-2.html">Home</a></li>
						<li><i class="fa fa-angle-right"></i></li>
						<li><span>Contact</span></li>
					</ul>
					<span class="decor"><span class="inner"></span></span>
				</div>
			</div>
		</div>
	</section>


	<section class="contact-content sec-padding">
		<div class="container">
			<div class="sec-title text-center">
				<p>Feel free to reach us now </p>
			</div>
			<!-- <div class="google-map" id="contact-page-google-map" data-icon-path="img/resources/map-marker.png" data-map-lat="-37.812802" data-map-lng="144.956981" data-map-zoom="10" data-map-title="Envato HQ"></div> -->
			<div class="row">
				<div class="col-md-8">
					<h2>Contact Form</h2>
					<form action="https://hasan.themexlab.com/new/charity-home-html/inc/sendemail.php" class="contact-form row" id="contact-page-contact-form">
						<div class="col-md-6">
							<input type="text" name="name" placeholder="Name">
							<input type="text" name="email" placeholder="Email">
							<input type="text" name="phone" placeholder="Phone">
							
						</div>
						<div class="col-md-6">
							<textarea name="message" placeholder="Message" cols="30" rows="10"></textarea>
						</div>
						<div class="col-md-12"><button class="thm-btn" type="submit">Send</button></div>
					</form>
				</div>
				<div class="col-md-4">
					<h2>Address</h2>
					<ul class="contact-info">
						<li>
							<div class="icon-box">
								<div class="inner">
									<i class="fa fa-map-marker"></i>
								</div>
							</div>
							<div class="content-box">
								<h4>Address</h4>
								<p>
									C/O Dr. Vincent Abankwah
									Faculty of Agriculture
									University of Education<br>
									P. O. Box 40<br>
									Mampong - Ashanti
								</p>
							</div>
						</li>



						<li>
							<div class="icon-box">
								<div class="inner">
									<i class="fa fa-map-marker"></i>
								</div>
							</div>
							<div class="content-box">
								<h4>GPS Address</h4>
								<p>
									CG-1937-7378

								</p>
							</div>
						</li>
						<li>
							<div class="icon-box">
								<div class="inner">
									<i class="fa fa-phone"></i>
								</div>
							</div>
							<div class="content-box">
								<h4>Phone</h4>
								<p>+233(0)200914291, +233(0)276706496</p>
							</div>
						</li>
						<li>
							<div class="icon-box">
								<div class="inner">
									<i class="fa fa-envelope-o"></i>
								</div>
							</div>
							<div class="content-box">
								<h4>Email</h4>
								<p>passionplanetghana1@gmail.com</p>
							</div>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</section>


	
	
	<?php 
  import('app/view/components/footer');
  ?>




</body>

</html>