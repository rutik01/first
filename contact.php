<?php include 'header.php';  ?>

				<section class="page-heading wow fadeIn" data-wow-duration="1.5s" style="background-image: url(files/images/01-heading.jpg)">
					<div class="container">
						<div class="page-name">
							<h1>Contact Us</h1>
							<span>Lovely layout of heading</span>
						</div>
					</div>
				</section>

				<section class="contact-map-wrapper">
					<div class="container">
						<div class="section-heading">
							<h2>Find Us On Map</h2>
							<div class="section-dec"></div>
						</div>
						<div class="row">
							<div class="col-sm-12">
								<div class="contact-map" style="height: 380px;"></div>
							</div>
						</div>
					</div>
				</section>


				<section class="contact-us">
					<div class="container">
						<div class="section-heading">
							<h2>Send Us A Message</h2>
							<div class="section-dec"></div>
						</div>
						<div class="send-message col-sm-12">
							<form id="contact_form" action="#" method="POST" enctype="multipart/form-data">
								<div class=" col-md-4 col-sm-4 col-xs-6">
									<input type="text" class="blog-search-field" name="s" placeholder="Your name..." value="">
								</div>
								<div class="col-md-4 col-sm-4 col-xs-6">
									<input type="text" class="blog-search-field" name="s" placeholder="Your email..." value="">
								</div>
								<div class="col-md-4 col-sm-4 col-xs-12">
									<input type="text" class="subject" name="s" placeholder="Subject..." value="">
								</div>
								<div class="col-md-12 col-sm-12">
									<textarea id="message" class="input" name="message" placeholder="Message..."></textarea>
								</div>
								<div class="submit-coment col-md-12">
									<div class="btn-black">
										<a href="#">Send now</a>
									</div>
								</div>
							</form>		
						</div>
					</div>
				</section>

				<?php  include 'footer.php';  ?>