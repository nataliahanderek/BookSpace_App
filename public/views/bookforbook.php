<!DOCTYPE html>

<head>
    <link rel="stylesheet" type="text/css" href="public/css/style.css">
    <link rel="stylesheet" type="text/css" href="public/css/bookfor.css">
    <link rel="stylesheet" type="text/css" href="public/css/books.css">
    <script src="https://kit.fontawesome.com/6ee0d82bf7.js" crossorigin="anonymous"></script>
    <script type="text/javascript" src="./public/js/search.js" defer></script>
    <script type="text/javascript" src="./public/js/checkbox.js" defer></script>
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
                <img src="public/img/logo.svg">
                <div class="genres">
                    <div class="add-book-for-book">
                        <i class="fas fa-plus"></i>
                        <a href="allbooks" class="add-book-for-book-button">ADD BOOK FOR BOOK</a>
                    </div>
                    <div class="my-bookpoints">
                        My Bookpoints: 0
                    </div>
                    <?php include 'genresCheckbox.php'; ?>
                </div>
            </div>
            <div class="right-site">
                <main>
                    <header>
                        <div class="Book-for-book-header">
                            BOOK FOR BOOK
                        </div>
                    </header>
                    <section class="my-books">
                        <?php foreach ($bookforbook as $book): ?>
                            <div id="<?= $book->getId(); ?>">
                                <img src="public/img/uploads/<?= $book->getBookcover() ?>">
                                <div>
                                    <h3><a href="bookprofile/<?= $book->getId(); ?>"><?= $book->getAuthorSurname(); ?></a></h3>
                                    <div class="exchange">
                                        <a href="notifications" class="exchange-button">EXCHANGE</a>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </section>
                </main>
            </div>
        </div>
    </div>
</body>

<template id="book-template">
    <div id="">
        <img src="">
        <div>
            <h2><a href="bookprofile">title_eng</a></h2>
            <h3>author_surname</h3>
        </div>
    </div>
</template>