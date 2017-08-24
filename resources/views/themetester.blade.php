<!DOCTYPE html>
<html>
<head>
<style> 
div {
    width: 100px;
    height: 100px;
    background: red;
    position :relative;
    -webkit-animation: mymove 20s infinite; /* Safari 4.0 - 8.0 */
    animation: mymove 20s infinite;
}

/* Safari 4.0 - 8.0 */
@-webkit-keyframes mymove {
    0%   {top: 0px; background-color:blue;}
    25%  {top: 200px; background-color:green;}
    75%  {top: 50px; background-color:red;}
    100% {top: 100px; background-color:gray;}
}

/* Standard syntax */
@keyframes mymove {
    0%   {top: 0px; background-color:blue;}
    25%  {top: 200px; background-color:green;}
    75%  {top: 50px; background-color:red;}
    100% {top: 100px; background-color:gray;}
}

</style>
</head>
<body>

<div></div>

</body>
</html>
