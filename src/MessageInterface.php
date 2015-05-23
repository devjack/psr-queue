<?php

namespace Psr\Queue;

interface MessageInterface
{
    /**
     * Gets the message data.
     *
     * @return string
     */
    public function getData();
}
