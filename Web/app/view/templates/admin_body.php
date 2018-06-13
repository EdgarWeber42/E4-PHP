<div class="container-fluid">
    <div class="row">
        <nav class="col-sm-3 col-md-2 hidden-xs bg-faded sidebar">


            <!-- CATEGORY COMMENTED ARE THE SOON FEATURE IF THIS IS POSSIBLE -->

            <!--
            <ul class="nav nav-pills flex-column">
                <li class="nav-item" id="1" onclick="makeActive(this);">
                    <a href="<?php Util::link('admin/editPrFoduct'); ?>" class="navlink">Modifier Produits</a>
                </li>
            </ul>-->

            <ul class="nav nav-pills flex-column">
                <li class="nav-item" id="2" onclick="makeActive(this);">
                    <a href="<?php Util::link('admin/editUser'); ?>" class="navlink">Administration Utilisateurs</a>
                </li>
            </ul>

            <ul class="nav nav-pills flex-column">
                <li class="nav-item" id="2" onclick="makeActive(this);">
                    <a href="<?php Util::link('admin/add'); ?>" class="navlink">Ajouter un nouveau produit</a>
                </li>
            </ul>

            <ul class="nav nav-pills flex-column">
                <li class="nav-item" id="2" onclick="makeActive(this);">
                    <a href="<?php Util::link('admin/editCategory'); ?>" class="navlink">Modifier Catégories</a>
                </li>
            </ul>

            <ul class="nav nav-pills flex-column">
                <li class="nav-item" id="3" onclick="makeActive(this);">
                    <a href="<?php Util::link('admin/out_of_stock'); ?>" class="navlink">En rupture de stock</a>
                </li>
            </ul>

            <!--<ul class="nav nav-pills flex-column">
                <li class="nav-item" id="4" onclick="makeActive(this);">
                    <a href="#" class="navlink">Gérer la livraison</a>
                </li>
            </ul>

            <ul class="nav nav-pills flex-column">
                <li class="nav-item" id="3" onclick="makeActive(this);">
                    <a href="--><?php //Util::link('admin/aop'); ?><!--" class="navlink">Ajouter des paiements hors
                        ligne</a>
                </li>
            </ul>

            <ul class="nav nav-pills flex-column">
                <li class="nav-item" id="4" onclick="makeActive(this);">
                    <a href="#" class="navlink">Manage Delivery</a>
                </li>
            </ul>

            <ul class="nav nav-pills flex-column">
                <li class="nav-item" id="3" onclick="makeActive(this);">
                    <a href="--><?php //Util::link('admin/aop'); ?><!--" class="navlink">Add Offline Payments</a>
                </li>
            </ul>-->

            <ul class="nav nav-pills flex-column">
                <li class="nav-item" id="4" onclick="makeActive(this);">
                    <a href="<?php Util::link('admin/trans'); ?>" class="navlink">Tous les paiements</a>
                </li>
            </ul>


            <ul class="nav nav-pills flex-column">
                <li class="nav-item" id="5" onclick="makeActive(this);">
                    <a href="<?php Util::link('admin/atn'); ?>" class="navlink">Ajouter des numéros de transaction</a>
                </li>
            </ul>
            <ul class="nav nav-pills flex-column">
                <li class="nav-item" id="6" onclick="makeActive(this);">
                    <a href="http://localhost/AlgoBreizh/web/login/logout" class="navlink">Déconnection</a>
                </li>
            </ul>
        </nav>
        <main class="col-sm-9 com-md-10 offset-sm-3 offset-md-2 pt-3">
            <!--<div id="update_container" class="updates btn-success" style="border-radius: 2px;">
                <p style="margin-left: 15px;" id="update_text" onclick="dismiss(this);">Changement effectuer (click pour
                    faire disparaitre ce message!)</p>
            </div>-->

