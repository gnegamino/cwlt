		<div class="container-fluid">
			<div id="footer" class="row">
				<div class="left-part">
					Copyright @ 2018. CWLT Trucking Services. All Rights Reserved
				</div>
				<div class="right-part">
					<i class="fab fa-facebook fa-2x"></i>
					<i class="fab fa-instagram fa-2x"></i>
				</div>
			</div>
		</div>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="scripts/index.js"></script>
	</body>
</html>
<!-- Request a Quote -->
<div class="modal fade" id="request-quote" tabindex="-1" role="dialog" aria-labelledby="request-quote-label">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title" id="request-quoteLabel">Request a Quote</h4>
			</div>
			<div class="modal-body">
				<form>
					<div class="row">
						<div class="col-md-6">
							<div class="form-group">
								<input type="text" class="form-control" placeholder="Name">
							</div>
							<div class="form-group">
								<input type="text" class="form-control" placeholder="Company">
							</div>
							<div class="form-group">
								<input type="text" class="form-control" placeholder="Pickup Date">
							</div>
							<div class="form-group">
								<input type="text" class="form-control" placeholder="Pickup Location">
							</div>
							<div class="form-group">
								<select class="form-control">
									<option>Truck Type / Model</option>
									<option>Closed Van</option>
									<option>Big Truck</option>
								</select>
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<input type="text" class="form-control" placeholder="Email">
							</div>
							<div class="form-group">
								<input type="text" class="form-control" placeholder="Phone">
							</div>
							<div class="form-group">
								<input type="text" class="form-control" placeholder="Pickup Time">
							</div>
							<div class="form-group">
								<input type="text" class="form-control" placeholder="Drop Location">
							</div>
							<div class="form-group">
								<input type="text" class="form-control" placeholder="Type of Cargo">
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<textarea class="form-control" rows="4" placeholder="Enter specific instructions, etc."></textarea>
						</div>
					</div>
				</form>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn cwlt-success" data-dismiss="modal">Submit</button>
			</div>
		</div>
	</div>
</div>