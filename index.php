<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="author" content="Robbe van der Lee">
        <link rel="stylesheet" href="assessts/css/index.css">
        <title>Robbe van der Lee</title>
    </head>
    <body>
        <nav class="nav">
            <div class="left">
                <a class="left__title" href="#top">< Robbe /></a>
            </div>
            <div class="right">
                <a href="#skills" class="right__a">Skills</a>
                <a href="#who" class="right__a">About me</a>
                <a href="#contact" class="right__a right__a--coloured">Contact</a>
            </div>
        </nav>
        <div class="mobile-nav--container">
            <div class="mobile-nav__hamburger">
                <a onclick="openNav()" class="menu menu__span" href="#"></a>
            </div>
            <div class="overlay" id="mobile__menu">
                <a class="close" onclick="closeNav()">X</a>
                <div class="overlay__content">
                    <a onclick="closeNav()" href="#skills" class="overlay__content--link overlay__content--link--stripe">Skills</a>
                    <a onclick="closeNav()" href="#who" class="overlay__content--link overlay__content--link--stripe">About me</a>
                    <a onclick="closeNav()" href="#contact" class="overlay__content--link">Contact</a>
                </div>
            </div>
        </div>
        <header>
            <div class="titles">
                <h2 class="titles__subtitle">I AM A FULLSTACK WEBDEVELOPER</h2>
                <h1 id="home" class="titles__title">Robbe van der Lee</h1>
            </div>
        </header>
        <div class="wrapper">
            <div class="skills" id="skills">
                <h2 class="skills__title">Skills</h2>
                <div class="cards-container">
                    <div class="skills--hard">
                    <h2 class="skills--hard__title">Hard skills</h2>
                        <div class="card">
                            <h3 class="card__h3">HTML</h3>
                        </div>
                        <div class="card">
                            <h3 class="card__h3">CSS3</h3>
                        </div>
                        <div class="card">
                            <h3 class="card__h3">SASS/SCSS</h3>
                        </div>
                        <div class="card">
                            <h3 class="card__h3">Adobe XD</h3>
                        </div>
                        <div class="card">
                            <h3 class="card__h3">JS</h3>
                        </div>
                        <div class="card">
                            <h3 class="card__h3">PHP</h3>
                        </div>
                        <div class="card">
                            <h3 class="card__h3">SQL</h3>
                        </div>
                    </div>
                    <div class="skills--soft">
                        <h2 class="skills--soft__title">Soft skills</h2>
                        <div class="card">
                            <h3 class="card__h3">Project management</h3>
                        </div>
                        <div class="card">
                            <h3 class="card__h3">Documentation</h3>
                        </div>
                        <div class="card">
                            <h3 class="card__h3">Customer focus</h3>
                        </div>
                        <div class="card">
                            <h3 class="card__h3">Professional emails</h3>
                        </div>
                        <div class="card">
                            <h3 class="card__h3">Planning</h3>
                        </div>
                        <div class="card">
                            <h3 class="card__h3">Teamwork</h3>
                        </div>
                        <div class="card">
                            <h3 class="card__h3">Presentations</h3>
                        </div>
                    </div>
                    <div class="skills--learning">
                        <h2 class="skills--learning__title">Learning</h2>
                        <div class="card">
                            <h3 class="card__h3">Vue.js</h3>
                        </div>
                        <div class="card">
                            <h3 class="card__h3">Java</h3>
                        </div>
                        <div class="card">
                            <h3 class="card__h3">Laravel</h3>
                        </div>
                    </div>
                </div>
                <p class="skills__p">Everyday I work to become better at the tools I use.
                    For frontend I am currently working a lot with HTML5, CSS3 and Javascript for school.
                    <!-- In my own time I am working on my
                    Hier later invoegen -->
                    For backend I mainly work with PHP and SQL, but I am always looking for new skills to learn.
                    If you want to stay updated on my work and current projects, take a look at my github <a class="skills__a" href="https://github.com/RobbeLee" target="_blank">RobbeLee</a>.
                    If you want to see my CV please send an email to info@robbelee.nl.
                </p>
                <div class="skills__projects-container">
                    <div class="skills__project">
                        <h3 class="skills__project__title">Ocean Studios</h3>
                        <img class="skills__project__img" src="assessts/images/ocean-mockup.png" alt="This would be a project mockup">
                        <p class="skills__project__p">
                            website we built for our little company. 
                        </p>
                        <a class="skills__project__a" data-id="0">Learn more</a>
                    </div>
                    <div class="skills__project__modal-container" data-id="0">
                        <div id="skills__project__modal" class="skills__project__overlay">
                            <a class="skills__project__modal--cancel" data-id="0">X</a>
	                        <div class="skills__project__modal--popup">
	                        <h2 class="skills__project__modal--title">Ocean Studios</h2>
                                <img class="skills__project__img" src="assessts/images/ocean-mockup.png" alt="This would be a project mockup">
		                        <div class="skills__project__modal--content">
                                    <p class="skills__project__modal__p">Ocean studios was a group project where we built a website for our little company we made at school. 
                                        I worked on the front-end webshop part of the website. </p>
                                    <p class="skills__project__modal__p--lang"><b>Talen:</b> HTML, CSS, PHP, JSON, JS</p>
                                    <a class="skills__project__a" href="http://www.oceanstudios.nl" target="_blank">Project link</a>
                                    <a class="skills__project__a" href="https://github.com/RobbeLee/OceanStudios" target="_blank">Github link</a>           
                                </div>
                            </div>
                        </div>
                    </div>   
                    <div class="skills__project">
                        <h3 class="skills__project__title">The Chain</h3>
                        <img class="skills__project__img" src="assessts/images/chain-mockup.png" alt="This would be a project mockup">
                        <p class="skills__project__p">This was a solo project where I had to build a website for a community.</p>
                        <a class="skills__project__a" data-id="1">Learn more</a>
                    </div>
                    <div class="skills__project__modal-container" data-id="1">
                        <div id="skills__project__modal" class="skills__project__overlay">
                            <a class="skills__project__modal--cancel" data-id="1">X</a>
	                        <div class="skills__project__modal--popup">
	                        <h2 class="skills__project__modal--title">The Chain</h2>
                                <img class="skills__project__img" src="assessts/images/chain-mockup.png" alt="This would be a project mockup">
		                        <div class="skills__project__modal--content">
                                    <p class="skills__project__modal__p">This was a solo project where I had to build a website for a community, I built one for a D&D community. For this project everything is loaded in from a database.</p>
                                    <p class="skills__project__modal__p--lang"><b>Talen:</b> PHP, SQL, HTML, CSS, AJAX, JS</p>
                                    <a class="skills__project__a" href="http://26785.hosts2.ma-cloud.nl/MyBand-Starter/public/" target="_blank">Project link</a>
                                    <a class="skills__project__a" href="https://github.com/RobbeLee/MyBand-Starter" target="_blank">Github link</a>           
                                </div>
                            </div>
                        </div>
                    </div> 
                    <div class="skills__project">
                        <h3 class="skills__project__title">Gato</h3>
                        <img class="skills__project__img" src="assessts/images/gato-mockup.png" alt="This would be a project mockup">
                        <p class="skills__project__p">Gato was a group project where we had to make a small social media platform.</p>
                        <a class="skills__project__a" data-id="2">Learn more</a>
                    </div>
                    <div class="skills__project__modal-container" data-id="2">
                        <div id="skills__project__modal" class="skills__project__overlay">
                            <a class="skills__project__modal--cancel" data-id="2">X</a>
	                        <div class="skills__project__modal--popup">
	                        <h2 class="skills__project__modal--title">GATO</h2>
                                <img class="skills__project__img" src="assessts/images/chain-mockup.png" alt="This would be a project mockup">
		                        <div class="skills__project__modal--content">
                                    <p class="skills__project__modal__p">Gato was a group project where we had to make a small social media platform. This was our first bigger group project. I built the front and back-end for the posting system and made the front-end for the about page.</p>
                                    <p class="skills__project__modal__p--lang"><b>Talen:</b> PHP, SQL, HTML, CSS, AJAX, JS, JSON</p>
                                    <a class="skills__project__a" href="https://github.com/RobbeLee/Gato" target="_blank">Github link</a>           
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <p class="skills__p2">Want to see <a href="projects" class="skills__a">more</a> ?</p>           
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
                    <p class="who__p2">
                        For those that might not be in the loop. A fullstack developer is someone 
                        who builds both the front and back end of the website. So someone who builds
                        both the visuals and the protection of a web page.
                    </p>
                </div>
            </div>
            <div class="contact" id="contact">
                <h2 class="contact__title">Contact</h2>
                <p class="contact__p"> There are several ways to contact me and/or find me.</p>
                <div class="contact__list-container">
                    <div class="contact__left">
                        <h3 class="contact__left__title">Direct contact</h3>
                        <ul class="contact__left__list">
                            <li class="contact__left__list__li">Email : info@robbelee.nl </li>
                            <li class="contact__left__list__li">Phone : +31 06 12 55 91 73</li>
                        </ul>
                    </div>
                    <div class="contact__right">
                        <h3 class="contact__right__title">Social contact</h3>
                        <ul class="contact__right__list">
                            <li class="contact__right__list__li">LinkedIn : <a href="https://www.linkedin.com/in/robbe-lee/" target="_blank" class="contact__list__li__a">Robbe van der Lee</a></li>
                            <li class="contact__right__list__li">Github : <a href="https://github.com/RobbeLee" target="_blank" class="contact__list__li__a">RobbeLee</a></li>
                        </ul>
                    </div>
                </div>
                <p class="contact__p">Or talk to me in real life :)</p>
            </div>
        </div>
        <script src="assessts/js/main.js"></script>
    </body>
</html>