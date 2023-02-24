<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreYouthRequest;
use App\Http\Requests\UpdateYouthRequest;
use App\Imports\YouthsImport;
use App\Models\Youth;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class YouthController extends Controller
{
    public function import(Request $request)
    {
        Excel::import(new YouthsImport, $request->file('import_data')->store('youths'));

        return to_route('web.youth.index');
    }
    public function index()
    {
        return view('pages.youth.index');
    }
    public function create()
    {
        //
    }
    public function store(StoreYouthRequest $request)
    {
        //
    }
    public function show(Youth $youth)
    {
        //
    }
    public function edit(Youth $youth)
    {
        //
    }
    public function update(UpdateYouthRequest $request, Youth $youth)
    {
        //
    }
    public function destroy(Youth $youth)
    {
        //
    }
}
