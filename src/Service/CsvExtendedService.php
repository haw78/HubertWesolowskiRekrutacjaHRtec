<?php


namespace HubertWesolowskiRekrutacjaHRtec\Service;

use HubertWesolowskiRekrutacjaHRtec\Dto\RSSAtomDto;
use HubertWesolowskiRekrutacjaHRtec\Interfaces\OutputInterface;

class CsvExtendedService implements OutputInterface
{

    /**
     * @param \Generator $dtoList
     * @param string $sciezkaDoPliku
     * @return mixed|void
     * @throws \Exception
     */

    public function save(\Generator $dtoList, $sciezkaDoPliku)
    {
        $dto = $dtoList->current();
        if (!empty ($dto)) {
            $czyDodacNaglowek = false;
            if (!file_exists($sciezkaDoPliku)){
                $czyDodacNaglowek = true;
            }
            $hFile = fopen($sciezkaDoPliku, 'a');
            if (!$hFile){
                throw new \Exception('Błąd otwarcia pliku ' . $sciezkaDoPliku);
            }

            if ($czyDodacNaglowek){
                fputcsv($hFile, array_keys($dto->__toArray()));
            }

            fputcsv($hFile, $dto->__toArray());

            /** @var RSSAtomDto $dto */
            foreach ($dtoList as $dto) {
                fputcsv($hFile, $dto->__toArray());
            }
            fclose($hFile);
        }
    }

}