<?php

namespace App\Filters;

use App\Filters\Contracts\QueryFilter;

class ItemFilter extends QueryFilter
{

    public function search($value = null)
    {
        if(!is_null($value)){
            return $this->builder->where('title','like' ,"%$value%" );
        }
        return $this->builder;
    }

    public function title($value = null)
    {
        if (!is_null($value)) {
            return $this->builder->where('title', 'like', "%$value%");
        }
        return $this->builder;
    }

    public function contract($value = null)
    {
        if (!is_null($value)) {
            return $this->builder->where('contract', $value);
        }
        return $this->builder;
    }

    public function type($value = null)
    {
        if (!is_null($value)) {
            return $this->builder->where('type', $value);
        }
        return $this->builder;
    }

    public function min_price($value = null)
    {
        if (!is_null($value)) {
            return $this->builder->where('price',">=" ,$value)->orWhere('rent',">=" ,$value)->orWhere('deposit',">=" ,$value);
        }
        return $this->builder;
    }

    public function max_price($value = null)
    {
        if (!is_null($value)) {
            return $this->builder->where('price', "<=" ,$value)->orWhere('rent', "<=" ,$value)->orWhere('deposit', "<=" ,$value);
        }
        return $this->builder;
    }

    public function case_number($value = null)
    {
        if (!is_null($value)) {
            return $this->builder->where('case_number', $value);
        }
        return $this->builder;
    }

    public function built_at($value = null)
    {
        if (!is_null($value)) {
            return $this->builder->where('built_at', $value);
        }
        return $this->builder;
    }

}
