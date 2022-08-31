<?php

namespace App\Http\Controllers\Photos;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Photo;
use Exception;
use Illuminate\Auth\Access\AuthorizationException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Validator;

class PhotosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       try {
           $categories = Category::pluck('name','id')->prepend('-')->toArray();
           return view('photos.create',compact('categories'));
       } catch (AuthorizationException $e) {
        Log::info($e->getMessage());
    }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        try {

            // $validated = Validator::make($request->all(),[
            //     $attributes = [
            //         'title' => 'required|unique:posts|max:255',
            //         'photo_root' => 'required',
            //     ],[]]);

            // if ($validated->fails()) {
            //     return redirect()->back()
            //     ->withErrors($attributes)
            //     ->withInput();
            // }



                // $photo = new Photo();
                // $photo->fill($request->all());
                // $photo->user_id = Auth::id();
                // $photo->path = $filename;
                // $photo->save();


              return redirect()->route('admin.add-photo')->with('success','Foto caricata con successo');

        } catch (Exception $e) {

            Log::info($e->getMessage());

        }

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
