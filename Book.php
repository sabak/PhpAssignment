<?php

/**
 * Created by PhpStorm.
 * User: saba
 * Date: 9/19/16
 * Time: 3:10 PM
 */
class Book
{
    private $name;
    private $author;
    private $language;
    private $publishDate;
    private $numberOfPages;
    private $publisher;
    private $editor;
    private $publishCountry;

    /**
     * Book constructor.
     * @param $name
     * @param $author
     * @param $language
     * @param $publishDate
     * @param $numberOfPages
     * @param $publisher
     * @param $editor
     * @param $publishCountry
     */
    public function __construct($name, $author, $language, $publishDate, $numberOfPages, $publisher, $editor, $publishCountry)
    {
        $this->name = $name;
        $this->author = $author;
        $this->language = $language;
        $this->publishDate = $publishDate;
        $this->numberOfPages = $numberOfPages;
        $this->publisher = $publisher;
        $this->editor = $editor;
        $this->publishCountry = $publishCountry;
    }


    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getAuthor()
    {
        return $this->author;
    }

    /**
     * @param mixed $author
     */
    public function setAuthor($author)
    {
        $this->author = $author;
    }

    /**
     * @return mixed
     */
    public function getLanguage()
    {
        return $this->language;
    }

    /**
     * @param mixed $language
     */
    public function setLanguage($language)
    {
        $this->language = $language;
    }

    /**
     * @return mixed
     */
    public function getPublishDate()
    {
        return $this->publishDate;
    }

    /**
     * @param mixed $publishDate
     */
    public function setPublishDate($publishDate)
    {
        $this->publishDate = $publishDate;
    }

    /**
     * @return mixed
     */
    public function getNumberOfPages()
    {
        return $this->numberOfPages;
    }

    /**
     * @param mixed $numberOfPages
     */
    public function setNumberOfPages($numberOfPages)
    {
        $this->numberOfPages = $numberOfPages;
    }

    /**
     * @return mixed
     */
    public function getPublisher()
    {
        return $this->publisher;
    }

    /**
     * @param mixed $publisher
     */
    public function setPublisher($publisher)
    {
        $this->publisher = $publisher;
    }

    /**
     * @return mixed
     */
    public function getEditor()
    {
        return $this->editor;
    }

    /**
     * @param mixed $editor
     */
    public function setEditor($editor)
    {
        $this->editor = $editor;
    }

    /**
     * @return mixed
     */
    public function getPublishCountry()
    {
        return $this->publishCountry;
    }

    /**
     * @param mixed $publishCountry
     */
    public function setPublishCountry($publishCountry)
    {
        $this->publishCountry = $publishCountry;
    }


}

