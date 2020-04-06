<?php
require 'admin/config.php';
$so_dong_tren_mot_trang=4;

$tv_1= mysqli_query($connect,"select count(*) from articles");
$tv_2=mysqli_fetch_array($tv_1);
$so_trang=ceil($tv_2[0]/$so_dong_tren_mot_trang);
//echo $so_trang;
if(!isset($_GET['page'])){
    $_GET['page']=1;
}
$vtbd=($_GET['page']-1)*$so_dong_tren_mot_trang;
$tv= mysqli_query($connect,"select * from articles order by id desc limit $vtbd,$so_dong_tren_mot_trang");
?>
    <div class="tr-breadcrumb text-center bg-image" style="background-image: url(client/images/breadcrumb-bg.jpg);">
        <div class="container">
            <div class="page-title">
                <h1>Tin tức</h1>
                <h2></h2>
            </div>
        </div><!-- /.container -->
    </div><!-- /.tr-breadcrumb -->
    <div class="main-content bg-color">
        <div class="container">
            <div class="row">
<!--                <div class="col-md-7 col-lg-8 push-md-5 push-lg-4">-->
                    <div class="tr-blog blog-two">
                        <div class="row">
                            <?php
                            while ($tv_3 = mysqli_fetch_array($tv)){
                                $id = $tv_3['id'];
                                $title = $tv_3['title'];
                                $link_image = $tv_3['link'];
                                $content = $tv_3['post'];
                                $string = strip_tags($content);
                                if (strlen($string) > 500) {

                                    // truncate string
                                    $stringCut = substr($string, 0, 500);
                                    $endPoint = strrpos($stringCut, ' ');

                                    //if the string doesn't contain any space then it will cut without word basis.
                                    $string = $endPoint? substr($stringCut, 0, $endPoint) : substr($stringCut, 0);
                                    $string .= '... <a href="?ref=blog_details&id='.$id.'" style="color: blue;">Đọc tiếp</a>';
                                }
                                $author = $tv_3['author'];
                                $date = $tv_3['date'];
                            ?>
                            <div class="col-lg-6">
                                <div class="tr-post">
                                    <div class="entry-header">
                                        <div class="entry-thumbnail">
                                            <a href="?ref=blog_details&id=<?php echo $id?>"><img src="<?php echo $link_image?>" alt="Image <?php echo $title?>" class="img-fluid"></a>
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
                                        <h2 class="entry-title"><a href="?ref=blog_details&id=<?php echo $id?>"><?php echo $title?></a></h2>
                                        <p><?php echo $string?></p>
                                    </div>
                                </div><!-- /.tr-post -->
                            </div>
                            <?php } ?>
                        </div><!-- /.row -->
                        <div class="tr-pagination tr-section text-center">
                            <ul class="pagination">
                                <?php
                                for($i=1;$i<=$so_trang;$i++)
                                {
                                    $link_phan_trang="?ref=blog&page=".$i;?>
                                    <li><a href='<?php echo $link_phan_trang?>' class='page-numbers'><?php echo $i?></a></li>
                                <?php } ?>
                            </ul>
                        </div>
                    </div><!-- /.tr-blog -->
<!--                </div>-->
<!--                <div class="col-md-5 col-lg-4 pull-md-7  pull-lg-8">-->
<!--                    <div class="gb-sidebar">-->
<!--                        <div class="widget-area">-->
<!--                            <div class="widget widget_media_image">-->
<!--                                <img src="client/images/widget1.jpg" alt="Image" class="img-fluid">-->
<!--                            </div><!-- /.widget -->
<!--                            <div class="widget widget_recent_entries">-->
<!--                                <h3 class="widget_title">Bài viết khác</h3>-->
<!--                                <ul>-->
<!--                                    <li class="media">-->
<!--                                        <div class="entry-thumbnail">-->
<!--                                            <a href="#"><img src="images/1.png" alt="Image" class="img-fluid"></a>-->
<!--                                        </div>-->
<!--                                        <div class="media-body">-->
<!--                                            <span class="post-date">Dec 18, 2018</span>-->
<!--                                            <a href="#">Lorem ipsum dolor sit ametdo eiusmod tempor.</a>-->
<!--                                        </div>-->
<!--                                    </li>-->
<!--                                </ul>-->
<!--                            </div><!-- /.widget -->
<!--                        </div><!-- /.widget-area -->
<!--                    </div><!-- /.gb-sidebar -->
<!--                </div>-->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </div><!-- /.main-content -->

