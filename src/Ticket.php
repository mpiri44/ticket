<?php

namespace App;

use Actuallymab\LaravelComment\Commentable;
use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{

    use Commentable;

    protected $mustBeApproved = true;

    protected $table = 'tickets';

    protected $fillable = ['id','user_id','ticket_id','category_id','title','message','priority','status'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function category()
    {
        return $this->hasOne(TicketCategory::class,'id');
    }
}
