<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>RCN TV</title>
  <link href="https://vjs.zencdn.net/8.12.0/video-js.css" rel="stylesheet" />
  <style>
    body,
    html {
      margin: 0;
      padding: 0;
      width: 100%;
      height: 100%;
      overflow: hidden;
    }

    #videoPlayer {
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
    }
  </style>
</head>

<body>
  <video id="videoPlayer" class="video-js vjs-default-skin" controls preload="1"></video>
  <script src="https://vjs.zencdn.net/8.12.0/video.min.js"></script>
  <script>
    const video = document.getElementById('videoPlayer');
    const url = 'https://cdn-live-rcn-tkdrm-edge1.tbxdrm.com/bcdn_token=IlBd_-6fOfIoBlDU6RLhkqfTXdYnFza5HhyeoB_J8tc&token_path=%2Frcn%2F&expires=1739001579/rcn/manifest.mpd';



    const player = videojs(video);
    player.src({
      src: url,
      type: 'application/dash+xml'
    });
    player.play();
  </script>
</body>

</html>

<!-- https: //cdn-live-rcn-tkdrm-edge1.tbxdrm.com/bcdn_token=lZ0YiPGd5Ubchw3DzaQ-KcSTRQik5q8fzswadU6EJnk&token_path=%2Frcn%2F&expires=1736656953/rcn/manifest.mpd -->