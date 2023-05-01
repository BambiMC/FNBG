<!DOCTYPE html>
<html color-mode="light" lang="en">

<?php include(__DIR__ . '/../res/php/head.php'); ?>

<body>

    <div id="container" class="container">
        <div id="scene" class="scene">
            <div data-depth="1.00">
                <img src="images/layer1.png">
            </div>
            <div data-depth-x="0.80" data-depth-y="-0.80">
                <img src="images/layer2.png">
            </div>
            <div data-depth-x="-0.60" data-depth-y="-0.20">
                <img src="images/layer3.png">
            </div>
            <div data-depth="0.40" data-depth-y="-0.30">
                <img src="images/layer4.png">
            </div>
            <div data-depth="0.20">
                <img src="images/layer5.png">
            </div>
            <div data-depth="0.00">
                <img src="images/layer6.png">
            </div>
        </div>
    </div>


    <script>

        var scene = document.getElementById('scene');
        var parallax = new Parallax(scene);

    </script>

</body>

</html>