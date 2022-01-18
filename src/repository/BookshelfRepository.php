<?php

require_once 'Repository.php';
require_once __DIR__ . '/../models/Bookshelf.php';

class BookshelfRepository extends Repository
{
    public function getBookshelf(): array {

        $result = [];

        $stmt = $this->database->connect()->prepare('
            select b.title_eng, au.author_name, au.author_surname, bf.bookcover
                from (((books b
                    join books_features bf on (b.book_id = bf.book_id))
                    join rel_features_authors rel on (b.book_id = rel.book_id))
                    join authors au on (au.author_id = rel.author_id))
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
            select b.title_eng, au.author_name, au.author_surname, bf.bookcover, ud.if_bookforbook
                from ((((books b
                    join users_database ud on (ud.book_id = b.book_id))
                    join books_features bf on (b.book_id = bf.book_id))
                    join rel_features_authors rel on (b.book_id = rel.book_id))
                    join authors au on (au.author_id = rel.author_id))
                WHERE ud.if_bookforbook = \'1\'
                                            ');

        $stmt->execute();
        $bookForBook = $stmt->fetchAll(PDO::FETCH_ASSOC);

        foreach ($bookForBook as $book) {
            $result[] = new Bookshelf(
                $book['title_eng'],
                $book['author_name'],
                $book['author_surname'],
                $book['bookcover'],
                $book['if_bookforbook']
            );
        }

        return $result;
    }

    public function getBookBySearch(string $searchString) {

        $searchString = '%' . strtolower($searchString) . '%';

        $stmt = $this->database->connect()->prepare('
            select b.title_eng, au.author_name, au.author_surname, bf.bookcover
                from (((books b
                    join books_features bf on (b.book_id = bf.book_id))
                    join rel_features_authors rel on (b.book_id = rel.book_id))
                    join authors au on (au.author_id = rel.author_id))
                WHERE LOWER(b.title_eng) LIKE :search OR LOWER(b.title_org) LIKE :search OR LOWER(au.author_name) LIKE :search OR LOWER(au.author_surname) LIKE :search
        ');

        $stmt->bindParam(':search', $searchString, PDO::PARAM_STR);
        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}