<?php

namespace Psr\Queue;

interface QueueInterface
{
    /**
     * Adds a message to the queue.
     *
     * @param MessageInterface $message
     *
     * @return $this
     */
    public function push(MessageInterface $message);

    /**
     * Gets a message from the queue.
     *
     * @return MessageInterface
     */
    public function pull();

    /**
     * Gets the name of the queue.
     *
     * @return string
     */
    public function getName();
}
