<?php

namespace App\View\Components;

use Illuminate\View\Component;

class PackageAccordian extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $accordianTitle;
    public $accordianID;
    public $accordianSNo;
    public $accordianDesc;
    public $accordianShowClass;
    public $accordianCollapsed;
    public function __construct($accordianTitle, $accordianID, $accordianSNo, $accordianDesc, $accordianShowClass, $accordianCollapsed)
    {
        //
        $this->accordianTitle= $accordianTitle;
        $this->accordianID= $accordianID;
        $this->accordianSNo= $accordianSNo;
        $this->accordianDesc= $accordianDesc;
        $this->accordianShowClass= $accordianShowClass;
        $this->accordianCollapsed= $accordianCollapsed;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.package-accordian', ['data' => $this->accordianTitle]);
    }
}
