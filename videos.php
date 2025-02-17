<html>
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scale=No">
    <body>
        <style>
              @import url('https://fonts.googleapis.com/css2?family=Roboto+Serif:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');
@import url('https://fonts.googleapis.com/css2?family=Marcellus&display=swap');
@font-face { font-family: ROM Mono; src: url('IMG/ABCROM-Light-Trial.otf'); }
@font-face { font-family: ROM Mono Bold; src: url('IMG/ABCROM-Medium-Trial.otf'); }  
@font-face { font-family: ROM Wide Bold; src: url('IMG/ABCROMWide-Bold-Trial.otf'); } 
@font-face { font-family: ROM Ext Black; src: url('IMG/ABCROMExtended-Black-Trial.otf'); } 
@font-face { font-family: ROM Wide Reg; src: url('IMG/ABCROMWide-Regular-Trial.otf'); } 
            body{
                width:500px;
                margin: 0;
                padding: 0;
            }
            .head{
                    background-color: #000000e3;
                    width: 500px;
                    height:100px;
                }
                .head h2{
                    text-align: center;
                    padding-top: 30px;
                    color:white;
                    font-family: "ROM Wide Bold",sans-serif;
                }
                #text1{

font-size: 35px;
padding: 25px;
text-align: center;
margin-top: 40px;
font-family: "ROM Ext Black",sans-serif;

                }
                #vid1{
    display: block;
    position: absolute;

    margin-left: 0px;
}
#vid2{
    display:none;
    position: absolute;
    margin-top: 0px;
    margin-left: 0px;
}
#vid3{
    display:none;
    position: absolute;
    margin-top: 0px;
    margin-left: 0px;
}
#vid4{
    display:none;
    position: absolute;
    margin-top: 0px;
    margin-left: 0px;
}
#vid5{
    display:none;
    position: absolute;
    margin-top: 0px;
    margin-left: 0px;
}
#vid6{
    display:none;
    position: absolute;
    margin-top: 0px;
    margin-left: 0px;
}
#vid7{
    display:none;
    position: absolute;
    margin-top: 0px;
    margin-left: 0px;
}
#vid8{
    display:none;
    position: absolute;
    margin-top: 0px;
    margin-left: 0px;
}
#vid9{
    display:none;
    position: absolute;
    margin-top: 0px;
    margin-left: 0px;
}
#mobi{
    display:block;
    background-color: rgba(0, 0, 0, 0);
    width:500px;
    height:50px;
  }

.gate{
  width: 280px;
  height:46px;
  overflow: hidden;
  
  margin-left: 120px;
  margin-top: 300px;
  background-color: rgb(0, 0, 0);
  border-radius: 14px;
}

.gate h6{
  color: white;
    font-size: 15px;
    transform: translateY(-110%);
    position: absolute;
    padding-left: 100px;
    font-family: "ROM Ext Black",sans-serif;
  transition: 0.9s;
}
.gate img{
  width:17%;
  float:left;
  margin-left: 0px;
}
.imgcon{
  transform: translateX(-10%);
}
.gate button{
  width:50px;
  margin: 0;
  border: none;
  padding: 0;
  cursor: pointer;
  height:50px;
  transform: translate(370%,-5%);
  border-radius: 15px;
  background-color: white;
}
.overlay1 {
  height: 100%;
  width: 0%;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: rgb(255, 255, 255);
  background-color: rgba(255, 255, 255, 0.9);
  overflow-x: hidden;
  transition: 0.5s;
}

.overlay-content1 {
  position: relative;
  top: 25%;
  overflow-x: scroll;
  width: 100%;
  text-align: center;
  margin-top: 30px;
}

  .vide{
    width:400px;
    height:300px;  
    float: left;
    
    margin-right: 50px;
    background-color: none;
  }
  #zeroo{
    background-color: black; 
  }
  #cov{
    width:80%;
    opacity: 0.8;
  }
  .overlay {
  height: 100%;

  width: 0;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: rgba(0, 0, 0,0.95);
  overflow-x: hidden;
  transition: 0.5s;
}

.overlay-content {
  position: relative;
  top: 25%;
  overflow-x: scroll;
  width: 100%;
  text-align: center;
  margin-top: 30px;
}

.overlay a {
  padding: 8px;
  text-decoration: none;
  font-size: 36px;
  font-family: "ROM Ext Black",sans-serif;
  color: #000000;
  display: block;
  transition: 0.3s;
}

.overlay a:hover, .overlay a:focus {
  color: #f1f1f1;
}

.overlay .closebtn {
  position: absolute;
  top: 20px;
  right: 45px;
  font-size: 60px;
}

@media screen and (max-width: 500px) {

  body{
    width:auto;
  }
  .overlay a {font-size: 20px}
  .overlay .closebtn {
  font-size: 40px;
  top: 15px;
  right: 35px;
  }
}
.overlay1 a {
  padding: 8px;
  text-decoration: none;
  font-size: 36px;
  font-family: "ROM Ext Black",sans-serif;
  color: #000000;
  display: block;
  transition: 0.3s;
}

