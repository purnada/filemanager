<?php

namespace Purnada\Filemanager\Controllers;

use Illuminate\Http\Request;
use Purnada\Filemanager\Filemanager;

class FilemanagerController
{
    public function __invoke(Filemanager $inspire) {
        $quote = $inspire->justDoIt();

        return view('filemanager::index', compact('quote'));
    }
}
