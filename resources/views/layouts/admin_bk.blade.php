<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>

    <!-- META DATA -->
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, shrink-to-fit=no" name="viewport">
    <meta name="description" content="Dashplex - Laravel Admin Panel Dashboard Template">
    <meta name="author" content="Spruko Technologies Private Limited">
    <meta name="keywords"
        content="admin dashboard, dashboard ui, backend, admin panel, admin template, dashboard template, admin, bootstrap, laravel, laravel admin panel, php admin panel, php admin dashboard, laravel admin template, laravel dashboard, laravel admin panel">

    <!-- FAVICON -->
    <link rel="icon" href="favicon.ico" type="image/x-icon">

    <!-- TITLE -->
    <title> Dashplex - Laravel Bootstrap5 Premium Dashboard Template</title>

    <!-- BOOTSTRAP CSS -->
    <link id="style" href="css/bootstrap.min.css" rel="stylesheet">

    <!-- ICONS CSS -->
    <link href="css/icons.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/plugin.css" rel="stylesheet">

    <!-- APP CSS & APP SCSS -->
    <link rel="stylesheet" href="css/app.0dd9712c.css">
    <link rel="stylesheet" href="css/app.4b443544.css">


</head>

<body class="main-body leftmenu ltr light-theme dark-menu">

    <!-- SWITCHER -->
    <div class="switcher-wrapper">
        <div class="demo_changer">
            <div class="form_holder sidebar-right1">
                <div class="row">
                    <div class="predefined_styles">
                        <div class="swichermainleft text-center">
                            <div class="p-3 d-grid gap-2">
                                <a href="https://laravel8.spruko.com/dashplex/" class="btn ripple btn-primary mt-0">View
                                    Demo</a>
                                <a href="https://themeforest.net/user/spruko/portfolio"
                                    class="btn ripple btn-secondary">Buy Now</a>
                                <a href="https://themeforest.net/user/spruko/portfolio" class="btn ripple btn-info">Our
                                    Portfolio</a>
                            </div>
                        </div>
                        <div class="swichermainleft">
                            <h4>LTR and RTL Versions</h4>
                            <div class="skin-body">
                                <div class="switch_section">
                                    <div class="switch-toggle d-flex">
                                        <span class="me-auto">LTR</span>
                                        <p class="onoffswitch2"><input type="radio" name="onoffswitch7"
                                                id="myonoffswitch19" class="onoffswitch2-checkbox" checked>
                                            <label for="myonoffswitch19" class="onoffswitch2-label"></label>
                                        </p>
                                    </div>
                                    <div class="switch-toggle d-flex mt-2">
                                        <span class="me-auto">RTL</span>
                                        <p class="onoffswitch2"><input type="radio" name="onoffswitch7"
                                                id="myonoffswitch20" class="onoffswitch2-checkbox">
                                            <label for="myonoffswitch20" class="onoffswitch2-label"></label>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swichermainleft">
                            <h4>Navigation Style</h4>
                            <div class="skin-body">
                                <div class="switch_section">
                                    <div class="switch-toggle d-flex">
                                        <span class="me-auto">Vertical Menu</span>
                                        <p class="onoffswitch2"><input type="radio" name="onoffswitch01"
                                                id="myonoffswitch01" class="onoffswitch2-checkbox" checked>
                                            <label for="myonoffswitch01" class="onoffswitch2-label"></label>
                                        </p>
                                    </div>
                                    <div class="switch-toggle d-flex mt-2">
                                        <span class="me-auto">Horizontal Click Menu</span>
                                        <p class="onoffswitch2"><input type="radio" name="onoffswitch01"
                                                id="myonoffswitch02" class="onoffswitch2-checkbox">
                                            <label for="myonoffswitch02" class="onoffswitch2-label"></label>
                                        </p>
                                    </div>
                                    <div class="switch-toggle d-flex mt-2">
                                        <span class="me-auto">Horizontal Hover Menu</span>
                                        <p class="onoffswitch2"><input type="radio" name="onoffswitch01"
                                                id="myonoffswitch03" class="onoffswitch2-checkbox">
                                            <label for="myonoffswitch03" class="onoffswitch2-label"></label>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swichermainleft">
                            <h4>Light Theme Style</h4>
                            <div class="skin-body">
                                <div class="switch_section">
                                    <div class="switch-toggle d-flex">
                                        <span class="me-auto">Light Theme</span>
                                        <p class="onoffswitch2 my-0"><input type="radio" name="onoffswitch1"
                                                id="myonoffswitch1" class="onoffswitch2-checkbox" checked>
                                            <label for="myonoffswitch1" class="onoffswitch2-label"></label>
                                        </p>
                                    </div>
                                    <div class="switch-toggle d-flex mt-2">
                                        <span class="me-auto">Dark Theme</span>
                                        <p class="onoffswitch2 my-0"><input type="radio" name="onoffswitch1"
                                                id="myonoffswitch2" class="onoffswitch2-checkbox">
                                            <label for="myonoffswitch2" class="onoffswitch2-label"></label>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swichermainleft">
                            <h4>Theme Primary Color</h4>
                            <div class="skin-body">
                                <div class="switch_section">
                                    <div class="switch-toggle d-flex">
                                        <span class="me-auto">Primary Color</span>
                                        <div class>
                                            <input class=" input-color-picker color-primary-light" value="#4454c3"
                                                id="colorID" (change)="changePrimaryColor()" type="color"
                                                data-id="bg-color" data-id1="bg-hover" data-id2="bg-border"
                                                name="lightPrimary">
                                        </div>
                                    </div>
                                    <div class="switch-toggle d-flex mt-2">
                                        <span class="me-auto">Background Color</span>
                                        <div class>
                                            <input class="w-30p h-30 input-bg-picker background-primary-light"
                                                value="#1c203c" id="bgID" (change)="changeBackgroundColor()"
                                                type="color" data-id3="body" data-id4="theme" name="BackgroundPrimary">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swichermainleft">
                            <h4>Menu Styles</h4>
                            <div class="skin-body">
                                <div class="switch_section">
                                    <div class="switch-toggle lightMenu d-flex">
                                        <span class="me-auto">Light Menu</span>
                                        <p class="onoffswitch2"><input type="radio" name="onoffswitch2"
                                                id="myonoffswitch3" class="onoffswitch2-checkbox">
                                            <label for="myonoffswitch3" class="onoffswitch2-label"></label>
                                        </p>
                                    </div>
                                    <div class="switch-toggle colorMenu d-flex mt-2">
                                        <span class="me-auto">Color Menu</span>
                                        <p class="onoffswitch2"><input type="radio" name="onoffswitch2"
                                                id="myonoffswitch4" class="onoffswitch2-checkbox">
                                            <label for="myonoffswitch4" class="onoffswitch2-label"></label>
                                        </p>
                                    </div>
                                    <div class="switch-toggle darkMenu d-flex mt-2">
                                        <span class="me-auto">Dark Menu</span>
                                        <p class="onoffswitch2"><input type="radio" name="onoffswitch2"
                                                id="myonoffswitch5" class="onoffswitch2-checkbox">
                                            <label for="myonoffswitch5" class="onoffswitch2-label"></label>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swichermainleft">
                            <h4>Header Styles</h4>
                            <div class="skin-body">
                                <div class="switch_section">
                                    <div class="switch-toggle lightHeader d-flex">
                                        <span class="me-auto">Light Header</span>
                                        <p class="onoffswitch2"><input type="radio" name="onoffswitch3"
                                                id="myonoffswitch6" class="onoffswitch2-checkbox" checked>
                                            <label for="myonoffswitch6" class="onoffswitch2-label"></label>
                                        </p>
                                    </div>
                                    <div class="switch-toggle  colorHeader d-flex mt-2">
                                        <span class="me-auto">Color Header</span>
                                        <p class="onoffswitch2"><input type="radio" name="onoffswitch3"
                                                id="myonoffswitch7" class="onoffswitch2-checkbox">
                                            <label for="myonoffswitch7" class="onoffswitch2-label"></label>
                                        </p>
                                    </div>
                                    <div class="switch-toggle darkHeader d-flex mt-2">
                                        <span class="me-auto">Dark Header</span>
                                        <p class="onoffswitch2"><input type="radio" name="onoffswitch3"
                                                id="myonoffswitch8" class="onoffswitch2-checkbox">
                                            <label for="myonoffswitch8" class="onoffswitch2-label"></label>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swichermainleft layout-width-style">
                            <h4>Layout Width Styles</h4>
                            <div class="skin-body">
                                <div class="switch_section">
                                    <div class="switch-toggle d-flex">
                                        <span class="me-auto">Full Width</span>
                                        <p class="onoffswitch2"><input type="radio" name="onoffswitch4"
                                                id="myonoffswitch9" class="onoffswitch2-checkbox" checked>
                                            <label for="myonoffswitch9" class="onoffswitch2-label"></label>
                                        </p>
                                    </div>
                                    <div class="switch-toggle d-flex mt-2">
                                        <span class="me-auto">Boxed</span>
                                        <p class="onoffswitch2"><input type="radio" name="onoffswitch4"
                                                id="myonoffswitch10" class="onoffswitch2-checkbox">
                                            <label for="myonoffswitch10" class="onoffswitch2-label"></label>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swichermainleft">
                            <h4>Layout Positions</h4>
                            <div class="skin-body">
                                <div class="switch_section">
                                    <div class="switch-toggle d-flex">
                                        <span class="me-auto">Fixed</span>
                                        <p class="onoffswitch2"><input type="radio" name="onoffswitch5"
                                                id="myonoffswitch11" class="onoffswitch2-checkbox" checked>
                                            <label for="myonoffswitch11" class="onoffswitch2-label"></label>
                                        </p>
                                    </div>
                                    <div class="switch-toggle d-flex mt-2">
                                        <span class="me-auto">Scrollable</span>
                                        <p class="onoffswitch2"><input type="radio" name="onoffswitch5"
                                                id="myonoffswitch12" class="onoffswitch2-checkbox">
                                            <label for="myonoffswitch12" class="onoffswitch2-label"></label>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swichermainleft vertical-switcher">
                            <h4>Sidemenu layout Styles</h4>
                            <div class="skin-body">
                                <div class="switch_section">
                                    <div class="switch-toggle d-flex">
                                        <span class="me-auto">Default Menu</span>
                                        <p class="onoffswitch2"><input type="radio" name="onoffswitch6"
                                                id="myonoffswitch13" class="onoffswitch2-checkbox default-menu" checked>
                                            <label for="myonoffswitch13" class="onoffswitch2-label"></label>
                                        </p>
                                    </div>
                                    <div class="switch-toggle d-flex mt-2">
                                        <span class="me-auto">Icon with Text</span>
                                        <p class="onoffswitch2"><input type="radio" name="onoffswitch6"
                                                id="myonoffswitch14" class="onoffswitch2-checkbox">
                                            <label for="myonoffswitch14" class="onoffswitch2-label"></label>
                                        </p>
                                    </div>
                                    <div class="switch-toggle d-flex mt-2">
                                        <span class="me-auto">Icon Overlay</span>
                                        <p class="onoffswitch2"><input type="radio" name="onoffswitch6"
                                                id="myonoffswitch15" class="onoffswitch2-checkbox">
                                            <label for="myonoffswitch15" class="onoffswitch2-label"></label>
                                        </p>
                                    </div>
                                    <div class="switch-toggle d-flex mt-2">
                                        <span class="me-auto">Closed Sidemenu</span>
                                        <p class="onoffswitch2"><input type="radio" name="onoffswitch6"
                                                id="myonoffswitch16" class="onoffswitch2-checkbox">
                                            <label for="myonoffswitch16" class="onoffswitch2-label"></label>
                                        </p>
                                    </div>
                                    <div class="switch-toggle d-flex mt-2">
                                        <span class="me-auto">Hover Submenu</span>
                                        <p class="onoffswitch2"><input type="radio" name="onoffswitch6"
                                                id="myonoffswitch17" class="onoffswitch2-checkbox">
                                            <label for="myonoffswitch17" class="onoffswitch2-label"></label>
                                        </p>
                                    </div>
                                    <div class="switch-toggle d-flex mt-2">
                                        <span class="me-auto">Hover Submenu Style 1</span>
                                        <p class="onoffswitch2"><input type="radio" name="onoffswitch6"
                                                id="myonoffswitch18" class="onoffswitch2-checkbox">
                                            <label for="myonoffswitch18" class="onoffswitch2-label"></label>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swichermainleft">
                            <h4>Reset All Styles</h4>
                            <div class="skin-body">
                                <div class="switch_section my-4">
                                    <button id="resetAll" class="btn btn-danger btn-block" type="button">Reset All
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- SWITCHER -->

    <!--- GLOBAL LOADER -->
    <div id="global-loader">
        <img src="fonts/loader.svg" class="loader-img" alt="loader">
    </div>
    <!--- END GLOBAL LOADER -->

    <!-- PAGE -->
    <div class="page">

        <!-- MAIN-HEADER -->
        <div class="main-header side-header sticky">
            <div class="main-container container-fluid">
                <div class="main-header-left">
                    <a class="main-header-menu-icon" href="javascript:void(0);" id="mainSidebarToggle">
                        <svg class="header-menu-icon" xmlns="http://www.w3.org/2000/svg"
                            enable-background="new 0 0 24 24" viewBox="0 0 24 24">
                            <path
                                d="M2.5,10.5h11c0.276123,0,0.5-0.223877,0.5-0.5s-0.223877-0.5-0.5-0.5h-11C2.223877,9.5,2,9.723877,2,10S2.223877,10.5,2.5,10.5z M2.5,6.5h19C21.776123,6.5,22,6.276123,22,6s-0.223877-0.5-0.5-0.5h-19C2.223877,5.5,2,5.723877,2,6S2.223877,6.5,2.5,6.5z M21.8446045,9.3519897C21.609314,9.0689697,21.189209,9.0303345,20.90625,9.265625l-2.6660156,2.2226562c-0.0315552,0.0261841-0.0606079,0.0552368-0.086792,0.086792c-0.2346802,0.2826538-0.1958008,0.7019653,0.086792,0.9366455L20.90625,14.734375c0.1194458,0.1005249,0.2706299,0.1555176,0.4267578,0.1552734c0.1973267-0.0002441,0.3843994-0.0878906,0.5109253-0.2393188c0.236145-0.2826538,0.1984863-0.7032471-0.0841675-0.9393921L19.7080078,12l2.0517578-1.7109375C22.0414429,10.0534668,22.0794067,9.6343384,21.8446045,9.3519897z M2.5,14.5h11c0.276123,0,0.5-0.223877,0.5-0.5s-0.223877-0.5-0.5-0.5h-11C2.223877,13.5,2,13.723877,2,14S2.223877,14.5,2.5,14.5z M21.5,17.5h-19C2.223877,17.5,2,17.723877,2,18s0.223877,0.5,0.5,0.5h19c0.276123,0,0.5-0.223877,0.5-0.5S21.776123,17.5,21.5,17.5z" />
                        </svg>
                    </a>
                    <div class="hor-logo">
                        <a class="main-logo" href="https://laravel8.spruko.com/dashplex/index">
                            <img src="images/logo.png" class="header-brand-img desktop-logo" alt="logo">
                            <img src="images/logo-light.png" class="header-brand-img desktop-logo-dark" alt="logo">
                        </a>
                    </div>
                </div>
                <div class="main-header-center">
                    <div class="responsive-logo">
                        <a href="https://laravel8.spruko.com/dashplex/index"><img src="images/logo.png"
                                class="mobile-logo" alt="logo"></a>
                        <a href="https://laravel8.spruko.com/dashplex/index"><img src="images/logo-light.png"
                                class="mobile-logo-dark" alt="logo"></a>
                    </div>
                    <div class="input-group">
                        <input type="search" class="form-control rounded-0" placeholder="Search for anything...">
                        <button class="btn search-btn"><i class="fe fe-search"></i></button>
                    </div>
                </div>
                <div class="main-header-right">
                    <button class="navbar-toggler navresponsive-toggler d-md-none ms-auto" type="button"
                        data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent-4"
                        aria-controls="navbarSupportedContent-4" aria-expanded="false" aria-label="Toggle navigation">
                        <svg class="header-icons navbar-toggler-icon" xmlns="http://www.w3.org/2000/svg"
                            enable-background="new 0 0 24 24" viewBox="0 0 24 24">
                            <path
                                d="M12,7c1.1040039-0.0014038,1.9985962-0.8959961,2-2c0-1.1045532-0.8954468-2-2-2s-2,0.8954468-2,2S10.8954468,7,12,7z M12,4c0.552124,0.0003662,0.9996338,0.447876,1,1c0,0.5523071-0.4476929,1-1,1s-1-0.4476929-1-1S11.4476929,4,12,4z M12,10c-1.1045532,0-2,0.8954468-2,2s0.8954468,2,2,2c1.1040039-0.0014038,1.9985962-0.8959961,2-2C14,10.8954468,13.1045532,10,12,10z M12,13c-0.5523071,0-1-0.4476929-1-1s0.4476929-1,1-1c0.552124,0.0003662,0.9996338,0.447876,1,1C13,12.5523071,12.5523071,13,12,13z M12,17c-1.1045532,0-2,0.8954468-2,2s0.8954468,2,2,2c1.1040039-0.0014038,1.9985962-0.8959961,2-2C14,17.8954468,13.1045532,17,12,17z M12,20c-0.5523071,0-1-0.4476929-1-1s0.4476929-1,1-1c0.552124,0.0003662,0.9996338,0.447876,1,1C13,19.5523071,12.5523071,20,12,20z" />
                        </svg>
                    </button>
                    <div class="navbar navbar-expand-lg navbar-collapse responsive-navbar">
                        <div class="collapse navbar-collapse" id="navbarSupportedContent-4">
                            <div class="d-flex order-lg-2 ms-auto">
                                <div class="dropdown header-search">
                                    <a class="nav-link icon header-search">
                                        <svg class="header-icons" xmlns="http://www.w3.org/2000/svg"
                                            enable-background="new 0 0 24 24" viewBox="0 0 24 24">
                                            <path
                                                d="M21.2529297,17.6464844l-2.8994141-2.8994141c-0.0021973-0.0021973-0.0043945-0.0043945-0.0065918-0.0065918c-0.8752441-0.8721313-2.2249146-0.9760132-3.2143555-0.3148804l-0.8467407-0.8467407c1.0981445-1.2668457,1.7143555-2.887146,1.715332-4.5747681c0.0021973-3.8643799-3.1286621-6.9989014-6.993042-7.0011597S2.0092773,5.1315308,2.007019,8.9959106S5.1356201,15.994812,9,15.9970703c1.6889038,0.0029907,3.3114014-0.6120605,4.5789185-1.7111206l0.84729,0.84729c-0.6630859,0.9924316-0.5566406,2.3459473,0.3208618,3.2202759l2.8994141,2.8994141c0.4780884,0.4786987,1.1271973,0.7471313,1.8037109,0.7460938c0.6766357,0.0001831,1.3256226-0.2686768,1.803894-0.7472534C22.2493286,20.2558594,22.2488403,18.6417236,21.2529297,17.6464844z M9.0084229,14.9970703c-3.3120728,0.0023193-5.9989624-2.6807861-6.0012817-5.9928589S5.6879272,3.005249,9,3.0029297c1.5910034-0.0026855,3.1175537,0.628479,4.2421875,1.7539062c1.1252441,1.1238403,1.7579956,2.6486206,1.7590942,4.2389526C15.0036011,12.3078613,12.3204956,14.994751,9.0084229,14.9970703z M20.5458984,20.5413818c-0.604126,0.6066284-1.5856934,0.6087036-2.1923828,0.0045166l-2.8994141-2.8994141c-0.2913818-0.2910156-0.4549561-0.6861572-0.4544678-1.0979614C15.0006714,15.6928101,15.6951294,15,16.5507812,15.0009766c0.4109497-0.0005493,0.8051758,0.1624756,1.0957031,0.453125l2.8994141,2.8994141C21.1482544,18.9584351,21.1482544,19.9364624,20.5458984,20.5413818z" />
                                        </svg>
                                    </a>
                                    <div class="dropdown-menu">
                                        <div class="main-form-search p-2">
                                            <div class="input-group">
                                                <div class="input-group-btn search-panel">
                                                </div>
                                                <input type="search" class="form-control"
                                                    placeholder="Search for anything...">
                                                <button class="btn search-btn"><i class="fe fe-search"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--search-->
                                <div class="dropdown d-flex main-header-theme">
                                    <a class="nav-link icon layout-setting">
                                        <span class="dark-layout">
                                            <svg class="header-icons" xmlns="http://www.w3.org/2000/svg"
                                                enable-background="new 0 0 24 24" viewBox="0 0 24 24">
                                                <path
                                                    d="M5.6356812,17.6572876l-0.7069702,0.7069702c-0.09375,0.09375-0.1463623,0.2208862-0.1464233,0.3534546c0,0.276123,0.2238159,0.5,0.499939,0.500061c0.1326294,0.0001221,0.2598267-0.0526123,0.3534546-0.1464844l0.7070312-0.7070312c0.1904907-0.194397,0.1904907-0.5054932,0-0.6998901C6.1494141,17.4671631,5.8328857,17.4639893,5.6356812,17.6572876z M12,4h0.0006104C12.2765503,3.9998169,12.5001831,3.776001,12.5,3.5v-1C12.5,2.223877,12.276123,2,12,2s-0.5,0.223877-0.5,0.5v1.0006104C11.5001831,3.7765503,11.723999,4.0001831,12,4z M5.6357422,6.3427734c0.0936279,0.0939331,0.2208862,0.1466675,0.3535156,0.1464844v0.000061c0.1325073-0.000061,0.2596436-0.0527344,0.3533936-0.1464233c0.1953125-0.1952515,0.1953125-0.5118408,0.000061-0.7071533L5.6357422,4.928772c-0.194397-0.1904907-0.5054321-0.1904907-0.6998291,0C4.7387085,5.1220093,4.7354736,5.4385376,4.9287109,5.6357422L5.6357422,6.3427734z M3.5,11.5h-1C2.223877,11.5,2,11.723877,2,12s0.223877,0.5,0.5,0.5h1C3.776123,12.5,4,12.276123,4,12S3.776123,11.5,3.5,11.5z M12,20c-0.276123,0-0.5,0.223877-0.5,0.5v1.0005493C11.5001831,21.7765503,11.723999,22.0001831,12,22h0.0006104c0.2759399-0.0001831,0.4995728-0.223999,0.4993896-0.5v-1C12.5,20.223877,12.276123,20,12,20z M12,6c-3.3137207,0-6,2.6862793-6,6s2.6862793,6,6,6c3.3121948-0.0036011,5.9963989-2.6878052,6-6C18,8.6862793,15.3137207,6,12,6z M12,17c-2.7614136,0-5-2.2385864-5-5s2.2385864-5,5-5c2.7600708,0.0032349,4.9967651,2.2399292,5,5C17,14.7614136,14.7614136,17,12,17z M21.5,11.5h-1c-0.276123,0-0.5,0.223877-0.5,0.5s0.223877,0.5,0.5,0.5h1c0.276123,0,0.5-0.223877,0.5-0.5S21.776123,11.5,21.5,11.5z M18.3642578,4.9287109l-0.7070312,0.7070312c-0.09375,0.09375-0.1463623,0.2208862-0.1464233,0.3534546c0,0.276123,0.2238159,0.5,0.499939,0.500061c0.1326294,0.0001221,0.2598267-0.0526123,0.3535156-0.1465454l0.7069702-0.7069702c0.0023804-0.0023804,0.0047607-0.0046997,0.0071411-0.0071411c0.1932373-0.1971436,0.1900635-0.5137329-0.0071411-0.7069702C18.8740234,4.7283325,18.5574951,4.7315674,18.3642578,4.9287109z M18.3642578,17.6572876c-0.194397-0.1905518-0.5055542-0.1905518-0.6999512,0c-0.1971436,0.1932983-0.2003174,0.5098267-0.007019,0.7069702l0.7069702,0.7070312c0.0936279,0.0939331,0.2208252,0.1466675,0.3534546,0.1464844c0.1325684,0,0.2597046-0.0526733,0.3534546-0.1463623c0.1953125-0.1952515,0.1953125-0.5118408,0.0001221-0.7071533L18.3642578,17.6572876z" />
                                            </svg>
                                        </span>
                                        <span class="light-layout">
                                            <svg class="header-icons" xmlns="http://www.w3.org/2000/svg"
                                                enable-background="new 0 0 24 24" viewBox="0 0 24 24">
                                                <path
                                                    d="M22.0482178,13.2746582c-0.1265259-0.2453003-0.4279175-0.3416138-0.6732178-0.2150879C20.1774902,13.6793823,18.8483887,14.0019531,17.5,14c-0.8480835-0.0005493-1.6913452-0.1279297-2.50177-0.3779297c-4.4887085-1.3847046-7.0050049-6.1460571-5.6203003-10.6347656c0.0320435-0.1033325,0.0296021-0.2142944-0.0068359-0.3161621C9.2781372,2.411377,8.9921875,2.2761841,8.7324219,2.3691406C4.6903076,3.800293,1.9915771,7.626709,2,11.9146729C2.0109863,17.4956055,6.5440674,22.0109863,12.125,22c4.9342651,0.0131226,9.1534424-3.5461426,9.9716797-8.4121094C22.1149292,13.4810181,22.0979614,13.3710327,22.0482178,13.2746582z M16.0877075,20.0958252c-4.5321045,2.1853027-9.9776611,0.2828979-12.1630249-4.2492065S3.6417236,5.8689575,8.1738281,3.6835938C8.0586548,4.2776489,8.0004272,4.8814087,8,5.4865723C7.9962769,10.7369385,12.2495728,14.9962769,17.5,15c1.1619263,0.0023193,2.3140869-0.2119751,3.3974609-0.6318359C20.1879272,16.8778076,18.4368896,18.9630127,16.0877075,20.0958252z" />
                                            </svg>
                                        </span>
                                    </a>
                                </div><!-- Theme-Layout -->
                                <div class="dropdown d-flex main-header-fullscreen">
                                    <a class="nav-link icon full-screen-link" href="javascript:void(0);">
                                        <svg class="header-icons fullscreen-button fullscreen"
                                            xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24"
                                            viewBox="0 0 24 24">
                                            <path
                                                d="M10.1464844,13.1464844L3,20.2929688V16.5C3,16.223877,2.776123,16,2.5,16S2,16.223877,2,16.5v5.0005493C2.0001831,21.7765503,2.223999,22.0001831,2.5,22h5C7.776123,22,8,21.776123,8,21.5S7.776123,21,7.5,21H3.7069092l7.1465454-7.1465454c0.1871338-0.1937256,0.1871338-0.5009155,0-0.6947021C10.6616211,12.960144,10.3450928,12.9546509,10.1464844,13.1464844z M3.7068481,3H7.5C7.776123,3,8,2.776123,8,2.5S7.776123,2,7.5,2H2.4993896C2.2234497,2.0001831,1.9998169,2.223999,2,2.5v5.0006104C2.0001831,7.7765503,2.223999,8.0001831,2.5,8h0.0006104C2.7765503,7.9998169,3.0001831,7.776001,3,7.5V3.7071533l7.1524658,7.1524658c0.1937866,0.1871948,0.5009766,0.1871948,0.6947632,0c0.1986084-0.1918335,0.2041016-0.5083618,0.0122681-0.7069702L3.7068481,3z M21.5,2h-5C16.223877,2,16,2.223877,16,2.5S16.223877,3,16.5,3h3.7930908l-7.1526489,7.1526489c-0.1871948,0.1937256-0.1871948,0.5009766,0,0.6947021c0.1918335,0.1986084,0.5083618,0.2041016,0.7069702,0.0122681L21,3.7070312v3.7935791C21.0001831,7.7765503,21.223999,8.0001831,21.5,8h0.0006104C21.7765503,7.9998169,22.0001831,7.776001,22,7.5V2.4993896C21.9998169,2.2234497,21.776001,1.9998169,21.5,2z M21.5,16c-0.276123,0-0.5,0.223877-0.5,0.5v3.7930908l-7.1465454-7.1465454c-0.1937256-0.1871338-0.5009155-0.1871338-0.6947021,0c-0.1986084,0.1918335-0.2041016,0.5083618-0.0122681,0.7069702L20.2929688,21H16.5c-0.276123,0-0.5,0.223877-0.5,0.5s0.223877,0.5,0.5,0.5h5.0006104C21.7765503,21.9998169,22.0001831,21.776001,22,21.5v-5C22,16.223877,21.776123,16,21.5,16z" />
                                        </svg>
                                        <svg class="header-icons fullscreen-button exit-fullscreen"
                                            xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24"
                                            viewBox="0 0 24 24">
                                            <path
                                                d="M7.5,16h-5C2.223877,16,2,16.223877,2,16.5S2.223877,17,2.5,17H7v4.5005493C7.0001831,21.7765503,7.223999,22.0001831,7.5,22h0.0006104C7.7765503,21.9998169,8.0001831,21.776001,8,21.5v-5.0006104C7.9998169,16.2234497,7.776001,15.9998169,7.5,16z M16.5,8h5C21.776123,8,22,7.776123,22,7.5S21.776123,7,21.5,7H17V2.5C17,2.223877,16.776123,2,16.5,2S16,2.223877,16,2.5v5.0006104C16.0001831,7.7765503,16.223999,8.0001831,16.5,8z M7.5,2C7.223877,2,7,2.223877,7,2.5V7H2.5C2.223877,7,2,7.223877,2,7.5S2.223877,8,2.5,8h5.0006104C7.7765503,7.9998169,8.0001831,7.776001,8,7.5v-5C8,2.223877,7.776123,2,7.5,2z M21.5,16h-5.0005493C16.2234497,16.0001831,15.9998169,16.223999,16,16.5v5.0005493C16.0001831,21.7765503,16.223999,22.0001831,16.5,22h0.0006104C16.7765503,21.9998169,17.0001831,21.776001,17,21.5V17h4.5c0.276123,0,0.5-0.223877,0.5-0.5S21.776123,16,21.5,16z" />
                                        </svg>
                                    </a>
                                </div><!-- full screen -->
                                <div class="dropdown main-header-notification flag-dropdown">
                                    <a class="nav-link icon text-center" data-bs-target="#country-selector"
                                        data-bs-toggle="modal">
                                        <img class="header-icons" alt src="images/us_flag.jpg">
                                    </a>
                                </div><!-- country flag -->
                                <div class="dropdown d-flex main-header-notification">
                                    <a class="nav-link icon" href="javascript:void(0);">
                                        <svg class="header-icons" xmlns="http://www.w3.org/2000/svg"
                                            enable-background="new 0 0 24 24" viewBox="0 0 24 24">
                                            <path
                                                d="M18,14.1V10c0-3.1-2.4-5.7-5.5-6V2.5C12.5,2.2,12.3,2,12,2s-0.5,0.2-0.5,0.5V4C8.4,4.3,6,6.9,6,10v4.1c-1.1,0.2-2,1.2-2,2.4v2C4,18.8,4.2,19,4.5,19h3.7c0.5,1.7,2,3,3.8,3c1.8,0,3.4-1.3,3.8-3h3.7c0.3,0,0.5-0.2,0.5-0.5v-2C20,15.3,19.1,14.3,18,14.1z M7,10c0-2.8,2.2-5,5-5s5,2.2,5,5v4H7V10z M13,20.8c-1.6,0.5-3.3-0.3-3.8-1.8h5.6C14.5,19.9,13.8,20.5,13,20.8z M19,18H5v-1.5C5,15.7,5.7,15,6.5,15h11c0.8,0,1.5,0.7,1.5,1.5V18z" />
                                        </svg>
                                        <span class="badge bg-info nav-link-badge">3</span>
                                    </a>
                                    <div class="dropdown-menu">
                                        <div class="header-navheading">
                                            <div class="d-flex">
                                                <p class="main-notification-text mx-0 my-auto">Notifications (5)</p>
                                                <span class="badge rounded-pill bg-success ms-auto">Mark All Read</span>
                                            </div>
                                        </div>
                                        <div class="main-notification-list">
                                            <div class="media new">
                                                <div class="main-img-user online">
                                                    <img alt="avatar" src="images/5.jpg">
                                                </div>
                                                <div class="media-body">
                                                    <a href="https://laravel8.spruko.com/dashplex/notifications-list">
                                                        <p><strong>Andrea James</strong> added new schedule realease</p>
                                                        <span>Mar 20 10:40pm</span>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="media">
                                                <div class="main-img-user">
                                                    <img alt="avatar" src="images/2.jpg">
                                                </div>
                                                <div class="media-body">
                                                    <a href="https://laravel8.spruko.com/dashplex/notifications-list">
                                                        <p>Congratulate <strong>Olivia James</strong> for New template
                                                            start</p>
                                                        <span>Mar 23 12:32pm</span>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="media">
                                                <div class="main-img-user">
                                                    <img alt="avatar" src="images/7.jpg">
                                                </div>
                                                <div class="media-body">
                                                    <a href="https://laravel8.spruko.com/dashplex/notifications-list">
                                                        <p>Project has been approved from <strong>Capital Tech</strong>
                                                        </p>
                                                        <span>Mar 02 4:17pm</span>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="media">
                                                <div class="main-img-user">
                                                    <img alt="avatar" src="images/9.jpg">
                                                </div>
                                                <div class="media-body">
                                                    <a href="https://laravel8.spruko.com/dashplex/notifications-list">
                                                        <p>New Appllication received from <strong>Fiona Grace.</strong>
                                                        </p>
                                                        <span>Feb 15 09:10am</span>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="media">
                                                <div class="main-img-user online">
                                                    <img alt="avatar" src="images/3.jpg">
                                                </div>
                                                <div class="media-body">
                                                    <a href="https://laravel8.spruko.com/dashplex/notifications-list">
                                                        <p><strong>Elizabeth Lewis</strong> added new schedule realease
                                                        </p>
                                                        <span>Oct 12 10:40pm</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="dropdown-footer">
                                            <a href="https://laravel8.spruko.com/dashplex/notifications-list">View All
                                                Notifications</a>
                                        </div>
                                    </div>
                                </div><!-- notifications -->
                                <div class="dropdown d-flex main-header-message">
                                    <a class="nav-link icon" href="javascript:void(0);">
                                        <svg class="header-icons" xmlns="http://www.w3.org/2000/svg"
                                            enable-background="new 0 0 24 24" viewBox="0 0 24 24">
                                            <path
                                                d="M17.5,8h-11C6.223877,8,6,8.223877,6,8.5S6.223877,9,6.5,9h11C17.776123,9,18,8.776123,18,8.5S17.776123,8,17.5,8z M13.5,11h-7C6.223877,11,6,11.223877,6,11.5S6.223877,12,6.5,12h7c0.276123,0,0.5-0.223877,0.5-0.5S13.776123,11,13.5,11z M19,2H5C3.3438721,2.0018311,2.0018311,3.3438721,2,5v10c0.0018311,1.6561279,1.3438721,2.9981689,3,3h12.2930298l3.8534546,3.8535156C21.2402344,21.9473267,21.3673706,22,21.5,22c0.276123,0,0.5-0.223877,0.5-0.5V5C21.9981689,3.3438721,20.6561279,2.0018311,19,2z M21,20.2929688l-3.1464844-3.1464844C17.7597656,17.0526733,17.6326294,17,17.5,17H5c-1.1040039-0.0014038-1.9985962-0.8959961-2-2V5c0.0014038-1.1040039,0.8959961-1.9985962,2-2h14c1.1040039,0.0014038,1.9985962,0.8959961,2,2V20.2929688z" />
                                        </svg>
                                        <span class="badge bg-warning nav-link-badge">5</span>
                                    </a>
                                    <div class="dropdown-menu">
                                        <div class="header-navheading">
                                            <div class="d-flex">
                                                <p class="main-message-text mx-0 my-auto">5 New Messages</p>
                                                <span class="badge rounded-pill bg-success ms-auto">Mark All Read</span>
                                            </div>
                                        </div>
                                        <div class="main-message-list">
                                            <div class="media new">
                                                <div class="main-img-user online">
                                                    <img alt="avatar" src="images/5.jpg">
                                                </div>
                                                <div class="media-body">
                                                    <a href="https://laravel8.spruko.com/dashplex/chat">
                                                        <h6 class="text-dark mb-1 tx-semibold">Paul James</h6>
                                                        <p>Here are some products...</p>
                                                        <span class="text-muted">3 Hours ago</span>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="media">
                                                <div class="main-img-user">
                                                    <img alt="avatar" src="images/2.jpg">
                                                </div>
                                                <div class="media-body">
                                                    <a href="https://laravel8.spruko.com/dashplex/chat">
                                                        <h6 class="text-dark mb-1 tx-semibold">Peter</h6>
                                                        <p>Are you ready to pickup your order...</p>
                                                        <span class="text-muted">3 Hours ago</span>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="media">
                                                <div class="main-img-user">
                                                    <img alt="avatar" src="images/11.jpg">
                                                </div>
                                                <div class="media-body">
                                                    <a href="https://laravel8.spruko.com/dashplex/chat">
                                                        <h6 class="text-dark mb-1 tx-semibold">Cameron Ian</h6>
                                                        <p>Your product is delivered.</p>
                                                        <span class="text-muted">2 Hours ago</span>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="media">
                                                <div class="main-img-user">
                                                    <img alt="avatar" src="images/4.jpg">
                                                </div>
                                                <div class="media-body">
                                                    <a href="https://laravel8.spruko.com/dashplex/chat">
                                                        <h6 class="text-dark mb-1 tx-semibold">Kevin Ella</h6>
                                                        <p>New Meetup starts by today evening</p>
                                                        <span class="text-muted">4 Hours ago</span>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="media">
                                                <div class="main-img-user online">
                                                    <img alt="avatar" src="images/3.jpg">
                                                </div>
                                                <div class="media-body">
                                                    <a href="https://laravel8.spruko.com/dashplex/chat">
                                                        <h6 class="text-dark mb-1 tx-semibold"> Mita Sunny</h6>
                                                        <p>All set ! Now time to get to know...</p>
                                                        <span class="text-muted">2 Hours ago</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="dropdown-footer">
                                            <a href="https://laravel8.spruko.com/dashplex/chat">View All</a>
                                        </div>
                                    </div>
                                </div><!-- message -->
                                <div class="dropdown d-flex main-profile-menu">
                                    <a class="d-flex" href="javascript:void(0);">
                                        <span class="main-img-user">
                                            <img alt="avatar" src="images/6.jpg">
                                        </span>
                                    </a>
                                    <div class="dropdown-menu">
                                        <div class="header-navheading">
                                            <h6 class="main-notification-title">Dennis Mark</h6>
                                            <p class="main-notification-text">Web Designer</p>
                                        </div>
                                        <a class="dropdown-item border-top"
                                            href="https://laravel8.spruko.com/dashplex/profile">
                                            <i class="fe fe-user"></i> My Profile
                                        </a>
                                        <a class="dropdown-item" href="https://laravel8.spruko.com/dashplex/profile">
                                            <i class="fe fe-edit"></i> Edit Profile
                                        </a>
                                        <a class="dropdown-item" href="https://laravel8.spruko.com/dashplex/profile">
                                            <i class="fe fe-settings"></i> Account Settings
                                        </a>
                                        <a class="dropdown-item" href="https://laravel8.spruko.com/dashplex/profile">
                                            <i class="fe fe-compass"></i> Activity
                                        </a>
                                        <a class="dropdown-item" href="https://laravel8.spruko.com/dashplex/signin">
                                            <i class="fe fe-power"></i> Sign Out
                                        </a>
                                    </div>
                                </div><!-- profile -->
                                <div class="dropdown d-flex header-settings">
                                    <a href="javascript:void(0);" class="nav-link icon" data-bs-toggle="sidebar-right"
                                        data-bs-target=".sidebar-right">
                                        <svg class="header-icons" xmlns="http://www.w3.org/2000/svg"
                                            enable-background="new 0 0 24 24" viewBox="0 0 24 24">
                                            <path
                                                d="M21.5,17h-19C2.223877,17,2,17.223877,2,17.5S2.223877,18,2.5,18h19c0.276123,0,0.5-0.223877,0.5-0.5S21.776123,17,21.5,17z M2.5,8h19C21.776123,8,22,7.776123,22,7.5S21.776123,7,21.5,7h-19C2.223877,7,2,7.223877,2,7.5S2.223877,8,2.5,8z M21.5,12h-19C2.223877,12,2,12.223877,2,12.5S2.223877,13,2.5,13h19c0.276123,0,0.5-0.223877,0.5-0.5S21.776123,12,21.5,12z" />
                                        </svg>
                                    </a>
                                </div><!-- header settings -->
                            </div>
                        </div>
                    </div>
                    <div class="d-flex header-setting-icon demo-icon">
                        <a class="nav-link icon" href="javascript:void(0);">
                            <svg class="settings-icon fa-spin" xmlns="http://www.w3.org/2000/svg"
                                enable-background="new 0 0 24 24" viewBox="0 0 24 24">
                                <path
                                    d="M11.5,7.9c-2.3,0-4,1.9-4,4.2s1.9,4,4.2,4c2.2,0,4-1.9,4-4.1c0,0,0-0.1,0-0.1C15.6,9.7,13.7,7.9,11.5,7.9z M14.6,12.1c0,1.7-1.5,3-3.2,3c-1.7,0-3-1.5-3-3.2c0-1.7,1.5-3,3.2-3C13.3,8.9,14.7,10.3,14.6,12.1C14.6,12,14.6,12.1,14.6,12.1z M20,13.1c-0.5-0.6-0.5-1.5,0-2.1l1.4-1.5c0.1-0.2,0.2-0.4,0.1-0.6l-2.1-3.7c-0.1-0.2-0.3-0.3-0.5-0.2l-2,0.4c-0.8,0.2-1.6-0.3-1.9-1.1l-0.6-1.9C14.2,2.1,14,2,13.8,2H9.5C9.3,2,9.1,2.1,9,2.3L8.4,4.3C8.1,5,7.3,5.5,6.5,5.3l-2-0.4C4.3,4.9,4.1,5,4,5.2L1.9,8.8C1.8,9,1.8,9.2,2,9.4l1.4,1.5c0.5,0.6,0.5,1.5,0,2.1L2,14.6c-0.1,0.2-0.2,0.4-0.1,0.6L4,18.8c0.1,0.2,0.3,0.3,0.5,0.2l2-0.4c0.8-0.2,1.6,0.3,1.9,1.1L9,21.7C9.1,21.9,9.3,22,9.5,22h4.2c0.2,0,0.4-0.1,0.5-0.3l0.6-1.9c0.3-0.8,1.1-1.2,1.9-1.1l2,0.4c0.2,0,0.4-0.1,0.5-0.2l2.1-3.7c0.1-0.2,0.1-0.4-0.1-0.6L20,13.1z M18.6,18l-1.6-0.3c-1.3-0.3-2.6,0.5-3,1.7L13.4,21H9.9l-0.5-1.6c-0.4-1.3-1.7-2-3-1.7L4.7,18l-1.8-3l1.1-1.3c0.9-1,0.9-2.5,0-3.5L2.9,9l1.8-3l1.6,0.3c1.3,0.3,2.6-0.5,3-1.7L9.9,3h3.5l0.5,1.6c0.4,1.3,1.7,2,3,1.7L18.6,6l1.8,3l-1.1,1.3c-0.9,1-0.9,2.5,0,3.5l1.1,1.3L18.6,18z" />
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <!-- END MAIN-HEADER -->

        <!-- MAIN-SIDEBAR -->
        <div class="sticky">
            <div class="main-menu main-sidebar main-sidebar-sticky side-menu">
                <div class="main-sidebar-header main-container-1 active">
                    <div class="sidemenu-logo">
                        <a class="main-logo" href="https://laravel8.spruko.com/dashplex">
                            <img src="images/logo-light.png" class="header-brand-img desktop-logo-dark" alt="logo">
                            <img src="images/icon-light.png" class="header-brand-img icon-logo-dark" alt="logo">
                            <img src="images/logo.png" class="header-brand-img desktop-logo" alt="logo">
                            <img src="images/icon.png" class="header-brand-img icon-logo" alt="logo">
                        </a>
                    </div>
                    <div class="main-sidebar-body main-body-1">
                        <div class="slide-left disabled" id="slide-left"><svg xmlns="http://www.w3.org/2000/svg"
                                fill="#c9bebe" width="24" height="24" viewBox="0 0 24 24">
                                <path d="M13.293 6.293 7.586 12l5.707 5.707 1.414-1.414L10.414 12l4.293-4.293z" />
                            </svg></div>
                        <ul class="menu-nav nav">
                            <li class="nav-item">
                                <a class="nav-link with-sub" href="javascript:void(0);">
                                    <svg class="sidemenu-icon menu-icon" xmlns="http://www.w3.org/2000/svg"
                                        enable-background="new 0 0 24 24" viewBox="0 0 24 24">
                                        <path
                                            d="M10.5,13h-7C3.2,13,3,13.2,3,13.5v7C3,20.8,3.2,21,3.5,21h7c0.3,0,0.5-0.2,0.5-0.5v-7C11,13.2,10.8,13,10.5,13z M10,20H4v-6h6V20z M10.5,3h-7C3.2,3,3,3.2,3,3.5v7C3,10.8,3.2,11,3.5,11h7c0.3,0,0.5-0.2,0.5-0.5v-7C11,3.2,10.8,3,10.5,3z M10,10H4V4h6V10z M20.5,3h-7C13.2,3,13,3.2,13,3.5v7c0,0.3,0.2,0.5,0.5,0.5h7c0.3,0,0.5-0.2,0.5-0.5v-7C21,3.2,20.8,3,20.5,3z M20,10h-6V4h6V10z M20.5,16.5h-3v-3c0-0.3-0.2-0.5-0.5-0.5s-0.5,0.2-0.5,0.5v3h-3c-0.3,0-0.5,0.2-0.5,0.5s0.2,0.5,0.5,0.5h3v3c0,0.3,0.2,0.5,0.5,0.5h0c0.3,0,0.5-0.2,0.5-0.5v-3h3c0.3,0,0.5-0.2,0.5-0.5S20.8,16.5,20.5,16.5z" />
                                    </svg>
                                    <span class="sidemenu-label">Dashboards</span>
                                    <i class="angle fe fe-chevron-right"></i>
                                </a>
                                <ul class="nav-sub">
                                    <li class="side-menu-label1"><a href="javascript:void(0);">Dashboards</a></li>
                                    <li class="nav-sub-item">
                                        <a class="nav-sub-link"
                                            href="https://laravel8.spruko.com/dashplex/index">Dashboard-1</a>
                                    </li>
                                    <li class="nav-sub-item">
                                        <a class="nav-sub-link"
                                            href="https://laravel8.spruko.com/dashplex/dashboard-2">Dashboard-2</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link with-sub" href="javascript:void(0);">
                                    <svg class="sidemenu-icon menu-icon" xmlns="http://www.w3.org/2000/svg"
                                        enable-background="new 0 0 24 24" viewBox="0 0 24 24">
                                        <path
                                            d="M21.5,17h-15C5.6715698,17,5,16.3284302,5,15.5S5.6715698,14,6.5,14h10.9638672c1.2661133,0.0041504,2.3724365-0.8544312,2.6826172-2.0819702l1.8378906-7.2959595c0.0680542-0.2669678-0.0932617-0.5385742-0.3602905-0.6066284C21.5834961,4.005127,21.5418091,3.999939,21.5,4H6.3908691L6.3642578,3.8935547C6.0869751,2.7798462,5.0861816,1.9986572,3.9384766,2H2.5C2.223877,2,2,2.223877,2,2.5S2.223877,3,2.5,3h1.4384766C4.6269531,2.9990234,5.227356,3.4676514,5.3935547,4.1357422L7.609375,13H6.5C5.1192627,13,4,14.1192627,4,15.5S5.1192627,18,6.5,18h1.0124512C7.1818848,18.4303589,7.0018311,18.9573364,7,19.5C7,20.8807373,8.1192627,22,9.5,22s2.5-1.1192627,2.5-2.5c-0.0018311-0.5426636-0.1818848-1.0696411-0.5124512-1.5h4.0249023C15.1818848,18.4303589,15.0018311,18.9573364,15,19.5c0,1.3807373,1.1192627,2.5,2.5,2.5s2.5-1.1192627,2.5-2.5c-0.0018311-0.5426636-0.1818848-1.0696411-0.5124512-1.5H21.5c0.276123,0,0.5-0.223877,0.5-0.5S21.776123,17,21.5,17z M6.6416016,5h14.2167969l-1.6816406,6.6738281C18.9780884,12.4567871,18.2716675,13.0037842,17.4638672,13H8.65625L6.6416016,5z M9.5,21C8.6715698,21,8,20.3284302,8,19.5S8.6715698,18,9.5,18s1.5,0.6715698,1.5,1.5C10.9990845,20.328064,10.328064,20.9990845,9.5,21z M17.5,21c-0.8284302,0-1.5-0.6715698-1.5-1.5s0.6715698-1.5,1.5-1.5s1.5,0.6715698,1.5,1.5C18.9990845,20.328064,18.328064,20.9990845,17.5,21z" />
                                    </svg>
                                    <span class="sidemenu-label">ECommerce</span>
                                    <i class="angle fe fe-chevron-right"></i>
                                </a>
                                <ul class="nav-sub">
                                    <li class="side-menu-label1"><a href="javascript:void(0);">ECommerce</a></li>
                                    <li class="nav-sub-item">
                                        <a class="nav-sub-link"
                                            href="https://laravel8.spruko.com/dashplex/ecommerce-dashboard">Dashboard</a>
                                    </li>
                                    <li class="nav-sub-item">
                                        <a class="nav-sub-link"
                                            href="https://laravel8.spruko.com/dashplex/ecommerce-products">Shop</a>
                                    </li>
                                    <li class="nav-sub-item">
                                        <a class="nav-sub-link"
                                            href="https://laravel8.spruko.com/dashplex/ecommerce-productdetails">Product
                                            Details</a>
                                    </li>
                                    <li class="nav-sub-item">
                                        <a class="nav-sub-link"
                                            href="https://laravel8.spruko.com/dashplex/ecommerce-addproduct">Add
                                            Product</a>
                                    </li>
                                    <li class="nav-sub-item">
                                        <a class="nav-sub-link"
                                            href="https://laravel8.spruko.com/dashplex/ecommerce-wishlist">Wishlist</a>
                                    </li>
                                    <li class="nav-sub-item">
                                        <a class="nav-sub-link"
                                            href="https://laravel8.spruko.com/dashplex/ecommerce-checkout">Checkout</a>
                                    </li>
                                    <li class="nav-sub-item">
                                        <a class="nav-sub-link"
                                            href="https://laravel8.spruko.com/dashplex/ecommerce-cart">Cart</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link with-sub" href="javascript:void(0);">
                                    <svg class="sidemenu-icon menu-icon" xmlns="http://www.w3.org/2000/svg"
                                        enable-background="new 0 0 24 24" viewBox="0 0 24 24">
                                        <path
                                            d="M19.5,7H18V6c-0.0018311-1.6561279-1.3438721-2.9981689-3-3H4.5C3.119812,3.0012817,2.0012817,4.119812,2,5.5V18c0.0018311,1.6561279,1.3438721,2.9981689,3,3h14.5c1.380188-0.0012817,2.4987183-1.119812,2.5-2.5v-9C21.9987183,8.119812,20.880188,7.0012817,19.5,7z M4.5,4H15c1.1040039,0.0014038,1.9985962,0.8959961,2,2v1H4.5C3.6715698,7,3,6.3284302,3,5.5S3.6715698,4,4.5,4z M21,16h-2c-1.1045532,0-2-0.8954468-2-2s0.8954468-2,2-2h2V16z M21,11h-2c-1.6568604,0-3,1.3431396-3,3s1.3431396,3,3,3h2v1.5c-0.0009155,0.828064-0.671936,1.4990845-1.5,1.5H5c-1.1040039-0.0014038-1.9985962-0.8959961-2-2V7.4990234C3.4321899,7.8247681,3.9588013,8.0006714,4.5,8h15c0.828064,0.0009155,1.4990845,0.671936,1.5,1.5V11z" />
                                    </svg>
                                    <span class="sidemenu-label">Crypto
                                        <span class="sidemenu-label2">Currencies</span>
                                    </span>
                                    <i class="angle fe fe-chevron-right"></i>
                                </a>
                                <ul class="nav-sub">
                                    <li class="side-menu-label1"><a href="javascript:void(0);">Crypto Currencies</a>
                                    </li>
                                    <li class="nav-sub-item">
                                        <a class="nav-sub-link"
                                            href="https://laravel8.spruko.com/dashplex/crypto-dashboard">Dashboard</a>
                                    </li>
                                    <li class="nav-sub-item">
                                        <a class="nav-sub-link"
                                            href="https://laravel8.spruko.com/dashplex/crypto-buysell">Buy & Sell</a>
                                    </li>
                                    <li class="nav-sub-item">
                                        <a class="nav-sub-link"
                                            href="https://laravel8.spruko.com/dashplex/crypto-market">Market Capital</a>
                                    </li>
                                    <li class="nav-sub-item">
                                        <a class="nav-sub-link"
                                            href="https://laravel8.spruko.com/dashplex/crypto-wallet">My Wallet</a>
                                    </li>
                                    <li class="nav-sub-item">
                                        <a class="nav-sub-link"
                                            href="https://laravel8.spruko.com/dashplex/crypto-currency-exchange">Currency
                                            exchange</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-header"><span class="nav-label">Components</span></li>
                            <li class="nav-item">
                                <a class="nav-link with-sub" href="javascript:void(0);">
                                    <svg class="sidemenu-icon menu-icon" xmlns="http://www.w3.org/2000/svg"
                                        enable-background="new 0 0 24 24" viewBox="0 0 24 24">
                                        <path
                                            d="M19,3H5C3.3431396,3,2,4.3431396,2,6c0,1.3043213,0.8374634,2.4030151,2,2.8162842V18.5c0.0012817,1.380188,1.119812,2.4987183,2.5,2.5h11c1.380188-0.0012817,2.4987183-1.119812,2.5-2.5V8.8162842C21.1625366,8.4030151,22,7.3043213,22,6C22,4.3431396,20.6568604,3,19,3z M19,18.5c-0.0009155,0.828064-0.671936,1.4990845-1.5,1.5h-11c-0.828064-0.0009155-1.4990845-0.671936-1.5-1.5V9h14V18.5z M19,8H5C3.8954468,8,3,7.1045532,3,6s0.8954468-2,2-2h14c1.1045532,0,2,0.8954468,2,2S20.1045532,8,19,8z M9.5,13h5c0.276123,0,0.5-0.223877,0.5-0.5S14.776123,12,14.5,12h-5C9.223877,12,9,12.223877,9,12.5S9.223877,13,9.5,13z" />
                                    </svg>
                                    <span class="sidemenu-label">Elements</span>
                                    <i class="angle fe fe-chevron-right"></i></a>
                                <ul class="nav-sub">
                                    <li class="side-menu-label1"><a href="javascript:void(0);">Elements</a></li>
                                    <li class="nav-sub-item">
                                        <a class="nav-sub-link"
                                            href="https://laravel8.spruko.com/dashplex/accordion">Accordion</a>
                                    </li>
                                    <li class="nav-sub-item">
                                        <a class="nav-sub-link"
                                            href="https://laravel8.spruko.com/dashplex/alerts">Alerts</a>
                                    </li>
                                    <li class="nav-sub-item">
                                        <a class="nav-sub-link"
                                            href="https://laravel8.spruko.com/dashplex/avatar">Avatar</a>
                                    </li>
                                    <li class="nav-sub-item">
                                        <a class="nav-sub-link"
                                            href="https://laravel8.spruko.com/dashplex/breadcrumbs">Breadcrumbs</a>
                                    </li>
                                    <li class="nav-sub-item">
                                        <a class="nav-sub-link"
                                            href="https://laravel8.spruko.com/dashplex/buttons">Buttons</a>
                                    </li>
                                    <li class="nav-sub-item">
                                        <a class="nav-sub-link"
                                            href="https://laravel8.spruko.com/dashplex/badge">Badge</a>
                                    </li>
                                    <li class="nav-sub-item">
                                        <a class="nav-sub-link"
                                            href="https://laravel8.spruko.com/dashplex/collapse">Collapse</a>
                                    </li>
                                    <li class="nav-sub-item">
                                        <a class="nav-sub-link"
                                            href="https://laravel8.spruko.com/dashplex/dropdown">Dropdown</a>
                                    </li>
                                    <li class="nav-sub-item">
                                        <a class="nav-sub-link"
                                            href="https://laravel8.spruko.com/dashplex/thumbnails">Thumbnails</a>
                                    </li>
                                    <li class="nav-sub-item">
                                        <a class="nav-sub-link"
                                            href="https://laravel8.spruko.com/dashplex/list-group">List Group</a>
                                    </li>
                                    <li class="nav-sub-item">
                                        <a class="nav-sub-link"
                                            href="https://laravel8.spruko.com/dashplex/modals">Modals</a>
                                    </li>
                                    <li class="nav-sub-item">
                                        <a class="nav-sub-link"
                                            href="https://laravel8.spruko.com/dashplex/navigation">Navigation</a>
                                    </li>
                                    <li class="nav-sub-item">
                                        <a class="nav-sub-link"
                                            href="https://laravel8.spruko.com/dashplex/pagination">Pagination</a>
                                    </li>
                                    <li class="nav-sub-item">
                                        <a class="nav-sub-link"
                                            href="https://laravel8.spruko.com/dashplex/popover">Popover</a>
                                    </li>
                                    <li class="nav-sub-item">
                                        <a class="nav-sub-link"
                                            href="https://laravel8.spruko.com/dashplex/progress">Progress</a>
                                    </li>
                                    <li class="nav-sub-item">
                                        <a class="nav-sub-link"
                                            href="https://laravel8.spruko.com/dashplex/spinners">Spinners</a>
                                    </li>
                                    <li class="nav-sub-item">
                                        <a class="nav-sub-link"
                                            href="https://laravel8.spruko.com/dashplex/media-object">Media Object</a>
                                    </li>
                                    <li class="nav-sub-item">
                                        <a class="nav-sub-link"
                                            href="https://laravel8.spruko.com/dashplex/typography">Typography</a>
                                    </li>
                                    <li class="nav-sub-item">
                                        <a class="nav-sub-link"
                                            href="https://laravel8.spruko.com/dashplex/tooltip">Tooltip</a>
                                    </li>
                                    <li class="nav-sub-item">
                                        <a class="nav-sub-link"
                                            href="https://laravel8.spruko.com/dashplex/toast">Toast</a>
                                    </li>
                                    <li class="nav-sub-item">
                                        <a class="nav-sub-link"
                                            href="https://laravel8.spruko.com/dashplex/tabs">Tabs</a>
                                    </li>
                                    <li class="nav-sub-item">
                                        <a class="nav-sub-link"
                                            href="https://laravel8.spruko.com/dashplex/tags">Tags</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link with-sub" href="javascript:void(0);">
                                    <svg class="sidemenu-icon menu-icon" xmlns="http://www.w3.org/2000/svg"
                                        enable-background="new 0 0 24 24" viewBox="0 0 24 24">
                                        <path
                                            d="M20.4896851,7.2872925c-0.0048828-0.0623169-0.0209351-0.1206665-0.0482178-0.177063c-0.0082397-0.0169678-0.0123291-0.0340576-0.0224609-0.0499878c-0.0391846-0.0621948-0.0886841-0.1184692-0.1553345-0.1598511l-8-4.9589844c-0.1616821-0.0996094-0.3656616-0.0996094-0.5273438,0l-8,4.9589844c-0.0136108,0.0084229-0.020813,0.0238647-0.0335083,0.0335083C3.6665649,6.9614258,3.6358643,6.9922485,3.6083374,7.0285034C3.5986328,7.0412598,3.5831909,7.0485229,3.574707,7.0621948c-0.006958,0.0112915-0.0072632,0.024231-0.0132446,0.0358276C3.5462036,7.1271973,3.5366821,7.1576538,3.5274048,7.1898193c-0.0094604,0.0332031-0.0176392,0.0651245-0.0200195,0.098938C3.5064087,7.3014526,3.5,7.3122559,3.5,7.3251953v9.3496094c-0.000061,0.1729736,0.0893555,0.3336182,0.2363281,0.4248047l8,4.9589844c0.0036011,0.0022583,0.0083618,0.0012817,0.0120239,0.003418c0.00354,0.0020752,0.0048828,0.0062866,0.0084839,0.0083008C11.8309937,22.1121826,11.9147949,22.1340332,12,22.1337891c0.0852051,0.0002441,0.1690063-0.0216064,0.2431641-0.0634766c0.0036011-0.0020142,0.0049438-0.0062256,0.0084839-0.0083008c0.0036621-0.0021362,0.0084229-0.0011597,0.0120239-0.003418l8-4.9589844c0.1468506-0.0913086,0.2362061-0.2518921,0.2363281-0.4248047V7.3251953C20.5,7.3116455,20.4907837,7.3006592,20.4896851,7.2872925z M11.5,20.7353516l-7-4.3388672V8.2236328l7,4.3378906V20.7353516z M12,11.6953125l-0.4055176-0.2513428L4.9492188,7.3251953L12,2.9541016l7.0507812,4.3710938l-5.1820679,3.211853L12,11.6953125z M19.5,16.3964844l-7,4.3388672v-8.1738281l7-4.3378906V16.3964844z" />
                                    </svg>
                                    <span class="sidemenu-label">AdvancedUI</span>
                                    <i class="angle fe fe-chevron-right"></i></a>
                                <ul class="nav-sub">
                                    <li class="side-menu-label1"><a href="javascript:void(0);">Advanced UI</a></li>
                                    <li class="nav-sub-item">
                                        <a class="nav-sub-link"
                                            href="https://laravel8.spruko.com/dashplex/chat">Chat</a>
                                    </li>
                                    <li class="nav-sub-item">
                                        <a class="nav-sub-link"
                                            href="https://laravel8.spruko.com/dashplex/cards">Cards</a>
                                    </li>
                                    <li class="nav-sub-item">
                                        <a class="nav-sub-link"
                                            href="https://laravel8.spruko.com/dashplex/calendar">Calendar</a>
                                    </li>
                                    <li class="nav-sub-item">
                                        <a class="nav-sub-link"
                                            href="https://laravel8.spruko.com/dashplex/contacts">Contacts</a>
                                    </li>
                                    <li class="nav-sub-item">
                                        <a class="nav-sub-link"
                                            href="https://laravel8.spruko.com/dashplex/carousel">Carousel</a>
                                    </li>
                                    <li class="nav-sub-item">
                                        <a class="nav-sub-link"
                                            href="https://laravel8.spruko.com/dashplex/notifications">Notifications</a>
                                    </li>
                                    <li class="nav-sub-item">
                                        <a class="nav-sub-link"
                                            href="https://laravel8.spruko.com/dashplex/treeview">Treeview</a>
                                    </li>
                                    <li class="nav-sub-item">
                                        <a class="nav-sub-link"
                                            href="https://laravel8.spruko.com/dashplex/timeline">Timeline</a>
                                    </li>
                                    <li class="nav-sub-item">
                                        <a class="nav-sub-link"
                                            href="https://laravel8.spruko.com/dashplex/draggablecards">Draggable-Cards</a>
                                    </li>
                                    <li class="nav-sub-item">
                                        <a class="nav-sub-link"
                                            href="https://laravel8.spruko.com/dashplex/sweet-alert">Sweet Alert</a>
                                    </li>
                                    <li class="nav-sub-item">
                                        <a class="nav-sub-link"
                                            href="https://laravel8.spruko.com/dashplex/rating">Ratings</a>
                                    </li>
                                    <li class="nav-sub-item">
                                        <a class="nav-sub-link"
                                            href="https://laravel8.spruko.com/dashplex/search">Search</a>
                                    </li>
                                    <li class="nav-sub-item">
                                        <a class="nav-sub-link"
                                            href="https://laravel8.spruko.com/dashplex/userlist">Userlist</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-header"><span class="nav-label">Applications</span></li>
                            <li class="nav-item submenu-style">
                                <a class="nav-link with-sub" href="javascript:void(0);">
                                    <svg class="sidemenu-icon menu-icon" xmlns="http://www.w3.org/2000/svg"
                                        enable-background="new 0 0 24 24" viewBox="0 0 24 24">
                                        <path
                                            d="M21.5,13h-8.0005493C13.2234497,13.0001831,12.9998169,13.223999,13,13.5v8.0005493C13.0001831,21.7765503,13.223999,22.0001831,13.5,22h8.0006104C21.7765503,21.9998169,22.0001831,21.776001,22,21.5v-8.0006104C21.9998169,13.2234497,21.776001,12.9998169,21.5,13z M21,21h-7v-7h7V21z M10.5,2H2.4993896C2.2234497,2.0001831,1.9998169,2.223999,2,2.5v8.0005493C2.0001831,10.7765503,2.223999,11.0001831,2.5,11h8.0006104C10.7765503,10.9998169,11.0001831,10.776001,11,10.5V2.4993896C10.9998169,2.2234497,10.776001,1.9998169,10.5,2z M10,10H3V3h7V10z M10.5,13H2.4993896C2.2234497,13.0001831,1.9998169,13.223999,2,13.5v8.0005493C2.0001831,21.7765503,2.223999,22.0001831,2.5,22h8.0006104C10.7765503,21.9998169,11.0001831,21.776001,11,21.5v-8.0006104C10.9998169,13.2234497,10.776001,12.9998169,10.5,13z M10,21H3v-7h7V21z M21.5,2h-8.0005493C13.2234497,2.0001831,12.9998169,2.223999,13,2.5v8.0005493C13.0001831,10.7765503,13.223999,11.0001831,13.5,11h8.0006104C21.7765503,10.9998169,22.0001831,10.776001,22,10.5V2.4993896C21.9998169,2.2234497,21.776001,1.9998169,21.5,2z M21,10h-7V3h7V10z" />
                                    </svg>
                                    <span class="sidemenu-label">Apps</span>
                                    <span class="badge bg-success side-badge">2</span>
                                </a>
                                <ul class="nav-sub">
                                    <li class="side-menu-label1"><a href="javascript:void(0);">Apps</a></li>
                                    <li class="nav-sub-item">
                                        <a class="nav-sub-link"
                                            href="https://laravel8.spruko.com/dashplex/widgets">Widgets</a>
                                    </li>
                                    <li class="nav-sub-item">
                                        <a class="nav-sub-link sub-with-sub" href="javascript:void(0);">
                                            <span class="sidemenu-label">Mail</span>
                                            <i class="angle fe fe-chevron-right"></i>
                                        </a>
                                        <ul class="sub-nav-sub">
                                            <li class="nav-sub-item">
                                                <a class="nav-sub-link"
                                                    href="https://laravel8.spruko.com/dashplex/mail-inbox">Mail-Inbox</a>
                                            </li>
                                            <li class="nav-sub-item">
                                                <a class="nav-sub-link"
                                                    href="https://laravel8.spruko.com/dashplex/viewmail">View-Mail</a>
                                            </li>
                                            <li class="nav-sub-item">
                                                <a class="nav-sub-link"
                                                    href="https://laravel8.spruko.com/dashplex/mail-compose">Mail-Compose</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="nav-sub-item">
                                        <a class="nav-sub-link sub-with-sub" href="javascript:void(0);">
                                            <span class="sidemenu-label">Maps</span>
                                            <i class="angle fe fe-chevron-right"></i>
                                        </a>
                                        <ul class="sub-nav-sub">
                                            <li class="nav-sub-item">
                                                <a class="nav-sub-link"
                                                    href="https://laravel8.spruko.com/dashplex/map-mapel">Mapel Maps</a>
                                            </li>
                                            <li class="nav-sub-item">
                                                <a class="nav-sub-link"
                                                    href="https://laravel8.spruko.com/dashplex/map-vector">Vector
                                                    Maps</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="nav-sub-item">
                                        <a class="nav-sub-link sub-with-sub" href="javascript:void(0);">
                                            <span class="sidemenu-label">Blog</span>
                                            <i class="angle fe fe-chevron-right"></i>
                                        </a>
                                        <ul class="sub-nav-sub">
                                            <li class="nav-sub-item">
                                                <a class="nav-sub-link"
                                                    href="https://laravel8.spruko.com/dashplex/blog">Blog Page</a>
                                            </li>
                                            <li class="nav-sub-item">
                                                <a class="nav-sub-link"
                                                    href="https://laravel8.spruko.com/dashplex/blog-details">Blog
                                                    Details</a>
                                            </li>
                                            <li class="nav-sub-item">
                                                <a class="nav-sub-link"
                                                    href="https://laravel8.spruko.com/dashplex/blog-post">Blog Post</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="nav-sub-item">
                                        <a class="nav-sub-link sub-with-sub" href="javascript:void(0);">
                                            <span class="sidemenu-label">File Manager</span>
                                            <i class="angle fe fe-chevron-right"></i>
                                        </a>
                                        <ul class="sub-nav-sub">
                                            <li class="nav-sub-item">
                                                <a class="nav-sub-link"
                                                    href="https://laravel8.spruko.com/dashplex/filemanager">File
                                                    Manager</a>
                                            </li>
                                            <li class="nav-sub-item">
                                                <a class="nav-sub-link"
                                                    href="https://laravel8.spruko.com/dashplex/filemanager-list">File
                                                    Manager List</a>
                                            </li>
                                            <li class="nav-sub-item">
                                                <a class="nav-sub-link"
                                                    href="https://laravel8.spruko.com/dashplex/file-details">File
                                                    Details</a>
                                            </li>
                                            <li class="nav-sub-item">
                                                <a class="nav-sub-link"
                                                    href="https://laravel8.spruko.com/dashplex/file-attachments">File
                                                    Attachments</a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-header"><span class="nav-label">Tables & Icons</span></li>
                            <li class="nav-item">
                                <a class="nav-link with-sub" href="javascript:void(0);">
                                    <svg class="sidemenu-icon menu-icon" xmlns="http://www.w3.org/2000/svg"
                                        enable-background="new 0 0 24 24" viewBox="0 0 24 24">
                                        <path
                                            d="M21.5,2H2.4993896C2.2234497,2.0001831,1.9998169,2.223999,2,2.5v19.0005493C2.0001831,21.7765503,2.223999,22.0001831,2.5,22h19.0006104C21.7765503,21.9998169,22.0001831,21.776001,22,21.5V2.4993896C21.9998169,2.2234497,21.776001,1.9998169,21.5,2z M8.5,21H3v-5.5h5.5V21z M8.5,14.5H3v-5h5.5V14.5z M8.5,8.5H3V3h5.5V8.5z M14.5,21h-5v-5.5h5V21z M14.5,14.5h-5v-5h5V14.5z M14.5,8.5h-5V3h5V8.5z M21,21h-5.5v-5.5H21V21z M21,14.5h-5.5v-5H21V14.5z M21,8.5h-5.5V3H21V8.5z" />
                                    </svg>
                                    <span class="sidemenu-label">Tables</span>
                                    <i class="angle fe fe-chevron-right"></i>
                                </a>
                                <ul class="nav-sub">
                                    <li class="side-menu-label1"><a href="javascript:void(0);">Tables</a></li>
                                    <li class="nav-sub-item">
                                        <a class="nav-sub-link"
                                            href="https://laravel8.spruko.com/dashplex/table-basic">Basic Tables</a>
                                    </li>
                                    <li class="nav-sub-item">
                                        <a class="nav-sub-link"
                                            href="https://laravel8.spruko.com/dashplex/table-data">Data Tables</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link with-sub" href="javascript:void(0);">
                                    <svg class="sidemenu-icon menu-icon" xmlns="http://www.w3.org/2000/svg"
                                        enable-background="new 0 0 24 24" viewBox="0 0 24 24">
                                        <path
                                            d="M15,13.5H8.9994507C8.7234497,13.5001831,8.4998169,13.723999,8.5,14c0.0023193,1.9320068,1.5679932,3.4976807,3.5,3.5c1.9320068-0.0023193,3.4976807-1.5679932,3.5-3.5v-0.0006104C15.4998169,13.7234497,15.276001,13.4998169,15,13.5z M12.5008545,16.4493408C11.147644,16.7259521,9.826416,15.8532104,9.5498047,14.5h4.9003906C14.2495728,15.4815674,13.4824219,16.2486572,12.5008545,16.4493408z M10.5,10c0-0.8284302-0.6715698-1.5-1.5-1.5S7.5,9.1715698,7.5,10s0.6715698,1.5,1.5,1.5C9.828064,11.4990845,10.4990845,10.828064,10.5,10z M8.5,10c0-0.276123,0.223877-0.5,0.5-0.5C9.2759399,9.5005493,9.4994507,9.7240601,9.5,10c0,0.276123-0.223877,0.5-0.5,0.5S8.5,10.276123,8.5,10z M15,8.5c-0.8284302,0-1.5,0.6715698-1.5,1.5s0.6715698,1.5,1.5,1.5c0.828064-0.0009155,1.4990845-0.671936,1.5-1.5C16.5,9.1715698,15.8284302,8.5,15,8.5z M15,10.5c-0.276123,0-0.5-0.223877-0.5-0.5s0.223877-0.5,0.5-0.5c0.2759399,0.0005493,0.4994507,0.2240601,0.5,0.5C15.5,10.276123,15.276123,10.5,15,10.5z M12,2C6.4771729,2,2,6.4771729,2,12s4.4771729,10,10,10c5.5201416-0.0064697,9.9935303-4.4798584,10-10C22,6.4771729,17.5228271,2,12,2z M12,21c-4.9705811,0-9-4.0294189-9-9s4.0294189-9,9-9c4.9683228,0.0054321,8.9945679,4.0316772,9,9C21,16.9705811,16.9705811,21,12,21z" />
                                    </svg>
                                    <span class="sidemenu-label">Icons</span>
                                    <i class="angle fe fe-chevron-right"></i>
                                </a>
                                <ul class="nav-sub">
                                    <li class="side-menu-label1"><a href="javascript:void(0);">Icons</a></li>
                                    <li class="nav-sub-item">
                                        <a class="nav-sub-link" href="https://laravel8.spruko.com/dashplex/icons">Font
                                            Awesome</a>
                                    </li>
                                    <li class="nav-sub-item">
                                        <a class="nav-sub-link"
                                            href="https://laravel8.spruko.com/dashplex/icons2">Material Design Icons</a>
                                    </li>
                                    <li class="nav-sub-item">
                                        <a class="nav-sub-link"
                                            href="https://laravel8.spruko.com/dashplex/icons3">Simple Line Icons</a>
                                    </li>
                                    <li class="nav-sub-item">
                                        <a class="nav-sub-link"
                                            href="https://laravel8.spruko.com/dashplex/icons4">Feather Icons</a>
                                    </li>
                                    <li class="nav-sub-item">
                                        <a class="nav-sub-link" href="https://laravel8.spruko.com/dashplex/icons5">Ionic
                                            Icons</a>
                                    </li>
                                    <li class="nav-sub-item">
                                        <a class="nav-sub-link" href="https://laravel8.spruko.com/dashplex/icons6">Flag
                                            Icons</a>
                                    </li>
                                    <li class="nav-sub-item">
                                        <a class="nav-sub-link" href="https://laravel8.spruko.com/dashplex/icons7">Pe7
                                            Icons</a>
                                    </li>
                                    <li class="nav-sub-item">
                                        <a class="nav-sub-link"
                                            href="https://laravel8.spruko.com/dashplex/icons8">Themify Icons</a>
                                    </li>
                                    <li class="nav-sub-item">
                                        <a class="nav-sub-link"
                                            href="https://laravel8.spruko.com/dashplex/icons9">Typicons Icons</a>
                                    </li>
                                    <li class="nav-sub-item">
                                        <a class="nav-sub-link"
                                            href="https://laravel8.spruko.com/dashplex/icons10">Weather Icons</a>
                                    </li>
                                    <li class="nav-sub-item">
                                        <a class="nav-sub-link"
                                            href="https://laravel8.spruko.com/dashplex/icons11">Material Icons</a>
                                    </li>
                                    <li class="nav-sub-item">
                                        <a class="nav-sub-link"
                                            href="https://laravel8.spruko.com/dashplex/icons12">Bootstrap Icons</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-header"><span class="nav-label">Forms & Charts</span></li>
                            <li class="nav-item">
                                <a class="nav-link with-sub" href="javascript:void(0);">
                                    <svg class="sidemenu-icon menu-icon" xmlns="http://www.w3.org/2000/svg"
                                        enable-background="new 0 0 24 24" viewBox="0 0 24 24">
                                        <path
                                            d="M6.5,11h5c0.276123,0,0.5-0.223877,0.5-0.5S11.776123,10,11.5,10h-5C6.223877,10,6,10.223877,6,10.5S6.223877,11,6.5,11z M6,14.5C6,14.776123,6.223877,15,6.5,15h11c0.276123,0,0.5-0.223877,0.5-0.5S17.776123,14,17.5,14h-11C6.223877,14,6,14.223877,6,14.5z M21.8535156,10.1464844l-6-6C15.7597656,4.0526733,15.6326294,4,15.5,4H5C3.3438721,4.0018311,2.0018311,5.3438721,2,7v10c0.0018311,1.6561279,1.3438721,2.9981689,3,3h14c1.6561279-0.0018311,2.9981689-1.3438721,3-3v-6.5C22,10.3673706,21.9473267,10.2402344,21.8535156,10.1464844z M16,5.7069702L20.2930298,10h-2.960022C16.5970459,9.9993896,16.0006104,9.4029541,16,8.6669922V5.7069702z M21,17c-0.0014038,1.1040039-0.8959961,1.9985962-2,2H5c-1.1040039-0.0014038-1.9985962-0.8959961-2-2V7c0.0014038-1.1040039,0.8959961-1.9985962,2-2h10v3.6669922C15.0016479,9.9547729,16.0452271,10.9983521,17.3330078,11H21V17z" />
                                    </svg>
                                    <span class="sidemenu-label">Forms</span>
                                    <span class="badge bg-secondary side-badge">6</span>
                                </a>
                                <ul class="nav-sub">
                                    <li class="side-menu-label1"><a href="javascript:void(0);">Forms</a></li>
                                    <li class="nav-sub-item">
                                        <a class="nav-sub-link"
                                            href="https://laravel8.spruko.com/dashplex/form-elements">Form Elements</a>
                                    </li>
                                    <li class="nav-sub-item">
                                        <a class="nav-sub-link"
                                            href="https://laravel8.spruko.com/dashplex/form-advanced">Advanced Forms</a>
                                    </li>
                                    <li class="nav-sub-item">
                                        <a class="nav-sub-link"
                                            href="https://laravel8.spruko.com/dashplex/form-layouts">Form Layouts</a>
                                    </li>
                                    <li class="nav-sub-item">
                                        <a class="nav-sub-link"
                                            href="https://laravel8.spruko.com/dashplex/form-sizes">Form Element
                                            Sizes</a>
                                    </li>
                                    <li class="nav-sub-item">
                                        <a class="nav-sub-link"
                                            href="https://laravel8.spruko.com/dashplex/form-validation">Form
                                            Validation</a>
                                    </li>
                                    <li class="nav-sub-item">
                                        <a class="nav-sub-link"
                                            href="https://laravel8.spruko.com/dashplex/form-wizards">Form Wizards</a>
                                    </li>
                                    <li class="nav-sub-item">
                                        <a class="nav-sub-link"
                                            href="https://laravel8.spruko.com/dashplex/form-editor">Form Editor</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link with-sub" href="javascript:void(0);">
                                    <svg class="sidemenu-icon menu-icon" xmlns="http://www.w3.org/2000/svg"
                                        enable-background="new 0 0 24 24" viewBox="0 0 24 24">
                                        <path
                                            d="M9.5,2C9.223877,2,9,2.223877,9,2.5v19c0,0.0001831,0,0.0003662,0,0.0005493C9.0001831,21.7765503,9.223999,22.0001831,9.5,22c0.0001831,0,0.0003662,0,0.0006104,0C9.7765503,21.9998169,10.0001831,21.776001,10,21.5v-19C10,2.223877,9.776123,2,9.5,2z M4.5,12C4.223877,12,4,12.223877,4,12.5v9c0,0.0001831,0,0.0003662,0,0.0005493C4.0001831,21.7765503,4.223999,22.0001831,4.5,22c0.0001831,0,0.0003662,0,0.0006104,0C4.7765503,21.9998169,5.0001831,21.776001,5,21.5v-9C5,12.223877,4.776123,12,4.5,12z M19.5,16c-0.276123,0-0.5,0.223877-0.5,0.5v5c0,0.0001831,0,0.0003662,0,0.0005493C19.0001831,21.7765503,19.223999,22.0001831,19.5,22c0.0001831,0,0.0003662,0,0.0006104,0C19.7765503,21.9998169,20.0001831,21.776001,20,21.5v-5C20,16.223877,19.776123,16,19.5,16z M14.5,8C14.223877,8,14,8.223877,14,8.5v13c0,0.0001831,0,0.0003662,0,0.0005493C14.0001831,21.7765503,14.223999,22.0001831,14.5,22c0.0001831,0,0.0003662,0,0.0006104,0C14.7765503,21.9998169,15.0001831,21.776001,15,21.5v-13C15,8.223877,14.776123,8,14.5,8z" />
                                    </svg>
                                    <span class="sidemenu-label">Charts</span>
                                    <span class="badge bg-warning side-badge">3</span>
                                </a>
                                <ul class="nav-sub">
                                    <li class="side-menu-label1"><a href="javascript:void(0);">Charts</a></li>
                                    <li class="nav-sub-item">
                                        <a class="nav-sub-link"
                                            href="https://laravel8.spruko.com/dashplex/chart-morris">Morris Charts</a>
                                    </li>
                                    <li class="nav-sub-item">
                                        <a class="nav-sub-link"
                                            href="https://laravel8.spruko.com/dashplex/chart-flot">Flot Charts</a>
                                    </li>
                                    <li class="nav-sub-item">
                                        <a class="nav-sub-link"
                                            href="https://laravel8.spruko.com/dashplex/chart-chartjs">ChartJS</a>
                                    </li>
                                    <li class="nav-sub-item">
                                        <a class="nav-sub-link"
                                            href="https://laravel8.spruko.com/dashplex/chart-sparkpeity">Sparkline &
                                            Peity</a>
                                    </li>
                                    <li class="nav-sub-item">
                                        <a class="nav-sub-link"
                                            href="https://laravel8.spruko.com/dashplex/chart-echart">Echart</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-header"><span class="nav-label">Other Pages</span></li>
                            <li class="nav-item submenu-style">
                                <a class="nav-link with-sub" href="javascript:void(0);">
                                    <svg class="sidemenu-icon menu-icon" xmlns="http://www.w3.org/2000/svg"
                                        enable-background="new 0 0 24 24" viewBox="0 0 24 24">
                                        <path
                                            d="M2.2,10.4l9.5,5.5c0.1,0,0.2,0.1,0.3,0.1s0.2,0,0.3-0.1l9.5-5.5c0.1,0,0.1-0.1,0.2-0.2c0.1-0.2,0.1-0.5-0.2-0.7l-9.5-5.5c-0.2-0.1-0.3-0.1-0.5,0L2.2,9.6c-0.1,0-0.1,0.1-0.2,0.2C1.9,10,2,10.3,2.2,10.4z M12,5.1l8.5,4.9L12,14.9L3.5,10L12,5.1z M21.2,13.6L12,18.9l-9.2-5.4c-0.2-0.1-0.5-0.1-0.7,0.2C1.9,14,2,14.3,2.2,14.4l9.5,5.5c0.1,0,0.2,0.1,0.3,0.1s0.2,0,0.3-0.1l9.5-5.5c0.2-0.1,0.3-0.4,0.2-0.7C21.8,13.5,21.5,13.4,21.2,13.6z" />
                                    </svg>
                                    <span class="sidemenu-label ">Pages</span>
                                    <i class="angle fe fe-chevron-right"></i>
                                </a>
                                <ul class="nav-sub">
                                    <li class="side-menu-label1"><a href="javascript:void(0);">Pages</a></li>
                                    <li class="nav-sub-item">
                                        <a class="nav-sub-link sub-with-sub" href="javascript:void(0);">
                                            <span class="sidemenu-label">Authentication</span>
                                            <i class="angle fe fe-chevron-right"></i>
                                        </a>
                                        <ul class="sub-nav-sub">
                                            <li class="nav-sub-item">
                                                <a class="nav-sub-link"
                                                    href="https://laravel8.spruko.com/dashplex/signin">Sign In</a>
                                            </li>
                                            <li class="nav-sub-item">
                                                <a class="nav-sub-link"
                                                    href="https://laravel8.spruko.com/dashplex/signup">Sign Up</a>
                                            </li>
                                            <li class="nav-sub-item">
                                                <a class="nav-sub-link"
                                                    href="https://laravel8.spruko.com/dashplex/forgot">Forgot
                                                    Password</a>
                                            </li>
                                            <li class="nav-sub-item">
                                                <a class="nav-sub-link"
                                                    href="https://laravel8.spruko.com/dashplex/reset">Reset Password</a>
                                            </li>
                                            <li class="nav-sub-item">
                                                <a class="nav-sub-link"
                                                    href="https://laravel8.spruko.com/dashplex/lockscreen">Lockscreen</a>
                                            </li>
                                            <li class="nav-sub-item">
                                                <a class="nav-sub-link"
                                                    href="https://laravel8.spruko.com/dashplex/underconstruction">UnderConstruction</a>
                                            </li>
                                            <li class="nav-sub-item">
                                                <a class="nav-sub-link"
                                                    href="https://laravel8.spruko.com/dashplex/error404">404 Error</a>
                                            </li>
                                            <li class="nav-sub-item">
                                                <a class="nav-sub-link"
                                                    href="https://laravel8.spruko.com/dashplex/error500">500 Error</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="nav-sub-item">
                                        <a class="nav-sub-link"
                                            href="https://laravel8.spruko.com/dashplex/profile">Profile</a>
                                    </li>
                                    <li class="nav-sub-item">
                                        <a class="nav-sub-link"
                                            href="https://laravel8.spruko.com/dashplex/notifications-list">Notifications
                                            List</a>
                                    </li>
                                    <li class="nav-sub-item">
                                        <a class="nav-sub-link"
                                            href="https://laravel8.spruko.com/dashplex/aboutus">About Us</a>
                                    </li>
                                    <li class="nav-sub-item">
                                        <a class="nav-sub-link"
                                            href="https://laravel8.spruko.com/dashplex/settings">Settings</a>
                                    </li>
                                    <li class="nav-sub-item">
                                        <a class="nav-sub-link"
                                            href="https://laravel8.spruko.com/dashplex/invoice">Invoice</a>
                                    </li>
                                    <li class="nav-sub-item">
                                        <a class="nav-sub-link"
                                            href="https://laravel8.spruko.com/dashplex/pricing">Pricing</a>
                                    </li>
                                    <li class="nav-sub-item">
                                        <a class="nav-sub-link"
                                            href="https://laravel8.spruko.com/dashplex/gallery">Gallery</a>
                                    </li>
                                    <li class="nav-sub-item">
                                        <a class="nav-sub-link" href="https://laravel8.spruko.com/dashplex/faq">Faqs</a>
                                    </li>
                                    <li class="nav-sub-item">
                                        <a class="nav-sub-link"
                                            href="https://laravel8.spruko.com/dashplex/success-message">Success
                                            Message</a>
                                    </li>
                                    <li class="nav-sub-item">
                                        <a class="nav-sub-link"
                                            href="https://laravel8.spruko.com/dashplex/danger-message">Danger
                                            Message</a>
                                    </li>
                                    <li class="nav-sub-item">
                                        <a class="nav-sub-link"
                                            href="https://laravel8.spruko.com/dashplex/warning-message">Warning
                                            Message</a>
                                    </li>
                                    <li class="nav-sub-item">
                                        <a class="nav-sub-link"
                                            href="https://laravel8.spruko.com/dashplex/emptypage">Empty Page</a>
                                    </li>
                                    <li class="nav-sub-item">
                                        <a class="nav-sub-link"
                                            href="https://laravel8.spruko.com/dashplex/switcher">Switcher Page</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item submenu-style">
                                <a class="nav-link with-sub" href="javascript:void(0);">
                                    <svg class="sidemenu-icon menu-icon" xmlns="http://www.w3.org/2000/svg"
                                        enable-background="new 0 0 24 24" viewBox="0 0 24 24">
                                        <path
                                            d="M3.5,12C3.223877,12,3,12.223877,3,12.5S3.223877,13,3.5,13S4,12.776123,4,12.5S3.776123,12,3.5,12z M6.5,8h15C21.776123,8,22,7.776123,22,7.5S21.776123,7,21.5,7h-15C6.223877,7,6,7.223877,6,7.5S6.223877,8,6.5,8z M3.5,17C3.223877,17,3,17.223877,3,17.5S3.223877,18,3.5,18S4,17.776123,4,17.5S3.776123,17,3.5,17z M21.5,12h-15C6.223877,12,6,12.223877,6,12.5S6.223877,13,6.5,13h15c0.276123,0,0.5-0.223877,0.5-0.5S21.776123,12,21.5,12z M3.5,7C3.223877,7,3,7.223877,3,7.5S3.223877,8,3.5,8S4,7.776123,4,7.5S3.776123,7,3.5,7z M21.5,17h-15C6.223877,17,6,17.223877,6,17.5S6.223877,18,6.5,18h15c0.276123,0,0.5-0.223877,0.5-0.5S21.776123,17,21.5,17z" />
                                    </svg>
                                    <span class="sidemenu-label">Submenu</span>
                                    <i class="angle fe fe-chevron-right"></i>
                                </a>
                                <ul class="nav-sub">
                                    <li class="side-menu-label1"><a href="javascript:void(0);">Submenu</a></li>
                                    <li class="nav-sub-item">
                                        <a class="nav-sub-link" href="javascript:void(0);">Level-1</a>
                                    </li>
                                    <li class="nav-sub-item">
                                        <a class="nav-sub-link sub-with-sub" href="javascript:void(0);">
                                            <span class="sidemenu-label">Level-2</span>
                                            <i class="angle fe fe-chevron-right"></i>
                                        </a>
                                        <ul class="sub-nav-sub">
                                            <li class="nav-sub-item">
                                                <a class="nav-sub-link" href="javascript:void(0);">Level-2.1</a>
                                            </li>
                                            <li class="nav-sub-item">
                                                <a class="nav-sub-link sub-with-sub" href="javascript:void(0);">
                                                    <span class="sidemenu-label">Level-2.2</span>
                                                    <i class="angle fe fe-chevron-right"></i></a>
                                                <ul class="sub-nav-sub">
                                                    <li class="nav-sub-item">
                                                        <a class="nav-sub-link"
                                                            href="javascript:void(0);">Level-2.2.1</a>
                                                    </li>
                                                    <li class="nav-sub-item">
                                                        <a class="nav-sub-link"
                                                            href="javascript:void(0);">Level-2.2.2</a>
                                                    </li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link with-sub" href="javascript:void(0);">
                                    <svg class="sidemenu-icon menu-icon" xmlns="http://www.w3.org/2000/svg"
                                        enable-background="new 0 0 24 24" viewBox="0 0 24 24">
                                        <path
                                            d="M19.9894409,3.753418c-0.0565796-0.2703857-0.3215942-0.4437256-0.59198-0.387207c-2.4692383,0.5215454-5.0441284-0.0050659-7.1103516-1.4541016c-0.1722412-0.1210938-0.4019775-0.1210938-0.5742188,0C9.6466064,3.361084,7.0717773,3.8876343,4.6025391,3.3662109C4.5689697,3.3591919,4.53479,3.3556519,4.5004883,3.3556519C4.2242432,3.3554688,4.0001831,3.5792236,4,3.8554688v8.0185547c0.0016479,2.9362183,1.4152222,5.6925659,3.7988281,7.4072266l3.9101562,2.8037109C11.7937622,22.1459961,11.8955688,22.178833,12,22.1787109c0.1044312,0.0001221,0.2062378-0.0326538,0.2910156-0.093689l3.9101562-2.803772C18.5847778,17.5665894,19.9983521,14.8102417,20,11.8740234V3.8554688C20,3.821167,19.99646,3.7869873,19.9894409,3.753418z M19,11.8740234c-0.0010986,2.6139526-1.2591553,5.0679321-3.3808594,6.5947266L12,21.0634766L8.3808594,18.46875C6.2591553,16.9418945,5.0010986,14.4879761,5,11.8740234V4.453125c2.4417725,0.3648682,4.9324951-0.1789551,7-1.5283203c2.067627,1.348999,4.5582275,1.8928223,7,1.5283203V11.8740234z" />
                                    </svg>
                                    <span class="sidemenu-label">Utilities</span>
                                    <i class="angle fe fe-chevron-right"></i>
                                </a>
                                <ul class="nav-sub">
                                    <li class="side-menu-label1"><a href="javascript:void(0);">Utilities</a></li>
                                    <li class="nav-sub-item">
                                        <a class="nav-sub-link"
                                            href="https://laravel8.spruko.com/dashplex/background">Background</a>
                                    </li>
                                    <li class="nav-sub-item">
                                        <a class="nav-sub-link"
                                            href="https://laravel8.spruko.com/dashplex/border">Border</a>
                                    </li>
                                    <li class="nav-sub-item">
                                        <a class="nav-sub-link"
                                            href="https://laravel8.spruko.com/dashplex/display">Display</a>
                                    </li>
                                    <li class="nav-sub-item">
                                        <a class="nav-sub-link"
                                            href="https://laravel8.spruko.com/dashplex/flex">Flex</a>
                                    </li>
                                    <li class="nav-sub-item">
                                        <a class="nav-sub-link"
                                            href="https://laravel8.spruko.com/dashplex/height">Height</a>
                                    </li>
                                    <li class="nav-sub-item">
                                        <a class="nav-sub-link"
                                            href="https://laravel8.spruko.com/dashplex/margin">Margin</a>
                                    </li>
                                    <li class="nav-sub-item">
                                        <a class="nav-sub-link"
                                            href="https://laravel8.spruko.com/dashplex/padding">Padding</a>
                                    </li>
                                    <li class="nav-sub-item">
                                        <a class="nav-sub-link"
                                            href="https://laravel8.spruko.com/dashplex/position">Position</a>
                                    </li>
                                    <li class="nav-sub-item">
                                        <a class="nav-sub-link"
                                            href="https://laravel8.spruko.com/dashplex/width">Width</a>
                                    </li>
                                    <li class="nav-sub-item">
                                        <a class="nav-sub-link"
                                            href="https://laravel8.spruko.com/dashplex/extras">Extras</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                        <div class="slide-right" id="slide-right"><svg xmlns="http://www.w3.org/2000/svg" fill="#c9bebe"
                                width="24" height="24" viewBox="0 0 24 24">
                                <path d="M10.707 17.707 16.414 12l-5.707-5.707-1.414 1.414L13.586 12l-4.293 4.293z" />
                            </svg></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END MAIN-SIDEBAR -->

        <!-- MAIN-CONTENT -->
        <div class="main-content side-content pt-0">
            <div class="main-container container-fluid">
                <div class="inner-body">

                    <!-- PAGE HEADER -->
                    <div class="page-header">
                        <div>
                            <ol class="breadcrumb">
                                @php
                                if(isset($main_menu)){ @endphp
                                <li class="breadcrumb-item"><a href="javascript:;">{{$main_menu->$lang}}</a></li>
                                <li class="breadcrumb-item active" aria-current="page">
                                    {{isset($sub_menu)?$sub_menu->$lang:""}}
                                </li>
                                @php }else{ @endphp
                                <li class="breadcrumb-item active" aria-current="page">
                                    {{isset($sub_menu)?$sub_menu->$lang:""}}
                                </li>
                                @php } @endphp
                            </ol>
                        </div>
                    </div>
                    <!-- END PAGE HEADER -->

                    <!-- ROW -->
                    <div class="row row-sm">
                        <div class="col-lg-12 col-md-12">
                            <div class="card custom-card">
                                <div class="card-body">
                                    @yield('content')
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- END ROW -->
                </div>
            </div>
        </div>
        <!-- END MAIN-CONTENT -->

        <!-- MAIN-FOOTER -->
        <div class="main-footer text-center">
            <div class="container">
                <div class="row row-sm">
                    <div class="col-md-12">
                        <span>Copyright © 2022 <a href="javascript:void(0);">Dashplex</a>. Designed with <span
                                class="fa fa-heart text-danger"></span> by <a href="https://www.spruko.com/">Spruko</a>
                            All rights reserved.</span>
                    </div>
                </div>
            </div>
        </div>
        <!-- END MAIN-FOOTER -->


        <!-- RIGHT-SIDEBAR -->
        <div class="sidebar sidebar-right sidebar-animate">
            <div class="sidebar-icon">
                <a href="javascript:void(0);" class="text-white fs-18 mt-1 d-block" data-bs-toggle="sidebar-right"
                    data-bs-target=".sidebar-right"><i class="fe fe-x"></i></a>
            </div>
            <div class="sidebar-body">
                <h5 class="text-white">Settings</h5>
                <div class="d-flex p-2">
                    <span class="custom-switch-description">Notifications</span>
                    <label class="custom-switch ms-auto">
                        <input type="checkbox" name="custom-switch-checkbox" class="custom-switch-input" checked>
                        <span class="custom-switch-indicator"></span>
                    </label>
                </div>
                <div class="d-flex p-2 border-top">
                    <span class="custom-switch-description">Show your Emails</span>
                    <label class="custom-switch ms-auto">
                        <input type="checkbox" name="custom-switch-checkbox" class="custom-switch-input" checked>
                        <span class="custom-switch-indicator"></span>
                    </label>
                </div>
                <div class="d-flex p-2 border-top">
                    <span class="custom-switch-description">System Logs</span>
                    <label class="custom-switch ms-auto">
                        <input type="checkbox" name="custom-switch-checkbox" class="custom-switch-input">
                        <span class="custom-switch-indicator"></span>
                    </label>
                </div>
                <div class="d-flex p-2 border-top">
                    <span class="custom-switch-description">Error Reporting</span>
                    <label class="custom-switch ms-auto">
                        <input type="checkbox" name="custom-switch-checkbox" class="custom-switch-input" checked>
                        <span class="custom-switch-indicator"></span>
                    </label>
                </div>
                <div class="d-flex p-2 border-top">
                    <span class="custom-switch-description">Show recent activity</span>
                    <label class="custom-switch ms-auto">
                        <input type="checkbox" name="custom-switch-checkbox" class="custom-switch-input">
                        <span class="custom-switch-indicator"></span>
                    </label>
                </div>
                <div class="d-flex p-2 mb-1 border-top">
                    <span class="custom-switch-description">Allow Data Collection</span>
                    <label class="custom-switch ms-auto">
                        <input type="checkbox" name="custom-switch-checkbox" class="custom-switch-input" checked>
                        <span class="custom-switch-indicator"></span>
                    </label>
                </div>
                <h5 class="text-white">Overview</h5>
                <div class="p-3">
                    <div class="main-traffic-detail-item">
                        <div>
                            <span>Profits</span> <span>76%</span>
                        </div>
                        <div class="progress ht-7">
                            <div aria-valuemax="100" aria-valuemin="0" aria-valuenow="70"
                                class="progress-bar ht-7 progress-bar-xs wd-75p" role="progressbar"></div>
                        </div><!-- progress -->
                    </div>
                    <div class="main-traffic-detail-item">
                        <div>
                            <span>Balance</span> <span>65%</span>
                        </div>
                        <div class="progress ht-7">
                            <div aria-valuemax="100" aria-valuemin="0" aria-valuenow="65"
                                class="progress-bar ht-7 progress-bar-xs bg-secondary wd-65p" role="progressbar"></div>
                        </div><!-- progress -->
                    </div>
                    <div class="main-traffic-detail-item">
                        <div>
                            <span>Earnings</span> <span>87%</span>
                        </div>
                        <div class="progress ht-7">
                            <div aria-valuemax="100" aria-valuemin="0" aria-valuenow="70"
                                class="progress-bar ht-7 progress-bar-xs bg-success wd-70p" role="progressbar"></div>
                        </div><!-- progress -->
                    </div>
                    <div class="main-traffic-detail-item">
                        <div>
                            <span>Customers</span> <span>55%</span>
                        </div>
                        <div class="progress ht-7">
                            <div aria-valuemax="100" aria-valuemin="0" aria-valuenow="55"
                                class="progress-bar ht-7 progress-bar-xs bg-info wd-55p" role="progressbar"></div>
                        </div><!-- progress -->
                    </div>
                    <div class="main-traffic-detail-item">
                        <div>
                            <span>Total Likes</span> <span>62%</span>
                        </div>
                        <div class="progress ht-7">
                            <div aria-valuemax="100" aria-valuemin="0" aria-valuenow="62"
                                class="progress-bar ht-7 progress-bar-xs bg-warning wd-65p" role="progressbar"></div>
                        </div><!-- progress -->
                    </div>
                </div>
            </div>
        </div>
        <!-- END RIGHT-SIDEBAR -->


        <!-- COUNTRY SELECTOR MODAL  -->
        <div class="modal fade" id="country-selector">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header border-bottom">
                        <h6 class="modal-title">Choose Country</h6><button aria-label="Close" class="btn-close"
                            data-bs-dismiss="modal" type="button"></button>
                    </div>
                    <div class="modal-body">
                        <ul class="row p-3">
                            <li class="col-lg-6 mb-2">
                                <a href="javascript:void(0);" class="btn btn-country btn-lg btn-block active">
                                    <span class="country-selector"><img alt src="images/us_flag.jpg"
                                            class="me-3 language"></span>Usa
                                </a>
                            </li>
                            <li class="col-lg-6 mb-2">
                                <a href="javascript:void(0);" class="btn btn-country btn-lg btn-block">
                                    <span class="country-selector"><img alt src="images/italy_flag.jpg"
                                            class="me-3 language"></span>Italy
                                </a>
                            </li>
                            <li class="col-lg-6 mb-2">
                                <a href="javascript:void(0);" class="btn btn-country btn-lg btn-block">
                                    <span class="country-selector"><img alt src="images/spain_flag.jpg"
                                            class="me-3 language"></span>Spain
                                </a>
                            </li>
                            <li class="col-lg-6 mb-2">
                                <a href="javascript:void(0);" class="btn btn-country btn-lg btn-block">
                                    <span class="country-selector"><img alt src="images/india_flag.jpg"
                                            class="me-3 language"></span>India
                                </a>
                            </li>
                            <li class="col-lg-6 mb-2">
                                <a href="javascript:void(0);" class="btn btn-country btn-lg btn-block">
                                    <span class="country-selector"><img alt src="images/french_flag.jpg"
                                            class="me-3 language"></span>France
                                </a>
                            </li>
                            <li class="col-lg-6 mb-2">
                                <a href="javascript:void(0);" class="btn btn-country btn-lg btn-block">
                                    <span class="country-selector"><img alt src="images/mexico_flag.jpg"
                                            class="me-3 language"></span>Mexico
                                </a>
                            </li>
                            <li class="col-lg-6 mb-2">
                                <a href="javascript:void(0);" class="btn btn-country btn-lg btn-block">
                                    <span class="country-selector"><img alt src="images/poland_flag.jpg"
                                            class="me-3 language"></span>Poland
                                </a>
                            </li>
                            <li class="col-lg-6 mb-2">
                                <a href="javascript:void(0);" class="btn btn-country btn-lg btn-block">
                                    <span class="country-selector"><img alt src="images/austria_flag.jpg"
                                            class="me-3 language"></span>Austria
                                </a>
                            </li>
                            <li class="col-lg-6 mb-2">
                                <a href="javascript:void(0);" class="btn btn-country btn-lg btn-block">
                                    <span class="country-selector"><img alt src="images/russia_flag.jpg"
                                            class="me-3 language"></span>Russia
                                </a>
                            </li>
                            <li class="col-lg-6 mb-2">
                                <a href="javascript:void(0);" class="btn btn-country btn-lg btn-block">
                                    <span class="country-selector"><img alt src="images/germany_flag.jpg"
                                            class="me-3 language"></span>Germany
                                </a>
                            </li>
                            <li class="col-lg-6 mb-2">
                                <a href="javascript:void(0);" class="btn btn-country btn-lg btn-block">
                                    <span class="country-selector"><img alt src="images/argentina_flag.jpg"
                                            class="me-3 language"></span>Argentina
                                </a>
                            </li>
                            <li class="col-lg-6 mb-2">
                                <a href="javascript:void(0);" class="btn btn-country btn-lg btn-block">
                                    <span class="country-selector"><img alt src="images/uae_flag.jpg"
                                            class="me-3 language"></span>U.A.E
                                </a>
                            </li>
                            <li class="col-lg-6 mb-2">
                                <a href="javascript:void(0);" class="btn btn-country btn-lg btn-block">
                                    <span class="country-selector"><img alt src="images/malaysia_flag.jpg"
                                            class="me-3 language"></span>Malaysia
                                </a>
                            </li>
                            <li class="col-lg-6 mb-2">
                                <a href="javascript:void(0);" class="btn btn-country btn-lg btn-block">
                                    <span class="country-selector"><img alt src="images/canada_flag.jpg"
                                            class="me-3 language"></span>Canada
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- END COUNTRY SELECTOR MODAL  -->


    </div>
    <!-- END PAGE-->

    <!-- SCRIPTS -->
    <!-- BACK TO TOP -->
    <a href="#top" id="back-to-top"><i class="fe fe-arrow-up"></i></a>

    <!-- JQUERY JS -->
    <script src="js/jquery.min.js"></script>

    <!-- BOOTSTRAP JS -->
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>

    <!-- SELECT2 JS -->
    <script src="js/select2.min.js"></script>

    <!-- PERFECT-SCROLLBAR JS  -->
    <script src="js/perfect-scrollbar.min.js"></script>
    <script src="js/pscroll1.js"></script>

    <!-- SIDEMENU JS -->
    <script src="js/sidemenu.js"></script>

    <!-- SIDEBAR JS -->
    <script src="js/sidebar.js"></script>


    <!-- JQUERY-UI JS -->
    <script src="js/datepicker.js"></script>

    <!-- INTERNAL DATERANGEPICKER JS -->
    <script src="js/moment.min.js"></script>
    <script src="js/daterangepicker.js"></script>

    <!-- INTERNAL FILEUPLOADS JS -->
    <script src="js/fileupload.js"></script>
    <script src="js/file-upload.js"></script>

    <!-- INTERNAL FANCY UPLOADER JS -->
    <script src="js/jquery.ui.widget.js"></script>
    <script src="js/jquery.fileupload.js"></script>
    <script src="js/jquery.iframe-transport.js"></script>
    <script src="js/jquery.fancy-fileupload.js"></script>
    <script src="js/fancy-uploader.js"></script>

    <!-- INTERNAL FORM-ELEMENTS JS -->
    <script type="module" src="js/advanced-form-elements.041e75a0.js"></script>

    <!-- SELECT2 JS -->
    <script type="module" src="js/select2.8380c4f5.js"></script>

    <!-- INTERNAL TELEPHONE INPUT JS -->
    <script src="js/telephoneinput.js"></script>
    <script src="js/inttelephoneinput.js"></script>

    <!-- TIMEPICKER JS -->
    <script src="js/jquery.timepicker.js"></script>
    <script src="js/toggles.min.js"></script>


    <!-- STICKY JS-->
    <script src="js/sticky.js"></script>

    <!-- APP JS -->
    <script type="module" src="js/app.f039afbe.js"></script>

    <!-- SWITCHER JS -->
    <script type="module" src="js/switcher.e3d4733f.js"></script>
    <!-- END SCRIPTS -->



</body>

</html>