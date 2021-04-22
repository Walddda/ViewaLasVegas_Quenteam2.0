<?php

namespace TYPO3fluid\fluid;

class hotel
{
    private string $name;
    private string $desc;
    public function getName(): string
    {
        return $this->name;
    }
    public function __construct(string $name, string $desc)
    {
        $this->name = $name;
        $this->desc = $desc;
    }
    public function getDes(): string
    {
        return $this->desc;
    }
}
