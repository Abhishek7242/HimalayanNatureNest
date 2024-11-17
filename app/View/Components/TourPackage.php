<?php

namespace App\View\Components;

use Illuminate\View\Component;
use Illuminate\Support\Str;


class TourPackage extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $dayNight;
    public $title;
    public $endPoint;
    public $startPoint;
    public $route;
    public $image;
    public $src;
    public function __construct($dayNight, $title, $endPoint, $startPoint, $route, $image, $src)
    {
        //
        $this->dayNight=$dayNight;
        $this->endPoint= $endPoint;
        $this->startPoint= $startPoint;
        $this->route= $route;
        $this->image= $image;
        $this->title= $title;
        $this->src = $src .'/'. Str::slug($title);
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.tour-package', ['data' => $this->dayNight]);
    }
}
