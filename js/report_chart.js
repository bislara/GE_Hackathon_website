 window.onload = function () {

        
        var emg_points = [15,12,38,21,10,34,32,19,23.15,11];

        var data1=[640,650,400,850,550,380,900,675,481,700,320];

        var data2=[17,21,18,20,16,22,19,20,23,18,17];


        var chart = new CanvasJS.Chart("chartContainer", {
          animationEnabled: true,
          theme: "dark2",
          title:{
            text: "Burst duration"
          },
          axisY:{
            includeZero: false,
            gridThickness: 0,
          },
          data: [{        
            type: "line",       
            dataPoints: [
              { x:1, y: 450 },
              { x:2, y: 414},
              { x:3, y: 520},
              { x:4, y: 460 },
              { x:5, y: 450 },
              { x:6, y: 500 },
              { x:7, y: 480 },
              { x:8, y: 480 },
              { x:9, y: 410 },
              { x:10, y: 500 },
              { x:11,y: 480 },
              { x:12,y: 510 }
            ]
          }]
        });

        chart.render();

        var chart2 = new CanvasJS.Chart("chartContainer11", {
          animationEnabled: true,
          theme: "dark2",
          title:{
            text: "Magnitude"
          },
          axisY:{
            includeZero: false,
            gridThickness: 0,
          },
          data: [{        
            type: "line",       
            dataPoints: [
              { x:1, y: 450 },
              { x:2, y: 414},
              { x:3, y: 520},
              { x:4, y: 460 },
              { x:5, y: 450 },
              { x:6, y: 500 },
              { x:7, y: 480 },
              { x:8, y: 480 },
              { x:9, y: 410 },
              { x:10, y: 500 },
              { x:11,y: 480 },
              { x:12,y: 510 }
            ]
          }]
        });

        chart2.render();
    
  }

