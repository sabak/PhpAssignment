<?php


class Journal extends Book
{
    private $issueDate;

    /**
     * @return mixed
     */
    public function getIssueDate()
    {
        return $this->issueDate;
    }

    /**
     * @param mixed $issueDate
     */
    public function setIssueDate($issueDate)
    {
        $this->issueDate = $issueDate;
    }

    /**
     * @return mixed
     */
    public function getEditorInChief()
    {
        return $this->editorInChief;
    }

    /**
     * @param mixed $editorInChief
     */
    public function setEditorInChief($editorInChief)
    {
        $this->editorInChief = $editorInChief;
    }
    private $editorInChief;

}
