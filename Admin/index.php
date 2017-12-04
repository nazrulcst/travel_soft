<?php include_once('loginVarify.php');?>
<?php include('include/header.php');?>	
<?php include('include/left_bar.php');?>

	<!-- Content Wrapper. Contains page content -->
	<div class="content-wrapper">
		 <section class="content"><!-- Main content -->
		    	<?php
		    		if(isset($_GET['page'])){
		    			$page=$_GET['page'];
		    			if(isset($_GET['folder'])){
		    				$folder=$_GET['folder'];
		    				include($folder.'/'.$page.'.php');
		    			}else{
		    				include($page.'.php');
		    			}
		    		}
		    		if(!isset($_GET['page'])){//it's use for just only index.php
		    	
		    			$info="
		    				<pre>Say something about you (-_-)</pre>
		    			";
		    			echo $info;	
		    		}
		    	?>
		    </section><!-- /Main content -->
	</div>
	<!-- /content-wrapper -->
<?php include('include/footer.php');?>