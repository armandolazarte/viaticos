<?php

class Vuelo extends Eloquent
{
    //Vuelo __belongs_to__ Viatico
    public function viatico()
    {
        return $this->belongsTo('Vuelo');
    }
}
