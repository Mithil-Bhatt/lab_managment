<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>


<style>
      @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap');

    .main-content{
        text-align:  center;
    
    }
    .image-header{
    color:#fff;
      position:relative;
      width:50px;
      height:50px;
      top:20px;
        right:-700px;
    }

    .header {
    text-align: center;
    font-weight: bold;
    font-size: 50px;
    color: #404040;
  }
  .compline{
    border: 3px solid #fff;
    border-radius: 10px;
    background-color:#f9b234;
  }
  .compline:hover{
    border: 3px solid #fff;
    background-color:#404040;
    color: #f9b234;
  }
  .header1{
    text-align: center;
    font-weight: bold;
    font-size: 100px;
    color: #fffff2;

  }


  .pg-footer {
        font-family: 'Roboto', sans-serif;
    }


    .footer {
        background-color: #404040;
        color: #fff;

    }

    .footer-wave-svg {
        background-color: transparent;
        display: block;
        height: 30px;
        position: relative;
        top: -1px;
        width: 100%;
    }

    .footer-wave-path {
        fill: #808080;
    }

    .footer-content {
        margin-left: auto;
        margin-right: auto;
        max-width: 1230px;
        padding: 40px 15px 450px;
        position: relative;

    }

    .footer-content-column {
        box-sizing: border-box;
        float: left;
        padding-left: 15px;
        padding-right: 15px;
        width: 100%;
        color: #fff;
    }

    .footer-content-column ul li a {
        color: #fff;
        text-decoration: none;
    }

    .footer-logo-link {
        display: inline-block;
    }

    .footer-menu {
        margin-top: 30px;
    }

    .footer-menu-name {
        color: #fffff2;
        font-size: 15px;
        font-weight: 900;
        letter-spacing: .1em;
        line-height: 18px;
        margin-bottom: 0;
        margin-top: 0;
        text-transform: uppercase;
    }

    .footer-menu-list {
        list-style: none;
        margin-bottom: 0;
        margin-top: 10px;
        padding-left: 0;
    }

    .footer-menu-list li {
        margin-top: 5px;
    }





    .footer-copyright {
        background-color: #404040;
        color: #fff;
        padding: 15px 30px;
        text-align: center;

        border-top: 2px solid #fff;
    }

    .footer-copyright-wrapper {
        margin-left: auto;
        margin-right: auto;
        max-width: 1200px;
    }

    .footer-copyright-text {
        color: #fff;
        font-size: 13px;
        font-weight: 400;
        line-height: 18px;
        margin-bottom: 0;
        margin-top: 0;
    }

    .footer-copyright-link {
        color: #fff;
        text-decoration: none;
    }



    /* Media Query For different screens */
    @media (min-width:320px) and (max-width:479px) {

        /* smartphones, portrait iPhone, portrait 480x320 phones (Android) */
        .footer-content {
            margin-left: auto;
            margin-right: auto;
            max-width: 1230px;
            padding: 40px 15px 1050px;
            position: relative;
        }
    }

    @media (min-width:480px) and (max-width:599px) {

        /* smartphones, Android phones, landscape iPhone */
        .footer-content {
            margin-left: auto;
            margin-right: auto;
            max-width: 1230px;
            padding: 40px 15px 1050px;
            position: relative;
        }
    }

    @media (min-width:600px) and (max-width: 800px) {

        /* portrait tablets, portrait iPad, e-readers (Nook/Kindle), landscape 800x480 phones (Android) */
        .footer-content {
            margin-left: auto;
            margin-right: auto;
            max-width: 1230px;
            padding: 40px 15px 1050px;
            position: relative;
        }
    }

    @media (min-width:801px) {
        /* tablet, landscape iPad, lo-res laptops ands desktops */

    }

    @media (min-width:1025px) {
        /* big landscape tablets, laptops, and desktops */

    }

    @media (min-width:1281px) {
        /* hi-res laptops and desktops */

    }




    @media (min-width: 760px) {
        .footer-content {
            margin-left: auto;
            margin-right: auto;
            max-width: 1230px;
            padding: 40px 15px 450px;
            position: relative;
        }

        .footer-wave-svg {
            height: 50px;
        }

        .footer-content-column {
            width: 24.99%;
        }
    }

    @media (min-width: 568px) {
        /* .footer-content-column {
      width: 49.99%;
  } */
    }

    .content {
        margin-left: 25px;
    }

    .menu {
    display: flex;
  
  }

  .menu button {
    font-weight: bold;
    font-size: 25px;
    text-align: center;
    background-color: transparent;
    margin-right: 0px;
    cursor: pointer;
    border: none;

  }

  .button_active {
    color: #f9b234;
  }


  .content_inside {
    display: none;

    border-radius: 10px;
    padding: 10px;
  }

  .content_inside_active {
    display: block;
  }

  .breadcrumbs {

    border-radius: 50px;
    align-items: center;
  }

  .container {
    background-color: #808080;
  }
  
.main{
  height:400px;
  align-content: center;
}

</style>


