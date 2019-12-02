<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<meta http-equiv="pragma" content="no-cache" />
<meta http-equiv="refresh" content="60" />
<title>PHP + CSS Clock</title>
<style type="text/css">

/*
	CSS + PHP Clock
	by Nathan Smith
*/

*
{
	margin: 0;
	padding: 0;
}

a
{
	background: inherit;
	color: #33f;
	text-decoration: none;
}

a:hover
{
	text-decoration: underline;
}

body
{
	background: #fff;
	color: #777;
	margin: 50px auto 20px;
}

h1
{
	font: 17px "Trebuchet MS", sans-serif;
	text-align: center;
}

p
{
	border-bottom: 1px solid #ddd;
	font: 11px Verdana, sans-serif;
	line-height: 150%;
	margin: 0 auto;
	padding: 10px 0;
	text-align: justify;
	width: 300px;
}

#clock
{
	background: url(img/clock.jpg) no-repeat;
	height: 139px;
	margin: 0 auto;
	width: 338px;
}

#hour
{
	background: url(img/hour/<?php echo date('H'); ?>.jpg) no-repeat 30px 14px;
	float: left;
	height: 139px;
	width: 194px;
}

#minute
{
	background: url(img/minute/<?php echo date('i'); ?>.jpg) no-repeat 0 14px;
	float: left;
	height: 139px;
	width: 144px;
}

</style>
</head>
<body>
<h1>Current Server Time:</h1>
<div id="clock">
<div id="hour">&nbsp;</div>
<div id="minute">&nbsp;</div>
</div>
<p><strong>Note:</strong> You may reuse these files. <a href="http://sonspring.com/journal/time-sensitive-css">Read the tutorial</a>.</p>
<p>The clock above will display the current time, according to the server on which the files reside. This page will meta refresh every 60 seconds. The files that drive this demo are very small, weighing only about 1MB total. It uses valid <a href="http://validator.w3.org/check/referer">XHTML</a> and <a href="http://jigsaw.w3.org/css-validator/check/referer">CSS</a>.</p>
</body>
</html>