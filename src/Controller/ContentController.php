<?php

namespace App\Controller;

use App\Entity\Voyage;
use App\Entity\Category;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ContentController extends AbstractController
{

    #[Route('/', name: 'home')]
    public function index(): Response
    {
        return $this->render('content/index.html.twig');
    }

    #[Route('/catalogue', name: 'catalogue')]
    public function voyages(ManagerRegistry $doctrine): Response
    {
        $repository = $doctrine->getRepository(Voyage::class);
        $voyages = $repository->findAll();
        $repository = $doctrine->getRepository(Category::class);
        $categories = $repository->findAll();
        return $this->render('content/catalogue.html.twig', [
            'voyages' => $voyages,
            'categories' => $categories,
        ]);
    }

    #[Route('/catalogue/{catId}', name: 'catalogueByCategory')]
    public function catalogueByCategory(ManagerRegistry $doctrine, String $catId): Response
    {
        $repository = $doctrine->getRepository(Voyage::class);
        $voyages = $repository->findAll();
        $repository = $doctrine->getRepository(Category::class);
        $categories = $repository->findAll();
        return $this->render('content/catalogue.html.twig', [
            'voyages' => $voyages,
            'categories' => $categories,
            'categorySelected' => $catId
        ]);
    }
}
