<?php

namespace App\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;
use App\Models\Article;

class EventNewComment implements ShouldBroadcast
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

   protected $article;
    public function __construct(Article $article)
    {
        $this->article = $article;
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return array<int, \Illuminate\Broadcasting\Channel>
     */
    public function broadcastOn(): array
    {
        return [
            new Channel('test'),
        ];
    }

    public function broadcastWith(): array
    {
        return [
            'article'=>$this->article
        ];
    }
}