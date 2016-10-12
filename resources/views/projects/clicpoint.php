<div class="project">
    <h1>CLICPoint</h1>
    <div class="images">
        <img src="/img/projects/clicpoint/homepage.png">
        <img src="/img/projects/clicpoint/create.png">
        <img src="/img/projects/clicpoint/learning.png">
        <img src="/img/projects/clicpoint/news.png">
        <img src="/img/projects/clicpoint/profile.png">
        <img src="/img/projects/clicpoint/ralph.png">
    </div>
    <div class="description">
        <h2>The Project</h2>
        <p>
            CLICPoint is an online e-learning and collaboration tool which allows users to watch lessons, comment,
            take quizzes and join in the discussion either via a forum, built-in chat or comments on each article.
            Almost all of the available courses are CPD certified and in HD video.
        </p>
        <p>
            Other features of CLICPoint include document storage, sharing and commentary, a powerful project
            management tool that simplifies collaboration across large organisations and internal messaging and email.
            We also include a curated news feed of the latest medical and NHS related information.
        </p>
        <h2>The Technology Stack</h2>
        <p>
            The CLICPoint system has a distributed architecture, including services for video viewing, video transcoding,
            content management, course and slide creation and administration. The client-facing website and system is
            built on a heavily customised version of the Code Igniter framework, a few of its dependant services are
            written on top of Laravel.
        </p>
        <p>
            The system exposes a network of private REST APIs, allowing the components to communicate with each other
            while at the same time allowing the network of satellite websites, including marketing and sales sites,
            to pull data, create users and manage subscription services. We use Amazon AWS S3 to securely store the
            video assets and a CDN for images.
        </p>
        <h2>Recent Developments</h2>
        <p>
            We recently opened up the system to allow anyone to create their own CLICPoint instance. Learning can later
            be added to these instances, or they can be used purely for their collaborative functionality.
        </p>
        <h2>More Information</h2>
        <p>
            <a href="http://clicpoint.co.uk">Visit the website</a>
        </p>
    </div>
    <div class="project-list">
        <?php echo App\App::view('sections/projects/vendirun') ?>
        <?php echo App\App::view('sections/projects/hygge') ?>
        <?php echo App\App::view('sections/projects/emedicus') ?>
    </div>
</div>