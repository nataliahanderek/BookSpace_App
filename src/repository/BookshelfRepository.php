<?php

require_once 'Repository.php';
require_once __DIR__ . '/../models/Bookshelf.php';
require_once __DIR__ . '/../models/User.php';

class BookshelfRepository extends Repository
{
    public function getBookshelf(): array {
        $result = [];

        $stmt = $this->database->connect()->prepare('
            SELECT * FROM vall_books
                                            ');

        $stmt->execute();
        $bookshelf = $stmt->fetchAll(PDO::FETCH_ASSOC);

        foreach ($bookshelf as $book) {
            $result[] = new Bookshelf(
                $book['title_eng'],
                $book['author_name'],
                $book['author_surname'],
                $book['bookcover'],
                $book['book_id'],
                $book['description'],
                $book['release_date'],
                $book['pages'],
                $book['cover_type'],
                $book['genres'],
                $book['title_org'],
                $book['language']
            );
            
        }
        return $result;
    }

    public function getBookForBook() : array {
        $result = [];

        $stmt = $this->database->connect()->prepare('
            SELECT * FROM vtitle_author_bookcover_if_bookforbook
                WHERE if_bookforbook = \'1\'
                                            ');

        $stmt->execute();
        $bookForBook = $stmt->fetchAll(PDO::FETCH_ASSOC);

        foreach ($bookForBook as $book) {
            $result[] = new Bookshelf(
                $book['title_eng'],
                $book['author_name'],
                $book['author_surname'],
                $book['bookcover'],
                $book['book_id'],
                $book['description'],
                $book['release_date'],
                $book['pages'],
                $book['cover_type'],
                $book['genres'],
                $book['title_org'],
                $book['language']
            );
        }
        return $result;
    }

    public function getMyBookshelf($userLogin): array {
        $result = [];

        $stmt = $this->database->connect()->prepare('
            SELECT * FROM vbooks_authors_userdatabase
                WHERE login = :userLogin
                                            ');

        $stmt->bindParam(':userLogin', $userLogin, PDO::PARAM_STR);
        $stmt->execute();
        $myBookshelf = $stmt->fetchAll(PDO::FETCH_ASSOC);

        foreach ($myBookshelf as $book) {
            $result[] = new Bookshelf(
                $book['title_eng'],
                $book['author_name'],
                $book['author_surname'],
                $book['bookcover'],
                $book['book_id'],
                $book['description'],
                $book['release_date'],
                $book['pages'],
                $book['cover_type'],
                $book['genres'],
                $book['title_org'],
                $book['language']
            );
        }
        return $result;
    }

    public function getMyReadBooks($userLogin): array {
        $result = [];

        $stmt = $this->database->connect()->prepare('
            SELECT * FROM vbooks_authors_userdatabase_read
                WHERE login = :userLogin AND if_read = \'1\'
                                            ');

        $stmt->bindParam(':userLogin', $userLogin, PDO::PARAM_STR);
        $stmt->execute();
        $myReadBooks = $stmt->fetchAll(PDO::FETCH_ASSOC);

        foreach ($myReadBooks as $book) {
            $result[] = new Bookshelf(
                $book['title_eng'],
                $book['author_name'],
                $book['author_surname'],
                $book['bookcover'],
                $book['book_id'],
                $book['description'],
                $book['release_date'],
                $book['pages'],
                $book['cover_type'],
                $book['genres'],
                $book['title_org'],
                $book['language']
            );
        }
        return $result;
    }

    public function getCountMyReadBooks($userLogin): int {
        $stmt = $this->database->connect()->prepare('
            SELECT count(login) FROM vbooks_authors_userdatabase_read
                WHERE login = :userLogin AND if_read = \'1\';
        ');

        $stmt->bindParam(':userLogin', $userLogin, PDO::PARAM_INT);
        $stmt->execute();
        $countReadBooks = $stmt->fetch(PDO::FETCH_ASSOC);

        return $countReadBooks['count'];
    }

    public function getMyBookForBook($userLogin): array {
        $result = [];

        $stmt = $this->database->connect()->prepare('
            SELECT * FROM vbooks_authors_userdatabase_bookforbook
                WHERE login = :userLogin AND if_bookforbook = \'1\'
                                            ');

        $stmt->bindParam(':userLogin', $userLogin, PDO::PARAM_STR);
        $stmt->execute();
        $myReadBooks = $stmt->fetchAll(PDO::FETCH_ASSOC);

        foreach ($myReadBooks as $book) {
            $result[] = new Bookshelf(
                $book['title_eng'],
                $book['author_name'],
                $book['author_surname'],
                $book['bookcover'],
                $book['book_id'],
                $book['description'],
                $book['release_date'],
                $book['pages'],
                $book['cover_type'],
                $book['genres'],
                $book['title_org'],
                $book['language']
            );
        }
        return $result;
    }

    public function getBookBySearch(string $searchString) {

        $searchString = '%' . strtolower($searchString) . '%';

        $stmt = $this->database->connect()->prepare('
            SELECT * FROM vtitle_author_bookcover
                WHERE LOWER(title_eng) LIKE :search OR LOWER(title_org) LIKE :search OR LOWER(author_name) LIKE :search OR LOWER(author_surname) LIKE :search
        ');

        $stmt->bindParam(':search', $searchString, PDO::PARAM_STR);
        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getCountOfMyBooks($userLogin): int {
        $stmt = $this->database->connect()->prepare('
            SELECT count(login) FROM vbooks_authors_userdatabase
                WHERE login = :userLogin;
        ');

        $stmt->bindParam(':userLogin', $userLogin, PDO::PARAM_INT);
        $stmt->execute();
        $countBooks = $stmt->fetch(PDO::FETCH_ASSOC);

        return $countBooks['count'];
    }
}

/*
    public function getBookProfile(int $book_id): Bookshelf
    {

        $stmt = $this->database->connect()->prepare('
            SELECT * FROM vbook_features
                WHERE book_id = :book_id
                                            ');

        $stmt->bindParam(':book_id', $book_id, PDO::PARAM_INT);
        $stmt->execute();
        $bookProfile = $stmt->fetch(PDO::FETCH_ASSOC);

        $bookFeatures = new Bookshelf(
            $bookProfile['title_eng'],
            $bookProfile['author_name'],
            $bookProfile['author_surname'],
            $bookProfile['bookcover'],
            $bookProfile['book_id'],
            $bookProfile['description'],
            $bookProfile['release_date'],
            $bookProfile['pages'],
            $bookProfile['cover_type'],
            $bookProfile['genres'],
            $bookProfile['title_org'],
            $bookProfile['language']
        );
        return $bookFeatures;
    }*/

    /*public function getBookProfile(int $book_id) {
        $result = [];

        $stmt = $this->database->connect()->prepare('
            SELECT * FROM vbook_features
                WHERE book_id = :book_id
                                            ');

        $stmt->bindParam(':book_id', $book_id, PDO::PARAM_INT);
        $stmt->execute();
        $bookProfile = $stmt->fetchAll(PDO::FETCH_ASSOC);

        foreach ($bookProfile as $book) {
            $result[] = new Bookshelf(
                $book['title_eng'],
                $book['author_name'],
                $book['author_surname'],
                $book['bookcover'],
                $book['book_id'],
                $book['description'],
                $book['release_date'],
                $book['pages'],
                $book['cover_type'],
                $book['genres'],
                $book['title_org'],
                $book['language']
            );
        }
        return $result;
    }*/