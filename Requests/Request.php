<?php

abstract class Request
{
    public abstract function prepare(LLTransformInterface $data);

    protected $data;
    /**
     * @var GuzzleClient
     */
    protected $client;

    public function send()
    {
        $this->client->send($this->data);
    }
}