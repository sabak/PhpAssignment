<?php


class DictionaryBook extends Book
{
    private $dictionaryTopic;
    private $volume;
    private $totalVolumes;

    /**
     * @return mixed
     */
    public function getDictionaryTopic()
    {
        return $this->dictionaryTopic;
    }

    /**
     * @param mixed $dictionaryTopic
     */
    public function setDictionaryTopic($dictionaryTopic)
    {
        $this->dictionaryTopic = $dictionaryTopic;
    }

    /**
     * @return mixed
     */
    public function getVolume()
    {
        return $this->volume;
    }

    /**
     * @param mixed $volume
     */
    public function setVolume($volume)
    {
        $this->volume = $volume;
    }

    /**
     * @return mixed
     */
    public function getTotalVolumes()
    {
        return $this->totalVolumes;
    }

    /**
     * @param mixed $totalVolumes
     */
    public function setTotalVolumes($totalVolumes)
    {
        $this->totalVolumes = $totalVolumes;
    }

}