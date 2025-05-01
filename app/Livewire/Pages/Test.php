<?php

namespace App\Livewire\Pages;

use Livewire\Component;

class Test extends Component
{
    public function render()
    {
        return view('livewire.pages.test')->layout('components.layouts.frontend-layout');
    }
}
