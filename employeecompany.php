/**
 * Plugin Name: Employee and Company Organizator
 * Description: Employee and Company Organizator - CTS Assessment
 * Author:      Bondas Filip
 */

class Employee{
    private $name;
    private $position;
    private $salary;

    public function __construct($name,$position,$salary){
        $this->name = $name;
        $this->position = $position;
        $this->salary = $salary       
    }

    public function get_name(){
        return $this->name;
    }

    public function get_position(){
        return $this->position;
    }

    public function get_salary(){
        return $this->salary;
    }

    public function get_employee_info() {
        return "Employee name is ".$this->name.", his position in company is ".$this->position." and his salary is $".$this->salary;
    }
}


class Company {
    private $employees;

    public function __construct(){
        $this->employees = array();
    }

    public function add_employee($employee) {
        if ($employee instanceof Employee){
            $this->employees[] = $employee;
        }
    }

    public function get_employees() {
        return $this->employees;
    }

    public function get_employee_count(){
        return count($this->employees);
    }

    public function get_average_salary(){
        $total_salary = 0;
        foreach ($this->employees as $employee){
            $total_salary += $employee->get_salary();
        }   
        return $total_salary / count($this->employees);
    }
}