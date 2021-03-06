<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="author" content="Grupo 2 - Programación Avanzada"/>
    <meta name="keywords" content="store, covid, online, clean" />
    <link rel="stylesheet" href="public/css/bootstrap.min.css" />
    <link rel="stylesheet" href="public/css/style.css" />
    <link rel="stylesheet" href="public/css/styleCustomerView.css" />
    <script type="text/javascript" src="public/js/jquery.js"></script>
    <script src="public/js/modal.js"></script>
    <script src="public/js/dynamic_view_product.js"></script>
    <script src="public/js/manage_store.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css">
    <link href="https://chatcompose.azureedge.net/static/all/global/export/css/main.5b1bd1fd.css" rel="stylesheet">    <script async type="text/javascript" src="https://chatcompose.azureedge.net/static/all/global/export/js/main.a7059cb5.js?user=jpiedraf-Tienda&lang=ES" user="jpiedraf-Tienda" lang="ES"></script>  
    <title>Tienda en linea</title>
</head>

<body >
    <?php
    include_once 'headerCustomerView.php';

    ?>
    <main id="mainCustomerView" class="page-main page-main--tours">
        <div class="modal fade" id="shoppingCartModal" tabindex="-1" aria-labelledby="shoppingCartModal" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        
                        <h5 class="modal-title">Carrito de compras</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="container">
                            <div class="row">
                                <div class="col-12 scrollme">
                                    <table id="example" class="table table-bordered table-responsive">
                                        <thead class="table-dark">
                                            <tr>
                                                <th scope="col">ID</th>
                                                <th scope="col">Name</th>
                                                <th scope="col">Unit price</th>
                                                <th scope="col">Amount</th>
                                                <th scope="col">Image</th>
                                                <th scope="col">Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody class="tbody-shopping-cart"></tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                        <button id="btn_showHistoryPurchase" type="button" class="btn btn-primary" data-bs-dismiss="modal" data-bs-toggle="modal" data-bs-target="#purchaseHistory">Historial</button>
                        <button id="btn_purchase" type="button" data-bs-dismiss="modal" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#checkOutModal">Finalizar Venta</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="searchModal" tabindex="-1" aria-labelledby="searchModal" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title"></h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form method="POST">
                            <div class="container">
                                <label class="mt-2 mb-2">Nombre Producto</label>
                                <input id="productNameSearch" class="form-control" type="text" name="discountedPrice" placeholder="Name" required>
                            </div>
                            <div class="container">
                                <label class="mb-2" for="inputCategories">Categorias</label>
                                <select id="selectCategories" class="form-select" name="categorySelected"></select>
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                        <button id="btnQuitSearch" type="button" class="btn btn-primary">Quitar busqueda</button>
                        <button id="btn_search" type="button" class="btn btn-primary">Buscar</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="amountModal" tabindex="-1" aria-labelledby="amountModal" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Cuantos productos desea agregar?</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form>
                            <div class="container">
                                <input id="amount_products" class="form-control" type="number" value="1" min="1" name="amountProducts" placeholder="Amount" required>
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                        <button id="btn_amount_products" type="submit" data-bs-dismiss="modal" class="btn btn-primary btn_direct_purchase">Enviar</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="amountModalDirect" tabindex="-1" aria-labelledby="amountModalDirect" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Cuantos productos desea comprar?</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form>
                            <div class="container">
                                <input id="amount_products-direct" class="form-control" type="number" value="1" min="1" name="amountProducts" placeholder="Amount" required>
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                        <button id="btn_direct_purchase" type="submit" data-bs-dismiss="modal" data-bs-toggle="modal" data-bs-target="#directcheckOutModal" data-bs-dismiss="modal" class="btn btn-primary">Enviar</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="checkOutModal" tabindex="-1" aria-labelledby="checkOutModal" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Informacion de Pago</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-12 order-md-1">
                                <form method="POST" action="?controller=Customer&action=purchaseProducts">
                                    <div class="row">
                                        <div class="col-md-6 mb-3">
                                            <label for="firstName">Nombre</label>
                                            <input type="text" class="form-control" required="">
                                            <div class="invalid-feedback"> Requiere nombre valido. </div>
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label for="lastName">Apellido</label>
                                            <input type="text" class="form-control" required>
                                            <div class="invalid-feedback"> Requiere apellido valido. </div>
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <label for="email">Correo <span class="text-muted">(Opcional)</span></label>
                                        <input type="email" class="form-control" placeholder="you@example.com">
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6 mb-3">
                                            <label for="cc-name">Nombre en tarjeta</label>
                                            <input type="text" class="form-control" required>
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label for="cc-number">Numero de tarjeta</label>
                                            <input type="text" class="form-control" placeholder="0000-0000-0000-0000" required>
                                            <div class="invalid-feedback"> Requiere numero de tarjeta </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-3 mb-3">
                                            <label for="cc-expiration">Expiracion</label>
                                            <input type="text" class="form-control" placeholder="mm/yy" required>
                                            <div class="invalid-feedback"> Expiration date required </div>
                                        </div>
                                        <div class="col-md-3 mb-3">
                                            <label for="cc-cvv">CVV</label>
                                            <input type="text" class="form-control" placeholder="123" required>
                                        </div>
                                    </div>
                                    <div class="modal-footer p-0 pt-3">
                                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancelar</button>
                                        <button id="btn_confirm-purchase" type="button" data-bs-dismiss="modal" class="btn btn-primary btn-block">Confirmar compra</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="directcheckOutModal" tabindex="-1" aria-labelledby="directcheckOutModal" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Payment Information</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-12 order-md-1">
                                <form method="POST" action="?controller=Customer&action=purchaseProducts">
                                    <div class="row">
                                        <div class="col-md-6 mb-3">
                                            <label for="firstName">First name</label>
                                            <input type="text" class="form-control" required="">
                                            <div class="invalid-feedback"> Valid first name is required. </div>
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label for="lastName">Last name</label>
                                            <input type="text" class="form-control" required>
                                            <div class="invalid-feedback"> Valid last name is required. </div>
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <label for="email">Email <span class="text-muted">(Optional)</span></label>
                                        <input type="email" class="form-control" placeholder="correo@ejemplo.com">
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6 mb-3">
                                            <label for="cc-name">Name on card</label>
                                            <input type="text" class="form-control" required>
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label for="cc-number">Credit card number</label>
                                            <input type="text" class="form-control" placeholder="0000-0000-0000-0000" required>
                                            <div class="invalid-feedback"> Credit card number is required </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-3 mb-3">
                                            <label for="cc-expiration">Expiration</label>
                                            <input type="text" class="form-control" placeholder="mm/aa" required>
                                            <div class="invalid-feedback"> Expiration date required </div>
                                        </div>
                                        <div class="col-md-3 mb-3">
                                            <label for="cc-cvv">CVV</label>
                                            <input type="text" class="form-control" placeholder="123" required>
                                        </div>
                                    </div>
                                    <div class="modal-footer p-0 pt-3">
                                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancel</button>
                                        <button id="btn_confirm-direct-purchase" type="button" data-bs-dismiss="modal" class="btn btn-primary btn-block">Confirm purchase</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="purchaseHistory" tabindex="-1" aria-labelledby="purchaseHistory" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Historial de Compra</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="container">
                            <div class="row">
                                <div class="col-12 scrollme">
                                    <table id="example" class="table table-bordered table-responsive">
                                        <thead class="table-dark">
                                            <tr>
                                                <th scope="col">ID</th>
                                                <th scope="col">Total</th>
                                                <th scope="col">Date time</th>
                                                <th scope="col">Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody class="tbody-purchase-history"></tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#shoppingCartModal" data-bs-dismiss="modal">Go back</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="productsPurchasedCust" tabindex="-1" aria-labelledby="productsPurchasedCust" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Purchase history</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="container">
                            <div class="row">
                                <div class="col-12 scrollme">
                                    <table id="example" class="table table-bordered table-responsive">
                                        <thead class="table-dark">
                                            <tr>
                                                <th scope="col">Product name</th>
                                                <th scope="col">Unit price</th>
                                                <th scope="col">Total detail</th>
                                                <th scope="col">Amount products</th>
                                            </tr>
                                        </thead>
                                        <tbody class="tbody-products-purchased"></tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#purchaseHistory" data-bs-dismiss="modal">Regresar</button>
                    </div>
                </div>
            </div>
        </div>

       
    </main>

   
    
    <script src="public/js/bootstrap.bundle.min.js"></script>
</body>
<?php
// require_once 'footerView.php';
?>