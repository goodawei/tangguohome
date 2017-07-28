<!DOCTYPE html>

<head>
    <!-- flowplayer depends on jQuery 1.7.1+ (for now) -->
    <script type="text/javascript" src="https://code.jquery.com/jquery-2.2.0.min.js"></script>

    <!-- flowplayer.js -->
    <script type="text/javascript" src="/Media/flowplayer-6.0.5/flowplayer.min.js"></script>

    <!-- player styling -->
    <link rel="stylesheet" type="text/css" href="/Media/flowplayer-6.0.5/skin/minimalist.css">

    <style>
        .lhw-player{
            background-color: #000;
            -webkit-background-size: 50%;
            background-size: 50%;
            background-position: 50% -100%;

            /*-webkit-transition: background 1s 0.5s;*/
            /*-moz-transition: background 1s 0.5s;*/
            /*-ms-transition:background 1s 0.5s;*/
            /*-o-transition:background 1s 0.5s;*/
            /*transition: background 1s 0.5s;*/

            -webkit-transition: all 1s 0.5s;
            -moz-transition: all 1s 0.5s;
            -ms-transition:all 1s 0.5s;
            -o-transition:all 1s 0.5s;
            transition: all 1s 0.5s;
        }

        .is-poster{
            -webkit-background-size: 100%;
            background-size: 100%;
            background-position: 50% 50%;
        }

        .is-mouseover{
            opacity: .8;
            -webkit-background-size: 103%;
            background-size: 103%;
        }

        .lhw-player .fp-ration{
            padding-top: 80.5%;
        }
        .lhw-player {
            width: 533px;
            height: 400px;
        }

    </style>

    <script>
        flowplayer.conf.volume = "0.5"
        flowplayer.conf.fullscreen = false
    </script>
</head>

<body>




<div data-ratio="0.6" class="lhw-player is-splash"  style="background: url(/images/system/072308263858.jpg) no-repeat 50% 50%;background-size: 100%">
    <video data-title="lhw-测试播放器"  loop preload="none">
        <source type="video/flash" src="Media/砂板糖.mp4">
    </video>
</div>

<div data-ratio="0.6" class="lhw-player is-splash" style="background: url(Media/one.jpg) no-repeat 50% 50%;background-size: 100%">
    <video data-title="lhw-测试播放器"  loop preload="none">
        <source type="video/flash" src="Media/砂板糖.mp4">
    </video>
</div>

<script>
    $('.lhw-player').flowplayer();
</script>


</body>