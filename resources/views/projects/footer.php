<?php
    // todo: move this into a helper (View Composer?) or something
    $availableProjects = [
        'campus' => 'sections/projects/campus',
        'clicpoint' =>  'sections/projects/clicpoint',
        'vendirun' =>  'sections/projects/vendirun',
        'hygge' =>  'sections/projects/hygge',
        'emedicus' =>  'sections/projects/emedicus',
        'vkp' =>  'sections/projects/vkp',
        'boomslang' =>  'sections/projects/boomslang'
    ];
?>
<div class="project-footer">
    <h2>Recent Projects</h2>
    <div class="project-list">
        <?php

            if (isset($max)) shuffle($availableProjects);

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