<?php
require 'admin/config.php';
if (isset($_GET['id'])){
    $id = $_GET['id'];
}

$tv = mysqli_query($connect,"select * from articles where id = '$id'");
$tv_3 = mysqli_fetch_array($tv);

$title = $tv_3['title'];
$link_image = $tv_3['link'];
$content = $tv_3['post'];
$author = $tv_3['author'];
$date = $tv_3['date'];
?>
<div class="tr-breadcrumb text-center bg-image" style="background-image: url(client/images/breadcrumb-bg.jpg);">
    <div class="container">
        <div class="page-title">
            <h1>Tin tức chi tiết</h1>
            <h2 style="font-size: 2rem"><?php echo $title?></h2>
        </div>
    </div><!-- /.container -->
</div><!-- /.tr-breadcrumb -->
<div class="main-content bg-color blog-details">
    <div class="container">
        <div class="row">
            <div class="tr-blog blog-two">
                <div class="tr-post">
                    <div class="entry-header">
                        <div class="entry-thumbnail">
                            <img src="<?php echo $link_image?>" alt="Image <?php echo $title?>" class="img-fluid">
                        </div>
                    </div>
                    <div class="entry-content">
                        <div class="post-time">
                            <span><?php echo $date?></span>
                        </div>
                        <div class="entry-meta">
                            <ul class="global-list">
                                <li><?php echo $author?></li>
                            </ul>
                        </div>
                        <h2 class="entry-title"><?php echo $title?></h2>
                        <p><?php echo $content?></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
