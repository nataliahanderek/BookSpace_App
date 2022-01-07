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
}