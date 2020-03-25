<?php

namespace App\Controller;

use App\Entity\Usuario;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class SecurityController extends AbstractController
{
    /**
     * @Route("/passcript", name="passcript", methods={"POST"})
     */
    public function password(Request $request, UserPasswordEncoderInterface $encoder)
    {
        $user = new Usuario();
        return $this->json([
            'senha' => $request->request->get('password'),
            'senha_cript' =>  $encoder->encodePassword($user, $request->request->get('password')),
        ]);
    }

    /**
     * @Route("/login", name="login", methods={"POST"})
     */
    public function login(Request $request)
    {
        return $this->json([
            'user' => $this->getUser() ? $this->getUser()->getId() : null
        ]);
    }
}
