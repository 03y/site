<!doctype html>

<head>
<title>moir.org.uk</title>
<link rel="stylesheet" href="style.css">
</head>

<body>
<h1>moir.org.uk</h1>
<?php
$dir = scandir('/opt/lampp/htdocs/');

foreach($dir as $file) {
    echo "<a href=$file>".basename($file)."</a>";
}
?>
</body>
