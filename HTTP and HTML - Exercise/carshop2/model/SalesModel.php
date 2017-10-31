<?php
class SalesModel extends Model{
	private $date_time;
	private $amount;
	private $car_id;
	private $customer_id;


	public function create($car_id,$customer_id,$datetime,$amount)
	{
        // Insert into sales
		try{

		    $this->car_id=$car_id;
		    $this->customer_id=$customer_id;
		    $this->date_time=$datetime;
            $this->amount=$amount;

            $this->db->beginTransaction();
            $stmt = $this->db->prepare("
                INSERT INTO sales
                  (`car_id`,`customer_id`,`datetime`,`amount`)
                VALUES 
                   (?,?,?,?)");
            $stmt->bindParam(1, $this->car_id);
            $stmt->bindParam(2, $this->customer_id);
            $stmt->bindParam(3, $this->date_time);
            $stmt->bindParam(4, $this->amount);
            $stmt->execute();
            $sale_id = $this->db->lastInsertId();
            $this->db->commit();
           // return($sale_id);
        } catch (PDOException $e) {
            $this->db->rollBack();
            print "Error!: " . $e->getMessage() . "<br/>";
        }
        return false;
	}
	// Todo - problem 1
    // Modifications to create()
	
	public function readAll()
	{
        try {
            $stmt = $this->db->prepare("
              SELECT *         
                FROM `deal`");
            $stmt->execute();
            $all = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return ($all);
        } catch(PDOException $e){
		    print "Error!: " . $e->getMessage() . "<br/>";
        }
	}
	
	public function readTotal()
	{
        $stmt = $this->db->prepare("
            SELECT SUM(`amount`) as `total_amount`
              FROM `sales`");
        $stmt->execute();
        $row = $stmt->fetch(PDO::FETCH_ASSOC);
        if($row['total_amount'])
			return $row['total_amount'];
		else
			return false;
	}
    public function update($id,$datetime,$amount){

        try {
            $stmt = $this->db->prepare("UPDATE sales
SET `datetime`=:datetime, `amount`=:amount
WHERE `sale_id`=:id");
            $stmt->bindParam(':datetime', $datetime);
            $stmt->bindParam(':amount', $amount);
            $stmt->bindParam(':id', $id);
            $stmt->execute();
            echo"Sale with id {$id} has been successfully updated.";
            //$stmt->execute();
            //$all = $stmt->fetchAll(PDO::FETCH_ASSOC);
            //return ($all);
        } catch(PDOException $e){
            print "Error!: " . $e->getMessage() . "<br/>";
        }
    }
}