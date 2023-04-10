<?php
$json = file_get_contents('js/datas/projets.json');
$projets = json_decode($json);
?>

<div class="tab-pane fade" id="projet" role="tabpanel" aria-labelledby="projet-tab">
    <div class="row justify-content-center mx-auto">
        <div class="col-10 col-md-9 mb-3 rounded" id="projets">
            <h2>Projets réalisés</h2>
            <div id="ligne" class="py-2"></div>
            <div class="row justify-content-center" id="imgProj">
                <?php foreach($projets as $projet): ?>
                    <div class="col-lg-6">
                        <h3><?= $projet->title ?></h3>
                        <img src="img/<?= $projet->images[0]->src ?>" alt="">
                        <p><?= $projet->date ?></p>
                    </div>
                <?php endforeach ?>
            </div>
        </div>
    </div>
</div>