<?php

class Antecedente extends Eloquent
{
    //Antecedente __belongs_to__ Viatico
    public function viatico()
    {
        return $this->belongsTo('Viatico');
    }
}
