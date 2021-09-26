<?php namespace Zach\Philter\Components;

use Cms\Classes\ComponentBase;
use Zach\Philter\Models\Image as ImageModel;
use Auth;

class RecentImages extends ComponentBase
{

    public $images;

    public function componentDetails()
    {
        return [
            'name'        => 'Recent Images Component',
            'description' => 'Handles Recent Image Display'
        ];
    }

    public function defineProperties()
    {
        return [];
    }

    

    public function onRender(){

        $user = Auth::getUser();
        if (is_object($user)) {
            $this->images = ImageModel::othersImages($user->id)->latest()->get();
        } else {
            $this->images = ImageModel::latest()->get();
        }
        
        
    }

}
