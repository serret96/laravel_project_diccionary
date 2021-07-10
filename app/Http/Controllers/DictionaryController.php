<?php

namespace App\Http\Controllers;

use App\Dictionary;
//use App\Http\Requests\Request;
use App\Jobs\SendReminderEmail;
use App\Suggest;
use App\Translation;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


use App\Transformers\DictionaryTransformer;
use App\Transformers\DictionaryTransformer2;
use App\Transformers\DictionaryTransformer3;

use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Validator;
use Symfony\Component\HttpFoundation\JsonResponse;
use EllipseSynergie\ApiResponse\Contracts\Response;
use Illuminate\Support\Facades\Redirect;

/**
 * Class ApiController
 *
 * @package App\Http\Controllers
 *
 * @SWG\Swagger(
 *     basePath="",
 *     host="laravel.localhost",
 *     schemes={"http"},
 *     @SWG\Info(
 *         version="1.0",
 *         title="Sample API",
 *         @SWG\Contact(name="Ruben", url=""),
 *     ),
 *     @SWG\Definition(
 *         definition="Error",
 *         required={"code", "message"},
 *         @SWG\Property(
 *             property="code",
 *             type="integer",
 *             format="int32"
 *         ),
 *         @SWG\Property(
 *             property="message",
 *             type="string"
 *         )
 *     )
 * )
 */





class DictionaryController extends Controller
{
    /*Json sense llibreria
    //    public function index(){
    //
    //        $dictionaries = Dictionary::all();
    //
    //
    //        $transformer = new DictionaryTransformer;
    //
    //
    //        $dictionaries = $transformer -> transformCollection($dictionaries);
    //
    //
    //        return new JsonResponse($dictionaries);
    //    }
    */

//     Json amb llibreria
    public function __construct(Response $response)
    {
        $this->response = $response;
    }

    public function index()
    {

        $dictionaries = Dictionary::all();
        return $this->response->withCollection($dictionaries, new DictionaryTransformer);
    }

    //

//    public function index2(){
//        $dictionaries = Dictionary::all();
//
//        return $this->response->withCollection($dictionaries, new DictionaryTransformer2);
//    }
//    public function index3(){
//        $dictionaries = Dictionary::all();
//
//        return $this->response->withCollection($dictionaries, new DictionaryTransformer3);
//    }
    public function Register()
    {
        return view('admin.template.registers');
    }

    public function RegisterSave(Request $request)
    {
        $user = new User;
        $user->name = $request->name;
        $user->email = $request ->email;

        $user->password = $request->password;

        $user->remember_token = str_random(10);

        $user->create($request->all());


        return view('admin.template.Success');
    }


    public function indexa()
    {
//        Aquesta funcio es la encarregada de trasmetre les dades per
//        fer la taula de paraules
        $dictionaries = Dictionary::all();
        $translations = Translation::all();
        return view('list')->
        with('dictionaries', $dictionaries)
            ->with('translations', $translations);

    }


//  Fem la crida a la plantilla per tal d'inserir una nova paraula
    public function getWord()
    {

        return view('admin.template.insertar');


    }
//    Fem crida a la plantilla de inserir Traduccio per tal de inserir,
//      Aquesta este que activa desde la llista de paraules en la columna OP.
    public function getTranslate()
    {
        return view('admin.template.insertar_Translate');
    }


    /**
     * @param Request $request
     * @return $this
     */
//    Guardar quan s'introdueix una paraula

