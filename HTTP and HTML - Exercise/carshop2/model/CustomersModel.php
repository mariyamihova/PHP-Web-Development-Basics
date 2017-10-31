<?php
class CustomersModel extends Model
{
	private $name;
	private $family;
   // public $table="customers";

	public function create($first_name,$last_name)
	{
		// Insert into customers
		try{
		    $this->name=$first_name;
		    $this->family=$last_name;

            //$this->db->beginTransaction();

            $stmt = $this->db->prepare("
              INSERT INTO customers
                (`first_name`, `last_name`)
              VALUES
                (?, ?)");
            $stmt->bindParam(1, $this->name);
            $stmt->bindParam(2, $this->family);
            $stmt->execute();
            $customer_id = $this->db->lastInsertId();
            return($customer_id);
        } catch (PDOException $e) {
            $this->db->rollBack();
            print "Error!: " . $e->getMessage() . "<br/>";
        }
        return false;
	}

    public function readAll(){
    try {
        $stmt = $this->db->query('SELECT customer_id,first_name,last_name FROM customers');
        //$stmt->execute();
        $all = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return ($all);
    } catch(PDOException $e){
        print "Error!: " . $e->getMessage() . "<br/>";
    }
}
    public function update($id,$fname,$lname){

        try {
            $stmt = $this->db->prepare("UPDATE customers
SET `first_name`=:fname, `last_name`=:lname
WHERE `customer_id`=:id");
            $stmt->bindParam(':fname', $fname);
            $stmt->bindParam(':lname', $lname);
            $stmt->bindParam(':id', $id);
            $stmt->execute();
            echo"Customer with id {$id} has been successfully updated.";
            //$stmt->execute();
            //$all = $stmt->fetchAll(PDO::FETCH_ASSOC);
            //return ($all);
        } catch(PDOException $e){
            print "Error!: " . $e->getMessage() . "<br/>";
        }
    }
}