<?php
    session_start();
    if(!isset($_SESSION["user"])){
    }

?>

<!DOCTYPE html>
<html lang="en" style="
    background: url(BG_PINK.png);
    background-size: cover;
"><head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link href="login.css" rel="stylesheet" type="text/css">
</head>

    
<body data-new-gr-c-s-check-loaded="14.1156.0" data-gr-ext-installed=""><div style="
    display: flex;
    position: absolute;
    grid-template:
        &quot;. .&quot;;
    width: -webkit-fill-available;
    justify-content: space-evenly;
    height: -webkit-fill-available;
">
<div style="
    width: 602px;
    place-self: center;
    height: -webkit-fill-available;
    background-image: linear-gradient(359deg, #00000052, #FEECED, #FFC0CB);
">
    <div style="
    padding: 92px 66px;
">
        <div style="
    display: flex;
    justify-content: space-between;
">
    <h2 style="
    font-size: 34px;
    font-family: emoji;
">ASPIRING <br> PROFESSIONAL <br>DEVELOPER</h2><img src="heart.png" style="
    margin-right: -59px;
    margin-bottom: auto;
">
</div>
<div>
   <img src="LOGO.png" style="
    MARGIN-TOP: 65PX;
    height: 569px;
    width: 968px;
    position: absolute;
    margin-left: -165px;
"> 
</div>
    </div>

</div>
<div style="border-radius: 25px;height: 541px;width: 549px;ALIGN-SELF: CENTER;" data-new-gr-c-s-check-loaded="14.1154.0" data-gr-ext-installed="">

    
    <div class="container" style="
    =:
    -webkit-center;
">

<h1 style="
    font-weight: bold;
    margin-top: 21px;
    margin-left: 207px;
"> LOGIN</h1>
<?php
    if(isset($_POST["login"])) {
        if(isset($_POST["email"]) && isset($_POST["password"])) {
            $email = $_POST["email"];
            $password = $_POST["password"];
            require_once "database.php";
            $sql = "SELECT * FROM userregistration_tbl WHERE email = '$email'";
            $result = mysqli_query($conn, $sql);
            $user = mysqli_fetch_array($result, MYSQLI_ASSOC);
            if ($user) {
                if (password_verify($password, $user["password"])) {
                    $_SESSION["user"] = "yes";
                    $_SESSION["user_id"] = $user["ID"];
                    $_SESSION["user_name"] = $user["FirstName"];
                    header("Location: index.php");
                    die();
                } else {  
                    echo "<div class='alert alert-danger'> Email does not match </div>";
                }
            } else {
                echo "<div class='alert alert-danger'> Password does not match </div>";
                    }
                        }
    }

?>
    <form action="login.php" method="post">
            <div class="form-group">
                <label for="email" style="
    margin-top: 70px;
    margin-bottom: 0px;
    font-weight: bold;
    margin-left: 34px;
    font-size: 20px;
">Email:</label>
                <div style="
    text-align: -webkit-center;
">
<input type="email" name="email" class="form-control" required="" style="
    width: 458px; height: 48px; background-color: #FEECED; border: black;
">
    </div>
</div>


 
    <div class="form-group">
        <label for="password" style="
    margin-top: 30px;
    font-weight: bold;
    margin-left: 35px;
    font-size: 20px;
">Password:</label>
        <div style="text-align: -webkit-center;">
    
<input type="password" name="password" class="form-control" required="" style="
    width: 459px; height: 48px; background-color: #FEECED;
">
</div>
</div>
 
    <div class="form-btn">
        <input type="submit" value="Login" name="login" class="btn btn-primary" style="margin-top: 30px;width: 100px;margin-left: 221px;background: #D898A4;font-size: large;font-weight: bold;color: black;margin-bottom: 21px;">
</div>
<div>
<p style="
    margin-left: 150px;
    margin-top: 10px;
">Not Registered yet? <a href="registration.php"> Register Here</a>
</p>
</div>

</form>
</div>

</div>
</div>

<grammarly-desktop-integration data-grammarly-shadow-root="true"></grammarly-desktop-integration>
</body></html>