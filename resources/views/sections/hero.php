<?php use App\App; ?>
<div class="hero" id="homeHero">
    <div class="cover">
        <div class="container">
            <a href="/" class="brand"></a>
            <h1>Alistair Shaw</h1>
            <h2>Software Architect + Programmer</h2>
            <?php echo App::view('components/social') ?>
        </div>
    </div>
    <?php echo App::view('components/photo') ?>
</div>