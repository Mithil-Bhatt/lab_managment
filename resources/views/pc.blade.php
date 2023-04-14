<style>
  .ag-format-container {
    width: 1142px;
    margin: 0 auto;
  }

  * {
    box-sizing: border-box;
    font-family: 'Poppins', sans-serif;
  }

  body {
    background-color: #808080;
    margin: 0px;
  }


  .nav {
    height: 50px;
    width: 100%;
    background-color: #404040;
    position: relative;


  }

  .nav>.nav-header {
    display: inline;
  }

  .nav>.nav-header>.nav-title {
    display: inline-block;
    font-size: 23px;
    color: #fff;
    padding: 10px 10px 10px 10px;
  }

  .nav>.nav-btn {
    display: none;
  }

  .nav>.nav-links {
    display: inline;
    float: right;
    font-size: 18px;
  }

  .nav>.nav-links>a {
    display: inline-block;
    padding: 13px 10px 13px 10px;
    text-decoration: none;
    color: #f9b234;
  }

  .nav>.nav-links>a:hover {
    background-color: rgba(0, 0, 0, 0.3);
    color: #fff;
  }

  .nav>#nav-check {
    display: none;
  }

  @media (max-width:600px) {
    .nav>.nav-btn {
      display: inline-block;
      position: absolute;
      right: 0px;
      top: 0px;
    }

    .nav>.nav-btn>label {
      display: inline-block;
      width: 50px;
      height: 50px;
      padding: 13px;
    }

    .nav>.nav-btn>label:hover,
    .nav #nav-check:checked~.nav-btn>label {
      background-color: rgba(0, 0, 0, 0.3);
    }

    .nav>.nav-btn>label>span {
      display: block;
      width: 25px;
      height: 10px;
      border-top: 2px solid #eee;
    }

    .nav>.nav-links {
      position: absolute;
      display: block;
      width: 100%;
      background-color: #333;
      height: 0px;
      transition: all 0.3s ease-in;
      overflow-y: hidden;
      top: 50px;
      left: 0px;
    }

    .nav>.nav-links>a {
      display: block;
      width: 100%;
    }

    .nav>#nav-check:not(:checked)~.nav-links {
      height: 0px;
    }

    .nav>#nav-check:checked~.nav-links {
      height: calc(100vh - 50px);
      overflow-y: auto;
    }
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


  .search {
    position: relative;
    left: 35%;
    width: 30%;
    align-items: center;

  }

  .sbutton {
    background-color: #404040;
    color: #fff;
    border-radius: 10px;
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
</style>






<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('PC selection') }}
        </h2>
    </x-slot>



    <div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
      <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
        <div class="p-6 text-gray-900 dark:text-gray-100">

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
                    <a href="/pc"><button class="button-28" role="button">Enter</button></a>
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