<?php

namespace Modules\Panel\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Modules\Platform\Core\Http\Controllers\AppBaseController;

class PanelController extends AppBaseController
{
    public function index()
    {
        return view('panel::index');
    }

    public function data()
    {
        return response()->json(['name' => 'Abigail', 'state' => 'CA']);
    }
}
