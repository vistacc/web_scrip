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
            define('TODAY', "2015-10-09");
            
            echo '<p>今天是'.TODAY.'当前运行PHP的版本是'.PHP_VERSION.' 当前运行在'.PHP_OS.'操作系统上。</p>';
        ?>
        <pre class="brush: php">
            define('TODAY', "2015-10-09");
            
            echo '<p>今天是'.TODAY.'当前运行PHP的版本是'.PHP_VERSION.' 当前运行在'.PHP_OS.'操作系统上。</p>';
        </pre>
        
    <script src="js/lib/sh/shCore.js" type="text/javascript"></script>
    <script src="js/lib/sh/shBrushPhp.js" type="text/javascript"></script>
    <script type="text/javascript">
        SyntaxHighlighter.all()
    </script>
    </body>
</html>
