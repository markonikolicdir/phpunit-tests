<?php


namespace App\Http\Controllers;


use App\Box;
use Symfony\Component\HttpFoundation\JsonResponse;

class BoxController extends Controller
{
    public function show(JsonResponse $response): JsonResponse
    {
        $box = new Box();
        $box->name = 'Television';

        $response->setData($box);

        return $response;
    }

}
