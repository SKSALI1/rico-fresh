<?php

namespace App\Livewire\Pages;

use Livewire\Component;

class Portfolio extends Component
{
    public function render()
    {
        return view('livewire.pages.portfolio')->layout('components.layouts.frontend-layout');
    }
}
