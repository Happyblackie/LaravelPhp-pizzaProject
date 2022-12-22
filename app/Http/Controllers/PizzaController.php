<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Pizza;

class PizzaController extends Controller
{
    //PROTECT ALL ROUTES:
    //public function __construct(){
        //$this->middleware('auth'); //  this apply to all routes, only if you want
    //}

    public function index(){
        return view('pizzafiles.welcome');
    }
    public function pizzalist(){
        $pizzas= Pizza::all();
        return view('pizzafiles.pizzalist',['pizzas'=>$pizzas]);
    }
    public function pizzaid($id){
        $pizzas = Pizza::findorFail($id);
        return view('pizzafiles.pizzaid',['pizzas'=>$pizzas]);
    }
    public function create(){
        return view('pizzafiles.create');
    }

    public function save_to_database(){
       /*  error_log(request('name'));
        error_log(request('type'));
        error_log(request('base')); */

        $pizzas = new Pizza(); //class instance

        $pizzas->name = request('name'); //objects
        $pizzas->type = request('type');
        $pizzas->base = request('base');
        $pizzas->toppings = request('toppings');

        $pizzas->save(); //now save
        return redirect('/')->with('msg', 'Thanks for your order');
    }

    public function destroy($id){
        $pizza = Pizza::findorFail($id); //finding the record and store it
        //using delete method
        $pizza->delete();

        //redirect to a pizzalist page after deletion
        return redirect('/pizzalist');
    }

}
