<?php
class StoreRequest
{
    private $name;
    private $surname;
    private $gender;
    private $bday;
    
    public function __construct(string $name, string $surname, string $gender, string $bday)
    {
        $this->name = $name;
        $this->surname = $surname;
        $this->gender = $gender;
        $this->bday = $bday;
    }

    public function getName(): string 
    {
        return $this->name;
    }

    public function getSurname(): string 
    {
        return $this->surname;
    }

    public function getGender(): string 
    {
        return $this->gender;
    }

    public function getBday(): string 
    {
        return $this->bday;
    }

    public function validate(): bool
    {
        if (!$this->validateGender()) {
            return false;
        }

        if (DateTime::createFromFormat('Y-m-d', $this->bday) !== false) {
            throw new \Exception('Błąd walidacji');
        }

        return true;
    }

    private function validateGender(): bool
    {
        // return $this->gender == 'Male' || $this->gender == 'Female';
        if ($this->gender != 'Male' || $this->gender != 'Female') {
            return false;
        }

        return true;
    }
}
?>