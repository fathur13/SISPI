<?php

namespace App\Http\Controllers\Sispi\Admin\ManagmentData;

use App\Http\Controllers\Controller;
use App\Models\Admin\ManagmentData\TemplateSurat;
use Illuminate\Http\Request;

class TemplatesuratController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('sispi.admin.managment-data.template-surat.index', [
            'list_templatesurat' => TemplateSurat::latest()->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $templatesurat = new TemplateSurat;
        $templatesurat->nama = request('nama');
        $templatesurat->handleUploadFile('file_template_surat');
        
        return redirect('sispi/admin/template-surat')->with('success', 'Data Berhasil Di Tambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }
    public function edit(TemplateSurat $templateSurat)
    {
        $data['templateSurat'] = $templateSurat;
        return view('sispi.admin.managment-data.template-surat.edit', $data);
    }
    public function update(TemplateSurat $templateSurat)
    {
        $templateSurat->nama = request('nama');
        $templateSurat->save();

        return redirect('sispi/admin/template-surat')->with('success', 'Data Berhasil Di Edit');
    }
    public function destroy($id)
    {
        //
    }
    public function deleteTemplatesurat(TemplateSurat $templatesurat)
    {
        $templatesurat->delete();
        
        return back();
    }
}
