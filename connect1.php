<!DOCTYPE html>
<html lang="en">

<head>
    <title>Book Store -account</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" type="text/css" href="account.css">



</head>

<body>
    <header>
        <img class="logo" src="images/logo.png " alt="logo">
        <nav>
            <ul class="nav_links">
                <li><a href="index.html">HOME</a></li>
                <li><a href="about.html">ABOUT</a></li>
                <li><a href="product.html">SHOP</a></li>
                <li><a href="My Cart.html">MY CART</a></li>
                <li><a href="account.html">ACCOUNT</a></li>
            </ul>
        </nav>
    </header>
    <section class="body">
        <hr>
        <div class="wrapper">
            <?php if (isset($_POST['submit'])) {

                $firstname = $_POST['firstname'];
                $middlename = $_POST['middlename'];
                $lastname = $_POST['lastname'];
                $username = $_POST['username'];
                $gender = $_POST['gender'];
                $pass = $_POST['pass'];
                $pass2 = $_POST['pass2'];



                $counter = 0;

                if (empty($firstname)) {
                    echo "<h5>Please Enter your First name</h5>";
                } else {
                    $counter++;
                }

                if (empty($middlename)) {
                    echo "<h5>Please Enter your Middle name</h5>";
                } else {
                    $counter++;
                }

                if (empty($lastname)) {
                    echo "<h5>Please Enter your Last name</h5>";
                } else {
                    $counter++;
                }

                if (empty($username)) {
                    echo "<h5>Please Enter your Username</h5>";
                } else {
                    $counter++;
                }

                if (empty($pass)) {
                    echo "<h5>Please Enter your Password</h5>";
                } else {
                    $counter++;
                }
                if (empty($pass2)) {
                    echo "<h5>Please Enter your Confirmation Password</h5>";
                } elseif ($_POST['pass'] !== $_POST['pass2']) {
                    echo '<h5>Your password does not match on your confirmation password</h5>';
                } else {
                    $counter++;
                }
                if (empty($gender)) {
                    $counter++;
                }

                if ($counter == 6) {

                    echo nl2br("<h1> Register Successfully!</h1>
                        First Name: $firstname 
                        \nMiddle Name: $middlename 
                        \nLast Name: $lastname 
                        \nUsername: $username
                        \nGender: $gender 
                        \nPassword: $pass 
                        \nConfirmation Password: $pass2
                        <br>");

                    $counter = 0;
                }
                echo '  <form action="account.html">
                        <input type="submit" name="Return to Registration page" value="Return to Registration page" > 
                        </form>';
            }
            ?>
        </div>
        </div>
</body>

</html>