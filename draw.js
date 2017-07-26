

var checkbutton = document.getElementById("make");
checkbutton.addEventListener("click",createtag,false);
var canvas = document.getElementById('main_canvas');
var context = canvas.getContext('2d');






function createtag(){
      var image = new Image();
      image.src = 'dummy1.jpeg';
      image.addEventListener('load', function() {
          context.drawImage(image, 0, 0, 1000, 1000);
      }, false);

      var image2 = new Image();
      image2.src = 'dummy2.png';
      image2.addEventListener('load', function() {
          context.drawImage(image2, 0, 0, 600, 600);
      }, false);
}
