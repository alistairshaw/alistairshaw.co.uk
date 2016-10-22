<div class="technology">
    <h1>Technology</h1>
    <p>
        This is a non-exhaustive list of some of the technologies I currently enjoy using.
    </p>

    <div class="col one-third">
        <section>
            <h2>Languages</h2>
            <?php
            echo \App\App::view('components/tools', [
                'tools' => [
                    'php', 'javascript', 'nodejs', 'java', 'html5', 'css3'
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
            <h2>Persistence</h2>
            <?php
            echo \App\App::view('components/tools', [
                'tools' => [
                    'mysql', 'sqlite', 'sqlserver', 'mongodb', 'elasticsearch'
                ]
            ])
            ?>
        </section>
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
            <h2>DevOps & Deployment</h2>
            <?php
            echo \App\App::view('components/tools', [
                'tools' => [
                    'jira', 'bitbucket', 'git', 'bamboo', 'deployer', 'ubuntu', 'centos'
                ]
            ])
            ?>
        </section>
    </div>
    <div class="col one-third">
        <section>
            <h2>Frameworks</h2>
            <?php
            echo \App\App::view('components/tools', [
                'tools' => [
                    'laravel', 'slim', 'codeigniter', 'cakephp', 'wordpress', 'android', 'express'
                ]
            ])
            ?>
        </section>
        <section>
            <h2>Tooling</h2>
            <?php
            echo \App\App::view('components/tools', [
                'tools' => [
                    'sass', 'less', 'grunt', 'gulp', 'bower', 'browserify', 'webpack'
                ]
            ])
            ?>
        </section>
    </div>
</div>