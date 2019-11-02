<style>
.mySlidons {display:none;    display: flex;    flex-wrap: wrap;    justify-content: center;}
</style>

<div class="Napp-sicama-h">
  <h3 class="landingTextH2">SUIVEZ NOUS SUR :</h3>
  <br/><br/>
  <p>Retrouvez nous sur : FACEBOOK</p>
  <p>Retrouvez nous sur : TWITTER</p>
  <p>Retrouvez nous sur : INSTAGRAM</p>
  <p>Retrouvez nous sur : G-Mail</p>
</div>

<br/><br/>

<div class="Napp-sicama-h">
  <h3 class="landingTextH2">NOS PARTENAIRES ET COFINANCEURS</h3>
</div>

<div class="w3-content w3-display-container">
    <div class="mySlidons">
        <h1>1</h1>
        <img src="img_snowtops.jpg" style="width:100%">
    </div>
    <div class="mySlidons">
        <h1>2</h1>
        <img src="img_snowtops.jpg" style="width:100%">
    </div>
    <div class="mySlidons">
        <h1>3</h1>
        <img src="img_snowtops.jpg" style="width:100%">
    </div>
    <div class="mySlidons">
        <h1>4</h1>
        <img src="img_snowtops.jpg" style="width:100%">
    </div>
    <div class="mySlidons">
        <h1>5</h1>
        <img src="img_snowtops.jpg" style="width:100%">
    </div>
  
  <button class="" onclick="plusDivix(-1)">&#10094;</button>
  <button class="" onclick="plusDivix(1)">&#10095;</button>
</div>

<script>
var slideIndex = 0;
carousel();

function carousel() {
    var i;
    var x = document.getElementsByClassName("mySlidons");
    for (i = 0; i < x.length; i++) {
      x[i].style.display = "none"; 
    }
    slideIndex++;
    if (slideIndex > x.length) {slideIndex = 1} 
    x[slideIndex-1].style.display = "block"; 
    setTimeout(carousel, 6000); 
}

showDivs(slideIndex);

function plusDivix(n) {
  showDivs(slideIndex += n);
}

function showDivs(n) {
  var i;
  var x = document.getElementsByClassName("mySlidons");
  if (n > x.length) {slideIndex = 1}
  if (n < 1) {slideIndex = x.length}
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  x[slideIndex-1].style.display = "block";  
}
</script>

</body>
