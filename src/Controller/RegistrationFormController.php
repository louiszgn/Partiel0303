<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class RegistrationFormController extends AbstractController
{
    /**
     * @Route("/registration/form", name="registration_form")
     */
    public function index()
    {
        return $this->render('registration_form/index.html.twig', [
            'controller_name' => 'RegistrationFormController',
        ]);
    }
}
