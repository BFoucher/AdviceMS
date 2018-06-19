<?php
/**
 * Created by PhpStorm.
 * User: yoda
 * Date: 19/06/18
 * Time: 15:56
 */

namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HealCheckController extends Controller
{
    /**
     * @Route("/health")
     */
    public function healthCheck(){
        return Response::create("I'm alive", 200);
    }

}