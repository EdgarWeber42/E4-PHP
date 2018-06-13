<?php
    ob_start();
    if (session_status() == PHP_SESSION_NONE)
    {
        session_start();
    }
?>

<html>
    <head>
        <title>AlgoBreizh</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="http://localhost/AlgoBreizh/web/bootstrap/css/bootstrap.css">
        <link rel="stylesheet" href="http://localhost/AlgoBreizh/web/css/style.css">
        <script defer src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
        <script src="http://localhost/AlgoBreizh/web/js/jquery-3.2.1.min.js" ></script>
        <script src="http://localhost/AlgoBreizh/web/js/script.js" ></script>
        <script src="http://localhost/AlgoBreizh/web/bootstrap/js/bootstrap.js"></script>
    </head>
    <header id="header">
        <nav class="navbar navbar-default">
            <div class="containers" style="padding-left: 0px !important; padding-right: 0px !important;">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand title" href="<?php Util::link("home"); ?>">
                        <img src="http://localhost/AlgoBreizh/web/img/AlgoBreizh_Logo_128px.png" alt="Logo AlgoBreizh" style="width:48px;height:30px;">
                    </a>
                </div>
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav">
                        <!--<li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Produits<span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <?php
                                    $category_list = Products::getCategoryAndId();
                                    for($i=0;$i<count($category_list);$i++)
                                    {
                                        $category = $category_list[$i];
                                        ?>
                                        <li>
                                            <a href="<?php Util::link('category/view/'.$category['category_id']); ?>"><?php echo $category['category_name']; ?></a>
                                        </li>
                                <?php
                                    }
                                ?>
                            </ul>
                        </li>-->
                        <li><a href="<?php Util::link('shop'); ?>">Magasin</a></li>
                        <li><a href="<?php Util::link('about') ?>">A Propos</a></li>

                        <li><a href="<?php Util::link('contact') ?>">Contact</a></li>
                    </ul>

                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="<?php  Util::link("cart"); ?>">Panier</a></li>
                        <?php
                            if(isset($_SESSION['user']))
                            {
                                ?>
                                <li class="dropdown">
                                    <a id="loggedin" class="dropdown-toggle" data-toggle="dropdown"
                                       role="button" aria-haspopup="true" aria-expanded="false">
                                        <?php
                                        if(isset($_SESSION['user']))
                                        {
                                            echo $_SESSION['user']."<span class='caret'></span>";
                                            Util::log("User Logged in!");
                                        }
                                        ?>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <?php
                                            if(isset($_SESSION['user'])) {
                                                if($_SESSION['role'] == 'admin') { ?>
                                                    <li><a href="http://localhost/AlgoBreizh/web/admin">Admin Panel</a></li>
                                                    <li role="separator" class="divider"></li>
                                                    <li><a href="<?php  Util::link("login/logout"); ?>">Logout</a></li>
                                                    <?php
                                                } else {
                                                    ?>
                                                <li><a href="<?php Util::link('customer/view/'.$_SESSION['user_id']); ?>">Profil</a></li>
                                                <li><a href="<?php Util::link('customer/update/'.$_SESSION['user_id']); ?>">Modifier profil</a></li>
                                                <!--<li><a href="<?php Util::link('payment/view'); ?>">Mes Paiments</a></li>-->
                                                <li><a href="<?php Util::link('order/log'); ?>">Mes commandes</a></li>
                                                <li role="separator" class="divider"></li>
                                                <li><a href="<?php  Util::link("login/logout"); ?>">Déconnexion</a></li>
                                                <?php
                                                }
                                            }
                                        ?>
                                    </ul>
                                </li>
                                <?php
                            } else {
                                echo "<li><a href='".Util::php_link("login")."'>Login / Sign Up</a></li>";
                            }
                        ?>
                    </ul>
                </div>
            </div>
        </nav>
        <div id="notification">A simple Notification</div>
    </header>

    <body>
