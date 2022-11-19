
<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include ('header.php');
session_start();
$conn = mysqli_connect('localhost','root','root','yom');
$s_id = $_SESSION['user_id'];

$sel_que = "SELECT * FROM silder where user_id = $s_id";
$data = mysqli_query($conn,$sel_que);

$select_recent =  "SELECT * FROM recent where user_id = $s_id";
$recent_data = mysqli_query($conn,$select_recent);

$select_other = "SELECT * FROM other WHERE r_id = $s_id";
$other_data = mysqli_query($conn,$select_other);
?>
				<div class="slider">
					<div class="fullwidthbanner-container">
						<div class="fullwidthbanner">
							<ul>
                                <?php while ($row = mysqli_fetch_assoc($data)){  ?>
								<li class="first-slide" data-transition="fade" data-slotamount="10" data-masterspeed="300">
									<img src="./admin/img/<?php echo $row['image']; ?>" data-fullwidthcentering="on" alt="slide">
									<div class="tp-caption first-line lft tp-resizeme start" data-x="center" data-hoffset="0" data-y="250" data-speed="1000" data-start="200" data-easing="Power4.easeOut" data-splitin="none" data-splitout="none" data-elementdelay="0" data-endelementdelay="0"><?php echo $row['tital']; ?></div>
									<div class="tp-caption second-line lfb tp-resizeme start" data-x="center" data-hoffset="0" data-y="340" data-speed="1000" data-start="800" data-easing="Power4.easeOut" data-splitin="none" data-splitout="none" data-elementdelay="0" data-endelementdelay="0"><?php echo $row['decripation'];  ?></div>
									<div class="tp-caption slider-btn sfb tp-resizeme start" data-x="center" data-hoffset="0" data-y="510" data-speed="1000" data-start="2200" data-easing="Power4.easeOut" data-splitin="none" data-splitout="none" data-elementdelay="0" data-endelementdelay="0"><a href="#" class="btn btn-slider">Discover More</a></div>
								</li>
                                <?php } ?>
							</ul>
						</div>
					</div>
				</div>
				<section class="services green">
					<div class="container">
						<div class="section-heading">
							<h2>What We Offer</h2>
							<div class="section-dec"></div>
						</div>
						<div class="service-item col-md-4">
							<span><i class="fa fa-support"></i></span>
							<div class="tittle"><h3>Stylish Design</h3></div>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nostrum nam numquam voluptates cumque inventore, quibusdam corporis consequatur amet.</p>
						</div>
						<div class="service-item col-md-4">
							<span><i class="fa fa-cogs"></i></span>
							<div class="tittle"><h3>Fully Responsive</h3></div>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nostrum nam numquam voluptates cumque inventore, quibusdam corporis consequatur amet.</p>
						</div>
						<div class="service-item col-md-4">
							<span><i class="fa fa-eye"></i></span>
							<div class="tittle"><h3>Retina Ready</h3></div>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nostrum nam numquam voluptates cumque inventore, quibusdam corporis consequatur amet.</p>
						</div>
					</div>
				</section>
				
				
				<section class="call-to-action-1">
					<div class="container">
						<h4>Over 3000 people already downloaded YOM</h4>
						<p class="col-md-10 col-md-offset-1">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quaerat quod voluptate consequuntur ad quasi, dolores obcaecati ex aliquid, dolor provident accusamus omnis dolorum ipsam. Voluptatem ipsum expedita, corporis facilis laborum asperiores nostrum! Amet porro numquam ratione temporibus quia dolorem sint lorem voluptates quasi mollitia.</p>
						<div class="buttons">
							<div class="col-md-6 col-sm-6 col-xs-6">
								<div class="border-btn"><a href="#">Learn More</a></div>
							</div>
							<div class="col-md-6 col-sm-6 col-xs-6">
								<div class="btn-black"><a href="#">Buy This Theme</a></div>
							</div>
						</div>
					</div>	
				</section>
				

				<section class="call-to-action-2">
					<div class="container">
					<div class="left-text hidden-xs">
						<h4>To know about this theme read this</h4>
						<p><em>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nisi ut explicabo magni sapiente.</em><br><br>Inventore at quia, vel in repellendus, cumque dolorem autem ad quidem mollitia porro blanditiis atque rerum debitis eveniet nostrum aliquam. Sint aperiam expedita sapiente amet officia quis perspiciatis adipisci, iure dolorem esse exercitationem!</p>
					</div>
						<div class="right-image -hiddenxs"></div>
					</div>
				</section>

				<section class="portfolio">
					<div class="container">
						<div class="section-heading-white">
							<h2>Recent Photos</h2>
							<div class="section-dec"></div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<div id="owl-portfolio" class="owl-carousel owl-theme">
                                    <?php while ($recent_row = mysqli_fetch_assoc($recent_data)) { ?>
									<div class="item">
								  		<figure class="recent_silder">
				        					<img alt="portfolio" src="./admin/recent_img/<?php echo $recent_row['image']; ?>">
				        					<figcaption>
				            					<h3><?php echo $recent_row['tital'];  ?></h3>
				            					<p><?php  echo $recent_row['decripation'];  ?></p>
				        					</figcaption>
				    					</figure>								    
				    				</div>
                                    <?php  }  ?>
								</div>
							</div>
						</div>
						<div class="owl-navigation">
						  <a class="btn prev fa fa-angle-left"></a>
						  <a class="btn next fa fa-angle-right"></a>
						  <a href="work-3columns.php" class="go-to">Go to portfolio</a>
						</div>
					</div>
				</section>

				<section class="testimonials">
					<div class="container">
						<div class="section-heading">
							<h2>What Others saying</h2>
							<div class="section-dec"></div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<div id="owl-demo" class="owl-carousel owl-theme">
                                    <?php while ($other_row = mysqli_fetch_assoc($other_data)) {   ?>
									<div class="item">
								  		<div class="testimonials-post">
								  			<span class="fa fa-quote-left"></span>
								  			<p>“ <?php echo $other_row['descripation'];  ?>”</p>
								  			<h6><?php  echo $other_row['tital'];   ?> - <em> <?php echo $other_row['city'];   ?>,<?php echo $other_row['country'];  ?> </em></h6>
								  		</div>
								    </div>
                                    <?php  }   ?>
								</div>
							</div>
						</div>
					</div>
				</section>

				<section class="call-to-action-3">
					<div class="container">
						<div class="col-md-12">
							<h4 class="col-md-10 col-sm-8">Read your lastest newsletters, we have an offer for you!</h4>
							<div class="btn-black col-md-2 col-sm-4"><a href="#">Take it now</a></div>
						</div>
					</div>
				</section>

				<section class="blog-posts">
					<div class="container">
						<div class="section-heading">
							<h2>Latest Posts</h2>
							<div class="section-dec"></div>
						</div>
						<div class="blog-item">
							<div class="col-md-4">
								<a href="blog-single.php"><img src="files/images/01-blog.jpg" alt=""></a>
								<h3><a href="blog-single.php">Lorum Ipsum5</a></h3>
								<span><a href="#">Syam Kesav</a> / <a href="#">6 June 2015</a> / <a href="#">Uncategorized</a></span>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit alis quam est leo, imperdiet eget dictum sed, congue non erosa senean sed ligula hendrerit...</p>
								<div class="read-more">
									<a href="blog-single.php">Read more</a>
								</div>
							</div>
						</div>
						<div class="blog-item">
							<div class="col-md-4">
								<a href="blog-single.php"><img src="files/images/02-blog.jpg" alt=""></a>
								<h3><a href="blog-single.php">Lorum Ipsum5</a></h3>
								<span><a href="#">Manohar Raj</a> / <a href="#">6 June 2015</a> / <a href="#">Uncategorized</a></span>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit alis quam est leo, imperdiet eget dictum sed, congue non erosa senean sed ligula hendrerit...</p>
								<div class="read-more">
									<a href="blog-single.php">Read more</a>
								</div>
							</div>
						</div>
						<div class="blog-item">
							<div class="col-md-4">
								<a href="blog-single.php"><img src="files/images/03-blog.jpg" alt=""></a>
								<h3><a href="blog-single.php">Lorum Ipsum5</a></h3>
								<span><a href="#">George Yeti</a> / <a href="#">6 June 2015</a> / <a href="#">Uncategorized</a></span>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit alis quam est leo, imperdiet eget dictum sed, congue non erosa senean sed ligula hendrerit...</p>
								<div class="read-more">
									<a href="blog-single.php">Read more</a>
								</div>
							</div>
						</div>
					</div>
				</section>
				<?php include ('footer.php'); ?>




               