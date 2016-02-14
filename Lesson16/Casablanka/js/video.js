function vidplay() {
    var video = document.getElementById("video");
    var button = document.getElementById("play");
    if (video.paused) {
        video.play();
        button.textContent = "||";
    } else {
        video.pause();
        button.textContent = ">";
    }
}
