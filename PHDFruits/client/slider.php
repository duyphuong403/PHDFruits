
<?php
//slider
function make_query($connect) {
    $query = "SELECT * FROM banner ORDER BY id ASC";
    $result = mysqli_query($connect, $query);
    return $result;
}

function make_slide_indicators($connect) {
    $output = '';
    $count = 0;
    $result = make_query($connect);
    while($row = mysqli_fetch_array($result))
    {
        if($count == 0)
        {
            $output .= '<li data-target="#dynamic_slide_show" data-slide-to="'.$count.'" class="active"></li>';
        }
        else
        {
            $output .= '<li data-target="#dynamic_slide_show" data-slide-to="'.$count.'"></li>';
        }
        $count = $count + 1;
    }
    return $output;
}

function make_slides($connect) {
    $output = '';
    $count = 0;
    $result = make_query($connect);
    while($row = mysqli_fetch_array($result))
    {
        if($count == 0)
        {
            $output .= '<div class="item active">';
        }
        else
        {
            $output .= '<div class="item">';
        }
        $output .= '<img class="banner-img" src="admin/banner/uploads/'.$row["file_name"].'" alt="'.$row["file_name"].'" style="width:100%; height:'.$row["height"].'px; max-height: 400px"/>
                <div class="carousel-caption">
                </div>
                </div>
            ';
        $count = $count + 1;
    }
    return $output;
}
?>
<div class="container-fluid" style="width: 100%;padding: 0">
    <div id="dynamic_slide_show" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators" style="width: auto">
            <?php echo make_slide_indicators($connect); ?>
        </ol>

        <div class="carousel-inner">
            <?php echo make_slides($connect); ?>
        </div>
        <a class="left carousel-control" href="#dynamic_slide_show" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left"></span>
            <span class="sr-only">Previous</span>
        </a>

        <a class="right carousel-control" href="#dynamic_slide_show" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</div><!-- /Slider -->