<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8" />

  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="keywords" content="" />
  <meta name="description" content="Bienvenue sur mon portefolio moi c'est sarah je suis étudiante en BTS SIO" />
  <!-- Custom CSS -->
  <link rel="stylesheet" href="./assets/css/style.css" />
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
    integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <!-- Favicon -->
  <link id="favicon" rel="shortcut icon" href="./assets/images/AVATAR.png" type="image/x-png" />
  <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" rel="stylesheet" />
  <title>Portfolio | Sarah ZIZA</title>
</head>

<body>
  <!-- navbar-->
  <header>
    <a href="/" class="logo">Mon Portefolio</a>

    <div id="menu" class="fas fa-bars"></div>
    <nav class="navbar">
      <ul>
        <li><a class="active" href="#home">Home</a></li>
        <li><a href="#about">À propos de moi</a></li>
        <li><a href="#skills">Compétences</a></li>
        <li><a href="#education">Éducation</a></li>
        <li><a href="#experience">Experiences</a></li>
        <li><a href="#work">Projets</a></li>
        <li><a href="#contact">Contact</a></li>
      </ul>
    </nav>
  </header>
  <!-- fin navbar -->

  <!-- Ma section  -->
  <section class="home" id="home">
    <div class="content">
      <h2>
        Salut,<br />
        Je me nomme <span>Sarah</span>
      </h2>
      <p>Je suis <span class="typing-text"></span></p>
      <a href="#about" class="btn"><span>À propos de moi</span>
        <i class="fas fa-arrow-circle-down"></i>
      </a>
      <div class="socials">
        <ul class="social-icons">
          <li>
            <a class="linkedin" aria-label="LinkedIn" href="https://www.linkedin.com/in/sarah-ziza-5646a5294/"
              target="_blank"><i class="fab fa-linkedin"></i></a>
          </li>
          <li>
            <a class="github" aria-label="GitHub" href="https://github.com/Sarah-ZIZA/" target="_blank"><i
                class="fab fa-github"></i></a>
          </li>
          <li>
            <a class="mailto" href="mailto:sarah.ziza-kangue@edu.saintluc-cambrai.com" aria-label="Mail"
              target="_blank"><i class="fas fa-envelope"></i></a>
          </li>
        </ul>
      </div>
    </div>
    <div class="image">
      <img draggable="false" class="tilt" src="./assets/images/a modifier-modified.png" alt="" />
    </div>
  </section>
  <!-- fin Ma section  -->

  <!-- about section starts -->
  <section class="about" id="about">
    <h2 class="heading">
      <!--<i class="fas fa-user-alt"></i>-->
      Qui <span>suis-je</span>
    </h2>

    <div class="row">
      <div class="image">
        <img draggable="false" class="tilt" src="./assets/images/nouveau_profil.png" alt="" />
      </div>
      <div class="content">
        <h3>Je suis Sarah</h3>
        <span class="tag">Etudiante en BTS SIO</span>

        <p>
          Passionnée par les nouvelles technologies et actuellement en BTS SIO
          option SLAM, je développe mes compétences en programmation et en
          gestion de projets informatiques. Curieuse, rigoureuse, et toujours
          prête à relever de nouveaux défis, je m'intéresse particulièrement à
          la création de solutions logicielles innovantes. Mon parcours en BTS
          me permet d’acquérir une maîtrise des outils et des langages de
          programmation, et j’aime collaborer avec d’autres pour résoudre des
          problèmes complexes. Mon objectif est de continuer à me
          perfectionner dans le domaine du développement et de contribuer à
          des projets stimulants.
        </p>

        <!--<div class="box-container">
            <div class="box">
              <p>
                <span> email : </span>
                sarah.ziza-kangue@edu.saintluc-cambrai.com
              </p>
              <p><span> Contact : </span> +33 0897575755</p>
            </div>
          </div>!-->

        <div class="resumebtn">
          <a href="CV_4847.pdf" target="_blank" class="btn"><span>Resumer</span>
            <i class="fas fa-chevron-right"></i>
          </a>
        </div>
      </div>
    </div>
  </section>
  <!-- about section ends -->

  <!-- skills section starts -->
  <section class="skills" id="skills">
    <h2 class="heading">
      <!--<i class="fas fa-laptop-code"></i>-->
      Mes <span>Compétences</span>
    </h2>

    <div class="container">
      <div class="row" id="skillsContainer"></div>
    </div>
  </section>
  <!-- skills section ends -->

  <!-- education section starts -->
  <section class="education" id="education">
    <h1 class="heading">
      <!--<i class="fas fa-graduation-cap"></i>-->
      Ma <span>Scolarité</span>
    </h1>

    <p class="qoute">
      L’éducation est l’arme la plus puissante que vous puissiez utiliser pour
      changer le monde.<br />
      Nelson Mandela
    </p>

    <div class="box-container">
      <div class="box">
        <div class="image">
          <img draggable="false" src="./assets/images/educat/saint-luc.jpg" alt="" />
        </div>
        <div class="content">
          <h3>BTS SIO</h3>
          <p>Ensemble Saint-luc Cambrai</p>
          <h4>2023-2025(En cours)| France</h4>
        </div>
      </div>

      <div class="box">
        <div class="image">
          <img draggable="false" src="./assets/images/educat/saint-luc.jpg" alt="" height="50px" />
        </div>
        <div class="content">
          <h3>Licence1 |Génie-Informatique</h3>
          <p>Université polytechnique des sciences appliquées |UPSA-EAE</p>
          <h4>2022-2023 |Gabon</h4>
        </div>
      </div>
      <div class="box">
        <div class="image">
          <img draggable="false" src="./assets/images/educat/saint-luc.jpg" alt="" />
        </div>
        <div class="content">
          <h3>Baccalauréat Géneral |Scientifique(SérieC)</h3>
          <p>Collège et lycée Raponda Walker</p>
          <h4>2021-2022 |Gabon</h4>
        </div>
      </div>
    </div>
  </section>
  <!-- education section ends -->

  <!-- experience section starts -->
  <section class="experience" id="experience">
    <h2 class="heading">
      <!--<i class="fas fa-briefcase"></i>!-->
      Experiences<br /><span>Professionnelles</span>
    </h2>

    <div class="timeline">
      <div class="container right">
        <div class="content">
          <div class="tag">
            <h2>Clamart service</h2>
          </div>
          <div class="desc">
            <h3>stagiaire dev web</h3>
            <p>15mai-16juin 2024</p>
          </div>
        </div>
      </div>

      <div class="container left">
        <div class="content">
          <div class="tag">
            <h2>Bricomarché</h2>
          </div>
          <div class="desc">
            <h3>stagiaire pour Inventorisation</h3>
            <p>Decembre 2023</p>
          </div>
        </div>
      </div>

      <div class="container right">
        <div class="content">
          <div class="tag">
            <h2>Primark</h2>
          </div>
          <div class="desc">
            <h3>Vendeuse en prêt-à porter(Interimaire)</h3>
            <p>Octobre 2023</p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- experience section ends -->
  <!-- work project section starts -->
  <section class="work" id="work">
    <h2 class="heading">
      <!--<i class="fas fa-laptop-code"></i>!-->
      Mes <span>projets</span>
    </h2>

    <div class="box-container"></div>

    <div class="viewall">
      <a href="/projects" class="btn"><span>plus</span>
        <i class="fas fa-arrow-right"></i>
      </a>
    </div>
  </section>

  <!-- contact section starts -->
  <section class="contact" id="contact">
    <h2 class="heading">
      <!-- <i class="fas fa-headset"></i>-->Contactez <span>moi</span>
    </h2>

    <div class="container">
      <div class="content">
        <div class="image-box">
          <img draggable="false" src="./assets/images/download20241006100354-.png" alt="" />
        </div>
        <form id="contact-form">
          <div class="form-group">
            <div class="field">
              <input type="text" name="Object" placeholder="Objet" required />
              <i class="fas fa-file-alt"></i>
            </div>
            <div class="field">
              <input type="text" name="name" placeholder="Name" required />
              <i class="fas fa-user"></i>
            </div>
            <div class="field">
              <input type="text" name="email" placeholder="Email" required />
              <i class="fas fa-envelope"></i>
            </div>
            <div class="field">
              <input type="text" name="phone" placeholder="Phone" />
              <i class="fas fa-phone-alt"></i>
            </div>
            <div class="message">
              <textarea placeholder="Message" name="message" required></textarea>
              <i class="fas fa-comment-dots"></i>
            </div>
          </div>
          <div class="button-area">
            <button type="submit">
              Envoyer <i class="fa fa-paper-plane"></i>
            </button>
          </div>
        </form>
      </div>
    </div>
  </section>
  <?php
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupération et sécurisation des données
    $Objet = htmlspecialchars($_POST['Object']);
    $Nom = htmlspecialchars($_POST['name']);
    $Mail = htmlspecialchars($_POST['email']);
    $phone = htmlspecialchars($_POST['phone']);
    $Message = htmlspecialchars($_POST['message']);

    // Validation de l'adresse email
    if (!filter_var($Mail, FILTER_VALIDATE_EMAIL)) {
      echo 'Veuillez entrer une adresse mail correcte.';
      exit;
    }

    // Envoi des emails avec PHP mail()
    $MailSarah = "genivakangue@gmail.com";
    $headers = "From: $MailSarah\r\n";
    $headers .= "Reply-To: $Mail\r\n";

    // Envoi du mail de réponse au distinataire
    $Destinataire = $Mail;
    $Objet_rep = $Objet;
    $Message_rep = "Bonjour, j'ai bien réceptionné votre message. Je vous répondrai au plus tôt. Cordialement, Sarah.";

    if (!mail($Destinataire, $Objet_rep, $Message_rep, $headers)) {
      echo 'Erreur lors de l\'envoi du mail de réponse';
      exit;
    }

    // Envoi du mail à mon adresse
    $Destinataire = $MailSarah;
    $Objet = "Nouvelle demande de contact : $Objet";
    $Message_Sarah = "Bonjour, j'ai bien réceptionné votre message. Je vous répondrai au plus tôt. Cordialement, Sarah.
                    
