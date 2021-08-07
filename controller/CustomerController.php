<?php

class CustomerController
{
    public function __construct()
    {
        require_once 'Utility/ConnectorApi.php';
        require_once 'model/CustomerModel.php';
        $this->view = new View();
        $this->customerModel = new CustomerModel();
        session_start();
    }

    public function registerCustomer()
    {
        if (strcmp($_POST['passwordCustomer'], $_POST['passwordConfirmedCustomer']) === 0) {
            echo '<script>alert("' . $this->customerModel->registerCustomer() . '")</script>';
            $this->showSignInView();
        } else {
            echo '<script>alert("Passwords do not match")</script>';
            $this->showSignInView();
        }
    }

    public function addProductToCustomer()
    {
        if (isset($_SESSION['userName'], $_POST['productId'], $_POST['amountProducts'])) {
            if ($this->customerModel->addProductToCustomer($_SESSION['userName'], $_POST['productId'], $_POST['amountProducts']) == 1) {
                echo json_encode("Producto agregado al carrito");
            } else {
                echo json_encode("El producto ya está en el carrito");
            }
        }
    }

    public function getProductsByCustomer()
    {
        echo json_encode($this->customerModel->getProductsByCustomer($_SESSION['userName']));
    }

    public function deleteProductCart()
    {
        $this->customerModel->deleteProductCart($_SESSION['userName'], $_POST['productId']);
        echo json_encode(
            "Product removed"
        );
    }

    public function purchaseProducts()
    {
        $this->customerModel->purchaseProducts($_SESSION['userName']);
        echo json_encode(
            "Compra Exitosa"
        );
    }

    public function purchaseProduct()
    {
        if (isset($_POST['productId'], $_POST['amountProducts'])) {
            $this->customerModel->purchaseProduct($_SESSION['userName'], $_POST['productId'], $_POST['amountProducts']);
            echo json_encode(
                "Compra Exitosa"
            );
        }
    }

    public function getOrderHeaderCustomer()
    {
        echo json_encode($this->customerModel->getOrderHeader($_SESSION['userName']));
    }

    public function getPurchasedProducts()
    {
        echo json_encode($this->customerModel->getPurchasedProducts($_SESSION['userName'], $_POST['orderHeaderId']));
    }

    public function showSignInView()
    {
        $this->view->show("signInView.php", null);
    }
}
