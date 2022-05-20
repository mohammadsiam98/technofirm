<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SectorTechnologiesName;
class Sector_Technologies_Name_Heading extends Controller
{
    public function list()
    {
        //
        $sector_Technology_head = SectorTechnologiesName::all();
        return view ('pages.CRUD_OPERATIONS.DynamicServicesInOnePage.SectorTechnologiesNames_crud.list',compact('sector_Technology_head'));
    }

    public function create()
    {
        //
        return view('pages.CRUD_OPERATIONS.DynamicServicesInOnePage.SectorTechnologiesNames_crud.create');
    }

    public function store(Request $request)
    {
        $this->validate($request,[
            'Sector_technologies_name_heading' => 'required|min:3|max:100|string',
        ],[
            'Sector_technologies_name_heading.required' => 'Please write your heading', 
        ]);
        $sector_Technology_head = new SectorTechnologiesName;
        $sector_Technology_head->Sector_technologies_name_heading = $request->Sector_technologies_name_heading;
        $sector_Technology_head->save();
        return redirect()->route('SectorTechnologyHeading.list')->with('success','Created Successfully'); 
    }

    public function edit($id)
    {
        //
        $sector_Technology_head = SectorTechnologiesName::find($id); 
        return view('pages.CRUD_OPERATIONS.DynamicServicesInOnePage.SectorTechnologiesNames_crud.edit',compact('sector_Technology_head'));
    }

    public function update(Request $request, $id)
    {
        $sector_Technology_head = SectorTechnologiesName::find($id);
        $sector_Technology_head->Sector_technologies_name_heading = $request->Sector_technologies_name_heading;
        $sector_Technology_head->save();
        return redirect()->route('SectorTechnologyHeading.list')->with('success','Updated Successfully');
    }

    public function destroy($id)
    {
        //
        $sector_Technology_head = SectorTechnologiesName::find($id);
        $sector_Technology_head->delete();
        return redirect()->route('SectorTechnologyHeading.list')->with('success','Deleted Successfully');
    }
}
