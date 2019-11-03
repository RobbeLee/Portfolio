<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="author" content="Robbe van der Lee">
        <link rel="stylesheet" href="assessts/css/projects.css">
        <title>Projects | Robbe</title>
    </head>
    <body>
        <header>
            <nav>
                <div class="left">
                    <a class="left__title" href="index.php">< Robbe /></a>
                </div>
                <div class="right">
                    <a href="index.php#skills" class="right__a">Skills</a>
                    <a href="index.php#who" class="right__a">About me</a>
                    <a href="index.php#contact" class="right__a">Contact</a>
                </div>
            </nav>
            <a onclick="openNav()" class="menu menu__span" href="#"></a>
            <div class="overlay" id="mobile__menu">
                <a class="close" onclick="closeNav()">X</a>
                <div class="overlay__content">
                    <a onclick="closeNav()" href="index.php" class="overlay__content--link overlay__content--link--stripe">Home</a>
                    <a onclick="closeNav()" href="index.php#skills" class="overlay__content--link overlay__content--link--stripe">Skills</a>
                    <a onclick="closeNav()" href="index.php#who" class="overlay__content--link overlay__content--link--stripe">About me</a>
                    <a onclick="closeNav()" href="index.php#contact" class="overlay__content--link ">Contact</a>
                </div>
            </div>
        </header>
        <div class="wrapper">
            <div class="title">
                <h1 class="title__h1">Projects</h1>
            </div>
            <div class="skills">
                <div class="skills__projects-container">
                <div class="skills__project">
                        <h3 class="skills__project__title">Ocean Studios</h3>
                        <img class="skills__project__img" src="assessts/images/ocean-mockup.png" alt="This would be a project mockup">
                        <p class="skills__project__p">
                            Ocean studios was a group project where we built a website for our little company.
                            I worked on the webshop part of the website. 
                        </p>
                        <a class="skills__project__a" data-id="0">Learn more</a>
                    </div>
                    <div class="skills__project__modal-container" data-id="0">
                        <div id="skills__project__modal" class="skills__project__overlay">
                            <a class="skills__project__modal--cancel" data-id="0">&times;</a>
	                        <div class="skills__project__modal--popup">
	                        <h2 class="skills__project__modal--title">Ocean Studios</h2>
                                <img class="skills__project__img" src="assessts/images/ocean-mockup.png" alt="This would be a project mockup">
		                        <div class="skills__project__modal--content">
                                    <p class="skills__project__modal__p">Ocean studios was a group project where we built a website for our little company. 
                                        I worked on the webshop part of the website. </p>
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
                        <p class="skills__project__p">This was a solo project where I had to build a website for a community, I built one for a D&D community. For this project everything is loaded in from a database.</p>
                        <a class="skills__project__a" data-id="1">Learn more</a>
                    </div>
                    <div class="skills__project__modal-container" data-id="1">
                        <div id="skills__project__modal" class="skills__project__overlay">
                            <a class="skills__project__modal--cancel" data-id="1">&times;</a>
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
                        <p class="skills__project__p">Gato was a group project where we had to make a small social media platform. This was our first bigger group project.</p>
                        <a class="skills__project__a" data-id="2">Learn more</a>
                    </div>
                    <div class="skills__project__modal-container" data-id="2">
                        <div id="skills__project__modal" class="skills__project__overlay">
                            <a class="skills__project__modal--cancel" data-id="2">&times;</a>
	                        <div class="skills__project__modal--popup">
	                        <h2 class="skills__project__modal--title">GATO</h2>
                                <img class="skills__project__img" src="assessts/images/chain-mockup.png" alt="This would be a project mockup">
		                        <div class="skills__project__modal--content">
                                    <p class="skills__project__modal__p">Gato was a group project where we had to make a small social media platform. This was our first bigger group project.</p>
                                    <p class="skills__project__modal__p--lang"><b>Talen:</b> PHP, SQL, HTML, CSS, AJAX, JS, JSON</p>
                                    <a class="skills__project__a" href="https://github.com/RobbeLee/Gato" target="_blank">Github link</a>           
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
<script src="assessts/js/main.js"></script>
</html>