<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\City;
use App\Models\State;
use App\Models\Country;
use App\Models\User;

class LocationController extends Controller
{
    public function getAllCountries(Request $request) {
        $array = ['error' => ''];

        $countries = Country::orderBy('name', 'asc')->get();

        $array['countries'] = $countries;

        return $array;
    }

    public function getAllStates(Request $request) {
        $array = ['error' => ''];

        $states = State::orderBy('name', 'asc')->get();

        $array['states'] = $states;

        return $array;
    }
}
