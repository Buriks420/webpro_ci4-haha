<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        return view('welcome_message');
    }

    public function mahasiswa()
    {
        $uri = service('uri');
        $param1 = $uri->getSegment(4);
        $param2 = $uri->getSegment(5);
        $param3 = $uri->getSegment(6);

        $data['nama'] = $param1;
        $data['nim'] = $param2;
        $data['kelas'] = $param3;

        return view('segment_view', $data);
    }
}
