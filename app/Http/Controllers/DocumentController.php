<?php

namespace App\Http\Controllers;

use App\Models\Document;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class DocumentController extends Controller
{
    public function index()
    {
        $documents = Document::all();
        return view('admin.documents.index', compact('documents'));
    }

    public function create()
    {
        return view('admin.documents.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'file' => 'required|file|max:10240', // 10MB max
            'category' => 'required|string',
            'description' => 'nullable|string'
        ]);

        $file = $request->file('file');
        $extension = $file->getClientOriginalExtension();
        $fileName = time() . '_' . $file->getClientOriginalName();
        $path = $file->storeAs('documents', $fileName, 'public');

        Document::create([
            'title' => $request->title,
            'file_path' => $path,
            'file_type' => $extension,
            'category' => $request->category,
            'description' => $request->description
        ]);

        return redirect()->route('admin.documents.index')->with('success', 'Document uploaded successfully');
    }

    public function edit(Document $document)
    {
        return view('admin.documents.edit', compact('document'));
    }

    public function update(Request $request, Document $document)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'category' => 'required|string',
            'description' => 'nullable|string'
        ]);

        if ($request->hasFile('file')) {
            // Delete old file
            Storage::disk('public')->delete($document->file_path);
            
            $file = $request->file('file');
            $fileName = time() . '_' . $file->getClientOriginalName();
            $path = $file->storeAs('documents', $fileName, 'public');
            $document->file_path = $path;
            $document->file_type = $file->getClientOriginalExtension();
        }

        $document->title = $request->title;
        $document->category = $request->category;
        $document->description = $request->description;
        $document->save();

        return redirect()->route('admin.documents.index')->with('success', 'Document updated successfully');
    }

    public function destroy(Document $document)
    {
        Storage::disk('public')->delete($document->file_path);
        $document->delete();
        return redirect()->route('admin.documents.index')->with('success', 'Document deleted successfully');
    }
}