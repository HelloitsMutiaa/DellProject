<?php

namespace App\Http\Controllers\admin;

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
        return view('BackEnd.kategori', ['categories' => $categories]);
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
        $categories = ModelsCategory::find($id)
        ->update([
            'nama' => $request->kategori,
        ]);
        return redirect()->route('categories');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $categories = ModelsCategory::findOrFail($id);

        return view('FrontEnd.modal.kategoriEdit', [
            'categories' => $categories ,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $categories = ModelsCategory::find($id)->update([
            'nama' => $request->kategori,
        ]);
        return redirect()->route('categories');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
