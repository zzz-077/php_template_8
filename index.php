<?php
@include "config.php";
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Skydash</title>
    <link rel="stylesheet" href="style.css" />
    <link rel="icon" href="img/site-icon.webp" />
    <link rel="stylesheet" href="swiper-bundle.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" />
    <script src="https://kit.fontawesome.com/47912b74b2.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
</head>

<body>
    <!---------------------corner-setting-section---------------------------->
    <div class="setting-cont">
        <i class="fa-solid fa-gear stg-btn"></i>
    </div>
    <!---------------------corner-setting-slide-section---------------------------->
    <div class="settings-container">
        <div class="slidenavtheme-cont-header">
            <p>SIDEBAR SKINS</p>
            <i class="fa fa-remove stgRemove-btn"></i>
        </div>
        <div class="slnav-colortheme-cont">
            <div class="lightcolor-box">
                <span></span>
                <p>Light</p>
            </div>
            <div class="darkcolor-box">
                <span></span>
                <p>Dark</p>
            </div>
        </div>
        <div class="headnavtheme-cont-header">
            <p>HEADER SKINS</p>
        </div>
        <div class="hdnav-colortheme-cont">
            <span class="g-color"></span>
            <span class="y-color"></span>
            <span class="r-color"></span>
            <span class="b-color"></span>
            <span class="d-color"></span>
            <span class="w-color"></span>
        </div>
    </div>
    <!---------------------head-navbar-section---------------------------->
    <nav class="navbar">
        <div class="minilogo-cont">
            <a class="longlogo" href="index.html"><img src="img/siteLogo.svg" alt="#" /></a>
            <a class="minilogo" href="index.html"><img src="img/sitelogo-mini.svg" alt="#" /></a>
        </div>
        <div class="content-cont">
            <div class="navbar-left-column">
                <div class="menubar-cont">
                    <i class="fa fa-navicon navbar-btn"></i>
                </div>
                <div class="search-cont">
                    <i class="fa fa-search search-btn"></i>
                    <input type="text" name="search" placeholder="Search now" class="search-input" />
                </div>
            </div>
            <div class="navbar-right-column">
                <div class="bell-cont">
                    <i class="fa fa-bell-o bell-btn"></i>
                    <div class="bell-popuup">
                        <p>Notifications</p>
                        <div class="bell-pp-cont">
                            <div class="notif-box">
                                <div class="notif-icon1">
                                    <i class="fa-light fa-solid fa-circle-exclamation"></i>
                                </div>
                                <div class="notif-text">
                                    <h3>Application Error</h3>
                                    <p>Just now</p>
                                </div>
                            </div>
                            <div class="notif-box">
                                <div class="notif-icon2">
                                    <i class="fa-sharp fa-solid fa-gear"></i>
                                </div>
                                <div class="notif-text">
                                    <h3>Settings</h3>
                                    <p>Private message</p>
                                </div>
                            </div>
                            <div class="notif-box">
                                <div class="notif-icon3">
                                    <i class="fa-sharp fa-solid fa-user"></i>
                                </div>
                                <div class="notif-text">
                                    <h3>New user</h3>
                                    <p>2 days ago</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="adminprof-cont">
                    <img src="img/adminicon.jpg" alt="#" />
                    <div class="admin-popuup">
                        <div class="admin-box">
                            <i class="fa-sharp fa-solid fa-gears"></i>
                            <p>Settings</p>
                        </div>
                        <div class="admin-box">
                            <i class="fa-solid fa-power-off"></i>
                            <a class="logout_link" style="text-decoration: none;" href="logout.php">
                                <p>Logout</p>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="threedot-cont">
                    <i class="fa fa-ellipsis-h threedot-btn"></i>
                </div>
                <div class="mdqnavbar_cont">
                    <i class="fa fa-navicon navbar-btn1"></i>
                </div>
            </div>
        </div>
    </nav>
    <!---------------------middle-content-section---------------------------->
    <div class="full-container">
        <!---------------------side-navbar-section---------------------------->
        <nav class="side-navbar">
            <ul>
                <li id="dashboard-list">
                    <div>
                        <i class="fa-solid fa-layer-group"></i>
                        <a class="dash_a" href="#">Dashboard</a>
                    </div>
                </li>
                <li class="ordered_li">
                    <i class="fa-solid fa-table-columns navbar_parag_icons"></i>
                    <a href="#">UI Elements</a>
                    <i class="fa-solid fa-angle-right sld_navbar_btn"></i>
                </li>
                <li class="ordered_li">
                    <i class="fa-solid fa-list navbar_parag_icons"></i>
                    <a href="#">Form elements</a>
                    <i class="fa-solid fa-angle-right sld_navbar_btn"></i>
                </li>
                <li class="ordered_li">
                    <i class="fa-solid fa-chart-simple navbar_parag_icons"></i>
                    <a href="#">Charts</a>
                    <i class="fa-solid fa-angle-right sld_navbar_btn"></i>
                </li>
                <li class="ordered_li">
                    <i class="fa-solid fa-table-cells-large navbar_parag_icons"></i>
                    <a href="#">Tables</a>
                    <i class="fa-solid fa-angle-right sld_navbar_btn"></i>
                </li>
                <li class="ordered_li">
                    <i class="fa fa-paint-brush navbar_parag_icons"></i>
                    <a href="#">Icons</a>
                    <i class="fa-solid fa-angle-right sld_navbar_btn"></i>
                </li>
                <li class="ordered_li">
                    <i class="fa fa-user navbar_parag_icons"></i>
                    <a href="#">User Pages</a>
                    <i class="fa-solid fa-angle-right sld_navbar_btn"></i>
                </li>
                <li class="ordered_li">
                    <i class="fa fa-ban navbar_parag_icons"></i>
                    <a href="#">Error Pages</a>
                    <i class="fa-solid fa-angle-right sld_navbar_btn"></i>
                </li>
                <li class="ordered_li">
                    <i class="fa fa-file-text-o navbar_parag_icons"></i>
                    <a href="#">Documentation</a>
                    <i class="fa-solid fa-angle-right sld_navbar_btn"></i>
                </li>
            </ul>
        </nav>

        <nav class="side-navbar1">
            <ul>
                <li id="dashboard-list1">
                    <div>
                        <i class="fa-solid fa-layer-group"></i>
                        <a class="dash_a" href="#">Dashboard</a>
                    </div>
                </li>
                <li class="ordered_li">
                    <i class="fa-solid fa-table-columns navbar_parag_icons"></i>
                    <a href="#">UI Elements</a>
                    <i class="fa-solid fa-angle-right sld_navbar_btn"></i>
                </li>
                <li class="ordered_li">
                    <i class="fa-solid fa-list navbar_parag_icons"></i>
                    <a href="#">Form elements</a>
                    <i class="fa-solid fa-angle-right sld_navbar_btn"></i>
                </li>
                <li class="ordered_li">
                    <i class="fa-solid fa-chart-simple navbar_parag_icons"></i>
                    <a href="#">Charts</a>
                    <i class="fa-solid fa-angle-right sld_navbar_btn"></i>
                </li>
                <li class="ordered_li">
                    <i class="fa-solid fa-table-cells-large navbar_parag_icons"></i>
                    <a href="#">Tables</a>
                    <i class="fa-solid fa-angle-right sld_navbar_btn"></i>
                </li>
                <li class="ordered_li">
                    <i class="fa fa-paint-brush navbar_parag_icons"></i>
                    <a href="#">Icons</a>
                    <i class="fa-solid fa-angle-right sld_navbar_btn"></i>
                </li>
                <li class="ordered_li">
                    <i class="fa fa-user navbar_parag_icons"></i>
                    <a href="#">User Pages</a>
                    <i class="fa-solid fa-angle-right sld_navbar_btn"></i>
                </li>
                <li class="ordered_li">
                    <i class="fa fa-ban navbar_parag_icons"></i>
                    <a href="#">Error Pages</a>
                    <i class="fa-solid fa-angle-right sld_navbar_btn"></i>
                </li>
                <li class="ordered_li">
                    <i class="fa fa-file-text-o navbar_parag_icons"></i>
                    <a href="#">Documentation</a>
                    <i class="fa-solid fa-angle-right sld_navbar_btn"></i>
                </li>
            </ul>
        </nav>
        <!---------------------middle-graph-section---------------------------->
        <section class="main-container">
            <div class="main-content">
                <!---------------------welcome-section---------------------------->
                <div class="welcome-cont">
                    <div class="welcome-left-box">
                        <h1>Welcome Aamir</h1>
                        <p>
                            All systems are running smoothly! You have
                            <a href="#">3 unread alerts!</a>
                        </p>
                    </div>
                    <div class="welcome-right-box">
                        <button class="welcome-popup-menu">
                            Today (10 Jan 2021)
                        </button>
                        <div class="welcome-popuup">
                            <div class="welcome-box">
                                <p>January-march</p>
                            </div>
                            <div class="welcome-box">
                                <p>March-June</p>
                            </div>
                            <div class="welcome-box">
                                <p>June-August</p>
                            </div>
                            <div class="welcome-box">
                                <p>August-November</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!---------------------info-section---------------------------->
                <div class="info-cont">
                    <div class="info-left-box">
                        <div class="info-img-box">
                            <div class="info-img-box1">
                                <i class="fa-regular fa-sun"></i>
                                <strong>31°C</strong>
                            </div>
                            <div class="info-img-box2">
                                <h3>Bangelore</h3>
                                <p>india</p>
                            </div>
                        </div>
                    </div>
                    <div class="info-right-box">
                        <div class="info-right-box1">
                            <div class="info-right-left-box1">
                                <p>Today's Bookings</p>
                                <h1>4006</h1>
                                <h3>10.00% (30 days)</h3>
                            </div>
                            <div class="info-right-left-box2">
                                <p>Total Bookings</p>
                                <h1>61344</h1>
                                <h3>22.00% (30 days)</h3>
                            </div>
                        </div>
                        <div class="info-right-box2">
                            <div class="info-right-right-box1">
                                <p>Number of Meetings</p>
                                <h1>34040</h1>
                                <h3>2.00% (30 days)</h3>
                            </div>
                            <div class="info-right-right-box2">
                                <p>Number of Clients</p>
                                <h1>47033</h1>
                                <h3>0.22% (30 days)</h3>
                            </div>
                        </div>
                    </div>
                </div>
                <!---------------------schema&graph-section---------------------------->
                <div class="schema-cont">
                    <div class="schema-box1">
                        <div class="schema-info-box1">
                            <h3>Order Details</h3>
                            <p>
                                The total number of sessions within the date
                                range. It is the period time a user is
                                actively engaged with your website, page or
                                app, etc
                            </p>
                            <div class="schema-value-1">
                                <div class="schema-value-box1">
                                    <p>Order value</p>
                                    <strong>12.3K</strong>
                                </div>
                                <div class="schema-value-box1">
                                    <p>Orders</p>
                                    <strong>14K</strong>
                                </div>
                                <div class="schema-value-box1">
                                    <p>Users</p>
                                    <strong>71.56K</strong>
                                </div>
                                <div class="schema-value-box1">
                                    <p>Downloads</p>
                                    <strong>34040</strong>
                                </div>
                            </div>
                        </div>
                        <div id="chart1" class="schema-graph-box1"></div>
                    </div>
                    <div class="schema-box2">
                        <div class="schema-info-box2">
                            <h3>Sales Report</h3>
                            <p>
                                The total number of sessions within the date
                                range. It is the period time a user is
                                actively engaged with your website, page or
                                app, etc
                            </p>
                            <div class="schema-value-2">
                                <div class="schema-value-box2_1">
                                    <span></span>
                                    <p>Offline Sales</p>
                                </div>
                                <div class="schema-value-box2_2">
                                    <span></span>
                                    <p>Online Sales</p>
                                </div>
                            </div>
                        </div>
                        <div id="chart2" class="schema-graph-box2">
                            <p>schema graph</p>
                        </div>
                    </div>
                </div>
                <!---------------------Detailedreports-Slide-section---------------------------->
                <div class="detReports-cont">
                    <div class="slide-cont">
                        <div class="slide-box1">
                            <h3>Detailed reports</h3>
                            <h1>$34040</h1>
                            <strong>North America</strong>
                            <p>
                                The total number of sessions within the date
                                range. It is the period time a user is
                                actively engaged with your website, page or
                                app, etc
                            </p>
                        </div>
                        <div class="slide-box2">
                            <ul>
                                <li>
                                    <p>Illinoi</p>
                                    <div class="line">
                                        <span></span>
                                    </div>
                                    <strong>713</strong>
                                </li>
                                <li>
                                    <p>Washington</p>
                                    <div class="line">
                                        <span></span>
                                    </div>
                                    <strong>583</strong>
                                </li>
                                <li>
                                    <p>Mississippi</p>
                                    <div class="line">
                                        <span></span>
                                    </div>
                                    <strong>924</strong>
                                </li>
                                <li>
                                    <p>California</p>
                                    <div class="line">
                                        <span></span>
                                    </div>
                                    <strong>664</strong>
                                </li>
                                <li>
                                    <p>Maryland</p>
                                    <div class="line">
                                        <span></span>
                                    </div>
                                    <strong>560</strong>
                                </li>
                                <li>
                                    <p>Alaska</p>
                                    <div class="line">
                                        <span></span>
                                    </div>
                                    <strong>793</strong>
                                </li>
                            </ul>
                        </div>
                        <div class="slide-box3">
                            <div id="chart3"></div>
                        </div>
                    </div>
                </div>
                <!---------------------Top-product&todolist-section---------------------------->
                <div class="topprod-cont">
                    <div class="top_prod-box">
                        <h1>Top Products</h1>
                        <div class="top_prod-table">
                            <table>
                                <thead>
                                    <tr>
                                        <th>Product</th>
                                        <th>Price</th>
                                        <th>Date</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <p>Search Engine Marketing</p>
                                        </td>
                                        <td>
                                            <strong>$362</strong>
                                        </td>
                                        <td>
                                            <p>21 Sep 2018</p>
                                        </td>
                                        <td>
                                            <div class="complated">
                                                Complated
                                            </div>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>
                                            <p>
                                                Search Engine Optimization
                                            </p>
                                        </td>
                                        <td>
                                            <strong>$116</strong>
                                        </td>
                                        <td>
                                            <p>13 Jun 2018</p>
                                        </td>
                                        <td>
                                            <div class="complated">
                                                Complated
                                            </div>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>
                                            <p>Display Advertising</p>
                                        </td>
                                        <td>
                                            <strong>$551</strong>
                                        </td>
                                        <td>
                                            <p>28 Sep 2018</p>
                                        </td>
                                        <td>
                                            <div class="pending">
                                                Pending
                                            </div>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>
                                            <p>Pay Per Click Advertising</p>
                                        </td>
                                        <td>
                                            <strong>$523</strong>
                                        </td>
                                        <td>
                                            <p>30 Jun 2018</p>
                                        </td>
                                        <td>
                                            <div class="pending">
                                                Pending
                                            </div>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>
                                            <p>E-Mail Marketing</p>
                                        </td>
                                        <td>
                                            <strong>$781</strong>
                                        </td>
                                        <td>
                                            <p>01 Nov 2018</p>
                                        </td>
                                        <td>
                                            <div class="cancelled">
                                                Cancelled
                                            </div>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>
                                            <p>Referral Marketing</p>
                                        </td>
                                        <td>
                                            <strong>$283</strong>
                                        </td>
                                        <td>
                                            <p>20 Mar 2018</p>
                                        </td>
                                        <td>
                                            <div class="pending">
                                                Pending
                                            </div>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>
                                            <p>Social media marketing</p>
                                        </td>
                                        <td>
                                            <strong> $897</strong>
                                        </td>
                                        <td>
                                            <p>26 Oct 2018</p>
                                        </td>
                                        <td>
                                            <div class="complated">
                                                Complated
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="todo_list-box">
                        <h1>To Do Lists</h1>
                        <div class="tdl_cont">
                            <div class="tdl_tasks">
                                <div class="tdl_screen">
                                    <!-- 
                                        <div class="tdl_list1"> 
                                            <div class="tdl_text_checkbox">
                                                  <i class="fa-regular fa-square-check"></i>
                                                <p class="tdl_added_text">
                                                    Level up for Antony
                                                </p>
                                            </div>
                                            <i
                                                class="fa fa-remove tdl_remove_btn"
                                            ></i>
                                        </div>
                                        <div class="tdl_list1">
                                            <div class="tdl_text_checkbox">
                                                <i class="fa-regular fa-square-check"></i>
                                                <p class="tdl_added_text">
                                                    Level up for Antony
                                                </p>
                                            </div>
                                            <i
                                                class="fa fa-remove tdl_remove_btn"
                                            ></i>
                                        </div>
                                        <div class="tdl_list1">
                                            <div class="tdl_text_checkbox">
                                                 <i class="fa-regular fa-square-check"></i>
                                                <p class="tdl_added_text">
                                                    Level up for Antony
                                                </p>
                                            </div>
                                            <i
                                                class="fa fa-remove tdl_remove_btn"
                                            ></i>
                                        </div>
                                        <div class="tdl_list1">
                                            <div class="tdl_text_checkbox">
                                               <i class="fa-regular fa-square-check"></i>
                                                <p class="tdl_added_text">
                                                    Level up for Antony
                                                </p>
                                            </div>
                                            <i
                                                class="fa fa-remove tdl_remove_btn"
                                            ></i>
                                        </div>
                                        <div class="tdl_list1">
                                            <div class="tdl_text_checkbox">
                                                <i class="fa-regular fa-square-check"></i>
                                                <p class="tdl_added_text">
                                                    Level up for Antony
                                                </p>
                                            </div>
                                            <i
                                                class="fa fa-remove tdl_remove_btn"
                                            ></i>
                                        </div>
                                        -->
                                </div>
                            </div>
                            <div class="tdl_input">
                                <input type="text" placeholder="Add new task" id="tdl_input" />
                                <i class="fa-solid fa-circle-plus" id="tdl_add_btn"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <!---------------------projects-section---------------------------->
                <div class="projects-cont">
                    <div class="table_proj-box">
                        <h1>Projects</h1>
                        <table cellspacing="0">
                            <thead>
                                <tr>
                                    <th>Places</th>
                                    <th>Orders</th>
                                    <th>Users</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <p>Kentucky</p>
                                    </td>
                                    <td>
                                        <strong>65</strong>
                                        <h3>(2.15%)</h3>
                                    </td>
                                    <td>
                                        <p>65</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p>Ohio</p>
                                    </td>
                                    <td>
                                        <strong>54</strong>
                                        <h3>(3.25%)</h3>
                                    </td>
                                    <td>
                                        <p>51</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p>Nevada</p>
                                    </td>
                                    <td>
                                        <strong>22</strong>
                                        <h3>(2.22%)</h3>
                                    </td>
                                    <td>
                                        <p>32</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p>North Carolina</p>
                                    </td>
                                    <td>
                                        <strong>46</strong>
                                        <h3>(3.27%)</h3>
                                    </td>
                                    <td>
                                        <p>15</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p>Montana</p>
                                    </td>
                                    <td>
                                        <strong>17</strong>
                                        <h3>(1.25%)</h3>
                                    </td>
                                    <td>
                                        <p>25</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p>New Jersey</p>
                                    </td>
                                    <td>
                                        <strong>52</strong>
                                        <h3>(3.11%)</h3>
                                    </td>
                                    <td>
                                        <p>71</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p>Louisiana</p>
                                    </td>
                                    <td>
                                        <strong>25</strong>
                                        <h3>(1.32%)</h3>
                                    </td>
                                    <td>
                                        <p>14</p>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="charts-NOM-cont">
                        <div class="charts_proj-box">
                            <h1>Charts</h1>
                            <div class="chart_box">
                                <div>
                                    <p>Data 1</p>
                                    <div class="chart-line">
                                        <div class="chrt_insd_line1">
                                            <div></div>
                                        </div>
                                        <p>5k</p>
                                    </div>
                                </div>
                                <div>
                                    <p>Data 2</p>
                                    <div class="chart-line">
                                        <div class="chrt_insd_line2">
                                            <div></div>
                                        </div>
                                        <p>1k</p>
                                    </div>
                                </div>
                                <div>
                                    <p>Data 3</p>
                                    <div class="chart-line">
                                        <div class="chrt_insd_line3">
                                            <div></div>
                                        </div>
                                        <p>992</p>
                                    </div>
                                </div>
                                <div>
                                    <p>Data 4</p>
                                    <div class="chart-line">
                                        <div class="chrt_insd_line4">
                                            <div></div>
                                        </div>
                                        <p>687</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="NOM_proj-box">
                            <h1>Number Of Meetings</h1>
                            <div class="NOM_inside_cont">
                                <div class="NOM_inside_text_box">
                                    <h3>34040</h3>
                                    <p>
                                        The total number of sessions within
                                        the date range.It is calculated as
                                        the sum .
                                    </p>
                                </div>
                                <div class="NOM_inside_img_box">
                                    <img src="img/NOM_inside_img.svg" alt="#" />
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="notif_proj-box">
                        <div class="notif_header_box">
                            <h1>Notifications</h1>
                            <i class="fa-solid fa-minus notif_remove_btn"></i>
                        </div>
                        <div class="notif_display_box">
                            <div>
                                <div class="notif_icon_box">
                                    <img src="img/notif_img_1.jpg" alt="#1" />
                                </div>
                                <div class="notif_info_box">
                                    <h3>Adam Warren</h3>
                                    <p>Sales dashboard have been created</p>
                                    <strong>11:30 am</strong>
                                </div>
                            </div>
                            <div>
                                <div class="notif_icon_box">
                                    <img src="img/notif_img_2.jpg" alt="#2" />
                                </div>
                                <div class="notif_info_box">
                                    <h3>Isabella Becker</h3>
                                    <p>You have done a great job #TW111</p>
                                    <strong>10:30 am</strong>
                                </div>
                            </div>
                            <div>
                                <div class="notif_icon_box">
                                    <img src="img/notif_img_3.webp" alt="#" />
                                </div>
                                <div class="notif_info_box">
                                    <h3>Leonard Thornton</h3>
                                    <p>Sales dashboard have been created</p>
                                    <strong>9:30 am</strong>
                                </div>
                            </div>
                            <div>
                                <div class="notif_icon_box">
                                    <img src="img/notif_img_4.webp" alt="#" />
                                </div>
                                <div class="notif_info_box">
                                    <h3>George Morrison</h3>
                                    <p>Sales dashboard have been created</p>
                                    <strong>9:00 am</strong>
                                </div>
                            </div>
                            <div>
                                <div class="notif_icon_box">
                                    <img src="img/notif_img_5.webp" alt="#" />
                                </div>
                                <div class="notif_info_box">
                                    <h3>Ryan Cortez</h3>
                                    <p>Herbs are fun and easy to grow.</p>
                                    <strong>8:50 am</strong>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!---------------------footer-section---------------------------->
                <div class="footer-cont">
                    <div class="footer_content">
                        <div class="footer_box1">
                            <p>
                                Copyright © 2021. Premium
                                <a href="#"> Bootstrap admin template</a>
                                from BootstrapDash. All rights reserved.
                            </p>
                            <p>Distributed by <a href="#">Themewagon</a></p>
                        </div>
                        <div class="footer_box2">
                            <p>Hand-crafted & made with Love</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <script src="swiper-bundle.min.js"></script>
    <script src="app.js" defer></script>
</body>

</html>