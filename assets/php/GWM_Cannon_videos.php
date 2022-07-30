---
author: paul
title: GWM Cannon videos
image: ta-bearded.png
layout: page
---
<style>
.contenedor-slide {
    height: 40em;
}
.video-slider {
    width: 100%;
    height: 40em;
    background: #444;
    position: relative;
    overflow: hidden;
}
.slide {
    position: absolute;
    top: 0;
    left: 100%;
    height: 100%;
    width: 100%;
    text-align: center;
    overflow: hidden;
}
.slide:first-child{
    left: 0;
}
.video{
    height: 100%;
    width: 100%;
    border:0;
}
.slide-arrow{
    position: absolute;
    top: 0;
    left: 0;
    height: 45%;
    width: 15%;
    cursor: pointer;
    opacity: .2;
}
.slide-arrow:hover{
    opacity: 1;
}
.slide-arrow:after{
    content: "\003c";
    text-align: center;
    display: block;
    height: 10%;
    width: 100%;
    position: absolute;
    bottom: 0;
    left: 0;
    font-size: 3em;
}
.slide-arrow.right:after{
    content: "\003e";
}
.slide-arrow.right{
    left: auto;
    right: 0;
}
</style>
<?php 
include_once("/var/www/out_of_http_files/GWM_Cannon_videos.php");

$result = file_get_contents($url);

$results_array=json_decode($result, true);
$video_items=$results_array["items"];

?>

<div class="container contenedor-slide">
    <div class="video-slider">
    <!-- START OF SLIDES -->
<?php
$count=1;
foreach ($video_items as $video) {
    echo '
    <div class="slide">
        <iframe class="video" id="player'.$count.'" src="https://www.youtube.com/embed/'.$video["contentDetails"]["videoId"].'?ecver=2&enablejsapi=1" ></iframe>
    </div>
';
    $count++;
}
?>
    <!-- END OF SLIDES -->
    <div class="slide-arrow left"></div>
    <div class="slide-arrow right"></div>
</div>


<!--
<?php
foreach ($video_items as $video) {
    echo "https://www.youtube.com/embed/".$video["contentDetails"]["videoId"]."\n";
}
?>
-->

<script>
document.addEventListener('DOMContentLoaded', function () {
    const tag = document.createElement("script");
    const firstScriptTag = document.getElementsByTagName("script")[0];

    var pos = 0,
        slides = $('.slide'),
        numOfSlides = slides.length;

    function nextSlide() {
        // `[]` returns a vanilla DOM object from a jQuery object/collection
        slides[pos].video.stopVideo()
        slides.eq(pos).animate({ left: '-100%' }, 500);
        pos = (pos >= numOfSlides - 1 ? 0 : ++pos);
        slides.eq(pos).css({ left: '100%' }).animate({ left: 0 }, 500);
    }

    function previousSlide() {
        slides[pos].video.stopVideo()
        slides.eq(pos).animate({ left: '100%' }, 500);
        pos = (pos == 0 ? numOfSlides - 1 : --pos);
        slides.eq(pos).css({ left: '-100%' }).animate({ left: 0 }, 500);
    }

    $('.left').click(previousSlide);
    $('.right').click(nextSlide);
})

function onYouTubeIframeAPIReady() {
    $('.slide').each(function (index, slide) {
        // Get the `.video` element inside each `.slide`
        var iframe = $(slide).find('.video')[0]
        // Create a new YT.Player from the iFrame, and store it on the `.slide` DOM object
        slide.video = new YT.Player(iframe)
    })
}
</script>

