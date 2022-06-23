<?php

class CustomerCreateRequest extends Request
{

    public function prepare(LLTransformInterface $data)
    {
        $this->data = $data->transform();
    }
}