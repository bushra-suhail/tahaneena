<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Card;
use App\Models\Category;
use Illuminate\Http\Request;

class CardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cards=Card::latest()->get();
        $type= 'index';

        return view('admin.cards.index',compact('cards','type'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories=Category::all();
        $card= new Card();
        return view('admin.cards.create',compact('card','categories'));    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title'=>'required',
            'category_id'=>'required',
            'image'=> 'required|image|mimes:png,jpg,jpeg,gif,svg'
        ]);

        //upload image
        $imgname = time().rand().$request->file('image')->getClientOriginalName();
        $request->file('image')->move(public_path('uploads'), $imgname);



        Card::create([
            'title' => $request->title,
            'image' => $imgname,
            'category_id'=> $request->category_id,
        ]);

        return redirect()
                ->route('admin.cards.index')
                ->with('msg', 'Card added')
                ->with('type', 'success');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $card=Card::findOrFail($id);
        $categories=Category::latest()->get();
        return view('admin.cards.edit',compact('card','categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'title'=>'required',
            'category_id'=>'required',
            'image'=> 'required|image|mimes:png,jpg,jpeg,gif,svg'
        ]);

        $card=Card::findOrFail($id);

        $imgname=$card->image;
        if($request->hasFile('image')){
            //upload image
        $imgname = time().rand().$request->file('image')->getClientOriginalName();
        $request->file('image')->move(public_path('uploads'), $imgname);
        }


            $card->update([
            'title' => $request->title,
            'image' => $imgname,
            'category_id'=> $request->category_id,
        ]);

        return redirect()
                ->route('admin.cards.index')
                ->with('msg', 'Card updated')
                ->with('type', 'info ');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Card::destroy($id);
        return redirect()
                ->route('admin.cards.index')
                ->with('msg', 'Card moved to trash successfully')
                ->with('type', 'info');
    }

    public function trash()
    {
        $cards=Card::onlyTrashed()->latest()->get();
        $type= 'trash';
        return view('admin.cards.index',compact('cards','type'));
    }

    public function restore($id)
    {
        Card::withTrashed()->find($id)->restore();
        return redirect()
                ->route('admin.cards.index')
                ->with('msg', 'Card restored successfully')
                ->with('type', 'success');
    }
}
