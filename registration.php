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
    <title>REGISTER</title>
    <link href="intlTelInput.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
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
<div style="border-radius: 25px;width: 549px;ALIGN-SELF: CENTER;" data-new-gr-c-s-check-loaded="14.1154.0" data-gr-ext-installed="">

    
    <div class="container" style="
    =:
    -webkit-center;
">

<h1 style="
    font-weight: bold;
    margin-left: 155px;
    margin-bottom: 30px;
"> REGISTER</h1>
<body>

    <div class="container">
        <?php
        //validate the submit button
        if(isset($_POST["submit"])){
            $LastName = $_POST["LastName"];
            $FirstName = $_POST["FirstName"];
            $email = $_POST["Email"];
            $password = $_POST["password"];
            $RepeatPassword = $_POST["repeat_password"];
            $Address = $_POST["address"];
            $Country = $_POST["country"];
            $Province = $_POST["province"];
            $City = $_POST["city"];
            $Barangay = $_POST["barangay"];
            $Contact_No = $_POST["phone"];
 
            $passwordHash = password_hash($password, PASSWORD_DEFAULT);
 
            $errors = array();
        // validate if all fields are empty
            if (empty($LastName) OR empty($FirstName) OR empty($email) OR empty($password) OR empty($RepeatPassword)) {
                array_push($errors, "All fields are required");
            }
        //validate if the email is not validated
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
                array_push($errors, "Email is not valid");
            }
        // password should not be less than 8
            if(strlen($password)<8) {
                array_push($errors, "Password must be at least 8 characters long");
            }
        // check if password is the same
            if($password!= $RepeatPassword){
                array_push($errors, "Password does not match");
            }
            require_once "database.php";
            $sql = "SELECT * FROM userregistration_tbl WHERE email = '$email'";
            $result = mysqli_query($conn, $sql);
            $rowCount = mysqli_num_rows($result);
            if ($rowCount>0) {
                array_push($errors, "Email Already Exist!");
            }
 
            if (count($errors)>0){
                foreach($errors as $error) {
                    echo"<div class='alert alert-danger'>$error</div>";
                    }
                }else{
                   
                    $sql = "INSERT INTO userregistration_tbl (LastName, FirstName, email, password, address, country, province, city, barangay, contact_no) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
                    $stmt = mysqli_stmt_init($conn); // initializes a statement and returns an object suitable for mysqli_stmt_prepare()
                   $preparestmt = mysqli_stmt_prepare($stmt, $sql);
                   if ($preparestmt) {
                    mysqli_stmt_bind_param($stmt, "ssssssssss", $LastName, $FirstName, $email, $passwordHash, $Address, $Country, $Province, $City, $Barangay, $Contact_No);
                    mysqli_stmt_execute($stmt);
                    echo "<div class='alert alert-success'> You are Registered Successfully! </div>";
                } else {
                    die("Something went wrong");
                }
                }
            }
        ?>
        <form action="registration.php" method="post">
        <div class="form-group" style="display: flex; justify-content: flex">
            <input type="text" class="form-control" name="LastName" placeholder="LastName: " style="width:219px; height: 48px; background-color: #FEECED; border: black; margin-bottom: 10px;">
            <div class="form-group">
            <input type="text" class="form-control" name="FirstName" placeholder="FirstName: " style="width: 219px;height: 48px; background-color: #FEECED; border: black;margin-bottom: 10px; margin-left:20px;">

            </div></div>
            <div class="form-group">
            <div class="form-group">
                <input type="email" class="form-control" name="Email" placeholder="Email: " style="width: 458px; height: 48px; background-color: #FEECED; border: black; margin-bottom: 10px;">
            </div>
            </div>
            <div style="display: flex; justify-content: space-between;">
    
        <div class="form-group" style="display: flex; justify-content: flex">
            <input type="password" class="form-control" name="password" placeholder="Input Password: " style="width: 219px;height: 48px;background-color: #FEECED;border: black;margin-bottom: 10px;">
            <input type="password" class="form-control" name="repeat_password" placeholder="Repeat Password: " style="width: 219px;height: 48px;background-color: #FEECED;border: black; margin-bottom: 10px; margin-left:20px;">
</div>
</div>

<div class="form-group">
            <label for="inputAddress">Address</label>
            <input type="text" class="form-control" id="inputAddress" name="address" placeholder="Lot/Blk/Phase/Subdivision" style="
    width: 458px; height: 48px; background-color: #FEECED; border: black; margin-bottom: 10px;
">
        </div>
        <!--provice and city-->
        <div class="form-group">
            <label>Country</label>
            <select id="countries" name="country" class="form-control" name="countries" required style="
    width: 458px; height: 48px; background-color: #FEECED; border: black; margin-bottom: 10px;">
            </select>
        </div> <!-- form-group end.// -->
        <div class="form-row">
            <div class="col form-group">
                <label>Province</label>
                <select id="provinces" name="province" class="form-control" required style="
    width: 458px; height: 48px; background-color: #FEECED; border: black; margin-bottom: 10px;">
                    <option value="" disabled selected>Select Province</option>
                </select>
            </div> <!-- form-group end.// -->
            <div class="col form-group">
                <label>City/Municipality</label>
                <select id="cities" name="city" class="form-control" required style="
    width: 458px; height: 48px; background-color: #FEECED; border: black; margin-bottom: 10px;">
                    <option value="" disabled selected>Select City/Municipality</option>
                </select>
            </div> <!-- form-group end.// -->
            <div class="col form-group">
                <label>Barangay</label>
                <select id="barangay" name="barangay" class="form-control" required style="
    width: 458px; height: 48px; background-color: #FEECED; border: black; margin-bottom: 10px;">
                    <option value="" disabled selected>Select Barangay</option>
                </select>
            </div> <!-- form-group end.// -->
        
 
        
 
        <div class="form-group">
            <input type="tel" class="form-control" id="phone" name="phone" placeholder="Enter your phone number" required maxlength="20" style="
    width: 458px; height: 48px; background-color: #FEECED; border: black; margin-bottom: 10px;">
        </div>
            </div>
            </div>
            <div class="form-btn">
            <input type="submit" class="btn btn-primary" value="Register" name="submit" style="margin-left: 180px;background-color: #D898A4;font-weight: bold;margin-bottom: 12px;margin-top: 10px;color: black;width: 100px;height: 43px;
