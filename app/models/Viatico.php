<?php

class Viatico extends Eloquent
{
    // Viatico __has_many__ Viaje
    public function viajes()
    {
        return $this->hasMany('Viaje');
    }
    
    // Viatico __has_many__ Evento
    public function eventos()
    {
        return $this->hasMany('Evento');
    }
    
    // Viatico __has_many__ Antecedente
    public function antecedentes()
    {
        return $this->hasMany('Antecedente');
    }
    
    // Viatico __has_many__ Pasaje
    public function pasajes()
    {
        return $this->hasMany('Pasaje');
    }
    
    // Viatico __has_many__ Vuelo
    public function vuelos()
    {
        return $this->hasMany('Vuelo');
    }
    
    // Viatico __has_many__ Hospedaje
    public function hospedajes()
    {
        return $this->hasMany('Hospedaje');
    }
    
    //Viatico __belongs_to__ Ur
    public function ur()
    {
        return $this->belongsTo('Ur');
    }
}
