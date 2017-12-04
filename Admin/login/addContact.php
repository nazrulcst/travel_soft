<!-- Personal Contact -->
<section class="content">
	<!-- Main row -->
	<div class="row">
	<!-- Left col -->
		<section class="col-sm-8 col-sm-offset-2 connectedSortable" style="margin-top:40px;">
			<!-- quick email widget -->
			<div class="box box-info">
 				<div class="box-header">
              		<i class="fa fa-info-circle"></i>
              		<h3 class="box-title">Personal Contact</h3>
					<?php
						if(isset($_SESSION['contactMsg'])){
							echo $_SESSION['contactMsg'];
							unset($_SESSION['contactMsg']);
						}
					?>
            	</div>
            	<div class="box-body">
              		<form action="insertAction/contactAdd.php" method="post">
						<div class="form-group">
		                  <input type="text" name="phone" placeholder="Phone" class="form-control" required>
		                </div>
		                <div class="form-group">
		                  <input type="email" name="email" placeholder="Email" class="form-control" required>
		                </div>
						<div class="form-group">
                  			<input type="text" name="address" placeholder="Address" class="form-control" required>
                		</div>
		                <div class="form-group">
		                  <input type="text" name="website" placeholder="Popular Media" class="form-control" required>
		                </div>
						<div class="box-footer clearfix">
							<button type="submit" class="pull-right btn btn-default" id="sendEmail">Save
							<i class="fa fa-arrow-circle-right"></i></button>
						</div>
              		</form>
            	</div>
          </div>

        </section>
        <!-- /.Left col -->
    </div>
    <!-- /.row (main row) -->
</section>
<script>
	window.setTimeout(function() {
		$(".alert").fadeTo(500, 0).slideUp(500, function(){
			$(this).remove(); 
		});
	}, 1000);
</script>