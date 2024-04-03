<?php

namespace App\Http\Controllers\BackEnd;

use App\Http\Controllers\Controller;
use App\Models\Category as ModelsCategory;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        if($request->has('search')){
            $categories = ModelsCategory::where('nama', 'LIKE', '%'.$request->search.'%')
            ->orderBy('nama', 'ASC')
            ->paginate(5); 
        }else{
        $categories = ModelsCategory::orderBy('nama', 'ASC')
        ->paginate(5);
        }
        return view('BackEnd.Categories.index', ['categories' => $categories]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $categories = ModelsCategory::create([
            'nama' => $request->kategori,
        ]);
        return redirect()->route('categories');
    }

    /**
     * Display the specified resource.
     */
    public function show(Request $request, $id)
    {
        
    }

    public function edit($id)
    {
        $categories = ModelsCategory::findOrFail($id);

        return view('Backend.categories.update', [
            'categories' => $categories ,
        ]);
    }

    public function update(Request $request, $id)
    {
        $categories = ModelsCategory::findorFail($id);
        $categories->update([
            'nama' => $request->category,
        ]);
        return redirect()->route('categories');
    }

    public function destroy($id)
    {
        $categories = ModelsCategory::find($id);
        $categories->delete();
        return redirect()->route('categories');
    }
}
