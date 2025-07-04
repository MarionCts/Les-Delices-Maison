   <?php 
   
   $activeLink = basename($_SERVER['PHP_SELF']);
   
   ?>
   
   <nav class="main__menu">
        <ul>
            <li><a href="./index.php" class="<?= ($activeLink === 'index.php') ? 'active': '' ?>">Accueil</a></li>
            <li><a href="./a-propos.php" class="<?= ($activeLink === 'a-propos.php') ? 'active': '' ?>">À Propos</a></li>
            <li><a href="./astuces.php" class="<?= ($activeLink === 'astuces.php') ? 'active': '' ?>">Astuces</a></li>
            <li><a href="./recettes.php" class="<?= ($activeLink === 'recettes.php') ? 'active': '' ?>">Recettes</a></li>
        </ul>
    </nav>
</div>
</header>