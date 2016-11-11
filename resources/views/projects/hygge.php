<div class="project">
    <h1>Hygge</h1>
    <div class="description">
        <div class="container">
            <h2>The Project</h2>
            <p>
                Hygge is an Android and iOS application developed to help our users find partners for all sorts
                of activities. Anything from cycling to mountain climbing. From kayaking to just hanging out in a bar
                or going to see a particular movie.
            </p>
            <div class="image">
                <img src="/img/projects/hygge/website.png" alt="Hygge Website">
            </div>
        </div>
    </div>
    <div class="tech-stack">
        <div class="container">
            <h2>The Technology Stack</h2>
            <?php
            echo \App\App::view('components/tools',
                [
                    'tools' => ['java', 'javascript', 'mongodb', 'nodejs', 'android', 'npm', 'gradle']
                ])
            ?>
            <p>
                The back-end is built using NodeJS and MongoDB, and exposes a REST API for the Android and iOS apps.
            </p>
            <h2>Recent Developments</h2>
            <p>
                We plan to launch our MVP by the end of November 2016, with a public launch in the new year.
            </p>
        </div>
    </div>
</div>
<?php echo App\App::view('projects/footer', ['exclude' => 'hygge']) ?>