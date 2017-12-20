<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Ramalin Media Player</title>
<link href="https://vjs.zencdn.net/5.18.4/video-js.css" rel="stylesheet">
	
 <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">

	
	
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
    <video id=example-video class="video-js vjs-default-skin" preload=none  poster="<?php echo $poster;?>" width=100% height=100%  autoplay=true>
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
	
	
 
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src="http://videojs.github.io/videojs-contrib-hls/js/ie10-viewport-bug-workaround.js"></script>
  
  
  <script src="https://vjs.zencdn.net/5.16.0/video.js"></script>
  <script src="https://vjs.zencdn.net/ie8/1.1.2/videojs-ie8.min.js"></script>
  <script src="https://rawgit.com/videojs/videojs-youtube/master/src/Youtube.js"></script>	
	
  <script>
      (function(window, videojs) {
        var player = window.player = videojs('example-video');

        // hook up the video switcher
        var loadUrl = document.getElementById('load-url');
        var url = document.getElementById('url');
        loadUrl.addEventListener('submit', function(event) {
          event.preventDefault();
          player.src({
            src: url.value,
            type: 'application/x-mpegURL'
          });
          return false;
        });
      }(window, window.videojs));

    
    /* GC */
    
//    var vgsPlayer;
//    videojs("example-video").ready(function () {
//        vgsPlayer = this;
//    });

    $('#vidlink a').on('click', function (e) {
        e.preventDefault();
        var vidlink = $(this).attr('href');
        //vsgLoadVideo(vidlink);
        $('#url').val(vidlink);
        $('#load-url button').trigger('click');
    });
    
    
    
  </script>	
	
</body>
</html>
