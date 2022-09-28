<?php

namespace Modules\Blog\Listeners;

use Modules\Blog\Events\TagDeletedEvent;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class TagDeletedListener
{
    /**
     * Delete the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  TagDeletedEvent  $event
     * @return void
     */
    public function handle(TagDeletedEvent $event)
    {
        //
    }
}
