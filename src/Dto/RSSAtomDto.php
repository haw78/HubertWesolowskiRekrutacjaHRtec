<?php


namespace HubertWesolowskiRekrutacjaHRtec\Dto;


class RSSAtomDto
{
    /** @var string */
    private $title;
    /** @var string */
    private $description;
    /** @var string */
    private $link;
    /** @var string */
    private $pubDate;
    /** @var string */
    private $creator;

    /**
     * @return string
     */
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * @param string $title
     * @return RSSAtomDto
     */
    public function setTitle(string $title): RSSAtomDto
    {
        $this->title = $title;
        return $this;
    }

    /**
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }

    /**
     * @param string $description
     * @return RSSAtomDto
     */
    public function setDescription(string $description): RSSAtomDto
    {
        $this->description = $description;
        return $this;
    }

    /**
     * @return string
     */
    public function getLink(): string
    {
        return $this->link;
    }

    /**
     * @param string $link
     * @return RSSAtomDto
     */
    public function setLink(string $link): RSSAtomDto
    {
        $this->link = $link;
        return $this;
    }

    /**
     * @return string
     */
    public function getPubDate(): string
    {
        return $this->pubDate;
    }

    /**
     * @param string $pubDate
     * @return RSSAtomDto
     */
    public function setPubDate(string $pubDate): RSSAtomDto
    {
        $this->pubDate = $pubDate;
        return $this;
    }

    /**
     * @return string
     */
    public function getCreator(): string
    {
        return $this->creator;
    }

    /**
     * @param string $creator
     * @return RSSAtomDto
     */
    public function setCreator(string $creator): RSSAtomDto
    {
        $this->creator = $creator;
        return $this;
    }

    /**
     * @return array
     */
    public function __toArray()
    {
        return [
            'title' => $this->title,
            'description' => $this->description,
            'link' => $this->link,
            'pubDate' => $this->pubDate,
            'creator' => $this->creator,
        ];
    }

}