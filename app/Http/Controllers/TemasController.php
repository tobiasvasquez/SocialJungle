<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Tema;
use Auth;

// Es posible que tenga que poner BaseController?
class TemasController extends Controller
{
  //
  public function index () {
      $temas = Tema::all();
      return view('temasreg')->with('temas', $temas);
  }
    //   public function tema($id){
    //       $temas = Tema::all()->where($id, '=' , 'tema_id')->get();
    //       return view('temas')->with('temas', $tema);
    //   }
  public function indexPage(){
    $temas = Tema::paginate(10);
    return view('post')->with('temas',$temas);
}

  // public function index()
  //   {
  //     $temas = Tema::where("usuarios_id", Auth::user()->id)->get();
  //
  //     return view('temasreg', compact('temasreg'));
  //   }

  public function store(Request $request, $id)
      {

          // Necesitas el ID del tema...
          $tema = Tema::find($id);

          // Necesitas el ID del usuario...
          $idUsuario = Auth::user()->id;

          // Necesitas guardar $tema->id en la tabla pivot ()
          
          // Necesitas guardar el ID del usuario tambien

          // Chequear que este guardado y recien ahi hacen redirect

          //Este lo cree para controlar si el producto fue comprado (1) o aun no ha sido producto no comprado (0).
          $tema->status = 0;
          //Aquí guardo en la tabla de cart (carrito)

          $tema->save();
          //return redirect('/temasreg');
      }

      public function show(Tema $id){
        //   dd($id->titulo);
         return view('temas')->with('id', $id->titulo);        
      }
  }
