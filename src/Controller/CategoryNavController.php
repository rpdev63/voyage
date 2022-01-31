<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use App\Repository\CategoryRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;



class CategoryNavController extends AbstractController
{

    public function getCatMenu(CategoryRepository $categoryRepository): Response
    {
        return $this->render('_menuCat.html.twig', [
            'categories' => $categoryRepository->findAll(),
        ]);
    }
}
