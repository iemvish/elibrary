<?php
session_start();

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/mystyle.css">
</head>
<style>
    .block1 img{
        width: 100%;
    }
    body{
    margin: 0;
}
.block1{
    /* background-image: url('images/lb1.jpg');*/
    background: linear-gradient(0,rgba(255,255,255,0) 0%, rgba(0,0,0, .8) 110%), url("images/lb1.jpg"); 
    /* filter: blur(8px);
    -webkit-filter: blur(8px); */
    background-size: cover;
    height: 900px;
    position: relative;
}
.sidebar{
    float: left;
    position: absolute;
    top: 35%;
    left: 50%;
    transform: translate(-50%, -50%);
    z-index: 1;
    display: none;
    transition: width 2s;
    width: 100%;
}
.sidebarmenu{
    color: white;
}
.sidebarmenu li{
    list-style: none;
}
.sidebarmenu li a{
    text-decoration: none;
    color: white;
}
.play{
    color: white;
    text-align: end;
    
}
.play i{
    font-size: 30px;
    text-align: -webkit-right;
    padding-right: 50px;
}
.block2,.block3{
    background-color: #F2F0EE;
}
</style>
<body>
    <div class="container">
    <div class="sidebar">
        <div class="play">
        <i id="side2" class="fa-solid fa-circle-xmark"></i>
        </div>
    
                <ul class="sidebarmenu">
                    <li><h1><a href=""> ABOUT US</a></h1></li>
                    <li><h1><a href="">GALLERY</a></h1></li>
                    <li><h1><a href="">COMPLAIN</a></h1></li>
                    <li><h1><a href="">APNI SHOP</a></h1></li>
                    <li><h1><a href="">LIB</a></h1></li>
                    <?php
                    if(isset($_SESSION['email']))
                    {?>
                        <li><h1><a href="logout.php">LOG OUT</a></h1></li>
                   <?php } 
                    ?>
                </ul>
            </div>
        <div class="block1">
            <?php include('header.php')?>
        </div>

        <div class="block2">
            <div class="block2txt">
                <ul class="menu2">
                    <li>W H A T</li>
                    <li>W E</li>
                    <li>D O</li>

                </ul>
                <h1 class="wcu">Why Choose Us</h1>
                <p>Because you know digital. With working knowlwdge of online,SEO and
                    social
                    media</p>
                <p>we can take your message wherever it need to go</p>
            </div>

        </div>




        <div class="block3">
            <div class="part1">
                <div class="img1">
                    <img src="images\p1.png" alt="">
                    <h2>Awesome Teacher</h2>
                    <p>In a great teachers classroom,each</p>
                    <p> persons ideas and opinion are valued.</p>
                    <p> Students feel safe to express their </p>
                    <p>feelings.</p>
                    <a href=""><button class="btn2"></button></a>

                </div>

            </div>
            <div class="part2">
                <div class="img2">
                    <img src="images\p2.png" alt="">
                    <h2>Business Knowledge</h2>
                    <p>In a great teachers classroom,each</p>
                    <p> persons ideas and opinion are valued.</p>
                    <p> Students feel safe to express their </p>
                    <p>feelings.</p>
                    <a href=""><button class="btn2"></button></a>
                </div>

            </div>
            <div class="part3">
                <div class="img3">
                    <img src="images\p3.png" alt="">
                    <h2>Best Programme</h2>
                    <p>In a great teachers classroom,each</p>
                    <p> persons ideas and opinion are valued.</p>
                    <p> Students feel safe to express their </p>
                    <p>feelings.</p>
                    <a href=""><button class="btn2"></button></a>
                </div>

            </div>

        </div>


        <div class="block4">
            <div class="part1">
                <div class="part1txt">
                    <h3>A B O U T U S</h3>
                    <h1>Advance your carieer with learn </h1>
                    <h1>something</h1>
                    <p>Ipsum has been the industry's standard dummy text ever since the 1500s, when an
                        unknown printer took a galley of type and scrambled it to make a type specimen book.
                    </p>
                    <p>Ipsum has been the industry's standard dummy text ever since the 1500s, when an
                        unknown printer took a galley</p>

                    <div class="tick">
                        <div class="t1">
                            <img src="images\tick.png" alt="">
                            <h5>Online Programm</h5>
                        </div>
                        <div class="t2">
                            <img src="images\tick.png" alt="">
                            <h5>Educational Environment</h5>

                        </div>
                        <div class="t3">
                            <img src="images\tick.png" alt="">
                            <h5>Scholership Facility</h5>

                        </div>
                        <div class="btnt">
                            <a href=""><button class="btn3">READ MORE</button></a>
                        </div>

                    </div>
                </div>

            </div>
            <div class="part2">
                <img src="images\pic.png" alt="">
            </div>
        </div>

        <div class="block5">
            <div class="block5txt">
                <h3>COURSES</h3>
                <h1>Popular Courses</h1>
                <p>Because you know digital. With working knowlwdge of online,SEO and
                    social media </p>
                <p>we can take your message wherever it need to go</p>
            </div>

            <div class="pics">
                <div class="part1">
                    <div class="img1">
                        <img src="images\pic2.png" alt="">
                        <p class="p1">38 Lessons 15May,2020</p>
                        <p class="p2">$120</p>
                        <h2>English Course</h2>
                        <div class="pp">
                            <p>Ipsum has been the industry's standard dummy text ever since the 1500s</p>
                        </div>
                        <div class="btnt2">
                            <a href=""><button class="btn3">READ MORE</button></a>
                        </div>



                    </div>

                </div>
                <div class="part2">
                    <div class="img2">
                        <img src="images\pic2.png" alt="">
                        <p class="p1">38 Lessons 15May,2020</p>
                        <p class="p2">$120</p>
                        <h2>Maths Course</h2>
                        <div class="pp">
                            <p>Ipsum has been the industry's standard dummy text ever since the 1500s</p>
                        </div>
                        <div class="btnt2">
                            <a href=""><button class="btn3">READ MORE</button></a>
                        </div>


                    </div>

                </div>
                <div class="part3">
                    <div class="img3">
                        <img src="images\pic3.png" alt="">
                        <p class="p1">38 Lessons 15May,2020</p>
                        <p class="p2">$120</p>
                        <h2>Physics Course</h2>
                        <div class="pp">
                            <p>Ipsum has been the industry's standard dummy text ever since the 1500s</p>
                        </div>
                        <div class="btnt2">
                            <a href=""><button class="btn3">READ MORE</button></a>
                        </div>


                    </div>

                </div>

            </div>
        </div>

        <div class="block6">
            <div class="b6div">
                <div class="b6p1">
                    <h2>Succesfully</h2>
                    <h2 class="t">Trained</h2>
                    <h1>2800</h1>
                    <p>ENROLLED LEARNERS</p>

                </div>
                <div class="b6p2">
                    <h2>Proudly</h2>
                    <h2 class="t">Received</h2>
                    <h1>980</h1>
                    <p>AWARDS</p>
                </div>
                <div class="b6p3">
                    <h2>Firmly</h2>
                    <h2 class="t">Eastablished</h2>
                    <h1>810</h1>
                    <p>LOCAL BRANCHES</p>
                </div>



                <div class="b6p4">
                    <h2>Getting</h2>
                    <h2 class="t">features</h2>
                    <h1>680</h1>
                    <p>BLOG POSTS</p>
                </div>
            </div>
        </div>

        <div class="block7a">
            <h4>E V E N T S</h4>
            <h2>Upcoming Events</h2>
            <p>Because you know digital. With working knowlwdge of online,SEO and
                social
                media</p>
            <p>we can take your message wherever it need to go</p>

        </div>

        <div class="block7">
            <div class="b7">
                <div class="b7a">
                    <div class="b7">
                        <div class="b71">
                            <div class="b7p">
                                <div class="b7new">
                                    <div class="b7img">
                                        <img src="images/d1.png" alt="">
                                    </div>
                                    <div class="i2">
                                        <div class="i2inner">
                                            <div class="i2inner2">
                                                <h2>Work On Graphics</h2>
                                                <p>8.00AMVeince Itly</p>
                                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting
                                                    industry Lorem Ipsum has.</p>
                                                <a class="a1" href="">READ MORE</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="b7b">
                    <div class="b71">
                        <div class="b71">
                            <div class="b7p">
                                <div class="b7new">
                                    <div class="b7img">
                                        <img src="images/d2.png" alt="">
                                    </div>
                                    <div class="i2">
                                        <div class="i2inner">
                                            <div class="i2inner2">
                                                <h2>Work On Graphics</h2>
                                                <p>8.00AMVeince Itly</p>
                                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting </p>
                                                <p>Lorem Ipsum is simply dummy text</p>

                                                <a class="a1" href="">READ MORE</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="block8">
            <div class="b7">
                <div class="b7a">
                    <div class="b7p">
                        <div class="b7">
                            <div class="b7new">
                                <div class="b7img">
                                    <img src="images/d3.png" alt="">
                                </div>
                                <div class="i2">
                                    <div class="i2inner">
                                        <div class="i2inner2">
                                            <h2>Work On Graphics</h2>
                                            <p>8.00AMVeince Itly</p>
                                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting
                                                industry Lorem Ipsum has.</p>
                                            <a class="a1" href="">READ MORE</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="b7b">
                    <div class="b7p">
                        <div class="b71">
                            <div class="b7new">
                                <div class="b7img">
                                    <img src="images/d4.png" alt="">
                                </div>
                                <div class="i2">
                                    <div class="i2inner">
                                        <div class="i2inner2">
                                            <h2>Work On Graphics</h2>
                                            <p>8.00AMVeince Itly</p>
                                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting
                                                industry Lorem Ipsum has.</p>
                                            <a class="a1" href="">READ MORE</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <div class="block9">
            <div class="b9">
                <div class="b9a">
                    <div class="b9">
                        <div class="b9new">
                            <div class="b9img">
                                <img src="images/e.png" alt="">
                            </div>
                            <div class="i9">
                                <div class="i9inner">
                                    <div class="i9inner2">
                                        <img src="images/e1.png" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="b9b">
                    <div class="b9btxt">
                        <ul class="u">
                            <li>O U R</li>
                            <li>M I S S I O N</li>
                        </ul>
                        <h2>Find out more about</h2>
                        <h2 class="hh">learning experience</h2>
                        <p>lorem Ipsum is simply dummy text of the printing and typesetting </p>
                        <p> industry Lorem Ipsum has</p>
                    </div>
                    <div class="b9bp1">
                        <div class="l">
                            <img src="images/l1.png" alt="">
                        </div>
                        <div class="b9p1txt">
                            <h3>Lower Learning Cost</h3>
                            <p>lorem Ipsum is simply dummy text of the printing and typesetting industry Lorem Ipsum has

                            </p>

                        </div>

                    </div>

                    <div class="b9bp1">
                        <div class="l">
                            <img src="images/l2.png" alt="">
                        </div>
                        <div class="b9p1txt">
                            <h3>Lower Learning Cost</h3>
                            <p>lorem Ipsum is simply dummy text of the printing and typesetting industry Lorem Ipsum has

                            </p>

                        </div>

                    </div>
                    <div class="b9bp1">
                        <div class="l">
                            <img src="images/l3.png" alt="">
                        </div>
                        <div class="b9p1txt">
                            <h3>Lower Learning Cost</h3>
                            <p>lorem Ipsum is simply dummy text of the printing and typesetting industry Lorem Ipsum has

                            </p>

                        </div>

                    </div>

                </div>
            </div>

        </div>
        <div class="block10">
            <h2> <span class="o1">STARTING TODAY FOR GETTING</span> <span class="o">ONLINE CERTIFICATION</span></h2>
            <h2 class="hh">You can be your own guiding star with our help!</h2>
            <a href=""><button>GETSTARTED</button></a>
        </div>
        <div class="block11">
            <ul class="wmenu">
                <li>W A T C H</li>
                <li>U S</li>
            </ul>
            <h3>Starting Growing With the community</h3>
            <img src="images/wu.png" alt="">
        </div>
        <div class="block12">
            <div class="b12txt">
                <ul class="cmenu">
                    <li>E X P L O R E</li>
                    <li>N E W S</li>
                </ul>
                <h2>Check Out Our Latest Blog</h2>
                <p>Because you know digital. With working knowlwdge of online,SEO and
                    social
                    media</p>
                <p>we can take your message wherever it need to go</p>
            </div>

            <div class="b12img">
                <div class="b12parts">
                    <div class="part1">
                        <div class="p1img">
                            <img src="images\g1.png" alt="">

                        </div>
                        <div class="p1imgtxt">
                            <p>Online Education</p>
                            <h3>Become a better bloger: Content Planing</h3>



                        </div>
                        <div class="p1f">
                            <div class="p1fc">
                                <div class="p1fcimg">
                                    <img src="images\c.png" alt="">

                                </div>
                                <div class="p1fctxt">
                                    <p>Sep 09,2019</p>

                                </div>

                            </div>
                            <div class="p1fc1">
                                <div class="p1fc1img">
                                    <img src="images\c2.png" alt="">
                                </div>

                                <div class="p1fc1txt">
                                    <p>488 views</p>


                                </div>
                            </div>
                        </div>


                    </div>
                    <div class="part2">
                        <img src="images\g2.png" alt="">

                    </div>
                    <div class="part3">
                        <div class="p1img">
                            <img src="images\g1.png" alt="">

                        </div>
                        <div class="p1imgtxt">
                            <p>Online Education</p>
                            <h3>Become a better bloger: Content Planing</h3>
                        </div>
                        <div class="p1f">
                            <div class="p1fc">
                                <div class="p1fcimg">
                                    <img src="images\c.png" alt="">

                                </div>
                                <div class="p1fctxt">
                                    <p>Sep 09,2019</p>

                                </div>

                            </div>
                            <div class="p1fc1">
                                <div class="p1fc1img">
                                    <img src="images\c2.png" alt="">
                                </div>

                                <div class="p1fc1txt">
                                    <p>488 views</p>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </div>

        <div class="block13">
            <h2><span class="s">Subscribe</span> <span class="n">NewsLetters</span><span class="s">!</span></h2>
            <p>You may find answer for question,particpate in intersting discussion and be first to getbr</p>
            <p>the important new in Masterstudy Facebook Community</p>
            <div class="is"><input type="text" placeholder="Enter your email">
                <a href=""><button>Subscribe Now</button></a>
            </div>
        </div>

        <div class="block14">
            <div class="b14list">
                <ul class="menu14">
                    <li><img src="images\la.png" alt=""></li>
                    <li><img src="images\f1.png" alt=""></li>
                    <li><img src="images\f2.png" alt=""></li>
                    <li><img src="images\f3.png" alt=""></li>
                    <li><img src="images\f4.png" alt=""></li>
                    <li><img src="images\f5.png" alt=""></li>
                    <li><img src="images\ra.png" alt=""></li>
                </ul>
            </div>
        </div>

        <div class="footer">
            <div class="flist">
                <ul class="fmenu">
                    <li class="Md">
                        <p class=""><b class="m">e</b>Library</p>
                    </li>
                    <li class="pages"><span>Pages</span></li>
                    <li class="rp">Recent Posts</li>
                    <li class="cont">Contacts</li>
                </ul>
            </div>
            <div class="ftxt">
                <div class="fparts">
                    <div class="fpart1">
                        <p>Lorem of the main advantages of Masterstudy is a simple interface.Everything is created for
                            users'convenience</p>
                        <h3>Follow Us</h3>
                        <ul class="fp1menu">
                            <a href="">
                                <li><img src="images\f.png" alt=""></li>
                            </a>
                            <a href="">
                                <li><img src="images\in.png" alt=""></li>
                            </a>
                            <a href="">
                                <li><img src="images\i.png" alt=""></li>
                            </a>
                            <a href="">
                                <li><img src="images\t.png" alt=""></li>
                            </a>

                        </ul>

                    </div>
                    <div class="fpart2">
                        <ul class="fpart2m">
                            <a href="">
                                <li>About Us</li>
                            </a>
                            <a href="">
                                <li>Service</li>
                            </a>
                            <a href="">
                                <li>Courses</li>
                            </a>
                            <a href="">
                                <li>Gallery</li>
                            </a>
                            <a href="">
                                <li>Blog</li>
                            </a>
                            <a href="">
                                <li>Notice</li>
                            </a>
                        </ul>

                    </div>

                    <div class="fpart3">
                        <div class="fpart3p1">
                            <div class="rp1">
                                <img src="images\rp1.png" alt="">
                            </div>
                            <div class="rp1txt">
                                <h4>Megna aliqua enimad minum</h4>
                                <p>Feb 28,2021</p>
                            </div>
                        </div>

                        <div class="fpart3p1">
                            <div class="rp1">
                                <img src="images\rp1.png" alt="">
                            </div>
                            <div class="rp1txt">
                                <h4>Megna aliqua enimad minum</h4>
                                <p>Feb 28,2021</p>
                            </div>
                        </div>

                    </div>
                    <div class="fpart4">
                        <h5>Discover St,New York, NY 1001, USA</h5>
                        <p>+123 456 789</p>
                        <p>example@gmail.com</p>

                    </div>
                </div>

            </div>
        </div>
        <div class="flast">
            <p>copyright 2022 All right reserved</p>

        </div>

    </div>


    <!-- jQuery -->
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
    <script src="https://kit.fontawesome.com/6070b0cce0.js" crossorigin="anonymous"></script>
    <script>
        window.jQuery || document.write('<script src="js/libs/jquery-1.7.min.js">\x3C/script>')
    </script>

    <!-- FlexSlider -->
    <script defer src="js/jquery.flexslider.js"></script>
    <script src="js/custom.js"></script>
    <script type="text/javascript">
        $(window).load(function() {
            $('.flexslider').flexslider({
                animation: "slide",
                start: function(slider) {
                    $('body').removeClass('loading');
                }
            });
        });
    </script>
</body>

</html>