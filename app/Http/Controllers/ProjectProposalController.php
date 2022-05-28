<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProjectProposal;
class ProjectProposalController extends Controller
{
    public function list()
    {
        //
        $ProjectProposalDetails = ProjectProposal::all();
        return view ('pages.CRUD_OPERATIONS.ProjectProposalCrudOperation.ProjectProposal_crud.list',compact('categoryDetails'));
    }

    public function store(Request $data)
    {
        $ProjectProposalDetails = new ProjectProposal;
        $ProjectProposalDetails->details = $data->details;
        $ProjectProposalDetails->full_name = $data->full_name;
        $ProjectProposalDetails->mobile_number = $data->mobile_number;
        $ProjectProposalDetails->ref_website = $data->ref_website;
        $ProjectProposalDetails->email = $data->email;

        $arrayToString = implode(',',$data->input('servicesSelected'));
        $ProjectProposalDetails['servicesSelected'] =$arrayToString;
        $ProjectProposalDetails->save();

    }

    public function edit($id)
    {
        //
        $ProjectProposalDetails = ProjectProposal::find($id); // Fetch specific banner id
        return view('pages.CRUD_OPERATIONS.ProjectProposalCrudOperation.ProjectProposal_crud.edit',compact('categoryDetails'));
    }

    public function update(Request $request, $id)
    {
        $ProjectProposalDetails = ProjectProposal::find($id);
        $ProjectProposalDetails->categoryName = $request->categoryName;
        $ProjectProposalDetails->save();
        return redirect()->route('ProjectProposal.list')->with('success','Updated Successfully');
    }

    public function destroy($id)
    {
        //
        $ProjectProposalDetails = ProjectProposal::find($id);
        $ProjectProposalDetails->delete();
        return redirect()->route('ProjectProposal.list')->with('success','Deleted Successfully');
    }
}
