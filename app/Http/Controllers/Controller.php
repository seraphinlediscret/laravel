<?php

namespace App\Http\Controllers;

//use App\Parameters;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    // public function web(){

    //     $parameters = Parameters::all();
    //     return view('para.parameters'
    //     );
    // }
}
