<?php

namespace App\View\Components;

use Illuminate\View\Component;

class OurServiceForm extends Component
{
    public $formImage;
    public $name; 
    public $serviceName; 
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($formImage,$name, $serviceName)
    {
        //
        $this->formImage= $formImage;
        $this->name= $name;
        $this->serviceName= $serviceName;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.our-service-form',['data' => $this->formImage]);
    }
}
