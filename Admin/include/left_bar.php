	<!-- Left side column. contains the logo and sidebar -->
	<aside class="main-sidebar">
		<!-- sidebar: style can be found in sidebar.less -->
		<section class="sidebar">
			<!-- Sidebar user panel -->
			<div class="user-panel">
				<div class="pull-left image">
					<img src="dist/img/avatar04.png" class="img-circle" alt="User Image">
				</div>
				<div class="pull-left info text-red">
					<p>Mainul Islam</p>
					<a href="#" class="text-yellow"><i class="fa fa-circle text-success"></i> Online</a>
				</div>
			</div>
		  <!-- search form -->
			<form action="#" method="get" class="sidebar-form">
				<div class="input-group">
					<input type="text" name="q" class="form-control" placeholder="Search...">
					<span class="input-group-btn">
						<button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
						</button>
					 </span>
				</div>
			</form>
		  <!-- /.search form -->
		  <!-- sidebar menu: : style can be found in sidebar.less -->
			<ul class="sidebar-menu" data-widget="tree">
				<li class="header">MAIN NAVIGATION</li>
				<li class="<?php echo(isset($_GET['folder']) && $_GET['folder']=='login')?'active':null;?> treeview">
					<a href="#">
						<i class="fa fa-dashboard text-red"></i> <span class="text-red">Dashboard</span>
						<span class="pull-right-container">
							<i class="fa fa-angle-left pull-right text-red"></i>
						</span>
					</a>
					<ul class="treeview-menu">
						<li class="<?php echo(isset($_GET['page']) && $_GET['page']=='registration')?'active':null;?>"><a href="index.php?page=registration&folder=login"><i class="fa fa-circle-o text-red"></i>Registration</a></li>
						<li class="<?php echo(isset($_GET['page']) && $_GET['page']=='adminView')?'active':null;?>"><a href="index.php?page=adminView&folder=login"><i class="fa fa-circle-o text-red"></i>View All Admin</a></li>
						<li class="<?php echo(isset($_GET['page']) && $_GET['page']=='addContact')?'active':null;?>"><a href="index.php?page=addContact&folder=login"><i class="fa fa-circle-o text-red"></i>Add Contact</a></li>
					</ul>
				</li>
				<!-- End Dashboard-->
				<!-- Mail Box-->
				<li class="<?php echo(isset($_GET['folder']) && $_GET['folder']=='mailbox')?'active':null;?> treeview">
					<a href="#">
						<i class="fa fa-envelope text-yellow"></i> <span class="text-yellow">Mailbox</span>
						<span class="pull-right-container">
							<i class="fa fa-angle-left pull-right text-yellow"></i>
						</span>
					</a>
					<ul class="treeview-menu">
						<li class="<?php echo(isset($_GET['page']) && $_GET['page']=='mailbox')?'active':null;?>"><a href="index.php?page=mailbox&folder=mailbox"><i class="fa fa-circle-o text-green"></i>Show mail</a></li>
					</ul>
				</li>
				<!-- End Mail Box-->
				<li class="<?php echo(isset($_GET['folder']) && $_GET['folder']=='package')?'active':null;?> treeview">
					<a href="#">
						<i class="fa fa-th-list text-green"></i> <span class="text-green">Packages</span>
						<span class="pull-right-container">
							<i class="fa fa-angle-left pull-right text-green"></i>
						</span>
					</a>
					<ul class="treeview-menu">
						<li class="<?php echo(isset($_GET['page']) && $_GET['page']=='addPackage')?'active':null;?>"><a href="index.php?page=addPackage&folder=package"><i class="fa fa-circle-o text-green"></i>Add Special Package</a></li>
					</ul>
				</li>
				<!-- End Packages-->
				<li class="<?php echo(isset($_GET['folder']) && $_GET['folder']=='offer')?'active':null;?> treeview">
					<a href="#">
						<i class="fa fa-gift text-yellow"></i> <span class="text-yellow">Offers</span>
						<span class="pull-right-container">
							<i class="fa fa-angle-left pull-right text-yellow"></i>
						</span>
					</a>
					<ul class="treeview-menu">
						<li class="<?php echo(isset($_GET['page']) && $_GET['page']=='offer')?'active':null;?>"><a href="index.php?page=offer&folder=offer"><i class="fa fa-circle-o text-yellow"></i>Add Exclusive offer</a></li>
					</ul>
				</li>
				<!-- End Offers-->
				
				<li class="header">Special</li>
				<li><a href="#"><i class="fa fa-circle-o text-red"></i> <span>Save note</span></a></li>
				<li><a href="#"><i class="fa fa-circle-o text-red"></i> <span>Save note 2</span></a></li>
			</ul>
		</section>
		<!-- /.sidebar -->
	</aside>
	<!-- / aside-->