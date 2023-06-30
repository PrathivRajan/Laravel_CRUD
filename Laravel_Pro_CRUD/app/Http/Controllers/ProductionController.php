<?php
namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;
use App\Models\Production;

class ProductionController extends Controller
{
    public function storeProduction(Request $request)
    {
        $userData = $request->validate([
            'project' => 'required|string',
            'pc_name' => 'required|string',
            'tl_name' => 'required|string',
            'published_at' => 'required|date_format:Y-m-d|after_or_equal:' . date(DATE_ATOM),
            'topper_count' => 'required|integer',
            'topper_quality' => 'required|integer',
            // 'overall_count' => 'required|integer',
            // 'overall_quality' => 'required|integer',
        ]);
        DB::beginTransaction();
        try
        {
            $productionsdata = new Production;
            $productionsdata->project = $request->project;
            $productionsdata->pc_name = $request->pc_name;
            $productionsdata->tl_name = $request->tl_name;
            $productionsdata->published_at = $request->published_at;
            $productionsdata->topper_count = $request->topper_count;
            $productionsdata->topper_quality = $request->topper_quality;
            // $productionsdata->overall_count = $request->overall_count;
            // $productionsdata->overall_quality = $request->overall_quality;
            $productionsdata->save();
            DB::commit();
            return redirect()->back()->with('status', 'Production Details Saved Successfully');
        }
        catch (\Exception $error)
        {
            DB::rollback();
            return redirect()->back()->with('status', 'Something Went Wrong');
        }
    }
    public function editProduction(Request $request, Production $editproductionsdata)
    {
        $userData = $request->validate([
            'project' => 'required|string',
            'pc_name' => 'required|string',
            'tl_name' => 'required|string',
            'published_at' => 'required|date_format:Y-m-d|after_or_equal:' . date(DATE_ATOM),
            'topper_count' => 'required|integer',
            'topper_quality' => 'required|integer',
            // 'overall_count' => 'required|integer',
            // 'overall_quality' => 'required|integer',
        ]);
        DB::beginTransaction();
        try
        {
            $editproductionsdata->project = $request->project;
            $editproductionsdata->pc_name = $request->pc_name;
            $editproductionsdata->tl_name = $request->tl_name;
            $editproductionsdata->published_at = $request->published_at;
            $editproductionsdata->topper_count = $request->topper_count;
            $editproductionsdata->topper_quality = $request->topper_quality;
            // $productionsdata->overall_count = $request->overall_count;
            // $productionsdata->overall_quality = $request->overall_quality;
            $editproductionsdata->save();
            DB::commit();
            return redirect()->back()->with('status', 'Production Details Updated Successfully');
        }
        catch (\Exception $error)
        {
            DB::rollback();
            return redirect()->back()->with('status', 'Something Went Wrong');
        }
    }
    public function showProductions()
    {
           $productionDataLists = Production::filterSearchable()->paginate(10);
            return view('productions.index', ['productionDataLists' => $productionDataLists]);
    }
    public function remove(Production $id)
    {
            $id->delete();
            return redirect()->back()->with('status', 'Removed Successfully');
    }
    public function changestatus(Production $id)
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
    public function select(Production $id)
    {
        return $id;
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
