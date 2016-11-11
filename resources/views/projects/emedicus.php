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
            <div class="image">
                <img src="/img/projects/emedicus/homepage.png" alt="eMedicus Home Page">
            </div>
            <p>
                All of the courses on Emedicus can be purchased and added to the
                <a href="/projects/clicpoint">CLICPoint system</a>, either to a group that you control or to
                your own personal CLICPoint instance.
            </p>
            <div class="image">
                <img src="/img/projects/emedicus/course.png" alt="eMedicus Course View">
            </div>
            <p>
                Customer accounts are shared across various platforms via a user authentication service, so a single
                login works across all related websites and services.
            </p>
            <div class="image">
                <img src="/img/projects/emedicus/purchase.png" alt="eMedicus Purchase Process">
            </div>
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
            <h2>Recent Developments</h2>
            <p>
                We are working on a new control panel system for providers to easily create and manage their courses.
                Stay tuned!
            </p>
        </div>
    </div>
</div>
<?php echo App\App::view('projects/footer', ['exclude' => 'hygge']) ?>