<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Guest;


class IndexController extends Controller
{
  /**
   * Set middleware to quard controller.
   *
   * @return void
   */
    public function __construct()
    {
        $this->middleware('sentinel.guest');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      return view('index');
    }

    public function pozivnica()
    {
        return view('pozivnica.index');
    }

    public function formSubmit(Request $request)
    {
        var_dump($request);
        $guest = new Guest();

        $guest->guestName = $request->guestName;

        if ($request->dateOption === 'DA') {
        $guest->dateName = $request->dateName;
        }
        if ($request->childOption === 'DA') {
            $guest->childNum = $request->childNum;
        }

        $guest->save();

    }


}
