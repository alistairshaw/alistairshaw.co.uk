<?php use App\App; ?>
<div class="projects">
    <div class="container">
        <h1>Recent Projects</h1>
        <p>
            Here are a small selection of some of the projects I've been working on lately.
        </p>
        <div class="project-list">
            <?php echo App::view('sections/projects/clicpoint') ?>
            <?php echo App::view('sections/projects/vendirun') ?>
            <?php echo App::view('sections/projects/hygge') ?>
            <?php echo App::view('sections/projects/emedicus') ?>
        </div>
    </div>
</div>