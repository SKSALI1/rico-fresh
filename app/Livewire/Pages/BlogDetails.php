<?php

namespace App\Livewire\Pages;

use Livewire\Component;

class BlogDetails extends Component
{
    public function render()
    {
        return view('livewire.pages.blog-details')->layout('components.layouts.frontend-layout');
    }
}
