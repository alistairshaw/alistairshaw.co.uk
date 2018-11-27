<ul class="tool-icons">
    <?php

    // todo: move this into a helper (View Composer?) or something
    $availableTools = [
        'php' => 'http://www.php.net/',
        'javascript' => 'https://www.javascript.com/',
        'mysql' => 'https://www.mysql.com/',
        'react' => 'https://github.com/reactjs',
        'html5' => 'https://www.w3.org/TR/html5/',
        'css3' => 'https://www.w3.org/TR/CSS/',
        'webpack' => 'https://webpack.github.io/',
        'elasticsearch' => 'https://www.elastic.co/',
        'rabbitmq' => 'https://www.rabbitmq.com/',
        'mongodb' => 'https://www.mongodb.com/',
        'sass' => 'http://sass-lang.com/',
        'npm' => 'https://www.npmjs.com/',
        'deployer' => 'http://deployer.org/',
        'vagrant' => 'http://vagrantup.com/',
        'bamboo' => 'https://www.atlassian.com/software/bamboo',
        'laravel' => 'https://laravel.com/',

        'memcached' => 'https://memcached.org/',
        'grunt' => 'http://gruntjs.com/',
        'gulp' => 'http://gulpjs.com/',
        'kibana' => 'https://www.elastic.co/products/kibana',
        'jenkins' => 'https://jenkins.io',
        'android' => 'https://developer.android.com',
        'jira' => 'https://www.atlassian.com/software/jira',
        'nodejs' => 'https://nodejs.org',
        'codeigniter' => 'https://www.codeigniter.com',
        'composer' => 'https://www.getcomposer.org',
        'jquery' => 'https://www.jquery.org',
        'amazons3' => 'https://aws.amazon.com',
        'java' => 'https://java.com/en/',
        'phpunit' => 'https://phpunit.de/',
        'angular' => 'https://angularjs.org/',
        'sql' => 'https://google.com?q=sql%20language',
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