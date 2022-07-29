---
author: paul
title: GWM Cannon videos
image: ta-bearded.png
layout: page
---
<?php 
include_once("/var/www/out_of_http_files/GWM_Cannon_videos.php");

$result = file_get_contents($url);

$results_array=json_decode($result, true);
$video_items=$results_array["items"];

?>

<div class="videoContainer">
<iframe title="<?php echo $video_items[0]["snippet"]["title"] ?>" class="video" src="https://www.youtube.com/embed/<?php echo $video_items[0]["contentDetails"]["videoId"] ?>" allowfullscreen></iframe>
</div>


<div class="container contenedor-slide">
  <div id="carouselExampleControls" class="carousel slide" data-ride="carousel" data-interval="false">
    <div class="carousel-inner">

<?php 
foreach ($video_items as $video) {
    echo '
      <div class="carousel-item">
        <img class="d-block w-100" width="'.$video["snippet"]["thumbnails"]["medium"]["width"].'" height="'.         $video["snippet"]["thumbnails"]["medium"]["height"].'" src="'.$video["snippet"]["thumbnails"]["medium"]["url"].'" alt="'.$video["snippet"]["title"].'" />
      </div>
';

}

$count=1;
foreach ($video_items as $video) {
    echo '
      <div class="carousel-item">
        <div class="carousel-video-inner embed-responsive embed-responsive-16by9">
          <div class="video-player" id="player'.$count.'" data-video-id="'.$video["contentDetails"]["videoId"].'"></div>
        </div>
      </div>
';
    $count++;
}
?>

    </div>
    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>

<script>

const videos = [];
const tag = document.createElement("script");
const firstScriptTag = document.getElementsByTagName("script")[0];

tag.src = "https://www.youtube.com/iframe_api";
firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);

// YouTube wants this function, don't rename it
function onYouTubeIframeAPIReady() {
  const slides = Array.from(document.querySelectorAll(".carousel-item"));
  slides.forEach((slide, index) => {
    // does this slide have a video?
    const video = slide.querySelector(".video-player");
    if (video && video.dataset) {
      const player = createPlayer({
        id: video.id,
        videoId: video.dataset.videoId,
      });
      videos.push({ player, index });
    }
  });
}

function createPlayer(playerInfo) {
  return new YT.Player(playerInfo.id, {
    videoId: playerInfo.videoId,
    playerVars: {
      showinfo: 0,
    },
  });
}

function theBigPause() {
  videos.map((video) => video.player.pauseVideo());
}

$(function () {
  $(".carousel").on("slide.bs.carousel", function (e) {
    theBigPause();
    const next = $(e.relatedTarget).index();
    const video = videos.filter((v) => v.index === next)[0];
    if (video) {
      video.player.playVideo();
    }
  });
});
</script>
