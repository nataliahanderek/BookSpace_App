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
;
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
        

        /*$stmt = $this->database->connect()->prepare('
                                            SELECT * FROM books WHERE book_id = :id
                                            ');

        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        $stmt->execute();

        $bookshelf = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($bookshelf == false) {
            return null;
        }

        return new Bookshlef(
            $bookshelf['title_eng']
        );*/
    }
}