<?php

    class Vehicle
    {
        private ?string $brand = null;

        private ?string $color = null;

        public function getBrand(): ?string
        {
            return $this->brand;
        }

        public function setBrand(string $brand): static
        {
            $this->brand = $brand;

            return $this;
        }

        public function getColor(): ?string
        {
            return $this->color;
        }

        public function setColor(string $color): static
        {
            $this->color = $color;

            return $this;
        }
    }

    $vehicle0 = new Vehicle();
    
    // $vehicle0->setBrand("Alpha Roméo");
    // $vehicle0->setColor("noire");

    $vehicle0->setBrand("Alpha Roméo")->setColor("noire");

    echo $vehicle0->getBrand();
    echo "\n";
    echo $vehicle0->getColor();