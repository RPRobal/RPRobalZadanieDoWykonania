<?php

namespace My\FormRPBundle\Entity;

use Symfony\Component\Validator\Constraints as Assert;
use My\FormRPBundle\Validator\Constraint as AcmeAssert;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="Task")
 */
class Task
{
    /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;
    /**
    * @Assert\NotBlank()
     * @ORM\Column(type="string", length=30)
    */
    protected $name;
    /**
    * @Assert\NotBlank()
     * @ORM\Column(type="string", length=30)
    */
    protected $surname;
    /**
    * @Assert\NotBlank()
     * @Assert\Email()
     * @ORM\Column(type="string", length=35)
    */
    protected $email;
    /**
    * @Assert\NotBlank()
     * @AcmeAssert\DateMajority()
     * @Assert\DateTime()
     * @ORM\Column(type="date")
    */
    protected $birth;

    public function getId()
    {
        return $this->id;
    }

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
