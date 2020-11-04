<?php


namespace HubertWesolowskiRekrutacjaHRtec\Validator;

use HubertWesolowskiRekrutacjaHRtec\Helper\CommandLineParamsHelper;

/**
 * Class ConsoleParamsValidator
 * @package HubertWesolowskiRekrutacjaHRtec\Validator
 */
class ConsoleParamsValidator
{

    const HELP_ERROR_MESSAGE = 'Niepoprawna lista parametrów. Użyj --help lub -h';
    /** @var array  */
    private static $dozwoloneFormatyDanych = [CommandLineParamsHelper::FORMAT_DANYCH_CSV];
    /** @var array  */
    private static $dozwoloneTrybyZapisu = [CommandLineParamsHelper::TRYB_ZAPISU_SIMPLE, CommandLineParamsHelper::TRYB_ZAPISU_EXTENDED];

    /**
     * @param array $argv
     * @return array
     */
    public function validate(array $argv)
    {
        $errors = [];

        if (count($argv) == 2){
            $error = $this->validateHelpParams($argv[1]);
            if (!empty ($error)){
                $errors[] = $error;
            }
        }
        elseif (count($argv) == 4){
            $error = $this->validateFirstParam($argv[1]);
            if (!empty ($error)){
                $errors[] = $error;
            }
            $error = $this->validateSecondParam($argv[2]);
            if (!empty ($error)){
                $errors[] = $error;
            }
            $error = $this->validateThirdParam($argv[3]);
            if (!empty ($error)){
                $errors[] = $error;
            }
        }
        else{
            $errors[] = self::HELP_ERROR_MESSAGE;
        }

        return array_unique($errors);
    }

    /**
     * @param string $param
     * @return string
     */
    private function validateFirstParam($param)
    {
        $splitParam = explode(':', $param);
        if (count($splitParam) != 2){
            return self::HELP_ERROR_MESSAGE;
        }

        if (!in_array($splitParam[0], self::$dozwoloneFormatyDanych)){
            return self::HELP_ERROR_MESSAGE;
        }

        if (!in_array($splitParam[1], self::$dozwoloneTrybyZapisu)){
            return self::HELP_ERROR_MESSAGE;
        }
    }

    /**
     * @param string $param
     * @return string
     */
    private function validateSecondParam($param)
    {
        if (!filter_var($param, FILTER_VALIDATE_URL)) {
            return self::HELP_ERROR_MESSAGE;
        }
    }

    /**
     * @param string $param
     * @return string
     */
    private function validateThirdParam($param)
    {
        if (empty ($param)){
            return self::HELP_ERROR_MESSAGE;
        }
    }

    /**
     * @param array $params
     * @return string
     */
    private function validateNumberParams(array $params)
    {
        if (count($params) != 2 && count($params) != 4){
            return self::HELP_ERROR_MESSAGE;
        }
    }

    /**
     * @param string $param
     * @return string
     */
    private function validateHelpParams($param)
    {
        if (strcmp($param, '-h') && strcmp($param, '--help')){
            return self::HELP_ERROR_MESSAGE;
        }
    }

}