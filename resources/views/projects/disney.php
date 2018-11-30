<div class="project">
    <h1>Disney - Phineas and Ferb Contest</h1>
    <div class="description">
        <div class="container">
            <h2>The Project</h2>
            <p>
                To celebrate the launch of the Phineas and Ferb movie, Disney wanted to run a competition for kids to
                create their own Alter-Ego via a drag and drop editor populated with items from the animated film.
            </p>
            <?php echo \App\App::view('components/responsive-image', ['imageLocation' => '/img/projects/disney/home', 'alt' => 'Disney - Phineas and Ferb - Home']) ?>

            <p>
                You could either choose to upload a video of yourself, or upload a photograph and create your very own
                Alter Ego with the "Alter Ego-inator".
            </p>
            <?php echo \App\App::view('components/responsive-image', ['imageLocation' => '/img/projects/disney/alter-ego-inator', 'alt' => 'Disney - Phineas and Ferb - Alter Ego-inator']) ?>

            <p>
                To create your Alter Ego you first had to set up an account and upload a photograph of yourself. Once
                uploaded you would center and zoom the photograph so your face was visible.
            </p>
            <?php echo \App\App::view('components/responsive-image', ['imageLocation' => '/img/projects/disney/login', 'alt' => 'Disney - Phineas and Ferb - Login']) ?>

            <p>
                Once logged in you would be able to drag and drop elements from the movie onto your photograph, to give
                yourself hair, body, arms, legs and other accessories taken directly from the movie.
            </p>
            <?php echo \App\App::view('components/responsive-image', ['imageLocation' => '/img/projects/disney/drag-and-drop', 'alt' => 'Disney - Phineas and Ferb - Drag and Drop']) ?>

        </div>
    </div>
    <div class="tech-stack">
        <div class="container">
            <h2>The Technology Stack</h2>
            <?php
            echo \App\App::view('components/tools',
                [
                    'tools' => ['php', 'mysql', 'javascript', 'jquery', 'codeigniter']
                ])
            ?>
            <p>
                Assets were provided by Disney, the rest of the application was made in Code Igniter and jQuery, with
                jQuery-UI for the drag and drop functionality.
            </p>
        </div>
    </div>
</div>
<?php echo App\App::view('projects/footer', ['exclude' => 'disney']) ?>