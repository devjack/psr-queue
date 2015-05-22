<?php

namespace Psr\Queue;

interface QueueInterface {
    /**
     * @param Message $msg
     * @return
     */
    public function push(Message $msg);

    /**
     * @return Message Retrieve message from the queue
     */
    public function pull();

    /**
     * @return string Name or identifier of the queue
     */
	public function getName();

}