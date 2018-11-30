<div class="project">
    <h1>138 SunGame</h1>
    <div class="description">
        <div class="container">
            <h2>The Project</h2>
            <p>
                138sungame.com (now known as 138.com) was established in 2012 in the Isle of Man as a premium online
                gaming site serving both the east Asian market and the growing UK market. With content in both English
                and Mandarin the initial launch was extremely successful and 138.com is one
                of the most respected gaming sites in the world.
            </p>
            <?php echo \App\App::view('components/responsive-image', ['imageLocation' => '/img/projects/sungame/home', 'alt' => '138 SunGame Homepage']) ?>

            <p>
                Users could deposit and withdraw cash through their personalised administration portal, as well as
                access their game history, track bonus points and get help from a real person through a sophisticated
                online chat system.
            </p>
            <?php echo \App\App::view('components/responsive-image', ['imageLocation' => '/img/projects/sungame/account', 'alt' => '138 SunGame Account']) ?>

            <p>
                Catering to the average consumer as well as to high-rolling VIP members, the company offered a unique
                concierge service accessible through the online portal.
            </p>
            <?php echo \App\App::view('components/responsive-image', ['imageLocation' => '/img/projects/sungame/vip', 'alt' => '138 SunGame VIP']) ?>

            <p>
                The affiliate portal was key to the success of the initial launch, giving carefully hand-picked affiliates
                the tools they needed to earn significant commissions and contribute to explosive growth in the first
                few months of operation.
            </p>
            <?php echo \App\App::view('components/responsive-image', ['imageLocation' => '/img/projects/sungame/affiliates', 'alt' => '138 SunGame Affiliates']) ?>

            <p>
                Affiliates were able to download banners, logos and other marketing materials; as well as track earnings
                in real-time, withdraw cash, manage and market directly to their players and access sophisticated
                reporting tools.
            </p>
            <?php echo \App\App::view('components/responsive-image', ['imageLocation' => '/img/projects/sungame/affiliate-admin', 'alt' => '138 SunGame Affiliate Portal']) ?>

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
                Using the well known and established Code Igniter as the framework and a MySQL database for the
                persistence layer, the front-end of the application was written in jQuery and used a custom css
                grid system.
            </p>
            <p>
                Integrated with APIs from the various games providers, we were able to merge sports betting,
                online slot machines, poker and financial betting into one easy-to-use account.
            </p>
            <p>
                138.com is still one of the only asian gaming companies that offer financial betting.
            </p>
        </div>
    </div>
</div>
<?php echo App\App::view('projects/footer', ['exclude' => 'sungame']) ?>