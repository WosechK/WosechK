<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Bienvenue sur mon site personnel. Découvrez mes projets, compétences, et contactez-moi pour des collaborations.">
    <title>Mon Site Personnel</title>
    <link rel="stylesheet" href="styles.css">
</head>

<body>
	<!--<div id="header-container"></div>-->
    <header>
        <nav>
            <div class="logo"></div>
            <ul class="nav-links">
                <li><a href="#about">À propos</a></li>
				<li class="dropdown">
					<a href="#projects">Projets</a>
					<ul class="dropdown-menu">
						<li><a href="#lol.html">League of legend project</a></li>
						<li><a href="#project2">Projet 2</a></li>
						<li><a href="#project3">Projet 3</a></li>
					</ul>
				</li>
                <li><a href="#skills">Compétences</a></li>
                <li><a href="#contact">Contact</a></li>
            </ul>
        </nav>
    </header>
	<?php include 'header.html'; ?>
    <main>
        <section id="hero">
            <div class="hero-content">
                <h1>Bienvenue sur mon site personnel</h1>
                <p>Je suis K, un développeur web passionné.</p>
                <a href="#about" class="btn">En savoir plus</a>
            </div>
        </section>

        <section id="about">
            <h2>À propos de moi</h2>
            <p>Je suis un développeur web spécialisé dans la création de sites modernes et performants. Avec une solide expérience dans diverses technologies, je crée des solutions qui répondent aux besoins de mes clients.</p>
        </section>

        <section id="projects">
            <h2>Mes Projets</h2>
            <div class="projects-container">
                <article class="project-item">
                    <h3>Projet 1</h3>
                    <p>Description du projet 1.</p>
                </article>
                <article class="project-item">
                    <h3>Projet 2</h3>
                    <p>Description du projet 2.</p>
                </article>
                <article class="project-item">
                    <h3>Projet 3</h3>
                    <p>Description du projet 3.</p>
                </article>
            </div>
        </section>

        <section id="skills">
            <h2>Mes Compétences</h2>
            <ul class="skills-list">
                <li>HTML5 & CSS3</li>
                <li>JavaScript (React, Vue)</li>
                <li>Node.js & Express</li>
                <li>Python & Flask</li>
                <li>Responsive Design</li>
            </ul>
        </section>

        <section id="contact">
            <h2>Contactez-moi</h2>
            <p>Vous souhaitez collaborer ou en savoir plus ? N'hésitez pas à me contacter !</p>
            <a href="mailto:petermann.loic@gmail.com" class="btn">petermann.loic@gmail.com</a>
        </section>
    </main>
	<div id="footer-container"></div>
	
	<script>
		// Chargement du header via AJAX
		fetch('header.html')
			.then(response => response.text())
			.then(data => {
				document.getElementById('header-container').innerHTML = data;
			});
		// Chargement du footer via AJAX
		fetch('footer.html')
			.then(response => response.text())
			.then(data => {
				document.getElementById('footer-container').innerHTML = data;
			});
	</script>	
	
	
</body>

</html>
