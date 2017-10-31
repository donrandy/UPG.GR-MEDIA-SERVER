<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Ramalin Media Player</title>
<link href="https://vjs.zencdn.net/5.18.4/video-js.css" rel="stylesheet">
<style>
.video-js {
	padding-top: 56.25%
}
.vjs-fullscreen {
	padding-top: 0px
}
</style>
</head>

<body>
<?php
$m3u8= $_GET["m3u8"]; $poster= $_GET["poster"]; $title= $_GET["channel"]; $rtmp = str_replace("http","rtmp",$m3u8); $rtmp = substr($rtmp,0,-5);
?>
<div class="wrapper">
  <div class="videocontent">
    <video id=example-video class="video-js vjs-default-skin vjs-fullscreen" preload=none  poster="<?php echo $poster;?>" width=auto height=auto  autoplay=true>
      <source src="<?php echo $m3u8;?>" type="application/x-mpegURL">
    <source src="<?php echo $rtmp; ?>" type="rtmp/mp4">
    </video>
  </div>
</div>

<script src="//api.peer5.com/peer5.js?id=hd7h1bwrmd47jjsan6s0"></script>
<script src="//api.peer5.com/peer5.videojs5.plugin.js"></script>
<script src="https://vjs.zencdn.net/ie8/1.1.2/videojs-ie8.min.js"></script>
<script> var player = videojs('example-video');</script>
<script>
  videojs.options.techOrder = ['flash', 'html5'];
</script>
</body>
</html>
