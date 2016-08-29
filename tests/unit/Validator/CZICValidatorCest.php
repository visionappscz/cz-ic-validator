<?php

namespace unit\Validator;

use CZICValidator\Validator\CZICValidator;

class CZICValidatorCest
{
    /**
     * @param \UnitTester $I
     */
    public function testValidIC(\UnitTester $I)
    {
        $validator = new CZICValidator();
        $I->assertTrue($validator->validate('04508424'));
        $I->assertTrue($validator->validate('25596641'));
    }

    /**
     * @param \UnitTester $I
     */
    public function testInvalidIC(\UnitTester $I)
    {
        $validator = new CZICValidator();
        $I->assertFalse($validator->validate('12345678'));
    }

    /**
     * @param \UnitTester $I
     */
    public function testFormatIc(\UnitTester $I)
    {
        $validator = new CZICValidator();
        $I->assertFalse($validator->validate('ABCDEFGH'));
        $I->assertFalse($validator->validate('.'));
    }
}
