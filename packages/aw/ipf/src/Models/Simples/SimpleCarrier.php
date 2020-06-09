<?php

    namespace  AW\IPF\Models\Simples;

     use Jenssegers\Mongodb\Eloquent\Model;

    class SimpleCarrier extends Model
    {


        protected $collection = 'Carriers';

        protected $primaryKey = 'pid';

        protected $hidden = ['updated_at', 'created_at'];

        public function scopeNothing($query)
        {
            return $query;
        }
    }
