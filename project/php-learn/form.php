<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <form action="handle_form.php" method="post">
            <fieldset>
                <legend>请在下面的表单中填写信息</legend>
                <p><label>姓名：<input type="text" name="name" size="20" maxlength="40" /></label></p>
                <p><label>邮件：<input type="email" name="email" size="40" maxlength="60" /></label></p>
                <p><label for="gender">性别：</label><input type="radio" name="gender" value="M" /> 男 <input type="radio" name="gender" value="F"/> 女</p>
                <p>
                    <label>
                        年龄：
                        <select name="age">
                            <option value="0-29">小于30</option>
                            <option value="30-60">大于（包含）30小于60</option>
                            <option value="60+">60以上</option>
                        </select>
                    </label>
                </p>
                <p><label>内容：<textarea name="comments" rows="3" cols="40"></textarea></label></p>
            </fieldset>
            <p align="center"><input type="submit" name="submit" value="提交" /></p>
        </form>
        
    </body>
</html>
