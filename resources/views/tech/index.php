<div class="technology">
    <h1>Technology</h1>
    <p>
        I made a list off the top of my head of all the various technologies and tools I use on a weekly basis,
        and it turns out wow, there's a lot of them. I'm lucky at the moment as I have the opportunity to work
        on several projects with varied technology stacks.
    </p>

    <div class="col one-third">
        <section>
            <h2>Languages</h2>
            <?php
            echo \App\App::view('components/tools', [
                'tools' => [
                    'php', 'javascript', 'nodejs', 'java', 'sql', 'html5', 'css3'
                ]
            ])
            ?>
        </section>
        <section>
            <h2>Server Administration</h2>
            <?php
            echo \App\App::view('components/tools', [
                'tools' => [
                    'ubuntu', 'centos', 'apache', 'nginx', 'letsencrypt'
                ]
            ])
            ?>
        </section>
        <section>
            <h2>Package Management</h2>
            <?php
            echo \App\App::view('components/tools', [
                'tools' => [
                    'composer', 'npm', 'bower', 'gradle'
                ]
            ])
            ?>
        </section>
    </div>
    <div class="col one-third">
        <section>
            <h2>Queues & Caching</h2>
            <?php
            echo \App\App::view('components/tools', [
                'tools' => [
                    'rabbitmq', 'beanstalkd', 'memcached', 'redis', 'amazonsqs'
                ]
            ])
            ?>
        </section>
        <section>
            <h2>Source Control</h2>
            <?php
            echo \App\App::view('components/tools', [
                'tools' => [
                    'git', 'subversion', 'bitbucket', 'github', 'gitlab'
                ]
            ])
            ?>
        </section>
        <section>
            <h2>Frameworks</h2>
            <?php
            echo \App\App::view('components/tools', [
                'tools' => [
                    'laravel', 'react', 'angular', 'lumen', 'codeigniter', 'wordpress', 'android', 'express', 'slim'
                ]
            ])
            ?>
        </section>
    </div>
    <div class="col one-third">
        <section>
            <h2>Persistence</h2>
            <?php
            echo \App\App::view('components/tools', [
                'tools' => [
                    'mysql', 'sqlite', 'sqlserver', 'mongodb', 'elasticsearch', 'kibana'
                ]
            ])
            ?>
        </section>
        <section>
            <h2>Tooling</h2>
            <?php
            echo \App\App::view('components/tools', [
                'tools' => [
                    'phpunit', 'sass', 'less', 'grunt', 'gulp', 'bower', 'browserify', 'webpack'
                ]
            ])
            ?>
        </section>
        <section>
            <h2>DevOps & Deployment</h2>
            <?php
            echo \App\App::view('components/tools', [
                'tools' => [
                    'newrelic', 'bamboo', 'deployer', 'jira'
                ]
            ])
            ?>
        </section>
    </div>
</div>

<?php echo App\App::view('projects/footer', ['max' => 3]) ?>