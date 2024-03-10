<!DOCTYPE html>
<html>
<head>
    <link href="contact.css" rel="stylesheet" type="text/css">
    <meta charset="UTF-8">
    <title> CONTACT INFO </title>

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


<article>
  <h1 style="font-size:200%;">CONTACT ME</h1> 
  <p>Let's connect and share thoughts, ideas, or just a friendly 'hello'! Your messages are always welcome. Feel free to reach out to me. Looking forward to our conversation!</p>
  <div class="grid-container">
    <h5>CONTACT NUMBER  <br><br> +63 963 386 3266 <br> +63 975 866 998
    </h5>
    <div class="wall1column">
      <img src="wall1.jpg" alt="wall1" width="300" height="200px" style="border-radius: 10px;align-content: center;">
    </div>
    <h3>OUTLOOK <br> <br> reanomm@students.nu-fairview.edu.oh</h3>
    <div class="wall2column">
      <img src=" wall2.jpg" alt="wall2" width="300" height="200" style="
    border-radius: 10px;">
    </div>
    <h4>EMAIL <br> <br>joyreano8@gmail.com <br>joyreano09@gmail.com</h4>
    <div class="wall3column">
      <img src="wall3.jpg" alt="wall3" width="300" height="200" style="
    border-radius: 10px;">
  </div>
</div>
  
</article>



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