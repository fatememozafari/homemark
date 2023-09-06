<?php

namespace App\Models;

use App\Filters\Contracts\Filterable;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    use HasFactory, Filterable;

    protected $guarded=['id'];

    public function images()
    {
        return $this->hasMany(ItemImage::class);
    }

    protected function itemContract(): Attribute
    {
        return Attribute::make(
            get:fn (mixed $value, array $attributes) => $attributes['contract'] == 'sale'
                ?
                "برای فروش"
                :
                ($attributes['contract'] == 'rent'
                    ?
                    "برای اجاره"
                    :
                    ""
                ),
        );
    }


    protected function itemStatus(): Attribute
    {
        return Attribute::make(
            get:fn (mixed $value, array $attributes) => $attributes['status'] == 'active'
                ?
                "فعال"
                :
                ($attributes['status'] == 'in-active'
                    ?
                    "غیرفعال"
                    :
                    ""
                ),
        );
    }


    protected function itemType(): Attribute
    {
        return Attribute::make(
            get:fn (mixed $value, array $attributes) =>
            $attributes['type'] == 'apartment'
                ?
                "آپارتمان"
                :
                ($attributes['type'] == 'land'
                    ?
                    "زمین"
                    :
                    ($attributes['type'] == 'house'
                        ?
                        "خانه شخصی"
                        :
                        ($attributes['type'] == 'villa'
                            ?
                            "ویلا"
                            :
                            ($attributes['type'] == 'garden'
                                ?
                                "باغ"
                                :
                                ($attributes['type'] == 'shop'
                                    ?
                                    "مغازه"
                                    :
                                    ($attributes['type'] == 'office'
                                        ?
                                        "واحد اداری"
                                        :
                                        ($attributes['type'] == 'prebuy'
                                            ?
                                            "پیش فروش"
                                            :
                                            ""
                                    )
                                )
                            )
                        )
                    )
                )
                )
        );
    }

    protected function elevator(): Attribute
    {
        return Attribute::make(
            get:fn (mixed $value, array $attributes) => $attributes['elevator'] == 1
                ?
                "دارد"
                :
                ($attributes['elevator'] == null
                    ?
                    "غیرفعال"
                    :
                    "ندارد"
                ),
        );
    }

//    protected function underground(): Attribute
//    {
//        return Attribute::make(
//            get:fn (mixed $value, array $attributes) => $attributes['underground'] == 1
//                ?
//                "دارد"
//                :
//                ($attributes['underground'] == null
//                    ?
//                    "ندارد"
//                    :
//                    ""
//                ),
//        );
//    }

    protected function warehouse(): Attribute
    {
        return Attribute::make(
            get:fn (mixed $value, array $attributes) => $attributes['warehouse'] == 1
                ?
                "دارد"
                :
                ($attributes['warehouse'] == null
                    ?
                    "ندارد"
                    :
                    ""
                ),
        );
    }

    public function users()
    {
        return $this->belongsToMany(User::class,'bookmarks');
    }
}
