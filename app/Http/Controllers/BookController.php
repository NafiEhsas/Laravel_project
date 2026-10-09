<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BookController extends Controller
{
    /**
     * Display all books.
     */
    public function index()
    {
        return view('books.index');
    }

    /**
     * Show the form for creating a new book.
     */
    public function create()
    {
        return view('books.create');
    }

    /**
     * Store a newly created book.
     * Not implemented in this assignment.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display one book.
     */
    public function show(string $id)
    {
        return view('books.show');
    }

    /**
     * Show the form for editing a book.
     */
    public function edit(string $id)
    {
        return view('books.edit');
    }

    /**
     * Update an existing book.
     * Not implemented in this assignment.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Delete a book.
     * Not implemented in this assignment.
     */
    public function destroy(string $id)
    {
        //
    }
}
