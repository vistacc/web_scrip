<!DOCTYPE html>
<html lang="zh">
    <head>
        <meta charset="utf-8">
        <title>php项目笔记</title>
        <link href="css/style.css" rel="stylesheet" type="text/css"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <form action="handle_form.php" method="post">
            <fieldset>
                <legend>填写下面的信息:</legend>
                <p><label>姓名:<input type="text" name="name" size="20"  maxlength="40" ></label></p>
                <p><label>电子邮件:<input type="email" name="email" size="40" maxlength="120"</label></p>
                <p><label for="gender">性别:</label><input type="radio" name="gender" value="M" >男
                    <input type="radio" name="gender" value="F" checked>女</p>
                <p><label>年龄
                        <select name="age">
                            <option value="0-29">30岁以下</option>
                            <option value="30-60">30岁(包含)到60岁之间</option>
                            <option value="60+">60岁(包含)以上</option>
                        </select>
                    </label></p>
                    <p><label>内容:<textarea name="comments" rows="3" cols="40"></textarea></label></p>
            </fieldset>
            <p align="center"><input type="submit" name="submit" value="提交" ></p>
        </form>
        <img class="pic" src="img/jiagou.jpg">
        
        <script src="js/script.js"></script>
    </body>
</html>
