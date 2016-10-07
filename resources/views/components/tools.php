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
        'bamboo' => 'https://www.atlassian.com/software/bamboo"',
        'jira' => 'https://www.atlassian.com/software/jira"',
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