let bg;
let img;
let opacity = 0;
function preload() {
  bg = loadImage("Bad Code.png");
}

function setup() {
  createCanvas(windowWidth-20, windowHeight);
  noStroke();
  max_distance = dist(0, 0, width, height);
}

function draw() {
    background(36, 36, 36, 255);
    tint(255, opacity-50);
    image(bg, 0, 0);
}

function windowResized() {
  resizeCanvas(width,height);
}



function mouseMoved() {
  // Map the mouse position to the number of images. 
  opacity = map (mouseX, 0, 900, 0, 255 );
}
