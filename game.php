<!DOCTYPE html>
<html>
<link rel="stylesheet" type="text/css" href="game.css">  
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script> 
<script>
function givecolors(){

var buttons = document.getElementsByClassName("button");

var bgcolorlist=new Array( "#DFDFFF", "#FFFFBF", "#80FF80", "#EAEAFF", "#C9FFA8", "#F7F7F7", "#FFFFFF", "#DDDD00"," #0000FF","  #DC143C","  #006400","#E9967A","  #00CED1","#FF00FF","  #4B0082","  #87CEFA","#FF00FF","#FF4500")
for (i = 0; i < buttons.length; i++) { 
   buttons[i].style.backgroundColor = bgcolorlist[Math.floor(Math.random()*bgcolorlist.length)]
  
     // buttons[i].style.backgroundColor.display=none;

}

}

</script> 

<body onload=givecolors()>
  <p id="demo1"></p>
  <p id="demo2"></p>


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

}
</script>
	    

<div class="menu-container">
    <div class="button-container">
       
       <!-- <button class="button" id="b1" onclick=red()>Button</button> 
       <button class="button" id="b1" onclick=red()>Button</button>
       <button class="button" id="b1" onclick=red()>Button</button> 
       <button class="button" id="b1" onclick=red()>Button</button>
       <button class="button" id="b1" onclick=red()>Button</button> 
       <button class="button" id="b1" onclick=red()>Button</button>
       <button class="button" id="b1" onclick=red()>Button</button> 
       <button class="button" id="b1" onclick=red()>Button</button>
       <button class="button" id="b1" onclick=red()>Button</button> 
       <button class="button" id="b1" onclick=red()>Button</button>
       <button class="button" id="b1" onclick=red()>Button</button> 
       <button class="button" id="b1" onclick=red()>Button</button> -->







       <!-- <button class="button" onclick=red()>Button</button>
       <button class="button" onclick=red()>Button</button> -->
       <button class="button" onclick="xxx(this, 'red')">Button</button>
       <button class="button" onclick="xxx(this, 'red')">Button</button>

       <button class="button" onclick="xxx(this, 'red')">Button</button>
       <button class="button" onclick="xxx(this, 'red')">Button</button>
       <button class="button" onclick="xxx(this, 'red')">Button</button>
       <button class="button" onclick="xxx(this, 'red')">Button</button>
       <button class="button" onclick="xxx(this, 'red')">Button</button>
       <button class="button" onclick="xxx(this, 'red')">Button</button>
       <button class="button" onclick="xxx(this, 'red')">Button</button>
       <button class="button" onclick="xxx(this, 'red')">Button</button>
       <button class="button" onclick="xxx(this, 'red')">Button</button>
       <button class="button" onclick="xxx(this, 'red')">Button</button>
       <button class="button" onclick="xxx(this, 'red')">Button</button>
       <button class="button" onclick="xxx(this, 'red')">Button</button>
       <button class="button" onclick="xxx(this, 'red')">Button</button>
       <button class="button" onclick="xxx(this, 'red')">Button</button>
       </div>
</div>
 <script>
function xxx(elmnt,clr) {
    elmnt.style.backgroundColor = clr;
    var start = new Date().getTime();
  for (var i = 0; i < 1e7; i++) {
    if ((new Date().getTime() - start) > 2000){
      break;
    }
  }
}
</script>




</body>
</html>