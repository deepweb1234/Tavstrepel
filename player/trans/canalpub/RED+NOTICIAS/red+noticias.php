<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RED+ NOTICIAS</title>
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
        const url = 'https://inforedvos.lcdn.claro.net.co/Content/HLS_HLS_DIR/Live/channel(REDMASHDWEB)/master.m3u8';


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