<?php
require "admin/config.php";
$tv = mysqli_query($connect,"select * from articles order by id desc");

?>
<div class="tr-blog section-padding section-bg-white">
    <div class="container">
        <div class="section-title">
            <h1></h1>
            <h2>Tin tức mới</h2>
        </div>
        <div class="blog-slider">
         <?php
        while ($tv_2 = mysqli_fetch_array($tv)){?>

            <div class="blog-item">
                <div class='row'>
                    <?php
                    for($i=1;$i<=3;$i++)
                    {
                        if($tv_2!=false){
                        $id = $tv_2['id'];
                        $link_detail = "?ref=blog_details&id=$id";
                        $link_image = $tv_2['link'];
                        $author = $tv_2['author'];
                        $title = $tv_2['title'];
                        $content = $tv_2['post'];
                        $string = strip_tags($content);
                        if (strlen($string) > 500) {

                            // truncate string
                            $stringCut = substr($string, 0, 500);
                            $endPoint = strrpos($stringCut, ' ');

                            //if the string doesn't contain any space then it will cut without word basis.
                            $string = $endPoint? substr($stringCut, 0, $endPoint) : substr($stringCut, 0);
                            $string .= '... <a href="?ref=blog_details&id='.$id.'" style="color: blue;">Đọc tiếp</a>';
                        }
                    ?>
                    <div class="col-md-4">
                        <div class="tr-post">
                            <div class="entry-header">
                                <div class="entry-thumbnail">
                                    <a href="<?php echo $link_detail ?>"><img src="<?php echo $link_image ?>" alt="Image" class="img-fluid"></a>
                                </div>
                            </div>
                            <div class="entry-content">
                                <div class="entry-meta">
                                    <ul class="global-list">
                                        <li><?php echo $author?></li>
                                    </ul>
                                </div>
                                <h2 class="entry-title"><a href="<?php echo $link_detail?>"><?php echo $title?></a></h2>
                                <?php echo $string?>
                            </div>
                        </div><!-- /.tr-post  -->
                    </div>
                            <?php
                        }
                        else
                        {
                            echo "&nbsp;";
                        }
                        if($i!=3)
                        {
                            $tv_2=mysqli_fetch_array($tv);
                        }
                    }
                        echo "</div></div><!-- /.blog-item -->";
                    }?>
                </div><!-- /.blog-slider -->
    </div><!-- /.container -->
</div><!-- /.tr-blog -->