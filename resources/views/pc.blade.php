<head>
	  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
 
   <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	
<style>
   .ag-format-container {
    width: 1142px;
    margin: 0 auto;
  }

  * {
    box-sizing: border-box;
    font-family: 'Poppins', sans-serif;
  }

  .ag-courses_box {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-align: start;
    -ms-flex-align: start;
    align-items: center;
    -ms-flex-wrap: wrap;
    flex-wrap: wrap;

    padding: 50px 0;
  }

  .ag-courses_item {
    -ms-flex-preferred-size: calc(33.33333% - 30px);
    flex-basis: calc(33.33333% - 30px);

    margin: 0 15px 30px;

    overflow: hidden;

    border-radius: 28px;
  }

  .ag-courses-item_link {
    display: block;
    padding: 30px 20px;
    background-color: #404040;

    overflow: hidden;

    position: relative;
  }

  .ag-courses-item_link:hover,
  .ag-courses-item_link:hover .ag-courses-item_date {
    text-decoration: none;
    color: #FFF;
  }

  .ag-courses-item_link:hover .ag-courses-item_bg {
    -webkit-transform: scale(10);
    -ms-transform: scale(10);
    transform: scale(10);
  }

  .ag-courses-item_title {
    min-height: 87px;
    margin: 0 10 50px;
    align-items: center;
    overflow: hidden;

    font-weight: bold;
    font-size: 30px;
    color: #FFF;

    z-index: 2;
    position: relative;
  }

  .ag-courses-item_bg {
    height: 128px;
    width: 128px;
    background-color: #f9b234;

    z-index: 1;
    position: absolute;
    top: -75px;
    right: -75px;

    border-radius: 50%;

    -webkit-transition: all .5s ease;
    -o-transition: all .5s ease;
    transition: all .5s ease;
  }



  @media only screen and (max-width: 979px) {
    .ag-courses_item {
      -ms-flex-preferred-size: calc(50% - 30px);
      flex-basis: calc(50% - 30px);
    }

    .ag-courses-item_title {
      font-size: 24px;
    }
  }

  @media only screen and (max-width: 767px) {
    .ag-format-container {
      width: 96%;
    }

  }

  @media only screen and (max-width: 639px) {
    .ag-courses_item {
      -ms-flex-preferred-size: 100%;
      flex-basis: 100%;
    }

    .ag-courses-item_title {
      min-height: 72px;
      line-height: 1;
      text-align: center;
      font-size: 24px;
    }

    .ag-courses-item_link {
      padding: 22px 40px;
    }

    .ag-courses-item_date-box {
      font-size: 16px;
    }
  }

  .button-28 {
    appearance: none;
    background-color: transparent;
    border: 2px solid #1A1A1A;
    border-radius: 15px;
    box-sizing: border-box;
    color: #fff;
    cursor: pointer;
    display: inline-block;
    font-family: Roobert, -apple-system, BlinkMacSystemFont, "Segoe UI", Helvetica, Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol";
    font-size: 16px;
    font-weight: 600;
    line-height: normal;
    margin: 0;
    min-height: 60px;
    min-width: 0;
    outline: none;
    padding: 16px 24px;
    text-align: center;
    text-decoration: none;
    transition: all 300ms cubic-bezier(.23, 1, 0.32, 1);
    user-select: none;
    -webkit-user-select: none;
    touch-action: manipulation;
    width: 100%;
    will-change: transform;
  }

  .button-28:disabled {
    pointer-events: none;
  }

  .button-28:hover {
    color: #fff;
    background-color: #1A1A1A;
    box-shadow: rgba(0, 0, 0, 0.25) 0 8px 15px;
    transform: translateY(-2px);
  }

  .button-28:active {
    box-shadow: none;
    transform: translateY(0);
  }

  .header {
    text-align: center;
    font-weight: bold;
    font-size: 50px;
    color: #FFF;

  }


  .search{
    position: relative;
    left: 35%;
    width: 30%;
    align-items: center;

  }

  .sbutton{
    background-color:green;
    color: #fff;
    border-radius:50px;
    width:100px;
  }

  .form-control me-2 {
    border-color: #404040;
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

</head>

<x-app-layout>
<div class="container">
    <br><br>
    <div class="menu">
      <div class="breadcrumbs">
        <button  class="button2" disabled>
        <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor" class="bi bi-house-door-fill" viewBox="0 0 16 16">
            <path d="M6.5 14.5v-3.505c0-.245.25-.495.5-.495h2c.25 0 .5.25.5.5v3.5a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.146-.354L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.354 1.146a.5.5 0 0 0-.708 0l-6 6A.5.5 0 0 0 1.5 7.5v7a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 .5-.5Z" />
          </svg> Home > </button>
        <button class="button2" disabled>
          <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor" class="bi bi-houses-fill" viewBox="0 0 16 16">
            <path d="M7.207 1a1 1 0 0 0-1.414 0L.146 6.646a.5.5 0 0 0 .708.708L1 7.207V12.5A1.5 1.5 0 0 0 2.5 14h.55a2.51 2.51 0 0 1-.05-.5V9.415a1.5 1.5 0 0 1-.56-2.475l5.353-5.354L7.207 1Z" />
            <path d="M8.793 2a1 1 0 0 1 1.414 0L12 3.793V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v3.293l1.854 1.853a.5.5 0 0 1-.708.708L15 8.207V13.5a1.5 1.5 0 0 1-1.5 1.5h-8A1.5 1.5 0 0 1 4 13.5V8.207l-.146.147a.5.5 0 1 1-.708-.708L8.793 2Z" />
          </svg>
          Select Lab ></button>
        <button class="button_active" class="button2" >
          <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor" class="bi bi-pc-display-horizontal" viewBox="0 0 16 16">
            <path d="M1.5 0A1.5 1.5 0 0 0 0 1.5v7A1.5 1.5 0 0 0 1.5 10H6v1H1a1 1 0 0 0-1 1v3a1 1 0 0 0 1 1h14a1 1 0 0 0 1-1v-3a1 1 0 0 0-1-1h-5v-1h4.5A1.5 1.5 0 0 0 16 8.5v-7A1.5 1.5 0 0 0 14.5 0h-13Zm0 1h13a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-.5.5h-13a.5.5 0 0 1-.5-.5v-7a.5.5 0 0 1 .5-.5ZM12 12.5a.5.5 0 1 1 1 0 .5.5 0 0 1-1 0Zm2 0a.5.5 0 1 1 1 0 .5.5 0 0 1-1 0ZM1.5 12h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1 0-1ZM1 14.25a.25.25 0 0 1 .25-.25h5.5a.25.25 0 1 1 0 .5h-5.5a.25.25 0 0 1-.25-.25Z" />
          </svg>
          Select Pc ></button>
          <button  class="button2" disabled>
          <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor" class="bi bi-chat-right-dots" viewBox="0 0 16 16">
  <path d="M2 1a1 1 0 0 0-1 1v8a1 1 0 0 0 1 1h9.586a2 2 0 0 1 1.414.586l2 2V2a1 1 0 0 0-1-1H2zm12-1a2 2 0 0 1 2 2v12.793a.5.5 0 0 1-.854.353l-2.853-2.853a1 1 0 0 0-.707-.293H2a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2h12z"/>
  <path d="M5 6a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm4 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm4 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0z"/>
</svg>
                    Register Complaint</button>
      </div>
    </div>
  
    <div class="content">
      <div class="content_inside">
    
    </div>
    <div class="content_inside"></div>
      <br>
  
    <div class="content_inside content_inside_active">
    <div>

          <div>
            <h1 class="header">SELECT&nbsp;&nbsp;PC</h1>
          </div>
          <div class="search">
            <form class="d-flex mt-3" role="search">
              <input class="form-control me-2" type="search" placeholder="Search Lab" aria-label="Search">
              <button class="sbutton" type="submit">Search</button>
            </form>
          </div>

          <div class="ag-format-container">

            <div class="ag-courses_box">

              @foreach( $pc as $row )

              <div class="ag-courses_item">
                <div href="#" class="ag-courses-item_link">
                  <div class="ag-courses-item_bg"></div>

                  <div class="ag-courses-item_title">


                    {{ $row->computer_id }}
                    {{ $row->Computer_no }}

                    <br><br>
                    <a href="/pc/{{$row->computer_id}}/display"><button class="button-28" role="button">Enter</button></a>
                  </div>
                </div>
              </div>
              @endforeach
            </div>

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

        </body>

        </html>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
        </script>




      </div>
    </div>
  </div>
  </div>


</x-app-layout>