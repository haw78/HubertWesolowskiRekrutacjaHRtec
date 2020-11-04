<?php


namespace HubertWesolowskiRekrutacjaHRtec\test;


use HubertWesolowskiRekrutacjaHRtec\Dto\RSSAtomDto;
use HubertWesolowskiRekrutacjaHRtec\test\Doubles\StandardWWWServiceStub;
use PHPUnit\Framework\TestCase;

/**
 * Class StandardWWWServiceTest
 * @package HubertWesolowskiRekrutacjaHRtec\test
 */
class StandardWWWServiceTest extends TestCase
{

    public function testLoad()
    {
        $StandardWWWServiceStub = new StandardWWWServiceStub();
        $list = $StandardWWWServiceStub->load('');
        foreach ($list as $dto){
            $this->assertInstanceOf(RSSAtomDto::class, $dto, 'Niepoprawny obiekt RSSDto');
        }
    }
}