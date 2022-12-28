<?php
if(isset($_POST))
{
	include"../admin/inc/config.php";
	$offset = $_REQUEST['page'] * 10;
	$pselect = mysqli_query($con,"select * from posts order by id desc limit 10 offset $offset ");$i=0;
	while ($row = mysqli_fetch_array($pselect)) {
?>
<div class="col-md-6">
<div class="single-blog-list">
    <div class="row">
        <div class="col-md-4 col-sm-4 col-xs-12">
            <div class="blog-list-img">
                <img src="admin/upload/<?=$row['image'] ?>" alt="img" style="width: 100%;">
            </div>
        </div>
        <div class="col-md-8 col-sm-8 col-xs-12">
            <div class="blog-list-content">
                <a class="blc-name" href="#"><?=$row['title'] ?></a>
                <p class="blc-text"><?=$row['decs'] ?></p>
                <ul class="blc-meta">
                    <li><a href="#"><i class="fa fa-clock-o"></i></a><?=$row['datee'] ?></li>
                <!--     <li><a href="#"><i class="fa fa-commenting"></i></a>12</li>
                    <li><a href="#"><i class="fa fa-list-ul"></i></a>Lessons</li> -->
                </ul>
                <!-- <a class="blc-read-more hvr-bs" href="#">Read More</a> -->
            </div>
        </div>
    </div>
</div>
</div>

<?php 
$i++;
if ($i==2) {
	echo "<hr>";
	$i=0;
}


}} ?>