<?php
    // todo: move this into a helper (View Composer?) or something
    $availableProjects = [
        'campus' => 'sections/projects/campus',
        'clicpoint' =>  'sections/projects/clicpoint',
        'vendirun' =>  'sections/projects/vendirun',
        'teacherperks' =>  'sections/projects/teacherperks',
        'hygge' =>  'sections/projects/hygge',
        'emedicus' =>  'sections/projects/emedicus',
        'vkp' =>  'sections/projects/vkp',
        'boomslang' =>  'sections/projects/boomslang',
        'sungame' =>  'sections/projects/sungame',
        'investec' =>  'sections/projects/investec',
        'disney' =>  'sections/projects/disney'
    ];
?>
<div class="project-footer">
    <h2>Projects</h2>
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