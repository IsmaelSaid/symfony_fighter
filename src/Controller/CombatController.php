<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Request;
use Doctrine\ORM\EntityManagerInterface;
use App\Entity\User;
use App\Entity\UserChampion;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Attribute\Route;

class CombatController extends AbstractController
{
    #[Route('/combat', name: 'app_combat')]
    public function index(Request $request, EntityManagerInterface $em): JsonResponse
    {
        $data = json_decode($request->getContent(), true);
        $userid1 = $data['userid1'];
        $userid2 = $data['userid2'];
        print ($userid1);
        print ($userid2);

        // récupération d'un champion aléatoire
        // $user1 = $em
        //     ->getRepository(User::class)
        //     ->find(['id' => (int)$userid1]);
        // $user2 = $em
        //     ->getRepository(User::class)
        //     ->find(['id' => (int)$userid2]);

        $uc1 = $em
            ->getRepository(UserChampion::class)
            ->findOneBy(['id' => (int) $userid1]);
        $uc2 = $em
            ->getRepository(UserChampion::class)
            ->findOneBy(['id' => (int) $userid2]);




        return $this->json([
            'message' => 'Welcome to your new controller!',
            'path' => 'src/Controller/CombatController.php',
        ]);
    }
}
