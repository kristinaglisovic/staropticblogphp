<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Admin\BackendController;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends BackendController
{

    public function create()
    {
        $categories=Category::all();
        return view('admin.pages.create-categories',[
            'pageName'=>"Kreiranje kategorije",
            'pageRoute'=>"Kreiranje kategorije",
            'categories'=>$categories
        ]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'category'=>'required|min:3|max:20',
        ]);

        $category=new Category();
        $category->name=$request->category;
        $category->save();


        return redirect(route('categories.create'))->with([
            'msg'=>'Kategorija je uspešno kreirana',
            //klasa koja boji polja
            "sent"=>"uspesno"
        ]);
    }



    public function edit(Category $category)
    {
        $categories=Category::all();
        $categoryToEdit=$category;
        return view('admin.pages.edit-categories',[
            'pageName'=>"Izmena kategorije",
            'pageRoute'=>"Izmena kategorije",
            'categories'=>$categories,
            'category'=>$categoryToEdit
        ]);
//
    }


    public function update(Request $request, Category $category)
    {
        $request->validate([
            'category'=>'required|min:3|max:20',
        ]);

        $category->name=$request->category;
        $category->save();


        return redirect(route('categories.edit',$category))->with([
            'msg'=>'Kategorija je uspešno izmenjena',
            //klasa koja boji polja
            "sent"=>"uspesno",
        ]);
    }

    public function destroy(Category $category)
    {
        $category->delete();
        return redirect(route('categories.create'))->with([
            'msg'=>'Kategorija je uspešno obrisana',
        ]);
    }
}
