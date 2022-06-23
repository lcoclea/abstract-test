<?php

class CustomerData implements LLTransformInterface
{

    protected $data;

    public function __construct($data)
    {
        $this->data = $data;
    }

    public function transform()
    {
        // TODO: Implement transform() method.

        return $this->data;
    }
}