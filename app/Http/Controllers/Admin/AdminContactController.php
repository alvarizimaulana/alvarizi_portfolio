<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Contact;

class AdminContactController extends Controller
{
    public function index()
    {
        $contact = Contact::all();
        return view('admin.contact.index', compact('contact'));
    }

    public function create()
    {
        return view('admin.contact.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:contact,email',
            'phone' => 'required|string|max:15',
            'sosial_media' => 'nullable|string|max:255',
        ]);        

        Contact::create($request->all());
        return redirect()->route('admin.contact')->with('success', 'Contact created successfully!');
    }

    public function show(string $id) {
        $contact = Contact::findOrFail($id);
        return view('admin.contact.show', compact('contact'));
    }

    public function edit($id)
    {
        $contact = Contact::findOrFail($id);
        return view('admin.contact.edit', compact('contact'));
    }

    public function update(Request $request, string $id)
    {
        $contact = Contact::findOrFail($id);
        
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:contact,email,' . $contact->id,
            'phone' => 'required|string|max:15',
            'sosial_media' => 'nullable|string|max:255',
        ]);                

        $contact->update($request->all());
        return redirect()->route('admin.contact.index')->with('success', 'Contact updated successfully!');
    }

    public function destroy(string $id)
    {
        Contact::destroy($id);
        return redirect()->route('admin.contact.index')->with('success', 'Contact deleted successfully!');
}
}