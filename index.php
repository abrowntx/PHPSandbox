<head> <title>PHP Ajax Demo</title>
<meta charset="utf-8">
<link href="ajaxdemo.css" rel="stylesheet">
<link href="ajaxdemomobile.css" rel="stylesheet" media="only screen and (max-device-width:480px)">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<script type='text/javascript' src='Ajax_Example_JavaScript.js'></script>
</head>
<body>
<div id="wrapper">
 <div id="header"> <h1>PHP Ajax Demo</h1> </div>
 <div id="content"> <h2>"Watch it!!"</h2>
 <p>The words below will be replaced by "Hello World" which is pulled from the
'myfirstprogram.php' file via AJAX.</p>
<h2>AJAX DEMO</h2>
 <input type='button' onclick='AjaxRequest();' value='Find Hello World!'/><br /><br />
 <div id='AjaxResponse'>
 Pay attention… Notice when you click the button that only this section changes.
 </div> </div> <!-- end of content -->
 <div id="footer">Copyright &copy; 2015 Little Ocean Waves – Steve Prettyman
 </div><!-- end of footer -->
 </div> <!-- end of wrapper -->
</body></html>