<?php


namespace HubertWesolowskiRekrutacjaHRtec\Interfaces;

/**
 * Interface OutputInterface
 * @package HubertWesolowskiRekrutacjaHRtec\Interfaces
 */
interface OutputInterface
{
    /**
     * @param \Generator $dtoList
     * @param string $sciezkaDoPliku
     * @return mixed
     */
    public function save(\Generator $dtoList, $sciezkaDoPliku);

}