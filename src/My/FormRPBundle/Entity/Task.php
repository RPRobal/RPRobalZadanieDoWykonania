<?php

namespace My\FormRPBundle\Entity;

use Symfony\Component\Validator\Constraints as Assert;
use My\FormRPBundle\Validator\Constraint as AcmeAssert;

class Task
{
    /**
    * @Assert\NotBlank()
    */
    protected $name;
    /**
    * @Assert\NotBlank()
    */
    protected $surname;
    /**
    * @Assert\NotBlank()
     * @Assert\Email()
    */
    protected $email;
    /**
    * @Assert\NotBlank()
     * @AcmeAssert\DateMajority()
     * @Assert\DateTime()
    */
    protected $birth;

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name=$name;
    }
    
    public function getSurname()
    {
        return $this->surname;
    }
    
    public function setSurname($surname)
    {
        $this->surname=$surname;
    }
    
    public function getEmail()
    {
        return $this->email;
    }
    
    public function setEmail($email)
    {
        $this->email=$email;
    }
    
    public function getBirth()
    {
        return $this->birth;
    }

    public function setBirth(\DateTime $birth)
    {
        $this->birth=$birth;
    }
}
