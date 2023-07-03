<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\About;
use App\Models\News;
use App\Models\Contact;
use App\Models\Slider;
use App\Models\Service;
use App\Models\Certificate;
use App\Models\Gallery;
use App\Models\Client;
use App\Models\Location;
use App\Models\Management;

class HomeController extends Controller
{
    public function index()
    {
        $sliders = Slider::all();
        $about = About::first();
        $contact = Contact::first();

        return view('home.index', compact(
            'sliders',
            'about',
            'contact',
        ));
    }

    public function about()
    {
        $about = About::first();
        $clients = Client::all();
        $contact = Contact::first();

        return view('home.about', compact(
            'about',
            'clients',
            'contact',
        ));
    }

    public function management()
    {
        $managements = Management::all();
        $about = About::first();
        $contact = Contact::first();

        return view('home.management', compact(
            'managements',
            'about',
            'contact',
        ));
    }

    public function gallery()
    {
        $gallery = Gallery::all();
        $contact = Contact::first();
        $about = About::first();

        return view('home.gallery', compact(
            'gallery',
            'about',
            'contact',
        ));
    }

    public function contact()
    {
        $contact = Contact::first();
        $about = About::first();
        $location = Location::all();

        return view('home.contact', compact(
            'contact',
            'about',
            'location',
        ));
    }

    public function certificate()
    {
        $certificate = Certificate::all();
        $contact = Contact::first();
        $about = About::first();

        return view('home.certificate', compact(
            'certificate',
            'contact',
            'about',
        ));
    }

    public function services()
    {
        $services = Service::orderBy('created_at', 'Asc')->get();
        $contact = Contact::first();
        $about = About::first();

        return view('home.services', compact(
            'services',
            'contact',
            'about',
        ));
    }

    public function news()
    {
        $news = News::orderBy('date', 'Desc')->get();
        $contact = Contact::first();
        $about = About::first();

        return view('home.news', compact(
            'news',
            'contact',
            'about',
        ));
    }
}
