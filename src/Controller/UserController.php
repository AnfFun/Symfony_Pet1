<?php

namespace App\Controller;

use App\Entity\User;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class UserController extends AbstractController
{
    #[Route('/user')]
    public function UserPage(): Response
    {
        return
            $this->render('UserConfig.html.twig');
    }

    #[Route('user/addUser')]
    public function addUserAction(EntityManagerInterface $em,)
    {
        if (!($_POST == Null)) {
            $email = $_POST['email'];
            $this->addUser($em, $email);
            return $this->render('UserConfigAdd.html.twig');
        } else {
            return $this->render('UserConfigAdd.html.twig');

        }


    }

    public function addUser(EntityManagerInterface $em, $email)

    {
        $user = $em->getRepository(User::class);
        $u = new User();
        $user->createUser($u, $email);

    }
#[Route('user/deleteUser')]
public function del(){
    return $this->render('UserConfigDelete.html.twig');
}

}