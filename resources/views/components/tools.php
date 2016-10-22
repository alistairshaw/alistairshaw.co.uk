<ul class="tool-icons">
    <?php

    // todo: move this into a helper (View Composer?) or something
    $availableTools = [
        'php' => 'http://www.php.net/',
        'laravel' => 'https://laravel.com/',
        'android' => 'https://developer.android.com"',
        'javascript' => 'https://www.javascript.com/',
        'elasticsearch' => 'https://www.elastic.co/',
        'mongodb' => 'https://www.mongodb.com/',
        'memcached' => 'https://memcached.org/',
        'mysql' => 'https://www.mysql.com/',
        'rabbitmq' => 'https://www.rabbitmq.com/',
        'sass' => 'http://sass-lang.com/',
        'grunt' => 'http://gruntjs.com/',
        'gulp' => 'http://gulpjs.com/',
        'npm' => 'https://www.npmjs.com/',
        'deployer' => 'http://deployer.org/',
        'bamboo' => 'https://www.atlassian.com/software/bamboo',
        'jira' => 'https://www.atlassian.com/software/jira',
        'nodejs' => 'https://nodejs.org',
        'codeigniter' => 'https://www.codeigniter.com',
        'composer' => 'https://www.getcomposer.org',
        'jquery' => 'https://www.jquery.org',
        'amazons3' => 'https://aws.amazon.com',
        'java' => '',
        'html5' => '',
        'css3' => '',
        'sql' => '',
        'gradle' => '',
        'lumen' => '',
        'sqlite' => '',
        'sqlserver' => '',
        'kibana' => '',
        'beanstalkd' => '',
        'redis' => '',
        'amazonsqs' => '',
        'git' => '',
        'bitbucket' => '',
        'github' => '',
        'gitlab' => '',
        'ubuntu' => '',
        'centos' => '',
        'apache' => '',
        'nginx' => '',
        'letsencrypt' => '',
        'wordpress' => '',
        'express' => '',
        'less' => '',
        'bower' => '',
        'browserify' => '',
        'webpack' => '',
        'newrelic' => '',
        'subversion' => '',
        'slim' => '',
    ];

    if (isset($tools))
    {
        foreach ($availableTools as $availableTool => $url)
        {
            foreach ($tools as $tool)
            {
                if ($tool == $availableTool) echo '<li class="' . $tool . '"><a href="' . $url . '"></a></li>' . "\n";
            }
        }
    }
    else if (isset($top))
    {
        $counter = 0;
        foreach ($availableTools as $tool => $url)
        {
            $counter++;
            if ($counter > $top) continue;

            echo '<li class="' . $tool . '"><a href="' . $url . '"></a></li>' . "\n";

        }
    }
    else
    {
        echo '<code>No Tools Selected</code>';
    }

    ?>
</ul>