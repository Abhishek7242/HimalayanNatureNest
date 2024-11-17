<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Breadcrumbs extends Component
{
    /**
     * The data for the input component.
     *
     * @var string
     */
    public $breadcrumbs;
    public $name;
    public $imgUrl;


    /**
     * Create a new component instance.
     *
     * @param string $data
     * @return void
     */
    public function __construct($breadcrumbs,$name, $imgUrl)
    {
        $this->breadcrumbs = $breadcrumbs;
        $this->name = $name;
        $this->imgUrl = $imgUrl;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('components.breadcrumbs', ['data' => $this->breadcrumbs]);
    }
}

