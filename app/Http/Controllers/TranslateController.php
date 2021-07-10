<?php

namespace App\Http\Controllers;
use App\Transformers\TranslateTransformer;
use App\Translation;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use EllipseSynergie\ApiResponse\Contracts\Response;

class TranslateController extends Controller
{
// Json sense llibreria
//    public function index(){
//
//        $dictionaries = Dictionary::all();
//
//        $transformer = new DictionaryTransformer;
//
//
//        $dictionaries = $transformer -> transformCollection($dictionaries);
//
//
//        return new JsonResponse($dictionaries);
//    }
//     Json amb llibreria
    public function __construct(Response $response)
    {
        $this->response = $response;
    }

    public function index()
    {

        $translations = Translation::all();
        
        return $this->response->withCollection($translations, new TranslateTransformer);
    }



}

