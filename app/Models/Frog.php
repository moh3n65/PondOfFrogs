<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Frog extends Model
{
    use SoftDeletes;
    protected $dates = ['deleted_at'];


    public function dad()
    {
        return $this->belongsTo('App\Models\Frog', 'dad_id');
    }

    public function mom()
    {
        return $this->belongsTo('App\Models\Frog', 'mom_id');
    }

    public function partner()
    {
        return $this->belongsTo('App\Models\Frog', 'partner_id');
    }

    static public function mate($groomId, $brideId)
    {
        $groom = Frog::whereId($groomId)
            ->whereDateOfDead(null)->wherePartnerId(null)->first();
        $bride = Frog::whereId($brideId)
            ->whereDateOfDead(null)->wherePartnerId(null)->first();
        // If Groom and Bride available for wedding
        if (!count($groom) && !count($bride))
        {
            return false;
        }
        //If something is going wrong
        if ($groom->gender == $bride->gender)
        {
            return false;
        }

        $bride->partner_id = $groom->id;
        $groom->partner_id = $bride->id;
        $bride->save();
        $groom->save();

        return true;
    }
}
