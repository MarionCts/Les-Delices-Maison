<?php 

require './data/recettes.php';

$recipesNumber = count($recettes);
$randomNumber = rand(0, ($recipesNumber - 1));
$randomRecipe = $recettes[$randomNumber];

if (isset($_GET['id']) && is_numeric($_GET['id'])) {
    $id = (int) $_GET['id'];

    if (isset($recettes[$randomNumber])) {
        $recette = $recettes[$randomNumber];
    } else {
        $erreur = "Recette introuvable.";
    }
};

?>

<?php 

include 'includes/header.php'; 
include 'includes/menu.php';

?>

<main class="index__bg">
    <div class="hero__title">
        <h1>Les Délices <span class="hero__title--italic">Maison</span></h1>
        <p>Des recettes saines et équilibrées qui ravissent les papilles !</p>
        <p>Testez une recette au hasard :</p>
    </div>
        <div class="recipe__card index__card">
                        <img src="<?php echo htmlspecialchars($randomRecipe['miniature']); ?>" alt="image de la recette">
                        <div class="recipe__card__title">
                            <h3><?php echo htmlspecialchars($randomRecipe['titre']); ?></h3>
                        </div>
                        <a href="recette.php?id=<?= $randomNumber ?>" class="btn__primary">Voir la recette</a>
                    </div>

</main>
    
<?php 

include 'includes/footer.php'; 

?>