<?php

function getHeader() {
    ?>
    <meta charset="UTF-8">
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg bg-dark">
        <a class="navbar-brand" href="#">Taller Software</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Comisiones <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Empleados</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Facturas</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Mas+
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="../perfiles/">Perfiles</a>
                        <a class="dropdown-item" href="../productos/">Productos</a>
                        <a class="dropdown-item" href="../usuarios">Usuarios</a>
                    </div>
                </li>
            </ul>
        </div>
    </nav>
    <?php
}
