<style>
.mySlides {display:none;    display: flex;    flex-wrap: wrap;    justify-content: center;}
</style>

<div class="Napp-sicama-h">
<h3 class="landingTextH2">Les dernières publications.</h3>
</div>

<div class="w3-content w3-display-container">
    <div class="mySlides">
        <h1>1</h1>
        <img src="img_snowtops.jpg" style="width:100%">
    </div>
    <div class="mySlides">
        <h1>2</h1>
        <img src="img_snowtops.jpg" style="width:100%">
    </div>
    <div class="mySlides">
        <h1>3</h1>
        <img src="img_snowtops.jpg" style="width:100%">
    </div>
    <div class="mySlides">
        <h1>4</h1>
        <img src="img_snowtops.jpg" style="width:100%">
    </div>
    <div class="mySlides">
        <h1>5</h1>
        <img src="img_snowtops.jpg" style="width:100%">
    </div>
  
  <button class="" onclick="plusDivs(-1)">&#10094;</button>
  <button class="" onclick="plusDivs(1)">&#10095;</button>
</div>

<script>
var slideIndex = 1;
showDivs(slideIndex);

function plusDivs(n) {
  showDivs(slideIndex += n);
}

function showDivs(n) {
  var i;
  var x = document.getElementsByClassName("mySlides");
  if (n > x.length) {slideIndex = 1}
  if (n < 1) {slideIndex = x.length}
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  x[slideIndex-1].style.display = "block";  
}
</script>
