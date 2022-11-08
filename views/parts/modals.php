<div class="modal fade" id="modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">New message</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="" method="GET">
                    <div class="row">
                        <table class="table">
                            <thead>
                            <tr>
                                <th scope="col">Product</th>
                                <th scope="col">Price</th>
                                <th scope="col">Quantity</th>
                                <th scope="col">Total</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <?php foreach (getProducts() as $product): ?>
                                    <th scope="row">
                                        <?= $product['title'] ?>
                                    </th>
                                    <td>
                                        $<?= $product['price'] ?>
                                    </td>

                                <?php endforeach; ?>
                                <td>
                                    <input type="number" name="quantity" value="<?= $product['quantity'] ?>"/>
                                </td>
                                <th scope="row">
                                    <?= $product['price'] * $product['quantity'] ?>
                                </th>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="row">
                        <?php
                        foreach (getProducts() as $product):
                            if ($product['is_option']):
                                ?>
                                <div class="mb-3 col-md-6 col-lg-6 col-sm-12">
                                    <label for="<?= $product['id'] ?>" class="col-form-label">
                                        <?= $product['title'] ?> <b>$<?= $product['price'] ?></b>
                                    </label>
                                    <input type="text" class="form-control" id="<?= $product['id'] ?>"
                                           value="<?= $product['quantity'] ?>">
                                </div>
                            <?php
                            endif;
                        endforeach;
                        ?>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Send message</button>
            </div>
        </div>
    </div>
</div>
