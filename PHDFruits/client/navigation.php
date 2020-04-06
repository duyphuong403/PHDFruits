<?php

if(!isset($_GET['ref']))
{$ref="";}
else{$ref=$_GET['ref'];}

switch ($ref){
    case "store":
        include 'client/store/index.php';
        break;
    case "client_search":
        include 'client/client_search_DB.php';
        break;
    case "detail_product":
        include 'client/store/detail_product.php';
        break;
    case "view_cart":
        include 'client/Cart/view_cart_detail.php';
        break;
    case "add_to_cart":
        include 'client/Cart/add_to_cart.php';
        break;
    case "blog":
        include 'client/blog/index.php';
        break;
    case "blog_details":
        include 'client/blog/blog_details.php';
        break;
    case "contact":
        include 'client/contact/index.php';
        break;
    case "send_comment":
        include 'client/contact/insert.php';
        break;




    default:
        include 'client/slider.php';
        include 'client/slogan.php';
        include 'client/hot_products.php';
        include 'client/news.php';
        break;
}