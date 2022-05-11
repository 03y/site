<!doctype html>

<head>
<title>moir.org.uk</title>
<link rel="stylesheet" href="style.css">

</head>

<body>
<script>
$(document).ready(function () {
    var toggle = true;
    $("body").on({
        dblclick: function () {
            if (toggle) {
                $(this).css("background-color", "dcdccc");
                $(this).css("color", "black");
                toggle = false;
            } else {
                $(this).css("background-color", "1e1e1e");
                $(this).css("color", "white");
                toggle = true;
            }
        }
    });
});
</script>

<h1>moir.org.uk</h1>
<?php
$dir = array_diff(scandir('/opt/lampp/htdocs/'), array('.', '..', 'style.css', 'index.php'));

foreach($dir as $file) {
    echo "<a href=$file>".basename($file)."</a>\n";
}
?>
</body>
