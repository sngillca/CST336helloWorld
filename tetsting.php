<!DOCTYPE html>
<html>
<head>
<style>
div {
    width: 100px;
    height: 100px;
  background-image:  url("/labs/lab3/img/stars.png");
    -webkit-animation-name: example; /* Safari 4.0 - 8.0 */
    -webkit-animation-duration: 4s; /* Safari 4.0 - 8.0 */
    animation-name: example;
    animation-duration: 4s;
}

/* Safari 4.0 - 8.0 */


/* Standard syntax */
@keyframes example {
    25%   {background-image:  url("/labs/lab3/img/stars.png");}
    25%  {background-color: url("/labs/lab3/img/buns.png");}
    
}
</style>
</head>
<body>

<p><b>Note:</b> This example does not work in Internet Explorer 9 and earlier versions.</p>

<div></div>

</body>
</html>

