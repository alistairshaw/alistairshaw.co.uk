<div class="project">
    <h1>CLICPoint</h1>
    <div class="description">
        <div class="container">
            <h2>The Project</h2>
            <p>
                CLICPoint is an online e-learning and collaboration tool which allows users to watch lessons, comment,
                take quizzes and join in the discussion either via a forum, built-in chat or comments on each article.
                Almost all of the available courses are CPD certified and in HD video.
            </p>
            <?php echo \App\App::view('components/responsive-image', ['imageLocation' => '/img/projects/clicpoint/homepage', 'alt' => 'Clicpoint Homepage']) ?>
            <p>
                Users can join an existing CLICPoint, there are multiple public ones, all of which come with a video
                learning package, or alternatively they can create their own custom CLICPoint and add learning
                a-la-cart.
            </p>
            <?php echo \App\App::view('components/responsive-image', ['imageLocation' => '/img/projects/clicpoint/create', 'alt' => 'Clicpoint Create']) ?>
            <p>
                Learning is available in high resolution video streamed from our reliable and highly scalable video
                service. We have learning available from many different providers and users have the ability to create,
                brand and sell their own learning through our platform as well.
            </p>
            <?php echo \App\App::view('components/responsive-image', ['imageLocation' => '/img/projects/clicpoint/learning', 'alt' => 'Clicpoint Learning']) ?>
            <p>
                CLICPoint members also get a curated and relevant news feed which includes commentary from expert tutors
                who are available within the system to offer help, advice and guidance.
            </p>
            <?php echo \App\App::view('components/responsive-image', ['imageLocation' => '/img/projects/clicpoint/news', 'alt' => 'Clicpoint News']) ?>
            <p>
                Other features of CLICPoint include document storage, sharing and commentary, a powerful project
                management tool that simplifies collaboration across large organisations and internal messaging and email.
                We also include a curated news feed of the latest medical and NHS related information.
            </p>
            <?php echo \App\App::view('components/responsive-image', ['imageLocation' => '/img/projects/clicpoint/profile', 'alt' => 'Clicpoint Profile']) ?>
        </div>
    </div>
    <div class="tech-stack">
        <div class="container">
            <h2>The Technology Stack</h2>
            <?php echo \App\App::view('components/tools', ['tools' => ['php', 'javascript', 'laravel', 'codeigniter', 'jquery', 'mysql', 'amazons3', 'sass', 'grunt', 'npm', 'composer']]) ?>
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
            <h2>More Information</h2>
            <p>
                <a href="http://clicpoint.co.uk">Visit the website</a>
            </p>
        </div>
    </div>
</div>
<?php echo App\App::view('projects/footer', ['exclude' => 'clicpoint']) ?>