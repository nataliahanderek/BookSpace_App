<!DOCTYPE html>

<head>
    <link rel="stylesheet" type="text/css" href="public/css/style.css">
    <title>Login to Your Virtual Bookshelf | BookSpace</title>
</head>

<body>
    <div class="container">
        <div class="layer">
        </div>         
        <div class="logo">
            <img src="public/img/logo.svg">
        </div>
        <div class="login-container">
            <form class="login" action="login" method="POST">
                <div class="messages">
                    <?php if(isset($messages)) {
                        foreach ($messages as $message) {
                            echo $message;
                        }
                    }
                    ?>
                </div>
                <input name="user-login" type="text" placeholder="login">
                <input name="password" type="password" placeholder="password">
                <button name="login-button" type="submit">Log in</button>
                <!-- <a type="submit" href="mybookshelf" class="login-button">Log in</a> -->
                <a href="registration" class="want-sign-up-button">Do you want to create new account? Sign up.</a>
            </form>
        </div>
    </div>
</body>