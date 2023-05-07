<div class="container" style=" position: fixed; top: 5%; left: 10%;">
    <div id="scene">
        <?php
        for ($i = 1; $i < 7; $i++) {
            echo '<div class="parallax-layer" data-depth="' . $i / 3 . '"> <img src="images/layer' . $i . '.png"></div>';
        }
        ?>
    </div>
</div>

<div class="container" style="position: fixed;  top: 60%; left: 10%;">
    <div id="scene2">
        <?php
        for ($i = 1; $i < 7; $i++) {
            echo '<div class="parallax-layer" data-depth="' . $i / 3 . '"> <img src="images/layer' . $i . '.png"></div>';
        }
        ?>
    </div>
</div>

<div class="container" style="position: fixed;  top: 5%; left: 35%;">
    <div id="scene3">
        <?php
        for ($i = 1; $i < 7; $i++) {
            echo '<div class="parallax-layer" data-depth="' . $i / 3 . '"> <img src="images/layer' . $i . '.png"></div>';
        }
        ?>
    </div>
</div>

<div class="container" style="position: fixed;  top: 60%; left: 35%;">
    <div id="scene4">
        <?php
        for ($i = 1; $i < 7; $i++) {
            echo '<div class="parallax-layer" data-depth="' . $i / 3 . '"> <img src="images/layer' . $i . '.png"></div>';
        }
        ?>
    </div>
</div>

<div class="container" style="position: fixed;  top: 5%; left: 60%;">
    <div id="scene5">
        <?php
        for ($i = 1; $i < 7; $i++) {
            echo '<div class="parallax-layer" data-depth="' . $i / 3 . '"> <img src="images/layer' . $i . '.png"></div>';
        }
        ?>
    </div>
</div>

<div class="container" style="position: fixed;  top: 60%; left: 60%;">
    <div id="scene6">
        <?php
        for ($i = 1; $i < 7; $i++) {
            echo '<div class="parallax-layer" data-depth="' . $i / 3 . '"> <img src="images/layer' . $i . '.png"></div>';
        }
        ?>
    </div>
</div>

<script>
    var parallax = new Parallax(document.getElementById('scene'));
    var parallax = new Parallax(document.getElementById('scene2'));
    var parallax = new Parallax(document.getElementById('scene3'));
    var parallax = new Parallax(document.getElementById('scene4'));
    var parallax = new Parallax(document.getElementById('scene5'));
    var parallax = new Parallax(document.getElementById('scene6'));
</script>