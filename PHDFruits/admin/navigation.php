<?php
    if(!isset($bien_bao_mat)){
        exit();
    }
    if(!isset($_GET['ref']))
    {$ref="";}
    else{$ref=$_GET['ref'];}

    switch ($ref){
        case "products":
            include 'products/index.php';
            break;
        case "add_product":
            include 'products/add_product.php';
            break;
        case "edit_product":
            include 'products/edit_product.php';
            break;
//        case "delete_product":
//            include "products/delete.php";
//            break;

        // Category
        case "category":
            include 'category/index.php';
            break;
        case "add_category":
            include 'category/add_category_form.php';
            break;
        case "edit_category":
            include 'category/edit_category_form.php';
            break;

        // Blogs
        case "blogs":
            include 'blogs/index.php';
            break;
        case "edit_blog":
            include 'blogs/edit-form.php';
            break;
        case "delete_blog":
            include 'blogs/delete.php';
            break;


        // Order
        case "order":
            include 'order/index.php';
            break;
        case "view_order":
            include 'order/view_order_detail.php';
            break;
        case "view_order_not_delivery":
            include 'order/view_order_not_delivery.php';
            break;
        case "view_order_delivered":
            include "order/view_order_delivered.php";
            break;
        case "change_status_order":
            include "order/change_status_order.php";
            break;

//         Print Invoice
        case "report":
            include "order/report.php";
            break;
        // Banner
        case "banner":
            include 'banner/index.php';
            break;
        case "add_banner":
            include 'banner/add_banner_form.php';
            break;
        case "edit_banner":
            include 'banner/edit_banner_form.php';
            break;

        // Contact
        case "contact":
            include 'contact/index.php';
            break;

        // Search
        case "search":
            include 'products/search_product_DB.php';
            break;

        case "change_pass":
            include 'manage_account_admin/change_pass.php';
            break;

        default:
            include 'admin.php';
            break;
    }