<!DOCTYPE html>

<head>
    <link rel="stylesheet" type="text/css" href="public/css/style.css">
    <link rel="stylesheet" type="text/css" href="public/css/books.css">
    <link rel="stylesheet" type="text/css" href="public/css/bookfor.css">
    <link rel="stylesheet" type="text/css" href="public/css/bookpage.css">
    <script src="https://kit.fontawesome.com/6ee0d82bf7.js" crossorigin="anonymous"></script>
    <!--<script type="text/javascript" src="./public/js/loadBookProfile.js" defer></script>-->
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
                        <img src="public/img/uploads/thelittleprince.jpg">
                        <div>
                            <h2>The Little Prince</h2>
                            <h3>de Saint-Exupery</h3>
                        </div>
                    </div>
                </section>
                <div class="button-under">
                    <div class="add-or-remove">
                        <a href="addorremove" class="add-remove-button">Add to/remove from my bookshelf</a>
                    </div>
                    <div class="add-book-for-book">
                        <a href="addbookforbook" class="add-book-for-book-button">Add to book for book</a>
                    </div>
                    <div class="mark-as-read">
                        <a href="markasread" class="mark-as-read-button">Mark as read</a>
                    </div>
                </div>
            </div>
            <div class="right-site-book">
                <div class="description-layer">
                    <div class="description"> 
                        <p>Description here</p>
                    </div>
                </div>
                <div class="details-layer">
                    <div class="details"> 
                        <ul>
                            <li>
                                <p>Cover: Paperback</p>
                            </li>
                            <li>
                                <p>Pages: 112</p>
                            </li>
                            <li>
                                <p>Published: 6 April 1943</p>
                            </li>
                            <li>
                                <p>Original title: La Petit Prince</p>
                            </li>
                            <li>
                                <p>Edition Language: English</p>
                            </li>
                            <li>
                                <p>Genre: Classics</p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>