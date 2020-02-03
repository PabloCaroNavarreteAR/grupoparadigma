<?php
    $phone='+549 11 3988 4980';
    $location='Juramento 1475, Piso 8 - Oficina 5';
    $mail='contacto@grparadigma.com';
?>
<div class="nav">
            <div class="topMenu">
                <div class="container">
                    <div class="flex">
                        <div class="leftTop">
                            <ul>
                                <li><span class="spriteTop mail"></span> <?php echo $mail;?></li>
                            </ul>
                        </div>
                        <div class="rightTop">
                            <ul>
                                <li><span class="spriteTop phone"></span> <?php echo $phone;?></li>
                                <li><span class="spriteTop location"></span> <?php echo $location;?></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="menu">
                <div class="container">
                    <nav class="navbar navbar-expand-lg">
                    <?php if($page == 'home'): ?>
                        <a class="navbar-brand" href="#" title="Grupo Paradigma"></a>
                    <?php else: ?>
                        <a class="navbar-brand" href="./" title="Grupo Paradigma"></a>
                    <?php endif;?>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                        </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <?php if($page == 'home'): ?>
                        <ul class="navbar-nav">
                            <li class="nav-item active">
                            <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item">
                            <a class="nav-link" href="#">Sobre nosotros</a>
                            </li>
                            <li class="nav-item">
                            <a class="nav-link" href="#">Team work</a>
                            </li>
                            <li class="nav-item">
                            <a class="nav-link" href="#">Customers</a>
                            </li>
                            <li class="nav-item">
                            <a class="nav-link" href="#">Contacto</a>
                            </li>
                        </ul>
                        <?php else:?>
                            <ul class="navbar-nav">
                            <li class="nav-item active">
                            <a class="nav-link" href="./">Home <span class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item">
                            <a class="nav-link" href="./">Link</a>
                            </li>
                            <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Dropdown
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="./">Action</a>
                                <a class="dropdown-item" href="./">Another action</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="./">Something else here</a>
                            </div>
                            </li>
                            <li class="nav-item">
                            <a class="nav-link disabled" href="./" tabindex="-1" aria-disabled="true">Disabled</a>
                            </li>
                        </ul>
                        <?php endif;?>
                        </div>
                    </nav>
                </div>
            </div>
        </div>