<?php

namespace App\View\Components\admin;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class exerciseCard extends Component
{

    // make variables for exerciseName, muscle group, exercise category, description, images

    public $exerciseName;
    public $muscleGroup;
    public $exerciseCategory;
    public $description;
    public $images = [];


    public function __construct( $exerciseName, $muscleGroup, $exerciseCategory, $description, $images)
    {
        $this->exerciseName = $exerciseName;
        $this->muscleGroup = $muscleGroup;
        $this->exerciseCategory = $exerciseCategory;
        $this->description = $description;
        $this->images = $images;
    }
    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.admin.exercise-card');
    }
}
