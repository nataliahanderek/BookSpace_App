<!DOCTYPE html>

<head>
    <link rel="stylesheet" type="text/css" href="public/css/style.css">
    <title>Login to Your Virtual Bookshelf | BookSpace</title>
</head>

<body>
    <div class="container">
        <div class="layer">
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
                    <a href="registration" class="want-sign-up-button">New user? Sign up.</a>
                </form>
            </div>
        </div>
    </div>
</body>