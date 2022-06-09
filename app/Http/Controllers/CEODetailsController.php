<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\CeoDetails;
use Illuminate\Support\Str;
use Carbon\Carbon;
use Illuminate\Support\Facades\File;
use Intervention\Image\Facades\Image as Image;
use Illuminate\Contracts\Encryption\DecryptException;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Storage;
use Response;
use DB;

class CEODetailsController extends Controller
{
    public function list()
    {
        //
        $ceo = CeoDetails::all();
        $checkdataexists = CeoDetails::first();
        return view ('pages.CRUD_OPERATIONS.AboutUsPageCrudOperation.CEO_crud.list',compact('ceo','checkdataexists'));
    }

    public function create()
    {
        //
        $checkdataexists = CeoDetails::first();
        return view('pages.CRUD_OPERATIONS.AboutUsPageCrudOperation.CEO_crud.create',compact('checkdataexists'));
    }
    public function store(Request $request)
    {
        //
        $this->validate($request,[
            'name' => 'required|min:1|max:100|string',
            'designation' => 'required|min:3|max:100|string',
            'speech' => 'required|min:3|max:2000|string',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:15630',

        ],[
            'name.required' => 'Please write your name',
            'designation.required' => 'Please write your designation',
            'speech.required' => 'Please write your speech',
            'image.required' => 'Please upload your image',
        ]);

        $Ceo = new CeoDetails;
        $Ceo->name = $request->name;
        $Ceo->designation = $request->designation;
        $Ceo->speech = $request->speech;
        $image  = $request->file('image');
        Storage::putFile('public/img/',$image);
        $Ceo->image ="storage/img/".$image->hashName(); // if same image is again upload then it will be renamed that's why we use hashname when we try to save an image.
        $Ceo->save();
        return redirect()->route('ceoDetails.list')->with('success','CEO Details Deleted Successfully');
    }

    public function edit($id)
    {
        //
        $Ceo = CeoDetails::find($id); // Fetch specific id
        return view('pages.CRUD_OPERATIONS.AboutUsPageCrudOperation.CEO_crud.edit',compact('Ceo'));
    }

    public function update(Request $request, $id)
    {
        //
        $Ceo = CeoDetails::find($id);
        $Ceo->name = $data->name;
        $Ceo->designation = $data->designation;
        $Ceo->speech = $data->speech;
        if($request->file('image')){
            $image  = $data->file('image');
            Storage::putFile('public/img/',$image);
            $Ceo->image ="storage/img/".$image->hashName();
        }
    }

    public function destroy($id)
    {
        //
        $Ceo = CeoDetails::find($id);
        $Ceo->delete();
        return redirect()->route('ceoDetails.list')->with('success','Banner Deleted Successfully');
    }

    public function preview($id)
    {
        //
        $Ceo = CeoDetails::find($id);
        return view('pages.CRUD_OPERATIONS.AboutUsPageCrudOperation.CEO_crud.preview',compact('Ceo'));
    }
}
