<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Shop\Insurance;
use App\Models\Shop\Products;
use Carbon\Carbon;

/**
 * Class HomeController.
 */
class HomeController extends Controller
{
    /**
     * @return \Illuminate\View\View
     */
private $insurance_date = null;
private $oc_health_date = null;

    public function index()
    {

        $oc_health = Products::where('new_in',1)->orderBy('id', 'desc')->first();
        $insurance = Insurance::where('new_in',1)->orderBy('id', 'desc')->first();

        return $this->fetch_records($oc_health, $insurance);
    }

    function fetch_records($oc_health, $insurance){

        //return $insurance;
        if(!empty($oc_health)){
            $oc_health_date = Carbon::parse($oc_health->updated_at)->format('d/m/Y');
        } else{
            $oc_health = (object)['image_url' => '/img/frontend/logo_horiz.png',
                                  'url' => '#',
                                  'id' => ''];
            $oc_health_date = "01/01/2000";
        }

        if(!empty($insurance)){
            $insurance_date = Carbon::parse($insurance->updated_at)->format('d/m/Y');
        } else{
            $insurance = (object)['image_url' => '/img/frontend/logo_horiz.png',
                'url' => '#',
                'id' => ''];
            $insurance_date = "01/01/2000";
        }

        if($insurance_date > $oc_health_date){
            $item = $insurance;
            //return $item;
            return view('frontend.index', compact('item'));

        }

        $item = $oc_health;
        //return $item;
        return view('frontend.index', compact('item'));

    }
}