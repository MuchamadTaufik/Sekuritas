<?php

namespace App\Http\Controllers\DashboardAdmin;

use App\Models\Category;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreCategoryRequest;
use App\Http\Requests\UpdateCategoryRequest;
use Cviebrock\EloquentSluggable\Services\SlugService;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $category = Category::latest()->get();
        return view('dashboard-admin.category.index', compact('category'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard-admin.category.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCategoryRequest $request)
    {
        $validateData = $request->validate([
            'name' => 'required|max:255|unique:jurusans,name',
        ]);

        $validateData['slug'] = SlugService::createSlug(Category::class, 'slug', $validateData['name']);

        Category::create($validateData);

        // Menampilkan notifikasi sukses dan redirect
        toast()->success('Berhasil', 'Category Berhasil ditambahkan');
        return redirect('/dashboard/category')->withInput();
    }

    /**
     * Display the specified resource.
     */
    public function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($slug)
    {
        $category = Category::where('slug', $slug)->firstOrFail();

        return view('dashboard-admin.category.edit', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCategoryRequest $request, $slug)
    {
        $category = Category::where('slug', $slug)->firstOrFail();

        try {
            $rules = [
                'name' => 'required|max:255'
            ];

            $validateData = $request->validate($rules);

            $validateData['slug'] = SlugService::createSlug(Category::class, 'slug', $validateData['name']);

            $category->update($validateData);

            alert()->success('Berhasil', 'Category berhasil diubah');
            return redirect('/dashboard/category')->withInput();

            } catch (\Exception $e) {
                dd($e->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($slug)
    {
        $category = Category::where('slug', $slug)->firstOrFail();

        Category::destroy($category->id);

        alert()->success('Success', 'Category berhasil dihapus');
        return redirect('/dashboard/category')->withInput();
    }
}
