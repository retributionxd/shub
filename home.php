<!DOCTYPE html>
<html>
<head>
    <title>Shiriki Hub</title>
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="css/materialize.min.css" media="screen,projection"/>

    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
</head>

<style type="text/css">

    body {
        display: flex;
        min-height: 100%;
        flex-direction: column;
    }

    main {
        flex: 1 0 auto;
    }

    .side-nav-menu {
        background: white;
        margin: 10px 10px 0 10px;
        border: solid #56B90B 2px;
        border-radius: 5px;
    }
</style>

<body>

<div class="navbar-fixed ">
    <nav class="nav-extended white">
        <div class="nav-wrapper">
            <a href="./" class="brand-logo center hide-on-med-and-down">
                <img alt="Shiriki Hub" src="img/logo_two.png" style="height: 42px;margin-top: 5px">
            </a>

            <a href="./" class="brand-logo right hide-on-med-and-up">
                <img alt="Shiriki Hub" src="img/logo_two.png" style="height: 42px;margin-top: 5px">
            </a>

            <a href="./" class="brand-logo center show-on-medium hide-on-small-and-down">
                <img alt="Shiriki Hub" src="img/logo_two.png" style="height: 42px;margin-top: 5px">
            </a>

            <a href="#" data-target="mobile-demo" class="sidenav-trigger" style="color: #56B90B">
                <img alt="Shiriki Hub" src="img/wifi.png" class="left"> Offline
            </a>
            <ul id="nav-mobile" class="left hide-on-med-and-down">
                <li><a href="#" data-target="mobile-demo" class="sidenav-trigger"
                       style="display: block !important;color: #56B90B">
                        <img alt="Shiriki Hub" src="img/wifi.png" class="left"> Offline
                    </a>
                </li>
            </ul>

        </div>
        <div class="nav-content">
            <ul class="tabs tabs-transparent">
                <li class="tab"><a class="active" href="#homePage">Home</a></li>
                <li class="tab"><a href="#aboutPage">About</a></li>
                <li class="tab"><a href="#contactPage">Contact</a></li>
            </ul>
        </div>
    </nav>
</div>

<ul class="sidenav" id="mobile-demo">
    <li class="side-nav-menu">
        <a href="#">
            News
            <i class="material-icons right" style="margin: 0;;color: #56B90B">chevron_right</i>
        </a></li>
    <li class="side-nav-menu"><a href="#">Surveys             <i class="material-icons right" style="margin: 0;;color: #56B90B">chevron_right</i>
        </a></li>
    <li class="side-nav-menu"><a href="#">Feedback             <i class="material-icons right" style="margin: 0;;color: #56B90B">chevron_right</i>
        </a></li>
    <li class="side-nav-menu"><a href="#">Food menu             <i class="material-icons right" style="margin: 0;;color: #56B90B">chevron_right</i>
        </a></li>
    <li class="side-nav-menu"><a href="#">Visit Rwanda             <i class="material-icons right" style="margin: 0;;color: #56B90B">chevron_right</i>
        </a></li>
</ul>


<div id="homePage" class="col s12" style="margin-top: 80px;padding: 0 10px 0 10px;overflow-x: hidden">

    <div class="row">
        <div class="col s12 l6">
            <div class="card white darken-1">
                <div class="card-content black-text">
                    <span class="card-title">Sign up</span>

                    <form>
                        <div class="row">
                            <div class="input-field col s12">
                                <input placeholder="Full Name" id="first_name" type="text" class="validate">
                                <label for="first_name">Full Name</label>
                            </div>
                            <div class="input-field col s12">
                                <input id="email_address" type="text" class="validate" placeholder="Email Address">
                                <label for="email_address">Email Address</label>
                            </div>
                            <div class="input-field col s12">
                                <input id="password" type="password" class="validate" placeholder="Password">
                                <label for="password">Password</label>
                            </div>
                            <div class="col s12">
                                <button type="submit" class="waves-effect waves-light btn"
                                        style="background-color: #56B90B;font-weight: 700;font-size: 14px">
                                    Sign Up
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <div class="col s12 l6">
            <div class="card white darken-1">
                <div class="card-content black-text">
                    <span class="card-title">To connect to the internet, please enter your coupon below</span>

                    <form>
                        <div class="row">
                            <div class="input-field col s12">
                                <input placeholder="Coupon" id="coupon" type="text" class="validate">
                                <label for="coupon">Coupon</label>
                            </div>
                            <div class="col s12">
                                <button type="submit" class="waves-effect waves-light btn"
                                        style="background-color: #56B90B;font-weight: 700;font-size: 14px">
                                    Connect
                                </button>
                            </div>
                        </div>
                    </form>

                </div>
            </div>


            <div class="card white darken-1">
                <div class="card-content black-text">

                    <span class="card-title">Or click below for a complimentary one hour and enjoy</span>
                    <a href="#" class="waves-effect waves-light btn"
                       style="background-color: #56B90B;font-weight: 700;font-size: 14px">
                        Connect
                    </a>
                </div>
            </div>

        </div>

    </div>


</div>


<div id="aboutPage" class="col s12" style="margin-top: 80px;padding: 0 10px 0 10px;overflow-x: hidden">
    About Us
</div>


<div id="contactPage" class="col s12" style="margin-top: 80px;padding: 0 10px 0 10px;overflow-x: hidden">
    <div class="row">
        <div class="col s12 l6">
            <div class="card white darken-1">
                <div class="card-content black-text">
                    <span class="card-title">Contact information</span>

                    <ul>
                        <li><strong class="text-dark">Address:</strong>
                            KN3 RD, Kicukiro District, Kigali Rwanda, Rwanda
                        </li>
                        <li style="margin-top:10px "><strong class="text-dark">Phone:</strong> (+250)
                            737-666-436 , (+250) 787-666-436
                        </li>
                        <li style="margin-top:10px "><strong class="text-dark">Email:</strong> <a
                                    href="mailto:info@a-r-e-d.com">info@a-r-e-d.com</a></li>
                    </ul>

                </div>
            </div>
        </div>

        <div class="col s12 l6">
            <div class="card white darken-1">
                <div class="card-content black-text">
                    <span class="card-title">Feedback form</span>

                    <form>
                        <div class="row">
                            <div class="input-field col s12">
                                <input placeholder="Name" id="cName" type="text" class="validate">
                                <label for="cName">Name</label>
                            </div>
                            <div class="input-field col s12">
                                <input id="cEmail" type="text" class="validate" placeholder="Email Address">
                                <label for="cEmail">Email Address</label>
                            </div>
                            <div class="input-field col s12">
                                <textarea id="cMessage" class="materialize-textarea"></textarea>
                                <label for="cMessage">Message</label>
                            </div>
                            <div class="col s12">
                                <button type="submit" class="waves-effect waves-light btn"
                                        style="background-color: #56B90B;font-weight: 700;font-size: 14px">
                                    Send Feedback
                                </button>
                            </div>
                        </div>
                    </form>

                </div>
            </div>


        </div>

    </div>
</div>


<footer class="page-footer white black-text">

    <div class="footer-copyright">
        <div class="container center black-text">
            © 2019 ARED Copyright. All
            Rights Reserved
        </div>
    </div>
</footer>


<!--JavaScript at end of body for optimized loading-->
<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script type="text/javascript" src="js/materialize.min.js"></script>
<script src="js/init.js"></script>
</body>
</html>
