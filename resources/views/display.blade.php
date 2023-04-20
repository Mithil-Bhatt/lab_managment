<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>

<style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap');

    textarea {
        margin-top: 10px;
        margin-left: 50px;
        width: 500px;
        height: 90px;
        -moz-border-bottom-colors: none;
        -moz-border-left-colors: none;
        -moz-border-right-colors: none;
        -moz-border-top-colors: none;
        background: none repeat scroll 0 0 rgba(0, 0, 0, 0.07);
        border-color: -moz-use-text-color #FFFFFF #FFFFFF -moz-use-text-color;
        border-image: none;
        border-radius: 6px 6px 6px 6px;
        border-style: none solid solid none;
        border-width: medium 1px 1px medium;
        box-shadow: 0 1px 2px rgba(0, 0, 0, 0.12) inset;
        color: #555555;
        font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
        font-size: 1em;
        line-height: 1.4em;
        padding: 5px 8px;
        transition: background-color 0.2s ease 0s;
    }


    textarea:focus {
        background: none repeat scroll 0 0 #FFFFFF;
        outline-width: 0;
    }


    .button1 {
        border-radius: 50%;
        appearance: none;
        background-color: transparent;
        border: 2px solid #fff;
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
        width: 15%;
        will-change: transform;
    }

    .select1 {
        border-radius: 50%;
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
label{
    color:#FFFFFF;
    font-size: 25px;
    font-weight: bold;
}
.details{
    margin: auto;
  width: 60%;
  border: 3px solid #fff;
  background-color: #fff;
  padding: 10px;
}
.form-wrapper {
    margin: auto;
  padding: 10px;
      width: 690px;
      height: 680px;
      padding: 30px 17px 17px 17px;
      border-radius: 40px;
      background: #696969;
      box-shadow: 8px 8px 15px #404040,
      -8px -8px 15px #404040;
        align-items: center;
      justify-content: center;
    }
    .header{
        text-align: center;
    font-weight: bold;
    font-size: 50px;
    color: #fff;
    }
    .header1{
        text-align: center;
    font-weight: bold;
    font-size: 60px;
    color: #f9b234;
    }
    .hr1{
        color: #fff;
        height: 10px;
    }


.box select {
  background-color: #404040;
  color: white;
  padding: 12px;
  width: 250px;
  border:1px solid #fff;
  font-size: 20px;
  box-shadow: 0 5px 25px rgba(0, 0, 0, 0.2);
  -webkit-appearance: button;
  appearance: none;
  outline: none;
  border-radius: 10px;
  
}

.box select option {
  padding: 30px;
}

</style>





<x-app-layout>
<div class="container">
        <br><br>
        <div class="menu">
            <div class="breadcrumbs">
                <button class="button2" disabled>
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
                    Select Pc ></button>
                    <button class="button_active" class="button2" >
          <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor" class="bi bi-chat-right-dots" viewBox="0 0 16 16">
  <path d="M2 1a1 1 0 0 0-1 1v8a1 1 0 0 0 1 1h9.586a2 2 0 0 1 1.414.586l2 2V2a1 1 0 0 0-1-1H2zm12-1a2 2 0 0 1 2 2v12.793a.5.5 0 0 1-.854.353l-2.853-2.853a1 1 0 0 0-.707-.293H2a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2h12z"/>
  <path d="M5 6a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm4 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm4 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0z"/>
</svg>
                    Register Complaint</button>


                    
            </div>
        </div>
<br>
<div class="form-wrapper">
<h1 class="header1">Register Complaint</h1>
<br>






<hr class="hr1">
    <form action="/display" method="POST">
        @csrf

        <input type="hidden" name="computer_id" value="{{ $pc->first()->computer_id }}">
        <input type="hidden" name="lab_id" value="{{ $pc->first()->lab_id }}">


        <h1 class="header">
            @foreach($pc as $row)
            
            Computer:no {{$row->Computer_no}} 
            
            @endforeach
        </h1><br>
        <div class="box">
        <label class="control-label" for="inputEmail">Hardware Name</label>
        <select name="hardware_name" class="chzn-select">
            @foreach( $data as $row )
            <option value="{{ $row->id }}">{{ $row->hardware_name }}</option>
            @endforeach
        </select><br><br>

        <label class="control-label" for="inputEmail">Software Name</label>
        <select name="software_name" class="chzn-select">
            @foreach( $data1 as $row )
            <option value="{{ $row->id }}">{{ $row->software_name }}</option>
            @endforeach
        </select><br><br>

        <label for="image-upload">Upload Image of error:</label>
         <input type="file" id="image-upload" name="image"><br><br><br>

         <label class="control-label" for="inputEmail">Feedback <textarea placeholder="write down your problem" rows="20" name="feedback" id="comment_text" cols="40" class="ui-autocomplete-input" autocomplete="off" role="textbox" aria-autocomplete="list" aria-haspopup="true"></textarea></label> <br> <br><br>

        <div id="liveAlertPlaceholder"></div>
        <button class="button1" type="button" style="background-color:#555555;" id="liveAlertBtn">Submit</button>
    </form>



    <br><br>
</div>
<br>
<br>
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

        <script>
            const alertPlaceholder = document.getElementById('liveAlertPlaceholder')
            const appendAlert = (message, type) => {
                const wrapper = document.createElement('div')
                wrapper.innerHTML = [
                    `<div class="alert alert-${type} alert-dismissible" role="alert">`,
                    `   <div>${message}</div>`,
                    '   <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>',
                    '</div>'
                ].join('')

                alertPlaceholder.append(wrapper)
            }

            const alertTrigger = document.getElementById('liveAlertBtn')
            if (alertTrigger) {
                alertTrigger.addEventListener('click', () => {
                    appendAlert('Thank You!, we try to solve problem in 6 hours.', 'success')
                })
            }
        </script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</x-app-layout>