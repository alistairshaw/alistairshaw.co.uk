<div class="project">
    <h1>Investec Video Platform</h1>
    <div class="description">
        <div class="container">
            <h2>The Project</h2>
            <p>
                Investec is a FTSE 250 international banking and asset management group, providing a range of financial
                products and services to a client base across 3 continents.
            </p>
            <p>
                In order to keep both their staff and their clients informed and up-to-date, Investec required a
                streamlined video service providing a library of informational videos, daily updates and
                streaming events through their website, their private client portal and their internal enterprise network.
            </p>
            <?php echo \App\App::view('components/responsive-image', ['imageLocation' => '/img/projects/investec/videos', 'alt' => 'Investec Videos']) ?>

            <p>
                Investec advisors are able to upload and categorize videos, either creating them in advance or recording
                them directly through the platform.
            </p>
            <?php echo \App\App::view('components/responsive-image', ['imageLocation' => '/img/projects/investec/edit', 'alt' => 'Investec Edit Video']) ?>

            <p>
                Once recorded (or uploaded) the videos go through an approval process before being published on
                the website and/or one or both of the private portals.
            </p>
            <?php echo \App\App::view('components/responsive-image', ['imageLocation' => '/img/projects/investec/business-videos', 'alt' => 'Investec Website']) ?>

            <p>
                Investec advisors are also given the functionality to live-stream video. We installed custom software
                and hardware on premises in South Africa and London in order to support this.
            </p>
            <?php echo \App\App::view('components/responsive-image', ['imageLocation' => '/img/projects/investec/webcasts', 'alt' => 'Investec Live Streaming']) ?>

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
                With Code Igniter as the framework, we leveraged Adobe Media Server to provide fast and reliable video
                streaming both for static videos and for live streaming events.
            </p>
            <p>
                The CSS and JavaScript for the front-end and the administration panel were provided by the client.
            </p>
        </div>
    </div>
</div>
<?php echo App\App::view('projects/footer', ['exclude' => 'investec']) ?>