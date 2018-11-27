<div class="project">
    <h1>Teacher Perks</h1>
    <div class="description">
        <div class="container">
            <h2>The Project</h2>
            <p>
                Teacher Perks gives teachers, education staff, and schools access to exclusive perks and big discounts
                from some of the UK's biggest brands. They do this as a thank you for allowing them to send educational
                communications, news, offers, and discounts from select partners.
            </p>
            <?php echo \App\App::view('components/responsive-image', ['imageLocation' => '/img/projects/teacherperks/home', 'alt' => 'Teacher Perks Home']) ?>

            <p>
                The perks are categorised and easily searchable. The javascript search feature makes it very easy and
                user friendly to find the best perks quickly and easily. It works great on mobile too!
            </p>
            <?php echo \App\App::view('components/responsive-image', ['imageLocation' => '/img/projects/teacherperks/perks', 'alt' => 'Teacher Perks']) ?>

            <p>
                Each perk is hand selected by the staff and will either provide the user with a unique code or
                a link to redeem their discount, voucher or freebie. For documents, assets or downloadable items
                the download link is provided.
            </p>
            <?php echo \App\App::view('components/responsive-image', ['imageLocation' => '/img/projects/teacherperks/one-perk', 'alt' => 'Teacher Perks']) ?>

            <p>
                The back-end allows the site administrators to manage all the perks, import perks from providers, manage
                the members and view transaction lists. It also pulls in transactions from affiliate network links in order
                to keep track of conversions and commissions.
            </p>
            <?php echo \App\App::view('components/responsive-image', ['imageLocation' => '/img/projects/teacherperks/perk-admin', 'alt' => 'Teacher Perks']) ?>

            <p>
                Plenty of reporting is also built in, so the admins can see on an hourly basis how many members are on the
                site, which perks are most popular and see transactions in real time.
            </p>
            <?php echo \App\App::view('components/responsive-image', ['imageLocation' => '/img/projects/teacherperks/logins', 'alt' => 'Teacher Perks']) ?>

        </div>
    </div>
    <div class="tech-stack">
        <div class="container">
            <h2>The Technology Stack</h2>
            <?php echo \App\App::view('components/tools', ['tools' => ['php', 'mysql', 'javascript', 'jquery', 'laravel', 'beanstalkd', 'npm', 'composer', 'gulp']]) ?>
            <p>
                Teacher Perks uses the Sprint Campus UK Education API to allow teachers to search for their schools and
                to ensure access only to teachers and not to the general public.
            </p>
            <p>
                The application is built in PHP with Laravel, the front-end has a great deal of Javascript/jQuery in order
                to provide a great user experience while browsing the site. We use beanstalkd as a message queue for the
                event-driven parts of the application, including member tracking, conversion reporting and complex
                import / export functionality.
            </p>
            <h2>More Information</h2>
            <p>
                <a href="https://www.teacherperks.co.uk" target="_blank">View the Website.</a>
            </p>
        </div>
    </div>
</div>
<?php echo App\App::view('projects/footer', ['exclude' => 'teacherperks']) ?>