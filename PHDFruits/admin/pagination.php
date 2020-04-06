<!-- Pagination-->
<div class="navigation" align="center">
    <ul class="clear">
        <?php
        if(isset($total_pages))
        {
            if($total_pages > 1)
            {    // nếu tổng số trang > 1 in dòng Page... of...
                echo '<li class="single">Page '.$curr_page. ' of '.$total_pages.'</li>';
                // nếu trang hiện tại lớn hơn số link muốn hiển thị
                if($curr_page > $num_links)
                {
                    // thì in nút 'First'
                    echo '<li><a href="'.$page_url.'?search='.$search.'&page=1">First</a></li>';
                }
                // nếu trang hiện tại > 1
                if($curr_page > 1)
                {
                    // in nút 'Previous'
                    echo '<li><a href="'.$page_url.'?search='.$search.'&page='.($curr_page-1).'">Previous</a> </li>';
                }

                // hiển thị các link bao gồm trang hiện tại và link trang hiển thị (trái và phải) bắt đầu từ $start, kết thúc là $end
                // $start và $end được tính trong pagination.php
                for($pages = $start ; $pages <= $end ;$pages++)
                {
                    if($pages == $curr_page)
                    {
                        echo '<li class="active"><a href="'.$page_url.'?search='.$search.'&page='.$pages.'">'.$pages.'</a></li>';
                    }
                    else
                    {
                        echo '<li><a href="'.$page_url.'?search='.$search.'&page='.$pages.'">'.$pages.'</a></li>';
                    }
                }
                // nếu trang hiện tại < tổng số trang
                if($curr_page < $total_pages )
                {
                    // thì in nút 'Next'
                    echo '<li><a href="'.$page_url.'?search='.$search.'&page='.($curr_page+1).'">Next</a></li>';
                }
                // nếu trang hiện tại + số link muốn hiển thị (ở đây là + với số link bên phải) > tổng số trang
                if(($curr_page + $num_links) <$total_pages )
                {
                    // thì in nút 'Last'
                    echo '<li><a href="'.$page_url.'?search='.$search.'&page='.$total_pages.'">Last</a> </li>';
                }
            }
        }
        ?>
    </ul>
</div>
<!--/Pagination-->