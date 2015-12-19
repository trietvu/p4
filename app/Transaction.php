<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use SahusoftCom\EloquentImageMutator\EloquentImageMutatorTrait;

class Transaction extends Model
{
    //
    public function getCreatedAtAttribute($date)
    {
        return \Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $date)->format('m-d-Y');
    }

    use EloquentImageMutatorTrait;

    /**
     * The photo fields should be listed here.
     *
     * @var array
     */
    protected $image_fields = ['receipt_img'];

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'transactions';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['receipt_img'];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [];


}
