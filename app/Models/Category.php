<?php

namespace App\Models;



class Category extends BaseModel
{
    public function cards ()
    {
        return $this->hasMany(Card::class);
    }
}
