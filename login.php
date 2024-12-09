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
        <section class="form login">
            <header>Real-time Chat App</header>
            <form action="#">
                <div class="error-txt">This is an error message!</div>
                    <div class="field input">
                        <label for="">Email Address:</label>    
                        <input type="text" placeholder="Enter your email...">
                    </div>
                    <div class="field input">
                        <label for="">Password:</label>
                        <input type="password" placeholder="Password...">
                        <i class="fas fa-eye"></i>
                    </div>
                    <div class="field button">
                        <input type="submit" placeholder="Login to Chat">
                    </div>
            </form>
            <div class="link">Don't have an account? <a href="">SignUp Now</a></div>
        </section>
    </div>
    <script src="javascript/pass-show-hide.js"></script>

</body>
</html>