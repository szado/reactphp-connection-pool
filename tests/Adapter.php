<?php

namespace Szado\Tests\React\ConnectionPool;

use Szado\React\ConnectionPool\ConnectionState;

class Adapter implements \Szado\React\ConnectionPool\ConnectionAdapters\ConnectionAdapterInterface
{
    public ConnectionState $state;

    public function __construct(private string $id = '')
    {
        $this->state = ConnectionState::Ready;
    }

    public function __toString(): string
    {
        return $this->id;
    }

    public function getState(): \Szado\React\ConnectionPool\ConnectionState
    {
        return $this->state;
    }

    public function getConnection(): object
    {
        return new \stdClass();
    }
}