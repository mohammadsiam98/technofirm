<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage; // For Image insert & Edit we use Laravel Illuminate 
use App\Models\Banner; // Banner Model Import 
class BannerController extends Controller
{ 
    public function list()
    {
        //
        $banner = Banner::all();
        return view ('pages.CRUD_OPERATIONS.HomePageCrudOperation.Banner_crud.list',compact('banner'));
    }

    public function create()
    {
        //
        return view('pages.CRUD_OPERATIONS.HomePageCrudOperation.Banner_crud.create');
    }

    public function store(Request $request)
    {
        $this->validate($request,[
            'heading' => 'required|min:3|max:100|string',
            'subheading' => 'required|min:3|max:100|string',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:15630',

        ],[
            'heading.required' => 'Please write your slider heading', // admin have to write banner title.
            'heading.min' => 'Slider heading should be at least minimum 3 characters', // title should be at least minimum 3 characters.
            'heading.max' => 'Slider heading should be maximum 100 characters', // title should not be maximum 100 character

            'subheading.required' => 'Please write your slider sub heading', // admin have to write banner title.
            'subheading.min' => 'Slider sub heading should be at least minimum 3 characters', // title should be at least minimum 3 characters.
            'subheading.max' => 'Slider sub heading should be maximum 100 characters', // title should not be maximum 100 character


            'image.required' => 'Please upload your image', // Image is required in banner.
        ]);
        $banner = new Banner;
        $banner->heading = $request->heading;
        $banner->subheading = $request->subheading;
        $image  = $request->file('image');
        Storage::putFile('public/img/',$image);
        $banner->image ="storage/img/".$image->hashName(); // if same image is again upload then it will be renamed that's why we use hashname when we try to save an image.
        $banner->save();
        return redirect()->route('Banner.list')->with('success','New Banner created Successfully'); // redirect to banner create page with a success message.

    }

    public function edit($id)
    {
        //
        $banner = Banner::find($id); // Fetch specific banner id
        return view('pages.CRUD_OPERATIONS.HomePageCrudOperation.Banner_crud.edit',compact('banner'));
    }

    public function update(Request $request, $id)
    {
        // Fetch Specific single banner
        $banner = Banner::find($id);
        $banner->heading = $request->heading;
        $banner->subheading = $request->subheading;
        if($request->file('image')){
            $image  = $request->file('image');
            Storage::putFile('public/img/',$image);
            $banner->image ="storage/img/".$image->hashName();
        }
        $banner->save();
        return redirect()->route('Banner.list')->with('success','Banner details updated Successfully');
    }

    public function destroy($id)
    {
        //
        $banner = Banner::find($id);
        $banner->delete();
        return redirect()->route('Banner.list')->with('success','Banner Deleted Successfully');
    }

    public function updateStatus(Request $request)
    {
        $banner = Banner::find($request->banner_id);
        $banner->status = $request->status;
        $banner->save(); 
        return redirect()->route('Banner.list')->with('success',"Banner Activated Successfully");
    }


    public function preview($id)
    {
        //
        $banner = Banner::find($id);
        return view('pages.CRUD_OPERATIONS.HomePageCrudOperation.Banner_crud.preview',compact('banner'));
    }


    public function restoreList()
    {
        //
        $banner = Banner::onlyTrashed()->get();
        return view ('pages.CRUD_OPERATIONS.HomePageCrudOperation.Banner_crud.restoreList',compact('banner'));
    }


    public function restoreData($id)
    {
        //
        $banner = Banner::onlyTrashed()->find($id)->restore();
        return redirect()->route('Banner.restoreList')->with('success',"Banner Restored Successfully");
    }


    public function forceDelete($id)
    {
        //
        $banner = Banner::onlyTrashed()->find($id)->forceDelete();
        return redirect()->route('Banner.restoreList')->with('success',"Banner Permanently Deleted Successfully");
    }
}
