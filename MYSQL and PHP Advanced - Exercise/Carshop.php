<?php
class Carshop
{
    private $db = false;

    public function __construct($db)
    {
        $this->db = $db;
    }

    public function main()
    {
        do {
            $input_str = trim(fgets(STDIN));
            $input_arr = explode(", ", $input_str);
            //Sample: Audi, A4, 2004, Ivan, Ivanov, BGN 7000
            if (count($input_arr) == 6) {
                $car = [
                    'make' => $input_arr[0],
                    'model' => $input_arr[1],
                    'year' => $input_arr[2],
                ];
                $person = [
                    'name' => $input_arr[3],
                    'family' => $input_arr[4]
                ];
                $amountInfo = explode(" ", $input_arr[5]);
                $amount = [
                    'amount' => $amountInfo[1]
                ];
                $this->setSale($car, $person, $amount);
            }
        } while ($input_str != "Bye");
    }

    protected function setSale($car, $person, $amount)
    {
        try {

            $this->db->query('SET @sum=0');
            // Insert into car
            $this->db->beginTransaction();
            $stmt = $this->db->prepare("
              INSERT INTO `usedcars`
                (`car_id`,`make`, `model`, `year`)
              VALUES
                (?, ?, ?, ?)");
            $car_id = "null";
            $stmt->bindParam(1, $car_id);
            $stmt->bindParam(2, $car['make']);
            $stmt->bindParam(3, $car['model']);
            $stmt->bindParam(4, $car['year']);
            $stmt->execute();

            $result = $this->db->prepare('SELECT car_id FROM usedcars WHERE make=?');
            $result->execute(array($car['make']));
            $row = $result->fetch(PDO::FETCH_ASSOC);
            $car_id = $row['car_id'];
            // Insert into customers
            $stmt = $this->db->prepare("
              INSERT INTO `customers`
                (`customer_id`,`first_name`, `last_name`)
              VALUES
                (?, ?, ?)");
            $customer_id = "null";
            $stmt->bindParam(1, $customer_id);
            $stmt->bindParam(2, $person['name']);
            $stmt->bindParam(3, $person['family']);
            $stmt->execute();

            $result = $this->db->prepare('SELECT customer_id FROM customers WHERE first_name=?');
            $result->execute(array($person['name']));
            $row = $result->fetch(PDO::FETCH_ASSOC);
            $customer_id = $row['customer_id'];
            // Insert into sales
            $stmt = $this->db->prepare("
              INSERT INTO `sales`
                (`sale_id`,`car_id`, `customer_id`,`amount`)
              VALUES
                (?, ?, ?, ?)");
            $sale_id = "null";
            $stmt->bindParam(1, $sale_id);
            $stmt->bindParam(2, $car_id);
            $stmt->bindParam(3, $customer_id);
            $stmt->bindParam(4, $amount['amount']);
            $stmt->execute();

            $result = $this->db->prepare('SELECT datetime FROM sales WHERE car_id=?');
            $result->execute(array($car_id));
            $row = $result->fetch(PDO::FETCH_ASSOC);
            $date = $row['datetime'];

            echo "New sale entered {$date}" . "\n";


            $totalSales = $this->db->query('SELECT @sum AS total');
            // $totalSales->execute();
            $row = $totalSales->fetch(PDO::FETCH_ASSOC);

            echo "Total sales: {$row['total']}";


            $this->db->commit();
        } catch (PDOException $e) {
            $this->db->rollBack();
            print "Error!: " . $e->getMessage() . "<br/>";
        }
    }

    public function getSales()
    {
        try {
            $this->db->beginTransaction();
            $stmt1 = $this->db->prepare("SELECT make, model,datetime, amount from usedcars
            inner join sales using(car_id)");
            $stmt1->execute();
            while ($row = $stmt1->fetch(PDO::FETCH_ASSOC)) {
                echo $row['make'] . ", " . $row['model'] . ", " . $row['datetime'] . ", " . $row['amount'] . "\n";
            }


            $stmt = $this->db->prepare("
          SELECT SUM(`amount`)AS Total
            FROM `sales` ");
            $stmt->execute();
            $result = $stmt->fetch(PDO::FETCH_ASSOC);

            echo "Total sales: {$result['Total']} BGN";


            $this->db->commit();
        } catch (PDOException $e) {
            $this->db->rollBack();
            print "Error!: " . $e->getMessage() . "<br/>";
        }
    }

    public function getSalesProcedure()
    {
        $this->db->beginTransaction();
        $stmt1 = $this->db->prepare("SELECT make, model,datetime, amount from usedcars
            inner join sales using(car_id)");
        $stmt1->execute();
        while ($row = $stmt1->fetch(PDO::FETCH_ASSOC)) {
            echo $row['make'] . ", " . $row['model'] . ", " . $row['datetime'] . ", " . $row['amount'] . "\n";
        }

        $result = $this->db->query('CALL getSales', PDO::FETCH_ASSOC);
        foreach ($result as $row) {
            echo "Total sales: " . $row['total'] . " BGN";
        }

    }

    public function getFullName($first_name, $last_name)
    {

        $stmt = $this->db->prepare("SELECT concat_name (?, ?) AS fullname ");
        $stmt->bindParam(1, $first_name);
        $stmt->bindParam(2, $last_name);
        $stmt->execute();
        $row = $stmt->fetch(PDO::FETCH_ASSOC);
        echo $row['fullname'];


    }

    public function getDealInfo()
    {

        $stmt = $this->db->prepare("SELECT * FROM deal");

        $stmt->execute();
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            echo $row['datetime'] . ", " . $row['amount'] . ", " . $row['make'] . ", " . $row['model'] . ", " . $row['year'] . ", " . $row['first_name'] . ", " . $row['last_name'] . "\n";
        }
        //$row=$stmt->fetch(PDO::FETCH_ASSOC);
        //print_r($row);


    }

    public function getMoreSalesInfo()
    {
        $stmt = $this->db->prepare("SELECT * FROM deal");

        $stmt->execute();
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            echo $row['make'] . ", " . $row['model'] . ", " . $row['datetime'] . "\n";
            echo "Sold to " . $row['first_name'] . " " . $row['last_name'] . " for BGN " . $row['amount'] . "\n";
            echo "------" . "\n";
        }
        $result = $this->db->query('CALL getSales', PDO::FETCH_ASSOC);
        foreach ($result as $row) {
            echo "Total sales: " . $row['total'] . " BGN";
        }
    }
}

