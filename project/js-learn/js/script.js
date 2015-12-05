var drawing = document.getElementById("drawing");
//确保完全支持<canvas>
if (drawing.getContext) {
    var context = drawing.getContext("2d");
    //填充画布
    context.fillStyle = "#EEEEFF";
    context.fillRect(0, 0, 200, 200);

    context.fillStyle = "#ff0000";
    context.save();

    context.fillStyle = "#00ff00";
    context.translate(100, 100);
    context.save();

    context.fillStyle = "#0000ff";
    context.fillRect(0, 0, 100, 200); //在（100，100）绘制一个蓝色的矩形
    context.restore();
    context.fillRect(10, 10, 100, 200); //在（100， 100）处绘制一个绿色的矩形
    context.restore();
    context.fillRect(0, 0, 100, 200); //在（0,0）处绘制一个红色的矩形
}