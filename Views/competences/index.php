<?php $pageTitle = "Compétences" ?>
<main id="competences" class="text-center rounded">
    <!-- <h1 class="mb-3">Compétences</h1> -->
    <nav class="mx-2">
        <div class="nav nav-tabs" id="nav-tab" role="tablist">
            <button class="nav-link active" id="about-tab" data-bs-toggle="tab" data-bs-target="#about" type="button" role="tab" aria-controls="about" aria-selected="true">À propos de moi</button>
            <button class="nav-link" id="techno-tab" data-bs-toggle="tab" data-bs-target="#techno" type="button" role="tab" aria-controls="techno" aria-selected="false">Technologies utilisées</button>
            <button class="nav-link" id="projet-tab" data-bs-toggle="tab" data-bs-target="#projet" type="button" role="tab" aria-controls="projet" aria-selected="false">Projets</button>
        </div>
    </nav>
    <div class="tab-content mt-3" id="nav-tabContent">
        <?php require_once 'tabs/about.php'; ?>
        <?php require_once 'tabs/technos.php'; ?>
        <?php require_once 'tabs/projets.php'; ?>
    </div>

    <br><br><br>
</main>