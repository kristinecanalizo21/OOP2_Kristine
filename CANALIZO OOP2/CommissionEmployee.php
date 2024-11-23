<?php
class CommissionEmployee extends Employee {
    private $regularSalary;
    private $itemsSold;
    private $commissionRate;

    public function __construct($name, $address, $age, $companyName, $regularSalary, $itemsSold, $commissionRate) {
        parent::__construct($name, $address, $age, $companyName);
        $this->regularSalary = $regularSalary;
        $this->itemsSold = $itemsSold;
        $this->commissionRate = $commissionRate;
    }

    public function earnings() {
        return $this->regularSalary + ($this->itemsSold * $this->commissionRate);
    }

    public function __toString() {
        return parent::__toString() . ", Regular Salary: $this->regularSalary, Items Sold: $this->itemsSold, Commission Rate: $this->commissionRate";
    }
}
?>
