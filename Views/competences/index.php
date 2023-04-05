<?php $pageTitle = "Compétences" ?>
<main id="competences" class="text-center rounded">
    <h1 class="mb-3">Compétences</h1>
    <nav class="mx-2">
        <div class="nav nav-tabs" id="nav-tab" role="tablist">
            <button class="nav-link active" id="about-tab" data-bs-toggle="tab" data-bs-target="#about" type="button" role="tab" aria-controls="about" aria-selected="true">À propos de moi</button>
            <button class="nav-link" id="techno-tab" data-bs-toggle="tab" data-bs-target="#techno" type="button" role="tab" aria-controls="techno" aria-selected="false">Technologies utilisées</button>
            <button class="nav-link" id="projet-tab" data-bs-toggle="tab" data-bs-target="#projet" type="button" role="tab" aria-controls="projet" aria-selected="false">Projets</button>
        </div>
    </nav>
    <div class="tab-content mt-2" id="nav-tabContent">
        <div class="tab-pane fade show active mx-4" id="about" role="tabpanel" aria-labelledby="about-tab">
            <div class="row">
                <div class="col-md-12 col-lg-6 rounded" id="presentation">
                    <p class="pt-2 px-2">Je me présente Rémi Willebrouck, j'ai <?= date('Y') - 1984 ?> ans. Je suis un développeur web qui aime la simplicité et l'élégance, j'aime créer selon les besoins des clients afin de leur proposer quelque chose au plus proche de leurs attentes. Lors du développement d'un site, je réffléchis d'un point de vue utilisateur afin de créer une interface agréable d'utilisation.</p>
                    <a class="btn" href="mailto:wi11remi@wiremi.fr?subject=Message provenant du site 'Rémi W - Portfolio'">Me Contacter</a>
                    <button class="btn">PDF</button>
                    <br><br>
                </div>
                
            </div>
        </div>
        <div class="tab-pane fade" id="techno" role="tabpanel" aria-labelledby="techno-tab">Technos</div>
        <div class="tab-pane fade" id="projet" role="tabpanel" aria-labelledby="projet-tab">Projets</div>
    </div>


</main>