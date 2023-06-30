<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;
use App\Models\IndividualProduction;

class IndividualProductionController extends Controller
{
    public function storeIndividualProductions(Request $request)
    {
        $userData = $request->validate([
            'project' => 'required|string',
            'pc_name' => 'required|string',
            'tl_name' => 'required|string',
            'coder_name' => 'required|string',
            'coder_id' => 'required|integer',
            'count' => 'required|integer',
            'quality' => 'required|integer',
            'file_path' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
        ]);
        DB::beginTransaction();
            try
            {
                $individualproductionsdata = new IndividualProduction;
                $individualproductionsdata->project = $request->project;
                $individualproductionsdata->pc_name = $request->pc_name;
                $individualproductionsdata->tl_name = $request->tl_name;
                $individualproductionsdata->coder_name = $request->coder_name;
                $individualproductionsdata->coder_id = $request->coder_id;
                $individualproductionsdata->count = $request->count;
                $individualproductionsdata->quality = $request->quality;
                if($request->hasFile('file_path'))
                {
                    $file_path  = $request->file('file_path');
                    $filename = $file_path->getClientOriginalName();
                    $file_path->move('uploads', $filename);
                }
                $individualproductionsdata->file_path = $filename;
                $individualproductionsdata->save();
                DB::commit();
                return redirect()->back()->with('status', 'Individual Production Details Saved Successfully');
            }
            catch (\Exception $error)
            {
                DB::rollback();
                return redirect()->back()->with('status', 'Individual Something Went Wrong');
            }
    }
    public function editIndividualProductions(Request $request, IndividualProduction $editindividualproductionsdata)
    {
        $userData = $request->validate([
            'project' => 'required|string',
            'pc_name' => 'required|string',
            'tl_name' => 'required|string',
            'coder_name' => 'required|string',
            'coder_id' => 'required|integer',
            'count' => 'required|integer',
            'quality' => 'required|integer',
            //'file_path' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
        ]);
        DB::beginTransaction();
            try
            {
                $editindividualproductionsdata->project = $request->project;
                $editindividualproductionsdata->pc_name = $request->pc_name;
                $editindividualproductionsdata->tl_name = $request->tl_name;
                $editindividualproductionsdata->coder_name = $request->coder_name;
                $editindividualproductionsdata->coder_id = $request->coder_id;
                $editindividualproductionsdata->count = $request->count;
                $editindividualproductionsdata->quality = $request->quality;
                if($request->hasFile('file_path'))
                {
                    $file_path  = $request->file('file_path');
                    $filename = $file_path->getClientOriginalName();
                    $file_path->move('uploads', $filename);
                }
                else
                {
                    $filename = $editindividualproductionsdata->file_path;
                }
                $editindividualproductionsdata->file_path = $filename;
                $editindividualproductionsdata->save();
                DB::commit();
                return redirect()->back()->with('status', 'Individual Production Details Saved Successfully');
            }
            catch (\Exception $error)
            {
                DB::rollback();
                return redirect()->back()->with('status', 'Individual Something Went Wrong');
            }
    }
    public function showIndividualProductions()
    {
            $individualproductionDataList = IndividualProduction::all();
            return view('individual-productions.index', ['individualproductionDataList' => $individualproductionDataList]);
    }

    public function remove(IndividualProduction $individual_production)
    {
            $individual_production->delete();
            return redirect()->back()->with('status', 'Removed Successfully');
    }

    public function changestatus(IndividualProduction $id)
    {
            if($id->status == 'active')
            {
                $id->status = 'inactive';
            }
            elseif($id->status == 'inactive')
            {
                $id->status = 'active';
            }
            $id->save();
            return redirect()->back()->with('status', 'Status Changed Successfully');
    }
}
