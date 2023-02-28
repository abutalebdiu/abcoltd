<?php

namespace App\Exports;

use Maatwebsite\Excel\Concerns\FromCollection;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;
use App\Model\ApplyIpo;
use App\Model\user;
use App\Model\IPO;
use App\Model\Auth;


class ApplyIPOExport implements FromView 
{
    private $data = [];

    public function __construct($appliedipos)
    {
        $this->data = $appliedipos;


    }

    public function view(): View
    {
        return view('backend.apply-ipo.ipoexport',[
          'appliedipos' => $this->data
      ]);
    }

}
