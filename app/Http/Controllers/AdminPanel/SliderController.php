<?php

namespace App\Http\Controllers\AdminPanel;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use App\Models\Slider;
use Intervention\Image\Facades\Image;

class SliderController extends Controller
{
    public function SliderView(){
        $sliders = Slider::latest()->get();
        return view('admin.slider.slider_view', compact('sliders'));
    }

    public function SliderStore(Request $request){

        $request->validate([
                'slider_image' => 'required',
            ],
            [
                'slider_image.required' => 'Slider needs an image'
            ]
    
    
        );

        $image = $request->file('slider_image');
        $image_name = hexdec(uniqid()). '.' . $image->getClientOriginalExtension();
        Image::make($image)->resize(870,370)->save('upload/slider/'. $image_name);
        $image_path = 'upload/slider/'. $image_name;

        Slider::insert([
            'title' => $request->title,
            'description' => $request->description,
            'slider_image' => $image_path,
        ]);

        $notification = array(
            'message' => 'Slider Inserted Successfully',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);
    }

    public function SliderEdit($id){

        $slider = Slider::findOrFail($id);
        return view('admin.slider.slider_edit', compact('slider'));

    }

    public function SliderUpdate(Request $request, $id){


        $slider = Slider::findOrFail($id);
        $slider->title = $request->title;
        $slider->description = $request->description;

        if($request->file('slider_image')){
            $image = $request->file('slider_image');
            $image_name = hexdec(uniqid()). '.' . $image->getClientOriginalExtension();
            Image::make($image)->resize(300,300)->save('upload/slider/'. $image_name);
            $image_path = 'upload/slider/'. $image_name;
            @unlink($slider->slider_image);

            $slider->slider_image = $image_path;
        }

        $slider->save();


        $notification = array(
            'message' => 'Slider Updated Successfully',
            'alert-type' => 'info'
        );

        return redirect()->route('all.slider')->with($notification);

    }

    public function SliderDelete($id){
        $slider = Slider::findOrFail($id);
        @unlink($slider->slider_image);

        $slider->delete();

        $notification = array(
            'message' => 'Slider Deleted Successfully',
            'alert-type' => 'warning'
        );

        return redirect()->back()->with($notification);
    }


    public function SliderActive($id){

        $slider = Slider::findOrFail($id);
        $slider->update([
            "status" => 1,
        ]);

        $notification = array(
            'message' => 'Slider Activated Successfully',
            'alert-type' => 'info'
        );

        return redirect()->back()->with($notification);
    }

    public function SliderInactive($id){

        $slider = Slider::findOrFail($id);
        $slider->update([
            "status" => 0,
        ]);

        $notification = array(
            'message' => 'Slider Inactivated Successfully',
            'alert-type' => 'info'
        );

        return redirect()->back()->with($notification);
    }
}
