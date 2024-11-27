<?php

namespace App\View\Components;

use App\Models\TourDetail;
use Illuminate\View\Component;

class PackagesTags extends Component
{
    public $tagName;
    public $tourPackageName;
    public $tourPackage;
    public $tourTitle;

    /**
     * Create a new component instance.
     *
     * @param string $tagName
     * @return void
     */
    public function __construct($tagName)
    {
        $tourPackage = TourDetail::where('tourPackageTitle', 'REGEXP', '\\b' . $tagName . '\\b')->first();

        $this->tourPackage = $tourPackage;
        $packageUrl = $tourPackage->tourPackageTitle ?? '#';
        $this->tourPackageName = str_replace(' ', '-', $packageUrl);
        $this->tourTitle = $tourPackage->tourTitle ?? '#';
        $this->tagName = $tagName;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.packages-tags', [
            'data' => $this->tagName,
            'tourPackage' => $this->tourPackage,
        ]);
    }
}
