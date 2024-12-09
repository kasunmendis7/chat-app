<?php include_once "header.php" ?>
<body>
    <div class="wrapper">
        <section class="form login">
            <header>Real-time Chat App</header>
            <form action="#">
                <div class="error-txt"></div>
                    <div class="field input">
                        <label for="">Email Address:</label>    
                        <input type="text" name="email" placeholder="Enter your email...">
                    </div>
                    <div class="field input">
                        <label for="">Password:</label>
                        <input type="password" name="password" placeholder="Password...">
                        <i class="fas fa-eye"></i>
                    </div>
                    <div class="field button">
                        <input type="submit" placeholder="Login to Chat">
                    </div>
            </form>
            <div class="link">Don't have an account? <a href="index.php">SignUp Now</a></div>
        </section>
    </div>
    <script src="javascript/pass-show-hide.js"></script>
    <script src="javascript/login.js"></script>

</body>
</html>