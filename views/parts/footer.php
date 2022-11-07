<footer class="footer-area section-gap md-gap">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-lg-5 col-md-5">
                <div class="footer-widget">
                    <h6>About us</h6>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus consectetur culpa fuga illo
                        maiores mollitia nulla quisquam quod sequi, veritatis?</p>
                    <p class="coyright">
                        Copyright &copy 2022 All rights reserved | This template is made with by Colorlib
                    </p>
                </div>
            </div>
            <div class="col-sm-12 col-lg-5 col-md-5">
                <div class="footer-widget">
                    <h6>Newsletters</h6>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequatur, labore!</p>
                    <form action="/" method="get" class="form-inline">
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" placeholder="Recipient's username"
                                   aria-label="Recipient's username" aria-describedby="button-addon2">
                            <button class="btn btn-outline-secondary" type="button" id="button-addon2">Subscribe
                            </button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-sm-12 col-lg-2 col-md-2">
                <div class="footer-widget">
                    <h6>Follow us</h6>
                    <p>Lorem ipsum dolor sit.</p>
                    <div class="footer-social d-flex align-items-center">
                        <a href="#"><i class="fa-brands fa-facebook"></i></a>
                        <a href="#"><i class="fa-brands fa-instagram"></i></a>
                        <a href="#"><i class="fa-brands fa-youtube"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>

</footer>

<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">New message</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="" method="GET">
                    <div class="mb-3">
                        <label for="recipient-name" class="col-form-label">Recipient:</label>
                        <input type="text" class="form-control" id="recipient-name">
                    </div>
                    <div class="mb-3">
                        <label for="message-text" class="col-form-label">Message:</label>
                        <textarea class="form-control" id="message-text"></textarea>
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


<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p"
        crossorigin="anonymous"></script>
<script src="<?= ASSETS_URI ?>/lib/bootstrap/bootstrap.bundle.min.js"></script>
<script src="<?= ASSETS_URI ?>/js/main.js"></script>
</body>
</html>