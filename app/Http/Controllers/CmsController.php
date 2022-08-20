<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;

class CmsController extends Controller
{
    public function slider1(Request $request)
    {
        $this->validate($request, [
            'slider1' => 'required|mimes:jpeg,jpg|max:2048'
        ]);

        $slider1 = $request->file('slider1');
        $slider1->move('frontend/images', 'slide01.jpg');

        return redirect()->route('admin.cms.photos');
    }
    public function slider2(Request $request)
    {
        $this->validate($request, [
            'slider2' => 'required|mimes:jpeg,jpg|max:2048'
        ]);

        $slider2 = $request->file('slider2');
        $slider2->move('frontend/images', 'slide02.jpg');

        return redirect()->route('admin.cms.photos');
    }
    public function slider3(Request $request)
    {
        $this->validate($request, [
            'slider3' => 'required|mimes:jpeg,jpg|max:2048'
        ]);

        $slider3 = $request->file('slider3');
        $slider3->move('frontend/images', 'slide03.jpg');

        return redirect()->route('admin.cms.photos');
    }
    public function contentImage(Request $request)
    {
        $this->validate($request, [
            'contentImage' => 'required|mimes:jpeg,jpg|max:2048'
        ]);

        $contentImage = $request->file('contentImage');
        $contentImage->move('frontend/images', 'content-image01.jpg');

        return redirect()->route('admin.cms.photos');
    }
}
