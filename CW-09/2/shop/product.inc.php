<?php

class Product
{
    protected string $name;
    protected int $price;
    protected array $options;

    public function __construct(string $name, int $price, array $options)
    {
        $this->name = $name;
        $this->price = $price;
        $this->options = $options;
    }

    /**
     * 
     * @return string
     */
    function getName(): string
    {
        return $this->name;
    }

    /**
     * 
     * @param string $name 
     * @return Product
     */
    function setName(string $name): self
    {
        $this->name = $name;
        return $this;
    }
    /**
     * 
     * @return int
     */
    function getPrice(): int
    {
        return $this->price;
    }

    /**
     * 
     * @param int $price 
     * @return Product
     */
    function setPrice(int $price): self
    {
        $this->price = $price;
        return $this;
    }
    /**
     * 
     * @return array
     */
    function getOptions(): array
    {
        return $this->options;
    }

    /**
     * 
     * @param array $options 
     * @return Product
     */
    function setOptions(array $options): self
    {
        $this->options = $options;
        return $this;
    }
}
