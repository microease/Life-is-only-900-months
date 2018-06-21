<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>人生只有900个月-我在写代码</title>
    <style type="text/css">
      body { font-size: 12px; }
      #container { position: relative; width: 900px; height: auto; overflow: hidden; margin: 0 auto; text-align: center; }
      #introduction { margin-top: 90px auto;color:red;}
      .form { background-color: #EEE; width: 900px; height: auto; padding: 10px; margin: 20px auto 0; overflow: hidden; }
      .thanks{margin-top:100px;} 
      .author { margin-top: 15px; }
    </style>
  </head>
  <body>
    <div id="container">
      <div id="introduction">
      <a href="http://www.wzxdm.com"><img src="http://www.wzxdm.com/wp-content/uploads/2018/05/path.jpg" alt=""></a>
        你知道吗？人生只有900个月！输入出生日期（例如：1986-1-1），看看你的时间使用情况。
      </div>
      <div class="form">
        <form action="http://www.wzxdm.com/900/view.php" method="post">
          出生日期 <input type="text" name="birthday" size="10" value="1995-05-21"/> <input type="submit" value="提交" />
        </form>
      </div>
      <div class="thanks">
        灵感来自于这篇博客<a href="http://www.ruanyifeng.com/blog/2011/05/900-month_lifespan.html" target="_blank">《人生只有900个月》</a>。
      </div>
      <div class="author">
        作者：<a href="https://github.com/microease">MicroEase</a>
      </div>
      <div class="thistime">
        <?date_default_timezone_set('PRC');echo "当前时间:".date('Y-m-d');?>
      </div>
    </div>
  </body>
</html>