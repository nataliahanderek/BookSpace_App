<!DOCTYPE html>

<head>
    <link rel="stylesheet" type="text/css" href="public/css/style.css">
    <script type="text/javascript" src="./public/js/script.js" defer></script>
    <title>Registration | BookSpace</title>
</head>

<body>
    <div class="container">
        <div class="layer">
            <div class="logo">
                <img src="public/img/logo.svg">
            </div>
            <div class="login-container">
                <form class="login" action="registration" method="POST">
                    <div class="messages">
                        <?php if(isset($messages)) {
                            foreach ($messages as $message) {
                                echo $message;
                            }
                        }
                        ?>
                    </div>
                    <input name="name" type="text" placeholder="name">
                    <input name="surname" type="text" placeholder="surname">
                    <input name="email" type="text" placeholder="email">
                    <input name="user-login" type="text" placeholder="login">
                    <input name="password" type="password" placeholder="password">
                    <input name="repeat-password" type="password" placeholder="repeat password">
                    <button name="login-button">Sign up</button>
                </form>
            </div>
        </div>
    </div>
</body>