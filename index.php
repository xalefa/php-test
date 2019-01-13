
<!DOCTYPE html>
<html>
<head>
    <title>فرۆشگای خونچە</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=divice-width, initial-scale=1, userscalable=no" />
    <link type="text/css" rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">

</head>

<body>
    <nav>
        <h1 calss="brand"><a href="#">فرۆشگای خونچە</a></h1>
        <ul>
            <li><a href="#">سەرەتا</a></li>
            <li><a href="#">وەسڵی فرۆشتن</a></li>
            <li><a href="#">لیستی مشتەری</a> </li>
            <li><a href="#">لیستی وەسڵەکان </a></li>
            <li><a href="#">بەڵگەکان</a></li>
            <li><a href="#">دەربارە</a></li>
        </ul>
        <div style="clear: both;"></div>
    </nav>

   <div align="center" class="alert alert-success" role="alert">
<?php

echo("<h3>Hello php</h3> <br>");
echo("kali linux first edit <br/>");
$a=5;
$b=6;
echo $a+$b;

?>
</div>

    <div class="res_nav">
        <h3 class="brand"><a href="#">فرۆشگای خونچە</a></h3>
        <h4 class="menu">لیست</h4>
        <div style="clear: both;"></div>
    </div>
    <script src="js/jquery-3.3.0.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $(".menu").click(function() {
                $("nav").slideToggle(500);
            })
        })
    </script>

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
</body>
</html>

