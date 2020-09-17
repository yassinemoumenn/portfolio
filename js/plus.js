// var sec = document.getElementById("about");

// sec.addEventListener("mouseenter" , move);

// function move() {
//     // console.log(window.scrollY);
//     // if (window.scrollY >= 210 && window.scrollY <= 1120){
//     var elem = document.getElementById("bar");
//     var width = 10;
//     var id = setInterval(frame, 50);
//     function frame() {
//         if (width >= 80) {
//             clearInterval(id);
//         } else {
//             width++;
//             elem.style.width = width + '%';
//             document.getElementById("label").innerHTML = width * 1 + '%';
//         }
//     }

// //

//     var elem1 = document.getElementById("bar1");
//     var width1 = 10;
//     var id1 = setInterval(frame1, 50);
//     function frame1() {
//         if (width1 >= 70) {
//             clearInterval(id1);
//         } else {
//             width1++;
//             elem1.style.width = width1 + '%';
//             document.getElementById("label1").innerHTML = width1 * 1 + '%';
//         }
//     }

// //

//     var elem2 = document.getElementById("bar2");
//     var width2 = 10;
//     var id2= setInterval(frame2, 50);
//     function frame2() {
//         if (width2 >= 50) {
//             clearInterval(id2);
//         } else {
//             width2++;
//             elem2.style.width = width2 + '%';
//             document.getElementById("label2").innerHTML = width2 * 1 + '%';
//         }
//     }

// //

//     var elem3 = document.getElementById("bar3");
//     var width3 = 10;
//     var id3 = setInterval(frame3, 50);
//     function frame3() {
//         if (width3 >= 50) {
//             clearInterval(id3);
//         } else {
//             width3++;
//             elem3.style.width = width3 + '%';
//             document.getElementById("label3").innerHTML = width3 * 1 + '%';
//         }
//     }

// //

//     var elem4 = document.getElementById("bar4");
//     var width4 = 10;
//     var id4 = setInterval(frame4, 50);
//     function frame4() {
//         if (width4 >= 70) {
//             clearInterval(id4);
//         } else {
//             width4++;
//             elem4.style.width = width4 + '%';
//             document.getElementById("label4").innerHTML = width4 * 1 + '%';
//         }
//     }

// };
// // sucribt
// $(document).ready(function() {

//     var delay = 2000; // milliseconds
//     var cookie_expire = 0; // days

//     var cookie = localStorage.getItem("list-builder");
//     if(cookie == undefined || cookie == null) {
//         cookie = 0;
//     }

//     if(((new Date()).getTime() - cookie) / (1000 * 60 * 60 * 24) > cookie_expire) {
//         $("#list-builder").delay(delay).fadeIn("fast", () => {
//             $("#popup-box").fadeIn("fast", () => {});
//         });

//         $("button[name=subscribe]").click(() => {
//             $.ajax({
//                 type: "POST",
//                 url: $("#popup-form").attr("action"),
//                 data: $("#popup-form").serialize(),
//                 success: (data) => {
//                     $("#popup-box-content").html("<p style='text-align: center'>Thank you for subscribing to The Polyglot Developer newsletter!</p>");
//                 }
//             });
//         });

//         $("#popup-close").click(() => {
//             $("#list-builder, #popup-box").hide();
//             localStorage.setItem("list-builder", (new Date()).getTime());
//         });
//     }

//     });
