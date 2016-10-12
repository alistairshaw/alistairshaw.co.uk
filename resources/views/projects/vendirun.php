<div class="project">
    <h1>Vendirun</h1>
    <div class="images">
        <img src="/img/projects/vendirun/shop1.png">
        <img src="/img/projects/vendirun/cloud-storage.png">
        <img src="/img/projects/vendirun/cms.png">
        <img src="/img/projects/vendirun/contacts.png">
        <img src="/img/projects/vendirun/contact.png">
        <img src="/img/projects/vendirun/order.png">
    </div>
    <div class="description">
        <h2>The Project</h2>
        <p>
            Vendirun is a combined CMS, CRM, ERP and Email Marketing tool aimed at small and micro enterprises. It allows
            you to manage an online shop, calendar or real estate portal as well as manage all of your contacts
            and reach out to them via email and SMS.
        </p>
        <p>
            Other features of Vendirun include document and file storage, blogs, sales and inventory management and
            reporting. Invoice generation, dropshipping and advanced tax and shipping features, including management
            of shipments, returns and faulty goods.
        </p>
        <p>
            We provide an <a href="https://github.com/alistairshaw/vendirun-plugin">open-source Laravel plugin</a> which
            interfaces with the Vendirun REST API to automatically create a website linked to Vendirun's CMS and other
            features. All that's necessary is to customise the look and feel. This allows us to rapidly create completely
            unique and custom designs for every customer, and not be constrained by an old-fashioned template-based system.
        </p>
        <h2>The Technology Stack</h2>
        <p>
            The main Vendirun application is build on a heavily modified version of the Code Igniter framework. It
            relies heavily on RabbitMQ for asynchronous processing of complex tasks.
        </p>
        <p>
            It uses the
            <a href="https://github.com/alistairshaw/ambitiousmail-relay">Ambitious Mail Relay Server</a> (also an Open Source project of mine) to send the email marketing. This allows
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
<?php echo App\App::view('projects/footer') ?>