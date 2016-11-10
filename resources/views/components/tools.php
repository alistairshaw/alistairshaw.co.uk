<ul class="tool-icons">
    <?php

    // todo: move this into a helper (View Composer?) or something
    $availableTools = [
        'php' => 'http://www.php.net/',
        'laravel' => 'https://laravel.com/',
        'javascript' => 'https://www.javascript.com/',
        'react' => 'https://github.com/reactjs',
        'elasticsearch' => 'https://www.elastic.co/',
        'kibana' => 'https://www.elastic.co/products/kibana',
        'mongodb' => 'https://www.mongodb.com/',
        'memcached' => 'https://memcached.org/',
        'mysql' => 'https://www.mysql.com/',
        'rabbitmq' => 'https://www.rabbitmq.com/',
        'sass' => 'http://sass-lang.com/',
        'grunt' => 'http://gruntjs.com/',
        'gulp' => 'http://gulpjs.com/',
        'npm' => 'https://www.npmjs.com/',
        'deployer' => 'http://deployer.org/',
        'vagrant' => 'http://vagrantup.com/',

        'android' => 'https://developer.android.com"',
        'bamboo' => 'https://www.atlassian.com/software/bamboo',
        'jira' => 'https://www.atlassian.com/software/jira',
        'nodejs' => 'https://nodejs.org',
        'codeigniter' => 'https://www.codeigniter.com',
        'composer' => 'https://www.getcomposer.org',
        'jquery' => 'https://www.jquery.org',
        'amazons3' => 'https://aws.amazon.com',
        'java' => 'https://java.com/en/',
        'phpunit' => 'https://phpunit.de/',
        'html5' => 'https://www.w3.org/TR/html5/',
        'css3' => 'https://www.w3.org/TR/CSS/',
        'angular' => 'https://angularjs.org/',
        'sql' => 'https://google.com?q=sql language',
        'gradle' => 'https://gradle.org/',
        'lumen' => 'https://lumen.laravel.com/',
        'sqlite' => 'https://sqlite.org/',
        'sqlserver' => 'https://www.microsoft.com/en-us/sql-server/default.aspx',
        'beanstalkd' => 'http://kr.github.io/beanstalkd/',
        'redis' => 'http://redis.io/',
        'amazonsqs' => 'https://aws.amazon.com/sqs/',
        'git' => 'https://git-scm.com/',
        'bitbucket' => 'https://bitbucket.org',
        'github' => 'https://github.com',
        'gitlab' => 'https://gitlab.com',
        'ubuntu' => 'https://www.ubuntu.com/',
        'centos' => 'https://www.centos.org/',
        'apache' => 'https://www.apache.org/',
        'nginx' => 'https://www.nginx.com/',
        'letsencrypt' => 'https://letsencrypt.org/',
        'wordpress' => 'https://wordpress.org/',
        'express' => 'http://expressjs.com/',
        'less' => 'http://lesscss.org/',
        'bower' => 'https://bower.io/',
        'browserify' => 'http://browserify.org/',
        'webpack' => 'https://webpack.github.io/',
        'newrelic' => 'https://newrelic.com/',
        'subversion' => 'https://subversion.apache.org/',
        'slim' => 'http://www.slimframework.com/',
    ];

    if (isset($tools))
    {
        foreach ($tools as $tool)
        {
            foreach ($availableTools as $availableTool => $url)
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