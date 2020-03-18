<?php

namespace tests\Unit;

use PHPUnit\Framework\TestCase;

require 'tests/Unit/CsvFileIterator.php';

class ExampleTest extends TestCase
{
    public function testStub()
    {
        // Создать заглушку для класса SomeClass.
        $stub = $this->createMock(CsvFileIterator::class);

        // Настроить заглушку.
        $stub->method('valid')
            ->will($this->throwException(new \Exception));

        // Вызов $stub->doSomething() выбрасывает исключение класса Exception
        $this->expectException(\Exception::class);
        $stub->valid();
    }
}
