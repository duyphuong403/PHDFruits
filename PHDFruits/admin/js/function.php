<?php
if(!isset($bien_bao_mat)){exit();}
?>
<?php 
	function trang_truoc_html()
	{
		?>
			<html><head>
			  <meta charset="UTF-8">
			  <title>Đang chuyển về trang trước</title></head>
			<body>
				<script type="text/javascript">
					window.history.back();
				</script>	
			</body>
			</html>
		<?php 
	}
	function thong_bao_html($c)
	{
		$lien_ket_trang_truoc=$_SERVER['HTTP_REFERER'];
		?>
			<html><head>
			  <meta charset="UTF-8">
			  <title>Thông báo</title></head>
			<body>
                <script type="text/javascript">
                    alert("<?php echo $c; ?>");
                    window.history.back();
                </script>
			</body>
			</html>
		<?php 
		exit();
	} ?>
