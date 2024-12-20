<?php
class HourlyEmployee extends Employee {
    private $hoursWorked;
    private $rate;

    public function __construct($name, $address, $age, $companyName, $hoursWorked, $rate) {
        parent::__construct($name, $address, $age, $companyName);
        $this->hoursWorked = $hoursWorked;
        $this->rate = $rate;
    }

    public function earnings() {
        if ($this->hoursWorked > 40) {
            return (40 * $this->rate) + (($this->hoursWorked - 40) * $this->rate * 1.5);
        } else {
            return $this->hoursWorked * $this->rate;
        }
    }

    public function __toString() {
        return parent::__toString() . ", Hours Worked: $this->hoursWorked, Rate: $this->rate";
    }
}
?>
