<?php use App\App; ?>
<div class="hero" id="homeHero">
    <div class="cover">
        <div class="container">
            <h1>&lt;Alistair Shaw/&gt;</h1>
            <h2>Software Engineer</h2>
            <?php echo App::view('components/social') ?>
        </div>
    </div>
    <?php echo App::view('components/photo') ?>
</div>