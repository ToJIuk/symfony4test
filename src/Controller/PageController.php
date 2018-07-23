<?php
// src/Controller/PageController.php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class PageController extends AbstractController
{
    /**
     * @Route("/page/number/{id}")
     */
    public function number($id = 0)
    {
        $number = random_int(0, 100);
        $id = $id ? ', id - ' . $id : null;
        return $this->render(
            'page/number.html.twig',
            ['number' => $number, 'id' => $id]
        );
    }
}