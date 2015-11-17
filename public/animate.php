<!DOCTYPE>
<html>
<head>
    <title></title>
    <style type="text/css">
    #blueBox{
        display:block;
        background: blue;
        height:250;
        width:250;
        position: absolute;
    }
    </style>
    <link rel="stylesheet" type="text/css" href="/css/animate_exercise.css">
</head>
<body>
    <button id="move">move</button>
    <button id="scale">scale</button>
    <button id="hide">hide</button>
    <button id="show">show</button>
    <button id="animate">animate all</button>
    <div id="blueBox"></div>

    <button id="animateStar">Star GOOOO!!!</button>
    <div id="starContainer">
            <div class="starPivot" id="starPivot1"><div class="starPoint"></div></div>
            <div class="starPivot" id="starPivot2"><div class="starPoint"></div></div>
            <div class="starPivot" id="starPivot3"><div class="starPoint"></div></div>
    </div>
    <div id="ground"></div>
    <script src="/js/jquery.js"></script>
    <script type="text/javascript">
    "use strict";
    (function (){
        var star1 = $('#starPivot1');
        var star2 = $('#starPivot2');
        var star3 = $('#starPivot3');
        var star = $("#starContainer");
        var starcont = document.getElementById('starContainer');
        var starPivot1 = document.getElementById('starPivot1');
        var starPivot2 = document.getElementById('starPivot2');
        var starPivot3 = document.getElementById('starPivot3');


        $("#animateStar").click(function (){
            var left = 400;
            var top = 200;
            var deg = 15;
            var width = 120;
            var height =120;
            var innerTop = 60;
            var innerLeft = 60;
            setInterval(function(){
                deg += 2;
                left+=2;
                top-=.2;
                width+=.2;
                height+=.2;
                innerLeft +=.1;
                innerTop +=.1;

                starcont.style.transform = 'rotate(' + deg + 'deg)';
                starcont.style.left =  left + 'px';
                starcont.style.top = top + 'px';
                starcont.style.width = width +'px';
                starcont.style.height = height + 'px';
                starPivot1.style.top = innerTop + 'px';
                starPivot1.style.left = innerLeft + 'px';
                starPivot2.style.top = innerTop + 'px';
                starPivot2.style.left = innerLeft + 'px';
                starPivot3.style.top = innerTop + 'px';
                starPivot3.style.left = innerLeft + 'px';
            },15);
        })




        var blueBox = $('#blueBox');
        $('#move').click(function(){
            blueBox.animate({
                top:'50px',
                left:'50px'
            },500);
        });
        $('#scale').click(function(){
            blueBox.animate({
                height:'200px',
                width:'200px'
            });
        });
        $('#hide').click(function (){
            blueBox.fadeOut();
        })
        $('#show').click(function(){
            blueBox.fadeIn();
        });
        $('#animate').click(function(){
            blueBox.animate({
                top:'50px',
                left:'50px'
            },500).animate({
                height:'200px',
                width:'200px'
            },500).fadeOut().fadeIn()
        });














    })();
    </script>

</body>
</html>
