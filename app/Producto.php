<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    //


    public function getPhotoRouteAttribute(){
        if ($this->imagen_producto)
            return 'img/producto/'.$this->nuevo_producto.'.'.$this->imagen_producto;

        return 'img/producto/asd.png';
    }
}
