<div class="video-container">
    <video id="video" muted="muted" autoplay loop style="width: 100vw; height: 100vh; object-fit: cover; position: fixed; top: 0; left: 0;">
    <source src="/data/vid.webm" type="video/webm">
    </video>
    <audio id="audio" controls="controls" autoplay="autoplay" style="display:none">
    <source src="/data/audio.mp3" type="audio/mp3" style="display:none">
    </audio>
    <script>
        document.getElementById("video").onclick = function(){
             document.getElementById("audio").play();
        }
    </script>
</div>