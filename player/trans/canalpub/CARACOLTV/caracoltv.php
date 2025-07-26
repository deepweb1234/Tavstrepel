<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Caracol Tv</title>
  <link href="https://vjs.zencdn.net/8.16.1/video-js.css" rel="stylesheet" />
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
  <script src="https://vjs.zencdn.net/8.16.1/video.min.js"></script>
  <script>
    const video = document.getElementById('videoPlayer');
    const url = "https://stream.gia.tv/giatv/giatv-carcolhd1carcolhd1/carcolhd1carcolhd1/playlist.m3u8";


    const player = videojs(video);
    player.src({
      src: url,
      type: 'application/x-mpegURL'
    });
    player.play();
  </script>
</body>

</html>


<!-- url opcional https://mdstrm.com/live-stream-playlist/632391734be92a791e2750e6.m3u8 -->


<!-- const url = 'https://mdstrm.com/live-stream-playlist/574463697b9817cf0886fc17.m3u8?uid=LGiLbPqOOp1MsxBZVIg3Gxic8POXlGPI&sid=xBh5TG4llvR8rXx43RueH0kDWEwfes2K&pid=a53aEKIwnBrg2DzsXyUaQAQYc8tF65IZ&an=screen&at=web-app&av=v6.0.70&ref=https%3A%2F%2Fwww.caracoltv.com%2F&res=921x518&without_cookies=false&listenerid=&dnt=true'; -->