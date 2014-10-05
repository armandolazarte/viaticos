<?php

class Evento extends Eloquent
{
    //Evento __belongs_to__ Viatico
    public function viatico()
    {
        return $this->belongsTo('Viatico');
    }
}
