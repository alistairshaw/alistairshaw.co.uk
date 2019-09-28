<div class="project">
    <h1>Campus</h1>
    <div class="description">
        <div class="container">
            <h2>The Project</h2>
            <p>
                Sprint Campus is a software solution that gives any education related business a CRM (customer relationship management)
                system with integrated education data. Campus has the marketing tools (sales funnel, email marketing platform,
                lead generation, form builder) to use the data and CRM system to grow an audience, build a
                GDPR compliant opt-in list of teachers, and close more sales within the education sector.
            </p>
            <?php echo \App\App::view('components/responsive-image', ['imageLocation' => '/img/projects/campus/contacts-data-table', 'alt' => 'Vendirun Contact List']) ?>
            <p>
                Hold clients in one place, build contact lists, and react in real-time to when clients interact with
                your marketing. Campus’s CRM provides a single place for your current and future customers’ data to sit,
                ready for you to start connecting with them.
            </p>
            <?php echo \App\App::view('components/responsive-image', ['imageLocation' => '/img/projects/campus/contact-view', 'alt' => 'Campus Contact View']) ?>
            <p>
                Track interactions with your emails, forms, and website in the live-feed notifications. Use this
                knowledge to build better relationships.
            </p>
            <?php echo \App\App::view('components/responsive-image', ['imageLocation' => '/img/projects/campus/contact-email', 'alt' => 'Campus Email Contact']) ?>
            <p>
                The fully featured customer relationship management system allows you to track your sales funnels,
                communicate with your customer base and links directly to the email and SMS marketing system to allow
                you to send highly targeted and relevant marketing and to segment your list however you want.
            </p>
            <?php echo \App\App::view('components/responsive-image', ['imageLocation' => '/img/projects/campus/contact-view-sisp', 'alt' => 'Vendirun Contact Sales']) ?>
            <p>
                Send day-to-day emails, log telephone calls, send quotes and invoices, and create notes, all from within
                your CRM module.
            </p>
            <?php echo \App\App::view('components/responsive-image', ['imageLocation' => '/img/projects/campus/invoice', 'alt' => 'Campus Invoice']) ?>
            <p>
                Design your own unique sales funnel, assign funnel points for different interactions, and watch
                Campus help you close more sales. Create quotes, convert to an invoice with one click, and then
                build marketing lists dependant on customers’ purchasing history.
            </p>
            <?php echo \App\App::view('components/responsive-image', ['imageLocation' => '/img/projects/campus/email-editor', 'alt' => 'Campus Email Editor']) ?>
            <p>
                Drag ‘n’ drop your way to creating engaging responsive emails that render across desktop and mobile devices.
                No external emailing system is required as Campus comes with an integrated email platform that links
                to any lists you’ve set up.
            </p>
            <?php echo \App\App::view('components/responsive-image', ['imageLocation' => '/img/projects/campus/campaign-view', 'alt' => 'Campus Email Marketing Campaign']) ?>
            <p>
                Track, analyse, and report on your email campaign performance. Use the results to tweak and improve
                future email content. Many external email systems don’t allow sending to generic school emails.
                This is not a problem with Campus.
            </p>
            <?php echo \App\App::view('components/responsive-image', ['imageLocation' => '/img/projects/campus/form-editor', 'alt' => 'Campus Form Editor']) ?>
            <p>
                Create lead generation forms, capture new contacts, and organically grow a powerful opt-in list of
                teacher email addresses. Campus’s forms module is designed to allow you to ensure the email lists you
                build are completely GDPR-compliant for your piece of mind. Build a form in seconds with the drag and
                drop editor and create unique custom fields to collect specific data on those contacts.
            </p>
            <?php echo \App\App::view('components/responsive-image', ['imageLocation' => '/img/projects/campus/form-submissions', 'alt' => 'Campus Form Submissions']) ?>
            <p>
                If a teacher completes a Campus form hosted on your website then their data is pulled into Campus’s CRM
                for you to start selling to.
            </p>

            <?php echo \App\App::view('components/responsive-image', ['imageLocation' => '/img/projects/campus/school-view', 'alt' => 'Campus School View']) ?>
            <p>
                Power your marketing with access to Campus’s database of schools and teachers*. That’s a huge pool of
                potential customers! The data is accurate and updated internally by a team at Sprint, using a separate
                system I also built.
            </p>
        </div>
    </div>
    <div class="tech-stack">
        <div class="container">
            <h2>The Technology Stack</h2>
            <?php echo \App\App::view('components/tools', ['tools' => ['go', 'docker', 'php', 'mysql', 'mongodb', 'javascript', 'jquery', 'react', 'codeigniter', 'laravel', 'rabbitmq', 'elasticsearch', 'redis', 'npm', 'composer', 'webpack', 'phpunit']]) ?>
            <p>
                The Campus application consists of a combined stack of distributed and micro-services. Many of the legacy
                services are written in PHP, new systems are being developed in Go and running on Docker Swarm.
                We have varied data storage options, depending on use-case, ranging from MySQL to MongoDB and from
                Redis to Elasticsearch. We use RabbitMQ for queueing across many of these services.
            </p>
            <p>
                The front-end application is written in PHP and Javascript. We are currently in the process of moving
                components from jQuery to React and refactoring the main back-end from the original MVC architecture
                into a domain driven design architecture instead to ensure scalability and maintainability moving
                forward.
            </p>
            <h2>More Information</h2>
            <p>
                <a href="https://sprint-education.co.uk/education-marketing-software/campus" target="_blank">The official website.</a>
            </p>
        </div>
    </div>
</div>
<?php echo App\App::view('projects/footer', ['exclude' => 'campus']) ?>