<?php

class product
{
    public function view($id)
    {
        $con = dbutil::getInstance();
        $res = $con->doQuery("SELECT * FROM `tbl_products` WHERE `tbl_products`.`product_id` = $id");
        $rows = $con->getAllRows();
//        var_dump($rows);
        if ($con->getNumRows() == 0) {
            header('Location: ' . Util::php_link('error404'));
            return;
        }
        $pdct = $rows[0];
        $cat = Products::getCategoryById($id);
        $stock_staus = "STOCK AVAILABLE";
        $color = "green";
        if ($pdct['stock_available'] == 0) {
            $stock_staus = "NO STOCK";
            $color = "red";
        }
        $min = 1;
        $max = $pdct['stock_available'];
        $update_link = "http://localhost/AlgoBreizh/web/admin/updateView/" . $id;
        $delete_link = "http://localhost/AlgoBreizh/web/admin/delete/" . $id;
        $field = "<input class=\"form-control\" type=\"number\" placeholder=\"Quantity\" step=\"1\" min=\"$min\" max=\"$max\">";
        $post_to = "http://localhost/AlgoBreizh/web/cart/add/" . $pdct['product_id'];
        if (isset($_SESSION['user']) && $_SESSION['role'] == 'admin') {
            $post_to = '#';
            if (isset($_POST['delete'])) {
                header("Location: " . Util::php_link('admin/delete/' . $id));
            }

            if (isset($_POST['update'])) {
                header("Location: " . Util::php_link('admin/updateView/' . $id));
            }
        }

        require APP . 'view/templates/header.php';
        //var_dump($pdct);
        //die();
        echo '<div class="row">
                    <div class="col-md-5 product_img">
                        <img src="' . 'http://localhost/AlgoBreizh/web/img/produits/' . $pdct['product_image'] . '" class="img-responsive center-block">
                    </div>';
        echo '<form action="' . $post_to . '" method="post">
                    <div class="col-md-6 product_content">
                        <h3>Nom du produit: <span>' . $pdct['product_name'] . '</span></h3>
                        <p style="font-weight:bold; color: ' . $color . ';">' . $stock_staus . '</p>
                        <h4>Catégorie: <span>' . $cat . '</span></h4>
                        
                        <p><strong>Description: </strong>' . ' ' . $pdct['description'] . '</p>
                        <p><strong>fonctionnalités: </strong>' . ' ' . $pdct['features'] . '</p>
                        <h3 class="cost">' . $pdct['price'] . '<span class="glyphicon">€</span></h3>
                        <div class="row">
                            <div class="col-md-3">
                                ' . $field . '
                            </div>
                        </div>
                        <div class="space-ten"></div>
                    ';
//        var_dump($_SESSION);
        if (isset($_SESSION['user']) && $_SESSION['role'] == 'admin') {
            echo '</form><a href="' . $update_link . '"><button name="update" class="btn btn-info">Update</button></a>
                            <a href="' . $delete_link . '"><button name="delete" class="btn btn-danger">Delete</button></a> ';
        } else {
            echo '<div class="btn-ground">';
            echo '<button type="submit" value="submit" name="addcart" class="btn btn-primary">
                            <span class="glyphicon glyphicon-shopping-cart"></span> Ajouter au panier</button>';
            echo '    </form>
                        </div>
                    </div>
                </div>';
        }

        if (isset($_SESSION['cart_msg']) && isset($_SESSION['cart_dialog'])) {
            if ($_SESSION['cart_dialog'] == 0) {
                $_SESSION['cart_dialog'] = 1;
                Util::setNotification($_SESSION['cart_msg']);
                Util::setNotificationBackground("green");
                Util::js("notification();");
            }
        }
        require APP . 'view/templates/footer.php';
    }

    public function cat($cid)
    {
        require APP . 'view/templates/header.php';
        require APP . 'view/templates/footer.php';
    }
}

?>