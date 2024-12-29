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
        $documents = Document::orderBy('user_id', 'desc')->get();

        foreach ($documents as $document) {
            $document->passport_foto_name = basename($document->passport_foto); 
            $document->ktp_foto_name = basename($document->ktp_foto);          
            $document->foto_identitas_name = basename($document->foto_identitas); 
        }

        return view('Document.index', [
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
    
        // menyimpan path dari file yang di upload
        $passportPath = $request->file('passport_foto')->store('documents', 'public');
        $ktpPath = $request->file('ktp_foto')->store('documents', 'public');
        $identitasPath = $request->file('foto_identitas')->store('documents', 'public');
    
        // menyimpan path file yang di upload ke database
        Document::create([
            'user_id' => auth()->id(), 
            'passport_foto' => $passportPath,
            'ktp_foto' => $ktpPath,
            'foto_identitas' => $identitasPath,
        ]);
    
        return redirect()->route('Document.index')->with('success', 'Data berhasil ditambahkan!!');
    }

    public function destroy($id)
    {
        $document = Document::findOrFail($id);
        $document->delete();
        
        return redirect()->route('Document.index')->with('success', 'Document berhasil dihapus dari keranjang!');
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
        $ktpPath = $request->file('ktp_foto')->store('documents', 'public');
        $document->ktp_foto = $ktpPath;
    } else {
        $document->ktp_foto = $request->input('old_ktp_foto');
    }

    if ($request->hasFile('passport_foto')) {
        $passportPath = $request->file('passport_foto')->store('documents', 'public');
        $document->passport_foto = $passportPath;
    } else {
        $document->passport_foto = $request->input('old_passport_foto');
    }

    if ($request->hasFile('foto_identitas')) {
        $identityPath = $request->file('foto_identitas')->store('documents', 'public');
        $document->foto_identitas = $identityPath;
    } else {
        $document->foto_identitas = $request->input('old_foto_identitas');
    }


    $document->save();

    return redirect()->route('Document.index') ->with('success', 'Document berhasil diperbarui!');
}

    
} 