.overlay1 a:hover, .overlay1 a:focus {
  color: #f1f1f1;
}

.overlay1 .closebtn {
  position: absolute;
  top: 20px;
  right: 45px;
  font-size: 60px;
}
.gall{
    width:5000px;
    height:300px;
    margin-bottom: 65px;
    margin-left: 50px;


  }
  #tit{
    font-size: 25px;
    color:white;
    font-family: "ROM Mono Bold",sans-serif;

    margin-top: 25px;
  }
#tit1{
  font-size: 25px;
    color:white;
    font-family: "ROM Mono Bold",sans-serif;
    margin-top: 25px;
}
#tit2{
  font-size: 25px;
    color:white;
    font-family: "ROM Mono Bold",sans-serif;

    margin-top: 25px;
}
#tit3{
  font-size: 25px;
    color:white;
    font-family: "ROM Mono Bold",sans-serif;
    margin-top: 25px;
}

  #tit4{
    font-size: 25px;
    color:white;
    font-family: "ROM Mono Bold",sans-serif;
    margin-top: 25px;
}
#tit5{
  font-size: 25px;
    color:white;
    font-family: "ROM Mono Bold",sans-serif;
    margin-top: 25px;
}
#tit6{
  font-size: 25px;
    color:white;
    font-family: "ROM Mono Bold",sans-serif;
    margin-top: 25px;
}
#tit7{
  font-size: 25px;
    color:white;
    font-family: "ROM Mono Bold",sans-serif;
    margin-top: 25px;
}
#tit8{
  font-size: 25px;
    color:white;
    font-family: "ROM Mono Bold",sans-serif;
    margin-top: 25px;
}
@media screen and (max-width: 500px) {
  .overlay a {font-size: 20px}
  .overlay .closebtn {
  font-size: 40px;
  top: 25px;
  right: 35px;
  }
}
@media screen and (max-width: 490px) {
  .overlay .closebtn {
  font-size: 40px;
  top: 25px;
  right: 35px;
  }
  .head{
    width:490px;
  }
  body{
    width:490px;
    overflow: hidden;
  }
  iframe{
    width:490px;
  }
}
@media screen and (max-width: 480px) {
  .overlay .closebtn {
  font-size: 40px;
  top: 25px;
  right: 35px;
  }
  .head{
    width:480px;
  }
  body{
    width:480px;
    overflow: hidden;
  }
  iframe{
    width:480px;
  }
}
@media screen and (max-width: 470px) {
  .overlay .closebtn {
  font-size: 40px;
  top: 25px;
  right: 35px;
  }
  .head{
    width:470px;
  }
  #text1{

font-size: 28px;
padding: 25px;
text-align: center;
margin-top: 40px;
font-family: "ROM Ext Black",sans-serif;

  }
  body{
    width:470px;
    overflow: hidden;
  }
  iframe{
    width:470px;
    transform: translateY(-10%);
  }
  .gate{
    margin-left: 110px;
  }
}
@media screen and (max-width: 460px) {
  .overlay .closebtn {
  font-size: 40px;
  top: 25px;
  right: 35px;
  }
  .head{
    width:460px;
  }
  #text1{

font-size: 28px;
padding: 25px;
text-align: center;
margin-top: 40px;
font-family: "ROM Ext Black",sans-serif;

  }
  body{
    width:460px;
    overflow: hidden;
  }
  iframe{
    width:460px;
    transform: translateY(-10%);
  }
  .gate{
    margin-left: 100px;
  }
}
@media screen and (max-width: 450px) {
  .overlay .closebtn {
  font-size: 40px;
  top: 25px;
  right: 35px;
  }
  .vide{
    width:300px;
    height:250px;  
    float: left;
    
    margin-right: 40px;
    background-color: none;
  }
  .head{
    width:450px;
  }
  #text1{

font-size: 28px;
padding: 25px;
text-align: center;
margin-top: 40px;
font-family: "ROM Ext Black",sans-serif;

  }

  iframe{
    width:450px;
    transform: translateY(-10%);
  }
  
  body{
    width:450px;
    overflow: hidden;
  }
  iframe{
    width:450px;
  }
  .gate{
    margin-left: 90px;
  }
}
@media screen and (max-width: 440px) {
  .overlay .closebtn {
  font-size: 40px;
  top: 25px;
  right: 35px;
  }
  .head{
    width:440px;
  }
  #text1{

font-size: 28px;
padding: 25px;
text-align: center;
margin-top: 40px;
font-family: "ROM Ext Black",sans-serif;

  }

  iframe{
    width:440px;
    transform: translateY(-10%);
  }
  
  body{
    width:440px;
    overflow: hidden;
  }
  iframe{
    width:440px;
  }
  .gate{
    margin-left: 80px;
  }
}
@media screen and (max-width: 430px) {
  .overlay .closebtn {
  font-size: 40px;
  top: 25px;
  right: 35px;
  }
  .head{
    width:430px;
  }
  #text1{

font-size: 28px;
padding: 25px;
text-align: center;
margin-top: 40px;
font-family: "ROM Ext Black",sans-serif;

  }

  iframe{
    width:430px;
    transform: translateY(-10%);
  }
  
  body{
    width:430px;
    overflow: hidden;
  }
  iframe{
    width:430px;
  }
  .gate{
    margin-left: 80px;
  }
}
@media screen and (max-width: 420px) {
  .overlay .closebtn {
  font-size: 40px;
  top: 25px;
  right: 35px;
  }
  .head{
    width:420px;
  }
  #text1{

font-size: 26px;
padding: 25px;
text-align: center;
margin-top: 40px;
font-family: "ROM Ext Black",sans-serif;

  }

  iframe{
    width:420px;
    transform: translateY(-10%);
  }
  
  body{
    width:420px;
    overflow: hidden;
  }
  iframe{
    width:420px;
  }
  .gate{
    margin-left: 80px;
  }
}
@media screen and (max-width: 410px) {

  .overlay .closebtn {
  font-size: 40px;
  top: 25px;
  right: 35px;
  }
  .head{
    width:410px;
  }
  #text1{

font-size: 26px;
padding: 25px;
text-align: center;
margin-top: 40px;
font-family: "ROM Ext Black",sans-serif;

  }

  iframe{
    width:410px;
    transform: translateY(-10%);
  }
  
  body{
    width:410px;
    overflow: hidden;
  }
  iframe{
    width:410px;
  }
  .gate{
    margin-left: 80px;
  }
}
@media screen and (max-width: 400px) {
  .overlay .closebtn {
  font-size: 40px;
  top: 25px;
  right: 35px;
  }
  .vide{
    width:300px;
    height:250px;  
    float: left;
    
    margin-right: 40px;
    background-color: none;
  }
  .head{
    width:400px;
  }
  #text1{

font-size: 26px;
padding: 25px;
text-align: center;
margin-top: 40px;
font-family: "ROM Ext Black",sans-serif;

  }

  iframe{
    width:400px;
    transform: translateY(-10%);
  }
  
  body{
    width:400px;
    overflow: hidden;
  }
  iframe{
    width:400px;
  }
  .gate{
    margin-left: 70px;
  }
}
@media screen and (max-width: 390px) {
  .overlay .closebtn {
  font-size: 40px;
  top: 25px;
  right: 35px;
  }
  .vide{
    width:300px;
    height:250px;  
    float: left;
    
    margin-right: 40px;
    background-color: none;
  }
  .head{
    width:390px;
  }
  #text1{

font-size: 26px;
padding: 25px;
text-align: center;
margin-top: 40px;
font-family: "ROM Ext Black",sans-serif;

  }

  iframe{
    width:390px;
    transform: translateY(-10%);
  }
  
  body{
    width:390px;
    overflow: hidden;
  }
  
  iframe{
    width:390px;
  }
  .gate{
    margin-left: 70px;
  }
  .head h2{
    font-size: 20px;
  }
}
@media screen and (max-width: 380px) {
  .overlay .closebtn {
  font-size: 40px;
  top: 25px;
  right: 35px;
  }
  .vide{
    width:300px;
    height:250px;  
    float: left;
    
    margin-right: 40px;
    background-color: none;
  }
  .head{
    width:380px;
  }
  #text1{

font-size: 26px;
padding: 25px;
text-align: center;
margin-top: 40px;
font-family: "ROM Ext Black",sans-serif;

  }

  iframe{
    width:380px;
    transform: translateY(-10%);
  }
  
  body{
    width:380px;
    overflow: hidden;
  }
  
  iframe{
    width:380px;
  }
  .gate{
    margin-left: 60px;
  }
  .head h2{
    font-size: 20px;
  }
}
@media screen and (max-width: 370px) {
  .overlay .closebtn {
  font-size: 40px;
  top: 25px;
  right: 35px;
  }
  .vide{
    width:300px;
    height:250px;  
    float: left;
    
    margin-right: 40px;
    background-color: none;
  }
  .head{
    width:370px;
  }
  #text1{

font-size: 26px;
padding: 25px;
text-align: center;
margin-top: 40px;
font-family: "ROM Ext Black",sans-serif;

  }

  iframe{
    width:370px;
    transform: translateY(-10%);
  }
  
  body{
    width:370px;
    overflow: hidden;
  }
  
  iframe{
    width:370px;
  }
  .gate{
    margin-left: 55px;
  }
  .head h2{
    font-size: 20px;
  }
}
@media screen and (max-width: 360px) {
  .overlay .closebtn {
  font-size: 40px;
  top: 25px;
  right: 35px;
  }
  .vide{
    width:300px;
    height:250px;  
    float: left;
    
    margin-right: 40px;
    background-color: none;
  }
  .head{
    width:360px;
  }
  #text1{

font-size: 22px;
padding: 25px;
text-align: center;
margin-top: 40px;
font-family: "ROM Ext Black",sans-serif;

  }

  iframe{
    width:360px;
    transform: translateY(-10%);
  }
  
  body{
    width:360px;
    overflow: hidden;
  }
  
  iframe{
    width:360px;
  }
  .gate{
    margin-left: 55px;
  }
  .head h2{
    font-size: 20px;
  }
  
  .gate{

    margin-left: 50px;
    margin-top: 265px;

  }
}
@media screen and (max-width: 350px) {
  .overlay .closebtn {
  font-size: 40px;
  top: 25px;
  right: 35px;
  }
  .vide{
    width:300px;
    height:250px;  
    float: left;
    
    margin-right: 40px;
    background-color: none;
  }
  .head{
    width:350px;
  }
  #text1{

font-size: 22px;
padding: 25px;
text-align: center;
margin-top: 40px;
font-family: "ROM Ext Black",sans-serif;

  }
  .gate{

margin-left: 50px;
margin-top: 265px;

}
  iframe{
    width:350px;
    transform: translateY(-10%);
  }
  
  body{
    width:350px;
    overflow: hidden;
  }
  
  iframe{
    width:350px;
  }

  .head h2{
    font-size: 20px;
  }
}
@media screen and (max-width: 340px) {
  .overlay .closebtn {
  font-size: 40px;
  top: 25px;
  right: 35px;
  }
  .vide{
    width:300px;
    height:250px;  
    float: left;
    
    margin-right: 40px;
    background-color: none;
  }
  .head{
    width:340px;
  }
  #text1{

font-size: 22px;
padding: 25px;
text-align: center;
margin-top: 40px;
font-family: "ROM Ext Black",sans-serif;

  }

  iframe{
    width:340px;
    transform: translateY(-10%);
  }
  
  body{
    width:340px;
    overflow: hidden;
  }
  
  iframe{
    width:340px;
  }

  .head h2{
    font-size: 20px;
  }
  .gate{

margin-left: 35px;
margin-top: 265px;

}
}
@media screen and (max-width: 330px) {
  .overlay .closebtn {
  font-size: 40px;
  top: 25px;
  right: 35px;
  }
  .vide{
    width:300px;
    height:250px;  
    float: left;
    
    margin-right: 40px;
    background-color: none;
  }
  .head{
    width:330px;
  }
  #text1{

font-size: 22px;
padding: 25px;
text-align: center;
margin-top: 40px;
font-family: "ROM Ext Black",sans-serif;

  }

  iframe{
    width:330px;
    transform: translateY(-10%);
  }
  
  body{
    width:330px;
    overflow: hidden;
  }
  
  iframe{
    width:330px;
  }

  .head h2{
    font-size: 20px;
  }
  .gate{

margin-left: 35px;
margin-top: 265px;

}
}
@media screen and (max-width: 320px) {
  .overlay .closebtn {
  font-size: 40px;
  top: 25px;
  right: 35px;
  }
  .vide{
    width:300px;
    height:250px;  
    float: left;
    
    margin-right: 40px;
    background-color: none;
  }
  .head{
    width:320px;
  }
  #text1{

font-size: 22px;
padding: 25px;
text-align: center;
margin-top: 40px;
font-family: "ROM Ext Black",sans-serif;

  }

  iframe{
    width:320px;
    transform: translateY(-10%);
  }
  
  body{
    width:320px;
    overflow: hidden;
  }
  
  iframe{
    width:320px;
  }

  .head h2{
    font-size: 18px;
  }
  .gate{

margin-left: 30px;
margin-top: 265px;

}
}
@media screen and (max-width: 310px) {
  .overlay .closebtn {
  font-size: 40px;
  top: 25px;
  right: 35px;
  }
  .vide{
    width:300px;
    height:250px;  
    float: left;
    
    margin-right: 40px;
    background-color: none;
  }
  .head{
    width:310px;
  }
  #text1{

font-size: 20px;
padding: 25px;
text-align: center;
margin-top: 40px;
font-family: "ROM Ext Black",sans-serif;

  }

  iframe{
    width:310px;
    transform: translateY(-10%);
  }
  
  body{
    width:310px;
    overflow: hidden;
  }
  
  iframe{
    width:310px;
  }

  .head h2{
    font-size: 18px;
  }
  .gate{

margin-left: 20px;
margin-top: 265px;

}
}
@media screen and (max-width: 300px) {
  .overlay .closebtn {
  font-size: 40px;
  top: 25px;
  right: 35px;
  }
  .vide{
    width:300px;
    height:250px;  
    float: left;
    
    margin-right: 40px;
    background-color: none;
  }
  .head{
    width:300px;
  }
  #text1{

font-size: 20px;
padding: 25px;
text-align: center;
margin-top: 40px;
font-family: "ROM Ext Black",sans-serif;

  }

  iframe{
    width:300px;
    transform: translateY(-10%);
  }
  
  body{
    width:300px;
    overflow: hidden;
  }
  
  iframe{
    width:300px;
  }

  .head h2{
    font-size: 18px;
  }
  .gate{

margin-left: 30px;
margin-top: 265px;

}
}
html,body{
  overflow-x: hidden;
}

                /*
            @media screen and (max-height: 500px){
                .head{
                    background-color: #000000e3;
                    width: 500px;
                    height:100px;
                }
                .head h2{
                    text-align: center;
                    padding-top: 30px;
                    color:white;
                    font-family: "ROM Wide Bold",sans-serif;
                }
                h1{


font-family: "ROM Ext Black",sans-serif;
                }
            }
            */
            @media screen and (max-height: 1000px){

}
        </style>
