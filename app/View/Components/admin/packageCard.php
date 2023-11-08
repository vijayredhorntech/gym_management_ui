<?php

namespace App\View\Components\admin;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class packageCard extends Component
{

    // make variable for packageName, price , duration startDate, endDate, capacity, active, category, description, image
    public $packageName;
    public $price;
    public $duration;
    public $startDate;
    public $endDate;
    public $capacity;
    public $active;
    public $category;
    public $description;
    public $image;




    public function __construct( $packageName, $price, $duration, $startDate, $endDate, $capacity, $active, $category, $description, $image)
    {
        $this->packageName = $packageName;
        $this->price = $price;
        $this->duration = $duration;
        $this->startDate = $startDate;
        $this->endDate = $endDate;
        $this->capacity = $capacity;
        $this->active = $active;
        $this->category = $category;
        $this->description = $description;
        $this->image = $image;

    }


    public function render(): View|Closure|string
    {
        return view('components.admin.package-card');
    }
}
