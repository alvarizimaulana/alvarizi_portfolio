<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Certificate;
use Illuminate\Support\Facades\Storage;

class AdminCertificateController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $certificate = Certificate::all();
        return view('admin.certificate.index', compact('certificate'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.certificate.create',); 
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
{
    $request->validate([
        'name' => 'required|string',
        'issued_by' => 'required|string',
        'issued_at' => 'required|date',
        'file' => 'nullable|file|mimes:pdf,jpg,png',
        'description' => 'nullable|string',
    ]);
    
    // Get all the request data
    $data = $request->all();
   
    if ($file = $request->file('file')){
        $filename = date('YmdHis') . "." . $file->getClientOriginalExtension();
        $file->move(public_path('/storage/certificates'), $filename);
        $data['file'] = $filename;
    }

    
     // Assign the file path to the 'file' column in the data array

    // Create the certificate record in the database
    Certificate::create($data);

    // Redirect with success message
    return redirect()->route('admin.certificate.index')->with('success', 'Certificate added successfully!');
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
    public function edit(string $id)
    {
        $certificate = certificate::findOrFail($id);
        return view('admin.certificate.edit', compact('certificate'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'issued_by' => 'required|string|max:255',
            'issued_at' => 'required|date',
            'file' => 'nullable|file|mimes:pdf',
            'description' => 'nullable|string|max:1000',
        ]);
       
        $certificate = Certificate::findOrFail($id);
        $data = $request->all();

        if ($file = $request->file('file')) {
            // Hapus file lama jika ada
            if ($certificate->file && file_exists(public_path('/storage/certificates/' . $certificate->file))) {
                unlink(public_path('/storage/certificates/' . $certificate->file));
            }
        
            // Generate nama file baru dan simpan di folder 'public/storage/certificates'
            $filename = date('YmdHis') . "." . $file->getClientOriginalExtension();
            $file->move(public_path('/storage/certificates'), $filename);
            $data['file'] = $filename;
        }
        
        $certificate->update($data);

        return redirect()->route('admin.certificate.index')->with('success', 'Certificate updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $certificate = Certificate::findOrFail($id);

        if ($certificate->file) {
            Storage::disk('public')->delete($certificate->file);
        }

        $certificate->delete();

        return redirect()->route('admin.certificate.index')->with('success', 'Certificate deleted successfully!');
    }
}
