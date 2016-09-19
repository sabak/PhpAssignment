<?php


class Textbook extends Book
{
    private $subject;
    private $prerequisites;

    /**
     * @return mixed
     */
    public function getSubject()
    {
        return $this->subject;
    }

    /**
     * @param mixed $subject
     */
    public function setSubject($subject)
    {
        $this->subject = $subject;
    }

    /**
     * @return mixed
     */
    public function getPrerequisites()
    {
        return $this->prerequisites;
    }

    /**
     * @param mixed $prerequisites
     */
    public function setPrerequisites($prerequisites)
    {
        $this->prerequisites = $prerequisites;
    }

}