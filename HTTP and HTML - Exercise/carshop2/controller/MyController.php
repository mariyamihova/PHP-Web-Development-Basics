<?php
class MyController extends Controller
{
    public function main()
    {
        include "view/header.php";
        include "view/main.php";

        switch($this->input){

            case 'sales':
            $this->viewSales();
            break;
            case 'addSale':
                $this->addSale();
                break;
            case 'customers':
             $this->viewCustomers();
                break;
            case 'cars':
                $this->viewCars();
                break;
            case 'search':
                $this->searchCarOwner();
                break;
            case 'updateCar':
                $this->updateCar();
                break;
            case 'updateSale':
                $this->updateSale();
                break;
            case 'updateCustomer':
                $this->updateCustomer();
                break;
            default:
                $this->returnError();
                break;
        }
        include "view/footer.php";
    }


    public function viewSales()
    {
        $s = new SalesModel($this->db);
        $sales = $s->readAll();
        $sales_total = $s->readTotal();
        include "view/read_sales.php";
    }


    public function addSale(){

        include'view/add_sale.php';

        if(isset($_POST['make'])&&isset($_POST['model'])&&isset($_POST['year'])&&isset($_POST['first_name'])&&isset($_POST['last_name'])
            &&isset($_POST['amount'])){

            $make=$_POST['make'];
            $model=$_POST['model'];
            $year=$_POST['year'];

            $car=new CarsModel($this->db);
            $car_id=$car->create($make,$model,$year);

            $first_name=$_POST['first_name'];
            $last_name=$_POST['last_name'];

            $amount=$_POST['amount'];

            $customer=new CustomersModel($this->db);
            $customer_id=$customer->create($first_name,$last_name);
            $datetime=date('Y-m-d H:i:s');
            $sale=new SalesModel($this->db);
            $sale->create($car_id,$customer_id,$datetime,$amount);

            include "view/record_added.php";

            //return $this->viewSales();

        }
    }

    public function viewCustomers()
    {
        $c = new CustomersModel($this->db);
        $customers = $c->readAll();

        include "view/read_customers.php";
    }

    public function viewCars()
    {
        $c = new CarsModel($this->db);
        $cars = $c->readAll();

        include "view/read_cars.php";
    }
    public function returnError()
    {
        header("HTTP/1.0 404 Not Found");

        include "view/error_page.php";
    }


    public function searchCarOwner(){
        include'view/search_make.php';
        if(isset($_POST['make'])){
            $carMake=$_POST['make'];
            $car=new CarsModel($this->db);
            $owners=$car->findCarOwner($carMake);
            include "view/car_owners.php";
        }

    }
    public function updateCar(){
        include'view/update_car.php';
if(isset($_POST['car_id'])&&isset($_POST['make'])&&isset($_POST['model'])&&isset($_POST['year'])){

    $id=$_POST['car_id'];
    $make=$_POST['make'];
    $model=$_POST['model'];
    $year=$_POST['year'];

    $car=new CarsModel($this->db);
    $car->update($id,$make,$model,$year);



}
    }
    public function updateSale(){
        include'view/update_sale.php';

        if(isset($_POST['sale_id'])&&isset($_POST['datetime'])&&isset($_POST['amount'])){

            $id=$_POST['sale_id'];
            $datetime=$_POST['datetime'];
            $amount=$_POST['amount'];


            $sale=new SalesModel($this->db);
            $sale->update($id,$datetime,$amount);



        }
    }
    public function updateCustomer(){
        include'view/update_customer.php';

        if(isset($_POST['customer_id'])&&isset($_POST['first_name'])&&isset($_POST['last_name'])){

            $id=$_POST['customer_id'];
            $fname=$_POST['first_name'];
            $lname=$_POST['last_name'];


            $customer=new CustomersModel($this->db);
            $customer->update($id,$fname,$lname);



        }
    }
}
