
This package is designed to manage and support ticketing.

# Installing

Begin by pulling in the package through Composer.
```
composer require payamava/ticket
```
Next, if using Laravel 5, include the service provider within your config/app.php file.
```
'providers' => [
    Payamava\Ticket\TicketServiceProvider::class,
];
```
## Usage

Create new ticket category

```
    $user->newTicketCategory('name of category')
```
Create new ticket
```
    $ticketCategory = TicketCategory::first();
    $user->newTicket($ticketCategory,'title','body','priority');
```

Reply to ticket
```
    $user->replyToTicket($ticket,'title','message')
```

Change state ticket to closed
```
    $user->changeStateToClosed($ticket)
```
Change state to open
```
    $user->changeStateToOpen($ticket)
```

Delete Ticket
```
    $user->deleteTicket($ticket)
```

Update Reply
```
    $user->updateReply($ticket,$reply,$new_message)
```

Update Ticket
```
    $user->updateTicket($ticket,$newCategory,$title,$message,$priority)
```

Get all Replies
```
    $user->getReplies()
```
