<?php
  $installation_root = $config["installation_root"];
?>

<div id="application">

	<div id="status_bar" class="row">
	    <div class="large-10 columns">
	        <div class="large-5  small-offset-3 columns" id="container">
	        </div>
	    </div>
	</div>

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
	<div class="large-9 columns">
		<div id="top">
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
			</div>
			<?php
				include("global.ctp");
				$keys = array_keys($activated_modules);
				foreach ($keys as &$key) {
					include("$key.ctp");
				}
			?>
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