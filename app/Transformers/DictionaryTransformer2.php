<?php

namespace App\Transformers;

/**
 * Class DictionaryTransformer
 * @package App\Transformers
 */
class DictionaryTransformer2 extends Transformer
{

    public function transform($dictionary)
    {
        return [
            'id' => $dictionary['id'],
            'words_ebrenques' => $dictionary['words_ebrenques'],
        ];
    }

}