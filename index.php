<?php
/*
 * Carbon-Probe
 * https://github.com/lincanbin/Carbon-Probe
 *
 * Copyright 2016 Canbin Lin (lincanbin@hotmail.com)
 * http://www.94cb.com/
 *
 * Licensed under the MIT License:
 * https://opensource.org/licenses/MIT
 * 
 * A Linux environmental probe.
 */
?>

<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="robots" content="noarchive">
	<title>Carbon Probe</title>
	<link href="static/css/style.css" rel="stylesheet"/>
<!-- 	<script src="static/js/jquery.min.js"></script>
	<script src="static/js/easyResponsiveTabs.js" type="text/javascript"></script> -->
	<script src="http://webthemez.com/demo/easy-responsive-tabs/js/jquery-1.9.1.min.js"></script>
    <script src="http://webthemez.com/demo/easy-responsive-tabs/js/easyResponsiveTabs.js"></script>
</head>

<body>
<!--Horizontal Tab-->
<div id="MainTab">
	<ul class="resp-tabs-list main">
		<li>性能</li>
		<li>进程</li>
		<li>环境</li>
	</ul>
	<div class="resp-tabs-container main">
		<div>
			<p>
			<!--vertical Tabs-->
			<div id="PerformanceTab">
				<ul class="resp-tabs-list performance">
					<li>CPU</li>
					<li>内存</li>
					<li>网络</li>
				</ul>
				<div class="resp-tabs-container performance">
					<div>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum nibh urna, euismod ut ornare non, volutpat vel tortor. Integer laoreet placerat suscipit. Sed sodales scelerisque commodo. Nam porta cursus lectus. Proin nunc erat, gravida a facilisis quis, ornare id lectus. Proin consectetur nibh quis urna gravida mollis.</p>
					</div>
					<div>
						<p>This tab has icon in it.</p>
					</div>
					<div>
						<p>Suspendisse blandit velit Integer laoreet placerat suscipit. Sed sodales scelerisque commodo. Nam porta cursus lectus. Proin nunc erat, gravida a facilisis quis, ornare id lectus. Proin consectetur nibh quis Integer laoreet placerat suscipit. Sed sodales scelerisque commodo. Nam porta cursus lectus. Proin nunc erat, gravida a facilisis quis, ornare id lectus. Proin consectetur nibh quis urna gravid urna gravid eget erat suscipit in malesuada odio venenatis.</p>
					</div>
				</div>
			</div>
			</p>
			<p>Child 1 Container</p>
		</div>
		<div>
			 Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum nibh urna, euismod ut ornare non, volutpat vel tortor. Integer laoreet placerat suscipit. Sed sodales scelerisque commodo. Nam porta cursus lectus. Proin nunc erat, gravida a facilisis quis, ornare id lectus. Proin consectetur nibh quis urna gravida mollis.<br><br>
			<p>Child 2 Container</p>
		</div>
		<div>
			 Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum nibh urna, euismod ut ornare non, volutpat vel tortor. Integer laoreet placerat suscipit. Sed sodales scelerisque commodo. Nam porta cursus lectus. Proin nunc erat, gravida a facilisis quis, ornare id lectus. Proin consectetur nibh quis urna gravida mollis.<br><br>
			<p>Child 3 Container</p>
		</div>
	</div>
</div>
</body>
<script type="text/javascript">
$(document).ready(function () {

	$('#MainTab').easyResponsiveTabs({
		type: 'default', //Types: default, vertical, accordion
		width: 'auto', //auto or any width like 600px
		fit: true, // 100% fit in a container
		closed: 'accordion', // Start closed if in accordion view
		tabidentify: 'main', // The tab groups identifier
	    activate: function (event) { // Callback function if tab is switched
            console.log(event);
        }
	});

	$('#PerformanceTab').easyResponsiveTabs({
		type: 'vertical',
		width: 'auto',
		fit: true,
		tabidentify: 'performance', // The tab groups identifier
		activetab_bg: '#fff', // background color for active tabs in this group
		inactive_bg: '#F5F5F5', // background color for inactive tabs in this group
		active_border_color: '#c1c1c1', // border color for active tabs heads in this group
		active_content_border_color: '#5AB1D0' // border color for active tabs contect in this group so that it matches the tab head border
	});

});
</script>
</html>