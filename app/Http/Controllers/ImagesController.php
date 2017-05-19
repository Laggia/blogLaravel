<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ImagesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $images = \App\Image::orderBy('id','desc')->paginate(5);
        $images->each(function($images){
            $images->article;
        });
        return view('admin/images/index')
            ->with('images',$images);
    }

    
}
