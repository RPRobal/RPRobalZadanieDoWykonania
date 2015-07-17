<?php
/**
 * Created by PhpStorm.
 * User: Robal
 */
namespace My\FormRPBundle\Validator\Constraint;

use Symfony\Component\Validator\Constraint;
use Symfony\Component\Validator\ConstraintValidator;

class DateMajorityValidator extends ConstraintValidator
{
    public function validate($value, Constraint $constraint)
    {
        if ($value->diff(new \DateTime())->days<6574.35958) {
            $this->context->addViolation($constraint->message, array('%string%'=>date_format($value, 'Y-m-d')));
        }
    }
}
