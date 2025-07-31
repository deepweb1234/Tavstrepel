<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Telecaribe TV</title>
    <style>
        html,
        body {
            height: 100%;
            margin: 0;
            padding: 0;
        }

        iframe {
            width: 100%;
            height: 100%;
            border: none;
            display: block;
        }
    </style>
</head>

<body>

    <iframe id="tvIframe" loading="lazy" frameborder="0" allowfullscreen="allowfullscreen" src="https://player.instantvideocloud.net/#/embed/180720d1"></iframe>


    <script>
        window.addEventListener('message', function(event) {
            if (event.data === 'play') {
                const playButton = document.getElementById('tvc-play-pause');
                if (playButton) {
                    playButton.click();
                }
            }
        });
    </script>
</body>

</html>