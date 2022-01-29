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
                $book['bookcover']
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
                $book['bookcover']
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
                $book['bookcover']
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
                $book['bookcover']
            );
        }

        return $result;
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
                $book['bookcover']
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
}