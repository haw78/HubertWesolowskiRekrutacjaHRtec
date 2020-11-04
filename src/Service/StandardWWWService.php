<?php


namespace HubertWesolowskiRekrutacjaHRtec\Service;

use HubertWesolowskiRekrutacjaHRtec\Builder\RSSAtomBuilder;
use HubertWesolowskiRekrutacjaHRtec\Interfaces\WWWInterface;

/**
 * Class StandardWWWService
 * @package HubertWesolowskiRekrutacjaHRtec\Service
 */
class StandardWWWService implements WWWInterface
{

    /**
     * @param string $url
     * @return \Generator|mixed
     * @throws \Exception
     */
    public function load($url)
    {
        $rssBuilder = new RSSAtomBuilder();
        $rssXml = $this->grabRssData($url);
        $xml = simplexml_load_string($rssXml);
        foreach ($xml->channel->item as $singleItem){
            yield $rssBuilder->build($singleItem);
        }
    }

    /**
     * @param string $url
     * @return string
     */
    protected function grabRssData($url)
    {
        $rssXml = file_get_contents($url);

        return $rssXml;
    }

}