<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>CANAL 1 TV</title>
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
    const url = 'https://mdstrm.com/live-stream-playlist/5a5e1c2568b1910913db5fe2.m3u8?uid=LGiLbPqOOp1MsxBZVIg3Gxic8POXlGPI&sid=xBh5TG4llvR8rXx43RueH0kDWEwfes2K&pid=Aj4Y85ZsVDk3JNEnX3DjhbixgBl11Uct&an=c1_mediastream_vod&at=web-app&av=v6.0.119&ref=&res=1366x633&without_cookies=false&listenerid=&dnt=true';


    const player = videojs(video);
    player.src({
      src: url,
      type: 'application/x-mpegURL'
    });
    player.play();
  </script>
</body>

</html>



<!-- https: //stream.gia.tv/giatv/giatv-firstchannelfirstchannel/firstchannelfirstchannel/playlist.m3u8 -->