<x-app-layout>
<div class="container">
        <br><br>
        <div class="menu">
            <div class="breadcrumbs">
                <button class="button_active"  class="button2">
                    <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor" class="bi bi-house-door-fill" viewBox="0 0 16 16">
                        <path d="M6.5 14.5v-3.505c0-.245.25-.495.5-.495h2c.25 0 .5.25.5.5v3.5a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.146-.354L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.354 1.146a.5.5 0 0 0-.708 0l-6 6A.5.5 0 0 0 1.5 7.5v7a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 .5-.5Z" />
                    </svg>
                    Home ></button>
                <button class="button2" disabled>
                    <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor" class="bi bi-houses-fill" viewBox="0 0 16 16">
                        <path d="M7.207 1a1 1 0 0 0-1.414 0L.146 6.646a.5.5 0 0 0 .708.708L1 7.207V12.5A1.5 1.5 0 0 0 2.5 14h.55a2.51 2.51 0 0 1-.05-.5V9.415a1.5 1.5 0 0 1-.56-2.475l5.353-5.354L7.207 1Z" />
                        <path d="M8.793 2a1 1 0 0 1 1.414 0L12 3.793V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v3.293l1.854 1.853a.5.5 0 0 1-.708.708L15 8.207V13.5a1.5 1.5 0 0 1-1.5 1.5h-8A1.5 1.5 0 0 1 4 13.5V8.207l-.146.147a.5.5 0 1 1-.708-.708L8.793 2Z" />
                    </svg>
                    Select Lab ></button>
                <button  class="button2">
                    <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor" class="bi bi-pc-display-horizontal" viewBox="0 0 16 16">
                        <path d="M1.5 0A1.5 1.5 0 0 0 0 1.5v7A1.5 1.5 0 0 0 1.5 10H6v1H1a1 1 0 0 0-1 1v3a1 1 0 0 0 1 1h14a1 1 0 0 0 1-1v-3a1 1 0 0 0-1-1h-5v-1h4.5A1.5 1.5 0 0 0 16 8.5v-7A1.5 1.5 0 0 0 14.5 0h-13Zm0 1h13a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-.5.5h-13a.5.5 0 0 1-.5-.5v-7a.5.5 0 0 1 .5-.5ZM12 12.5a.5.5 0 1 1 1 0 .5.5 0 0 1-1 0Zm2 0a.5.5 0 1 1 1 0 .5.5 0 0 1-1 0ZM1.5 12h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1 0-1ZM1 14.25a.25.25 0 0 1 .25-.25h5.5a.25.25 0 1 1 0 .5h-5.5a.25.25 0 0 1-.25-.25Z" />
                    </svg>
                    Select Pc > </button>
                    <button  class="button2" disabled>
          <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor" class="bi bi-chat-right-dots" viewBox="0 0 16 16">
  <path d="M2 1a1 1 0 0 0-1 1v8a1 1 0 0 0 1 1h9.586a2 2 0 0 1 1.414.586l2 2V2a1 1 0 0 0-1-1H2zm12-1a2 2 0 0 1 2 2v12.793a.5.5 0 0 1-.854.353l-2.853-2.853a1 1 0 0 0-.707-.293H2a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2h12z"/>
  <path d="M5 6a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm4 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm4 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0z"/>
</svg>
                    Register Complaint</button>


                    
            </div>
        </div>
  
<div class="main-content">
<h1 class="header1"> Lab Management System</h1>
<div class="image-header">
<svg xmlns="http://www.w3.org/2000/svg" width="150" height="150" fill="currentColor" class="bi bi-pc-display-horizontal" viewBox="0 0 16 16">
  <path d="M1.5 0A1.5 1.5 0 0 0 0 1.5v7A1.5 1.5 0 0 0 1.5 10H6v1H1a1 1 0 0 0-1 1v3a1 1 0 0 0 1 1h14a1 1 0 0 0 1-1v-3a1 1 0 0 0-1-1h-5v-1h4.5A1.5 1.5 0 0 0 16 8.5v-7A1.5 1.5 0 0 0 14.5 0h-13Zm0 1h13a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-.5.5h-13a.5.5 0 0 1-.5-.5v-7a.5.5 0 0 1 .5-.5ZM12 12.5a.5.5 0 1 1 1 0 .5.5 0 0 1-1 0Zm2 0a.5.5 0 1 1 1 0 .5.5 0 0 1-1 0ZM1.5 12h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1 0-1ZM1 14.25a.25.25 0 0 1 .25-.25h5.5a.25.25 0 1 1 0 .5h-5.5a.25.25 0 0 1-.25-.25Z"/>
</svg></div>
<br><br><br><br><br><br>
<h1 class="header"> <a href="/lab" class="compline">&nbsp;&nbsp;Complaint Registration&nbsp;&nbsp;</a></h1>
<br><br>
</div>
</div>

<div class="pg-footer">
            <footer class="footer">
                <svg class="footer-wave-svg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 100" preserveAspectRatio="none">
                    <path class="footer-wave-path" d="M851.8,100c125,0,288.3-45,348.2-64V0H0v44c3.7-1,7.3-1.9,11-2.9C80.7,22,151.7,10.8,223.5,6.3C276.7,2.9,330,4,383,9.8 c52.2,5.7,103.3,16.2,153.4,32.8C623.9,71.3,726.8,100,851.8,100z"></path>
                </svg>
                <br>
                <div class="content">
                    <h1>Lab Management system</h1>
                    <p>follow the upper step and describe your Complaint and we try to solve problem in 6 hours.</p>
                    <br>
                    <br>
                    <br><br>
                </div>
                <div class="footer-copyright">
                    <div class="footer-copyright-wrapper">
                        <p class="footer-copyright-text">
                            <a class="footer-copyright-link" href="#" target="_self"> ©2020 | lab management system | All rights reserved. </a>
                        </p>
                    </div>
                </div>
            </footer>
        </div>
</x-app-layout>