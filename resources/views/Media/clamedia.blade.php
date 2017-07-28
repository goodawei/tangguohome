<html>
<head>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/clappr/latest/clappr.min.js"></script>
</head>

<body>
<div style="width: 800px ;height: 800px">
    <div id="player" style="margin-left:200px;"></div>
</div>
<script>
    var player = new Clappr.Player({
        source: "Media/砂板糖.mp4", parentId: "#player",
        poster: "Media/one.jpg",
        height : 200,
        width : 300
    });
</script>
</body>
</html>