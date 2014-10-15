<?php

$cwd = realpath(dirname(__FILE__));
$js_path = "$cwd/../app/webroot/js/";
$css_path = "$cwd/../app/webroot/css/";
$jar_path = "$cwd/lib/yuicompressor-2.4.8.jar";

include_once($cwd."/../app/Config/database.php");
$config = new DATABASE_CONFIG;
$config = $config->default;
$link = mysqli_connect($config["host"],$config["login"],$config["password"],$config["database"]) or die("Error connecting to database".mysqli_error($link));
$query = "SELECT * FROM configs where name='activated_modules'";
$result = $link->query($query);
$row = mysqli_fetch_array($result);
$modules = json_decode($row["data"],true);

if(!$modules) {
	echo "Error : Failed to decode the activated_modules JSON";
}


######################<Javascript Joining and Compiling>######################

$js_list = array_merge($modules["default_js"]);
echo "Compiling, following Javascript Files\n";
print_r($js_list);

join_and_write($js_path,"compiled.js",$js_list);
$ss = exec("java -jar $jar_path --type js $js_path"."compiled.js -o $js_path"."script_tmp.js");

if (empty($ss)) {
	echo "Successfully compiled compiled.js into script_tmp.js\n";
	unlink($js_path."compiled.js");
	copy($js_path."script_tmp.js",$js_path."framework.js");
	unlink($js_path."script_tmp.js");
	echo "Successfully moved script_tmp.js into framework.js\n";
} else {
	echo "Failed to compile compiled.js. Inof : $ss";
}

######################</Javascript Joining and Compiling>######################

######################<CSS Joining and Compiling>######################

$css_list = array_merge($modules["default_css"]);
echo "Compiling, following CSS Files\n";
print_r($css_list);

join_and_write($css_path,"compiled.css",$css_list);

$ss = exec("java -jar $jar_path --type css $css_path"."compiled.css -o $css_path"."design_tmp.css");

if (empty($ss)) {
	echo "Successfully compiled compiled.css into design.css\n";
	unlink($css_path."compiled.css");
	copy($css_path."design_tmp.css",$css_path."framework.css");
	unlink($css_path."design_tmp.css");
	echo "Successfully moved design_tmp.css into framework.css\n";
} else {
	echo "Failed to compile compiled.css. Inof : $ss";
}

######################</CSS Joining and Compiling>######################

######################<CSS Print Joining and Compiling>######################

$css_list = $modules["default_print_css"];
echo "Compiling, following CSS Print Files\n";
print_r($css_list);

join_and_write($css_path,"compiled.print.css",$css_list);

$ss = exec("java -jar $jar_path --type css $css_path"."compiled.print.css -o $css_path"."design_tmp.print.css");

if (empty($ss)) {
	echo "Successfully compiled compiled.print.css into design.print.css\n";
	unlink($css_path."compiled.print.css");
	copy($css_path."design_tmp.print.css",$css_path."framework.print.css");
	unlink($css_path."design_tmp.print.css");
	echo "Successfully moved design_tmp.print.css into framework.print.css\n";
} else {
	echo "Failed to compile compile.print.css. Inof : $ss";
}

######################</CSS Joining and Compiling>######################


function join_and_write($location_path,$joined_file_name,$input_files) {
	$compiled_file = fopen($location_path.$joined_file_name,"w") or die("Failed to open, $joined_file_name");
	foreach ( $input_files as $file) {
		$file_contents = file_get_contents($location_path.$file);
		if(!$file_contents) {
			echo "ERROR : Unable to load, $file\n";
		}
		fwrite($compiled_file, $file_contents);
	}
	fclose($compiled_file);

	echo "$joined_file_name written successfully\n";
}

?>