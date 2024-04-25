let scanningEnabled = true;

function displayAttendees() {
    $.ajax({
        url: "http://127.0.0.1:8000/api/attendees",
        type: "GET",
        success: function (result) {
            $(".infodata").empty();

            result.log.forEach((datas) => {
                let prevBox = `
                <div class="prevbox">
                <img src="http://localhost:8000/assets/imgs/icon.png" alt="" class="iconic">

                <div class="timeboxes">
    
                  <div class="prev-box"><div class="prevbox-title">Name:</div>  <p>&nbsp; ${datas.staff.firstname} ${datas.staff.lastname}</p></div>
                  <hr class="line">
                  <div class="prev-box"><div class="prevbox-title">Date:</div>  <p>&nbsp; ${datas.date}</p></div>
                  <hr class="line">
                  <div class="prev-box"><div class="prevbox-title">Time:</div>  <p>&nbsp; ${datas.time}</p></div>
                  <hr class="line">
                  <div class="prev-box"><div class="prevbox-title">Status:</div>  <p>&nbsp; ${datas.status}</p></div>
                  <hr class="line">
                </div>
                
              </div>
         
        `;

                $(".infodata").prepend(prevBox); // Add new prev box at the beginning
            });
        },
    });
}
displayAttendees();
const scanner = new Html5QrcodeScanner("reader", {
    qrbox: {
        width: 250,
        height: 250,
    },
    fps: 20,
});
let prev = 0;
scanner.render(success, error);
let d = new Date();
function success(result) {
    if (!scanningEnabled) {
        return; // Exit if scanning is disabled
    }

    // Disable scanning for 5 seconds
    scanningEnabled = false;
    setTimeout(() => {
        scanningEnabled = true;
    }, 5000); // 5 seconds delay

    $.ajaxSetup({
        headers: {
            "X-CSRF-TOKEN": jQuery('meta[name="csrf-token"]').attr("content"),
        },
    });
    document.getElementById("idnum").value = result;

    prev = document.getElementById("idnum").value;

    if (prev) {
        // setTimeout(()=>{
        $.ajax({
            url: "http://127.0.0.1:8000/api/employee",
            type: "GET",
            data: {
                workersID: prev,
            },
            success: function (result) {
                document.getElementById("idnum").value = "";

                console.log(result);
                document.getElementById(
                    "myId"
                ).innerHTML = `${result.staff.workers_id}`;

                document.getElementById("names").innerHTML =
                    result.staff.firstname.toUpperCase() +
                    " " +
                    result.staff.middlename[0].toUpperCase() +
                    ". " +
                    result.staff.lastname.toUpperCase();
                let myTime =
                    (d.getHours() < 10
                        ? "0" + d.getHours()
                        :d.getHours() / 2) +
                    ":" +
                    (d.getMinutes() < 10
                        ? "0" + d.getMinutes()
                        : d.getMinutes()) +
                    ":" +
                    (d.getSeconds() < 10
                        ? "0" + d.getSeconds()
                        : d.getSeconds()) +
                    "  " +
                    (d.getHours() < 12 ? "AM" : "PM");
                document.getElementById("time").innerHTML = `${myTime}`;
                console.log(object)
                // getDate
                document.getElementById("dateko").innerHTML = myDate();

                if (result.status) {
                    document.getElementById("status").innerHTML = result.msg;
                }

                updatePrevBox(result);
            },
            error: function (err) {
                console.log(err.responseText);
                document.getElementById(
                    "status"
                ).innerHTML = `Not Yet Registered`;
                document.getElementById("time").innerHTML = ``;
                document.getElementById("dateko").innerHTML = "";
                document.getElementById("names").innerHTML = "";
                document.getElementById("myId").innerHTML = "";
            },
        });
        // },5000)
    }
}
function error(err) {
    console.log(err);
    setInterval(function () {
        document.getElementById("status").innerHTML = `Scanning...`;
        // document.getElementById("time").innerHTML = ``;
        // document.getElementById("dateko").innerHTML = "";
        // document.getElementById("names").innerHTML = "";
        // document.getElementById("myId").innerHTML = "";
    }, 5000);
}

function myDate() {
    let day = new Date();
    let word = "";
    let month = day.getMonth() + 1;
    let days = day.getDate();
    let year = day.getFullYear();

    switch (month) {
        case 1:
            word = "January";
            break;
        case 2:
            word = "February";
            break;
        case 3:
            word = "March";
            break;
        case 4:
            word = "April";
            break;
        case 5:
            word = "May";
            break;
        case 6:
            word = "June";
            break;
        case 7:
            word = "July";
            break;
        case 8:
            word = "August";
            break;
        case 9:
            word = "September";
            break;
        case 10:
            word = "October";
            break;
        case 11:
            word = "November";
            break;
        case 12:
            word = "December";
            break;
    }
    return word + " " + days + ", " + year;
}

function updatePrevBox(result) {
    $(".infodata").empty();
    result.log.forEach((datas) => {
        let prevBox = `
            <div class="prevbox">
            <img src="http://localhost:8000/assets/imgs/icon.png" alt="" class="iconic">
            <div class="timeboxes">

              <div class="prev-box"><div class="prevbox-title">Name:</div>  <p>&nbsp; ${datas.staff.firstname} ${datas.staff.lastname}</p></div>
              <hr class="line">
              <div class="prev-box"><div class="prevbox-title">Date:</div>  <p>&nbsp; ${datas.date}</p></div>
              <hr class="line">
              <div class="prev-box"><div class="prevbox-title">Time:</div>  <p>&nbsp; ${datas.time}</p></div>
              <hr class="line">
              <div class="prev-box"><div class="prevbox-title">Status:</div>  <p>&nbsp; ${datas.status}</p></div>
              <hr class="line">
            </div>
            
          </div>
     
    `;

        $(".infodata").prepend(prevBox); // Add new prev box at the beginning
    });
}

setInterval(timer, 1000);

function timer() {
    let d = new Date();
    let hours =
        d.getHours() < 10
            ? "0" + (d.getHours() % 12)
            : (d.getHours() % 12);
    let zone = d.getHours() < 12 ? "AM" : "PM";
    let min = d.getMinutes() < 10 ? "0" + d.getMinutes() : d.getMinutes();
    let sec = d.getSeconds() < 10 ? "0" + d.getSeconds() : d.getSeconds();

    document.getElementById(
        "myTime"
    ).innerHTML = `${hours}:${min}:${sec} ${zone} `;
    document.getElementById("myDate").innerHTML = myDate();
}
