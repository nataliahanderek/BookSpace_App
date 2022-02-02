<!DOCTYPE html>

<head>
    <link rel="stylesheet" type="text/css" href="/public/css/style.css">
    <link rel="stylesheet" type="text/css" href="/public/css/books.css">
    <link rel="stylesheet" type="text/css" href="/public/css/bookfor.css">
    <link rel="stylesheet" type="text/css" href="/public/css/bookpage.css">
    <script src="https://kit.fontawesome.com/6ee0d82bf7.js" crossorigin="anonymous"></script>
    <script type="text/javascript" src="./public/js/profilebook.js" defer></script>
    <title>Book profile | BookSpace</title>
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
                <section class="book">
                    <div id="book1">
                        <img src="/public/img/uploads/<?= $bookprofile->getBookcover() ?>">
                        <div>
                            <h2><?= $bookprofile->getTitleEng() ?></h2>
                            <h3><?= $bookprofile->getAuthorSurname() ?></h3>
                        </div>
                    </div>
                </section>
                <div class="button-under">
                    <div class="add-or-remove" id="<?= $bookprofile->getId(); ?>">
                        <!--<a href="" class="add-remove-button">Add to my bookshelf</a>-->
                        <button class="add-remove-button" type="button">Add book to my bookshelf</button>
                    </div>
                    <div class="add-book-for-book">
                        <a href="bookforbook" class="add-book-for-book-button">Add to book for book</a>
                    </div>
                    <div class="mark-as-read">
                        <a href="mybookshelf" class="mark-as-read-button">Mark as read</a>
                    </div>
                </div>
            </div>
            <div class="right-site-book">
                <header>
                    <div class="my-bookshelf-header">
                        DESCRIPTION
                    </div>
                </header>
                <div class="description-layer">
                    <div class="description"> 
                        <p><?= $bookprofile->getDescription() ?></p>
                    </div>
                </div>
                <div class="details-header">
                    <div class="details-layer">
                        <div class="details">
                            <ul>
                            <li>
                                <p>Cover: <?= $bookprofile->getCoverType() ?></p>
                            </li>
                            <li>
                                <p>Pages: <?= $bookprofile->getPages() ?></p>
                            </li>
                            <li>
                                <p>Published: <?= $bookprofile->getReleaseDate() ?></p>
                            </li>
                            <li>
                                <p>Original title: <?= $bookprofile->getTitleOrg() ?></p>
                            </li>
                            <li>
                                <p>Edition Language: <?= $bookprofile->getLanguage() ?></p>
                            </li>
                            <li>
                                <p>Genre: <?= $bookprofile->getGenres() ?></p>
                            </li>
                            </ul>
                        </div>
                    </div>
                    <header>
                        <div class="my-bookshelf-header">
                            DETAILS
                        </div>
                    </header>
                </div>
            </div>
        </div>
    </div>
</body>