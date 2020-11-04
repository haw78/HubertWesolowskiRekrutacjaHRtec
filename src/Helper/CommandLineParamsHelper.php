<?php


namespace HubertWesolowskiRekrutacjaHRtec\Helper;


/**
 * Class CommandLineParamsHelper
 * @package HubertWesolowskiRekrutacjaHRtec\Helper
 */
class CommandLineParamsHelper
{
    const FORMAT_DANYCH_CSV = 'csv';
    const TRYB_ZAPISU_SIMPLE = 'simple';
    const TRYB_ZAPISU_EXTENDED = 'extended';

    /**
     * @param array $args
     * @return bool
     */
    public static function pokazHelpJesliPotrzeba(array $args)
    {
        if (!strcmp($args[1], '-h') || !strcmp($args[1], '--help')){
            echo "Program wymaga 3 parametrów.

Pierwszy:
csv:simple - tworzy plik CSV, dane zostaną nadpisane
csv:extended - tworzy plik CSV, dane zostaną dopisane na końcu

Drugi:
Poprawny url z którego będą pobrane dane

Trzeci:
Poprawna ścieżka do pliku w którym zostaną zapisane dane";
            return true;
        }

        return false;
    }
}