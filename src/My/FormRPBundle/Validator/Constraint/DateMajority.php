<?php
/**
 * Created by PhpStorm.
 * User: Robal
 * Date: 2015-07-12
 * Time: 22:52
 */

namespace My\FormRPBundle\Validator\Constraint;

use Symfony\Component\Validator\Constraint;

/**
 * @Annotation
 */
class DateMajority extends Constraint
{
    public $message='Ta data "%string%" oznacza ze nie masz 18 lat wiec soryyyy nie przejedziesz :D ';

    public function validatedBy()
    {
        return 'date_majority';
    }
}
