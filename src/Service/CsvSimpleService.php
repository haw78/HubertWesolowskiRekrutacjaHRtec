<?php


namespace HubertWesolowskiRekrutacjaHRtec\Service;


/**
 * Class CsvSimpleService
 * @package HubertWesolowskiRekrutacjaHRtec\Service
 */
class CsvSimpleService extends CsvExtendedService
{

    /**
     * @param \Generator $dtoList
     * @param string $sciezkaDoPliku
     * @return mixed|void
     * @throws \Exception
     */
    public function save(\Generator $dtoList, $sciezkaDoPliku)
    {
        if (file_exists($sciezkaDoPliku)){
            unlink($sciezkaDoPliku);
        }
        parent::save($dtoList, $sciezkaDoPliku);
    }


}