<div class="project-footer">
    <h2>More Projects</h2>
    <div class="project-list">
        <?php if (!isset($exclude) || $exclude !== 'clicpoint') echo App\App::view('sections/projects/clicpoint') ?>
        <?php if (!isset($exclude) || $exclude !== 'vendirun') echo App\App::view('sections/projects/vendirun') ?>
        <?php if (!isset($exclude) || $exclude !== 'hygge') echo App\App::view('sections/projects/hygge') ?>
        <?php if (!isset($exclude) || $exclude !== 'emedicus') echo App\App::view('sections/projects/emedicus') ?>
    </div>
</div>