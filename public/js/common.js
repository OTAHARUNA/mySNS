$(function () {
    //トグルボタン押下時イベント
    $(".toggle").on("click", function() {
        $(".toggle").toggleClass("checked");
        if (!$('input[name="check"]').prop("checked")) { //ONになっていたら通知音
            $(".toggle input").prop("checked", true);
            // var audio = new Audio("data:public/sound/min5_tone_8.wav;base64," + base64); // define your audio
            // audio.play;
            document.getElementById("audioElement").play();
        } else {
            $(".toggle input").prop("checked", false);
        }
    });
});
