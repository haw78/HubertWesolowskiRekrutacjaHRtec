<?php


namespace HubertWesolowskiRekrutacjaHRtec\Builder;

use HubertWesolowskiRekrutacjaHRtec\Dto\RSSAtomDto;

/**
 * Class RSSAtomBuilder
 * @package HubertWesolowskiRekrutacjaHRtec\Builder
 */
class RSSAtomBuilder
{

    /**
     * @param \SimpleXMLElement $xmlElement
     * @return RSSAtomDto
     * @throws \Exception
     */
    public function build(\SimpleXMLElement $xmlElement)
    {
        $dto = new RSSAtomDto();
        $ns = [
            'dc' => 'http://purl.org/dc/elements/1.1/'
        ];
        $dto->setCreator($xmlElement->children($ns["dc"])->creator);
        $dto->setTitle($xmlElement->title);
        $dto->setDescription(strip_tags($xmlElement->description));
        $dto->setLink($xmlElement->link);

        $polishDateFormatter = new \IntlDateFormatter(
            'pl_PL',
            \IntlDateFormatter::LONG,
            \IntlDateFormatter::NONE
        );

        $timestamp = strtotime($xmlElement->pubDate);
        $date = new \DateTime(date('Y-m-d', $timestamp));
        $dto->setPubDate($polishDateFormatter->format($date) . date( ' H:i:s', $timestamp));

        return $dto;
    }
}