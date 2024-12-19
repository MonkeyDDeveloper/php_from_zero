<?php

class SuperHero {
    public function __construct(
        readonly public string $name, 
        public array $powers, 
        public string $planet
    )
    {
        
    }

    public static function from_array(array $data): SuperHero {
        return new self($data["name"], $data["powers"], $data["planet"]);
    }

    public function describe() {
        $string_powers = implode(", ", $this->powers);
        return "$this->name has the following powers: $string_powers. And he is from $this->planet";
    }

    public function __toString() {
        return "Name: $this->name, from $this->planet, and has the following powers: " . implode(", ", $this->powers);
    }
}

$superman = new SuperHero("Superman", ["Fly", "Strong", "Laser Vision"], "Krypton");
print($superman->describe());

$batman = SuperHero::from_array(["name" => "Batman", "powers" => ["Rich", "Smart"], "planet" => "Earth"]);
print("\n$batman");


?>