<?php

namespace App\Livewire\Pages;

use Livewire\Component;

class About extends Component


{   
    public $subTitle;
    public $title;
    public $experienceYears;
    public $experienceText;
    public $description;
    public $resumeLink;
    public $iconPath;

    public function mount()
    {
        $this->subTitle = '01 - About me';
        $this->title = 'I have transform ricowell into remarkable digital products';
        $this->experienceYears = '20+ Years Experience';
        $this->experienceText = 'In this game, Means Product Designing';
        $this->description = 'I love to work in User Experience & User Interface designing. Because I love to solve the design problem and find easy and better solutions to solve it. I always try my best to make good user interface with the best user experience. I have been working as a UX Designer';
        $this->resumeLink = '/resume.pdf';
        $this->iconPath = 'assets/img/icons/about_icon.png';
    }
    
    public function render()
    {
        return view('livewire.pages.about')->layout('components.layouts.frontend-layout');
    }
}
