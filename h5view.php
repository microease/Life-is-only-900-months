<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>人生只有900个月-我在写代码</title>
    <link rel="stylesheet" href="normalize.css">
    <style>
        body {
            font-size: 12px;
        }

        li {
            list-style: none;
        }

        .lifetime {
            width: auto;
            height: auto;
            margin: 0 auto;
            overflow: hidden;
        }

        .m900 {
            background-color: #fff;
        }

        .m {
            width: 3.1%;
            height: 18px;
            border: 1px solid #ccc;
            float: left;
            background-color: green;
        }

        .past {
            background-color: #000;
        }

        .description {
            margin-top: 50px;
        }
    </style>
</head>
<body>
<?php
$userdata = $_POST["birthday"];
date_default_timezone_set('PRC');
$arr = explode("-", $userdata);
$useryear = $arr[0];
$usermonth = $arr[1];
$thisyear = date('Y');
$thismonth = date('m');
$useryear = (int)$useryear;
$usermonth = (int)$usermonth;
$thisyear = (int)$thisyear;
$thismonth = (int)$thismonth;
$mathyear = $thisyear - $useryear;
$mathyearmonth = $mathyear * 12;
$mathmonth = $thismonth - $usermonth;
$mathmonth += $mathyearmonth;
$leftmonth = 900 - $mathmonth;
?>
<div class="lifetime">
    <div class="m900">
        <?php
        // echo "<li class='m past'></li>"*44; 
        echo str_repeat('<li class="m past"></li>', $mathmonth);
        echo str_repeat('<li class="m"></li>', $leftmonth);
        ?>
    </div>
</div>
<div class="description">
    已经使用<?php echo $mathmonth ?>月，剩余<?php echo $leftmonth ?>月，共900月。 <a href="/900">返回</a><br>
    本表格：45*20
</div>

</body>
</html>