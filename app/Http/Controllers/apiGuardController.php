<?php

use Chrisbjr\ApiGuard\Http\Controllers\ApiGuardController;
use \App\Transformers\DictionaryTransformer;

class BooksController extends ApiGuardController
{

    public function all()
    {
        $books = Suggests::all();

        return $this->response->withCollection($books, new DictionaryTransformer());
    }

    public function show($id)
    {
        try {

            $book = Suggests::findOrFail($id);

            return $this->response->withItem($book, new DictionaryTransformer());

        } catch (ModelNotFoundException $e) {

            return $this->response->errorNotFound();

        }
    }

}