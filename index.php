<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Real-time Chat App</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css">
</head>
<body>
    <div class="wrapper">
        <section class="form signup">
            <header>Real-time Chat App</header>
            <form action="#" enctype="multipart/form-data">
                <div class="error-txt"></div>
                <div class="name-details">
                    <div class="field input">
                        <label for="">First Name:</label>
                        <input type="text" name="fname" placeholder="First Name..." required>
                    </div>
                    <div class="field input">
                        <label for="">Last Name:</label>
                        <input type="text" name="lname" placeholder="Last Name..." required>
                    </div>
                </div>
                    <div class="field input">
                        <label for="">Email Address:</label>
                        <input type="text" name="email" placeholder="Enter your email..." required>
                    </div>
                    <div class="field input">
                        <label for="">Password:</label>
                        <input type="password" name="password" placeholder="Password..." required>
                        <i class="fas fa-eye"></i>

                    </div>
                    <div class="field image">
                        <label for="">Select Image</label>
                        <input type="file" name="image" required>
                    </div>
                    <div class="field button">
                        <input type="submit" placeholder="Continue to Chat">
                    </div>
            </form>
            <div class="link">Already has an account? <a href="login.php">Login Now</a></div>
        </section>
    </div>
    <script src="javascript/pass-show-hide.js"></script>
    <script src="javascript/signup.js"></script>
</body>
</html>