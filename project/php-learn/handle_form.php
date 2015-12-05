<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
            $name = $_REQUEST['name'];
            $email = $_REQUEST['email'];
            $comments = $_REQUEST['comments'];
            
            /*
            *$_REQUEST['age'];
             * $_REQUEST["gender"];
             * $_REQUEST['submit'];
             */
            
            echo "<p>谢谢，<b>$name</b>您的建议是：<tt>$comments</tt>。我们会"
                    . "尽快的联系您<i>$email</i></p>";
        ?>
    </body>
</html>
