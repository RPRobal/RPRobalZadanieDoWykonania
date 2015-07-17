<?php
/**
 * Created by PhpStorm.
 * User: Robal
 * Date: 2015-07-13
 * Time: 22:04
 */

namespace My\FormRPBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class TaskType extends AbstractType
{

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name', 'text')
            ->add('surname', 'text')
            ->add('email', 'email')
            ->add('birth', 'date', array(
                'input' => 'datetime',
                'years' => range(1910, 2015),))
            ->add('save', 'submit', array('label' => 'Zapisz'))
        ;
    }
    /**
     * Returns the name of this type.
     *
     * @return string The name of this type
     */
    public function getName()
    {
        return 'task';
    }
}
