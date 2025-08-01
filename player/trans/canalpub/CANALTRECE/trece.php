<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>trece TV</title>
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
    <!-- <iframe id="tvIframe" src="https://www.codetoolsbox.com/clean.php?url=https://player.instantvideocloud.net/#/embed/c6bf0e38" title="Canal Trece TV Colombia HD" sandbox="allow-scripts allow-same-origin" scrolling="no" frameborder="0" allow="autoplay" allowfullscreen="true"></iframe> -->

    <iframe id="tvIframe" frameborder="0" allowfullscreen="allowfullscreen" loading="lazy" src="https://player.instantvideocloud.net/#/embed/c6bf0e38"></iframe>

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