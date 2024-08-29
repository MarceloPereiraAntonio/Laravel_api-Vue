<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class CategoryController extends Controller
{
    private $category;

    public function __construct(Category $category)
    {
        $this->category = $category;
    }
    
    public function index(Request $request)
    {
        return response()->json($this->category->getResults($request->name));
    }
    
    public function store(Request $request)
    {
        return response()->json($this->category->create($request->all()), Response::HTTP_CREATED);
    }
    
    public function show(string $id)
    {
        //
    }

    public function edit(string $id)
    {
        //
    }

    public function update(Request $request, string $id)
    {
        
    }

    public function destroy(string $id)
    {
        //
    }
}
