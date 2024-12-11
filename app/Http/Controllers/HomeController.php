<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Skill;
use App\Models\Project;
use App\Models\Certificate;
use App\Models\Contact;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $about = About::all();
        $skil = Skill::all();
        $project = Project::all();
        $certificate = Certificate::all();
        $contact = Contact::all();
        return view('welcome', compact('about', 'skil', 'project', 'certificate', 'contact'));
    }
}