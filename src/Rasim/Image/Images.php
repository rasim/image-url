<?php

namespace Rasim\Image;

use Intervention\Image\ImageManager as Image;

use Closure;
use File;
use Cache;


class  Images
{

    function __construct() {
        $this->image = New Image;
    }
 
    public function url($src,$w,$h)
    {
        $ad = "assets/thumb/$w/$h/".basename($src);

        $resim = Cache::remember(md5($ad), 60, function()use($src,$w,$h,$ad)
        {

           File::makeDirectory("assets/thumb/$w/$h", 0777, true, true);
           $thumb = $this->image->make($src)->resize($w, $h)->save($ad);
           return  $thumb;

        });

        return asset($ad);

    }


}


