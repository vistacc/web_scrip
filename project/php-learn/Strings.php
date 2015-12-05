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
            //创建变量
            $first_name = "韶华";
            $last_name = "胡";
            $book ="苍穹下的纪念碑";
            $author = $first_name.' ' .$last_name;
            //打印变量
            echo "<p>《<em>$book</em>》的作者是 <b>$author</b>  </p>";
        ?>
        <pre class="brush: php">
            //创建变量
            $first_name = "韶华";
            $last_name = "胡";
            $book ="苍穹下的纪念碑";
            
            //打印变量
            echo "<p>《<em>$book</em>》的作者是 <b>$last_name $first_name</b>  </p>";
        </pre>
        <pre class="brush: php">
            //创建变量
            $first_name = "韶华";
            $last_name = "胡";
            $book ="苍穹下的纪念碑";
            $author = $first_name.' ' .$last_name;
            //打印变量
            echo "<p>《<em>$book</em>》的作者是 <b>$author</b>  </p>";
        </pre>
        <script src="js/lib/sh/shCore.js" type="text/javascript"></script>
        <script src="js/lib/sh/shBrushPhp.js" type="text/javascript"></script>
        <script type="text/javascript">
            SyntaxHighlighter.all()
       </script>
    </body>
</html>
