<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\JsonResponse;

class ApiController extends AbstractController
{
    /**
     * @Route("/api/disk_size", name="disk_size")
     */
    public function index()
    {
        $free = disk_free_space(getenv('VIDEO_STORAGE'));
        $total = disk_total_space(getenv('VIDEO_STORAGE'));
        $percentage =100 - $free/$total*100;
        $response = new JsonResponse(array('free_space' => $this->size($free), 'total' => $this->size($total), 'percentage' => $percentage));
        return $response;
    }

    private function size($total){
        return $total/1024/1024/1024;
    }
}
