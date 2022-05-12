<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Storage; // For Image insert & Edit we use Laravel Illuminate 
use Illuminate\Http\Request;
use App\Models\brands;
class BrandsCollabWithController extends Controller
{
    public function list()
    {
        //
        $brands = brands::all();
        return view ('pages.CRUD_OPERATIONS.AboutUsPageCrudOperation.brands_crud.list',compact('brands'));
    }

    public function create()
    {
        //
        return view('pages.CRUD_OPERATIONS.AboutUsPageCrudOperation.brands_crud.create');
    }

    public function store(Request $request)
    {
        $this->validate($request,[
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:15630',

        ],[
            'image.required' => 'Please upload your image', // Image is required in banner.
        ]);
        $brands = new brands;
        $image  = $request->file('image');
        Storage::putFile('public/img/',$image);
        $brands->image ="storage/img/".$image->hashName(); // if same image is again upload then it will be renamed that's why we use hashname when we try to save an image.
        $brands->save();
        return redirect()->route('brands.list')->with('success','Brand Image Inserted Successfully'); // redirect to banner create page with a success message.

    }

    public function edit($id)
    {
        //
        $brands = brands::find($id); // Fetch specific banner id
        return view('pages.CRUD_OPERATIONS.AboutUsPageCrudOperation.brands_crud.edit',compact('brands'));
    }

    public function update(Request $request, $id)
    {
        // Fetch Specific single banner
        $brands = brands::find($id);
        if($request->file('image')){
            $image  = $request->file('image');
            Storage::putFile('public/img/',$image);
            $brands->image ="storage/img/".$image->hashName();
        }
        $brands->save();
        return redirect()->route('brands.list')->with('success','Image updated Successfully');
    }

    public function destroy($id)
    {
        //
        $brands = brands::find($id);
        $brands->delete();
        return redirect()->route('brands.list')->with('success','Banner Deleted Successfully');
    }
}