">
            </div>
        </form>
        <div><p style="
    margin-left: 120px;
    margin-top: 20px;
">Already registered? <a href="login.php"> Login Here</a></p>
</div>
    </div>

    <script>
    var config = {
        cUrl: 'https://api.countrystatecity.in/v1/countries',
        ckey: 'Vjg3SGJjVUVEVWVibTdrYWQ1Q1JJcnd2NEo0NVI1d1dPVGJsc3lSaw=='
    }

    var countrySelect = document.querySelector('.country'),
        stateSelect = document.querySelector('.state'),
        citySelect = document.querySelector('.city'),
        barangaySelect = document.querySelector('.barangay');

    function loadCountries() {
        let apiEndPoint = config.cUrl;

        fetch(apiEndPoint, { headers: { "X-CSCAPI-KEY": config.ckey } })
            .then(response => response.json())
            .then(data => {
                countrySelect.innerHTML = '<option value="">Select Country</option>'; // Clear existing options
                data.forEach(country => {
                    const option = document.createElement('option');
                    option.value = country.iso2;
                    option.textContent = country.name;
                    countrySelect.appendChild(option);
                });
            })
            .catch(error => console.error('Error loading countries:', error));

        // Disable dropdowns initially
        stateSelect.disabled = true;
        citySelect.disabled = true;
        barangaySelect.disabled = true;
        stateSelect.style.pointerEvents = 'none';
        citySelect.style.pointerEvents = 'none';
        barangaySelect.style.pointerEvents = 'none';
    }

    function loadStates() {
        stateSelect.disabled = false;
        citySelect.disabled = true;
        barangaySelect.disabled = true;
        stateSelect.style.pointerEvents = 'auto';
        citySelect.style.pointerEvents = 'none';
        barangaySelect.style.pointerEvents = 'none';

        const selectedCountryCode = countrySelect.value;
        stateSelect.innerHTML = '<option value="">Select State</option>'; // Clear existing states
        citySelect.innerHTML = '<option value="">Select City</option>'; // Clear existing cities
        barangaySelect.innerHTML = '<option value="">Select Barangay</option>'; // Clear existing barangays

        fetch(`${config.cUrl}/${selectedCountryCode}/states`, { headers: { "X-CSCAPI-KEY": config.ckey } })
            .then(response => response.json())
            .then(data => {
                data.forEach(state => {
                    const option = document.createElement('option');
                    option.value = state.iso2;
                    option.textContent = state.name;
                    stateSelect.appendChild(option);
                });
            })
            .catch(error => console.error('Error loading states:', error));
    }

    function loadCities() {
        citySelect.disabled = false;
        citySelect.style.pointerEvents = 'auto';

        const selectedCountryCode = countrySelect.value;
        const selectedStateCode = stateSelect.value;
        citySelect.innerHTML = '<option value="">Select City</option>'; // Clear existing cities
        barangaySelect.innerHTML = '<option value="">Select Barangay</option>'; // Clear existing barangays

        fetch(`${config.cUrl}/${selectedCountryCode}/states/${selectedStateCode}/cities`, { headers: { "X-CSCAPI-KEY": config.ckey } })
            .then(response => response.json())
            .then(data => {
                data.forEach(city => {
                    const option = document.createElement('option');
                    option.value = city.iso2;
                    option.textContent = city.name;
                    citySelect.appendChild(option);
                });
            })
            .catch(error => console.error('Error loading cities:', error));
    }

    function loadBarangays() {
        barangaySelect.disabled = false;
        barangaySelect.style.pointerEvents = 'auto';

        const barangays = [
            "Select Barangay",
            "Barangay 1",
            "Barangay 2",
            // Add more barangays here if needed
        ];    

        barangaySelect.innerHTML = ''; // Clear existing barangays
        barangays.forEach(barangay => {
            const option = document.createElement('option');
            option.value = barangay;
            option.textContent = barangay;
            barangaySelect.appendChild(option);
        });
    }

    countrySelect.addEventListener('change', loadStates);
    stateSelect.addEventListener('change', loadCities);
    citySelect.addEventListener('change', loadBarangays);

    window.onload = loadCountries;
</script>
<script src="js/intlTelInput.js"></script>
        <script src="country.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
        <script src="province_barangay_city.js"></script>
        <script>
            document.addEventListener("DOMContentLoaded", function() {
                var input = document.querySelector("#phone");
                var iti = window.intlTelInput(input, {
                    utilsScript: "js/utils.js",
                    separateDialCode: true,        
                });
 
                // Event listener for handling changes in the input
                input.addEventListener("change", function() {
                    // Check if the input value already contains the dial code
                    if (!input.value.startsWith('+')) {
                        var selectedCountryData = iti.getSelectedCountryData();
                        var countryCode = selectedCountryData.dialCode;
 
                        // Remove leading zeros
                        input.value = input.value.replace(/^0+/, '');
 
                        // Add the dial code only if it's not already present
                        input.value = '+' + countryCode + input.value;
                    }
                });
            });
        </script>
 
</body>
</html>