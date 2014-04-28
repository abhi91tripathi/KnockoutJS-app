<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN"
   "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
<title></title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">

<style type="text/css">
div {
    text-align:center;
 }
#pic{
    border:3px double #999;
 }
</style>

<script type="text/javascript">
   var c=0;
window.onload=function() {
document.getElementById('pic').onclick=function() {
   swapImage();
  }
 }
function swapImage() {
obj=document.getElementById('pic');
if(c==1) {
   obj.src='notification_hover.png';
   c=0;
 }
else {
   obj.src='user1.png';
   c=1;
 }
}
</script>

</head>
<body>

<div>
<img id="pic" src="user1.png" alt="apple"/>
</div>

</body>
</html>