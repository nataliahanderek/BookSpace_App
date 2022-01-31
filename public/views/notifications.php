<!DOCTYPE html>

<head>
    <link rel="stylesheet" type="text/css" href="public/css/style.css">
    <link rel="stylesheet" type="text/css" href="public/css/books.css">
    <link rel="stylesheet" type="text/css" href="public/css/bookfor.css">
    <script src="https://kit.fontawesome.com/6ee0d82bf7.js" crossorigin="anonymous"></script>
    <script type="text/javascript" src="./public/js/search.js" defer></script>
    <script type="text/javascript" src="./public/js/checkbox.js" defer></script>
    <!--<script type="text/javascript" src="./public/js/loadBookProfile.js" defer></script>-->
    <title>All books | BookSpace</title>
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
        <div class="notifications-site">
            <main>
                <header>
                    <div class="my-bookshelf-header">
                        NOTIFICATIONS
                    </div>
                </header>
            </main>
        </div>
    </div>
</div>
</body>
