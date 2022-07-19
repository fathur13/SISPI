<?php

namespace App\Http\Controllers\Sispi\Admin;

use App\Http\Controllers\Controller;
use App\Models\Sispi\Admin\Dokumen;
use Illuminate\Http\Request;

class ReviewDokumenController extends Controller
{
    public function index(Request $request)
    {
        // $keyword = $request->keyword;
        // $datas =  Dokumen::where('tanggal', 'LIKE', '&' . $keyword . '&')->get();
        // $data = Dokumen::where('tanggal', 'LIKE', '&' . $keyword . '&')->get();
        // return view('sispi.admin.review-dokumen.index', compact('keyword', 'datas'), );
        // return view('sispi.admin.review-dokumen.index' );
        return view('sispi.admin.review-dokumen.index', [
            //     'list_dokumen' =>  Dokumen::whereMonth('tanggal', '=', '06')->get()
            'list_dokumen' =>  Dokumen::latest()->get()
        ]);
    }
    public function show(Dokumen $review_dokuman)
    {
        $data['review_dokuman'] = $review_dokuman;
        $data['list_dokumen'] = Dokumen::all();
        return view('sispi.admin.review-dokumen.show', $data);
    }

    public function filter()
    {
        // $tanggal = request('tanggal');
        $tanggal_awal = request('tanggal_awal');
        $tanggal_akhir = request('tanggal_akhir');
        return view('sispi.admin.review-dokumen.index', [
            //     'list_dokumen' =>  Dokumen::whereMonth('tanggal', '=', '06')->get()
                // 'list_dokumen' =>  Dokumen::where('tanggal','like',  "%$tanggal%", 'like', "%%")->get(),
                'list_dokumen' =>  Dokumen::whereBetween('tanggal', [$tanggal_awal, $tanggal_akhir])->get(),
                'tanggal_awal' => $tanggal_awal,
                'tanggal_akhir' => $tanggal_akhir

            ]);
        // dd(request()->all());
    }

}
