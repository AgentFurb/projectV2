// Hide and show the different section of the website.
$(document).ready(function(){
  $("#launch").click(function(){
    $(".main-page").hide();
    $(".sec2").hide();
    $(".graph-page").hide();
    $(".check-page").show();
  });
  $("#check").click(function(){
      $(".main-page").hide();
      $(".sec2").hide();
      $(".graph-page").show();
    //   Wait 3.3 seconds before showing the graph section so you can see the animation
        setTimeout(function() {
          $('.check-page').hide();
        }, 3300);
      $('#rocket').addClass('rocket-ani');
  });
  $("#reset").click(function(){
      $(".main-page").show();
      $(".sec2").show();
      $(".graph-page").hide();
      $(".check-page").hide();
  });
});
// Disable launch button for 25s, so it can check every module
// $(document).ready(function(){
//     $("#launch").click(function(){
//         $('#check').prop('disabled', true);
//         setTimeout(function() {
//             $('#check').prop('disabled', false);
//         }, 25000);
//     });
// });

// Add 2 line charts with static data
$(document).ready(function(){
// Graph for acceleration
  var ctx = $('#myChart');

  var myChart = new Chart(ctx, {
    type: 'line',
    data: {
        labels: ['1s', '2s', '3s', '4s', '5s', '6s'],
        datasets: [{
            label: 'Acceleratie in m/s',
            data: [0, 19, 40, 37, 14, 0],
            backgroundColor: [
                'rgba(177,117,255, 0.2)',
            ],
            borderColor: [
                'rgba(45,22,116, 1)',
            ],
            borderWidth: 1
        }]
    },
    options: {
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero: true
                }
            }]
        }
    }
  });
//   Graph for postion
  var ctx = $('#myChart2');

  var myChart2 = new Chart(ctx, {
    type: 'line',
    data: {
        labels: ['10', '20', '30', '40', '50', '60'],
        datasets: [{
            label: 'Positie',
            data: [0, 19, 3, 5, 2, 0],
            backgroundColor: [
                'rgba(177,117,255, 0.2)',
            ],
            borderColor: [
                'rgba(45,22,116, 1)',
            ],
            borderWidth: 1
        }]
    },
    options: {
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero: true
                }
            }]
        }
    }
  });
});

// TypeWrinting animation on the check section using typewriting.min.js from github.com/eddiewentw/TypeWriting.js
$(document).ready(function(){
    $("#launch").click(function(){
        const typeWriting = new TypeWriting({
            targetElement   : document.getElementsByClassName('check-list')[0],
            inputString     : 'connecting...<br/>bluetooth connection established<br/><br/>loading modules...<br/>modules loaded<br/><br/>checking temperatuurmeter...<br/>online<br/>checking barometer...<br/>online<br/>checking accelerometer...<br/>online<br/>checking gyroscoop…<br/>online<br/><br/>rocket is operational<br/>ready for launch...',
            typingInterval  : 80,
            blinkInterval   : '1s',
            cursorColor     : '#29FE10',
        }, () => console.log('END'));
    });
});