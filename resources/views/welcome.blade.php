<!DOCTYPE html>
<html lang="en">
  @php
    
  
  header('Access-Control-Allow-Origin: *');
  @endphp
<head>
    <meta charset="UTF-8">
    <title>QR Code Scanner</title>
    <!-- Include HTML5 Qr Code Scanner library -->
    <!-- Include HTML5 Qr Code Scanner library from jsDelivr CDN -->
    <link rel="stylesheet" href="{{ asset('assets/css/myqr.css') }}">
    {{-- <link rel="stylesheet" href="{{ asset('assets/bootstrap/dist/css/bootstrap.min.css') }}"> --}}
    <script src="{{ asset('assets/axios/dist/axios.min.js') }}"></script>

    <script src="{{ asset('assets/jquery/dist/jquery.js') }}"></script>
    <script src="{{ asset('assets/html5-qrcode/html5-qrcode.min.js') }}"></script>
</head>

<body>
    <div class="mainbox">
        <div class="left">
            <div class="time">
              <img src="{{ asset('assets/imgs/icon.png') }}"  style="padding:10px; width:100px;left: 20px;" alt="">
              <div class="timebox">
                <p id="myTime"></p> |
                <p id="myDate"></p> 
              </div>
            </div>
            <div class="main">
                <div class="cam">
                  <div id="reader"></div>
                  <input type="hidden" id="idnum" placeholder="ID NUM">
                </div>
                <div class="info">
                  <div class="box">
                    <p class="tag">Workers ID:</p>
                    <p class="infoname" id="myId"></p>

                  </div>
                  <div class="box">
                    <p class="tag">Name:</p>
                    <p class="infoname" id="names"></p>
                  </div>
                  <div class="box">
                    <p class="tag">Time:</p>
                    <p class="infoname" id="time"></p>

                  </div>
                  <div class="box">
                    <p class="tag">Date:</p>
                    <p class="infoname" id="dateko"></p>

                  </div>
                  <div class="box">
                    <p class="tag">Status:</p>
                    <p class="infoname" id="status" style="font-size: 1.2em;"></p>

                  </div>
                </div>
            </div>
        </div>
        <div class="previous">
          <h3 class="logtext">Attendance Logs</h3>
          <hr>
          <div class="infodata">

          </div>
          
        </div>
    </div>






    <script src="{{ asset('assets/js/qr.js') }}"></script>
</body>

</html>
