<?php

class Ur extends Eloquent
{
    //Ur __has_many__ Viatico
    public function viaticos()
    {
        return $this->hasMany('Viatico');
    }
}
