<?php

namespace App\View\Components;

use App\Models\tb_cabang;
use Illuminate\View\Component;

class CabangNavbar extends Component
{
    public $cabangNav;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->cabangNav = tb_cabang::all();
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.cabang-navbar');
    }
}
