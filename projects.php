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
                    <a class="left__title" href="./">< Robbe /></a>
                </div>
                <div class="right">
                    <a href="/#skills" class="right__a">Skills</a>
                    <a href="/#who" class="right__a">About me</a>
                    <a href="/#contact" class="right__a--coloured">Contact</a>
                </div>
            </nav>
            <a onclick="openNav()" class="menu menu__span" href="#"></a>
            <div class="overlay" id="mobile__menu">
                <a class="close" onclick="closeNav()">X</a>
                <div class="overlay__content">
                    <a onclick="closeNav()" href="/" class="overlay__content--link overlay__content--link--stripe">Home</a>
                    <a onclick="closeNav()" href="/#skills" class="overlay__content--link overlay__content--link--stripe">Skills</a>
                    <a onclick="closeNav()" href="/#who" class="overlay__content--link overlay__content--link--stripe">About me</a>
                    <a onclick="closeNav()" href="/#contact" class="overlay__content--link ">Contact</a>
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
                        <h3 class="skills__project__title">Post system</h3>
                        <img class="skills__project__img" src="assessts/images/projects/postingSystem.png" alt="A screenshot of some code">
                        <p class="skills__project__p">I built a posting system for Gato.</p>
                        <a class="skills__project__a" data-id="0">learn more</a>
                    </div>
                    <div class="skills__project__modal-container" data-id="0">
                        <div id="skills__project__modal" class="skills__project__overlay">
                            <a class="skills__project__modal--cancel" data-id="0">&times;</a>
	                        <div class="skills__project__modal--popup">
	                        <h2 class="skills__project__modal--title">Post system</h2>
                                <img class="skills__project__img" src="assessts/images/projects/postingSystem.png" alt="A screenshot of some code">
		                        <div class="skills__project__modal--content">
                                    <p class="skills__project__modal__p">I built a posting system for Gato. Gato was a group project for which I built part of the posting system.</p>
                                    <p class="skills__project__modal__p--lang"><b>Talen:</b> PHP, SQL</p>
                                    <a class="skills__project__a" href="https://github.com/RobbeLee/Gato/blob/master/api/post/makePost.php" target="_blank">Github link</a>           
                                </div>
                            </div>
                        </div>
                    </div> 
                    <div class="skills__project">
                        <h3 class="skills__project__title">Search system</h3>
                        <img class="skills__project__img" src="assessts/images/projects/searchSystem.png" alt="A screenshot of some code">
                        <p class="skills__project__p">A search system I built for my MyBand project.</p>
                        <a class="skills__project__a" data-id="1">learn more</a>
                    </div>
                    <div class="skills__project__modal-container" data-id="1">
                        <div id="skills__project__modal" class="skills__project__overlay">
                            <a class="skills__project__modal--cancel" data-id="1">&times;</a>
	                        <div class="skills__project__modal--popup">
	                        <h2 class="skills__project__modal--title">Search System</h2>
                                <img class="skills__project__img" src="assessts/images/projects/searchSystem.png" alt="A screenshot of some code">
		                        <div class="skills__project__modal--content">
                                    <p class="skills__project__modal__p">A search system I built for my MyBand project. This search system was made by looking through a database with PHP and SQL.</p>
                                    <p class="skills__project__modal__p--lang"><b>Talen:</b> PHP, SQL</p>
                                    <a class="skills__project__a" href="http://26785.hosts2.ma-cloud.nl/MyBand-Starter/public/search" target="_blank">Project link</a>
                                    <a class="skills__project__a" href="https://github.com/RobbeLee/MyBand-Starter/blob/master/private/models/model.php" target="_blank">Github link</a>           
                                </div>
                            </div>
                        </div>
                    </div> 
                    <div class="skills__project">
                        <h3 class="skills__project__title">Shopping cart</h3>
                        <img class="skills__project__img" src="assessts/images/projects/cartScreenshot.png" alt="A screenshot of the Ocean Studios shopping cart.">
                        <p class="skills__project__p">A shopping cart I built for Ocean Studios.</p>
                        <a class="skills__project__a" data-id="2">learn more</a>
                    </div>
                    <div class="skills__project__modal-container" data-id="2">
                        <div id="skills__project__modal" class="skills__project__overlay">
                            <a class="skills__project__modal--cancel" data-id="2">&times;</a>
	                        <div class="skills__project__modal--popup">
	                        <h2 class="skills__project__modal--title">Shopping cart</h2>
                                <img class="skills__project__img" src="assessts/images/projects/cartScreenshot.png" alt="A screenshot of the Ocean Studios shopping cart.">
		                        <div class="skills__project__modal--content">
                                    <p class="skills__project__modal__p">A shopping cart I built with my team mates from Ocean Studios. I worked on bothe the front and back-end of the website.</p>
                                    <p class="skills__project__modal__p--lang"><b>Talen:</b> PHP, AJAX</p>
                                    <a class="skills__project__a" href="http://oceanstudios.nl/shop/cart" target="_blank">Project link</a>
                                    <a class="skills__project__a" href="https://github.com/RobbeLee/OceanStudios/tree/master/private/views/shop" target="_blank">Github link</a>           
                                </div>
                            </div>
                        </div>
                    </div> 
                    <div class="skills__project">
                        <h3 class="skills__project__title">MVC structure</h3>
                        <img class="skills__project__img" src="assessts/images/projects/mvcStructure.png" alt="Screenshot of the MVC structure">
                        <p class="skills__project__p">Screenshot of an MVC example</p>
                        <a class="skills__project__a" data-id="3">Learn more</a>
                    </div>
                    <div class="skills__project__modal-container" data-id="3">
                        <div id="skills__project__modal" class="skills__project__overlay">
                            <a class="skills__project__modal--cancel" data-id="3">&times;</a>
	                        <div class="skills__project__modal--popup">
	                        <h2 class="skills__project__modal--title">MVC structure</h2>
                                <img class="skills__project__img" src="assessts/images/projects/mvcStructure.png" alt="Screenshot of the MVC structure">
		                        <div class="skills__project__modal--content">
                                    <p class="skills__project__modal__p">This is one of the places where I worked with the MVC structure.</p>
                                    <p class="skills__project__modal__p--lang"><b>Talen:</b> N/A</p>
                                    <a class="skills__project__a" href="https://github.com/RobbeLee/MyBand-Starter/tree/master/private" target="_blank">Github link</a>           
                                </div>
                            </div>
                        </div>
                    </div> 
                    <div class="skills__project">
                        <h3 class="skills__project__title">Weather API</h3>
                        <img class="skills__project__img" src="assessts/images/projects/apiExample.png" alt="A screenshot of the API website">
                        <p class="skills__project__p">Example of a assignment using a weather API.</p>
                        <a class="skills__project__a" data-id="4">Learn more</a>
                    </div>
                    <div class="skills__project__modal-container" data-id="4">
                        <div id="skills__project__modal" class="skills__project__overlay">
                            <a class="skills__project__modal--cancel" data-id="4">&times;</a>
	                        <div class="skills__project__modal--popup">
	                        <h2 class="skills__project__modal--title">Weather API</h2>
                                <img class="skills__project__img" src="assessts/images/projects/apiExample.png" alt="A screenshot of the API website">
		                        <div class="skills__project__modal--content">
                                    <p class="skills__project__modal__p">In this assignment I worked with a weather API in recalling the current weather. 
                                        One button shows a selection of information, the other shows all the information.</p>
                                    <p class="skills__project__modal__p--lang"><b>Talen:</b> HTML, JS, CSS, AJAX</p>
                                    <a class="skills__project__a" href="http://26785.hosts2.ma-cloud.nl/bewijzenmap/periode1.4/FRO/AJAX4/" target="_blank">Project link</a>
                                    <a class="skills__project__a" href="https://github.com/RobbeLee/AJAX4" target="_blank">Github link</a>           
                                </div>
                            </div>
                        </div>
                    </div> 
                    <div class="skills__project">
                        <h3 class="skills__project__title">Autofill search</h3>
                        <img class="skills__project__img" src="assessts/images/projects/ajaxSearch.png" alt="A screenshot of the php search file">
                        <p class="skills__project__p">A search system I built using AJAX.</p>
                        <a class="skills__project__a" data-id="5">Learn more</a>
                    </div>
                    <div class="skills__project__modal-container" data-id="5">
                        <div id="skills__project__modal" class="skills__project__overlay">
                            <a class="skills__project__modal--cancel" data-id="5">&times;</a>
	                        <div class="skills__project__modal--popup">
	                        <h2 class="skills__project__modal--title">Autofill search</h2>
                                <img class="skills__project__img" src="assessts/images/projects/ajaxSearch.png" alt="A screenshot of the php search file">
		                        <div class="skills__project__modal--content">
                                    <p class="skills__project__modal__p">A search system that autofills the country you might be looking for.</p>
                                    <p class="skills__project__modal__p--lang"><b>Talen:</b> HTML, PHP, JS, SQL</p>
                                    <a class="skills__project__a" href="https://github.com/RobbeLee/AJAX5" target="_blank">Github link</a>           
                                </div>
                            </div>
                        </div>
                    </div> 
                    <div class="skills__project">
                        <h3 class="skills__project__title">Own wordpress thema</h3>
                        <img class="skills__project__img" src="assessts/images/projects/wordpressTheme.png" alt="A screenshot of my own wordpress theme">
                        <p class="skills__project__p">I built my own wordpress theme.</p>
                        <a class="skills__project__a" data-id="6">Learn more</a>
                    </div>
                    <div class="skills__project__modal-container" data-id="6">
                        <div id="skills__project__modal" class="skills__project__overlay">
                            <a class="skills__project__modal--cancel" data-id="6">&times;</a>
	                        <div class="skills__project__modal--popup">
	                        <h2 class="skills__project__modal--title">Own wordpress thema</h2>
                                <img class="skills__project__img" src="assessts/images/projects/wordpressTheme.png" alt="A screenshot of my own wordpress theme">
		                        <div class="skills__project__modal--content">
                                    <p class="skills__project__modal__p">I built my own wordpress theme to learn how to use the wordpress loops.</p>
                                    <p class="skills__project__modal__p--lang"><b>Talen:</b> PHP, HTML, CSS, JS</p>
                                    <a class="skills__project__a" href="http://26785.hosts2.ma-cloud.nl/bewijzenmap/periode1.3/CMS/wpTheo/" target="_blank">Project link</a>
                                    <a class="skills__project__a" href="https://github.com/RobbeLee/wordpress-thema" target="_blank">Github link</a>           
                                </div>
                            </div>
                        </div>
                    </div> 
                    <div class="skills__project">
                        <h3 class="skills__project__title">Working with Bootstrap</h3>
                        <img class="skills__project__img" src="assessts/images/projects/bootstrap.png" alt="A screenshot of my bootstrap assignment">
                        <p class="skills__project__p">An assignment I did to learn bootstrap.</p>
                        <a class="skills__project__a" data-id="7">Learn more</a>
                    </div>
                    <div class="skills__project__modal-container" data-id="7">
                        <div id="skills__project__modal" class="skills__project__overlay">
                            <a class="skills__project__modal--cancel" data-id="7">&times;</a>
	                        <div class="skills__project__modal--popup">
	                        <h2 class="skills__project__modal--title">Working with Bootstrap</h2>
                                <img class="skills__project__img" src="assessts/images/projects/bootstrap.png" alt="A screenshot of my bootstrap assignment">
		                        <div class="skills__project__modal--content">
                                    <p class="skills__project__modal__p">An assignment I did to learn bootstrap.</p>
                                    <p class="skills__project__modal__p--lang"><b>Talen:</b> CSS/SCSS, JS, JSON, HTML</p>
                                    <a class="skills__project__a" href="http://26785.hosts2.ma-cloud.nl/bewijzenmap/periode1.4/CMS/BootstrapLOTR/" target="_blank">Project link</a>
                                    <a class="skills__project__a" href="https://github.com/RobbeLee/BootstrapLOTR" target="_blank">Github link</a>           
                                </div>
                            </div>
                        </div>
                    </div> 
                </div>
            </div>
        </div>
        <script src="assessts/js/main.js"></script>
    </body>
</html>