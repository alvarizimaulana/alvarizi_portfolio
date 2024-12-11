<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\About;

class AdminAboutController extends Controller
{
    public function index()
    {
        $about = About::all();
        return view('admin.about.index', compact('about'));
    }

    public function create()
    {
        return view('admin.about.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:100',
            'gender' => 'required|in:lelaki,perempuan',
            'pekerjaan' => 'required|string|max:100',
            'description' => 'required|string',
        ]);

        About::create($request->all());
        return redirect()->route('admin.about')->with('success', 'Data berhasil ditambahkan.');
    }

    public function show(string $id) {
        $about = About::findOrFail($id);
        return view('admin.about.show', compact('about'));
    }

    public function edit($id)
    {
        $about = About::findOrFail($id);
        return view('admin.about.edit', compact('about'));
    }

    public function update(Request $request, string $id)
    {
        $about = About::findOrFail($id);
        
        $request->validate([
            'name' => 'required|string|max:100',
            'gender' => 'required|in:lelaki,perempuan',
            'pekerjaan' => 'required|string|max:100',
            'description' => 'required|string',
        ]);        

        $about->update($request->all());
        return redirect()->route('admin.about')->with('success', 'Data berhasil diupdate.');
    }

    public function destroy(string $id)
    {
        About::destroy($id);
        return redirect()->route('admin.about')->with('success', 'Data berhasil dihapus.');
}
}