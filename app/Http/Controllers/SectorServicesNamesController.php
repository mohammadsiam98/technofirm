<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SectorServicesNames;
class SectorServicesNamesController extends Controller
{
    public function list()
    {
        //
        $sector_services_name_heading = SectorServicesNames::all();
        return view ('pages.CRUD_OPERATIONS.DynamicServicesInOnePage.SectorServicesNames_crud.list',compact('sector_services_name_heading'));
    }

    public function create()
    {
        //
        return view('pages.CRUD_OPERATIONS.DynamicServicesInOnePage.SectorServicesNames_crud.create');
    }

    public function store(Request $request)
    {
        $this->validate($request,[
            'Sector_service_name' => 'required|min:3|max:100|string',
        ],[
            'categoryName.required' => 'Please write your heading', 
        ]);
        $sector_services_name_heading = new SectorServicesNames;
        $sector_services_name_heading->Sector_service_name = $request->Sector_service_name;
        $sector_services_name_heading->save();
        return redirect()->route('SectorServicesNames.list')->with('success','New Category Created Successfully'); // redirect to banner create page with a success message.

    }

    public function edit($id)
    {
        //
        $sector_services_name_heading = SectorServicesNames::find($id); 
        return view('pages.CRUD_OPERATIONS.DynamicServicesInOnePage.SectorServicesNames_crud.edit',compact('sector_services_name_heading'));
    }

    public function update(Request $request, $id)
    {
        $sector_services_name_heading = SectorServicesNames::find($id);
        $sector_services_name_heading->Sector_service_name = $request->Sector_service_name;
        $sector_services_name_heading->save();
        return redirect()->route('SectorServicesNames.list')->with('success','Updated Successfully');
    }

    public function destroy($id)
    {
        //
        $sector_services_name_heading = SectorServicesNames::find($id);
        $sector_services_name_heading->delete();
        return redirect()->route('SectorServicesNames.list')->with('success','Deleted Successfully');
    }
}
