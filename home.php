<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Petcare Taker website</title>
    <link rel="icon" href="images/icon.jpg" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />

    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

    <link rel="stylesheet" href="https://unpkg.com/swiper@7.4.1/swiper-bundle.min.css" />

    <link rel="stylesheet" href="css/style.css">

</head>



<body>



    <?php

    ?>

    <!-- header -->
    <header class="header">

        <a href="#" class="logo"> <i class="fas fa-paw"></i> Petcare</a>

        <nav class="navbar">
            <a href="#home">home</a>
            <a href="#about">about</a>
            <a href="#gallery">gallery</a>
            <a href="#animal">animal</a>
            <a href="#pricing">pricing</a>
            <a href="#contact">contact</a>

        </nav>
        <form action="Booking.php" method="POST">
            <button type="submit" class="btn" "> My Bookings</button>
        </form>
        <form action=" PetCare_Register.php">
                <button type="submit" class="btn" "> Appointment</button>
        </form>
        <form action="logout.php">
                <button type="submit" class="btn" "> Log out</button>
        </form>

        

    </header>

    <!-- end -->

    <!-- home -->

    <section class="home" id="home">

        <div class="content">
            <h3>Loving pet care <br>
                in your <br> neighbourhood</h3>
            <a href="#gallery" class="btn">meet the Pets</a>
        </div>

        <img src="images/bottom_wave.png" alt="" class="wave">

    </section>

    <!-- end -->

    <!-- about -->

    <section class="about" id="about">

        <h2 class="deco-title">About us</h2>

        <div class="box-container">

            <div class="image">
                <img src="images/about.jpg" alt="">
            </div>

            <div class="content">
                <h3 class="title">Pet Parents, These Pet Sitting Services Will Make Your Time Away From Your Pets.</h3>
                <p>We love your pet as much as you do, thus we prioritize delivering top quality pet grooming in
                    Bengaluru. We offer a range of affordable packages that will ensure that your pet receives the best
                    possible care with us. </p>

                <div class="icons-container">
                    <div class="icons">
                        <i class="fas fa-graduation-cap"></i>
                        <h3>we educate</h3>
                    </div>
                    <div class="icons">
                        <i class="fas fa-bullhorn"></i>
                        <h3>we play</h3>
                    </div>
                    <div class="icons">
                        <i class="fas fa-book-open"></i>
                        <h3>getting to know</h3>
                    </div>
                </div>
            </div>

        </div>

    </section>


    <!-- end -->

    <!-- gallery -->

    <section class="gallery" id="gallery">

        <h2 class="heading">gallery</h2>

        <div class="swiper gallery-slider">

            <div class="swiper-wrapper">

                <div class="swiper-slide slide">
                    <div class="image">
                        <img src="images/gallery-1.jpg" alt="">
                    </div>
                </div>

                <div class="swiper-slide slide">
                    <div class="image">
                        <img src="images/gallery-2.jpg" alt="">
                    </div>
                </div>

                <div class="swiper-slide slide">
                    <div class="image">
                        <img src="images/gallery-3.jpg" alt="">
                    </div>
                </div>

                <div class="swiper-slide slide">
                    <div class="image">
                        <img src="images/gallery-4.jpg" alt="">
                    </div>
                </div>

            </div>

            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>

        </div>

    </section>

    <!-- end -->

    <!-- animals -->

    <section class="animal" id="animal">

        <h2 class="heading">animals</h2>

        <div class="box-container">

            <div class="box">
                <img src="images/animal_1.jpg" alt="">
                <div class="content">
                    <h3>Dog</h3>
                    <a href="Register.php" class="btn">Schedule</a>
                </div>
            </div>

            <div class="box">
                <img src="images/animals_2.jpg" alt="">
                <div class="content">
                    <h3>Cat</h3>
                    <a href="Register.php" class="btn">Schedule</a>
                </div>
            </div>

            <div class="box">
                <img src="images/animals_3.jpeg" alt="">
                <div class="content">
                    <h3>Bird</h3>
                    <a href="Register.php" class="btn">Schedule</a>
                </div>
            </div>

            <div class="box">
                <img src="images/animals_4.jpg" alt="">
                <div class="content">
                    <h3>Fish</h3>
                    <a href="Register.php" class="btn">Schedule</a>
                </div>
            </div>

        </div>

    </section>

    <!-- end -->

    <!-- banner -->

    <section class="banner">

        <div class="row">

            <div class="content">
                <h3>stay with pets</h3>
                <br>
                <h1>Why Fetch Pet Care?</h1>
                <p>We believe finding a reliable, professional pet sitter should be easy. So we make sure every member of the Fetch Family is a highly-experienced animal lover with a passion for petting and playing.</p>
                <p>We believe that you and your pet should feel as comfortable as possible with your sitter before our scheduled service takes place. That’s why we offer a free in-home consultation before your first service begins. This gives everyone a chance to get to know each other and make sure that this is a good fit.</p>
                <h4>
                    <li>Passed a mandatory background check.</li>
                </h4>
                <h4>
                    <li>Go through an in-depth interview.</li>
                </h4>
                <h4>
                    <li>Provide all necessary personal information.</li>
                </h4>
            </div>

            <div class="content1">
                <h3>How Your Pet Will Benefit ?</h3> <br>
                <p>
                <h4>
                    <li>With a cat/dog sitter at home, your pet will feel secure. </li>
                </h4>
                <h4>
                    <li>Being surrounded by familiar sights, smells, and sounds.</li>
                </h4>
                <h4>
                    <li>Following their regular diet and exercise routine.</li>
                </h4>
                <h4>
                    <li> Having playtime.</li>
                </h4>
                <h4>
                    <li>Receiving love and personal attention.</li>
                </h4>
                <h4>
                    <li> Maintaining medical treatment, when required.</li>
                </h4>
                <h4>
                    <li>Having someone responsible in case of an emergency.</li>
                </h4>
                <h4>
                    <li>Eliminating the trauma of travel or an unfamiliar environment.</li>
                </h4>
                <h4>
                    <li>Helping to ensure good health.</li>
                    </p>
                </h4>
            </div>

        </div>

    </section>

    <!-- end -->

    <!-- pricing -->

    <section class="pricing" id="pricing">

        <h2 class="heading">pricing</h2>

        <div class="box-container">

            <div class="box">
                <img src="images/pricing1.png" alt="">
                <h3>Boarding</h3>
                <h4 class="price"> Rs 1000 </h4>
                <p>the entrance is from 8:00 to 14:00</p>
            </div>

            <div class="box">
                <img src="images/pricing2.png" alt="">
                <h3>Day care</h3>
                <h4 class="price">Rs 500 </h4>
                <p>the entrance is from 8:00 to 14:00</p>
            </div>

            <div class="box">
                <img src="images/pricing1.png" alt="">
                <h3>Pet's Dayout</h3>
                <h4 class="price"> Rs 800</h4>
                <p>the entrance is from 8:00 to 14:00</p>
            </div>

            <div class="box">
                <img src="images/pricing1.png" alt="">
                <h3>Pool Sessions</h3>
                <h4 class="price"> Rs 1500</h4>
                <p>the entrance is from 8:00 to 14:00</p>
            </div>

            <div class="box">
                <img src="images/pricing1.png" alt="">
                <h3>Grooming</h3>
                <h4 class="price">Rs500 </h4>
                <p>the entrance is from 8:00 to 14:00</p>
            </div>

            <div class="box">
                <img src="images/pricing1.png" alt="">
                <h3>Pet Clinic</h3>
                <h4 class="price"> Rs 500 </h4>
                <p>the entrance is from 8:00 to 14:00</p>
            </div>

            <div class="box">
                <img src="images/pricing1.png" alt="">
                <h3> Surgical services</h3>
                <h4 class="price"> Rs 2000</h4>
                <p>the entrance is from 8:00 to 14:00</p>
            </div>

        </div>

    </section>

    <!-- end -->

    <!-- contact -->

    <section class="contact" id="contact">

        <h2 class="heading">contact us</h2>

        <form action="Contact.php" method="POST">

            <div class="inputBox">
                <input type="text" placeholder="Name" name="Name" id="Name">
                <input type="email" placeholder="email" name="Email" id="Email">
            </div>

            <div class="inputBox">
                <input type="digit" placeholder="Mobile" name="Mobile" id="Mobile">
                <input type="text" placeholder="Subject" name="Subject" id="Subject">
            </div>

            <textarea cols="30" rows="10" placeholder="Message" name="Message" id="Message"></textarea>

            <button type="submit" class="btn">Send Message</button>

        </form>

    </section>

    <!-- end -->

    <!-- footer -->

    <section class="footer">

        <div class="box-container">

            <div class="box">
                <h3><i class="fas fa-paw"></i> Petslife</h3>
                <p> Thank you for reaching us</p>
                <p class="links"><i class="fas fa-clock"></i>monday - Saturday</p>
                <p class="days">7:00AM - 11:00PM</p>
            </div>

            <div class="box">
                <h3>Contact Info</h3>
                <a href="#" class="links"><i class="fas fa-phone"></i> 8964852352</a>
                <a href="#" class="links"><i class="fas fa-phone"></i> 7999678156</a>
                <a href="mailto:pushkarpatidar400@gmail.com" class="links"><i class="fas fa-envelope"></i> pushkarpatidar400@gmail.com</a>
                <a href="https://goo.gl/maps/V4bdQoSvAKtiXEw47" class="links"><i class="fas fa-map-marker-alt"></i> Ratlam ,Madhya Padesh </a>
            </div>

            <div class="box">
                <h3>quick links</h3>
                <a href="#home" class="links"> <i class="fas fa-arrow-right"></i>home</a>
                <a href="#about" class="links"> <i class="fas fa-arrow-right"></i>about</a>
                <a href="#gallery" class="links"> <i class="fas fa-arrow-right"></i>gallery</a>
                <a href="#animal" class="links"> <i class="fas fa-arrow-right"></i>animal</a>
                <a href="#pricing" class="links"> <i class="fas fa-arrow-right"></i>pricing</a>
            </div>

            <div class="box">
                <h3>newsletter</h3>
                <p>subscribe for latest updates</p>
                <!-- <form action="mailto:pushkarpatidar400@gmail.com" method="post" enctype="text/plain">
                <input type="email" placeholder="Your Email" class="email" type="email" name="email" id="email">
                <button class="btn" >subscribe</button>
                <input class="btn" type="submit" value="Subscribe" >
                </form> -->
                <input type="email" placeholder="Your Email" class="email">
                <a href="mailto:pushkarpatidar400@gmail.com" class="btn" type="submit">Subscribe</a>
                <div class="share">
                    <a href="https://www.facebook.com/profile.php?id=100089642203259&mibextid=ZbWKwL" target="blank" class="fab fa-facebook-f"></a>
                    <a href="https://twitter.com/Pushkar27398303" class="fab fa-twitter" target="blank"></a>
                    <a href="https://instagram.com/_pushkar.patel.official_?igshid=OGQ2MjdiOTE%3D" class="fab fa-instagram" target="blank"></a>
                    <a href="https://www.linkedin.com/in/pushkar-patidar-a551731b9/" target="blank" class="fab fa-linkedin"></a>
                </div>
            </div>

        </div>

        <div class="credit">&#169; 2023 Petslife. All rights reserved by <a href="#" class="link">Pushkar</a></div>

    </section>






    <!-- end -->

    <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

    <script src="js/script.js"></script>

</body>

</html>