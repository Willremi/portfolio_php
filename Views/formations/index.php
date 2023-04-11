<?php $pageTitle = "Formations"; ?>
<main id="formations" class="text-center">
    <div class="py-3">
        <div class="row justify-content-center mx-auto">
            <div class="col-10 col-md-9 mb-3 rounded" id="listForm">
                <h2><?= $pageTitle ?></h2>
                <div id="ligne" class="py-2"></div>

                <div class="mb-3 justify-content-center row">
                <?php foreach ($formations as $formation) : ?>
                    <div class="col-md-10">
                    <div class="accordion accordion-flush" id="accordionFlushExample">
                        <div class="accordion-item">
                            <h3 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse<?= $formation->id ?>" aria-expanded="false" aria-controls="flush-collapse<?= $formation->id ?>">
                                    <?= $formation->title ?>
                                </button>
                            </h3>
                            <div id="flush-collapse<?= $formation->id ?>" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                            <div class="accordion-body">
                                <p class="text-dark"><?= $formation->date ?></p>
                                <p class="text-dark"><?= $formation->lieu ?></p>
                            </div>
                        </div>
                        </div>
                    </div>
                    </div>
                <?php endforeach ?>
                </div>

            </div>
        </div>
</main>