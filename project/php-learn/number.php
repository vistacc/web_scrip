<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>number</title>
        <link href="css/lib/sh/shCore.css" rel="stylesheet" type="text/css"/>
        <link href="css/lib/sh/shThemeDefault.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <?php
            //设置变量
            $quantity = 30;
            $price = 119.95;
            $taxrate = .05;
            
            //计算总数
            $total = $quantity * $price;
            $total = $total + ($total * $taxrate);
            
            $total = number_format($total,2);
            
            echo '<p>You are purchasing<b>'.$quantity.'</b> widget(s) at a cost of <b>$'.$price.'</b>each. with tax,the total comes to <b>$'.$total.'</b>.</p>';
        ?>
        <pre class="brush: php">
            //设置变量
            $quantity = 30;
            $price = 119.95;
            $taxrate = .05;
            
            //计算总数
            $total = $quantity * $price;
            $total = $total + ($total * $taxrate);
            
            $total = number_format($total,2);
            
            echo '<p>You are purchasing<b>'.$quantity.'</b> widget(s) at a cost of <b>$'.$price.'</b>each. with tax,the total comes to <b>$'.$total.'</b>.</p>';
        </pre>
    <script src="js/lib/sh/shCore.js" type="text/javascript"></script>
    <script src="js/lib/sh/shBrushPhp.js" type="text/javascript"></script>
    <script type="text/javascript">
        SyntaxHighlighter.all()
    </script>
    </body>
</html>
