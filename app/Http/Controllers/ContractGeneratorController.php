<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContracRequest;
use App\Models\Contract;
use App\Models\Link;
use Dompdf\Dompdf;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Storage;
use PDF;


class ContractGeneratorController extends Controller
{
    public function create(ContracRequest $req)
    {


        $contract = [
            'contract_number'=> $req->input('contract_number'),
            'firm_name'=>$req->input('our_organization'),
            'ogrn'=>$req->input('our_ogrn'),
            'inn'=>$req->input('our_inn'),
            'kpp'=>$req->input('our_kpp'),
            'adress'=>$req->input('our_adress'),
            'director_name'=>$req->input('our_director'),
            'phone'=>$req->input('our_phone'),
            'firm_name2'=>$req->input('counterparty_organization'),
            'ogrn2'=>$req->input('counterparty_ogrn'),
            'inn2'=>$req->input('counterparty_inn'),
            'kpp2'=>$req->input('counterparty_kpp'),
            'adress2'=>$req->input('counterparty_adress'),
            'director_name2'=>$req->input('counterparty_director'),
            'phone2'=>$req->input('counterparty_phone'),

        ];

        $pdf = new Dompdf();
        $pdf->setPaper('a4', 'landscape');
        $pdf = PDF::loadView('contract', compact('contract'));

        $fileName = $contract['contract_number'].'.pdf';
        $contractFile = $pdf->output();

        Storage::put('public/'.$fileName, $contractFile);

        $result = new Link();
        $result->contract_number = $fileName;
        $url = Storage::url($fileName);
        $result->link = $url;
        $result->save();
        echo $url;
        return redirect(route('contracts'));
    }

    public function index()
    {
        $linkList= Link::all();
        Paginator::useBootstrap();

        return view('contracts', compact('linkList'));
    }

    public function download($id)
    {
        return Storage::disk('public')->download($id);

    }
}


