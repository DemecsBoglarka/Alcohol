<?php

namespace App\Http\Controllers;

use App\Models\Alcohol;
use App\Models\Category;
use Illuminate\Http\Request;

class AlcoholController extends Controller
{
    public function index()
    {
        $alcohols = City::with('category')->get();

        return view('alcohols.index', compact('alcohols'));
    }

    public function create()
    {
        $categories = County::all();

        return view('alcohols.create', compact('categories'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'zip_code' => ['required', 'string', 'max:20'],
            'category_id' => ['required', 'exists:categories,id'],
        ]);

        City::create($validated);

        return redirect()
            ->route('alcohols.index')
            ->with('status', 'Alkohol létrehozva!');
    }

    public function show(City $alcohol)
    {
        return view('alcohols.show', compact('alcohol'));
    }

    public function edit(City $alcohol)
    {
        return view('alcohols.edit', compact('alcohol'));
    }

    public function update(Request $request, City $alcohol)
    {
        $validated = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'zip_code' => ['required', 'string', 'max:20'],
            'category_id' => ['required', 'exists:categories,id'],
        ]);

        $alcohol->update($validated);

        return redirect()
            ->route('alcohols.index')
            ->with('status', 'Alkohol adatai frissítve!');
    }

    public function destroy(City $alcohol)
    {
        $alcohol->delete();

        return redirect()
            ->route('alcohols.index')
            ->with('status', 'Alkohol törölve!');
    }
}
