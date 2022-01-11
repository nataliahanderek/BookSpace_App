<!DOCTYPE html>

<head>
    <link rel="stylesheet" type="text/css" href="public/css/style.css">
    <link rel="stylesheet" type="text/css" href="public/css/bookfor.css">
    <link rel="stylesheet" type="text/css" href="public/css/books.css">
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
                    <a href="notification" class="header-button">Notifications</a>
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
                        My Bookpoints: 6
                    </div>
                    <div class="genres-list-class">
                        <label class="genres-list">art
                            <input type="checkbox" checked="checked">
                            <span class="checkmark"></span>
                        </label>
                        <label class="genres-list">biography
                            <input type="checkbox">
                            <span class="checkmark"></span>
                        </label> 
                        <label class="genres-list">business
                            <input type="checkbox">
                            <span class="checkmark"></span>
                        </label>
                        <label class="genres-list">classics
                            <input type="checkbox">
                            <span class="checkmark"></span>
                        </label>
                        <label class="genres-list">comics
                            <input type="checkbox" checked="checked">
                            <span class="checkmark"></span>
                        </label>
                        <label class="genres-list">cookbooks
                            <input type="checkbox">
                            <span class="checkmark"></span>
                        </label>
                        <label class="genres-list">fantasy
                            <input type="checkbox">
                            <span class="checkmark"></span>
                        </label>
                        <label class="genres-list">fiction
                            <input type="checkbox">
                            <span class="checkmark"></span>
                        </label>
                        <label class="genres-list">history
                            <input type="checkbox" checked="checked">
                            <span class="checkmark"></span>
                        </label>
                        <label class="genres-list">horror
                            <input type="checkbox">
                            <span class="checkmark"></span>
                        </label>
                        <label class="genres-list">music
                            <input type="checkbox">
                            <span class="checkmark"></span>
                        </label>
                        <label class="genres-list">nonfiction
                            <input type="checkbox">
                            <span class="checkmark"></span>
                        </label>
                        <label class="genres-list">poatry
                            <input type="checkbox" checked="checked">
                            <span class="checkmark"></span>
                        </label>
                        <label class="genres-list">psychology
                            <input type="checkbox">
                            <span class="checkmark"></span>
                        </label>
                        <label class="genres-list">romance
                            <input type="checkbox">
                            <span class="checkmark"></span>
                        </label>
                        <label class="genres-list">science
                            <input type="checkbox" checked="checked">
                            <span class="checkmark"></span>
                        </label>
                        <label class="genres-list">science fiction
                            <input type="checkbox">
                            <span class="checkmark"></span>
                        </label>
                        <label class="genres-list">self care
                            <input type="checkbox" checked="checked">
                            <span class="checkmark"></span>
                        </label>
                        <label class="genres-list">sports
                            <input type="checkbox">
                            <span class="checkmark"></span>
                        </label>
                        <label class="genres-list">thriller
                            <input type="checkbox">
                            <span class="checkmark"></span>
                        </label>
                        <label class="genres-list">travel
                            <input type="checkbox">
                            <span class="checkmark"></span>
                        </label>
                        <label class="genres-list">Young Adult
                            <input type="checkbox" checked="checked">
                            <span class="checkmark"></span>
                        </label>
                    </div>
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
                        <div id="book1">
                            <img src="public/img/uploads/thelittleprince.jpg">
                            <div>
                                <h2><a href="bookprofile">Title</a></h2>
                                <h3>Author</h3>
                            </div>
                            <div class="exchange">
                                <a href="#" class="exchange-button">EXCHANGE</a>
                            </div>
                        </div>
                        <div id="book2">
                            <img src="public/img/uploads/thelittleprince.jpg">
                            <div>
                                <h2>Title</h2>
                                <h3>Author</h3>
                            </div>
                            <div class="exchange">
                                <a href="#" class="exchange-button">EXCHANGE</a>
                            </div>
                        </div>
                        <div id="book3">
                            <img src="public/img/uploads/thelittleprince.jpg">
                            <div>
                                <h2>Title</h2>
                                <h3>Author</h3>
                            </div>
                            <div class="exchange">
                                <a href="#" class="exchange-button">EXCHANGE</a>
                            </div>
                        </div>
                        <div id="book4">
                            <img src="public/img/uploads/thelittleprince.jpg">
                            <div>
                                <h2>Title</h2>
                                <h3>Author</h3>
                            </div>
                            <div class="exchange">
                                <a href="#" class="exchange-button">EXCHANGE</a>
                            </div>
                        </div>
                        <div id="book5">
                            <img src="public/img/uploads/thelittleprince.jpg">
                            <div>
                                <h2>Title</h2>
                                <h3>Author</h3>
                            </div>
                            <div class="exchange">
                                <a href="#" class="exchange-button">EXCHANGE</a>
                            </div>
                        </div>
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