<?php

class Hospedaje extends Eloquent
{
    //Hospedaje __belongs_to__ Viatico
    public function viatico()
    {
        return $this->belongsTo('Hospedaje');
    }
}
