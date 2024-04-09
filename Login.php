<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <link rel="stylesheet" href="Login.css">
</head>
<body>
    <div class="container" id="signUp" style="display: none;">
        <h1 class="form-title">Register</h1>
        <form method="post" action="Register.php">
            <div class="input-group">
                <i class="fa  fa-user icon"></i>
                <input type="text" name="fName" id="fName" placeholder="First Name" required/>
                <label for="fName">First Name</label>
            </div>
            <div class="input-group">
                <i class="fa fa-user"></i>
                <input type="text" name="lName" id="lName" placeholder="Last Name" required/>
                <label for="lName">Last Name</label>
            </div>
            <div class="input-group">
                <i class="fa fa-envelope"></i>
                <input type="text" name="email" id="email" placeholder="Email" required/>
                <label for="email">Email</label>
            </div>
            <div class="input-group">
                <i class="fa fa-lock"></i>
                <input type="text" name="password" id="password" placeholder="Password" required>
                <label for="password">Password</label>
            </div>
            <input type="submit" class="btn" name="signUp" value="Sign Up"/>
        </form>
        <p class="or">----------or-----------</p>
        <div class="icons">
            <i class="fab fa-facebook"></i>
            <i class="fab fa-google"></i>
        </div>
        <div class="links">
            <p>Already Have Account?</p>
            <button id="signInButton">Sign In</button>
        </div>
    </div>
    <div class="container" id="signIn">
        <h1 class="form-title">Sign In</h1>
        <form method="post" action="Register.php">
            <div class="input-group">
                <i class="fa fa-envelope"></i>
                <input type="text" name="email" id="email" placeholder="Email" required/>
                <label for="email">Email</label>
            </div>
            <div class="input-group">
                <i class="fa fa-lock"></i>
                <input type="text" name="password" id="password" placeholder="Password" required>
                <label for="password">Password</label>
            </div>
            <p class="recover">
                <a href="#">Recover Password</a>
            </p>
            <input type="submit" class="btn" name="signIn" value="Sign In"/>
        </form>
        <p class="or">----------or-----------</p>
        <div class="icons">
            <i class="fab fa-facebook"></i>
            <i class="fab fa-google"></i>
        </div>
        <div class="links">
            <p>Don't have account yet?</p>
            <button id="signUpButton">Sign Up</button>
        </div>
    </div>
    <script src="login.js"></script>
</body>
</html>