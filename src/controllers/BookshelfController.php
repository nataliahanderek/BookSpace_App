<?php

require_once 'AppController.php';
require_once __DIR__ .'/../models/Bookshelf.php';
require_once __DIR__.'/../repository/BookshelfRepository.php';

class BookshelfController extends AppController {

    private $bookshelfRepository;

    public function __construct()
    {
        $this->bookshelfRepository = new BookshelfRepository();
    }

    public function allbooks()
    {
        $bookshelf = $this->bookshelfRepository->getBookshelf();
        $this->render('allbooks', ['bookshelf' => $bookshelf]);
    }

    public function bookforbook()
    {
        $bookForBook = $this->bookshelfRepository->getBookForBook();
        $this->render('bookforbook', ['bookforbook' => $bookForBook]);
    }

    public function search() {
        $contentType = isset($_SERVER["CONTENT_TYPE"]) ? trim($_SERVER["CONTENT_TYPE"]) : '';

        if($contentType === "application/json") {
            $content = trim(file_get_contents("php://input"));
            $decoded = json_decode($content, true);

            header('Content-type: application/json');
            http_response_code(200);

            echo json_encode($this->bookshelfRepository->getBookBySearch($decoded['search']));
        }
    }
}