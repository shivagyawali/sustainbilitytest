<?php

namespace App\Http\Controllers\Frontend;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class PagesController extends Controller
{

    public function registration()
    {
        return view('register');
    }
    public function governance()
    {
        return view('governance');
    }
    public function energy()
    {
        return view('energy');
    }
    public function water()
    {
        return view('water');
    }
    public function procurement()
    {
        return view('procurement');
    }
    public function GHGEmission()
    {
        return view('GHG-Emission');
    }
    public function nonghgemission()
    {
        return view('non-ghg-emission');
    }
    public function waste()
    {
        return view('waste');
    }
    public function Encroachment()
    {
        return view('Encroachment');
    }
    public function wages()
    {
        return view('wages');
    }
    public function health()
    {
        return view('health');
    }
    public function terms()
    {
        return view('terms');
    }
    public function discrimination()
    {
        return view('discrimination');
    }
    public function ethicalpractices()
    {
        return view('ethical-practices');
    }
    public function positiveimpacts()
    {
        return view('positive-impacts');
    }
    public function ESGscores()
    {
        return view('ESGscores');
    }
    public function SDGscores()
    {
        return view('SDG-scores');
    }
    public function capitalscores()
    {
        return view('capitalscores');
    }
    public function takeAction()
    {


        return view('takeAction');
    }
    public function store()
    {
        $users = User::where('phone', request('phone'))->first();
        $name = User::where('name', request('name'))->first();
        $address = User::where('address', request('address'))->first();

        if (!$users && !$name && !$address) {

            User::create(request()->all());

            return redirect('/')->with('success', "Saved To database");
        } else {
            return redirect()->back()->with('error', "Already on Database");;
        }
    }
}
