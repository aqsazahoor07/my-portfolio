<?php

namespace App\Http\Controllers;

use App\Models\Project;  
use App\Models\Document; 
// use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    public function index()
    {
        $projects = Project::all();
        $cv = Document::where('category', 'cv')->first();
        
        return view('portfolio', compact('projects', 'cv'));
    }
}