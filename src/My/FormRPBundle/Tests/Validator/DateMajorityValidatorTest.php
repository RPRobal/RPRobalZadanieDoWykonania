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
     * @test
     * @dataProvider getMajorityDatesValid
     * @param $date
     */
    public function testMajorityDateValid($date)
    {
        $this->validator->validate($date, new DateMajority());
        $this->assertNoViolation();
    }
<<<<<<< HEAD
=======

>>>>>>> origin/master
    public function getMajorityDatesValid()
    {
        return array(
            array(new \DateTime('1921-10-11')),
            array(new \DateTime('1931-10-11')),
            array(new \DateTime('1925-03-21')),
        );
    }
    /**
     * @test
     * @dataProvider getMajorityDatesInvalid
     * @param $date
     */
    public function testMajorityDateInvalid($date)
    {
        $constraint = new DateMajority;

        $this->validator->validate($date, $constraint);

        $this->buildViolation($constraint->message)
            ->setParameter('%string%', date_format($date, 'Y-m-d'))
            ->assertRaised();
    }
    public function getMajorityDatesInvalid()
    {
        return array(
            array(new \DateTime('2015-10-12')),
            array(new \DateTime('2001-10-11')),
            array(new \DateTime('1999-03-21')),
        );
    }
}
