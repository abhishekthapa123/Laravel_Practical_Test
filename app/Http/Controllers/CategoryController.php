<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use PhpParser\Node\Stmt\Catch_;

class CategoryController extends Controller
{
    public function save(Request $request)
    {
        $validate = $request->validate([
            'category'=> 'required'
        ]);
         
        $category = new Category();
        $category->category_name = $request->category;
        $category->save();
        return redirect('category_form');
        
    }
    public function show()
    {
        $category = Category::all();
        return view('list_category',compact('category'));

    }
    public function edit($id)
    {
        $category = Category::find($id);
        return view('edit_categoryform',compact('category'));
    }
    public function update(Request $request)
    {
            $validate = $request->validate([
                'category'=>'required'
            ]);

        $category = Category::find($request->id);
       $category->category_name = $request->category;
       $category->save();
       return redirect('list_category');
    }

    public function delete($id)
    {
        $category = Category::find($id);
        $category->delete();
        return redirect('/list_category');
    }
}
