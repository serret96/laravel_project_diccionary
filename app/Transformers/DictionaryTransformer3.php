<?php

namespace App\Transformers;

/**
 * Class DictionaryTransformer
 * @package App\Transformers
 */
class DictionaryTransformer3 extends Transformer
{

    public function transform($dictionary)
    {
        return [
            'id' => $dictionary['id'],
            'words_ebrenques' => $dictionary['words_ebrenques'],
            'types' => $dictionary['types']

        ];
    }

}