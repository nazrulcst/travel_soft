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

    		<!-- Main content widgets section -->
			<section class="content">
				<!-- Small boxes (Stat box) -->
				<div class="row">
					<!-- small box1 -->
					<div class="col-lg-3 col-xs-6">
						<div class="small-box bg-aqua">
							<div class="inner">
								<h3>150</h3>
								<p>New Orders</p>
							</div>
							<div class="icon">
								<i class="fa fa-shopping-cart"></i>
							</div>
							<a href="#" class="small-box-footer">
								More info <i class="fa fa-arrow-circle-right"></i>
							</a>
						</div>
					</div>
					<!-- small box2 -->
					<div class="col-lg-3 col-xs-6">
						<div class="small-box bg-yellow">
							<div class="inner">
								<h3>44</h3>
								<p>User Registrations</p>
							</div>
							<div class="icon">
								<i class="ion ion-person-add"></i>
							</div>
								<a href="#" class="small-box-footer">
									More info <i class="fa fa-arrow-circle-right"></i>
								</a>
						</div>
					</div>
						<!-- small box3 -->
						<div class="col-lg-3 col-xs-6">
							<div class="small-box bg-red">
								<div class="inner">
									<h3>65</h3>
									<p>Unique Visitors</p>
								</div>
								<div class="icon">
									<i class="ion ion-pie-graph"></i>
								</div>
								<a href="#" class="small-box-footer">
									More info <i class="fa fa-arrow-circle-right"></i>
								</a>
							</div>
						</div>
				</div>
				<!-- /.row small box -->
				<div class="row">
				    <div class="col-md-3 col-sm-6 col-xs-12">
				        <div class="info-box">
				            <span class="info-box-icon bg-aqua"><i class="fa fa-envelope-o"></i></span>
				            <div class="info-box-content">
				              <span class="info-box-text">Messages</span>
				              <span class="info-box-number">1,410</span>
				            </div>
				            <!-- /.info-box-content -->
				        </div>
				         <!-- /.info-box -->
				    </div>
				    <!-- /.col -->
				    <div class="col-md-3 col-sm-6 col-xs-12">
				        <div class="info-box">
				            <span class="info-box-icon bg-red"><i class="fa fa-star-o"></i></span>

				            <div class="info-box-content">
				               <span class="info-box-text">Likes</span>
				               <span class="info-box-number">93,139</span>
				            </div>
				            <!-- /.info-box-content -->
				        </div>
				        <!-- /.info-box -->
				    </div>
				    <!-- /.col -->
				</div>
				<!-- /.row -->
				<!-- =========================================================== -->

				      <div class="row">
				  
				        <div class="col-md-3 col-sm-6 col-xs-12">
				          <div class="info-box bg-green">
				            <span class="info-box-icon"><i class="fa fa-thumbs-o-up"></i></span>

				            <div class="info-box-content">
				              <span class="info-box-text">Likes</span>
				              <span class="info-box-number">41,410</span>

				              <div class="progress">
				                <div class="progress-bar" style="width: 70%"></div>
				              </div>
				                  <span class="progress-description">
				                    70% Increase in 30 Days
				                  </span>
				            </div>
				            <!-- /.info-box-content -->
				          </div>
				          <!-- /.info-box -->
				        </div>
				        <!-- /.col -->
				        <div class="col-md-3 col-sm-6 col-xs-12">
				          <div class="info-box bg-yellow">
				            <span class="info-box-icon"><i class="fa fa-calendar"></i></span>

				            <div class="info-box-content">
				              <span class="info-box-text">Events</span>
				              <span class="info-box-number">41,410</span>

				              <div class="progress">
				                <div class="progress-bar" style="width: 70%"></div>
				              </div>
				                  <span class="progress-description">
				                    70% Increase in 30 Days
				                  </span>
				            </div>
				            <!-- /.info-box-content -->
				          </div>
				          <!-- /.info-box -->
				        </div>
				        <!-- /.col -->
				        <div class="col-md-3 col-sm-6 col-xs-12">
				          <div class="info-box bg-red">
				            <span class="info-box-icon"><i class="fa fa-comments-o"></i></span>

				            <div class="info-box-content">
				              <span class="info-box-text">Comments</span>
				              <span class="info-box-number">41,410</span>

				              <div class="progress">
				                <div class="progress-bar" style="width: 70%"></div>
				              </div>
				                  <span class="progress-description">
				                    70% Increase in 30 Days
				                  </span>
				            </div>
				            <!-- /.info-box-content -->
				          </div>
				          <!-- /.info-box -->
				        </div>
				        <!-- /.col -->
				      </div>
				      <!-- /.row -->

				      <!-- =========================================================== -->

				    <h2 class="page-header">Social Widgets</h2>
					  
				    <div class="row">
				        <div class="col-md-6">
				          <!-- Box Comment -->
				          <div class="box box-widget">
				            <div class="box-header with-border">
				              <div class="user-block">
				                <img class="img-circle" src="dist/img/user1-128x128.jpg" alt="User Image">
				                <span class="username"><a href="#">Jonathan Burke Jr.</a></span>
				                <span class="description">Shared publicly - 7:30 PM Today</span>
				              </div>
				              <!-- /.user-block -->
				              <div class="box-tools">
				                <button type="button" class="btn btn-box-tool" data-toggle="tooltip" title="Mark as read">
				                  <i class="fa fa-circle-o"></i></button>
				                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
				                </button>
				                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
				              </div>
				              <!-- /.box-tools -->
				            </div>
				            <!-- /.box-header -->
				            <div class="box-body">
				              <img class="img-responsive pad" src="dist/img/photo2.png" alt="Photo">

				              <p>I took this photo this morning. What do you guys think?</p>
				              <button type="button" class="btn btn-default btn-xs"><i class="fa fa-share"></i> Share</button>
				              <button type="button" class="btn btn-default btn-xs"><i class="fa fa-thumbs-o-up"></i> Like</button>
				              <span class="pull-right text-muted">127 likes - 3 comments</span>
				            </div>
				            <!-- /.box-body -->
				            <div class="box-footer box-comments">
				              <div class="box-comment">
				                <!-- User image -->
				                <img class="img-circle img-sm" src="dist/img/user3-128x128.jpg" alt="User Image">

				                <div class="comment-text">
				                      <span class="username">
				                        Maria Gonzales
				                        <span class="text-muted pull-right">8:03 PM Today</span>
				                      </span><!-- /.username -->
				                  It is a long established fact that a reader will be distracted
				                  by the readable content of a page when looking at its layout.
				                </div>
				                <!-- /.comment-text -->
				              </div>
				              <!-- /.box-comment -->
				              <div class="box-comment">
				                <!-- User image -->
				                <img class="img-circle img-sm" src="dist/img/user4-128x128.jpg" alt="User Image">

				                <div class="comment-text">
				                      <span class="username">
				                        Luna Stark
				                        <span class="text-muted pull-right">8:03 PM Today</span>
				                      </span><!-- /.username -->
				                  It is a long established fact that a reader will be distracted
				                  by the readable content of a page when looking at its layout.
				                </div>
				                <!-- /.comment-text -->
				              </div>
				              <!-- /.box-comment -->
				            </div>
				            <!-- /.box-footer -->
				            <div class="box-footer">
				              <form action="#" method="post">
				                <img class="img-responsive img-circle img-sm" src="dist/img/user4-128x128.jpg" alt="Alt Text">
				                <!-- .img-push is used to add margin to elements next to floating images -->
				                <div class="img-push">
				                  <input type="text" class="form-control input-sm" placeholder="Press enter to post comment">
				                </div>
				              </form>
				            </div>
				            <!-- /.box-footer -->
				          </div>
				          <!-- /.box -->
				        </div>
				        <!-- /.col -->
				      </div>
				      <!-- /.row -->

				    </section>
				    <!-- /.content -->
	</div>
	<!-- /content-wrapper -->
<?php include('include/footer.php');?>