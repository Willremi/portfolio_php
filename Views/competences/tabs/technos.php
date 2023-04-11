<div class="tab-pane fade pb-4" id="techno" role="tabpanel" aria-labelledby="techno-tab">
    <div class="row justify-content-center mx-auto">
        <div class="col-10 col-md-9 mb-3 rounded" id="os">
            <h2>Systèmes d'exploitations</h2>
            <div id="ligne" class="py-2"></div>
            <div class="row justify-content-center" id="imgOs">
                <div class="col-4 col-md-2">
                    <figure>
                        <img src="/img/logos/windows.png" alt="windows">
                        <figcaption>Windows</figcaption>
                    </figure>
                </div>
                <div class="col-4 col-md-2">
                    <figure>
                        <img src="/img/logos/macos.png" alt="macos">
                        <figcaption>Mac OS</figcaption>
                    </figure>
                </div>
                <div class="col-4 col-md-2">
                    <figure>
                        <img src="/img/logos/debian.png" alt="debian">
                        <figcaption>Debian</figcaption>
                    </figure>
                </div>
            </div>
        </div>
        <div class="col-10 col-md-9 rounded" id="technosDev">
            <h2>Technologies en développement</h2>
            <div id="ligne" class="py-2"></div>
            <div class="row" id="imgDev">
                <?php foreach ($langages as $lang) : ?>
                    <div class="col-4 col-md-2 <?= ($lang->name === 'Sass' ? 'offset-md-4' : '') ?>">
                        <?php if ($lang->lien === null) : ?>
                            <figure>
                                <img src="/img/logos/<?= $lang->image ?>.png" alt="<?= $lang->image ?>">
                                <figcaption><?= $lang->name ?></figcaption>
                            </figure>
                        <?php else : ?>
                            <a href="<?= $lang->lien ?>">
                                <figure>
                                    <img src="/img/logos/<?= $lang->image ?>.png" alt="<?= $lang->image ?>">
                                    <figcaption><?= $lang->name ?></figcaption>
                                </figure>
                            </a>
                        <?php endif ?>
                    </div>
                <?php endforeach ?>
            </div>
        </div> <!-- fin technosDev -->
    </div> <!-- fin row -->
</div>