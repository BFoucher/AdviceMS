<?php
/**
 * Created by PhpStorm.
 * User: yoda
 * Date: 19/06/18
 * Time: 15:56
 */

namespace App\Controller;


use App\Message\MyMessage;
use phpDocumentor\Reflection\Types\Object_;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Messenger\Envelope;
use Symfony\Component\Messenger\MessageBusInterface;
use Symfony\Component\Routing\Annotation\Route;

class HealCheckController extends Controller
{
    /**
     * @Route("/health")
     */
    public function healthCheck(){
        return Response::create("I'm alive", 200);
    }

    /**
     * @Route("/messageTest")
     * @var MessageBusInterface
     * @return Response
     */
    public function messageTest(MessageBusInterface $bus){
        $bus->dispatch(new MyMessage(new Envelope("Plop")));
        return Response::create("Message sent", 200);
    }

}