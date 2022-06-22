<?php

namespace App\Http\Controllers\Admin;

use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories=Category::latest()->get();
        $type= 'index';

        return view('admin.categories.index',compact('categories','type'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $category= new Category();
        return view('admin.categories.create',compact('category'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'image'=>'required|image|mimes:png,jpg,jpeg,gif,svg',
        ]);
        $name = $request->name;
        $imgname = time().rand().$request->file('image')->getClientOriginalName();
        $request->file('image')->move(public_path('uploads'), $imgname);

        Category::create([
            'name' => $name,
            'slug' => Str::slug($request->slug),
            'image' => $imgname,
        ]);

        return redirect()
                ->route('admin.categories.index')
                ->with('msg', 'Category added')
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
        $category=Category::findOrFail($id);
        $categories=Category::latest()->get();
        return view('admin.categories.edit',compact('category','categories'));
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
            'name' => 'required',
            'image'=>'required',
        ]);
        $name = $request->name;
        $imgname = time().rand().$request->file('image')->getClientOriginalName();
        $request->file('image')->move(public_path('uploads'), $imgname);

        Category::findOrFail($id)->update([
            'name' => $name,
            //'slug' => Str::slug($request->slug),
            'image' => $imgname,
        ]);

        return redirect()
                ->route('admin.categories.index')
                ->with('msg', 'Category updated')
                ->with('type', 'warning');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Category::destroy($id);
        return redirect()
                ->route('admin.categories.index')
                ->with('msg', 'Category moved to trash successfully')
                ->with('type', 'info');
    }
    public function trash()
    {
        $categories=Category::onlyTrashed()->latest()->get();
        $type= 'trash';
        return view('admin.categories.index',compact('categories','type'));
    }
    public function restore($id)
    {
        Category::withTrashed()->find($id)->restore();
        return redirect()
                ->route('admin.categories.index')
                ->with('msg', 'Category restored successfully')
                ->with('type', 'success');
    }
}
