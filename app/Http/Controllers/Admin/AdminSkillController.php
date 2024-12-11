<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Skill;

class AdminSkillController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $skill = Skill::all();

        return view('admin.skill.index', compact('skill'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.skill.create',); 
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
{

    // dd($request->all());
    // Validasi input dari form
    $validated = $request->validate([
        'title' => 'required|string|max:255',
        'description' => 'required|string',
    ]);

    // Simpan data ke database
    skill::create($validated);

    // Redirect kembali ke halaman sebelumnya dengan pesan sukses
    return redirect()->route('admin.skill')->with('success', 'Skill berhasil ditambahkan.');
}


    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $skill = Skill::findOrFail($id);
        return view('admin.skill.edit', compact('skill'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $skill = Skill::findOrFail($id);
        
        $request->validate([
            'title' => 'required',
            'description' => 'required',
        ]);

        $skill->title = $request->input('title');
        $skill->description = $request->input('description');

        $skill->save();

        return redirect()->route('admin.skill')->with('success', 'Skill berhasil diupdate.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        Skill::destroy($id);
        return redirect()->route('admin.skill')->with('success', 'Skill berhasil dihapus.');
    }
}
