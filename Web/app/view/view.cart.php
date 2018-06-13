
<div class="table-responsive" style="padding: 10px;">
    <table class="table table-striped table-bordered table-hover text-center table-centered"
           style="margin-bottom: 0px !important; margin-left: 00px; margin-right: 0px !important;">
        <thead>
            <th>Nom du produit</th>
            <th>Quantité</th>
            <th>Prix à l'unité</th>
            <th>Facture total</th>
            <th>Action</th>
        </thead>
        <?php
            $con = dbutil::getInstance();
            $cid = $_SESSION['user_id'];
            $res = $con->doQuery("SELECT * FROM `tbl_shopping_cart` WHERE `customer_id` = $cid ; ");
            $rows = $con->getAllRows();
            if($con->getNumRows() < 1)
            {
                $_SESSION['cart_msg'] = "Votre panier est vide ! Ajouter des articles ;) !";
                $_SESSION['cart_dialog'] = 0;
                header("Location: ".Util::php_link('shop'));
            }
            else
            {
                for($i=0;$i<count($rows);$i++)
                {
                    $current_row = $rows[$i];
                    $pname = Products::getProductNameById($current_row['product_id']);
                    $qty = $current_row['quantity'];
                    $unit_price = Products::getPriceById($current_row['product_id']);
                    $total_cost = $qty * $unit_price;
                    ?>
                    <tr>
                        <td>
                            <a href="<?php Util::link('product/view/'.$current_row['product_id']); ?>"><?php echo $pname; ?></a>
                        </td>
                        <td>
                            <?php echo $qty; ?>
                        </td>
                        <td>
                            <?php echo $unit_price; ?>
                        </td>
                        <td>
                            <?php echo $total_cost; ?>
                        </td>
                        <td>
                            <a href="<?php Util::link('order/commit/'.$current_row['product_id'].'/'.$qty); ?>">
                                <button class="btn btn-success">
                                    Commander
                                </button>
                            </a>
                            <a href="<?php Util::link('order/delete/'.$current_row['product_id'].'/'.$qty); ?>">
                                <button class="btn btn-danger">
                                    Supprimer
                                </button>
                            </a>
                        </td>
                    </tr>
        <?php
                }
            }
        ?>
    </table>
</div>