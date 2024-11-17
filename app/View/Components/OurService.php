<?php

namespace App\View\Components;

use Illuminate\View\Component;

class OurService extends Component
{
    public $serviceData;
    public $bookingName;
    public $serviceName;

    /**
     * Create a new component instance.
     *
     * @param mixed $serviceData
     * @return void
     */
    public function __construct($serviceData, $bookingName, $serviceName)
    {
        $this->serviceData = $serviceData;
        $this->bookingName = $bookingName; 
        $this->serviceName = $serviceName; 
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.our-service', [
            'serviceData' => $this->serviceData,
        ]);
    }
}
