<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
session_start();
$limit =3;
$user_id = $_SESSION['user_id'];
$page = 1;
if (isset($_GET['page']))
{
    $page = $_GET['page'];
}
else{
    $page = 1;
}
$offset = ($page - 1)*$limit;

$conn = mysqli_connect('localhost','root','root','yom');

$sel_que = "SELECT letest.*, category.cat_name FROM category INNER JOIN letest ON letest.cat_id = category.id";
$data = mysqli_query($conn,$sel_que);
include 'header.php';

?>

				<section class="page-heading wow fadeIn" data-wow-duration="1.5s" style="background-image: url(files/images/01-heading.jpg)">
					<div class="container">
						<div class="page-name">
							<h1>Latest Photos</h1>
							<span>Lovely layout of heading </span>
						</div>
					</div>
				</section>

				<section class="portfolio on-portfolio">
					<div class="container">
						<div class="col-sm-12 text-center">
							<div id="projects-filter">
								<a href="#" data-filter="*" class="active">Show All</a>
                                <?php
                                $sel_category = "SELECT * FROM category";
                                $category_data = mysqli_query($conn,$sel_category);

                                while ($cat_data = mysqli_fetch_assoc($category_data)){
                                ?>

								<a href="#" data-filter=".<?php echo $cat_data['cat_name']; ?>"><?php echo $cat_data['cat_name']; ?></a>

                                    <?php }  ?>
<!--								<a href="#" data-filter=".wallpaper">Wallpaper</a>-->
<!--								<a href="#" data-filter=".nature">Nature</a>-->
<!--								<a href="#" data-filter=".branding">Branding</a>-->
							</div>
						</div>

						<div class="row">
							<div class="row" id="portfolio-grid">
                                <?php while ($row = mysqli_fetch_assoc($data)) {
                                    ?>
                                    <div class="item col-md-4 col-sm-6 col-xs-12 <?php echo $row['cat_name'];   ?>">
                                        <figure class="img_box">
                                            <img src="./admin/letest_img/<?php  echo $row['image']; ?>" >
                                            <figcaption>
                                                <h3><?php echo $row['tital'];  ?></h3>
                                                <p><?php echo $row['decripation']; ?></p>
                                            </figcaption>
                                        </figure>
                                    </div>
                                <?php } ?>
							</div>
						</div>
<!--						<div class="col-md-12">-->
<!--							<div class="portfolio-page-nav text-center">-->
<!--                                --><?php
//                                    $select = "SELECT * FROM letest WHERE user_id = $user_id";
//                                    $data  = mysqli_query($conn,$select);
//                                 if (mysqli_num_rows($data)>0)
//                                 {
//                                     $count = mysqli_num_rows($data);
//                                     $total_pg = ceil($count/$limit);
//                                 }
//
//                                    echo '<div class="container">';
//                                    echo '<div class="pagi">';
//                                    echo '<ul class="pagination justify-content-center ">';
//                                    for ($i=1; $i<=$total_pg; $i++)
//                                    {
//                                        echo '<li class="page-item active">
//                                               <a class="page-link " href="work-3columns.php?page='.$i.'">'.$i.'</a>
//                                           </li>';
//                                    }
//                                ?>
<!--							</div>-->
<!--						</div>-->
					</div>
				</section>

				<?php include 'footer.php';  ?>