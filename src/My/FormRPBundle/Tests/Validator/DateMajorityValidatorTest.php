<?php
/**
 * Created by PhpStorm.
 * User: Robal
 * Date: 2015-07-13
 * Time: 22:14
 */

namespace My\FormRPBundle\Tests\Validator;

use My\FormRPBundle\Validator\Constraint\DateMajority;
use My\FormRPBundle\Validator\Constraint\DateMajorityValidator;
use Symfony\Component\Validator\Tests\Constraints\AbstractConstraintValidatorTest;

class DateMajorityValidatorTest extends AbstractConstraintValidatorTest
{

    protected function createValidator()
    {
        return new DateMajorityValidator();
    }
    /**
     * @dataProvider getMajorityDatesValid
     * @param $date
     */
    public function testMajorityDateValid($date)
    {
        $this->validator->validate($date, new DateMajority());
        $this->assertNoViolation();
    }

    public function getMajorityDateValid()
    {
        return array(
                array('1921-10-11'),
                array('1931-10-11'),
                array('1925-03-21'),
        );
    }

    /**
     * @dataProvider getMajorityDatesInvalid
     * @param $date
     */
    public function testMajorityDateInvalid($date)
    {
        $this->validator->validate($date, new DateMajority());
        $this->buildViolation('myMessage')
            ->setParameter('{{ value }}', '"'.$date.'"')
            ->assertRaised();
    }

    public function getMajorityDatesInvalid()
    {
        return array(
            array('2015-10-12'),
            array('2001-10-11'),
            array('1999-03-21'),
        );
    }
}
