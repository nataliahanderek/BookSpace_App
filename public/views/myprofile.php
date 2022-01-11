<!DOCTYPE html>

<head>
    <link rel="stylesheet" type="text/css" href="public/css/style.css">
    <link rel="stylesheet" type="text/css" href="public/css/bookfor.css">
    <link rel="stylesheet" type="text/css" href="public/css/bookpage.css">
    <link rel="stylesheet" type="text/css" href="public/css/profilepage.css">
    <script src="https://kit.fontawesome.com/6ee0d82bf7.js" crossorigin="anonymous"></script>
    <script type="text/javascript" src="./public/js/search.js" defer></script>
    <title>Book for book | BookSpace</title>
</head>

<body>
<?php include 'cookieSecurity.php'; ?>
    <div class="base-container">
        <div class="top-menu">
            <div class="search-bar">
                <input placeholder="Search...">
            </div>
            <ul>
                <li>
                    <i class="fas fa-book-open"></i>
                    <a href="mybookshelf" class="header-button">My Bookshelf</a>
                </li>
                <li>
                    <i class="fas fa-exchange-alt"></i>
                    <a href="bookforbook" class="header-button">Book for book</a>
                </li>
                <li>
                    <i class="fas fa-bell"></i>
                    <a href="notifications" class="header-button">Notifications</a>
                </li>
                <li>
                    <i class="fas fa-user-alt"></i>
                    <a href="myprofile" class="header-button">My profile</a>
                </li>
            </ul>
        </div>
        <div class="down-site">
            <div class="left-site">
                <section class="profile">
                    <div id="profilephoto">
                        <img src="public/img/uploads/profilephoto.jpg">
                        <div>
                            <h2>nickname</h2>
                            <h3>name</h3>
                        </div>
                    </div>
                </section>
                <div class="button-under">
                    <div class="my-bookpoints">
                        My Bookpoints: 6
                    </div>
                    <form class="log-out" id="logout" action="logOut" method="get">
                        <a class="log-out-button" onclick="logout()">Log out</a>
                    </form>
                </div>
            </div>
            <div class="right-site-book">
                <p>Recently added</p>
                <div class="recently-added-layer">
                    <section class="recently-added"> 
                        <div id="book1">
                            <img src="public/img/uploads/thelittleprince.jpg">
                        </div>
                        <div id="book2">
                            <img src="public/img/uploads/thelittleprince.jpg">
                        </div>
                        <div id="book3">
                            <img src="public/img/uploads/thelittleprince.jpg">
                        </div>
                        <div id="book4">
                            <img src="public/img/uploads/thelittleprince.jpg">
                        </div>
                        <div id="book5">
                            <img src="public/img/uploads/thelittleprince.jpg">
                        </div>
                    </section>
                </div>
                <p>My read books</p>
                <div class="my-read-books-layer">
                    <section class="my-read-books"> 
                        <div id="book1">
                            <img src="public/img/uploads/thelittleprince.jpg">
                        </div>
                        <div id="book2">
                            <img src="public/img/uploads/thelittleprince.jpg">
                        </div>
                        <div id="book3">
                            <img src="public/img/uploads/thelittleprince.jpg">
                        </div>
                    </section>                    
                </div>
                <p>My books for books</p>
                <div class="my-books-for-books-layer">
                    <section class="my-books-for-books"> 
                        <div id="book1">
                            <img src="public/img/uploads/thelittleprince.jpg">
                        </div>
                        <div id="book2">
                            <img src="public/img/uploads/thelittleprince.jpg">
                        </div>
                        <div id="book3">
                            <img src="public/img/uploads/thelittleprince.jpg">
                        </div>
                        <div id="book4">
                            <img src="public/img/uploads/thelittleprince.jpg">
                        </div>
                        <div id="book5">
                            <img src="public/img/uploads/thelittleprince.jpg">
                        </div>
                    </section>                    
                </div>
            </div>
        </div>
    </div>
</body>

