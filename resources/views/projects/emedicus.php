<div class="project">
    <h1>EMedicus</h1>
    <div class="description">
        <div class="container">
            <h2>The Project</h2>
            <p>
                Emedicus is a medical learning platform where multiple providers can list their healthcare related
                e-learning for sale. It provides our users with a quick and easy way to find and purchase relevant
                courses for them.
            </p>
            <?php echo \App\App::view('components/responsive-image', ['imageLocation' => '/img/projects/emedicus/homepage', 'alt' => 'eMedicus Home Page']) ?>
            <p>
                All of the courses on Emedicus can be purchased and added to the
                <a href="/projects/clicpoint">CLICPoint system</a>, either to a group that you control or to
                your own personal CLICPoint instance.
            </p>
            <?php echo \App\App::view('components/responsive-image', ['imageLocation' => '/img/projects/emedicus/course', 'alt' => 'eMedicus Course View']) ?>
            <p>
                Customer accounts are shared across various platforms via a user authentication service, so a single
                login works across all related websites and services.
            </p>
            <?php echo \App\App::view('components/responsive-image', ['imageLocation' => '/img/projects/emedicus/purchase', 'alt' => 'eMedicus Purchase']) ?>
        </div>
    </div>
    <div class="tech-stack">
        <div class="container">
            <h2>The Technology Stack</h2>
            <?php
                echo \App\App::view('components/tools', [
                    'tools' => [
                        'php', 'javascript', 'laravel', 'jquery', 'mysql', 'sass', 'grunt', 'npm', 'composer'
                    ]
                ])
            ?>
            <p>
                The website is build on the Laravel framework with MySQL as the database behind it. Most of the
                data into the site comes from REST APIs provided by other parts of the distributed system. Purchases
                and enquiries are forwarded to the purchasing system and the in-house CRM respectively.
            </p>
        </div>
    </div>
</div>
<?php echo App\App::view('projects/footer', ['exclude' => 'hygge']) ?>