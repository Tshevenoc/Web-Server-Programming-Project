
<html lang ="en" xmlns="http://www.w3.org/1999/xhtml">
	<!--
		skeleton for all other pages
	-->
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1,
          minimum-scale=0.5, maximum-scale=0.5, minimal-ui" />

    <link rel="stylesheet" type="text/css" href="normalize.css" />
    <link rel="stylesheet" type="text/css" href="style.css">

    <title>EasyFunWeb</title>

    <!--Inline Javascript-->
    <script type="text/javascript">

    </script>

</head>
<body>

    <?php
		include ('includes/topNav.php');
	?>

    <header>

        <h1>Easy Fun Web</h1>
    </header>



    <div class="MainContent wrap">

        <div class="HTMLlist">
            <h2 style="text-align:center;">List</h2>
            <ul>
                <li class="dropdown stylingTitleList">
                    HTML

                    <div class="dropdown-content">
                        <ol>
                            <li><a href="intro.html">Intro</a></li>
                            <li><a href="tags.html">Tags</a></li>
                            <li><a href="lists.html">Lists</a></li>
                            <li>
                                <a href="#">Media</a>
                                <ul>
                                    <li><a href="video.html">Video</a></li>
                                    <li><a href="audio.html">Audio</a></li>
                                </ul>
                            </li>
                            <li><a href="links.html">Links</a></li>
                            <li>
                                <a href="#">Forms</a>
                                <ul>
                                    <li><a href="input.html">Input</a></li>
                                    <li><a href="button.html">Button</a></li>
                                    </ul>
                            </li>

                        </ol>
                        </div>
            </ul>

        </div>
                




        <div class="gameSection">
            <h2>Video</h2>

            <p>
              The video element allows webpages to play video 
              files inline with other content.

            </p>
            <div class="BorderSpace">
            </div>

            <p>
                The HTML Video element (<'video'>) embeds a media player
                which supports video playback into the document. 
                You can use <'video'> for audio content as well, but the <'audio'> 
                element may provide a more appropriate user experience.
            </p>
        </div>

        <div class="index">
            <h2 style="text-align:center;">Index</h2>
            <h3>Attrubutes</h3>
            <p>
                <strong>Autoplay</strong>
                - A Boolean attribute; if specified, the video automatically begins to play
                back as soon as it can do so without stopping to finish loading the data.
            </p>
            <p>
                <strong>Controls</strong>
                - If this attribute is present, the browser will offer controls to allow the user to
                control video playback, including volume, seeking, and pause/resume playback.
            </p>
            <p>
                <strong>Loop</strong>
                - A Boolean attribute; if specified, we will, upon reaching the end of the video,
                automatically seek back to the start.
            </p>
            <p>
                <strong>Muted</strong>
                - A Boolean attribute which indicates the default setting of the audio contained in the video. 
                If set, the audio will be initially silenced. Its default value is false, 
                meaning that the audio will be played when the video is played.
            </p>
            <br />
            <a>More terms here</a>
        </div>


    </div>

    <footer>
        <!--Tester link-->
        <p><span>&copy; 2018 EasyFunWeb</span></p><!--Using <small> makes the text small-->
    </footer>

</body>
</html>