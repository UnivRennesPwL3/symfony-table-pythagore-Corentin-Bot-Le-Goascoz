<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use App\Classe\PythagoreUtility;

class PythagoreController extends AbstractController
{
    #[Route('/pythagore/view', name: 'app_pythagore')]
    public function DisplayPythagoreAction (): Response
    {
        // Instanciation de la classe PythagoreUtility
        $pytha = new PythagoreUtility();
        $table = $pytha->display();

        // Affichage du résultat dans le template Twig
        return $this->render('displayPythagore.html.twig', [
            'htmlResponse' => $table,
        ]);
    }
}