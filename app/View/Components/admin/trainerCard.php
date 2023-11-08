<?php

namespace App\View\Components\admin;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class trainerCard extends Component
{

    public $name;
    public $designation;
    public $description;
    public $image;
    public $facebookLink;
    public $instagramLink;
    public $twitterLink;
    public $youtubeLink;
    public $stars;


    public function __construct( $name, $designation, $description, $image, $stars, $facebookLink, $instagramLink, $twitterLink, $youtubeLink)
    {
        $this->name = $name;
        $this->designation = $designation;
        $this->description = $description;
        $this->image = $image;
        $this->facebookLink = $facebookLink;
        $this->instagramLink = $instagramLink;
        $this->twitterLink = $twitterLink;
        $this->stars = $stars;
        $this->youtubeLink = $youtubeLink;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.admin.trainer-card');
    }
}
