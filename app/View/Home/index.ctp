<div id="application">

	<div id="status_bar" class="row">
	    <div class="large-10 columns">
	        <div class="large-5  small-offset-3 columns">
	            <div data-alert class="alert-box alert round" id="fail">
	                <a href="#" class="close">&times;</a>
	            </div>
	            <div data-alert class="alert-box success round" id="success">
	                <a href="#" class="close">&times;</a>
	            </div>
	            <div data-alert class="alert-box round" id="default">
	                <a href="#" class="close">&times;</a>
	            </div>
	        </div>
	    </div>
	</div>
	<div id="sci_main">
		<div id="home">
			<div class="row">
				<div class="large-12 columns">
					<h3>Service Center Information System</h3>
					<hr />
				</div>
			</div>

			<div class="row">
				<div class="large-10 columns">
					<h3><a href="#sci/list_service_centers" id="list_service_centers">List of Service Centers</h3>
				</div>
			</div>


		  <div class="row">
		    <div class="large-10 columns">
		      <h3><a href="#sci/register_service_center" id="register_service_center">Register a Service Center</a></h3>
		    </div>
		  </div>
		</div>
		
		<div id="register_service_center">
			<div class="row">
				<div class="large-12 columns">
					<h3>Service Center Information System</h3>
					<hr />
				</div>
			</div>

			<div class="row">
				<div class="large-10 columns">
					<h3>Register</h3>
					<form id="">
						<fieldset>
							<legend>Service Center Details</legend>
							<div class="row">
				              <div class="small-3 columns">
				                <label for="service_center_name" class="right inline">Name</label>
				              </div>

				              <div class="small-9 columns">
				                <input type="text" value="" id="service_center_name" />
				              </div>
				            </div>
				            <div class="row">
				              <div class="small-3 columns">
				                <label for="service_center_address" class="right inline">Address</label>
				              </div>

				              <div class="small-9 columns">
				                <input type="text" value="" id="service_center_address" />
				              </div>
				            </div>
						</fieldset>
					</form>
					<a href="#" id="btn_register_service_center"class="small button">Register</a>
				</div>
			</div>
		</div>

		<div id="list_service_centers">
			<div class="row">
				<div class="large-12 columns">
					<h3>Service Center Information System</h3>
					<hr />
				</div>
			</div>

			<div class="row">
				<div class="large-10 columns">
					<h3>List of Service Centers</h3>
		            <form action="" method="GET">
		               	<div class="row">
	                    	<div class="small-3 columns">
	                        	<label for="service_center_name" class="right inline">Name</label>
	                    	</div>

	                    	<div class="small-6 columns">
	                        	<input type="text" id="service_center_name" name="service_center_name" value="Pratik Shende"/>
	                    	</div>

	                    	<div class="small-3 columns">
	                        	<input type="submit" class="small button" name="search" value="Search"/>
	                    	</div>
		                </div>
		            </form>
				</div>
			</div>
		</div>
	</div>
</div>	