<!DOCTYPE html>
<html>

<head>
    <?php require 'includes/meta.php'; ?>
</head>

<body>
    <nav>
        <div class="left">
            <a class="left__title" href="#top">< Robbe /></a>
        </div>
        <div class="right">
            <a href="#skills" class="right__a">Skills</a>
            <a href="#who" class="right__a">About me</a>
            <a href="#contact" class="right__a">Contact</a>
        </div>
    </nav>
    <div class="wrapper">
        <div class="titles">
            <h2 class="titles__subtitle">I AM A FULLSTACK WEBDEVELOPER</h2>
            <h1 id="home" class="titles__title">Robbe van der Lee</h1>
        </div>
        <div class="skills" id="skills">
            <h2 class="skills__title">Skills</h2>
            <div class="cards-container">
                <div class="card">
                    <h2 class="card__h2">HTML</h2>
                </div>
                <div class="card">
                    <h2 class="card__h2">CSS3</h2>
                </div>
                <div class="card">
                    <h2 class="card__h2">SASS</h2>
                </div>
                <div class="card">
                    <h2 class="card__h2">SCSS</h2>
                </div>
                <div class="card">
                    <h2 class="card__h2">JS</h2>
                </div>
                <div class="card">
                    <h2 class="card__h2">PHP</h2>
                </div>
                <div class="card">
                    <h2 class="card__h2">SQL</h2>
                </div>
            </div>
            <p class="skills__p">Everyday I work to become better at the languages I use.
                For frontend I am currently working a lot with HTML5, CSS3 and Javascript for school.
                <!-- In my own time I am working on my
                Hier later invoegen -->
                For backend I mainly work with PHP and SQL, but I am always looking for new skills to learn.
                If you want to stay updated on my work and current projects, take a look at my github <a class="skills__a" href="https://github.com/RobbeLee" target="_blank">RobbeLee</a>.
            </p>
        </div>
        <div class="who" id="who">
            <h2 class="who__title">Who am I?</h2>
            <div class="who__p--container">
                <p class="who__p">My name is Robbe, Robbe van der Lee.
                    I am currently studying to become a fullstack webdeveloper
                    at the Mediacollege in Amsterdam. When I am not at school I
                    usually work as a barista for Starbucks. Outside of school and work
                    I do scouting and Dragonboat racing.
                </p>
                <p class="who__p2">For the uninitiated amongst us, a fullstack developer is someone who can build
                    both the front and the backend of a website. So someone who can build both the visuals of a website
                    but who can also build protection for the website.
                </p>
            </div>
        </div>
        <div class="contact" id="contact">
            <h2 class="contact__title">Contact</h2>
            <p class="contact__p"> There are several ways to contact me and/or find me.</p>
            <ul class="contact__list">
                <li class="contact__list__li">Email : robbevanderlee@gmail.com</li>
                <li class="contact__list__li">Phone : +31 06 12 55 91 73</li>
                <li class="contact__list__li">LinkedIn : <a href="https://www.linkedin.com/in/robbe-lee/" target="_blank" class="contact__list__li__a">Robbe van der Lee</a></li>
                <li class="contact__list__li">Github : <a href="https://github.com/RobbeLee" target="_blank" class="contact__list__li__a">RobbeLee</a></li>
                <li class="contact__list__li">Or talk to me in real life :)</li>
            </ul>
        </div>
    </div>
</body>
</html>