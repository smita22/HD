<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\product_description;
use View;
class RotaryController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        //
    }

    public function showrotaryPage()
    {
        return view('rotry.allrotry');
    }

    public function showrotary_readmorePage($id)
    {
        // print_r($id);exit();
        $data = product_description::find($id);
        // echo "<pre>";print_r($data);exit();
        return View::make('rotry.rotary_readmore', array('data' => $data));
        // return view('rotry.rotary_readmore');
    }

    public function showrotary_pressure_joints()
    {
        return view('rotry.rotary_pressure_joints');
    }
    public function showsyphon_system()
    {
        return view('rotry.syphon_system');
    }
    public function showcarbon_rings()
    {
        return view('rotry.carbon_rings');
    }
    public function showaccessories()
    {
        return view('rotry.accessories');
    }

    public function showball_valve()
    {
        return view('valve.ball_valve');
    }
    public function showbutterfly_valve()
    {
        return view('valve.butterfly_valve');
    }
    public function showgate_valve()
    {
        return view('valve.gate_valve');
    }
    public function showglobe_valve()
    {
        return view('valve.globe_valve');
    }
    public function showcheck_valve()
    {
        return view('valve.check_valve');
    }

    public function showstationary_syphon()
    {
        return view('rotry.stationary_syphon');
    }
    public function showrotating_syphon()
    {
        return view('rotry.rotating_syphon');
    }
    public function showmonoflow_application()
    {
        return view('rotry.monoflow_application');
    }
    public function showroto_seals()
    {
        return view('rotry.roto_seals');
    }
}
