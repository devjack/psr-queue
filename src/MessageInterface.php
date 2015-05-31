<?php

namespace Psr\Queue;

use Serializable;

interface MessageInterface extends Serializable
{
    /**
     * Gets the message data.
     *
     * @return string
     */
    public function getData();
}
