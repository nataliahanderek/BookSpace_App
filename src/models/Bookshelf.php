<?php

class Bookshelf {
    private $title_eng;
    private $author_name;
    private $author_surname;
    private $bookcover;
    private $book_id;
    private $description;
    private $release_date;
    private $pages;
    private $cover_type;
    private $genres;
    private $title_org;
    private $language;


    public function __construct($title_eng, $author_name, $author_surname, $bookcover, $book_id, $description, $release_date, $pages, $cover_type, $genres, $title_org, $language)
    {
        $this->title_eng = $title_eng;
        $this->author_name = $author_name;
        $this->author_surname = $author_surname;
        $this->bookcover = $bookcover;
        $this->book_id = $book_id;
        $this->description = $description;
        $this->release_date = $release_date;
        $this->pages = $pages;
        $this->cover_type = $cover_type;
        $this->genres = $genres;
        $this->title_org = $title_org;
        $this->language = $language;
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

    public function getId()
    {
        return $this->book_id;
    }

    public function setId($book_id): void
    {
        $this->book_id = $book_id;
    }

    public function getBookId()
    {
        return $this->book_id;
    }

    public function setBookId($book_id): void
    {
        $this->book_id = $book_id;
    }

    public function getDescription()
    {
        return $this->description;
    }

    public function setDescription($description): void
    {
        $this->description = $description;
    }

    public function getReleaseDate()
    {
        return $this->release_date;
    }

    public function setReleaseDate($release_date): void
    {
        $this->release_date = $release_date;
    }

    public function getPages()
    {
        return $this->pages;
    }

    public function setPages($pages): void
    {
        $this->pages = $pages;
    }

    public function getCoverType()
    {
        return $this->cover_type;
    }

    public function setCoverType($cover_type): void
    {
        $this->cover_type = $cover_type;
    }

    public function getGenres()
    {
        return $this->genres;
    }

    public function setGenres($genres): void
    {
        $this->genres = $genres;
    }

    public function getTitleOrg()
    {
        return $this->title_org;
    }

    public function setTitleOrg($title_org): void
    {
        $this->title_org = $title_org;
    }

    public function getLanguage()
    {
        return $this->language;
    }

    public function setLanguage($language): void
    {
        $this->language = $language;
    }


}