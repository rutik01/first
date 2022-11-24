<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
session_start();
$user_id = $_SESSION['user_id'];

$conn = mysqli_connect('localhost','root','root','yom');
if (isset($_GET['blog_id']))
{
    $blog_id = $_GET['blog_id'];
    $sel_que = "SELECT * FROM classic WHERE r_id = $user_id AND c_id = $blog_id";
}
else if (isset($_GET['search'])!= '')
{
    $seach_text = $_GET['search'];
    $sel_que = "SELECT * FROM classic WHERE tital LIKE '%$seach_text%' AND r_id = $user_id LIMIT 0,1 ";
}else
{
    $sel_que = "SELECT * FROM classic WHERE r_id = $user_id LIMIT 1";
}

if ($data = mysqli_query($conn,$sel_que))
{
    $row = mysqli_fetch_assoc($data);
}else{
    echo "<script> alert('sorry Some  error Foud');</script>";
}

$select_recent = "SELECT * FROM classic WHERE r_id = $user_id  ORDER BY c_id desc LIMIT 0,3";
$recent_data = mysqli_query($conn,$select_recent);

include 'header.php';
?>
            <section class="page-heading wow fadeIn" data-wow-duration="1.5s" style="background-image: url(files/images/01-heading.jpg)">
                <div class="container">
                    <div class="page-name">
                        <h1>Single Post</h1>
                        <span><?php echo $row['tital'];    ?></span>
                    </div>
                </div>
            </section>

            <section class="blog-single">
                <div class="container">
                    <div class="row">
                        <div class="col-md-8">
                            <div class="blog-single-item">
                                <img src="admin/classic_img/<?php echo $row['image']; ?>" alt="">
                                <div class="blog-single-content">
                                    <h3><a href="#"><?php echo $row['tital'];  ?></a></h3>
                                    <span><a href="#"><?php echo $row['tital'];  ?> </a> / <a href="#"><?php echo $row['date'];  ?></a> / <a href="#">Uncategorized</a></span>
                                    <p>
                                        <?php echo $row['descripation'];  ?>
                                    </p>
                                    <div class="share-post">
                                        <span>Share on: <a href="#">facebook</a>, <a href="#">twitter</a>, <a href="#">linkedin</a>, <a href="#">instagram</a></span>
                                    </div>
                                </div>
                                <div class="prev-btn col-md-6 col-sm-6 col-xs-6">
                                    <a href="#"><i class="fa fa-angle-left"></i>Previous</a>
                                </div>
                                <div class="next-btn col-md-6 col-sm-6 col-xs-6">
                                    <a href="#">Next<i class="fa fa-angle-right"></i></a>
                                </div>
                            </div>
                            <div class="blog-comments">
                                <h2>7 Comments</h2>
                                <ul class="coments-content">
                                    <li class="first-comment-item">
                                        <img src="files/images/01-author-comment.jpg" alt="">
                                        <span class="author-title"><a href="#">Akhil Raj</a></span>
                                        <span class="comment-date">10 May 2015 / <a href="#">Reply</a>
											</span>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin vulputate, libero sit amet maximus ultricies, tortor justo venenatis justo, ac auctor quam lorem ac lectus.</p>
                                    </li>
                                    <li class="second-comment-item">
                                        <img src="files/images/02-author-comment.jpg" alt="">
                                        <span class="author-title"><a href="#">Meera</a></span>
                                        <span class="comment-date">12 May 2015 / <a href="#">Reply</a>
											</span>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin vulputate, libero sit amet maximus ultricies, tortor justo venenatis justo.</p>
                                    </li>
                                    <li class="third-comment-item">
                                        <img src="files/images/03-author-comment.jpg" alt="">
                                        <span class="author-title"><a href="#">Joseph</a></span>
                                        <span class="comment-date">14 June 2015 / <a href="#">Reply</a>
											</span>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin vulputate, libero sit amet maximus ultricies, tortor justo venenatis justo, ac auctor quam lorem ac lectus.</p>
                                    </li>
                                </ul>
                            </div>
                            <div class="submit-comment col-sm-12">
                                <h2>Leave A Comment</h2>
                                <form id="contact_form" action="#" method="POST" enctype="multipart/form-data">
                                    <div class=" col-md-4 col-sm-4 col-xs-6">
                                        <input type="text" class="blog-search-field" name="name" placeholder="Your name..." value="">
                                    </div>
                                    <div class="col-md-4 col-sm-4 col-xs-6">
                                        <input type="text" class="blog-search-field" name="email" placeholder="Your email..." value="">
                                    </div>
                                    <div class="col-md-4 col-sm-4 col-xs-12">
                                        <input type="text" class="subject" name="subject" placeholder="Subject..." value="">
                                    </div>
                                    <div class="col-md-12 col-sm-12">
                                        <textarea id="message" class="input" name="comment" placeholder="Comment..."></textarea>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="btn-black bg-dark text-white" style=" color: white; font-weight: normal; text-transform: uppercase;padding: 20px;">
                                            <input type="submit" name="save" value="Submit now" style="background-color: #0C1021; color: white">
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="widget-item">
                                <h2>Search here</h2>
                                <div class="dec-line"></div>
                                <form method="get" id="blog-search" class="blog-search">
                                    <input type="text" class="blog-search-field" name="search" placeholder="Type keyword..." value="">
                                    <a>
                                        <input type="submit" value="save" style="margin-top: 8px; padding-left: 15px;padding-right: 15px;padding-top: 10px; padding-bottom: 10px;background: #0a0e14;color: white;font-weight: bold;font-style: inherit;">
                                    </a>
                                </form>
                            </div>
                            <div class="widget-item">
                                <h2>About Us</h2>
                                <div class="dec-line">
                                </div>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique earum quod iste, natus quaerat facere a rem dolor sit amet, et placeat nemo.</p>
                                <div class="social-icons">
                                    <ul>
                                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                        <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                        <li><a href="#"><i class="fa fa-rss"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="widget-item">
                                <h2>Recent Posts</h2>
                                <div class="dec-line"></div>
                                <ul class="recent-item">


                                    <?php while ($recent = mysqli_fetch_assoc($recent_data)){  ?>

                                        <li class="recent-post-item">
                                            <a href="#">
                                                <img src="./admin/classic_img/<?php echo $recent['image'];  ?>" alt="">
                                                <span class="post-title"><?php  echo $recent['tital']; ?></span>
                                            </a>
                                            <span class="post-info"><?php echo $recent['date'];  ?></span>
                                        </li>
                                    <?php } ?>

                                </ul>
                            </div>
                            <div class="widget-item">
                                <h2>From Flickr</h2>
                                <div class="dec-line"></div>
                                <div class="flickr-feed">
                                    <ul class="flickr-images">
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>



            <?php  include 'footer.php'; ?>