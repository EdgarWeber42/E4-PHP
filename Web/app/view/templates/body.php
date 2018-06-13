<div class="container" style="font-family: Trebuchet MS; padding-left: 50px; padding-right: 50px;">
    <div class="row center-block">
        <div class="row">
            <div class="col-md-9">
                <h3>Nos Produits</h3>
            </div>
            <div class="col-md-3" style="padding-top: 7px;">
                <div class="controls pull-right hidden-xs">
                    <a class="left fa fa-arrow-left" href="#carousel-example" data-slide="prev">
                        &nbsp;
                    </a>
                    <a class="right fa fa-arrow-right" href="#carousel-example" data-slide="next">
                        &nbsp;
                    </a>
                </div>
            </div>
        </div>
        <?php
        $products = Products::getProducts();
        $cnt = 0;
        ?>
        <div id="carousel-example" class="carousel slide hidden-xs" data-ride="carousel">
            <div class="carousel-inner">
                <div class="item active">
                    <div class="row">
                        <?php
                        for ($i = 0; $i < count($products); $i++) {
                            $product = $products[$i];
                            if ($i < 3) {
                                ?>
                                <div class="col-md-4">
                                    <div class="col-item">
                                        <div class="photo">
                                            <img style="height: 260px !important;"
                                                 src="<?php Util::link('img/produits/' . $product['product_image']); ?>"
                                                 class="img-responsive" alt="">
                                        </div>
                                        <div class="info">
                                            <div class="row">
                                                <div class="price col-md-8">
                                                    <h5>
                                                        <?php echo $product['product_name']; ?>
                                                    </h5>
                                                </div>
                                                <div class="col-md-4">
                                                    <h5 class="price-text-color pull-right">
                                                        &nbsp; <?php echo $product['price']; ?>€
                                                    </h5>
                                                </div>
                                            </div>
                                            <div class="des">
                                                <p><?php echo $product['description']; ?></p>
                                            </div>
                                            <div class="separator clear-left">
                                                <p class="btn-add">
                                                    <i class="fa fa-shopping-cart"></i>
                                                    <a href="<?php Util::link('cart/add/' . $product['product_id']); ?>"
                                                       class="hidden-sm">Ajouter au panier</a>
                                                </p>
                                                <p class="btn-details">
                                                    <i class="fa fa-list"></i>
                                                    <a href="<?php Util::link('product/view/' . $product['product_id']); ?>"
                                                       class="hidden-sm">Plus d'informations</a>
                                                </p>
                                            </div>
                                            <div class="clearfix">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <?php
                            } else {
                                break;
                            }
                        }
                        ?>
                    </div>
                </div>
                <?php
                $first = 0;
                for ($i = 3; $i < count($products); $i++) {
                    $product = $products[$i];
                    if ($cnt == 3 || $first == 0) {
                        $first = 1;
                        $cnt = 0;
                        echo "<div class=\"item\">
                    <div class=\"row\">";
                    }
                    ?>
                    <div class="col-md-4">
                        <div class="col-item">
                            <div class="photo">
                                <img style="height: 260px !important;"
                                     src="<?php Util::link('img/produits/' . $product['product_image']); ?>"
                                     class="img-responsive" alt="">
                            </div>
                            <div class="info">
                                <div class="row">
                                    <div class="price col-md-8">
                                        <h5>
                                            <?php echo $product['product_name']; ?>
                                        </h5>
                                    </div>
                                    <div class="col-md-4">
                                        <h5 class="price-text-color pull-right">
                                            &nbsp; <?php echo $product['price']; ?>€
                                        </h5>
                                    </div>
                                </div>
                                <div class="des">
                                    <p><?php echo $product['description']; ?></p>
                                </div>
                                <div class="separator clear-left">
                                    <p class="btn-add">
                                        <i class="fa fa-shopping-cart"></i>
                                        <a href="<?php Util::link('cart/add/' . $product['product_id']); ?>"
                                           class="hidden-sm">Ajouter au panier</a>
                                    </p>
                                    <p class="btn-details">
                                        <i class="fa fa-list"></i>
                                        <a href="<?php Util::link('product/view/' . $product['product_id']); ?>"
                                           class="hidden-sm">Plus d'informations</a>
                                    </p>
                                </div>
                                <div class="clearfix">
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php
                    if ($cnt == 2) {
                        echo "</div></div>";
                    }
                    $cnt++;
                }
                ?>
            </div>
        </div>
        <br><br>
        <div class="row">
            <div class="col-md-4 col-lg-4 col-sm-6 col-xs-12">
                <div class="text-justify text-border">
                    <p style="padding: 10px; color: #67AD54;">
                        TODO : Description du savoir faire d'AlgoBreizh
                    </p>
                </div>
                <div class="text-center"
                     style="padding: 20px;background-color: #00580a;color: white; font-weight: bold;">
                    TODO : Info
                </div>
            </div>
            <div class="col-md-4 col-lg-4 col-sm-6 col-xs-12">
                <div class="text-justify text-border">
                    <p style="padding: 10px; color: #67AD54;">
                        TODO : Description du savoir faire d'AlgoBreizh
                    </p>
                </div>
                <div class="text-center"
                     style="padding: 20px;background-color: #00580a;color: white; font-weight: bold;">
                    TODO : Info
                </div>
            </div>
            <div class="col-md-4 col-lg-4 col-sm-6 col-xs-12">
                <div class="text-justify text-border">
                    <p style="padding: 10px; color: #67AD54;">
                        TODO : Description du savoir faire d'AlgoBreizh
                    </p>
                </div>
                <div class="text-center"
                     style="padding: 20px;background-color: #00580a;color: white; font-weight: bold;">
                    TODO : Info
                </div>
            </div>
        </div>
    </div>