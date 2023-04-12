<?php $pageTitle = "Experiences"; ?>
<main id="experiences" class="text-center">
    <div class="py-3">
        <div class="row justify-content-center mx-auto">
            <div class="col-10 col-md-9 mb-3 rounded" id="listExp">
                <h2><?= $pageTitle ?></h2>
                <div id="ligne" class="py-2"></div>
                <div class="row justify-content-center mx-auto">
                    <?php foreach ($experiences as $exp) : ?>
                        <div class="col-6 col-md-4">
                            <div class="card mb-2 text-dark">
                                <div class="card-header">
                                    <h5><?= $exp->title ?></h5>
                                </div>
                                <div class="card-body" id="detailJob">
                                    <span><?= $exp->date ?></span><br>
                                    <span><?= $exp->lieu ?></span>
                                    <details>
                                        <summary>Activités</summary>
                                        <ul id="liste">
                                            <?php foreach($exp->missions as $mission): ?>
                                                <li><?= $mission->title ?></li>
                                            <?php endforeach ?>
                                        </ul>
                                    </details>
                                </div>
                            </div>
                        </div>
                    <?php endforeach ?>
                </div>
            </div>
        </div>
    </div>
</main>