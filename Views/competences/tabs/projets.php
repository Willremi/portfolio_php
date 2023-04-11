<div class="tab-pane fade" id="projet" role="tabpanel" aria-labelledby="projet-tab">
    <div class="row justify-content-center mx-auto">
        <div class="col-10 col-md-9 mb-3 rounded" id="projets">
            <h2>Projets réalisés</h2>
            <div id="ligne" class="py-2"></div>

            <div class="row justify-content-center" id="imgProj">
                <?php foreach ($projets as $projet) : ?>
                    <div class="col-lg-6">
                        <a href="#<?= $projet->id ?>">
                            <h3><?= $projet->title ?></h3>
                            <img src="img/<?= $projet->images[0]->src ?>" alt="">
                            <p><?= $projet->date ?></p>
                        </a>
                    </div>

                    <div id="<?= $projet->id ?>" class="modaloverlay">
                        <div class="modalPerso">
                            <a href="#close" class="close">&times;</a>
                            <div>
                                <h1><?= $projet->title ?></h1>
                                <div id="ligne" class="py-2"></div>
                                <p><?= $projet->description ?></p>
                                
                                <div class="row justify-content-center">
                                    <?php foreach($projet->technos as $techno): ?>
                                        <div class="col-md-1 pb-3">
                                        <img src="img/<?= $techno->logo ?>" alt="<?= $techno->name ?>">
                                        </div>
                                    <?php endforeach ?>
                                </div>

                                <img src="img/<?= $projet->images[1]->src ?>" alt="<?= $projet->title ?>">

                                <a href="#close" class="py-2">Fermer la fenêtre</a>
                            </div>
                        </div>
                    </div>
                <?php endforeach ?>
            </div>
        </div>
    </div>
</div>