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
            'designation' => 'required|string',
            'speech' => 'required|string',
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

        $image= $request->file('image');
        $IMGNAME = Str::random(10).'.'. $image->getClientOriginalExtension();       
        $ceo_image = 'images/CEO_Image/'. Carbon::now()->format('Y/M/').'/';
        //Make Directory 
        File::makeDirectory($ceo_image, $mode=0777, true, true);        
        //save Image to the thumbnail path
        Image::make($image)->save(public_path($ceo_image.$IMGNAME));
        $Ceo->image = $IMGNAME;
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
        $Ceo->name = $request->name;
        $Ceo->designation = $request->designation;
        $Ceo->speech = $request->speech;
        if($request->hasFile('image')){
            $image= $request->file('image');
            $IMGNAME = Str::random(10).'.'. $image->getClientOriginalExtension();       
            $ceo_image = 'images/CEO_Image/'. Carbon::now()->format('Y/M/').'/';

            //Make Directory 
            File::makeDirectory($ceo_image, $mode=0777, true, true);        
            //save Image to the thumbnail path
            Image::make($image)->save(public_path($ceo_image.$IMGNAME));

            //Delete previous Image
            $old_img_location = public_path('images/CEO_Image/'.$Ceo->created_at->format('Y/M/').'/'.$Ceo->image);
            if(file_exists($old_img_location)){
               unlink($old_img_location);
            }                
            //saving the new image
            $Ceo->image = $IMGNAME;
        }
        $Ceo->save();
        return redirect()->route('ceoDetails.list')->with('success','Details updated Successfully');
    }

    public function destroy($id)
    {
        //
        $Ceo = CeoDetails::find($id);
        $Ceo->delete();
        return redirect()->route('ceoDetails.list')->with('success','Deleted Successfully');
    }

    public function preview($id)
    {
        //
        $Ceo = CeoDetails::find($id);
        return view('pages.CRUD_OPERATIONS.AboutUsPageCrudOperation.CEO_crud.preview',compact('Ceo'));
    }
}
