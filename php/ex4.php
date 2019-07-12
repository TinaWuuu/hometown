<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tour</title>
    <link rel="stylesheet" href="https://cdn.pannellum.org/2.4/pannellum.css"/>
    
    <script type="text/javascript" src="p.js"></script>
     <style>
    #panorama {
        width: 250px;
        height: 450px;
        position: relative; 
    }
    .custom-hotspot {
        height: 50px;
        width: 50px;
        position: absolute;
        background:url("./11.jpg") no-repeat;
    }
    #d1{
        height: 10px;
        width: 10px;
        background:red;
        position: absolute; 
        border-radius:10px;
        bottom:8%;
        left:30%;
    }
    #d2{
        height: 10px;
        width: 10px;
        background:grey;
        position: absolute; 
        border-radius:10px;
        bottom:18%;
        left:20%;
    }
    #d3{
        height: 10px;
        width: 10px;
        background:grey;
        position: absolute; 
        border-radius:10px;
        bottom:28%;
        left:10%;
    }
    a{
        display:block;
        width:10px;
        height:10px;
        border-radius:10px;
    }
     #d{
        height: 150px;
        width: 100px;
        background:url("./11.jpg") no-repeat;
        position: relative; 
         position: absolute;
        left: 43.5%;
        bottom:75.5%;
    }
    div.custom-tooltip span {
        visibility: hidden;
        position: absolute;
        border-radius: 3px;
        background-color: #fff;
        color: #000;
        text-align: center;
        max-width: 200px;
        padding: 5px 10px;
        margin-left: -220px;
        cursor: default;
    }
    div.custom-tooltip:hover span{
        visibility: visible;
    }
    div.custom-tooltip:hover span:after {
        content: '';
        position: absolute;
        width: 0;
        height: 0;
        border-width: 10px;
        border-style: solid;
        border-color: #fff transparent transparent transparent;
        bottom: -20px;
        left: -10px;
        margin: 0 50%;
    }
    </style>
</head>
<body>

<div id="panorama"></div>
<div id="d">
<div id="d1">
</div>
<div id="d2">
<a href="ex2.php" id="dd2"></a>
</div>
<div id="d3">
<a href="#" id="dd3"></a>
</div>
</div>

<script src="https://apps.bdimg.com/libs/jquery/2.1.4/jquery.min.js"></script>

<script>
let aa= {   
    "default": {
        "firstScene": "circle",
        "sceneFadeDuration": 1000
    },
   "compass": true,
    "autoLoad": true,
    "scenes": {
        "circle": {
            "title": "Mason Circle",
            "hfov": 110,
            "pitch": -3,
            "yaw": 117,
            "type": "equirectangular",
            "panorama": "11.jpg",
            "hotSpots": [
            ]
        }
    }
};
/*var a=[{"pitch":"12","yaw":"50","type":"info","text":"p","URL":"hot.php"},
{"pitch":"56","yaw":"88","type":"info","text":"dsuhifhi","URL":"hot.php"}];*/
$.post("hott.php", function(data){
    var a1=eval(data);
    for(i=0;i<a1.length;i++){
    a1[i]['pitch']=parseInt(a1[i]['pitch']);
    a1[i]['yaw']=parseInt(a1[i]['yaw']);
    }
aa.scenes.circle.hotSpots=a1;
console.log(aa);
pannellum.viewer('panorama',aa);
//console.log(mouseEventToCoords('panorama'));
});

//var a1=eval(a);

/*pannellum.viewer('panorama', {   
    "default": {
        "firstScene": "circle",
        "sceneFadeDuration": 1000
    },
   "compass": true,
    "autoLoad": true,
    "scenes": {
        "circle": {
            "title": "Mason Circle",
            "hfov": 110,
            "pitch": -3,
            "yaw": 117,
            "type": "equirectangular",
            "panorama": "11.jpg",
            "hotSpots": [
              
                {"pitch":12,"yaw":50,"type":"info","text":"p","URL":"hot.php"},
                {"pitch":56,"yaw":88,"type":"info","text":"dsuhifhi","URL":"hot.php"}
            ]
        }
    }
});*/

</script>
</body>
</html>


