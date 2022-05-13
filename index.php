<!doctype html>

<head>
<title>moir.org.uk</title>
<link rel="stylesheet" href="style.css">
<link id="favicon" rel="shortcut icon" type="image/png" href="favicon.ico" />
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
<h1>moir.org.uk</h1>
<?php
$dir = array_diff(scandir('/opt/lampp/htdocs/'), array('.', '..', 'style.css', 'index.php'));

foreach($dir as $file) {
    echo "<a href=$file>".basename($file)."</a>\n";
}
?>
</body>
