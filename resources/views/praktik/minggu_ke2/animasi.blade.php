<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>animasi</title>
    <style>

        @keyframes slide {
            0%{
                left: 0;
                top: 0;
            }
            50%{
                left: 244px;
                top: 100px;
            }
            100%{
                left: 488px;
                top: 0;
            }
            
        }
        .body{
            padding: 0;
            margin: 0;
        }
        .stage{
            background-color: grey;
            border-radius: 6px;
            height: 150px;
            position: relative;
            min-width: 538px;
        }
        .ball{
            background-color: blue;
            border-radius: 50%;
            height: 50px;
            position: absolute;
            min-width: 50px;
        }
        .stage:hover .ball{
            animation-name: slide;
            animation-duration: 2s;
            animation-timing-function:ease-in-out ;
            animation-delay: .5s ;
            animation-direction: alternate;
            animation-iteration-count: infinite;
        }
    </style>
</head>
<body>
    <div class="stage">
        <div class="ball"></div>
    </div>
</body>
</html>