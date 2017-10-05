<?php
class Employee{
    private $name;
    private $salary;
    private $position;
    private $department;
    private $email;
    private $age;

    function __construct($name,$salary,$position,$department,$email=null,$age=null)
    {
        $this->name=$name;
        $this->salary=$salary;
        $this->position=$position;
        $this->department=$department;

        $this->email=$email;
        $this->age=$age;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getSalary()
    {
        return $this->salary;
    }

    /**
     * @param mixed $salary
     */
    public function setSalary($salary)
    {
        $this->salary = $salary;
    }

    /**
     * @return mixed
     */
    public function getPosition()
    {
        return $this->position;
    }

    /**
     * @param mixed $position
     */
    public function setPosition($position)
    {
        $this->position = $position;
    }

    /**
     * @return mixed
     */
    public function getDepartment()
    {
        return $this->department;
    }

    /**
     * @param mixed $department
     */
    public function setDepartment($department)
    {
        $this->department = $department;
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param mixed $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

    /**
     * @return mixed
     */
    public function getAge()
    {
        return $this->age;
    }

    /**
     * @param mixed $age
     */
    public function setAge($age)
    {
        $this->age = $age;
    }
}
$num = intval(trim(fgets(STDIN)));
$departmentsAndSalary=[];
$employeeData=[];
for($i=0;$i<$num;$i++){
    $inputLine=explode(" ", trim(fgets(STDIN)));
    $count=count($inputLine);

    if($count==6){
        $employeeData[]=new Employee($inputLine[0],$inputLine[1],$inputLine[2],$inputLine[3],$inputLine[4],$inputLine[5]);
    }else if ($count==5){
        if(is_numeric($inputLine[4])){
            $employeeData[]=new Employee($inputLine[0],$inputLine[1],$inputLine[2],$inputLine[3],'n/a',$inputLine[4]);
        }else{
            $employeeData[]=new Employee($inputLine[0],$inputLine[1],$inputLine[2],$inputLine[3],$inputLine[4],-1);
        }
    }else if ($count==4){
        $employeeData[]=new Employee($inputLine[0],$inputLine[1],$inputLine[2],$inputLine[3],'n/a',-1);
    }
$salary=$inputLine[1];
$department=$inputLine[3];
    if(!array_key_exists($department,$departmentsAndSalary)){
        $departmentsAndSalary[$department]=0;
    }
    $departmentsAndSalary[$department]+=$salary;
}

arsort($departmentsAndSalary);
$bestPaidDepartment=key($departmentsAndSalary);
echo"Highest Average Salary: ".$bestPaidDepartment."\n";

usort($employeeData,function (Employee $first,Employee $second){
   return $first->getSalary()<$second->getSalary();
});
foreach ($employeeData as $employee){
    if($employee->getDepartment()==$bestPaidDepartment){

        echo $employee->getName()." ".$employee->getSalary()." ".$employee->getEmail()." ".$employee->getAge()."\n";
    }
}