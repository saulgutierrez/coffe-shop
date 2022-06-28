<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nican Coffe Shop</title>
    <?php
    require('./navbar.html');
    ?>
</head>
<style>
    .wrapper{
        column-count: 3;
        display: block;
        column-gap: 3em;
	    column-width: 140px;
    }

    .foot {
        padding: 20px 0px;
        margin: 0 20px;
    }

    .text-center {
        text-align: justify;
        justify-content: center;
        margin-left: 30px;
        margin-right: 30px;
    }

    .see-more {
        background-color: #009900;
        color: #fff;
        border-radius: 3px;
        border-color: #009900;
        padding: 5px 30px;
        margin-bottom: 30px;
    }

    .see-more:hover {
        background-color: rgba(158, 222, 131);
        border-color: rgba(158, 222, 131);
    }

    .banner {
        padding: 10px 0px;
        background: url(../coffe-shop/banner-background.jpg) no-repeat center;
        background-size: cover;
        min-height: 60vh;
    }

    p {
        font-size: 18px;
    }

    .texto-encima3{
        position: absolute;
        top: 1530px;
        left: 50px;
        color: white;
        font-size: 40px;
    }

    .texto-encima4{
        position: absolute;
        top: 1600px;
        left: 50px;
        color: white;
        font-size: 25px;
    }

    .texto-encima2 {
        position: absolute;
        top: 450px;
        left: 50px;
        color: white;
        font-size: 25px;
    }
      
    .button-over {
        position: relative;
        top: -170px;
        left: -540px;
        color: white;
        font-size: 25px;
    }

    #contenedor {
        display: flex;
        flex-direction: row;
        flex-wrap: wrap;
    }

    #contenedor > div {
        width: 50%;
    }

    .blog-font {
        font-size: 40px;
        margin-top: 0px;
    }

    .img {
        float: left;
        margin-right: 30px;
        margin-left: 30px;
    }

    .blog-font-content {
        font-size: 25px;
        float: left;
        margin-right: 30px;
    }

    .content {
        padding-top: 60px;
    }

    .testimonial-content {
        padding-top: 60px;
        padding-right: 30px
    }

    a {
        color: #000;
    }

    a:hover {
        color: red;
    }

    .button-over-comment {
        position: relative;
        top: 80px;
        left: -285px;
        color: white;
        font-size: 25px;
    }

    html {
        padding-bottom: none;
    }
</style>
<body>
    <section>
        <hr>
        <h2 style="text-align: center">Our main recipes</h2>
        <div class="wrapper">
            <div>
                <center> <img class="foot" src="./cafe.jpg" alt="cafe" height="350px" width="350px"> </center>
                <center> <h2>Espresso coffee</h2></center>
                <p class="text-center">Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam ullam tenetur alias nemo iure labore earum! Corrupti magnam doloribus repellat adipisci est, quia molestiae inventore velit, rem aperiam fugiat, consequuntur qui vero eius deserunt odio.</p>
                <!-- Our products -->
                <center> <button class="see-more">See more</button> </center>
            </div>
            <div>
                <center> <img class="foot" src="./capuccino.jpg" alt="capuccino" height="350px" width="350px"> </center>
                <center> <h2>Cool capuccino</h2></center>
                <p class="text-center">Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam ullam tenetur alias nemo iure labore earum! Corrupti magnam doloribus repellat adipisci est, quia molestiae inventore velit, rem aperiam fugiat, consequuntur qui vero eius deserunt odio.</p>
                <!-- Our products -->
                <center> <button class="see-more">See more </button> </center>
            </div>
            <div>
                <center> <img class="foot" src="./desayuno.jpg" alt="capuccino" height="350px" width="350px"> </center>
                <center><h2>Orange juice n' bread</h2></center>
                <p class="text-center">Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam ullam tenetur alias nemo iure labore earum! Corrupti magnam doloribus repellat adipisci est, quia molestiae inventore velit, rem aperiam fugiat, consequuntur qui vero eius deserunt odio.</p>
                <!-- Our products -->
                <center> <button class="see-more">See more</button> </center>
            </div>
        </div>
    </section>
    <section>
            <div class="banner"></div>
            <div class="texto-encima3">Introducing Nican</div>
            <center><button class="see-more button-over">See more</button></center>
            <div class="texto-encima4">Learn about our origins and manufacturing processes</div>
            
    </section>
    <section>
        <div id="contenedor">
            <div>
               <center> <h2 class="blog-font"> Our Blog </h2> </center>
                    <a href="blog.html"> <div class="img"> <img src="./blog-image5.jpg" alt="blog-image5" height="150px" width="215px"></div> </a>
                    <a href="blog.html"> <p class="blog-font-content">Full breakfast</p> </a>
                    <p class="content">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Omnis asperiores velit minus magni voluptate illo?</p>
                    <a href="blog.html"> <div class="img"><img src="./blog-image4.jpg" alt="blog-image4" height="150px" width="215px"></div> </a>
                    <a href="blog.html">  <p class="blog-font-content">Prepare a delicious jam</p> </a>
                    <p class="content">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Totam aperiam cumque omnis enim quaerat magnam?</p>
                    <a href="blog.html"> <div class="img"> <img src="./blog-image10.jpg" alt="blog-image10" height="150px" width="215px"></div> </a>
                    <a href="blog.html"> <p class="blog-font-content">Dark chocolate</p> </a>
                    <p class="content">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Voluptate officia quidem sit. Molestiae, possimus porro?</p>
            </div>
            <div>
                <center> <h2 class="blog-font">Testimonials </h2> </center>
                <a href="blog.html"> <div class="img"> <img src="./person1.jpg" alt="person1" height="150px" width="150px"></div> </a>
                <a href="blog.html"> <p class="blog-font-content">Jake Collins</p> </a>
                <p class="testimonial-content">"Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas odio libero odit animi et mollitia voluptates quasi corporis sint praesentium."</p>
                <br>
                <a href="blog.html"> <div class="img"> <img src="./person2.jpg" alt="blog-image5" height="150px" width="150px"></div> </a>
                <a href="blog.html"> <p class="blog-font-content">Maggie Simmons</p> </a>
                <p class="testimonial-content">"Lorem, ipsum dolor sit amet consectetur adipisicing elit. Omnis asperiores velit minus magni voluptate illo"</p>
                <center> <button class="see-more button-over-comment">Leave a comment </center>
            </div>
        </div>
        <br>
    </section>
    <section>
        <?php
            require('./footer.html');
        ?>
    </section>
</body>
</html>
