<?php

namespace App\Transformers;

/**
 * Class CategoryTransformer
 * @package App\Transformers
 */
class CategoryTransformer extends Transformer
{
    /**
     * Transform category
     * @param $category
     * @return array
     */
    public function transform($category)
    {
        return [
            'id' => $category['id'],
            'name' => $category['name'],
        ];
    }
}