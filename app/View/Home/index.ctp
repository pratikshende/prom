<?php
  $installation_root = $config["installation_root"];
  $product_name = $config["product_name"];
  $service_center_name = $config["service_center_name"];
?>

<div id="application">

	<div id="status_bar" class="row">
	    <div class="large-10 columns">
	        <div class="large-5  small-offset-3 columns" id="container">
	        </div>
	    </div>
	</div>
	<nav class="top-bar">
	  <ul class="title-area">
	    <li class="name">
	      <h1><a href="<?php echo $config["installation_root"]; ?>"><?php echo $service_center_name; ?></a></h1>
	    </li>
	  </ul>

	  <ul class="title-area center">
	     <li class="name">
	        <h1><a href="<?php echo "$installation_root/home"; ?>"><?php echo $product_name; ?></a></h1>
	      </li>
	  </ul>
	  <ul class="title-area right">
	  	<li class="name"><h1><a href="<?php echo $installation_root; ?>/login/logout">Logout</a></h1></li>
	  </ul>
	</nav>

	<?php 
		$keys = array_keys($activated_modules);

		$place = array();
		for ($i=0; $i < 10; $i++) { 
			$place[$i] = null;
		}
		$i = 0;
		foreach ($keys as &$key) {
			$place[$i] = $key;
			$i++;
		}
	?>
	<div >
  <div class="row" >
    <div class="large-3 columns" id="sidebar">
      <div>
                <h5 class="school-name"><?php echo $config["service_center_name"]; ?></h5>
            </div>         
            <div id='cssmenu'>
              <ul>
                <?php if(array_key_exists('sci', $activated_modules)) { ?>
                  <li><a href='#'><span> SC Information</span></a>
                      <ul>
                         <li><a href='#sci/list_service_center'><span>List of SC</span></a></li>
                         <li><a href='#sci/register_service_center'><span>Register SC</span></a></li>
                      </ul>
                   </li>
                 <?php } ?>
                 <?php if(array_key_exists('hrm', $activated_modules)) { ?>
                 <li class='has-sub'><a href='#'><span> Mechanics Information</span></a>
                    <ul>
                       <li><a href='#hrm/attendance'><span>Attendance</span></a></li>
                       <li class='last'><a href='#hrm/register_mechanics'><span>Register Mechanics</span></a></li>
                       <li><a href='#hrm/list_mechanics'><span>Search Mechanics</span></a></li>
                       <li><a href='#hrm/inform_mechanics'><span>Inform</span></a></li>
                    </ul>
                  </li>
                  <?php } ?>

                  <?php if(array_key_exists('report', $activated_modules)) { ?>
                  <li class='has-sub'><a href='#'><span><span>&nbsp;Reports</span></a>
                    <ul>
                       <li><a href='#report/hr'><span>HR Reports</span></a></li>
                       <li><a href='#report/financial'><span>Financial Reports</span></a></li>
                       <li><a href='#report/equipment'><span>Equipment Reports</span></a></li>
                       <li><a href='#report/customer'><span>Customer Reports</span></a></li>
                       <li class='last'><a href='#report/complaint'><span>Complaint Reports</span></a></li>
                       <li class='last'><a href='#report/amc'><span>AMC Reports</span></a></li>
                       <li class='last'><a href='#report/warranty'><span>Warranty Reports</span></a></li>
                    </ul>
                  </li>
                  <?php } ?>

              </ul>
            </div>
            
    </div>
    
    <div class="large-9 columns" style="padding-top:2.5em;">
        <div id="top" >
          <div class="row">

            <div class="large-4 columns">
              <?php
                if($place[0]) {
                  include("$place[0]_header.ctp");
                }
              ?>
            </div>

            <div class="large-4 columns">
              <?php
                if($place[1]) {
                  include("$place[1]_header.ctp");
                }
              ?>
            </div>

            <div class="large-4 columns">
              <?php
                if($place[2]) {
                  include("$place[2]_header.ctp");
                }
              ?>
            </div>
          </div>

          <div class="row">
            <div class="large-4 columns">
              <?php
                if($place[3]) {
                  include("$place[3]_header.ctp");
                }
              ?>
            </div>

            <div class="large-4 columns">
              <?php
                if($place[4]) {
                  include("$place[4]_header.ctp");
                }
              ?>
            </div>

            <div class="large-4 columns">
              <?php
                if($place[5]) {
                  include("$place[5]_header.ctp");
                }
              ?>
            </div>
          </div>

          <div class="row">
            <div class="large-4 columns">
              <?php
                if($place[6]) {
                  include("$place[6]_header.ctp");
                }
              ?>
            </div>

            <div class="large-4 columns">
              <?php
                if($place[7]) {
                  include("$place[7]_header.ctp");
                }
              ?>
            </div>

            <div class="large-4 columns">
              <?php
                if($place[8]) {
                  include("$place[8]_header.ctp");
                }
              ?>
            </div>
          </div>

          <div class="row">
            <div class="large-4 columns">
              <?php
                if($place[9]) {
                  include("$place[9]_header.ctp");
                }
              ?>
            </div>
          </div>
        </div>  
        <?php
          include("global.ctp");
          $keys = array_keys($activated_modules);
          foreach($keys as &$key) {
            include("$key.ctp");
          }
        ?>
    </div>    
  </div>
</div>
</div>	

<script type="text/template" id="tmpl_status_bar_success">
  <div data-alert class="alert-box success round" id="success">
      <%= message %>
      <a href="#" class="close">&times;</a>
  </div>
</script>

<script type="text/template" id="tmpl_status_bar_fail">
  <div data-alert class="alert-box alert round" id="fail">
      <%= message %>
      <a href="#" class="close">&times;</a>
  </div>  
</script>

<script type="text/template" id="tmpl_status_bar_default">
  <div data-alert class="alert-box alert round" id="default">
      <%= message %>
      <a href="#" class="close">&times;</a>
  </div>
</script>