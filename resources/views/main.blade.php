<!DOCTYPE html>
<html>
    <head>
        <title>Portfolio</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

        <style>

            html, body {
                height: 100%;
                width: 100%;
            }
            
            .body-wrapper {
                position: fixed;
                height: 100%;
                width: 100%;
            }
            .left {
                position: relative;
                height: 100%;
                background-color: black;
            }
            .left ul {
                padding: 0;
                list-style-type: none;
                position: relative;
            }

            .left .info > li > .border {
                position: relative;
                height: 40px;
                width: 100%;
            }

            .left ul li{
                margin: 15px;
                font-size: 2em;
                /*background-color: blue;*/
                position:relative;
                border: 2px solid white;
                text-align: center;
            }

            .left .info > li > a{
                top:0;
                bottom:0;
                left:0;
                right:0;
                margin: auto;
                position: absolute;
                text-decoration: none;
                color: white;
                z-index: 1;
            }

            .left .info > li > .border:hover {
                animation: test 1s linear 1s infinite;
            }

            .breath {
                animation: test 1s linear 1s infinite;
            }


            @keyframes test {
                0% { border: 1px solid transparent;}
                100% { border: 1px solid white; transform: scale(2); opacity: 0; }

            }


            .right {
                background-color: gray;
                height: 100vh;
            }

            .social-apps {
                width: 100%;
                text-align: center
            }

            .social-apps figure {
                display: inline-block;
            }
            .social-apps a img {
                margin: 0 auto;
                height: 50px;
                width: 50px;
            }

            .right {
                position: relative;
                height: 100%;

            }

            .right-content {
                position: absolute;
                left: 0;
                right: 0;
                bottom: 0;
                top: 0;
                margin: auto;
                width: 90%;
                height: 700px;
                text-align:center;
                /*margin: 0 auto;*/
                background-color: blueviolet;
                border: 2px solid #a1a1a1;
                border-radius: 10px;
                box-shadow: 20px 20px 20px black;
            }

            .right-content .main-content {
                position: absolute;
                height: 100%;
                width: 100%;
                display: inline-block;
                top: 0;
                left: 0;
                transform: translate(0, 120%);
            }

            #home {
                background-color: blue;
            }

            #about_me {
                background-color: pink;
            }

            #projects {
                background-color: green;
            }

            #experience {
                background-color: #ffff00;
            }

            #blogs {
                background-color: red;
            }

            .centerMove {
                transform: translate(0,0) !important;
                transition: transform 0.5s ease-in !important;
            }

            #about_me > section > .content {
                width: 100%;
                height: 100%;
            }
            #about_me .content .profile-pic {
                border: 2px solid #f5f5f5;
                height: 200px;
                width: 200px;
                margin: 5% auto;
                border-radius: 200px;
                background-color: #f5f5f5;
            }

            #about_me .content .others {
                height: 150px;
                padding: 10px;
                /*margin: 0 4px;*/
            }

        </style>
    </head>
    <body>

        <div class="body-wrapper">
            <div class="col-md-3 left">
                <section>
                    <div class="col-md-12" style="height: 50vh; width: 100%; text-align: center;">
                        <figure>
                            <img src="https://encrypted-tbn1.gstatic.com/images?q=tbn:ANd9GcQLvZnFv3wATcTzj56j8mDzkCrdYM_-3TK5BSBLDYI0dDTEWpUP" alt="invoker" style="height: 50px; width: 50px;"/>
                        </figure>
                        <br/>
                        <ul class="info">
                            {{--<li><a href="javascript:void(0);">Home</a></li>--}}
                            {{--<li><a href="javascript:void(0);">About Me</a></li>--}}
                            {{--<li><a href="javascript:void(0);">Projects</a></li>--}}
                            {{--<li><a href="javascript:void(0);">Experience</a></li>--}}
                            {{--<li><a href="javascript:void(0);">Blogs</a></li>--}}

                            <li><a href="javascript:void(0);" data-info="home">Games</a><div class="border"></div></li>
                            <li><a href="javascript:void(0);"  data-info="about_me">Live Games</a><div class="border"></div></li>
                            <li><a href="javascript:void(0);"  data-info="projects">Skill Games</a><div class="border"></div></li>
                            <li><a href="javascript:void(0);"  data-info="experience">Tangkas</a><div class="border"></div></li>
                            <li><a href="javascript:void(0);"  data-info="blogs">Other Games</a><div class="border"></div></li>
                        </ul>
                    </div>

                    <div class="col-md-12">

                        <div class="social-apps">
                            <figure>
                                <a href="javascript:void(0);"><img src="../../master/public/images/facebook.png" alt="Facebook"/></a>
                            </figure>
                            <figure>
                                <a href="javascript:void(0);"><img src="../../master/public/images/youtube.png" alt="Youtube"/></a>
                            </figure>
                            <figure>
                                <a href="javascript:void(0);"><img src="../../master/public/images/linked_in.png" alt="LinkedIn"/></a>
                            </figure>
                            <figure>
                                <a href="javascript:void(0);"><img src="../../master/public/images/gmail.png" alt="Gmail"/></a>
                            </figure>
                            <figure>
                                <a href="javascript:void(0);"><img src="../../master/public/images/skype.png" alt="Skype"/></a>
                            </figure>
                        </div>

                    </div>

                </section>

            </div>
            <div class="col-md-9 right">
                <section>
                    <div class="right-content">
                            <div class="main-content" id="home">
                                <section>
                                    <div class="content">
                                        HOME
                                    </div>
                                </section>
                            </div>
                            <div class="main-content" id="about_me">
                                <section>
                                    <div class="content">
                                        <button>Auto Type</button>
                                        <div class="profile-pic"></div>
                                        <div class="auto-type" style="height: 100%; width: 100%;"></div>

                                        <div class="container-fluid">
                                            <div class="row">
                                                <div class="col-md-4 others">
                                                    Address
                                                </div>

                                                <div class="col-md-4 others">
                                                    <span style="font-size: 2em;">Hobby</span>
                                                    <br/>
                                                    <ul style="text-decoration: none;">
                                                        <li style="text-decoration: none;">Basketball</li>
                                                        <li style="text-decoration: none;">Playing Guitar</li>
                                                        <li style="text-decoration: none;">Code</li>
                                                        <li style="text-decoration: none;">Eat</li>
                                                        <li style="text-decoration: none;">Sleep</li>
                                                        <li style="text-decoration: none;">Play Computer Games</li>
                                                        <li style="text-decoration: none;">Travel</li>
                                                    </ul>
                                                </div>

                                                <div class="col-md-4 others">
                                                    Others
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </section>
                            </div>


                            <div class="main-content" id="projects">Projects</div>
                            <div class="main-content" id="experience">Experience</div>
                            <div class="main-content" id="blogs">Blogs</div>


                    </div>
                </section>
            </div>
        </div>


        <script src="https://code.jquery.com/jquery-3.1.1.min.js" integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8=" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
        <script>
            $(function(){

                $('.info a').on({
                    mouseenter: function () {
                        $(this).siblings().addClass('breath');
                    },
                    mouseleave: function () {
                        $(this).siblings().removeClass('breath');
                    },
                    click: function (e) {
                        var info = $(this).attr('data-info'),
                            currentElem = $('#' + info);
//                        if($('.main-content').hasClass('centerMove')) {
//                            $('.main-content').removeClass('centerMove');
//                            currentElem.addClass('centerMove');
//                        }else{
//                            currentElem.addClass('centerMove');
//                        }

                        var prev = $('.main-content').filter('.active');
                        if(prev.length == 0) {
                            currentElem.animate({main: 1}, 500, function () {
                                $(this).css('transition', 'transform 0.2s ease-in-out');
                                $(this).css('transform', 'translate(0, 0)');
                                $(this).addClass('active');
                            });
//                            currentElem.animate({main: 1}, {
//                                duration: 500,
//                                step: function (now) {
//                                    $(this).css('transition', 'transform 0.2s ease-in-out');
//                                    $(this).css('transform', 'translate(0, 0)');
////                                    $(this).addClass('active');
//                                },
//                                done: function (animation) {
//                                    $(this).addClass('active');
//                                }
//                            });
                        }else{
                            prev.animate({prev: 1}, 500, function () {
                                $(this).css('transition', 'transform 0.2s ease-in-out');
                                $(this).css('transform', 'translate(0, 120%)');
                                $(this).removeClass('active');
                                currentElem.animate({prev: 1}, 500, function () {
                                    $(this).css('transition', 'transform 0.2s ease-in-out');
                                    $(this).css('transform', 'translate(0, 0)');
                                    $(this).addClass('active');
                                });
                            });
//                            prev.animate({prev: 1}, {
//                                duration: 500,
//                                step: function (now) {
//                                    $(this).css('transition', 'transform 0.2s ease-in-out');
//                                    $(this).css('transform', 'translate(0, 120%)');
//                                },
//                                done: function (animation) {
//                                    $(this).removeClass('active');
//                                    currentElem.animate({main: 1}, {
//                                        duration: 1000,
//                                        step: function (now) {
//                                            $(this).css('transition', 'transform 0.2s ease-in-out');
//                                            $(this).css('transform', 'translate(0, 0)');
////                                            $(this).addClass('active');
//                                        },
//                                        done: function (animation) {
//                                            $(this).addClass('active');
//                                        }
//                                    });
//                                }
//                            });
                        }
                    }
                });

                $('button').on('click', function () {
                    var str = '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In risus orci, condimentum a nibh a, iaculis consectetur erat. Sed ut elit fermentum, ultrices turpis quis, hendrerit odio. Sed posuere velit ex, sit amet mollis massa tempus id. Ut nec orci justo. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum est sem, tempor ac lorem eu, molestie egestas dui. Ut a neque commodo, porttitor felis ut, malesuada lorem. Lorem ipsum dolor sit amet, consectetur adipiscing elit. In turpis libero, molestie et erat ac, vehicula molestie tortor. Quisque in elementum ante. Ut facilisis ac tortor nec laoreet. Phasellus iaculis felis sed dolor rutrum, quis pretium ligula pretium. Fusce pellentesque augue quis purus tempus viverra. Fusce consequat neque at eleifend accumsan. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Phasellus venenatis, lorem vel aliquet feugiat, velit risus laoreet dui, vel fermentum quam libero ut erat. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Etiam posuere blandit justo. Nam in dui non augue efficitur ullamcorper sed non sapien. Pellentesque eu magna odio. </p>',
                            i = 0,
                            isTag,
                            text;

                    (function type() {
                        text = str.slice(0, ++i);

                        if(text === str) return;

                        $('.auto-type').html(text);

                        var char = text.slice(-1);

                        if(char === '<') isTag = true;
                        if(char === '>') isTag = false;

                        if(isTag) return type();
                        setTimeout(type, 80);
                    }());

                });





            });
        </script>
    </body>
</html>