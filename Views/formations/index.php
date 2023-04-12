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
                                <div class="row pb-2">
                                    <div class="col-md-6">
                                        <span><?= $formation->lieu ?></span>
                                    </div>
                                    <div class="col-md-6">
                                    <span><?= $formation->date ?></span>
                                    </div>
                                </div>
                                <?php if($formation->actions): ?>
                                    <div id="ligne" class="py-2"></div>
                                    <div class="d-flex justify-content-md-center">
                                    <ul>
                                        <?php foreach($formation->actions as $liste): ?>
                                            <li><?= $liste->description ?></li>
                                        <?php endforeach ?>
                                    </ul>
                                    </div>
                                <?php endif ?>
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