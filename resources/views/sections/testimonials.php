<div class="testimonials">
    <div class="container">
        <h1>Testimonials</h1>
        <p>Plenty more on my <a href="https://www.linkedin.com/in/amshaw">LinkedIn profile</a>, these are some of my favourites.</p>
        <?php

        use App\App;

        echo App::view('components/testimonial', [
            'name' => 'Martin MacDonald',
            'title' => 'Head of SEO',
            'company' => 'Orbitz Worldwide',
            'photo' => 'img/testimonials/martin.jpg',
            'words' => 'Alistair is a highly competent and professional developer across a number of web based languages.
                I have hired him to work on specific projects numerous times over the last 7 years, and intend
                to do so for a long time to come!'
        ]);

        echo App::view('components/testimonial', [
            'name' => 'Oliver Gilson',
            'title' => 'Chief Technical Officer',
            'company' => 'Cyber Creative LLC',
            'photo' => 'img/testimonials/oliver.jpg',
            'words' => 'It was a pleasure to work with Alistair. A fantastic ability to grasp new unfamiliar
                technologies with ease. His work was always of high quality and delivered on time.'
        ]);

        echo App::view('components/testimonial', [
            'name' => 'Milena Lolli',
            'title' => 'UI Designer',
            'photo' => 'img/testimonials/milena.jpg',
            'company' => 'AIMIA',
            'words' => 'Highly Self Motivated, Excellent analytic capabilities, Problem Solving attitude. 
            He comes from a strong educational background and he has great communication skills. This makes him a 
            must-have inside a team.'
        ]);

        echo App::view('components/testimonial', [
            'name' => 'Steve Burns',
            'title' => 'Director',
            'photo' => 'img/testimonials/steve.jpg',
            'company' => 'Benalmedia SL',
            'words' => 'Alistair really knows his stuff. I have been working with him on and off for nearly 15 years,
                and I have yet to meet anyone else with his level of ability and knowledge.'
        ]);

        ?>
    </div>
</div>