<?php

namespace HubertWesolowskiRekrutacjaHRtec\Interfaces;

/**
 * Interface WWWInterface
 * @package HubertWesolowskiRekrutacjaHRtec\Interfaces
 */
interface WWWInterface
{
    /**
     * @param $url
     * @return mixed
     */
    public function load($url);

}