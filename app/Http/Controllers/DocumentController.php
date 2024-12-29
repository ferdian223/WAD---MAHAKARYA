<?php

namespace App\Http\Controllers;

use App\Models\Document;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class DocumentController extends Controller
{
    public function create()
    {
        return view('Document.create');
    }

    public function docs()
    {
        $documents = Document::orderBy('created_at', 'desc')->get();

        foreach ($documents as $document) {
            $document->passport_foto_name = basename($document->passport_foto); 
            $document->ktp_foto_name = basename($document->ktp_foto);          
            $document->foto_identitas_name = basename($document->foto_identitas); 
        }

        return view('document.index', [
            'documents' => $documents, 
        ]);
    }

    public function save(Request $request)
    {
        $validated = $request->validate([
            'passport_foto' => 'required|image|mimes:jpeg,png,jpg|max:2048',
            'ktp_foto' => 'required|image|mimes:jpeg,png,jpg|max:2048',
            'foto_identitas' => 'required|image|mimes:jpeg,png,jpg|max:2048',
        ]);
    
        $passportPath = $request->file('passport_foto')->store('documents', 'public');
        $ktpPath = $request->file('ktp_foto')->store('documents', 'public');
        $identitasPath = $request->file('foto_identitas')->store('documents', 'public');
    
        Document::create([
            'user_id' => auth()->id(), 
            'passport_foto' => $passportPath,
            'ktp_foto' => $ktpPath,
            'foto_identitas' => $identitasPath,
        ]);
    
        return redirect()->route('document.index')->with('success', 'Data berhasil ditambahkan!');
    }

    public function destroy($id)
    {
        $document = Document::findOrFail($id);
        
        Storage::disk('public')->delete($document->passport_foto);
        Storage::disk('public')->delete($document->ktp_foto);
        Storage::disk('public')->delete($document->foto_identitas);
        
        $document->delete();
        
        return redirect()->route('document.index')->with('success', 'Document berhasil dihapus!');
    }

    public function edit($id)
    {
        $document = Document::findOrFail($id);
        return view('Document.edit', ['document' => $document]);
    }

    public function update(Request $request, $id)
    {
        $document = Document::findOrFail($id);

        $validated = $request->validate([
            'passport_foto' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
            'ktp_foto' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
            'foto_identitas' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        if ($request->hasFile('ktp_foto')) {
            Storage::disk('public')->delete($document->ktp_foto);
            $ktpPath = $request->file('ktp_foto')->store('documents', 'public');
            $document->ktp_foto = $ktpPath;
        }

        if ($request->hasFile('passport_foto')) {
            Storage::disk('public')->delete($document->passport_foto);
            $passportPath = $request->file('passport_foto')->store('documents', 'public');
            $document->passport_foto = $passportPath;
        }

        if ($request->hasFile('foto_identitas')) {
            Storage::disk('public')->delete($document->foto_identitas);
            $identityPath = $request->file('foto_identitas')->store('documents', 'public');
            $document->foto_identitas = $identityPath;
        }

        $document->save();

        return redirect()->route('document.index')->with('success', 'Document berhasil diperbarui!');
    }
}