<?php


namespace HubertWesolowskiRekrutacjaHRtec\test;


use HubertWesolowskiRekrutacjaHRtec\Builder\ConsoleParamsBuilder;
use HubertWesolowskiRekrutacjaHRtec\Dto\ConsoleParamsDto;
use PHPUnit\Framework\TestCase;

/**
 * Class ConsoleParamsBuilderTest
 * @package HubertWesolowskiRekrutacjaHRtec\test
 */
class ConsoleParamsBuilderTest extends TestCase
{

    /** @var string[]  */
    private $exampleCommandLineParams = ['src/console.php', 'csv:extended', 'http://news.nationalgeographic.com/rss/index.rss', 'c:\temp\asdf.csv'];

    public function testParamsBuilder()
    {
        $builder = new ConsoleParamsBuilder();
        $dto = $builder->buildFromArgv($this->exampleCommandLineParams);
        $this->assertInstanceOf(ConsoleParamsDto::class, $dto, 'Niepoprawny obiekt ConsoleParamsDto');

        $this->assertEquals($this->exampleCommandLineParams[3], $dto->getFilePath());

    }
}