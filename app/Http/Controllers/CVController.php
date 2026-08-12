<?php

namespace App\Http\Controllers;

use App\Models\Document;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CVController extends Controller
{
    public function view($id)
    {
        $document = Document::findOrFail($id);
        
        // Check if file exists
        if (!Storage::disk('public')->exists($document->file_path)) {
            abort(404, 'File not found');
        }
        
        // Get the file path
        $filePath = Storage::disk('public')->path($document->file_path);
        
        // Get the file extension
        $extension = pathinfo($filePath, PATHINFO_EXTENSION);
        
        // For PDF files - display in browser
        if ($extension === 'pdf') {
            return response()->file($filePath, [
                'Content-Type' => 'application/pdf',
                'Content-Disposition' => 'inline; filename="' . $document->title . '.pdf"'
            ]);
        }
        
        // For other file types (images, word, etc.) - display in browser if possible
        $mimeTypes = [
            'jpg' => 'image/jpeg',
            'jpeg' => 'image/jpeg',
            'png' => 'image/png',
            'gif' => 'image/gif',
            'webp' => 'image/webp',
            'svg' => 'image/svg+xml',
            'doc' => 'application/msword',
            'docx' => 'application/vnd.openxmlformats-officedocument.wordprocessingml.document',
            'txt' => 'text/plain',
        ];
        
        if (isset($mimeTypes[$extension])) {
            return response()->file($filePath, [
                'Content-Type' => $mimeTypes[$extension],
                'Content-Disposition' => 'inline; filename="' . $document->title . '.' . $extension . '"'
            ]);
        }
        
        // For other files, force download
        return response()->download($filePath);
    }
}