<div id = "haha">
            <div id="myNav1" class="overlay1" style="width:0%;">
      <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
      <div class="overlay-content1">
        <a href="index.php">Home</a>
        <a href="RES/Z3NITH'23 Results.pdf">Results</a>
        <a href="team.html">Our Team</a>
        <a href="video.php">Videos</a>
        <a href="home.php#slideshow">The Vault</a>        
      </div>
    </div>
    <div id="myNav" class="overlay">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNavi()"><img id = "buton" src = "IMG/Group 1 (3).png"></a>
        <div class="overlay-content">
          <div class = "gall">
            <div class = "vide" id ="zeroo" onclick="playItZero()">
              <img id = "cov" src = "IMG/VIDEOTHUMB/Frame 1 (13).png">
              <h4 id = "tit">Z3NITH'23 | Trailer</h4>
            </div>
            <div class = "vide" id = "onee" onclick="playItOne()">
              <img id = "cov" src = "IMG/VIDEOTHUMB/zeroT.png">
              <h4 id = "tit1">Z3NITH'23 | Teaser</h4>
            </div>
            <div class = "vide" id = "twoo" onclick="playItTwo()">
              <img id = "cov" src = "IMG/VIDEOTHUMB/teaser22.png">
              <h4 id = "tit2">Z3NITH'22 | Trailer</h4>
            </div>
            <div class = "vide" id = "thrr" onclick="playItThr()">
              <img id = "cov" src = "IMG/VIDEOTHUMB/e11e.png">
              <h4 id = "tit3">Z3NITH'22 | Teaser</h4>
            </div>
            <div class = "vide" id = "fourr" onclick="playItFour()">
              <img id = "cov" src = "IMG/VIDEOTHUMB/four.png">
              <h4 id = "tit4">Z3NITH 2K21 | Trailer</h4>
            </div>
            <div class = "vide" id = "fivv" onclick="playItFive()">
              <img id = "cov" src = "IMG/VIDEOTHUMB/fivv.png">
              <h4 id = "tit5">Z3NITH'20 | Trailer</h4>
            </div>
            <div class = "vide" id = "sixx" onclick="playItSix()">
              <img id = "cov" src = "IMG/VIDEOTHUMB/sixx.png">
              <h4 id = "tit6">Z3NITH'19 | Trailer</h4>
            </div>
            <div class = "vide" id = "sevv" onclick="playItSev()">
              <img id = "cov" src = "IMG/VIDEOTHUMB/sevv.png">
              <h4 id = "tit7">Z3NITH'18 | Trailer</h4>
            </div>
            <div class = "vide" id = "eigg" onclick="playItEig()">
              <img id = "cov" src = "IMG/VIDEOTHUMB/eig.png">
              <h4 id = "tit8">Z3NITH'17 | Trailer</h4>
            </div>
          </div>
        </div>
      </div>

            <div class = "head" id = "hed">

            <h2 onclick="openNavi()">Videos • <u><strong id = "actual">Z3NITH’23 | Trailer</strong></u></h2>
            <h1 id = "text1">Z3NITH'23 | Trailer </h1>
            <iframe id = "vid1" width="500" height="250" src="https://www.youtube.com/embed/zMDJWq8-JdU" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>            
                <iframe id = "vid2" width="500" height="250" src="https://www.youtube.com/embed/zZk0F9yvb4A" title="Z3NITH&#39;23 | Teaser #shorts" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                <iframe id = "vid3" width="500" height="250" src="https://www.youtube.com/embed/VROaUIA-ACs" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                <iframe id = "vid4" width="500" height="250" src="https://www.youtube.com/embed/5Vc6nkNHsyA" title="ZENITH&#39;22 TEASER | #shorts" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                <iframe id = "vid5" width="500" height="250" src="https://www.youtube.com/embed/7M50LH8Gw8c" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                <iframe id = "vid6" width="500" height="250" src="https://www.youtube.com/embed/rXvGnig0VQU?controls=0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>            
                <iframe id = "vid7" width="500" height="250" src="https://www.youtube.com/embed/95kbdhlDFdE" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>            
                <iframe id = "vid8" width="500" height="250" src="https://www.youtube.com/embed/JjguhXUWHds" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>            
                <iframe id = "vid9" width="500" height="250" src="https://www.youtube.com/embed/V608MMmU0Tk" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>            
                    <div id = "mobi">
                  <div class = "gate" id = "gates">
                      <img src = "IMG/Group 42.png">
                      <h6>Videos</h6>
                      <button onclick="openNav()">☰</button>
                  </div> 
              </div>
              </div>
              <script>
      function openNav() {
        document.getElementById("myNav1").style.width = "100%";

        document.getElementById("myNav1").style.transition = "0.8s";
      }
      
      function closeNav() {
        document.getElementById("myNav1").style.width = "0%";

        document.getElementById("myNav1").style.transition = "0.8s";
      }

      function openNavi(){

                  document.getElementById("myNav").style.width = "100%";
      
                  document.getElementById("myNav").style.transition = "0.8s";
                  
      }

      function closeNavi(){
                  document.getElementById("myNav").style.width = "0%";
                  document.getElementById("myNav").style.height = "100%";
                  document.getElementById("myNav").style.transition = "0.8s";
      }
      function playItOne(){
          document.getElementById("myNav").style.height = "0%";
          document.getElementById("onee").style.background="black";
          document.getElementById("onee").style.transtion="0.8s";
          var headingValue = document.getElementById("tit1").innerText;

          document.getElementById("zeroo").style.background="none";
          document.getElementById("zeroo").style.transtion="0.8s";
          document.getElementById("twoo").style.background="none";
          document.getElementById("twoo").style.transtion="0.8s";
          document.getElementById("actual").innerHTML=headingValue;
          document.getElementById("text1").innerHTML=headingValue;
          document.getElementById("vid2").style.display="block";
          document.getElementById("vid1").style.display="none";
          document.getElementById("vid3").style.display="none";
          document.getElementById("thrr").style.background="none";
          document.getElementById("thrr").style.transtion="0.8s";
          document.getElementById("vid4").style.display="none"; 
          document.getElementById("vid5").style.display="none"; 
          document.getElementById("fourr").style.background="none";
          document.getElementById("fourr").style.transtion="0.8s";
          document.getElementById("fivv").style.background="none";
          document.getElementById("fivv").style.transtion="0.8s";
          document.getElementById("sixx").style.background="none";
          document.getElementById("sixx").style.transtion="0.8s";
          document.getElementById("sevv").style.background="none";
          document.getElementById("sevv").style.transtion="0.8s";
          document.getElementById("vid6").style.display="none"; 
          document.getElementById("vid7").style.display="none"; 
          document.getElementById("vid8").style.display="none"; 
          document.getElementById("vid9").style.display="none"; 
          closeNavi()
        }
        function playItZero(){
          document.getElementById("myNav").style.height = "0%";
          document.getElementById("zeroo").style.background="black";
          document.getElementById("zeroo").style.transtion="0.8s";
          var headingValue = document.getElementById("tit").innerText;

          document.getElementById("onee").style.background="none";
          document.getElementById("onee").style.transtion="0.8s";
          document.getElementById("actual").innerHTML=headingValue;
          document.getElementById("text1").innerHTML=headingValue;
          document.getElementById("vid1").style.display="block";
          document.getElementById("vid2").style.display="none";
          document.getElementById("vid3").style.display="none";
          document.getElementById("thrr").style.background="none";
          document.getElementById("thrr").style.transtion="0.8s";
          document.getElementById("vid4").style.display="none";  
          document.getElementById("vid5").style.display="none"; 
          document.getElementById("fourr").style.background="none";
          document.getElementById("fourr").style.transtion="0.8s";
          document.getElementById("fivv").style.background="none";
          document.getElementById("fivv").style.transtion="0.8s";
          document.getElementById("sixx").style.background="none";
          document.getElementById("sixx").style.transtion="0.8s";
          document.getElementById("sevv").style.background="none";
          document.getElementById("sevv").style.transtion="0.8s";
          document.getElementById("vid6").style.display="none"; 
          document.getElementById("vid8").style.display="none"; 
          document.getElementById("vid7").style.display="none"; 
          document.getElementById("vid9").style.display="none";
          closeNavi() 
        }
        function playItTwo(){
          document.getElementById("myNav").style.height = "0%";
          document.getElementById("twoo").style.background="black";
          document.getElementById("twoo").style.transtion="0.8s";
          var headingValue = document.getElementById("tit2").innerText;
          document.getElementById("onee").style.background="none";
          document.getElementById("onee").style.transtion="0.8s";
          document.getElementById("zeroo").style.background="none";
          document.getElementById("zeroo").style.transtion="0.8s";
          document.getElementById("actual").innerHTML=headingValue;
          document.getElementById("text1").innerHTML=headingValue;
          document.getElementById("vid1").style.display="none";
          document.getElementById("vid2").style.display="none";
          document.getElementById("vid3").style.display="block";
          document.getElementById("thrr").style.background="none";
          document.getElementById("thrr").style.transtion="0.8s";
          document.getElementById("fourr").style.background="none";
          document.getElementById("fourr").style.transtion="0.8s";
          document.getElementById("fivv").style.background="none";
          document.getElementById("fivv").style.transtion="0.8s";
          document.getElementById("sixx").style.background="none";
          document.getElementById("sixx").style.transtion="0.8s";
          document.getElementById("sevv").style.background="none";
          document.getElementById("sevv").style.transtion="0.8s";
          document.getElementById("vid4").style.display="none";   
          document.getElementById("vid5").style.display="none"; 
          document.getElementById("vid7").style.display="none"; 
          document.getElementById("vid6").style.display="none"; 
          document.getElementById("vid8").style.display="none"; 
          document.getElementById("vid9").style.display="none"; 
          closeNavi()
        }
        function playItThr(){
          document.getElementById("myNav").style.height = "0%";
          document.getElementById("thrr").style.background="black";
          document.getElementById("thrr").style.transtion="0.8s";
          var headingValue = document.getElementById("tit3").innerText;
          document.getElementById("onee").style.background="none";
          document.getElementById("onee").style.transtion="0.8s";
          document.getElementById("zeroo").style.background="none";
          document.getElementById("zeroo").style.transtion="0.8s";
          document.getElementById("twoo").style.background="none";
          document.getElementById("twoo").style.transtion="0.8s";
          document.getElementById("fivv").style.background="none";
          document.getElementById("fivv").style.transtion="0.8s";
          document.getElementById("fourr").style.background="none";
          document.getElementById("fourr").style.transtion="0.8s";
          document.getElementById("sixx").style.background="none";
          document.getElementById("sixx").style.transtion="0.8s";
          document.getElementById("sevv").style.background="none";
          document.getElementById("sevv").style.transtion="0.8s";
          document.getElementById("actual").innerHTML=headingValue;
          document.getElementById("text1").innerHTML=headingValue;
          document.getElementById("vid1").style.display="none";
          document.getElementById("vid2").style.display="none";
          document.getElementById("vid3").style.display="none";
          document.getElementById("vid4").style.display="block";  
          document.getElementById("vid5").style.display="none"; 
          document.getElementById("vid6").style.display="none"; 
          document.getElementById("vid7").style.display="none"; 
          document.getElementById("vid8").style.display="none"; 
          document.getElementById("vid9").style.display="none"; 
          closeNavi()
        }
        function playItFour(){
          document.getElementById("myNav").style.height = "0%";
          document.getElementById("fourr").style.background="black";
          document.getElementById("fourr").style.transtion="0.8s";
          var headingValue = document.getElementById("tit4").innerText;
          document.getElementById("onee").style.background="none";
          document.getElementById("onee").style.transtion="0.8s";
          document.getElementById("zeroo").style.background="none";
          document.getElementById("zeroo").style.transtion="0.8s";
          document.getElementById("twoo").style.background="none";
          document.getElementById("twoo").style.transtion="0.8s";
          document.getElementById("thrr").style.background="none";
          document.getElementById("thrr").style.transtion="0.8s";
          document.getElementById("fivv").style.background="none";
          document.getElementById("fivv").style.transtion="0.8s";
          document.getElementById("sixx").style.background="none";
          document.getElementById("sixx").style.transtion="0.8s";
          document.getElementById("sevv").style.background="none";
          document.getElementById("sevv").style.transtion="0.8s";
          document.getElementById("eigg").style.background="none";
          document.getElementById("eigg").style.transtion="0.8s";
          document.getElementById("actual").innerHTML=headingValue;
          document.getElementById("text1").innerHTML=headingValue;
          document.getElementById("vid1").style.display="none";
          document.getElementById("vid2").style.display="none";
          document.getElementById("vid3").style.display="none";
          document.getElementById("vid4").style.display="none";  
          document.getElementById("vid5").style.display="block"; 
          document.getElementById("vid6").style.display="none"; 
          document.getElementById("vid7").style.display="none"; 
          document.getElementById("vid9").style.display="none"; 
          document.getElementById("vid8").style.display="none"; 
          closeNavi()
        }
        function playItFive(){
          document.getElementById("myNav").style.height = "0%";
          document.getElementById("fivv").style.background="black";
          document.getElementById("fivv").style.transtion="0.8s";
          var headingValue = document.getElementById("tit5").innerText;
          document.getElementById("onee").style.background="none";
          document.getElementById("onee").style.transtion="0.8s";
          document.getElementById("zeroo").style.background="none";
          document.getElementById("zeroo").style.transtion="0.8s";
          document.getElementById("twoo").style.background="none";
          document.getElementById("twoo").style.transtion="0.8s";
          document.getElementById("thrr").style.background="none";
          document.getElementById("thrr").style.transtion="0.8s";
          document.getElementById("fourr").style.background="none";
          document.getElementById("fourr").style.transtion="0.8s";
          document.getElementById("sixx").style.background="none";
          document.getElementById("sixx").style.transtion="0.8s";
          document.getElementById("sevv").style.background="none";
          document.getElementById("sevv").style.transtion="0.8s";
          document.getElementById("eigg").style.background="none";
          document.getElementById("eigg").style.transtion="0.8s";
          document.getElementById("actual").innerHTML=headingValue;
          document.getElementById("text1").innerHTML=headingValue;
          document.getElementById("vid1").style.display="none";
          document.getElementById("vid2").style.display="none";
          document.getElementById("vid3").style.display="none";
          document.getElementById("vid4").style.display="none";  
          document.getElementById("vid5").style.display="none"; 
          document.getElementById("vid6").style.display="block"; 
          document.getElementById("vid7").style.display="none"; 
          document.getElementById("vid8").style.display="none"; 
          document.getElementById("vid9").style.display="none"; 
          closeNavi()
        }
        function playItSix(){
          document.getElementById("myNav").style.height = "0%";
          document.getElementById("sixx").style.background="black";
          document.getElementById("sixx").style.transtion="0.8s";
          var headingValue = document.getElementById("tit6").innerText;
          document.getElementById("onee").style.background="none";
          document.getElementById("onee").style.transtion="0.8s";
          document.getElementById("zeroo").style.background="none";
          document.getElementById("zeroo").style.transtion="0.8s";
          document.getElementById("twoo").style.background="none";
          document.getElementById("twoo").style.transtion="0.8s";
          document.getElementById("thrr").style.background="none";
          document.getElementById("thrr").style.transtion="0.8s";
          document.getElementById("fourr").style.background="none";
          document.getElementById("fourr").style.transtion="0.8s";
          document.getElementById("fivv").style.background="none";
          document.getElementById("fivv").style.transtion="0.8s";
          document.getElementById("sevv").style.background="none";
          document.getElementById("sevv").style.transtion="0.8s";
          document.getElementById("eigg").style.background="none";
          document.getElementById("eigg").style.transtion="0.8s";
          document.getElementById("actual").innerHTML=headingValue;
          document.getElementById("text1").innerHTML=headingValue;
          document.getElementById("vid1").style.display="none";
          document.getElementById("vid2").style.display="none";
          document.getElementById("vid3").style.display="none";
          document.getElementById("vid4").style.display="none";  
          document.getElementById("vid5").style.display="none"; 
          document.getElementById("vid6").style.display="none"; 
          document.getElementById("vid8").style.display="none"; 
          document.getElementById("vid7").style.display="block"; 
          document.getElementById("vid9").style.display="none"; 
          closeNavi()
        }
        function playItSev(){
          document.getElementById("myNav").style.height = "0%";
          document.getElementById("sevv").style.background="black";
          document.getElementById("sevv").style.transtion="0.8s";
          var headingValue = document.getElementById("tit7").innerText;
          document.getElementById("onee").style.background="none";
          document.getElementById("onee").style.transtion="0.8s";
          document.getElementById("zeroo").style.background="none";
          document.getElementById("zeroo").style.transtion="0.8s";
          document.getElementById("twoo").style.background="none";
          document.getElementById("twoo").style.transtion="0.8s";
          document.getElementById("thrr").style.background="none";
          document.getElementById("thrr").style.transtion="0.8s";
          document.getElementById("fourr").style.background="none";
          document.getElementById("fourr").style.transtion="0.8s";
          document.getElementById("fivv").style.background="none";
          document.getElementById("fivv").style.transtion="0.8s";
          document.getElementById("eigg").style.background="none";
          document.getElementById("eigg").style.transtion="0.8s";
          document.getElementById("sixx").style.background="none";
          document.getElementById("sixx").style.transtion="0.8s";
          document.getElementById("actual").innerHTML=headingValue;
          document.getElementById("text1").innerHTML=headingValue;
          document.getElementById("vid1").style.display="none";
          document.getElementById("vid2").style.display="none";
          document.getElementById("vid3").style.display="none";
          document.getElementById("vid4").style.display="none";  
          document.getElementById("vid5").style.display="none"; 
          document.getElementById("vid6").style.display="none"; 
          document.getElementById("vid7").style.display="none"; 
          document.getElementById("vid9").style.display="none"; 
          document.getElementById("vid8").style.display="block"; 
          closeNavi()
        }
        function playItEig(){
          document.getElementById("myNav").style.height = "0%";
          document.getElementById("eigg").style.background="black";
          document.getElementById("eigg").style.transtion="0.8s";
          var headingValue = document.getElementById("tit8").innerText;
          document.getElementById("onee").style.background="none";
          document.getElementById("onee").style.transtion="0.8s";
          document.getElementById("zeroo").style.background="none";
          document.getElementById("zeroo").style.transtion="0.8s";
          document.getElementById("twoo").style.background="none";
          document.getElementById("twoo").style.transtion="0.8s";
          document.getElementById("thrr").style.background="none";
          document.getElementById("thrr").style.transtion="0.8s";
          document.getElementById("fourr").style.background="none";
          document.getElementById("fourr").style.transtion="0.8s";
          document.getElementById("fivv").style.background="none";
          document.getElementById("fivv").style.transtion="0.8s";
          document.getElementById("sixx").style.background="none";
          document.getElementById("sixx").style.transtion="0.8s";
          document.getElementById("actual").innerHTML=headingValue;
          document.getElementById("text1").innerHTML=headingValue;
          document.getElementById("vid1").style.display="none";
          document.getElementById("vid2").style.display="none";
          document.getElementById("vid3").style.display="none";
          document.getElementById("vid4").style.display="none";  
          document.getElementById("vid5").style.display="none"; 
          document.getElementById("vid6").style.display="none"; 
          document.getElementById("vid7").style.display="none"; 
          document.getElementById("vid9").style.display="block"; 
          document.getElementById("vid8").style.display="none"; 
          closeNavi()
        }
      </script>

    </body>
</html>