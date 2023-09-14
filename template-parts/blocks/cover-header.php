<?php
$video_header = get_field('video_header');
$video_title = get_field('video_title');
$video_p = get_field('video_p');
$mobile_video_gif = get_field('mobile_video_gif');
$mobile_video_title = get_field('mobile_video_title');
$mobile_video_p = get_field('mobile_video_p');
$button_label = get_field('button_label');
$button_url = get_field('button_url');
?>
<div class="video-header d-sm-none d-none d-md-block">

  <!-- This div is  intentionally blank. It creates the transparent black overlay over the video which you can modify in the CSS -->
  <div class="overlay"></div>

  <!-- The HTML5 video element that will create the background video on the header -->
  <video playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop">
    <source src="<?php echo $video_header; ?>" type="video/mp4">
  </video>


  <!-- The header content -->
  <div class="container h-100">
    <div class="d-flex h-100 text-center align-items-center">
      <div class="w-100 text-white">
        <h1 class="display-3 text-light"><?php echo $video_title; ?></h1>
        <p class=""><?php echo $video_p; ?></p>
        <p class="lead mb-0"><a href="<?php echo $button_url; ?>" class="btn btn-lg btn-secondary fw-bold border-white bg-gold"><?php echo $button_label; ?></a></p>
      </div>
    </div>
  </div>
</div>

<div class="video-header-mobile d-xs-block d-sm-block d-md-none">

  <!-- This div is  intentionally blank. It creates the transparent black overlay over the video which you can modify in the CSS -->
  

  

  <!-- The header content -->
  <div class="container h-100">
    <div class="d-flex h-100 text-center align-items-center">
      <div class="w-100 text-white">
        <h1 class="display-5 text-light"><?php echo $mobile_video_title; ?></h1>
        <p class=""><?php echo $mobile_video_p; ?></p>
        <p class="lead mb-0"><a href="<?php echo $button_url; ?>" class="btn btn-lg btn-secondary fw-bold border-white bg-gold"><?php echo $button_label; ?></a></p>
      </div>
    </div>
  </div>

  <div class="overlay"></div>

  <div class="video-gif"><?php if( $mobile_video_gif ): ?><div class="video-gif-img"><img src="<?php echo $mobile_video_gif['url']; ?>" alt="<?php echo $mobile_video_gif['alt']; ?>" /></div><?php endif; ?></div>

</div>