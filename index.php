<!doctype html>

<head>
<title>moir.org.uk</title>
<link rel="stylesheet" href="style.css">
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