    public function saveWord(Request $request)
    {
//     Funcio per guardar a la base de dades l'insert d'una paraula
        $this->validate($request, [
            'words_ebrenques' => 'required|unique:Inserts_words',
            'descriptionts' => 'required',
            'types' => 'required',
        ]);
        $dictionary = new Dictionary;
        $dictionary->words_ebrenques = $request->words_ebrenques;
        $dictionary->descriptionts = $request->descriptionts;
        $dictionary->types = $request->types;
        $dictionary->create($request->all());

        $this->validate($request, [
            'translate' => 'required',
            'id_words'
        ]);

        $dictionary = Dictionary::all()->last();
        $translation = new Translation;
        $translation->translate = $request->translate;
        $translation->id_words = $request = $dictionary->id;
//      Redirigmi les dades que vam al altra taula a un formulari invisible per tant de poder proseguir
        return view('admin.template.SuccessSave')
            ->with('translation', $translation);

    }


//    Guarda con s'introdueix una traduccio
    public function saveTranslate(Request $request)
    {
//        $this->validate($request, [
//            'translate' => 'required|unique:Translations',
//
//        ]);
//     Aqui redirigim el array amb la traduccio per tant de passaru a la BD.
        $translations = new Translation;
        $translations->translate = $request->translate;
        $translations->id_words = $request->id_words;

        $translations->create($request->all());

//        return Redirect::back()->withInput(Input::all());
//
        ?>
        <script>window.location.replace("/admin/panel");</script>
        <?php
    }

//    Extraem les variables de la taula translate per tal de contruir la taula de Traduccions
    public function TableTranslate()
    {
        $dictionaries = Dictionary::all();
        $translations = Translation::all();
        return view('tableTranslate')
            ->with('dictionaries', $dictionaries)
            ->with('translations', $translations)
            ;
    }

//    Funcions per tal de editar la taula de paraules
    public function editar()
    {
//        Fem una recerca per id
        $dictionaries = Dictionary::findOrFail(Input::get('id'));

        return view('admin.template.editar')
            ->with('dictionaries', $dictionaries);

    }

