<section id="menu" class="section-gap">
    <div class="container">
        <div class="col-12 section-title">
            <h2>Lorem ipsum dolor sit.</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
        </div>
        <div class="row row-cols-1 row-cols-md-3 g-4">
            <?php
            foreach (getProducts() as $product):
                if (!$product['is_option']):
                    ?>
                    <div class="col col-sm-12 col-md-6 col-lg-4">
                        <div class="card" data-bs-toggle="modal" data-bs-target="#modal">
                            <div class="card-body">
                                <h5 class="card-title"><?= $product['title'] ?></h5>
                                <span class="price">$<?= $product['price'] ?></span>
                                <p class="card-text"><?= $product['description'] ?></p>
                            </div>
                        </div>
                    </div>
                <?php
                endif;
            endforeach;
            var_dump($_GET);
            ?>
        </div>
    </div>
</section>

