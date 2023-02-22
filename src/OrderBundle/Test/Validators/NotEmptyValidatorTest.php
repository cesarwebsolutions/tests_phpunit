<?php

namespace OrderBundle\Validators\Test;

use OrderBundle\Validators\NotEmptyValidator;
use PHPUnit\Framework\TestCase;

class NotEmptyValidatorTest extends TestCase
{
    /**
     * @dataProvider valueProvider
     */
    public function testIsValid($value, $expectedResult)
    {
        $notEmptyValidator = new NotEmptyValidator($value);

        $isValid = $notEmptyValidator->isValid();

        $this->assertEquals($expectedResult, $isValid);
    }

    public function valueProvider()
    {
        return [
            'shouldBeValidWhenValueIsNotEmpty' => ['value' => 'foo', 'expectedResult' => true],
            'shouldNotBeValidWhenValueIsEmpty' => ['value' => '', 'expectedResult' => false]
        ];
    }

    // Raiz

    // public function testShouldNotBeValidWhenValueIsEmpty(){
    //     $emptyValue = "";
    //     $notEmptyValidator = new NotEmptyValidator($emptyValue);

    //     $isValid = $notEmptyValidator->isValid();
    //     $this->assertFalse($isValid);
    // }

    // public function testShouldBeValidWhenValueIsNotEmpty()
    // {
    //     $emptyValue = "foo";
    //     $notEmptyValidator = new NotEmptyValidator($emptyValue);

    //     $isValid = $notEmptyValidator->isValid();
    //     $this->assertTrue($isValid);
    // }
}