Nom : $Nom 
Email : $Mail
Téléphone : $phone
Message : $Message";

    if (!mail($Destinataire, $Objet, $Message_Sarah, $headers)) {
      echo 'Erreur lors de l\'envoi de la demande de contact';
      exit;
    }

    // Message de confirmation et redirection
    echo ("<script LANGUAGE='JavaScript'>
        window.alert('Votre demande de contact a été prise en compte.');
        window.location.href='index.php';
        </script>");
    exit;
  }
  ?>

  <!-- contact section ends -->

  <!-- footer section starts -->
  <section class="footer">
    <div class="box-container">
      <!-- <div class="box">
          <h3>Portfolio Sarah</h3>
          <p>
            Merci d’avoir visité mon site Web de portfolio personnel.
            Connectez-vous avec moi sur les réseaux sociaux. <br />
          </p>
        </div> -->

      <div class="box">
        <h3>Liens rapides</h3>
        <a href="#home"><i class="fas fa-chevron-circle-right"></i> home</a>
        <a href="#about"><i class="fas fa-chevron-circle-right"></i> À propos de moi</a>
        <a href="#skills"><i class="fas fa-chevron-circle-right"></i> Compétences</a>
        <a href="#education"><i class="fas fa-chevron-circle-right"></i> Éducation</a>

        <a href="#experience"><i class="fas fa-chevron-circle-right"></i> Experiences</a>
        <a href="#work"><i class="fas fa-chevron-circle-right"></i>Projets</a>
      </div>

      <div class="box">
        <h3>contact info</h3>
        <!--<p><i class="fas fa-phone"></i>+33 621365557</p>
          <p>
            <i class="fas fa-envelope"></i
            >sarah.ziza-kangue@edu.saintluc-cambrai.com
          </p>!-->

        <div class="share">
          <a href="https://www.linkedin.com/in/sarah-ziza-5646a5294/" class="fab fa-linkedin" aria-label="LinkedIn"
            target="_blank"></a>
          <a href="https://github.com/Sarah-ZIZA/" class="fab fa-github" aria-label="GitHub" target="_blank"></a>
          <a href="mailto:sarah.ziza-kangue@edu.saintluc-cambrai.com" class="fas fa-envelope" aria-label="Mail"
            target="_blank"></a>
        </div>
      </div>
    </div>

    <!--<h1 class="credit">
        Conçu<img
          width="24"
          height="24"
          src="https://img.icons8.com/material-outlined/24/000000/undertale-heart.png"
          alt="undertale-heart"
        />
        par
       <a
              href="https://www.linkedin.com/in/sarah-ziza-5646a5294/"
              class="fab fa-linkedin"
              aria-label="LinkedIn"
              target="_blank"
            ></a>
        >
      </h1>-->
  </section>
  <!-- footer section ends -->

  <!-- scroll top btn -->
  <a href="#home" aria-label="ScrollTop" class="fas fa-angle-up" id="scroll-top"></a>
  <!-- scroll back to top -->

  <!-- ==== ALL MAJOR JAVASCRIPT CDNS STARTS ==== -->
  <!-- jquery cdn -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"
    integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>

  <!-- typed.js cdn -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/2.0.5/typed.min.js"
    integrity="sha512-1KbKusm/hAtkX5FScVR5G36wodIMnVd/aP04af06iyQTkD17szAMGNmxfNH+tEuFp3Og/P5G32L1qEC47CZbUQ=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>

  <!-- scroll reveal anim -->
  <script src="https://unpkg.com/scrollreveal"></script>

  <!-- ==== ALL MAJOR JAVASCRIPT CDNS ENDS ==== -->

  <script src="./assets/js/script.js"></script>
</body>

</html>