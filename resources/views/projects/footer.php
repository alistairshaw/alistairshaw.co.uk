<?php
    // todo: move this into a helper (View Composer?) or something
    $availableProjects = [
        'clicpoint' =>  'sections/projects/clicpoint',
        'vendirun' =>  'sections/projects/vendirun',
        'hygge' =>  'sections/projects/hygge',
        'emedicus' =>  'sections/projects/emedicus',
        'vkp' =>  'sections/projects/vkp'
    ];
?>
<div class="project-footer">
    <h2>Recent Projects</h2>
    <div class="project-list">
        <?php

            $count = 0;
            foreach ($availableProjects as $project => $view)
            {
                if (isset($max) && $count >= $max) continue;
                if (isset($exclude) && $exclude == $project) continue;
                echo App\App::view($view);
                $count++;
            }
        ?>
    </div>
</div>