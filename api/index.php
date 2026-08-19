<?php

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

$nameErr = $emailErr = $phoneErr = $genderErr = $addErr = $cityErr = $regionErr = $postErr = "";
$name = $email = $phone = $gender = $add = $city = $region = $post = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if (empty($_POST["name"])) {
        $nameErr = "*name is required";
    } else {
        $name = test_input($_POST["name"]);
    }

    if (empty($_POST["email"])) {
        $emailErr = "*email is required";
    } else {
        $email = test_input($_POST["email"]);
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $emailErr = "*pls enter a valid email";
        }
    }

    if (empty($_POST["phone"])) {
        $phoneErr = "*phone number is required";
    } else {
        $phone = test_input($_POST["phone"]);
    }

    if (empty($_POST["gender"])) {
        $genderErr = "*pls choose an option";
    } else {
        $gender = test_input($_POST["gender"]);
    }

    if (empty($_POST["add"])) {
        $addErr = "*the address is required";
    } else {
        $add = test_input($_POST["add"]);
    }

    if (empty($_POST["city"])) {
        $cityErr = "*the city is required";
    } else {
        $city = test_input($_POST["city"]);
    }

    if (empty($_POST["region"])) {
        $regionErr = "*the region is required";
    } else {
        $region = test_input($_POST["region"]);
    }

    if (empty($_POST["post"])) {
        $postErr = "*the postcode is required";
    } else {
        $post = test_input($_POST["post"]);
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
    <link rel="stylesheet" href="/style.css">
</head>

<body>

<section class="contaner">
    <header>Registration Form</header>
    <form method="POST" action="/" class="form">
        <div class="input-box">
            <label for="name">Full Name</label>
            <input type="text" id="name" name="name" placeholder="Enter full name" value="<?php echo $name; ?>" required>
            <span class="error"><?php echo $nameErr; ?></span>
        </div>

        <div class="input-box">
            <label for="email">Email Address</label>
            <input type="email" id="email" name="email" placeholder="Enter your email" value="<?php echo $email; ?>" required>
            <span class="error"><?php echo $emailErr; ?></span>
        </div>

        <div class="column">
            <div class="input-box">
                <label for="num">Phone Number</label>
                <input type="number" id="num" name="phone" placeholder="Enter phone number" value="<?php echo $phone; ?>">
                <span class="error"><?php echo $phoneErr; ?></span>
            </div>

            <div class="input-box">
                <label for="date">Birth Date</label>
                <input type="date" id="date" name="date" placeholder="Enter birth date">
            </div>
        </div>

        <div class="gender-box">
            <h3>Gender</h3>
            <div class="gender-option">
                <div class="gender">
                    <input type="radio" id="check1" name="gender" value="male" <?php if (isset($gender) && $gender == "male") echo "checked"; ?>>
                    <label for="check1">Male</label>
                </div>

                <div class="gender">
                    <input type="radio" id="check2" name="gender" value="female" <?php if (isset($gender) && $gender == "female") echo "checked"; ?>>
                    <label for="check2">Female</label>
                </div>

                <div class="gender">
                    <input type="radio" id="check3" name="gender" value="other" <?php if (isset($gender) && $gender == "other") echo "checked"; ?>>
                    <label for="check3">Prefer not to say</label>
                    <span class="error"><?php echo $genderErr; ?></span>
                </div>
            </div>
        </div>

        <div class="input-box adress">
            <label for="add">Address</label>
            <input type="text" id="add" name="add" placeholder="Enter street address" value="<?php echo $add; ?>" required>
            <span class="error"><?php echo $addErr; ?></span>
            <input type="text" id="add2" name="add2" placeholder="Enter address line 2">
            
            <div class="column">
                <div class="select-box">
                    <select name="country" id="country">
                        <option hidden value="">Your country</option>
                        <option value="Iran">Iran</option>
                        <option value="Europe">Europe</option>
                        <option value="Japan">Japan</option>
                        <option value="Turkey">Turkey</option>
                    </select>
                </div>
            </div>

            <input type="text" id="city" name="city" placeholder="Enter your city" value="<?php echo $city; ?>">
            <span class="error"><?php echo $cityErr; ?></span>
            
            <input type="text" id="region" name="region" placeholder="Enter your region" value="<?php echo $region; ?>">
            <span class="error"><?php echo $regionErr; ?></span>
            
            <input type="text" id="post" name="post" placeholder="Enter your postcode" value="<?php echo $post; ?>">
            <span class="error"><?php echo $postErr; ?></span>
        </div>

        <button type="submit">Submit</button>
    </form>
</section>

</body>

</html>
