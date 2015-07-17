<?php

namespace My\FormRPBundle\Controller;

use My\FormRPBundle\Entity\Task;
use My\FormRPBundle\Form\Type\TaskType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{

    public function newAction()
    {
        $task = new Task();

        $form = $this-> createForm(new TaskType(), $task);

        $request=$this->get('request');
        $form->handleRequest($request);

        if ($request->getMethod() == 'POST') {
            if ($form->isValid()) {
                return $this->render('MyFormRPBundle:Default:success.html.twig', array(
                    'name' => $task->getName(),
                    'surname' => $task->getSurname(),
                ));
            }

        }

        return $this->render('MyFormRPBundle:Default:new.html.twig', array(
            'form' => $form->createView(), ));

    }
}
