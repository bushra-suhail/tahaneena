<?php

namespace App\Http\Controllers;

use App\Models\Card;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Foundation\Auth\User;
use Illuminate\Support\Facades\Auth;

class MainController extends Controller
{
    public function index()
    {

        $cards=Card::paginate(4);
        $categories=Category::latest()->take(4)->get();
        return view('front.test',compact('categories','cards'));
    }








    function card1($id){
        $cards=Card::find('$id');

        return view('front.card1',compact('cards'));
    }
    function card2(){

        return view('front.card2');
    }
    function card3(){

        $categories=Category::latest()->get();
        return view('front.card3',compact('categories'));
    }
    function card4(){

        return view('front.card4');
    }

    function card5(){

        return view('front.card5');
    }

    function card6(){

        return view('front.card6');
    }

    function card7(){

        return view('front.card7');
    }

    function card8(){

        return view('front.card8');
    }

    function card9(){

        return view('front.card9');
    }

    function card10(){

        return view('front.card10');
    }
    public function storecard($id)
    {
        $user = User::find($id);
        $user->cards()->attach(1);
    }

}
