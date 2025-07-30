<?php namespace App\Libraries;

class Widget
{
    public function stb(array $params)
    {
        return view('widget/stb1', $params);
    }

    public function sstb(array $params)
    {
        return view('widget/sstb1', $params);
    }
}