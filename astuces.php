<?php

require 'data/astuces.php';

?>

<?php

include 'includes/header.php';
include 'includes/menu.php';

?>

<main>
    <div class="tips__title">
        <h3 class="primary__title">Astuces <span>de cuisine</span></h3>
        <p class="slogan">Découvrez mes astuces pour tirer le meilleur parti des recettes répertoriées sur ce site.</p>
    </div>
    <div class="tips__container">
        <?php foreach ($tips as $index => $tip): ?>
            <div class="tips__content">
                <h4><?= $tip['titre'] ?></h4>
                <p><?= $tip['astuce'] ?></p>
            </div>
        <?php endforeach ?>
    </div>
</main>

<?php

include 'includes/footer.php';

?>