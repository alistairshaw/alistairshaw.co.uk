<div class="project">
    <h1>Vendirun</h1>
    <div class="description">
        <div class="container">
            <h2>The Project</h2>
            <p>
                Vendirun is a combined CMS, CRM, ERP and Email Marketing tool aimed at small and micro enterprises. It allows
                you to manage an online shop, calendar or real estate portal as well as manage all of your contacts
                and reach out to them via email and SMS.
            </p>
            <div class="image">
                <img src="/img/projects/vendirun/shop1.png">
            </div>
            <p>
                The system includes a robust content management system, with an easy to use drag and drop interface and
                a library of widgets to help make each user's website unique.
            </p>
            <div class="image">
                <img src="/img/projects/vendirun/cms.png">
            </div>
            <p>
                Other features of Vendirun include document and file storage, blogs, multi-lingual capabilities, calendar and
                SMS marketing.
            </p>
            <div class="image">
                <img src="/img/projects/vendirun/cloud-storage.png">
            </div>
            <p>
                The fully featured customer relationship management system allows you to track your sales funnels,
                communicate with your customer base and links directly to the email and SMS marketing system to allow
                you to send highly targeted and relevant marketing and to segment your list however you want.
            </p>
            <div class="image">
                <img src="/img/projects/vendirun/contacts.png">
            </div>
            <p>
                The powerful event engine tracks all activity performed by your customers, including email communications,
                marketing responses, telephone calls, etc.
            </p>
            <div class="image">
                <img src="/img/projects/vendirun/contact.png">
            </div>
            <p>
                The ordering and invoice system is either hooked up to your website to provide instant
                tracking, shipping and drop-shipping, or can be used as a point of sale system in and of itself.
                Invoice generation, dropshipping and advanced tax and shipping features are all handled, including
                management of shipments, returns and faulty goods.
            </p>
            <div class="image">
                <img src="/img/projects/vendirun/order.png">
            </div>
            <p>
                We provide an
                <a href="https://github.com/alistairshaw/vendirun-plugin">open-source Laravel plugin</a> which
                interfaces with the Vendirun REST API to automatically create a website linked to Vendirun's CMS and other
                features. All that's necessary is to customise the look and feel. This allows us to rapidly create completely
                unique and custom designs for every customer, and not be constrained by an old-fashioned template-based system.
            </p>
        </div>
    </div>
    <div class="tech-stack">
        <div class="container">
            <h2>The Technology Stack</h2>
            <?php echo \App\App::view('components/tools', ['tools' => ['php', 'javascript', 'laravel', 'codeigniter', 'rabbitmq', 'elasticsearch', 'kibana', 'jquery', 'mysql', 'sass', 'grunt', 'npm', 'composer']]) ?>
            <p>
                The main Vendirun application is build on a heavily modified version of the Code Igniter framework. It
                relies heavily on RabbitMQ for asynchronous processing of complex tasks. It uses the
                <a href="https://github.com/alistairshaw/ambitiousmail-relay">Ambitious Mail Relay Server</a>
                (also an Open Source project of mine) to send the email marketing. This allows
                us to easily switch providers without needing to modify any code.
            </p>
            <h2>Recent Developments</h2>
            <p>
                We recently launched the latest version of both the primary platform and the Laravel plugin for Vendirun.
                We have several paying customers and are currently in BETA. The application will be released to a select
                few over the coming months after which it will be made available to the general public.
            </p>
            <h2>More Information</h2>
            <p>
                <a href="http://propertydemo.vendirun.com" target="_blank">Visit one of the demo websites</a>
            </p>
            <p>
                <a href="http://demo.vendirun.com" target="_blank">Log into the demo website back-end</a>
            </p>
        </div>
    </div>
</div>
<?php echo App\App::view('projects/footer', ['exclude' => 'vendirun']) ?>