<?php

class Bookshelf {
    private $title_eng;
    private $author_name;
    private $author_surname;
    private $bookcover;

    public function __construct($title_eng, $author_name, $author_surname, $bookcover)
    {
        $this->title_eng = $title_eng;
        $this->author_name = $author_name;
        $this->author_surname = $author_surname;
        $this->bookcover = $bookcover;
    }

    public function getTitleEng()
    {
        return $this->title_eng;
    }

    public function setTitleEng($title_eng)
    {
        $this->title_eng = $title_eng;
    }

    public function getAuthorName()
    {
        return $this->author_name;
    }

    public function setAuthorName($author_name)
    {
        $this->author_name = $author_name;
    }

    public function getAuthorSurname()
    {
        return $this->author_surname;
    }

    public function setAuthorSurname($author_surname)
    {
        $this->author_name = $author_surname;
    }

    public function getBookcover()
    {
        return $this->bookcover;
    }

    public function setBookcover($bookcover)
    {
        $this->bookcover = $bookcover;
    }
}