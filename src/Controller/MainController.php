<?php

namespace App\Controller;

use App\Entity\User;
use App\Repository\UserRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MainController extends AbstractController
{
    #[Route('/')]
    public function home(EntityManagerInterface $em): Response
    {
//        $this->addUser($em,'Hello@ua.fm');

        return new Response();

    }

    public function addUser(EntityManagerInterface $em,$email)

    {
        $user = $em->getRepository(User::class);
        $u = new User();
        $user->createUser($u,$email);

    }

}