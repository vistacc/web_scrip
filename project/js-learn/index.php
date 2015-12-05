<!DOCTYPE html>
<html lang="zh">
    <head  id="cc">
        <meta charset="utf-8">
        <title>JsvaScript项目笔记</title>
        <link href="css/style.css" rel="stylesheet" type="text/css"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
         <canvas id="drawing" width="200" height="200">
             A drawing of something.
         </canvas>
        <ul id="myList">
            <li>item 1</li>
            <li>item 2</li>
            <li>item 3</li>
        </ul>
        
        <form method="post">
            <input type="text" name="username" value="">
            <input type="button" value="Echo Uaername" onclick="alert(username.value)">
        </form>
        <input type="button" value="Click Mewssw" id="myBtn" onclick="alert(this.value)">
        
        <form>
            <fieldset>
                <legend>哪个颜色是你最喜爱的?</legend>
                <ul>
                    <li>
                        <input type="radio" value="red" name="color" id="colorRed">
                        <label for="colorRed">Red</label>
                    </li>
                    <li>
                        <input type="radio" value="green" name="color" id="colorGreen">
                        <label for="colorGreen">Green</label>
                    </li>
                    <li>
                        <input type="radio" value="blue" name="color" id="colorBlue">
                        <label for="colorBlue">Blue</label>
                    </li>
                </ul>
            </fieldset>
        </form>
        <img src="img/jiagou.jpg" name="myImage" alt=""/>
        <img src="img/nfnslfn.jpg" alt=""/>
        <script src="js/script.js" type="text/javascript"></script>
    </body>
</html>
