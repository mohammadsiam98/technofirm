<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use App\Models\SectorTechnologiesName;
use App\Models\StackTech;
class SectorStackTechnologiesController extends Controller
{
    public function list()
    {
        //
        $stackDetails = StackTech::all();
        return view ('pages.CRUD_OPERATIONS.DynamicServicesInOnePage.stackDetails_crud.list',compact('stackDetails')); 
    }

    public function create()
    {
        //
        $stackList = SectorTechnologiesName::all();
        return view('pages.CRUD_OPERATIONS.DynamicServicesInOnePage.stackDetails_crud.create',compact('stackList'));
    }

    public function store(Request $request)
    {
        //
        $stackDetails = new StackTech;
        $stackDetails->stack_id =$request-> stack_id;
        
        $stackDetails->stackName = $request->stackName;      
        $stackDetails->details= $request->details;

        $image  = $request->file('image');
        Storage::putFile('public/img/',$image);
        $stackDetails->image ="storage/img/".$image->hashName();

        $stackDetails->save();
        return redirect()->route('sector_technologies_details.list')->with('success','Created Successfully');
    }

    public function edit($id)
    {
        //
        $stackDetails = StackTech::find($id); 
        $stackList = SectorTechnologiesName::all();
        return view('pages.CRUD_OPERATIONS.DynamicServicesInOnePage.stackDetails_crud.edit',compact('stackDetails','stackList'));
    }

    public function update(Request $request, $id)
    {
        //
        $stackDetails = StackTech::find($id);
        $stackDetails->stack_id =$request->stack_id;
        $stackDetails->stackName = $request->stackName;      
        $stackDetails->details= $request->details;

        if($request->file('image')){
            $image  = $request->file('image');
            Storage::putFile('public/img/',$image);
            $stackDetails->image ="storage/img/".$image->hashName();
        }
        $stackDetails->save();
        return redirect()->route('sector_technologies_details.list')->with('success',"Deleted Successfully");
    }

    public function destroy($id)
    {
        //
        $stackDetails = StackTech::find($id);
        $stackDetails->delete();
        return redirect()->route('sector_technologies_details.list')->with('success',"Deleted Successfully");
    }

    public function sector_technologies_detailsStatus(Request $request)
    {
        $stackDetails = StackTech::find($request->stackDetails_id);
        $stackDetails->status = $request->status;
        $stackDetails->save(); 
        return redirect()->route('sector_technologies_details.list')->with('success',"Activated Successfully");
    }


    public function preview($id)
    {
        //
        $stackDetails = StackTech::find($id);
        return view('pages.CRUD_OPERATIONS.DynamicServicesInOnePage.stackDetails_crud.preview',compact('stackDetails'));
    }


    public function restoreList()
    {
        //
        $stackDetails = StackTech::onlyTrashed()->get();
        return view ('pages.CRUD_OPERATIONS.DynamicServicesInOnePage.stackDetails_crud.restoreList',compact('stackDetails'));
    }


    public function restoreData($id)
    {
        //
        $stackDetails = StackTech::onlyTrashed()->find($id)->restore();
        return redirect()->route('sector_technologies_details.restoreList')->with('success',"Restored Successfully");
    }


    public function forceDelete($id)
    {
        //
        $stackDetails = StackTech::onlyTrashed()->find($id)->forceDelete();
        return redirect()->route('sector_technologies_details.restoreList')->with('success',"Permanently Deleted Successfully");
    }
}
