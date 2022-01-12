<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;

use App\service\Master;
use App\service\Capitalize;
use App\service\Dashes;
use App\service\Logger;

class DiController extends AbstractController
{
    #[Route('/di', name: 'di')]
    public function index(Request $request): Response
    {
        $caps = new Capitalize();
        $dash = new Dashes();
        $log = new Logger();
        $msg = "";
        
        if ($request->isMethod('POST')) {
            if ($request->request->get('msg')) {
                $msg = $request->request->get('msg');
                $transformMethod = $request->request->get('transformMethod');
                if ($transformMethod === 'Capitalize') {
                    $master = new Master($caps,$log);
                    $msg = $master->transform($msg);
                    $master->logger($msg);
                }
                elseif ($transformMethod === 'Dash') {
                    $master = new Master($dash,$log);
                    $msg = $master->transform($msg);
                    $master->logger($msg);
                }
            }

        }
        return $this->render('di/index.html.twig', [
            'msg' => $msg,
        ]);
    }
}
