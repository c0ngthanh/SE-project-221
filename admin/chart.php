<?php
 
$dataPoints = array(
	array("x"=> 10, "y"=> 41),
);
require 'connection.php';
$month=mysqli_query($conn,"SELECT month(now()) as month");
$currentmonth=mysqli_fetch_array($month);
$month=$currentmonth['month'];
$year=mysqli_query($conn,"SELECT year(now()) as year");
$currentyear=mysqli_fetch_array($year);
$year=$currentyear['year'];
$test=array();
for($a=1;$a<=31;$a++){
$result=mysqli_query($conn,"SELECT COUNT(*) as count_orders from `orders` where day(`time`)=$a and month(`time`)=$month and year(`time`)=$year");
    $row=mysqli_fetch_array($result);
    $test[$a-1]["x"]=$a;
    $test[$a-1]["y"]=(int)$row['count_orders'];
}
?>
<!DOCTYPE HTML>
<html>
<head>  
<script>
window.onload = function () {
 
var chart = new CanvasJS.Chart("chartContainer", {
	animationEnabled: true,
	exportEnabled: true,
	theme: "light1",
	title:{
		text: "<?= $month ?> / <?= $year ?> Order Analyzation"
	},
	axisY:{
		includeZero: true
	},
	data: [{
		type: "area", //change type to bar, line, area, pie, etc
		indexLabel: "{y}", //Shows y value on all Data Points
		indexLabelFontColor: "#5A5757",
		indexLabelPlacement: "outside",   
		dataPoints: <?php echo json_encode($test, JSON_NUMERIC_CHECK); ?>
	}]
});
chart.render();
 
}
</script>
</head>
<body>
<div id="chartContainer" style="width: 100%;"></div>
<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
</body>
</html>