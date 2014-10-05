<?php

class Pasaje extends Eloquent
{
    //Pasaje __belongs_to__ Viatico
    public function viatico()
    {
        return $this->belongsTo('Pasaje');
    }
}
