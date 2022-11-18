<?php


$conn = mysqli_connect('localhost','root','root','yom');

session_start();
$user_id = $_SESSION['user_id'];

$limit = 3;
$page = 1;
if (isset($_GET['page']))
{
    $page = $_GET['page'];

}
else
{
    $page = 1;
}
$offset = ($page-1)*$limit;


$sel_que =  "SELECT * FROM classic WHERE r_id = $user_id LIMIT {$offset},{$limit}";
$data = mysqli_query($conn,$sel_que);

include 'header.php'; ?>

				<section class="page-heading wow fadeIn" data-wow-duration="1.5s" style="background-image: url(files/images/01-heading.jpg)">
					<div class="container">
						<div class="page-name">
							<h1>Our Blog</h1>
							<span>Lovely layout of heading</span>
						</div>
					</div>
				</section>
				
				<section class="on-blog-grid">
					<div class="container">
						<div class="row">

                            <?php while ($row = mysqli_fetch_assoc($data)){ ?>
							<div class="col-md-4">
								<div class="blog-item classic_img">
									<a href="single_blog.php?blog_id=<?php echo $row['c_id'];  ?>"><img src="./admin/classic_img/<?php echo $row['image'];  ?>" alt=""></a>
									<h3><a href="single_blog.php?blog_id=<?php echo $row['c_id'];  ?>"><?php echo $row['tital'];  ?></a></h3>
									<span><a href="#"><?php echo $row['tital'];  ?></a> / <a href="#"> <?php echo $row['date'];  ?> </a> / <a href="#">Uncategorized</a></span>
									<p> <?php echo $row['descripation']; ?> </p>
									<div class="read-more">
										<a href="single_blog.php?blog_id=<?php echo $row['c_id'];  ?>">Read more</a>
									</div>
								</div>
							</div>
                            <?php } ?>

						</div>
					</div>	
				</section>
                <section>
                    <?php
                    $SELECT = "SELECT * FROM classic WHERE r_id = $user_id";
                    $result = mysqli_query($conn,$SELECT);
                    if (mysqli_num_rows($result)>0)
                    {
                        $count =  mysqli_num_rows($result);
                        echo $count;
                        $total_pg  =ceil($count/$limit);
                        echo $total_pg;
                        echo '<div class="container">';
                        echo '   <div class="pagi">';
                        echo '      <ul class="pagination justify-content-center ">';
                        for ($i=1;$i<=$total_pg;$i++)
                        {
                            echo '<li class="page-item active"> 
                                <a href="blog-grid.php?page='.$i.'" class="page-link">'.$i.'</a> 
                            </li>';
                        }
                    }

                    ?>
                </section>


				<?php include 'footer.php'; ?>