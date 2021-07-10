<?php
use App\Dictionary;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Facades\Input;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;


//      Inicial layouts not required register
Route::get('', function (){
    return view('layouts.origin');

});
//         Function search in the dictionary
Route::get('search', 'DictionaryController@term');


//          View word
Route::get('search/wordSelect', 'DictionaryController@selectSearch');


//      MAil
Route::post('sendmail', 'DictionaryController@sendmail');
//      Control requereix un usuari registrat
Route::group(['middleware' => 'auth'], function () {
//      Vistes inicials
    Route::get('/admin/home', 'HomeController@index');
    Route::get('/admin', function () {
        return view('home');
    });

//      Ruta de paraules, Taula words ebrenques,types, OP
    Route::get('/admin/panel', 'DictionaryController@indexa');
//      Rutes per inserir noves paraules
    Route::get('/admin/api/insertar', 'DictionaryController@getWord');
    Route::post('/admin/api/insertar/save', 'DictionaryController@saveWord');
//    Route::get('/admin/api/insertar/save', 'DictionaryController@saveWord');

//      Rutes per imprimir la plantilla de Tranlslate Translate, id de referencia, OP
//    Route::get('/admin/api/Translate', 'DictionaryController@TableTranslate');
//      Rutes per inserir les traduccions
    Route::get('/admin/api/insertarTraduccio', 'DictionaryController@getTranslate');
    Route::post('/admin/api/insertarTraduccio/save', 'DictionaryController@saveTranslate');
//      Rutes per editar paraules
    Route::get('/admin/api/editar', 'DictionaryController@editar');
    Route::put('/admin/api/editar/save', 'DictionaryController@editarSave');
//      Rutes epr editar els translate
    Route::get('/admin/api/editTranslate', 'DictionaryController@editTranslate');
    Route::put('/admin/api/editTranslate/save', 'DictionaryController@editTranslateSave');
//      Rutes per eliminar les paraules
    Route::get('/admin/api/beforeDelete', 'DictionaryController@beforeDelete');
    Route::get('/admin/api/delete', 'DictionaryController@delete');
//      Rutes per eliminar les translate
    Route::get('/admin/api/beforeDeleteTranslate', 'DictionaryController@beforeDeleteTranslate');
    Route::get('/admin/api/deleteTranslate', 'DictionaryController@deleteTranslate');

    Route::get('/admin/api/viewTranslate', 'DictionaryController@viewTranslate');
//      Impressio de la taula suggest
    Route::get('/admin/api/suggest', 'DictionaryController@suggest');
//      Eliminacio de una suggest
    Route::get('/admin/api/deleteSuggest', 'DictionaryController@BeforeDeleteSuggest');
    Route::get('/admin/api/delete/suggest', 'DictionaryController@DeleteSuggest');


//      Admin function to register new users
    Route::get('/admin/register', 'DictionaryController@Register');
    Route::post('admin/register/save', 'DictionaryController@RegisterSave');

});
//      Insert new Suggest
Route::post('/api/api/input', 'DictionaryController@store');
Route::auth();

/*
     * Json Responso to the api Ebre DIC
 */
Route::get('/api/dictionary', [function (Request $request) {

//      Nou Metode per enviar dades paginades json amb millora en la seva paginacio

    $searchQuery = Input::get('filtro');
//    Extrau les dades segons les demandes de la api   ?filtro=text
    $mensajes = Dictionary::where('words_ebrenques', 'LIKE', "$searchQuery%")
        ->orderBy('words_ebrenques','ASC')
        ->with('translations')
        ->get()
        ->union(Dictionary::where('words_ebrenques','LIKE', "%$searchQuery%")
            ->with('translations')
        ->orderBy('words_ebrenques','ASC')
        ->get());
    $page = Input::get('page', 1); // Get the current page or default to 1, this is what you miss!
    $perPage = 10;  // Element per Page
    $offset = ($page * $perPage) - $perPage;

    return new LengthAwarePaginator(
        array_slice(
            $mensajes->toArray(),
            $offset,
            $perPage,
            true
        ),
        count($mensajes),
        $perPage,
        $page,
        ['path' => $request->url(),
            'query' => $request->query()
        ]);
}]);
//    Primer metode per enviar json paginat

////    $cadena = $_GET['filtro'];
//    $searchQuery = Input::get('filtro');
//    /*   Carrega totes les dades, sense la necessitat de cap filtre   */
//    if ($searchQuery == null) {
//
////      Incloem la paginacio per enviar
//        $dictionary = App\Dictionary::with('translations')->paginate(10);
//    } /* Segons les necessitats del usuari retornara les dades que se li aproximen mes mitjançant el filtre */
//    else {
//
//        $dictionary = Dictionary::where('words_ebrenques', 'LIKE', "%$searchQuery%")
//
//                ->with('translations')->orderBy('words_ebrenques', 'ASC')
//                ->paginate(10)->appends(Input::get());
//    }
//    return new JsonResponse($dictionary);
//
//      }]);

//}]);

