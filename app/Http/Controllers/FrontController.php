<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreAppointmentRequest;
use App\Models\Appointment;
use App\Models\CompanyAbout;
use App\Models\CompanyStatistic;
use App\Models\HeroSection;
use App\Models\OurPrinciple;
use App\Models\OurTeam;
use App\Models\Product;
use App\Models\Testimonial;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FrontController extends Controller
{
    //

    public function index(){
        $statistics = CompanyStatistic::orderByDesc('id')->take(4)->get();
        $hero_sections = HeroSection::take(1)->get();
        $principles = OurPrinciple::take(4)->get();
        $products = Product::take(3)->get();
        $teams = OurTeam::take(7)->get();
        $testimonials = Testimonial::take(4)->get();
        return view('front.index', compact('statistics', 'principles', 'products', 'teams', 'testimonials', 'hero_sections'));
    }

    public function team(){
        $teams = OurTeam::take(7)->get();
        return view('front.team', compact('teams'));
    }
    public function about(){
        $abouts = CompanyAbout::take(2)->get();
        return view('front.about', compact('abouts'));
    }

    public function appointment(){
         $products = Product::take(3)->get();
        return view('front.appointment', compact('products'));
    }

    public function appointment_store(StoreAppointmentRequest $request){
            DB::transaction(function () use ($request){
                $validated = $request->validated();

                $newAppointment = Appointment::create($validated);
            });

            return redirect()->route('front.index');
    }
}
