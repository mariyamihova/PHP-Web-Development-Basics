<?php
class CarsModel extends Model
{
	
	private $make;
	private $model;
	private $year;
	//protected $table="usedcars";
	

	
	public function create($make,$model,$year){
		try {

            $this->make=$make;
            $this->model=$model;
            $this->year=$year;
           // $this->db->beginTransaction();

            $stmt = $this->db->prepare("
              INSERT INTO usedcars
                (`make`, `model`, `year`)
              VALUES
                (?, ?, ?)");
            $stmt->bindParam(1, $this->make);
            $stmt->bindParam(2, $this->model);
            $stmt->bindParam(3, $this->year);
            $stmt->execute();
            $car_id = $this->db->lastInsertId();
			return $car_id;
		 } catch (PDOException $e) {
            $this->db->rollBack();
            print "Error!: " . $e->getMessage() . "<br/>";
        }
        return false;
	}
    public function readAll()
    {
        try {
            $stmt = $this->db->query("SELECT car_id,make,model,year FROM usedcars");
            //$stmt->execute();
            $all = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return ($all);
        } catch(PDOException $e){
            print "Error!: " . $e->getMessage() . "<br/>";
        }
    }

    public function findCarOwner($make)
    {
        try {
            $stmt = $this->db->prepare("SELECT car_id,make,model,year,customer_id,first_name,last_name from usedcars
inner join sales using(car_id)
inner join customers using(customer_id)
where make=?");
            $stmt->bindParam(1, $make);
            $stmt->execute();
            $all = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return ($all);
        } catch(PDOException $e){
            print "Error!: " . $e->getMessage() . "<br/>";
        }
    }
    public function update($id,$make,$model,$year){

        try {
            $stmt = $this->db->prepare("UPDATE usedcars
SET `make`=:make, `model`=:model, `year`=:year
WHERE `car_id`=:id");
            $stmt->bindParam(':make', $make);
            $stmt->bindParam(':model', $model);
            $stmt->bindParam(':year', $year);
            $stmt->bindParam(':id', $id);
            $stmt->execute();
            echo"Car with id {$id} has been successfully updated.";
            //$stmt->execute();
            //$all = $stmt->fetchAll(PDO::FETCH_ASSOC);
            //return ($all);
        } catch(PDOException $e){
            print "Error!: " . $e->getMessage() . "<br/>";
        }
    }
}