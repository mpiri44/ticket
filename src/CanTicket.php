<?php
/**
 * Created by PhpStorm.
 * User: meysam
 * Date: 3/9/18
 * Time: 7:50 PM
 */

namespace Payamava\Ticket;


trait CanTicket
{
    /**
     * @param $ticketCategory
     * @param $title
     * @param $message
     * @param $priority
     * @return mixed
     */
    public function newTicket($ticketCategory,$title,$message,$priority)
    {
        return Ticket::create([
            'user_id'   =>  $this->id,
            'category_id'   =>  $ticketCategory->id,
            'ticket_id'     =>  strtoupper(str_random(10)),
            'title'         =>  $title,
            'message'       =>  $message,
            'status'        =>  'Open',
            'priority'      =>  $priority
        ]);
    }

    /**
     * @param $ticket
     * @param $message
     * @return mixed
     */
    public function replyToTicket($ticket,$title,$message)
    {
        return $ticket->comment([
            'title' =>  $title,
            'body'  =>  $message
        ],$this);

    }

    /**
     * @param $ticket
     * @return mixed
     */
    public function changeStateToClosed($ticket)
    {
        return $ticket->update(['status'    =>  'Closed']);
    }

    /**
     * @param $ticket
     * @return mixed
     */
    public function changeStateToOpen($ticket)
    {
        return $ticket->update(['status'    =>  'Open']);
    }


}