    public function editarSave(Request $request)
    {
//        funcio mitjançant validacio per guardar les dades editades de la taula paraules
//        Sols modificariem una linea
//        $this->validate($request, [
//            'words_ebrenques' => 'required|unique:Inserts_words',
//            'types' => 'required'
//        ]);

        $dictionary = Dictionary::find(Input::get('id'));
//        Usem la funcio update per tal de actualizar la BD.
        $dictionary->update($request->all());

//        return view('admin.template.Success');

        ?>
        <script>window.location.replace("/admin/panel");</script>
        <?php
    }
//          templa edit translate
    public function editTranslate()
    {
//        Te la mateixa funcio que la funcio editar, sols que es per a la taula de traduccions
        $translations = Translation::findOrFail(Input::get('id'));

        return view('admin.template.editTranslate')
            ->with('translations', $translations);
    }
//          function to edit translate and save
    public function editTranslateSave(Request $request)
    {

        //        Te la mateixa funcio que la funcio editarSave, sols que es per a la taula de traduccions
        $this->validate($request, [
            'id' => 'required',
            'translate' => 'required',
//            'id_words' => 'required'
        ]);

        $translation = Translation::find(Input::get('id'));
        $translation->update($request->all());

//        return view('admin.template.Success');
        ?>
        <script>window.location.replace("/admin/panel");</script>
        <?php
    }


//    Funcio per eliminar els elements tant erronis com no desistjats de les taules
    public function beforeDelete()
    {
        $dictionary = Dictionary::findOrFail(Input::get('id'));
//        Redirigim a un formulari per saber si esta d'acord en l'eliminacio del element.
        return view('admin.template.delete')->with('dictionaries', $dictionary);
    }
//      Delete words_ebrenques
    public function delete()
    {
        $dictionary = Dictionary::findOrFail(Input::get('id'));
//        Eliminem de la BD mitjançant la funcio delete
        $dictionary->delete();

?>
        <script>window.location.replace("/admin/panel");</script>
<?php
    }

//    Et redirigeix a un formulari per si estas conforme en la eliminacio
    public function beforeDeleteTranslate()
    {
        $translation = Translation::findOrFail(Input::get('id'));
        return view('admin.template.deletetranslate')->with('translations', $translation);
    }
//     Un cop vols eliminar el formulari li envia la id a la funcio i aquesta s'encarrega d'eliminar
//     la paraula pertinent
    public function deleteTranslate()
    {
        $translation = Translation::findOrFail(Input::get('id'));
        $translation->delete();

//        return view('admin.template.Success');
        ?>
        <script>window.location.replace("/admin/panel");</script>
        <?php
    }
//      Table  words_ebrenques with translations
    public function viewTranslate()
    {
        $dictionary = Dictionary::findOrFail(Input::get('id'));

        $translation =  Translation::where('id_words', Input::get('id'))->get();

        return view('admin.template.viewTranslate')
            ->with('dictionaries', $dictionary)
            ->with('translations', $translation);
    }
//      Table suggest
    public function suggest()
    {
        $suggests = Suggest::all();

        return view('suggestTable')
            ->with('suggest', $suggests);
    }
//      Request delete
    public function BeforeDeleteSuggest()
    {
        $suggest = Suggest::findOrFail(Input::get('id'));
        return view('/admin/template/deleteSuggest')
            ->with('suggests', $suggest);
    }
//      Delete
    public function DeleteSuggest()
    {
        $suggest = Suggest::findOrFail(Input::get('id'));
        $suggest->delete();

//        return view('admin.template.Success');
        ?>
        <script>window.location.replace("/admin/api/suggest");</script>
        <?php

    }
//    Aquesta funcio sera la que recullira de dades de la api,
//    per tal de gestionar les suggerencies
    public function store(Request $request)
    {
        $suggest = new Suggest;
        $suggest->id_words_suggests = $_POST['id_words_suggests'];

        $suggest->words = $_POST['words'];

        $suggest->suggest = $_POST['suggest'];
        $suggest->create($request->all());

//        Tambe hi ha la opci de feru mitjançant request
//        s'hauria de canviar les configuracions del api
        return new JsonResponse(["stored" => true]);
    }

//    Funcions externes de busqueda
    public function term(Request $request)
    {
        $term = $request->get('term');

        $dictionary = Dictionary::where('words_ebrenques', 'LIKE', "$term%")
            ->orderBy('words_ebrenques','ASC')
            ->with('translations')
            ->take(10)
            ->get()
            ->union(Dictionary::where('words_ebrenques','LIKE', "%$term%")
                ->with('translations')
                ->orderBy('words_ebrenques','DESC')
                ->take(10)
                ->get());

        return view('external.index')
            ->with('dictionaries', $dictionary);
    }

    public function selectSearch(Request $request)
    {
        $dictionary = Dictionary::findOrFail(Input::get('id'));

        return view('external.word')
            ->with('dictionary', $dictionary);
    }

    public function autocomplete(Request $request){
        $search = $request
            ->get('search');

        $results = array();

        $dictionary = DB::table('Inserts_words')
            ->where('words_ebrenques', 'LIKE', '%'.$search.'%')
            ->take(5)
            ->get();

        foreach ($dictionary as $dictionaries)
        {
            $results[] = [ 'id' => $dictionaries->id, 'value' => $dictionaries->words_ebrenques.' '.$dictionaries->descriptionts.' '.$dictionaries->types ];
        }
        return view('external.index')
            ->with('dictionaries', $dictionary);
    }

//      Envia el correu de contacta
    public function sendmail(Request $request)
    {
        if($request) {

            $msg = 'Name: '. $request->name ."\n"
                .'Email: '. $request->email ."\n"
                .'Message: '. $request->message ."\n"
                .'Phone: '. $request->number;
//            Guarda les dades en queues
            $this->dispatch(new SendReminderEmail($msg));
//          Retorna a una view si es pot guargar el missatge
            return view('mail.contact_thank');

        } else {
//            En cas de que no es pugue enviar el missatge
            header('location: /');
            exit(0);
        }
    }
}