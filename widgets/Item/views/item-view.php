<div class="main-container col-lg-2 py-3">
    <a class="text-decoration-none text-dark" href=<?= "/" . $id ?>>
        <div class="py-5 px-2">
            <img class="w-100" src=<?= "http://localhost:8080" . $imageUrl ?> />
            <div class="d-flex justify-content-between mt-3">
                <p class="fw-bolder">
                    <?= $productName ?>
                </p>
                <p class="fw-bolder">
                    <?= $price ?> czk
                </p>
            </div>
        </div>
    </a>
</div>