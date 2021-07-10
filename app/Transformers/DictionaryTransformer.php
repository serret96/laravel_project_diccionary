<?php

namespace App\Transformers;
use App\Http\Controllers\TranslateController;
use Symfony\Component\HttpKernel\Controller\TraceableControllerResolver;

/**
 * Class DictionaryTransformer
 * @package App\Transformers
 */
class DictionaryTransformer extends Transformer
{
    
    public function transform($dictionary)
    {
        
        return  [
            'id' => $dictionary['id'],
            'words_ebrenques' => $dictionary['words_ebrenques'],
            'descriptionts' => $dictionary['descriptionts'],
            'types' => $dictionary['types'],

        ];


    }

}