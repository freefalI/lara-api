<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{

    protected  $guarded=[];

    public function toggle()
    {
        $isOpened = $this->closed_at;

        if ($isOpened===null) {
            $this->closed_at = Carbon::now()->toDateTimeString();
        }
        else{
            $this->closed_at=null;
        }
    }
}
