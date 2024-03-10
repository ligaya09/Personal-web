<!DOCTYPE html>
<html>
<head>
    <link href="aboutme.css" rel="stylesheet" type="text/css">
    <meta charset="UTF-8">
    <title> ABOUT ME </title>

 <div class="circle"></div>
  <div class="circle"></div>
  <div class="circle"></div>
  <div class="circle"></div>
  <div class="circle"></div>
  <div class="circle"></div>
  <div class="circle"></div>
  <div class="circle"></div>
  <div class="circle"></div>
  <div class="circle"></div>
  <div class="circle"></div>
  <div class="circle"></div>
  <div class="circle"></div>
  <div class="circle"></div>
  <div class="circle"></div>
  <div class="circle"></div>
  <div class="circle"></div>
  <div class="circle"></div>
  <div class="circle"></div>
  <div class="circle"></div>

<div class="footer">
  	<p style="font-family: Brush Script MT, Brush Script Std, cursive;font-size:110px;"><b>ASPIRING</b> <span style="font-family:perpetua,serif;font-size:90px"> PROFESSIONAL DEVELOPER</span></p>
	</div>

<div class="topnav">
  <a href="index.php">HOME</a>
  <a href="ABOUTME.php">ABOUT ME</a>
  <a href="Blog.php">BLOG</a>
  <a href="contact.php">CONTACT INFO</a>
  <a href="achievements.php">ACHIEVEMENTS</a>
  <a href="social.php">SOCIAL</a>
  <a href="works.php">WORKS</a>
      
  
</div>




<div class="container">
  
  <img src="m1.jpg" alt="Paris" style="width:80%;" height="800">
	<div class="centered">Hi, I'm  Mary Joy</div>

</div>

<body>
    <div class="content">
        <p> <h3>
          A second-year IT student at Asia Pacific College NUFV. I'm 20 years old from San jose del monte.Bulacan <br> I love watching movies and listening to music in my free time for relaxation.
	<br>Coding and design fascinate me, and I'm guided by my faith in exploring these fields. My goal is to become an excellent IT professional, 
	<br>and my family's unwavering support means the world to me.

	My faith inspires me to keep learning in coding and design. 
	<br>I believe dedication and faith will help me build a career that can make a positive impact in technology.
           </h3>
        </p>
    </div>

<div class="planecolumn">
    <img src="airplane.png" alt="plane" style="width:25%;"height="80%">
</div>
<h1> FAVORITES 
  
</h1>
<div class="grid-container">
  <div class="gallery">
    <a target="_blank" href="https://youtu.be/3bVJFgvUZHg?si=IyWy2Kpqb-PlL_zi">
      <img src="favpic.jpg" alt="Cinque Terre" width="600" height="400">
    </a>
    <div class="desc">PICTURE</div>
  </div>
  <div class="gallery">
    <a target="_blank" href="https://youtu.be/pBk4NYhWNMM?si=j3KE2S6oQ5egYWSW">
      <img src="barbie.jpg" alt="Mountains" width="700" height="400">
    </a>
    <div class="desc">MOVIE</div>
  </div>
  <div class="gallery">
    <a target="_blank" href="https://youtu.be/ioNng23DkIM?si=HS5AvKZitDaGOfna">
      <img src="KPOP.jpg" alt="Forest" width="600" height="400">
    </a>
    <div class="desc">KPOP</div>
  </div>
  <div class="FOODS">
    <a target="_blank">
      <img src="FOOD.jpg" alt="" width="700" height="400">
    </a>
    <div class="desc">FOOD <br> TAKOYAKI</div>
  </div>
  <div class="PLACE">
    <a target="_blank">
      <img src="PLACE.jpg" alt="" width="700" height="400">
    </a>
    <div class="desc">PLACE <br> ANTIPOLO</div>
  </div>
  <div class="gallery">
    <a target="_blank" href="https://youtu.be/NmFwemHybNE?si=sj9_QksYEIBcP2RD">
      <img src="MUSIC.jpg" alt="Northern Lights" width="600" height="400">
    </a>
    <div class="desc">MUSIC</div>
  </div>
</div>

</body>

<script>

const coords = { x: 0, y: 0 };
const circles = document.querySelectorAll(".circle");

const colors = [
  "#ffb56b",
  "#fdaf69",
  "#f89d63",
  "#f59761",
  "#ef865e",
  "#ec805d",
  "#e36e5c",
  "#df685c",
  "#d5585c",
  "#d1525c",
  "#c5415d",
  "#c03b5d",
  "#b22c5e",
  "#ac265e",
  "#9c155f",
  "#950f5f",
  "#830060",
  "#7c0060",
  "#680060",
  "#60005f",
  "#48005f",
  "#3d005e"
];

circles.forEach(function (circle, index) {
  circle.x = 0;
  circle.y = 0;
  circle.style.backgroundColor = colors[index % colors.length];
});

window.addEventListener("mousemove", function(e){
  coords.x = e.clientX;
  coords.y = e.clientY;
  
});

function animateCircles() {
  let x = coords.x;
  let y = coords.y;
  
  circles.forEach(function (circle, index) {
    circle.style.left = x - 12 + "px";
    circle.style.top = y - 12 + "px";
    
    circle.style.scale = (circles.length - index) / circles.length;
    circle.x = x;
    circle.y = y;

    const nextCircle = circles[index + 1] || circles[0];
    x += (nextCircle.x - x) * 0.5;
    y += (nextCircle.y - y) * 0.5;
  });
 
  requestAnimationFrame(animateCircles);
}

animateCircles();

</script>
</head>
</html>