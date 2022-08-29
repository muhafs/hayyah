<?php

namespace App\Http\Controllers\Admin;

use App\Models\Gallery;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\TravelPackage;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\Admin\GalleryRequest;

class GalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $galleries = Gallery::with('travel_package')->get();

        return view('pages.admin.gallery.index', compact('galleries'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $packages = TravelPackage::all();

        return view('pages.admin.gallery.create', compact('packages'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(GalleryRequest $request)
    {
        $data = $request->all();
        // $data['image'] = $request->file('image')->store('assets/gallery', 'public');

        // Extract Image File
        $image = $request->file('image');
        // Create Image Name
        $image_name = 'IMG_' . $request->travel_package_id . '_' . time() . '.' . $image->extension();

        // Create Thumbnail's Path
        $directory = 'assets/gallery';
        $destination_path = public_path('storage/' . $directory);

        // Check/Create Thumbnail's Directory
        if (!File::exists($destination_path)) {
            File::makeDirectory($destination_path, 0755, true);
        }

        // Store Thumbnail into its destination Path
        Image::make($image)
            // ->resize(500, 500, function ($constraint) {
            //     $constraint->aspectRatio();
            // })
            // ->crop(500, 500, 25, 25)
            ->save($destination_path . '/' . $image_name);

        // Get Full Path and store it into Database
        $data['image'] = $directory . '/' . $image_name;
        Gallery::create($data);

        return redirect()->route('gallery.index')->with('success', 'Gallery Has been created successfully !');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Gallery $gallery)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Gallery $gallery)
    {
        $packages = TravelPackage::all();

        return view('pages.admin.gallery.edit', compact('gallery', 'packages'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(GalleryRequest $request, Gallery $gallery)
    {
        $data = $request->only('travel_package_id');

        if ($request->hasFile('image')) {
            // If there is an Old Image, Delete it first
            if ($gallery->image != null && Storage::disk('public')->exists($gallery->image)) {
                Storage::disk('public')->delete($gallery->image);
            }

            // $data['image'] = $request->file('image')->store('assets/gallery', 'public');

            // Extract Image File
            $image = $request->file('image');
            // Create Image Name
            $image_name = 'IMG_' . $request->travel_package_id . '_' . time() . '.' . $image->extension();

            // Create Thumbnail's Path
            $directory = 'assets/gallery';
            $destination_path = public_path('storage/' . $directory);

            // Check/Create Thumbnail's Directory
            if (!File::exists($destination_path)) {
                File::makeDirectory($destination_path, 0755, true);
            }

            // Store Thumbnail into its destination Path
            Image::make($image)
                // ->resize(500, 500, function ($constraint) {
                //     $constraint->aspectRatio();
                // })
                // ->crop(500, 500, 25, 25)
                ->save($destination_path . '/' . $image_name);

            // Get Full Path and store it into Database
            $data['image'] = $directory . '/' . $image_name;
        }

        $gallery->update($data);
        return redirect()->route('gallery.index')->with('success', 'Gallery Has been updated successfully !');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Gallery $gallery)
    {
        if ($gallery->image != null && Storage::disk('public')->exists($gallery->image)) {
            Storage::disk('public')->delete($gallery->image);
        }

        $gallery->delete();

        return redirect()->route('gallery.index')->with('success', 'Gallery Has been deleted successfully !');
    }
}
