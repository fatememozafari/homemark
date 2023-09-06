<?php

namespace App\Filters;

use App\Filters\Contracts\QueryFilter;

class RentItemFilter extends QueryFilter
{

    public function address($value = null)
    {
        if(!is_null($value)){
            return $this->builder->where('address','like' ,"%$value%" );
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

    public function min_rent($value = null)
    {
        if (!is_null($value)) {
            return $this->builder->where('rent',">=" ,$value);
        }
        return $this->builder;
    }

    public function max_rent($value = null)
    {
        if (!is_null($value)) {
            return $this->builder->where('rent', "<=" ,$value);
        }
        return $this->builder;
    }


    public function min_deposit($value = null)
    {
        if (!is_null($value)) {
            return $this->builder->where('deposit',">=" ,$value);
        }
        return $this->builder;
    }

    public function max_deposit($value = null)
    {
        if (!is_null($value)) {
            return $this->builder->where('deposit', "<=" ,$value);
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



}
