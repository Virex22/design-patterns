<?php

declare(strict_types=1);

namespace App\Iterator;

use Iterator;

require_once("../../autoload.php");

class ForwardIterator implements Iterator
{
    protected $stringArray;

    protected $position;

    public function __construct(StringArray $stringArray)
    {
        $this->stringArray = $stringArray;
    }
    public function current()
    {
        return $this->stringArray->get($this->position);
    }
    public function key()
    {
        return $this->position;
    }
    public function next()
    {
        $this->position++;
    }
    public function rewind()
    {
        $this->position = 0;
    }
    public function valid(): bool
    {
        return $this->position < $this->stringArray->lenght();
    }
}
