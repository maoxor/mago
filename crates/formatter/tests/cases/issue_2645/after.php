<?php

class Finder
{
    /********************* filtering ****************d*g**/

    /** Restricts the search using mask. */
    public function name(string $mask): static
    {
        return $this;
    }

    /********************* iterator generator ****************d*g**/

    public function getIterator(): \Generator
    {
        yield from [];
    }

    /** @var int */
    private $depth = -1;

    /***/
    private $order;
}
