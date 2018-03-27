$(document).ready(function() {
    /** Styleswitcher & setCookie **/
    $.cookie("styleswitcher", "black");
    $('#toggle').change(function () {
        if ($(this).is(':checked')) {
            $('#switch').css('color', '#04DEAD').prop('disabled', false);
            $.cookie("styleswitcher", "magenta");
        } else {
            $('#switch').css('color', '#222').prop('disabled', true);
            $.cookie("styleswitcher", "black");
        }
    });

    /** Canvas **/
    var width = 200,
        height = 200;

    var canvas = document.getElementById('canvas');
    var ctx = canvas.getContext("2d");

    canvas.height = height;
    canvas.width = width;

    var ball = {},
        gravity = 0.2,
        bounceFactor = 0.7;

    ball = {
        x: width/2,
        y: 50,

        radius: 15,
        color: "#222",

        // Velocity components
        velocityx: 0,
        velocityy: 1,

        draw: function() {
            ctx.beginPath();
            ctx.arc(this.x, this.y, this.radius, 0, Math.PI*2, false);
            ctx.fillStyle = this.color;
            ctx.fill();
            ctx.closePath();
        }
    };

    function clearCanvas() {
        ctx.clearRect(0, 0, width, height);
    }

    function update() {
        clearCanvas();
        ball.draw();

        ball.y += ball.velocityy;

        ball.velocityy += gravity;

        // Rebound
        if(ball.y + ball.radius > height) {
            ball.y = height - ball.radius;
            ball.velocityy *= -bounceFactor;
        }
    }

    setInterval(update, 1000/60);
});
