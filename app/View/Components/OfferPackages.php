<?php

namespace App\View\Components;

use Illuminate\View\Component;

class OfferPackages extends Component
{
    public $offerTitle;
    public $offerDayNight;
    public $offerImage;
    public $tourTitle;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($offerTitle, $offerDayNight, $offerImage, $tourTitle)
    {
        //
        $this->offerTitle= $offerTitle;
        $this->offerDayNight= $offerDayNight;
        $this->offerImage= $offerImage;
        $this->tourTitle= $tourTitle;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.offer-packages', ['data' => $this->offerTitle]);
    }
}
