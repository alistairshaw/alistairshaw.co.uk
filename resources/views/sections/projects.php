<?php use App\App; ?>
<div class="projects">
    <div class="container">
        <h1>Recent Projects</h1>
        <p>
            A selection of some of the projects I've been working on lately.
        </p>
        <div class="project-list">
            <?php echo App::view('sections/projects/campus') ?>
            <?php echo App::view('sections/projects/clicpoint') ?>
            <?php echo App::view('sections/projects/hygge') ?>
        </div>
        <p>
            <a href="/projects">See More</a>
        </p>
    </div>
</div>