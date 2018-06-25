<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <title>人生只有900个月-我在写代码</title>
    <style type="text/css">
        body {
            font-size: 12px;
        }

        .clear {
            clear: both;
        }

        .lifetime {
            position: relative;
            width: 900px;
            height: auto;
            overflow: hidden;
            margin: 0 auto;
        }

        .m900 {
            background-color: #EEE;
            height: auto;
            overflow: hidden;
        }

        .m {
            width: 28px;
            height: 28px;
            margin: 1px;
            background-color: green;
            display: inline-block;
            float: left;
        }

        .past {
            background-color: #000;
        }

        .description {
            margin-bottom: 10px;
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
    <div class="description">
        已经使用<?php echo $mathmonth ?>月，剩余<?php echo $leftmonth ?>月，共900月。 <a href="/900">返回</a><br>
        本表格：30*30
    </div>
    <div class="m900">
        <?php
        // echo "<li class='m past'></li>"*44; 
        echo str_repeat('<li class="m past"></li>', $mathmonth);
        echo str_repeat('<li class="m"></li>', $leftmonth);
        ?>
    </div>

</div>


</body>
</html>

