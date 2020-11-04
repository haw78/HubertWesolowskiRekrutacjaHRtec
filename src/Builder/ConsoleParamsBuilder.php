<?php


namespace HubertWesolowskiRekrutacjaHRtec\Builder;

use HubertWesolowskiRekrutacjaHRtec\Dto\ConsoleParamsDto;

/**
 * Class ConsoleParamsBuilder
 * @package HubertWesolowskiRekrutacjaHRtec\Builder
 */
class ConsoleParamsBuilder
{

    /**
     * @param array $argvData
     * @return ConsoleParamsDto
     */
    public function buildFromArgv(array $argvData)
    {
        $dto = new ConsoleParamsDto();

        $url = $argvData[2];
        $trybFormat = explode(':', $argvData[1]);

        $dto->setTrybZapisu($trybFormat[1]);
        $dto->setFormatDanych($trybFormat[0]);
        $dto->setUrl($url);
        $dto->setFilePath($argvData[3]);
        $dto->setSerwisWWW($this->rozpoznajSerwis($url));
        return $dto;
    }

    /**
     * @param $url
     * @return string
     */
    private function rozpoznajSerwis($url)
    {
        if (stripos($url, 'nationalgeographic.com') !== false){
            return 'nationalgeographic';
        }
        return '';
    }

}