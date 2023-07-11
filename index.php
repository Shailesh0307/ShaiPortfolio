<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shailesh // Portfolio</title>
    <!-- FONT AWESOME CDN LINK -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
    <!-- custom css file link -->
    <link rel="stylesheet" href="./css/style.css">
    <link rel="icon" href="./images/shailesh.png" type="image/x-icon">
</head>
<body>

<!-- header section starts -->

<header>

    <div class="user">
        <img src="./images/shailesh.png" alt="">
        <h3 class="name">Shailesh Yadav</h3>
        <p class="post">Front End Developer</p>
    </div>
    <nav class="navbar">
        <ul>
            <li><a href="#home">home</a></li>
            <li><a href="#about">about</a></li>
            <li><a href="#education">education</a></li>
            <li><a href="#portfolio">poftfolio</a></li>
            <li><a href="#contact">contact</a></li>
        </ul>
    </nav>
</header>

<!-- header section end -->

<div id="manu" class="fas fa-bars"></div>

<!-- home section start -->
 <section class="home" id="home">
    <h3>HI THERE !</h3>
    <h1>I'M <span>Shailesh Yadav</span></h1>
    <p>I am Front End Developer and Web designing services for costomers of all sizes, specializing in creating stylish websites, 
        modern website, web services and online stores. My passion is to design digital user experiences through the bold interface 
        and meaningful interactions.</p>
        <a href="#about"><button class="btn">about me <i class="fas fa-user"></i></button></a>
 </section>
<!-- home section end -->


<!-- about section start -->

<section class="about" id="about">
    <h1 class="heading"> <span>about </span> me</h1>
    <div class="row">
        <div class="info">
            <h3><span> name : </span> Shailesh Yadav </h3>
            <h3><span> qualification : </span> Mcs (CA) Distance Education</h3>
            <h3><span> other qualification : </span> PHP, DCA, CCC</h3>
            <h3><span> post : </span>  Front End Develope </h3>
            <h3><span> language : </span> hindi , english </h3>
            <a href="./images/shailesh pdf.pdf"><button class="btn"> download CV  <i class="fas fa-download"></i></button></a>
        </div>

        <div class="counter">
            <div class="box">
                <span>6</span>
                <h3>months of intership</h3>
            </div>
            <div class="box">
                <span>2+</span>
                <h3>project completed</h3>
            </div>
            <div class="box">
                <span>0</span>
                <h3>happy clients</h3>
            </div>
            <div class="box">
                <span>0</span>
                <h3>awards won</h3>
            </div>
        </div>
    </div>
</section>
<!-- about section end -->

<!-- education section start -->
<section class="education" id="education">
    <h1 class="heading"> <span>my</span> education </h1>
    <div class="box-container">
        <div class="box">
                <span>2022</span>
                <h3> M.sc(Computer Application )</h3>
                <p>Distance Education from Swami
                    Vivekananda Subharti University Meerut (Uttar Pradesh)</p>
        </div>
        <div class="box">
                <span>2020</span>
                <h3>B.com</h3>
                <p>Deen Dayal Upadhyaya Gorakhpur University
                Gorakhpur (Uttar Pradesh)</p>
        </div>
        <div class="box">
                <span>2013</span>
                <h3>Inetmediate (U.P. Board)</h3>
                <p></p>
        </div>
        <div class="box">
                <span>2011</span>
                <h3>High School (U.P. Board)</h3>
                <p>nvkjwbib vdbjrhbjb</p>
        </div>
        <div class="box">
                <span>2015</span>
                <h3></h3>
                <p>nvkjwbib vdbjrhbjb</p>
        </div>
        <div class="box">
                <span>2011</span>
                <h3>High School (U.P. Board)</h3>
                <p>nvkjwbib vdbjrhbjb</p>
        </div>
    </div>
</section>
<!-- education section end -->

<!-- portfolio section start -->
<section class="portfolio" id="portfolio">
    <h1 class="heading"> my <span>portfolio</span></h1>
    <img src="./images/1.JPG" alt="" height="250px" width="400px">
    <img src="./images/2.JPG" alt="" height="250px" width="400px">
    <img src="./images/3.JPG" alt="" height="250px" width="400px">
    <img src="./images/./4.JPG" alt="" height="250px" width="400px">
</section>
<!-- portfolio section end -->

<!-- contact section starts -->

<section class="contact" id="contact">
    <h1 class="heading"> <span>contact</span> me </h1>
    <div class="row">
        <div class="content">
            <h3 class="title">contact info</h3>
            <div class="info">
                <h3> <i class="fas fa-envelope"></i> shail0307.yadav@gmail.com </h3>
                <h3> <i class="fas fa-phone"></i> +91 9554161800</h3>
                <h3> <i class="fas fa-map-marker-alt"></i> Mahuawa Post - Ahirauli Bazar Thana - Ahirauli Bazar
                Dist - Kushinagar, Uttar Pradesh - 274149 </h3>
            </div>
        </div>
        <form action="">
            <input type="text" placeholder="name" class="box">
            <input type="email" placeholder="email" class="box">
            <input type="text" placeholder="project" class="box">
            <textarea name="" id="" cols="30" rows="10" class="box message" placeholder="message"></textarea>
            <button type="sumbit" class="btn"> send <i class="fas fa-paper-plane"></i> </button>
        </form>
    </div> 
</section>

<!-- contact section starts -->

<!-- jquery cdn link -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<!-- custom js file link -->
<script src="./js/script.js"></script>
</body>
</html>