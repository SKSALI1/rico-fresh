<?php

namespace App\Livewire\Homepage;
use Livewire\Component;
use App\Models\Banner as BannerModel;
use Carbon\Carbon;


class Banner extends Component
{
    public $id;
    public $banner_title;
    public $banner_description;
    public $banner_image;
    public $banner_video;

    public function mount(){
        $this->LoadBanner();
    }


    public function LoadBanner(){
        $foundBanner = BannerModel::firstOrFail();
        if ($foundBanner) {
            $this->banner_title = $foundBanner->banner_title;
            $this->banner_description = $foundBanner->banner_description;
            $this->banner_image = $foundBanner->banner_image;
            $this->banner_video = $foundBanner->banner_video;
            $this->updated_at = Carbon::now();
        }else{
            return view ('livewire.pages.contact');
        }
    }

    public function Updatebanner(){}
    public function Deletebanner(){}


    public function render()
    {
        return view('livewire.homepage.banner');
    }
}


// [
//     $banner_title => $banner_title,
//     $banner_description =>$banner_description,
//     $banner_image=>$banner_image,
//     $banner_video=>$banner_video,
//     $banner_image=>Carbon::Now(),

// ]