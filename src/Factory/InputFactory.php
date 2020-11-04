<?php


namespace HubertWesolowskiRekrutacjaHRtec\Factory;

use HubertWesolowskiRekrutacjaHRtec\Interfaces\WWWInterface;
use HubertWesolowskiRekrutacjaHRtec\Service\StandardWWWService;

/**
 * Class InputFactory
 * @package HubertWesolowskiRekrutacjaHRtec\Factory
 */
class InputFactory
{
    /**
     * @param string $serwisWWW
     * @return WWWInterface|null
     */
    public function createInput($serwisWWW)
    {
        $input = null;
        switch ($serwisWWW){
            case 'nationalgeographic':
                $input = new StandardWWWService();
            break;

            default:
                $input = new StandardWWWService();
            break;
        }

        return $input;
    }

}