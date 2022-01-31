<?php

require_once 'AppController.php';
require_once __DIR__ .'/../models/Bookshelf.php';
require_once __DIR__.'/../repository/BookshelfRepository.php';
require_once __DIR__.'/../repository/UserRepository.php';

class BookshelfController extends AppController {

    private $bookshelfRepository;
    private $userRepository;

    public function __construct()
    {
        $this->bookshelfRepository = new BookshelfRepository();
        $this->userRepository = new UserRepository();
    }

    public function allbooks()
    {
        if (isset($_COOKIE['Cookie'])) {
            $user = $this->userRepository->getUser($_COOKIE['Cookie']);
            $userLogin = $user->getLogin();
            $bookshelf = $this->bookshelfRepository->getBookshelf();
            $countBooks = $this->bookshelfRepository->getCountOfMyBooks($userLogin);
            $countReadBooks = $this->bookshelfRepository->getCountMyReadBooks($userLogin);
            $this->render('allbooks', ['bookshelf' => $bookshelf, 'countbooks' => $countBooks, 'countreadbooks' => $countReadBooks]);
        } else {
            $url = "http://$_SERVER[HTTP_HOST]";
            header("Location: {$url}/login");
        }
    }

    public function bookforbook()
    {
        $bookForBook = $this->bookshelfRepository->getBookForBook();
        $this->render('bookforbook', ['bookforbook' => $bookForBook]);
    }

    public function mybookshelf() {
        if (isset($_COOKIE['Cookie'])) {
            $user = $this->userRepository->getUser($_COOKIE['Cookie']);
            $userLogin = $user->getLogin();
            $myBookshelf = $this->bookshelfRepository->getMyBookshelf($userLogin);
            $countBooks = $this->bookshelfRepository->getCountOfMyBooks($userLogin);
            $countReadBooks = $this->bookshelfRepository->getCountMyReadBooks($userLogin);
            $this->render('mybookshelf', ['mybookshelf' => $myBookshelf, 'user' => $user, 'countbooks' => $countBooks, 'countreadbooks' => $countReadBooks]);
        } else {
            $url = "http://$_SERVER[HTTP_HOST]";
            header("Location: {$url}/login");
        }
    }

    public function myprofile()
    {
        if (isset($_COOKIE['Cookie'])) {
            $user = $this->userRepository->getUser($_COOKIE['Cookie']);
            $userLogin = $user->getLogin();
            $myBookshelf = $this->bookshelfRepository->getMyBookshelf($userLogin);
            $myReadBooks = $this->bookshelfRepository->getMyReadBooks($userLogin);
            $myBookForBook = $this->bookshelfRepository->getMyBookForBook($userLogin);
            $this->render('myprofile', ['mybookshelf' => $myBookshelf, 'user' => $user, 'myreadbooks' => $myReadBooks, 'mybookforbook' => $myBookForBook]);
        } else {
            $url = "http://$_SERVER[HTTP_HOST]";
            header("Location: {$url}/login");
        }
    }

    /*public function bookprofile(int $book_id) {
        $bookProfile = $this->bookshelfRepository->getBookProfile($book_id);
        $this->render('bookprofile', ['bookprofile' => $bookProfile]);
    }*/

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