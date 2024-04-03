<?php

namespace App\Http\Controllers\Backend;

use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Yajra\DataTables\Facades\DataTables;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $categories = Category::query();
            return DataTables::of($categories)
                ->addColumn('action', function ($category) {
                    return view('backend.categories.action', [
                        'category' => $category,
                    ]);
                })
                ->addIndexColumn()
                ->rawColumns(['action'])
                ->make(true);
        }
        return view('backend.categories.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.categories.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'category_name' => 'required',
        ]);
        Category::create([
            'category_name' => $request->category_name,
            'category_slug' => Str::slug($request->category_name, '-'),
        ]);
        return redirect()->route('backend.categories.index')->with('success', 'Data berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(Request $request, $category)
    {
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($category)
    {
        $category = Category::find(decodeId($category));
        return view('backend.categories.edit', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $category)
    {
        $request->validate([
            'category_name' => 'required',
        ]);
        $category = Category::find(decodeId($category));
        $category->update([
            'category_name' => $request->category_name,
            'category_slug' => Str::slug($request->category_name, '-'),
        ]);
        return redirect()->route('backend.categories.index')->with('success', 'Data berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($category)
    {
        $category = Category::find(decodeId($category));
        $category->delete();
        return response()->json(['status' => 'success', 'message' => 'Data berhasil dihapus']);
    }
}
