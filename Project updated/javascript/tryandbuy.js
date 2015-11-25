


//for changing pic
var change=setInterval(changePic, 3000);
var picIndex=0;
function changePic(){

  var myImage=document.getElementById("change");
  var arr=new Array();
  arr[0]="../images/indexpage/homepage_header1.jpg";
  arr[1]="../images/indexpage/homepage_header2.jpg";
  arr[2]="../images/indexpage/homepage_header3.jpg";
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
//changing pic End


 // <!-- this part realized by tinycarousel -->
$(document).ready(function()
{
    $('#slider1').tinycarousel();

});
//tinycarousel End

//quality buttons
$(function(){
	$(".add").click(function(){
    var t=$(this).parent().find('input[class=text_box]');
		t.val(parseInt(t.val())+1);
	})
	$(".sub").click(function(){
      var t=$(this).parent().find('input[class=text_box]');
      if(t.val()>0){
      t.val(parseInt(t.val())-1);
    }
	});
});

//quality End

//enlarge product pic
var timeoutId;
$(document).ready(function(){
$(".smallImg").hover(function(){
  var self = this;
  timeoutId=null;
  timeoutId=setTimeout(function(){
  $("p#addImage").append('<img id=bigImage src="'+ self.rel + '" alt="" />');
  $(self).find("img").stop().fadeTo("slow",0.5);}, 2000);
  }

  ,function(){
  window.clearTimeout(timeoutId);
  $(this).find("img").stop().fadeTo("slow",1);
  $("img#bigImage").remove();
  });
});


var flag=0;
$('#show-quick-cart-zone').mouseenter(function () {
   document.getElementById("show-quick-cart-zone").style.zIndex = "1";
    $('#quickcart').slideDown(500);
    return false;
});
$('#account-cart-div').mouseleave(function () {
    $('#quickcart').slideUp(500);
    return false;
});

//enlarge end
