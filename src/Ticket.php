<?php

namespace Payamava\Ticket;



use App\Models\User;
use BrianFaust\Commentable\Models\Comment;
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
        return $this->belongsTo(TicketCategory::class,'category_id');
    }

    /**
     * @return mixed
     */
    public function getReplies()
    {
        return $this->comments;
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }




}



