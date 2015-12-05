<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link href="css/lib/sh/shCore.css" rel="stylesheet" type="text/css"/>
        <link href="css/lib/sh/shThemeDefault.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <?php
            //创建变量的简写版本]
            $file = $_SERVER['SCRIPT_FILENAME'];
            $user = $_SERVER['HTTP_USER_AGENT'];
            $server = $_SERVER['SERVER_SOFTWARE'];
            //打印脚本名称
            echo "<p>正在运行的文件路径和文件名是：<br /><b>$file</b></p>";
            //打印代理信息
            echo "<p>使用的浏览器信息是：<br /><b>$user</b></p>";
            //打印服务器信息
            echo "<p>当前运行的服务器是：<br /><b>$server</b></p>";
        ?>
        <pre class="brush: php">
            //创建变量的简写版本]
            $file = $_SERVER['SCRIPT_FILENAME'];
            $user = $_SERVER['HTTP_USER_AGENT'];
            $server = $_SERVER['SERVER_SOFTWARE'];
            //打印脚本名称
            echo "<p>正在运行的文件路径和文件名是：<br /><b>$file</b></p>";
            //打印代理信息
            echo "<p>使用的浏览器信息是：<br /><b>$user</b></p>";
            //打印服务器信息
            echo "<p>当前运行的服务器是：<br /><b>$server</b></p>";
        </pre>
        <script src="js/lib/sh/shCore.js" type="text/javascript"></script>
        <script src="js/lib/sh/shBrushPhp.js" type="text/javascript"></script>
        <script type="text/javascript">
            SyntaxHighlighter.all()
       </script>
    </body>
</html>
