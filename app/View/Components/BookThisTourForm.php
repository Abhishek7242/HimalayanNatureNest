<?php

namespace App\View\Components;

use Illuminate\View\Component;

class BookThisTourForm extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $tourName;


    public function __construct($tourName)
    {
        //
        $this->tourName = $tourName;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.book-this-tour-form', ['data' => $this->tourName]);
    }
}
