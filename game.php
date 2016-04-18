<!DOCTYPE html>
<html>
<link rel="stylesheet" type="text/css" href="game.css">  
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script> 
<script type="text/javascript" src="jquery.uilock.js"></script>
<script>
function givecolors(){

var buttons = document.getElementsByClassName("button");

var bgcolorlist=new Array( "#00FFFF", " #8A2BE2", "#DEB887", "#7FFF00", "#DC143C", "#00008B", " #8B008B", "#FF8C00","#FFD700"," #7CFC00","#800000","  #FFA500","#FF0000","#4169E1","#2E8B57","#EE82EE")
for (i = 0; i < buttons.length; i++) { 
   buttons[i].style.backgroundColor = bgcolorlist[Math.floor(Math.random()*bgcolorlist.length)]
  
  }
var x=0;
}
</script>
<script>
  //function to show the countdown in seconds until the web page is unfrozen (active) again
   function do_countdown(duration) {
   //10 seconds fix
   start_num = duration;
   var countdown_output = document.getElementById('countdown_div');

   if (start_num > 0) {
   countdown_output.innerHTML = format_as_time(start_num);
   var t=setTimeout("update_clock(\"countdown_div\", "+start_num+")", 1000);
   }

   return false;
   }

  //helper function to update the timer on the web page this is frozen
   function update_clock(countdown_div, new_value) {
   var countdown_output = document.getElementById(countdown_div);
   var new_value = new_value - 1;

   if (new_value > 0) {
   new_formatted_value = format_as_time(new_value);
   countdown_output.innerHTML = new_formatted_value;

   var t=setTimeout("update_clock(\"countdown_div\", "+new_value+")", 1000);
   } else {
    //finish!
    countdown_output.innerHTML = "";
    $('#countdown_box').hide();
    
    //unlock UI
    $.uiUnlock();
    
    //perform anything here after the web page is unfrozen
   }
   }

  //helper function to calculate the time (seconds) remaining as minutes and seconds
   function format_as_time(seconds) {
   var minutes = parseInt(seconds/60);
   var seconds = seconds - (minutes*60);

   if (minutes < 10) {
   minutes = "0"+minutes;
   }

   if (seconds < 10) {
   seconds = "0"+seconds;
   }

   var return_var = minutes+':'+seconds;

   return return_var;
   }
   </script>
   
   <script>
  //main function to Start the countdown
    function view_blog_countdown(duration) {
        
        $('#countdown_box').show(); //countdown
        
        $.uiLock('');
        //alert(duration);
        //performs countdown then unlocks
        do_countdown(duration);
    }
   </script>
    
  <script>
    //funciton to initialise a click event for the webpage buttons
    $(document).ready(function() {
      $('#lock').click(function(){
        
        //show content
        $('#countdown_box').show(); //countdown
        
        //lock interface
        $.uiLock('');
        
        //start the countdown (unlocks interface at end)
        do_countdown();
        
      });
      
      //Initial settings
      $('#countdown_box').hide();
      
    });
  </script> 
<body onload=givecolors(),myFunction()>
  <p id="demo1"></p>
  <p id="demo2"></p>
  <p id="demo3"></p>
  <h1>Player1 Score:  <span id ="demo4">0</span></h1>

  <div id="countdown_box">
   <div id="countdown_title">&nbsp;</div>
   <div id="countdown_div">&nbsp;</div>
   <div id="countdown_msg">Please take the time to check out their website. This window unfrezes in a few seconds.</div>
 </div>
  
<script>
function myFunction() {
    var person1 = prompt("Name of player1", "");
    var person2 = prompt("Name of player2", "");
    
    if (person1 != null) {
        document.getElementById("demo1").innerHTML =
        "Player1: " + person1 ;
    }
     if (person2 != null) {
        document.getElementById("demo2").innerHTML =
        "Player2: " + person2 ;
    }
    var bgcolorlist=new Array( "#DFDFFF", "#FFFFBF", "#80FF80", "#EAEAFF", "#C9FFA8", "#F7F7F7", "#FFFFFF", "#DDDD00"," #0000FF","  #DC143C","  #006400","#E9967A","  #00CED1","#FF00FF","  #4B0082","  #87CEFA","#FF00FF","#FF4500")
    var colorplayer1=bgcolorlist[Math.floor(Math.random()*bgcolorlist.length)]
    document.getElementById("demo3").innerHTML =colorplayer1;
    document.getElementById("demo3").style.color = document.getElementById("demo3").innerHTML;
    

}
</script>
	    

<div class="menu-container">
    <div class="button-container">
       
   
       <button class="button" onclick=xxx(this),view_blog_countdown(2)></button>
       <button class="button" onclick=xxx(this),view_blog_countdown(2)></button>
       <button class="button" onclick=xxx(this),view_blog_countdown(2)></button>
       <button class="button" onclick=xxx(this),view_blog_countdown(2)></button>
       <button class="button" onclick=xxx(this),view_blog_countdown(2)></button>
       <button class="button" onclick=xxx(this),view_blog_countdown(2)></button>
       <button class="button" onclick=xxx(this),view_blog_countdown(2)></button>
       <button class="button" onclick=xxx(this),view_blog_countdown(2)></button>
       <button class="button" onclick=xxx(this),view_blog_countdown(2)></button>
       <button class="button" onclick=xxx(this),view_blog_countdown(2)></button>
       <button class="button" onclick=xxx(this),view_blog_countdown(2)></button>
       <button class="button" onclick=xxx(this),view_blog_countdown(2)></button>
       <button class="button" onclick=xxx(this),view_blog_countdown(2)></button>
       <button class="button" onclick=xxx(this),view_blog_countdown(2)></button>
       <button class="button" onclick=xxx(this),view_blog_countdown(2)></button>
       <button class="button" onclick=xxx(this),view_blog_countdown(2)></button>
       <button class="button" onclick=xxx(this),view_blog_countdown(2)></button>
       <button class="button" onclick=xxx(this),view_blog_countdown(2)></button>
       <button class="button" onclick=xxx(this),view_blog_countdown(2)></button>
       <button class="button" onclick=xxx(this),view_blog_countdown(2)></button>
       <button class="button" onclick=xxx(this),view_blog_countdown(2)></button>
       <button class="button" onclick=xxx(this),view_blog_countdown(2)></button>
       <button class="button" onclick=xxx(this),view_blog_countdown(2)></button>
       <button class="button" onclick=xxx(this),view_blog_countdown(2)></button>
       <button class="button" onclick=xxx(this),view_blog_countdown(2)></button>
       <button class="button" onclick=xxx(this),view_blog_countdown(2)></button>
       <button class="button" onclick=xxx(this),view_blog_countdown(2)></button>

       
       </div>
</div>
 <script>
function xxx(elmnt) {
  
   var value = parseInt(document.getElementById('demo4').innerHTML );
    value++;
    document.getElementById('demo4').innerHTML = value;
    elmnt.style.backgroundColor = document.getElementById("demo3").innerHTML;
  }
  
</script>




</body>
</html>
