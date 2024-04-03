<?php

namespace App\Http\Controllers\Backend;

use App\Models\Book;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Yajra\DataTables\Facades\DataTables;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $books = Book::query();
            return DataTables::of($books)
                ->editColumn('id', function ($book) {
                    return encodeId($book->id);
                })
                ->make(true);
        }
        return view('backend.books.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::all();
        return view('backend.books.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'category_id' => 'required|integer|exists:categories,id',
            'title' => 'required|string',
            'author' => 'required|string',
            'isbn' => 'required',
            'cover' => 'required',
            'description' => 'required',
            'publisher' => 'required',
            'language' => 'required',
            'edition' => 'required',
            'subject' => 'required',
            'classification' => 'required',
            'cp_or' => 'required',
            'year' => 'required',
            'quantity' => 'required',
            'available' => 'required',
            'borrowed' => 'required',
        ]);

        try {
            DB::beginTransaction();
            Book::create($request->except('_token'));

            DB::commit();

            return redirect()->route('backend.books.index')->with('success', 'Data berhasil ditambahkan');
        } catch (\Exception $e) {
            return redirect()->route('backend.books.index')->with('error', 'Data gagal ditambahkan');
        }

        return redirect()->route('backend.books.index')->with('success', 'Data berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show($book)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($book)
    {
        $book = Book::find(decodeId($book));
        $categories = Category::all();
        return view('backend.books.edit', compact('book', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $book)
    {
        $request->validate([
            'category_id' => 'required|integer|exists:categories,id',
            'title' => 'required|string',
            'author' => 'required|string',
            'isbn' => 'required',
            'cover' => 'required',
            'description' => 'required',
            'publisher' => 'required',
            'language' => 'required',
            'edition' => 'required',
            'subject' => 'required',
            'classification' => 'required',
            'cp_or' => 'required',
            'year' => 'required',
            'quantity' => 'required',
            'available' => 'required',
            'borrowed' => 'required',
        ]);

        try {
            DB::beginTransaction();
            $book = Book::find(decodeId($book));
            $book->update($request->except('_token'));

            DB::commit();

            return redirect()->route('backend.books.index')->with('success', 'Data berhasil diubah');
        } catch (\Exception $e) {
            return redirect()->route('backend.books.index')->with('error', 'Data gagal diubah');
        }

        return redirect()->route('backend.books.index')->with('success', 'Data berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Book $book)
    {
        try {
            DB::beginTransaction();
            $book->delete();

            DB::commit();

            return redirect()->route('backend.books.index')->with('success', 'Data berhasil dihapus');
        } catch (\Exception $e) {
            return redirect()->route('backend.books.index')->with('error', 'Data gagal dihapus');
        }

        return redirect()->route('backend.books.index')->with('success', 'Data berhasil dihapus');
    }
}
