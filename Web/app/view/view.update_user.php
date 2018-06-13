<div class="container-fluid">
    <div class="row center-block">
        <h3>Editer utilisateur :</h3>
        <?php
        $customers = Products::getCustomerId();

        ?>
        <form class="form-horizontal" action="<?php Util::link('admin/editUser'); ?>" method="POST">
            <div class="form-inline">
                <select class="form-control" name="clist" id="clist">
                    <?php

                    for($i=0;$i<count($customers);$i++)
                    {
                        $customer = $customers[$i];
                        ?>
                        <option value="<?php echo $customer['customer_id']; ?>"><?php echo $customer['customer_name']; ?></option>
                        <?php
                    }
                    ?>
                </select>
                <input type="submit" value="Ajouter" name="submit" class="form-control btn btn-success">
                <input type="submit" value="Mettre à jour" name="submit" class="form-control btn btn-success">
                <input type="submit" value="Supprimer" name="delete" class="form-control btn btn-danger">
            </div>
            <br>
                <div class="form-horizontal" style="width:800px;">
                    <form id="f1" action="<?php Util::link('customer/view/'.$this->customer_id); ?>" method="post">
                        <table class="table table-bordered table-responsive">
                            <tbody>
                            <tr>
                                <th style="padding: 10px;">Name</th>
                                <td style="padding: 10px;">
                                    <input class="form-control" type="text" name="uname" value="<?php echo $customer['customer_name']; ?>">
                                </td>
                            </tr>
                            <tr>
                                <th style="padding: 10px;">Contact</th>
                                <td style="padding: 10px;">
                                    <input class="form-control" type="text" name="umobile" value="<?php echo $customer['customer_phone']; ?>">
                                </td>
                            </tr>
                            <tr>
                                <th style="padding: 10px;">Address</th>
                                <td style="padding: 10px;">
                                    <input class="form-control" type="text" name="uaddress" value="<?php echo $customer['customer_address']; ?>">
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </form>
                </div>
        </form>
    </div>
</div>