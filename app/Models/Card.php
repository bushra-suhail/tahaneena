<?php

namespace App\Models;



class Card extends BaseModel
{
    public function category()
    {
        return $this->belongsTo(Category::class)->withDefault();
    }
}
