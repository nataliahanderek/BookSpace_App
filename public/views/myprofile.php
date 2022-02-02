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
                            <h2><?= $user->getLogin(); ?></h2>
                            <h3><?= $user->getName(); ?></h3>
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
                <header class="header-profile">
                    <div class="my-bookshelf-header">
                        RECENTLY ADDED
                    </div>
                </header>
                <div class="recently-added-layer">
                    <section class="recently-added">
                        <?php foreach ($mybookshelf as $book): ?>
                            <div id="book1">
                                <img src="public/img/uploads/<?= $book->getBookcover() ?>">
                            </div>
                        <?php endforeach; ?>
                    </section>
                </div>
                <header class="header-profile-second">
                    <div class="my-bookshelf-header">
                        MY READ BOOKS
                    </div>
                </header>
                <div class="my-read-books-layer">
                    <section class="my-read-books">
                        <?php foreach ($myreadbooks as $book): ?>
                            <div id="book1">
                                <img src="public/img/uploads/<?= $book->getBookcover() ?>">
                            </div>
                        <?php endforeach; ?>
                    </section>                    
                </div>
                <header class="header-profile-second">
                    <div class="my-bookshelf-header">
                        MY BOOKS FOR BOOKS
                    </div>
                </header>
                <div class="my-books-for-books-layer">
                    <section class="my-books-for-books">
                        <?php foreach ($mybookforbook as $book): ?>
                            <div id="book1">
                                <img src="public/img/uploads/<?= $book->getBookcover() ?>">
                            </div>
                        <?php endforeach; ?>
                    </section>                    
                </div>
            </div>
        </div>
    </div>
</body>

