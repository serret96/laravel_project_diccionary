<?php

namespace App\Transformers;

/**
 * Class DictionaryTransformer
 * @package App\Transformers
 */
class TranslateTransformer extends Transformer
{

    public function transform($translation)
    {
        return [
            'id' => $translation['id'],
            'translate' => $translation['translate'],
            'id_words' => $translation['id_words'],

        ];
    }

}