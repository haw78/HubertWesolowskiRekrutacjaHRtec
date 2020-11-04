<?php

require __DIR__.'/../vendor/autoload.php';

use HubertWesolowskiRekrutacjaHRtec\Builder\ConsoleParamsBuilder;
use HubertWesolowskiRekrutacjaHRtec\Validator\ConsoleParamsValidator;
use HubertWesolowskiRekrutacjaHRtec\Helper\CommandLineParamsHelper;
use HubertWesolowskiRekrutacjaHRtec\Factory\InputFactory;
use HubertWesolowskiRekrutacjaHRtec\Factory\OutputFactory;


try {

    $consoleParamsValidator = new ConsoleParamsValidator();
    $errors = $consoleParamsValidator->validate($argv);
    if (!empty ($errors)) {
        print_r(implode("\n", $errors));
        die();
    }
    if (CommandLineParamsHelper::pokazHelpJesliPotrzeba($argv)) {
        die();
    }

    $dtoParamsBuilder = new ConsoleParamsBuilder();
    $dtoParams = $dtoParamsBuilder->buildFromArgv($argv);


    $inputFactory = new InputFactory();
    $inputService = $inputFactory->createInput($dtoParams->getSerwisWWW());

    $listaRSSDto = $inputService->load($dtoParams->getUrl());

    $outputFactory = new OutputFactory();
    $outpuService = $outputFactory->createOutput($dtoParams->getFormatDanych(), $dtoParams->getTrybZapisu());

    $outpuService->save($listaRSSDto, $dtoParams->getFilePath());

}catch (Exception $exception){
    echo 'Exception: ' . $exception->getMessage();
}



