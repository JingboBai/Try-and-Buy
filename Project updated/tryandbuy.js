


//for changing pic
var change=setInterval(changePic, 3000);
var picIndex=0;
function changePic(){

  var myImage=document.getElementById("change");
  var arr=new Array();
  arr[0]="images/indexpage/homepage_header1.jpg";
  arr[1]="images/indexpage/homepage_header2.jpg";
  arr[2]="images/indexpage/homepage_header3.jpg";
  if (picIndex==arr.length-1)
   {
       picIndex=0;
   }
   else
   {
       picIndex+=1;
   }
  myImage.src=arr[picIndex];
}

 // <!-- this part realized by tinycarousel -->
$(document).ready(function()
{
    $('#slider1').tinycarousel();

});
