<?php 
	if(!isset($bien_bao_mat)){exit();}
?>
<?php
    // Category
	if(isset($_POST['add_category']))
	{
		include("category/add_category_database.php");
        header('location: ?ref=category');
	}
	if(isset($_POST['edit_category']))
	{
		include("category/edit_category_db.php");
        header('location: ?ref=category');
	}
	if(isset($_GET['delete_category']))
	{
		include("category/delete.php");
		trang_truoc_html();
	}

	// Products
    if(isset($_POST['add_product']))
    {
        include("products/add_product_DB.php");
        header('location: ?ref=products');
    }
    if(isset($_POST['search_product']))
    {
        include("products/search_product_DB.php");
        trang_truoc_html();
    }
    if(isset($_POST['edit_product']))
    {
        include("products/edit_product_db.php");
        header('location: ?ref=products');
    }
    if(isset($_GET['delete_product']))
    {
        include("products/delete.php");
        header('location: ?ref=products');;
    }

    // Banner
    if(isset($_POST['add_banner']))
    {
        include("banner/add_banner_DB.php");
        header('location: ?ref=banner');
    }
    if(isset($_POST['edit_banner']))
    {
        include("banner/edit_banner_DB.php");
        header('location: ?ref=banner');
    }
	if(isset($_GET['delete_banner']))
	{
		include("banner/delete.php");
		trang_truoc_html();
	}

	// Blogs
	if(isset($_POST['edit_blogs']))
	{
		include("blogs/edit_blogs_DB.php");
		header('location: ?ref=blogs');
	}
	if (isset($_POST['delete_blog'])){
	    include ("blogs/delete.php");
	    header('location: ?ref=blogs');
    }
	if (isset($_POST['insert_blog'])){
		include ("blogs/insert.php");
		header('location: ?ref=blogs');
	}

	// Contact
    if (isset($_POST['update_contact'])){
        include 'contact/update.php';
        header('location: ?ref=contact');
    }
    if (isset($_POST['delete_comment'])){
        include 'contact/delete.php';
        header('location: ?ref=contact');
    }


	//Order

	if(isset($_GET['delete_order_detail']))
	{
		include("order/delete_order_detail.php");
        header('location: ?ref=order');
	}

	//change password
	if(isset($_POST['form_change_pass']))
	{
        include("manage_account_admin/change_pass_DB.php");
    //			trang_truoc_html();
	}

	// report
	if(isset($_GET['report']))
	{
		include("order/report.php");
		//			trang_truoc_html();
	}

    //log out
	if(isset($_GET['ref']))
	{
		if($_GET['ref']=="logout")
		{
			include("logout.php");
			trang_truoc_html();
		}
	}
?>