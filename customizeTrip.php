<?php include('inc/header.php');?>
		<div id="fh5co-contact" class="fh5co-section-gray">
			<div class="container">
				<div class="row">
					<div class="col-md-8 col-md-offset-2 text-center heading-section animate-box">
						<h3>Customize Your Trip</h3>
						<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
					</div>
				</div>
				<form action="#">
					<div class="row animate-box">
						<div class="col-md-12">
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<label for="adult">Adult :</label>
										<select name="adult" id="adult" class="form-control">
											<option value="1">1</option>
											<option value="2">2</option>
											<option value="3">3</option>
											<option value="4">4</option>
										</select>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label for="child">Child (Up to 02-12 years old) :</label>
										<select name="child" id="child" class="form-control">
											<option value="1">1</option>
											<option value="2">2</option>
											<option value="3">3</option>
											<option value="4">4</option>
										</select>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label for="country">Country :</label>
										<input type="text" name="country" id="country" class="form-control" placeholder="Enter a country name">
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label for="city">City :</label>
										<input type="text" name="city" id="city" class="form-control" placeholder="Choose a city">
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label for="date-start">Check-In :</label>
										<input type="date" name="checkIn" id="date-start" class="form-control" placeholder="Check in date">
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label for="date-end">Check-Out :</label>
										<input type="date" name="checkOut" id="date-end" class="form-control" placeholder="Check out date">
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label for="fname">First Name :</label>
										<input type="text" name="fname" id="fname" class="form-control" placeholder="Your first name">
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label for="lname">Last Name :</label>
										<input type="text" name="lname" id="lname" class="form-control" placeholder="Your last name">
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label for="phone">Phone Number :</label>
										<input type="text" name="phone" id="phone" class="form-control" placeholder="Phone number">
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label for="email">E-mail :</label>
										<input type="email" name="email" id="email" class="form-control" placeholder="E-mail address">
									</div>
								</div>
								<div class="col-md-12">
									<div class="form-group">
										<textarea name="note" class="form-control" id="" cols="21" rows="4" placeholder="Special note"></textarea>
									</div>
								</div>
								<div class="col-md-12">
									<div class="form-group">
										<input type="submit" value="Send Message" class="btn btn-primary">
									</div>
								</div>
							</div>
						</div>
					</div>
				</form>
			</div>
		</div>
<?php include('inc/footer.php');?>