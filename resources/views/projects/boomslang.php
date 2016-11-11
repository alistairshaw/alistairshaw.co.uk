<div class="project">
    <h1>Boomslang</h1>
    <div class="description">
        <div class="container">
            <h2>The Project</h2>
            <p>
                Boomslang is a project from Expedia to create an easy to install website that was already linked
                to their Expedia Affiliate API, to allow their partners to quickly and easily launch a new website
                and re-brand it simply.
            </p>
            <div class="image">
                <img src="/img/projects/boomslang/image1.jpg" alt="Boomslang Homepage">
            </div>
            <p>
                Simplicity of installation was key to the success of this project, and it ended up taking a moderately
                knowledgeable person to be up and running in less than 10 minutes.
            </p>
            <div class="image">
                <img src="/img/projects/boomslang/image2.jpg" alt="Boomslang">
            </div>
            <p>
                Once the application was installed, the partner's logo and colour scheme could be easy implemented
                to give each website a unique look and feel, but with the search, booking, registration and payment
                process already in place, using Expedia's powerful Affiliate API.
            </p>
            <div class="image">
                <img src="/img/projects/boomslang/image3.jpg" alt="Boomslang">
            </div>
        </div>
    </div>
    <div class="tech-stack">
        <div class="container">
            <h2>The Technology Stack</h2>
            <?php
            echo \App\App::view('components/tools',
                [
                    'tools' => ['php', 'javascript', 'mysql', 'codeigniter']
                ])
            ?>
            <p>
                The technology stack is as simple as possible, to ensure that anyone with a moderate level of
                technical skill would be able to easily install the software on the majority of the most basic
                web-hosting packages.
            </p>
            <p>
                Using the well known and established Code Igniter as the framework and a mysql database for caching
                and personalisation, keeps the system small and easy to understand. Bootstrap is used as a basis for
                the CSS, and the additional CSS provided can easily be edited or excluded in favour or a more
                customised version.
            </p>
        </div>
    </div>
</div>
<?php echo App\App::view('projects/footer', ['exclude' => 'hygge']) ?>