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
    public function contentImage1(Request $request)
    {
        $this->validate($request, [
            'contentImage1' => 'required|mimes:jpeg,jpg|max:2048'
        ]);

        $contentImage1 = $request->file('contentImage1');
        $contentImage1->move('frontend/images', 'content-image01.jpg');

        return redirect()->route('admin.cms.photos');
    }
    public function sectionbg1(Request $request)
    {
        $this->validate($request, [
            'sectionbg1' => 'required|mimes:jpeg,jpg|max:2048'
        ]);

        $sectionbg1 = $request->file('sectionbg1');
        $sectionbg1->move('frontend/images', 'section-bg01.jpg');

        return redirect()->route('admin.cms.photos');
    }
    public function sectionbg2(Request $request)
    {
        $this->validate($request, [
            'sectionbg2' => 'required|mimes:jpeg,jpg|max:2048'
        ]);

        $sectionbg2 = $request->file('sectionbg2');
        $sectionbg2->move('frontend/images', 'section-bg01.jpg');

        return redirect()->route('admin.cms.photos');
    }
    public function side1(Request $request)
    {
        $this->validate($request, [
            'side1' => 'required|mimes:jpeg,jpg|max:2048'
        ]);

        $side1 = $request->file('side1');
        $side1->move('frontend/images', 'side-image01.jpg');

        return redirect()->route('admin.cms.photos');
    }
    public function side2(Request $request)
    {
        $this->validate($request, [
            'side2' => 'required|mimes:jpeg,jpg|max:2048'
        ]);

        $side2 = $request->file('side2');
        $side2->move('frontend/images', 'side-image02.jpg');

        return redirect()->route('admin.cms.photos');
    }
    public function side3(Request $request)
    {
        $this->validate($request, [
            'side3' => 'required|mimes:jpeg,jpg|max:2048'
        ]);

        $side3 = $request->file('side3');
        $side3->move('frontend/images', 'side-image03.jpg');

        return redirect()->route('admin.cms.photos');
    }
    public function side4(Request $request)
    {
        $this->validate($request, [
            'side4' => 'required|mimes:jpeg,jpg|max:2048'
        ]);

        $side4 = $request->file('side4');
        $side4->move('frontend/images', 'side-image04.jpg');

        return redirect()->route('admin.cms.photos');
    }
    public function side5(Request $request)
    {
        $this->validate($request, [
            'side5' => 'required|mimes:jpeg,jpg|max:2048'
        ]);

        $side5 = $request->file('side5');
        $side5->move('frontend/images', 'side-image05.jpg');

        return redirect()->route('admin.cms.photos');
    }
    public function side6(Request $request)
    {
        $this->validate($request, [
            'side6' => 'required|mimes:jpeg,jpg|max:2048'
        ]);

        $side6 = $request->file('side6');
        $side6->move('frontend/images', 'side-image06.jpg');

        return redirect()->route('admin.cms.photos');
    }
}
