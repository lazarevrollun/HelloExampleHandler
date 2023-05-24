<?php

namespace HelloExample\People;

class Ivan implements PeopleInterface
{
    protected string $name;

    public function getName(): string
    {
        return $this->name;
    }
}