<!-- <!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Señal Colombia</title>
  <style>
    body, html {
      margin: 0;
      padding: 0;
      width: 100%;
      height: 100%;
      overflow: hidden;
    }
    #streamingFrame {
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      border: none;
    }
    #videoPlayer {
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
    }
    #videoControls {
      position: absolute;
      bottom: 10px;
      left: 50%;
      transform: translateX(-50%);
      background-color: rgba(0, 0, 0, 0.7);
      padding: 10px;
      border-radius: 5px;
      display: flex;
      justify-content: center;
      align-items: center;
    }
    #qualitySelector {
      margin-right: 10px;
    }
  </style>
</head>
<body>
  <iframe id="streamingFrame" allowfullscreen style="display:none;"></iframe>
  <video id="videoPlayer" controls style="display:none;"></video>
  <div id="videoControls" style="display:none;">
    <button id="playButton">Play</button>
    <button id="pauseButton">Pause</button>
    <select id="qualitySelector">
      <option value="-1">Automático</option>
    </select>
    <button id="volumeUpButton">Vol +</button>
    <button id="volumeDownButton">Vol -</button>
  </div>
  
  <script src="https://cdn.jsdelivr.net/npm/hls.js@1.5.13/dist/hls.min.js"></script>
  <script>
    const urls = [
      
      'https://player.livepush.io/emvISrtc3QvWQ',
      'https://streaming.rtvc.gov.co/TV_Senal_Colombia_live/smil:live.smil/chunklist_b500000.m3u8',

      'no hay informacion aún',
      'no hay informacion aun'
      

    ];

    function checkStream(url) {
      return fetch(url, { method: 'GET' })
        .then(response => {
          if (response.ok) {
            return url;
          } else {
            throw new Error(`Stream not available: ${url} - Status: ${response.status}`);
          }
        });
    }

    function loadStream(url) {
      const iframe = document.getElementById('streamingFrame');
      const video = document.getElementById('videoPlayer');
      const videoControls = document.getElementById('videoControls');
      const playButton = document.getElementById('playButton');
      const pauseButton = document.getElementById('pauseButton');
      const qualitySelector = document.getElementById('qualitySelector');
      const volumeUpButton = document.getElementById('volumeUpButton');
      const volumeDownButton = document.getElementById('volumeDownButton');

      videoControls.style.display = 'block';

      if (url.endsWith('.m3u8')) {
        iframe.style.display = 'none';
        video.style.display = 'block';

        if (Hls.isSupported()) {
          const hls = new Hls();
          hls.loadSource(url);
          hls.attachMedia(video);
          hls.on(Hls.Events.MANIFEST_PARSED, function() {
            video.play();
          });
          
          // Populate quality selector
          hls.on(Hls.Events.MANIFEST_PARSED, function(event, data) {
            data.levels.forEach((level, index) => {
              const option = document.createElement('option');
              option.value = index;
              option.textContent = `${level.height}p`;
              qualitySelector.appendChild(option);
            });
          });

          qualitySelector.addEventListener('change', function() {
            const selectedQuality = parseInt(qualitySelector.value);
            hls.currentLevel = selectedQuality;
          });
        } else if (video.canPlayType('application/vnd.apple.mpegurl')) {
          video.src = url;
          video.addEventListener('loadedmetadata', function() {
            video.play();
          });
        }

        playButton.addEventListener('click', function() {
          video.play();
        });

        pauseButton.addEventListener('click', function() {
          video.pause();
        });

        volumeUpButton.addEventListener('click', function() {
          if (video.volume < 1) {
            video.volume += 0.1;
          }
        });

        volumeDownButton.addEventListener('click', function() {
          if (video.volume > 0) {
            video.volume -= 0.1;
          }
        });
      } else {
        video.style.display = 'none';
        iframe.style.display = 'block';
        iframe.src = url;
      }

      console.log(`Loaded stream from ${url}`);
    }

    function findAvailableStream(urls) {
      if (urls.length === 0) {
        console.error('No available streams');
        return;
      }

      const [url, ...remainingUrls] = urls;

      checkStream(url)
        .then(url => loadStream(url))
        .catch(() => {
          console.log(`Switching to next URL after ${url}`);
          findAvailableStream(remainingUrls);
        });
    }

    // Comprobar todas las URLs
    findAvailableStream(urls);
  </script>
</body>
</html>

 -->



<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>SEÑAL COLOMBIA</title>
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
    const url = 'https://streaming.rtvc.gov.co/TV_Senal_Colombia_live/smil:live.smil/chunklist_b1500000.m3u8';

    const player = videojs(video);
    player.src({
      src: url,
      type: 'application/x-mpegURL'
    });
    player.play();
  </script>
</body>

</html>