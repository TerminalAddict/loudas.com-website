---
author: paul
title: GWM Cannon videos
image: ta-bearded.png
layout: page
turn_ads_off: 1
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
    opacity: .8;
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
    color: white;
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
/*
 *
Y2F0IC92YXIvd3d3L291dF9vZl9odHRwX2ZpbGVzL0dXTV9DYW5ub25fdmlkZW9zLnBocAo8P3BocAokdXJsID0gImh0dHBzOi8veW91dHViZS5nb29nbGVhcGlzLmNvbS95b3V0dWJlL3YzL3BsYXlsaXN0SXRlbXM/cGFydD1zbmlwcGV0JTJDY29udGVudERldGFpbHMmbWF4UmVzdWx0cz0yNSZwbGF5bGlzdElkPVBMaGZZVUlqLTk1MkpQTXhNZjdFRXlSWjB3c25ueEJVd3Yma2V5PUFJemFTeUJFZjFGc3pGRWR4YlEtNXpaNG5GN0pqWkV3c3NLcVR3SSI7Cj8+
 *
 */
include_once("/var/www/out_of_http_files/GWM_Cannon_videos.php");

$result = file_get_contents($url);

$results_array=json_decode($result, true);
$video_items=$results_array["items"];

?>

<div class="container contenedor-slide">
    <h3 id="my-gwm-cannon-videos">My GWM Cannon Videos</h3>
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

<div class="container text-center w-100 mt-3 pb-5">
        <a href="#!" class="left float-left btn btn-primary btn-lg" role="button" title="Previous Video" data-bs-toggle="tooltip" data-bs-placement="right" data-animation="false" title="Previous Video" style="display: inline;">👈 Previous Video</a>
        <a href="#!" class="right float-right btn btn-primary btn-lg" role="button" title="Next Video" data-bs-toggle="tooltip" data-bs-placement="left" data-animation="false" title="Next Video" style="display: inline;">👉 Next Video</a>
</div>
<div class="container text-center w-100 mt-3 pb-5">
 <!-- where is this -->
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
    tag.src = "https://www.youtube.com/iframe_api";
    firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);

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

