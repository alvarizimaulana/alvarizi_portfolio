<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Project;
use Yajra\DataTables\Facades\DataTables;

class AdminProjectController extends Controller
{
    // Menampilkan daftar project
    public function index()
    {
        $project = Project::all();
        return view('admin.project.index', compact('project'));
    }

    // Menampilkan form untuk menambah project baru
    public function create()
    {
        return view('admin.project.create');
    }

    // Menyimpan project baru ke database
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:100',
            'description' => 'required|string',
            'link' => 'required|url',
            'photo' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'date' => 'required|date',
        ]);
    
        $data = $request->all();
    
        if ($request->hasFile('photo')) {
            $file = $request->file('photo');
            $filename = time() . '_' . $file->getClientOriginalName();
            $destinationPath = public_path('storage/photo');
            $file->move($destinationPath, $filename);
            $data['photo'] = 'photo/' . $filename;
        }
    
        Project::create($data);
    
        return redirect()->route('admin.project.index')->with('success', 'Data berhasil ditambahkan.');
}
    // Menampilkan detail sebuah project
    public function show($id)
    {
        $project = Project::findOrFail($id);
        return view('admin.project.show', compact('project'));
    }

    // Menampilkan form untuk mengedit project yang ada
    public function edit($id)
    {
        $project = Project::findOrFail($id);
        return view('admin.project.edit', compact('project'));
    }

    // Memperbarui data project yang sudah ada
    public function update(Request $request, string $id)
    {
        $project = Project::findOrFail($id);

        $request->validate([
            'name' => 'required|string|max:100',
            'description' => 'required|string',
            'link' => 'required|url',
            'photo' => 'nullable|image|mimes:jpeg,png,jpg,gif',
            'date' => 'required|date',
        ]);

        $data = $request->all();

        if ($request->hasFile('photo')) {
            if ($project->photo && file_exists(public_path('storage/' . $project->photo))) {
                unlink(public_path('storage/' . $project->photo));
            }

            $file = $request->file('photo');
            $filename = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('storage/photo'), $filename);

            $data['photo'] = 'photo/' . $filename;
        } else {
            $data['photo'] = $project->photo;
        }

        $project->update($data);

        return redirect()->route('admin.project.index')->with('success', 'Data berhasil diperbarui.');
    }

    // Menghapus project
    public function destroy(string $id)
    {
        Project::destroy($id);
        return redirect()->route('admin.project.index')->with('success', 'Project berhasil dihapus.');
  }
}