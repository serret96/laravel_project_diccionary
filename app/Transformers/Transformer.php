<?php

namespace App\Transformers;
use League\Fractal\TransformerAbstract;

/**
 * Class Transformer
 * @package App\Transformers
 */
abstract class Transformer extends TransformerAbstract {

    /**
     * Transform collection
     * @param $items
     * @return array
     */
    public function transformCollection($items)
    {
        return array_map([$this, 'transform'], $items->toArray());
    }

    /**
     * Transform item
     * @param $item
     * @return mixed
     */
    abstract public function transform($item);
}