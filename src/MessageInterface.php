<?php
namespace Psr\Queue;

interface MessageInterface {
    /**
     * @return string Serialised message data.
     */
    public function getData();

}