<div id="car_specs_main">
	<div id="home">
		<div class="row">
			<div class="large-12 columns">
				<h3>Car Specifications</h3>
				<hr />
			</div>
		</div>

		<div class="row">
	      <div class="large-10 columns">
	        <h3><a href="#car_specs/list_car_specs">List of Cars</a></h3>
	      </div>
	    </div>
	    
	    <div class="row">
	      <div class="large-10 columns">
	        <h3><a href="#car_specs/register_car_specs">Register a Car</a></h3>
	      </div>
	    </div>
	</div>

	<div id="register_car_specs">
		<div class="row">
		    <div class="large-12 columns">
		      <h3>Car Specification Information System</h3>
		      <hr />
		    </div>
		</div>

		<div class="row">
		    <div class="large-10 columns vert-buffer">
		      <h5>Register</h5>
		      <div class="row">
		        <div class="small-12 columns">
		          <p>
		            Manual Entry |
		            <a href="#car_specs/register_car_specs/bulk">Excel Import</a>
		          </p>
		        </div>
		      </div>
		      <form data-abide>
		        <div id="register_form">
		        </div>
		      </form>
		    </div>
		 </div>
	</div>

	<div id="car_specs_bulk_import">
		<div class="row">
			<div class="large-12 columns">
				<h3>Car Specification Information System</h3>
				<hr />
			</div>
		</div>

		<div class="row">
		  <div class="large-10 columns">
		    <h5>Register</h5>
		    <div class="row">
		      <div class="small-12 columns">
		        <p>
		        <a href="#car_specs/register_car_specs">Manual Entry</a> | Excel Import
		        </p>
		      </div>
		    </div>
		  </div>
		</div>

		<div class="row">
		     <form id="">
		     <div class="row">
		        <div class="small-4 columns">
		            <label for="excel_upload" class="left inline">Excel File (.xls, .xlsx) : </label>
		        </div>

		        <div class="small-8 columns">
		            <input type="file" id="excel_upload"/>
		            <div style="width: 0px;" id="upload_progress"></div>
		            <div class="small button" id="upload_btn">&nbsp;Upload</div>
		        </div>
		        </div>
		    <div class="row">    
		    <div class="small-4 columns">
		      <label id="excel_name" class="left inline">
		        Uploaded File :
		      </label>
		    </div>

		    <div class="small-8 columns">
		      <div class="small button" id="process_btn">&nbsp;Process</div>
		    </div>
		    </div>
		    </form>
		</div>

		<div class="row" id="upload_results">
		</div>

		<br/>
		<div class="row ">
		  <div class="large-12 columns">
		  <h6><span class="icon-info2"></span> Make sure you have the following column headers in Excel</h6>
		  <table>
		    <tr>
		      <td>Registration ID</td>
		      
		  </table>
		 </div>
		</div>
	</div>

	<div id="list_car_specs">
		<div class="row">
			<div class="large-12 columns">
				<h3>Car Specification Information System</h3>
				<hr />
			</div>
		</div>
		<div class="row" id="search_car_specs">

		</div>
	</div>
</div>