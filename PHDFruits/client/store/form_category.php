<div class="widget widget_categories">
    <h3 class="widget_title"><a class="widget_title" href="?ref=store">Danh Mục Sản Phẩm</a></h3>
    <ul>
        <?php
        $tv="select * from category order by id ";
        $tv_1=mysqli_query($connect,$tv);
        while($tv_2=mysqli_fetch_array($tv_1))
        {
            $ten=$tv_2['name_category'];
            $id=$tv_2['id'];
            echo "<li><a href='?ref=store&id_menu=".$id."'>$ten</a></li>";
        }
        ?>
    </ul>
</div><!-- /.widget -->