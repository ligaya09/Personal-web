<?php
    session_start();
    if(!isset($_SESSION["user"])){
        header("Location: login.php");
    }
    $username = $_SESSION["user_name"]
?>

<!DOCTYPE html>
<html>
<head>
    <link href="index.css" rel="stylesheet" type="text/css">
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
  	<p style="font-family: Brush Script MT, Brush Script Std, cursive;"><b>ASPIRING</b> <span style="font-family:perpetua,serif;"> PROFESSIONAL DEVELOPER</span></p>
	</div>

  <div class="topnav">
  <a href="index.php">HOME</a>
  <a href="ABOUTME.php">ABOUT ME</a>
  <a href="Blog.php">BLOG</a>
  <a href="contact.php">CONTACT INFO</a>
  <a href="achievements.php">ACHIEVEMENTS</a>
  <a href="social.php">SOCIAL</a>
  <a href="works.php">WORKS</a>
  <div class="logout-container">
    <p class="username"><strong style="
    color: #D898A4;">Welcome back, <?php echo $username; ?>!</strong></p>
    <a href="logout.php" class="btn-btn-warning">LOGOUT</a>
  </div>
</div>
      
</div>

<body>

      <div class="content">
        <div style="margin-top: -120px;">
           <h1> Welcome to </h1>
            <h4> ASPIRING • PROFESSIONAL • DEVELOPER </h4>
            <p> </p>
            <h3>
                Building up my portfolio for
                  <br> future project and
                    <br> employment.
            </h3>
            <p></p>
            <h3 style="margin-bottom: 10px;"> Get to know me, enJOY!</h3><button class="button">
              <a class="five" href="ABOUTME.php">ABOUT ME</a>
              </button>
              <div class="container_comment">
              <div class="col-md-8">
                  <form method="post" style="">
                      <div class="mb-3" style="">
                      
                          <h1 id="comments" class="text-center" style="margin-top: 41px; margin-bottom: 0px; font-size: 30px;">Leave a Comment</h1>
                          <textarea class="form-control" id="comment" name="comment" rows="5" required="" style="width: 350px;" spellcheck="false"></textarea>
                      </div>
                      <button type="submit" name="submit" class="btn_submit" style="background-color: #D898A4; height: 36px; width: 87px; margin-top: 5px; color: white;">Submit</button>
                  </form>
              </div>

                <?php

                if(isset($_POST["comment"])){
                        $message = $_POST["comment"];
                        $date = date("Y-m-d");

                        // Get the user's ID from the session
                        if(isset($_SESSION["user_id"])) {
                            $user_id = $_SESSION["user_id"];
                        } else {
                            // Handle the case where user ID is not set in session
                            die("User ID not found in session");
                        }

                        require_once("database.php");

                        $sql = "INSERT INTO usercomment_tbl(ID, DATE, MESSAGE) VALUES (?, ?, ?)";

                        $stmt = mysqli_stmt_init($conn);

                        $preparestmt = mysqli_stmt_prepare($stmt, $sql);

                        if ($preparestmt) {
                            mysqli_stmt_bind_param($stmt, "sss", $user_id, $date, $message);
                            mysqli_stmt_execute($stmt);
                            echo "<div class='alert alert-success'>Comment sent successfully!</div>";
                        } else {
                            die("Something went wrong");
                        }
                    }
                ?>

            </div>
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