<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Ptmoney;
use Illuminate\Http\Request;

class PtmoneyController extends Controller
{
    public function index()
    {
        $ptmoneys = Ptmoney::all();
        return view('backend.pages.admin.trainer.moneytable.index',compact('ptmoneys'));
    }

    public function destroy(Ptmoney $ptmoney)
    {
        $ptmoney->delete();
        return redirect()->route('ptmoney.index')->with('success', "Personal Training Deleted Successfullly");
    }
}
