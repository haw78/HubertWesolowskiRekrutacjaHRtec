<?php


namespace HubertWesolowskiRekrutacjaHRtec\Dto;

/**
 * Class ConsoleParamsDto
 * @package HubertWesolowskiRekrutacjaHRtec\Dto
 */
class ConsoleParamsDto
{
    /** @var string */
    private $url;
    /** @var string */
    private $trybZapisu;
    /** @var string */
    private $formatDanych;
    /** @var string */
    private $filePath;
    /** @var string */
    private $serwisWWW;

    /**
     * @return string
     */
    public function getUrl(): string
    {
        return $this->url;
    }

    /**
     * @param string $url
     * @return ConsoleParamsDto
     */
    public function setUrl(string $url): ConsoleParamsDto
    {
        $this->url = $url;
        return $this;
    }

    /**
     * @return string
     */
    public function getTrybZapisu(): string
    {
        return $this->trybZapisu;
    }

    /**
     * @param string $trybZapisu
     * @return ConsoleParamsDto
     */
    public function setTrybZapisu(string $trybZapisu): ConsoleParamsDto
    {
        $this->trybZapisu = $trybZapisu;
        return $this;
    }

    /**
     * @return string
     */
    public function getFormatDanych(): string
    {
        return $this->formatDanych;
    }

    /**
     * @param string $formatDanych
     * @return ConsoleParamsDto
     */
    public function setFormatDanych(string $formatDanych): ConsoleParamsDto
    {
        $this->formatDanych = $formatDanych;
        return $this;
    }

    /**
     * @return string
     */
    public function getFilePath(): string
    {
        return $this->filePath;
    }

    /**
     * @param string $filePath
     * @return ConsoleParamsDto
     */
    public function setFilePath(string $filePath): ConsoleParamsDto
    {
        $this->filePath = $filePath;
        return $this;
    }

    /**
     * @return string
     */
    public function getSerwisWWW(): string
    {
        return $this->serwisWWW;
    }

    /**
     * @param string $serwisWWW
     * @return ConsoleParamsDto
     */
    public function setSerwisWWW(string $serwisWWW): ConsoleParamsDto
    {
        $this->serwisWWW = $serwisWWW;
        return $this;
    }


}