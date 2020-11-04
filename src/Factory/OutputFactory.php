<?php


namespace HubertWesolowskiRekrutacjaHRtec\Factory;

use HubertWesolowskiRekrutacjaHRtec\Helper\CommandLineParamsHelper;
use HubertWesolowskiRekrutacjaHRtec\Interfaces\WWWInterface;
use HubertWesolowskiRekrutacjaHRtec\Service\CsvExtendedService;
use HubertWesolowskiRekrutacjaHRtec\Service\CsvSimpleService;

/**
 * Class OutputFactory
 * @package HubertWesolowskiRekrutacjaHRtec\Factory
 */
class OutputFactory
{

    /**
     * @param string $formatDanych
     * @param string $trybZapisu
     * @return WWWInterface|null
     */
    public function createOutput($formatDanych, $trybZapisu)
    {
        $input = null;
        switch ($formatDanych) {
            case 'csv':
            default:
                if (!strcmp($trybZapisu, CommandLineParamsHelper::TRYB_ZAPISU_SIMPLE)) {
                    $input = new CsvSimpleService();
                } elseif (!strcmp($trybZapisu, CommandLineParamsHelper::TRYB_ZAPISU_EXTENDED)) {
                    $input = new CsvExtendedService();
                }
                break;
        }

        return $input;
    }
}