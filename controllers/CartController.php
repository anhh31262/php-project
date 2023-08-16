<?php
    include "models/CartModel.php";
    class CartController extends Controller {
        use CartModel;
        public function __construct() {
            if(isset($_SESSION["cart"]) == false) 
                $_SESSION['cart'] = array();
        }
        public function index() {
            $this->loadView("CartView.php");
        }
        public function create() {
            $id = isset($_GET["id"]) ? $_GET["id"] : 0;
            $this->cartAdd($id);
            header("location:index.php?controller=cart");
        }
        public function delete() {
            $id = isset($_GET["id"]) ? $_GET["id"] : 0;
            $this->cartDelete($id);
            header("location:index.php?controller=cart");
        }
        public function destroy() {
            $this->cartDestroy();
            header("location:index.php?controller=cart");
        }
        public function update() {
            foreach($_SESSION["cart"] as $product) {
                $name = "product_".$product["id"];
                $number = $_POST[$name];
                $this->cartUpdate($product["id"],$number);
            }
            header("location:index.php?controller=cart");
        }
        public function checkout() {
            if(isset($_SESSION["customer_email"]) == false) 
                header("location:index.php?controller=account&action=login");
            else {
                $this->cartCheckOut();
                header("location:index.php?controller=cart");
            }
        }
    }
?>