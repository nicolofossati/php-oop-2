<?php
require __DIR__ . '/Models/Article.php';
require __DIR__ . '/Models/Food.php';
require __DIR__ . '/Models/Toy.php';
require __DIR__ . '/Models/Product.php';

require __DIR__ . '/db.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">


    <link rel="stylesheet" href="style.css">
    <title>Animal commerce</title>
</head>

<body>
    <div class="container">
        <h1 class="text-center">Animal e-commerce</h1>
        <div class="row d-flex flex-wrap justify-content-evenly">
            <?php
            foreach ($articles as $key => $article) {
                ?>
                <div class="card col-3 mx-2 my-5">
                    <h1 class="text-center">
                        <?php echo $article->name ?>
                    </h1>
                    <div>
                        <p class="text-center">
                            Type:
                            <?php echo get_class($article) ?>
                        </p>
                    </div>
                    <img src="<?php echo $article->img ?>" alt="">
                    <div class="category">
                        <i class="fa-solid fa-<?php echo $article->category ?>"></i>
                    </div>
                    <h3 class="text-center">
                        <?php echo $article->brand ?>
                    </h3>

                    <div class="specific-info">
                        <?php if (get_class($article) == 'Food') { ?>
                            <p class="text-center">Calorie:
                                <?php echo $article->calories; ?>
                            </p>

                        <?php }
                        if (get_class($article) == 'Food' || get_class($article) == 'Product') { ?>
                            <p class="text-center">Peso:
                                <?php echo $article->weight; ?>kg
                            </p>

                        <?php }
                        if (get_class($article) == 'Toy' || get_class($article) == 'Product') { ?>
                            <p class="text-center">
                                <?php echo $article->getDimension(); ?>
                            </p>
                        <?php } ?>
                    </div>

                    <h2 class="text-center">
                        <?php echo $article->price ?>$
                    </h2>
                </div>
                <?php
            }
            ?>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
        crossorigin="anonymous"></script>
</body>

</html>