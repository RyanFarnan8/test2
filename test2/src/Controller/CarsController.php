<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Util\Car;

class CarsController extends AbstractController
{
    /**
     * @Route("/cars", name="cars")
     */
    public function index(): Response

    {

        $car1 = new Car();
        $car1 ->setMakeModel('Ford Mondeo' );
        $car1 ->setFuel('diesel');
        $car1 ->setVrt(false);


        $car2 = new Car();
        $car2 ->setMakeModel('Jaguar XF' );
        $car2 ->setFuel('petrol');
        $car2 ->setVrt(false);


        $car3 = new Car();
        $car3 ->setMakeModel('Nissan Leaf' );
        $car3 ->setFuel('electric');
        $car3 ->setVrt(true);

        $template = 'cars/index.html.twig';
        $args = [
            'cars'=>[$car1, $car2 , $car3]
        ];

        return $this->render($template , $args);

    }
}
