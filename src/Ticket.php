<?php

namespace Payamava\Ticket;


use BrianFaust\Commentable\Traits\HasComments;
use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{

    use HasComments;

    protected $table = 'tickets';

    protected $fillable = ['id','user_id','ticket_id','category_id','title','message','priority','status'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function category()
    {
        return $this->hasOne(TicketCategory::class,'id');
    }

    /**
     * @return mixed
     */
    public function getReplies()
    {
        return $this->comments();
    }
}


