<html>

<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scale=No">
        <style>
            @font-face { font-family: ROM Mono; src: url('IMG/ABCROM-Light-Trial.otf'); }
@font-face { font-family: ROM Wide Light; src: url('IMG/ABCROMWide-Light-Trial.otf'); }
@font-face { font-family: ROM Wide Bold; src: url('IMG/ABCROMWide-Bold-Trial.otf'); } 
@font-face { font-family: ROM Ext Black; src: url('IMG/ABCROMExtended-Black-Trial.otf'); } 
@font-face { font-family: ROM Wide Reg; src: url('IMG/ABCROMWide-Regular-Trial.otf'); } 
        body{
            width:auto;
            margin: 0;
            padding: 0;
            overflow-x: hidden;
        }    
        .rest{


            overflow: hidden;
        }

        
        #log{
            width:70%;
            margin-top: 200px;
            margin-left: 70px;
            position: relative;
        }
        h2{
            position: relative;
text-align: center;

    color:white;
    font-family: "ROM Wide Bold",sans-serif;
    font-weight: 400;
    font-size: 28px;  
        }
        .hil{
     font-family:"ROM Wide Light",sans-serif;    
}
#tra,#br{

    width: 35%;

    padding: 10px;
    margin-right: 25px;
    background: white;
    color:rgb(0, 0, 0);
    border: none;
    position: relative;
    border-radius: 25px;
    font-size: 15px;
    font-family: 'ROM Wide Reg', sans-serif;
    text-transform: uppercase;
    font-weight: 400;
    text-align: center;

}
#br{
    margin-top: 10px;
    margin-left: 55px;
}
#tra{
    margin-top: 10px; 
}

#br:hover,#tra:hover{
    background: #E49393;

    color:rgb(0, 0, 0);
    transition: 2s;
}
#mobi{
    display:block;
    background-color: rgba(0, 0, 0, 0);
width: auto;
    position: fixed;
    height:50px;
  }

.gate{
  width: 280px;
  height:46px;
  position: relative;
  overflow: hidden;

  margin-left: 120px;
margin-top: -550px;
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
#test{
    height: 950px;
    margin-top: 300px;
    background: url("IMG/waa.jpg");
    background-repeat:no-repeat;
}
#events{
    height: 600px;
    background-color: white;

}
#write{

    position: absolute;
    margin-left: 15px;
    width: 95%;
    font-family: "ROM Wide Bold",sans-serif;
    font-size: 30px;
    color:black;



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
#heve{
    display: block;
  font-size: 40px;
color: #000000;
color:rgb(0, 0, 0);
    text-transform:capitalize;


    font-weight: 200;
    font-family:"ROM Ext Black",sans-serif;

}
.flip-card {
  background-color: transparent;
  width: 225px;
  height: 225px;
    scroll-snap-align: center;
  float: left;
  margin-right: 130px;
  perspective: 1000px;
}

.flip-card-inner {
  position: relative;
  width: 250px;
  height: 225px;
  text-align: center;
  transition: transform 2s;
  transform-style: preserve-3d;

}

#fl1:hover #fli1 {
  transform: rotateY(180deg);
}
#fl2:hover #fli2 {
  transform: rotateY(180deg);
}
#fl3:hover #fli3 {
  transform: rotateY(180deg);
}
#fl4:hover #fli4{
  transform: rotateY(180deg);
}
#fl5:hover #fli5 {
  transform: rotateY(180deg);
}
#fl6:hover #fli6 {
  transform: rotateY(180deg);
}

#fl7:hover #fli7 {
  transform: rotateY(180deg);
}
#fl8:hover #fli8 {
  transform: rotateY(180deg);
}
#fl9:hover #fli9 {
  transform: rotateY(180deg);
}


.flip-card-front, .flip-card-back {
  position: absolute;
  width: 100%;
  height: 100%;
  -webkit-backface-visibility: hidden;
  backface-visibility: hidden;
}
.flip-card-front {
  background-color: #0000000a;
  color: black;
  border-radius: 30px;
}

.flip-card-back {
    background-color: #0000000a;
  color: rgb(0, 0, 0);
  border-radius: 30px;
  transform: rotateY(180deg);
}
.numb{
width:82%;

margin-left: -90px;
margin-top: -100px;
float:left
}
.numb1{
width:90%;

margin-left: -20px;


float:left
}
.numb2{
width:94%;

margin-left: -70px;

float:left
}
.numb3{
width:90%;

margin-left: -50px;

float:left
}
.numb4{
width:90%;
margin-top: 10px;
margin-left: -80px;

float:left
}
.numb5{
width:90%;
margin-top: 5px;
margin-left: -60px;

float:left
}
.numb6{
width:90%;
margin-top: 10px;
margin-left: -40px;

float:left
}
.numb7{
width:82%;
margin-top: 10px;
margin-left: -80px;

float:left
}
#mob{
  display: none;
}
#fli2 #evet{
    color:black;

font-size: 25px;
margin-right: 20px;
transform: translate(5%,20%);
text-align: center;
font-family: "ROM Wide Bold",sans-serif;
}
#fli3 #evet{
    color:black;

font-size: 25px;
margin-right: 20px;
transform: translate(5%,20%);
text-align: center;
font-family: "ROM Wide Bold",sans-serif;
}
#fli5 #evet{
    color:black;

font-size: 25px;
margin-right: 20px;
transform: translate(5%,20%);
text-align: center;
font-family: "ROM Wide Bold",sans-serif;
}
#fli6 #evet{
    color:black;

font-size: 25px;
margin-right: 20px;
transform: translate(7%,20%);
text-align: center;
font-family: "ROM Wide Bold",sans-serif;
}
#fli6 #evet{
    color:black;

font-size: 25px;
margin-right: 20px;
transform: translate(2%,20%);
text-align: center;
font-family: "ROM Wide Bold",sans-serif;
}

#evet{
color:black;

font-size: 25px;
margin-right: 20px;
transform: translateY(20%);
text-align: center;
font-family: "ROM Wide Bold",sans-serif;
}

#inside{
  color:black;
font-size: 28px;
padding-top: 20px;
width: 100%;

text-align: center;
float:right;
font-family: "ROM Ext Black",sans-serif;
}
#ret{
  color:black;
font-size: 24px;
padding-top: 20px;
width: 100%;
padding-bottom: 10px;
text-align: center;
float:right;
font-family: "ROM Ext Black",sans-serif;
}
.flip-card p{
  color:black;
  font-size: 16px;
  font-family: "ROM Mono",sans-serif;
  transform: translateY(-25%);
}
.flip-card h4{
  color:black;
  font-size: 13px;
  font-family: "ROM Wide Light",sans-serif;
  transform: translateY(-60%);
}

#slide{
    margin-left: 80px;
    width: 2500px;
}
#slided{

    overflow-x: scroll;
    overflow-y: hidden;
    scroll-snap-type: x mandatory;
}
#ven{
  transform: translateY(-160%);

}
.spon{
    background-color: black;
    height: 1000px;
    width: 500px;

}
#crom{
    width: 50%;
    margin-left: 120px;
    transform: translateY(-10%);

}
#titi{
    padding-top: 80px;
    font-size: 22px;

    text-align: center;
    text-transform:uppercase;
    font-family:"ROM Mono",sans-serif; 
}
#titi2{
    padding-top: 40px;
    text-align: center;
    font-size: 22px;
    text-transform:uppercase;
    font-family:"ROM Mono",sans-serif; 
}
#titi3{
    padding-top: 40px;
    text-align: center;
    font-size: 22px;
    text-transform:uppercase;
    font-family:"ROM Mono",sans-serif; 
}
#dee{
    width: 17%;
    margin-left: 210px;
}
#codechef{
    display: block;
    width: 45%;
    margin-top: 40px;
    margin-left: 140px;
    margin-bottom: 20px;
}
#xyz{
    display: block;
    width: 24%;
    margin-left: 190px;
    margin-bottom: 20px;
}
#bouj{
    display: block;
    width: 35%;
    margin-left: 165px;
    margin-bottom: 20px;
}
#cake{
    display: block;
    width: 60%;
    margin-left: 100px;
    margin-bottom: 20px;
}
#arta{
    display: block;
    width: 23%; 
    margin-left: 190px;
    margin-bottom: 20px; 
}
.mySlides {display: none}
img {vertical-align: middle;}
.slideshow-container {
    font-family: "ROM Mono",sans-serif;
    max-width: 1100px;
    position: relative;
    margin-left:80px;
}

.mySlides {
    display: none;
  height: 500px;

     
}
.dot{
 text-align: left;
}

.prev,
.next {
    cursor: pointer;
    position: absolute;
    top: 50%;
    display: none;
    width:40px;
    height:40px;
    margin-top: -22px;
    padding: 10px;

    background-color: #6674c2;
    font-size: 30px;
    transition: .6s ease;

}

.next {
    right: -50px;
    border-radius: 3px 3px 3px 3px
}

.prev {
    left: -50px;
    border-radius: 3px 3px 3px 3px
}

.prev:hover,
.next:hover {
    transition: .6s ease;
    color: #f2f2f2;
    background-color: rgba(0, 0, 0, 0.8)
}


.dot {
    cursor: pointer;
    height: 15px;
    width: 15px;
    margin: 0 2px;
    background-color: #6674c241;
    border-radius: 50%;
    display: inline-block;
    transition: .6s ease
}

.active,
.dot:hover {
    background-color: rgb(14, 7, 49);
}
.imag{
    max-width: 1100px;
    height:500px;
}
.imag img{
    max-width: 1100px;
    height:500px;
    object-fit: cover;  
}


@media screen and (max-width: 500px){

    div#testing{
    margin-top: 30px;
    margin-left: 120px;
   padding-bottom: 100px;
}
#slideshow {

    margin-top: 80px;
    width: 400px;
    overflow: hidden;
}
.slideshow-container {
    font-family: "ROM Mono",sans-serif;
    max-width: 1100px;
    position: relative;
    margin-left: 50px;
}

.imag {
    width: 400px;
    height: 200px;
}

footer{
    margin-top: 700px;
width:auto;
overflow-x: hidden;
height: 600px;
background-color: #000000;
position: relative;
}
footer img{
    width: 50%;
    margin-left: 120px;
    margin-top: 80px;
}
.links{
    margin-top: 80px;

}
.links a{
    text-decoration: none;
    color:White;
    text-align: center;
    font-size: 21px;
    display: block;
    color:white;
  margin-right: 30px;
height: 50px;
  text-decoration: none;


  font-family: "ROM Mono",sans-serif;
  transition: 0.9s;
}
.links a:hover{
  transition: 0.9s;
  opacity: 0.4;
}
.links h3{
  font-size: 18px;
  color:white;
  text-align: center;
  font-family: "ROM Wide Light",sans-serif;
}
.links h4{
  font-size: 16px;
  color:white;
  text-align: center;
  margin-left: 80px;
  width: 60%;
  font-family: "ROM Wide Bold",sans-serif;
}

.rest{
        background: url("IMG/Z3NITH'23 Brochure Cover 1 1.png");
        overflow: hidden;


        position: relative;
        height: 700px;
    }



}
@media screen and (max-width: 490px){
.gate{
    position: relative;
}


    div#testing{
    margin-top: 30px;
    margin-left: 120px;
   padding-bottom: 100px;
}
#slideshow {

    margin-top: 80px;
    width: 400px;
    overflow: hidden;
}
.slideshow-container {
    font-family: "ROM Mono",sans-serif;
    max-width: 1100px;
    position: relative;
    margin-left: 50px;
}

.imag {
    width: 400px;
    height: 200px;
}

footer{
    margin-top: 700px;
width:500px;
height: 600px;
background-color: #000000;
position: relative;
}
footer img{
    width: 50%;
    margin-left: 120px;
    margin-top: 80px;
}
.links{
    margin-top: 80px;

}
.links a{
    text-decoration: none;
    color:White;
    text-align: center;
    font-size: 21px;
    display: block;
    color:white;
  margin-right: 30px;
height: 50px;
  text-decoration: none;


  font-family: "ROM Mono",sans-serif;
  transition: 0.9s;
}
.links a:hover{
  transition: 0.9s;
  opacity: 0.4;
}
.links h3{
  font-size: 18px;
  color:white;
  text-align: center;
  font-family: "ROM Wide Light",sans-serif;
}
#write{
    margin-left: 20px;
}
.links h4{
  font-size: 16px;
  color:white;
  text-align: center;
  margin-left: 80px;
  width: 60%;
  font-family: "ROM Wide Bold",sans-serif;
}
.rest{
        background: url("IMG/Z3NITH'23 Brochure Cover 1 1.png");
        overflow: hidden;


        position: relative;
        height: 700px;
    }



#test{
    width: auto;
}

html,body{
    width: auto;
    overflow-x: hidden;
}
}
@media screen and (max-width: 480px){
    .rest{
        background: url("IMG/Z3NITH'23 Brochure Cover 1 1.png");
        overflow: hidden;


        position: relative;
        height: 700px;
    }


    .gate{
  width: 280px;
  height:46px;
  position: relative;
  overflow: hidden;

  margin-left: 100px;
margin-top: -550px;
  background-color: rgb(0, 0, 0);
  border-radius: 14px;
}

    div#testing{
    margin-top: 30px;
    margin-left: 120px;
   padding-bottom: 100px;
}
#slideshow {

    margin-top: 80px;
    width: 400px;
    overflow: hidden;
}
.slideshow-container {
    font-family: "ROM Mono",sans-serif;
    max-width: 1100px;
    position: relative;
    margin-left: 50px;
}

.imag {
    width: 400px;
    height: 200px;
}

footer{
    margin-top: 700px;
width:500px;
height: 600px;
background-color: #000000;
position: relative;
}
footer img{
    width: 50%;
    margin-left: 120px;
    margin-top: 80px;
}
.links{
    margin-top: 80px;

}
.links a{
    text-decoration: none;
    color:White;
    text-align: center;
    font-size: 21px;
    display: block;
    color:white;
  margin-right: 30px;
height: 50px;
  text-decoration: none;


  font-family: "ROM Mono",sans-serif;
  transition: 0.9s;
}
.links a:hover{
  transition: 0.9s;
  opacity: 0.4;
}
.links h3{
  font-size: 18px;
  color:white;
  text-align: center;
  font-family: "ROM Wide Light",sans-serif;
}
#write{
    margin-left: 30px;
}
.links h4{
  font-size: 16px;
  color:white;
  text-align: center;
  margin-left: 80px;
  width: 60%;
  font-family: "ROM Wide Bold",sans-serif;
}


body{

overflow-x: hidden;
}
html{
overflow-x: hidden;

}
#write{
    margin-left: 15px;
}

}
@media screen and (max-width: 460px){

#br{
    margin-left: 45px;
}

.rest{
        background: url("IMG/Z3NITH'23 Brochure Cover 1 1.png");
        overflow: hidden;


        position: relative;
        height: 700px;
    }

div#testing{
margin-top: 30px;
margin-left: 120px;
padding-bottom: 100px;
}
#slideshow {

margin-top: 80px;
width: 400px;
overflow: hidden;
}
.slideshow-container {
font-family: "ROM Mono",sans-serif;
max-width: 1100px;
position: relative;
margin-left: 50px;
}

.imag {
width: 400px;
height: 200px;
}

footer{
margin-top: 700px;
width:500px;

height: 600px;
background-color: #000000;
position: relative;
}
footer img{
width: 50%;
margin-left: 120px;
margin-top: 80px;
}
.links{
margin-top: 80px;

}
.links a{
text-decoration: none;
color:White;
text-align: center;
font-size: 21px;
display: block;
color:white;
margin-right: 30px;
height: 50px;
text-decoration: none;


font-family: "ROM Mono",sans-serif;
transition: 0.9s;
}
.links a:hover{
transition: 0.9s;
opacity: 0.4;
}
.links h3{
font-size: 18px;
color:white;
text-align: center;
font-family: "ROM Wide Light",sans-serif;
}
#write{
    margin-left: 15px;
}
.links h4{
font-size: 16px;
color:white;
text-align: center;
margin-left: 80px;
width: 60%;
font-family: "ROM Wide Bold",sans-serif;
}

body{

overflow-x: hidden;
}
html{
overflow-x: hidden;

}

}
@media screen and (max-width: 450px){
    #log{
   margin-left: 80px; 
}
#br{
    margin-left: 65px;
}
h2{
   margin-right: -30px; 
}


.rest{
        background: url("IMG/Z3NITH'23 Brochure Cover 1 1.png");
        overflow: hidden;


        position: relative;
        height: 700px;
    }

div#testing{
margin-top: 30px;
margin-left: 120px;
padding-bottom: 100px;
}
#slideshow {

margin-top: 80px;
transform: translateX(-5%);
width: 400px;
overflow: hidden;
}
.slideshow-container {
font-family: "ROM Mono",sans-serif;
max-width: 1100px;
position: relative;
margin-left: 50px;
}

.imag {
width: 400px;
height: 200px;
}

footer{
margin-top: 700px;
width:500px;
height: 600px;
background-color: #000000;
position: relative;
}
footer{
margin-top: 700px;
width:500px;
transform: translateX(0%);
height: 600px;
background-color: #000000;
position: relative;
}
footer img{
width: 50%;
margin-left: 120px;
margin-top: 80px;
}
.links{
margin-top: 80px;

}
.links a{
text-decoration: none;
color:White;
text-align: center;
font-size: 21px;
display: block;
color:white;
margin-right: 30px;
height: 50px;
text-decoration: none;


font-family: "ROM Mono",sans-serif;
transition: 0.9s;
}
.links a:hover{
transition: 0.9s;
opacity: 0.4;
}
.links h3{
font-size: 18px;
color:white;
text-align: center;
font-family: "ROM Wide Light",sans-serif;
}
#write{
margin-left: 30px;
}
.links h4{
font-size: 16px;
color:white;
text-align: center;
margin-left: 80px;
width: 60%;
font-family: "ROM Wide Bold",sans-serif;
}

body{

overflow-x: hidden;
}
html{
overflow-x: hidden;

}
#titi,#titi2,#titi3{
    margin-left: -90px;
}
#crom{
    width: 50%;
    margin-left: 90px;
    transform: translateY(10%);

}
#dee{
    margin-left: 180px;
    margin-top: 20px;
}
#codechef{
    display: block;
    width: 45%;
    margin-top: 40px;
    margin-left: 110px;
    margin-bottom: 20px;
}
#xyz{
    display: block;
    width: 24%;
    margin-left: 160px;
    margin-bottom: 20px;
}
#bouj{
    display: block;
    width: 35%;
    margin-left: 135px;
    margin-bottom: 20px;
}
#cake{
    display: block;
    width: 60%;
    margin-left: 70px;
    margin-bottom: 20px;
}
#arta{
    display: block;
    width: 23%; 
    margin-left: 160px;
    margin-bottom: 20px; 
}
.spon{
height: 1100px;
}
}
@media screen and (max-width: 440px){
    #log{
   margin-left: 60px; 
}
#br{
    margin-left: 55px;
}
h2{
   margin-right: -10px; 
}


.rest{
        background: url("IMG/Z3NITH'23 Brochure Cover 1 1.png");
        overflow: hidden;


        position: relative;
        height: 700px;
    }

div#testing{
margin-top: 30px;
margin-left: 120px;
padding-bottom: 100px;
}
#slideshow {

margin-top: 80px;
transform: translateX(-7%);
width: 400px;
overflow: hidden;
}
.slideshow-container {
font-family: "ROM Mono",sans-serif;
max-width: 1100px;
position: relative;

}
footer{
margin-top: 700px;
width:500px;
transform: translateX(0%);
height: 600px;
background-color: #000000;
position: relative;
}
.imag {
width: 400px;
height: 200px;
}

footer{
margin-top: 700px;
width:500px;
height: 600px;
background-color: #000000;
position: relative;
}
footer img{
width: 50%;
margin-left: 120px;
margin-top: 80px;
}
.links{
margin-top: 80px;

}
.links a{
text-decoration: none;
color:White;
text-align: center;
font-size: 21px;
display: block;
color:white;
margin-right: 30px;
height: 50px;
text-decoration: none;


font-family: "ROM Mono",sans-serif;
transition: 0.9s;
}
.links a:hover{
transition: 0.9s;
opacity: 0.4;
}
.links h3{
font-size: 18px;
color:white;
text-align: center;
font-family: "ROM Wide Light",sans-serif;
}
#write{
margin-left: 30px;
}
.links h4{
font-size: 16px;
color:white;
text-align: center;
margin-left: 80px;
width: 60%;
font-family: "ROM Wide Bold",sans-serif;
}

body{

overflow-x: hidden;
}
html{
overflow-x: hidden;

}
#crom{
    width: 50%;
    margin-left: 140px;
    transform: translateY(10%);

}
#dee{
    margin-left: 230px;
    margin-top: 20px;
}
#codechef{
    display: block;
    width: 45%;
    margin-top: 40px;
    margin-left: 160px;
    margin-bottom: 20px;
}
#xyz{
    display: block;
    width: 24%;
    margin-left: 210px;
    margin-bottom: 20px;
}
#bouj{
    display: block;
    width: 35%;
    margin-left: 185px;
    margin-bottom: 20px;
}
#cake{
    display: block;
    width: 60%;
    margin-left: 120px;
    margin-bottom: 20px;
}
#arta{
    display: block;
    width: 23%; 
    margin-left: 210px;
    margin-bottom: 20px; 
}
.spon{
height: 1100px;
}
#titi,#titi2,#titi3{
    margin-left: -90px;
}
#crom{
    width: 50%;
    margin-left: 90px;
    transform: translateY(10%);

}
#dee{
    margin-left: 180px;
    margin-top: 20px;
}
#codechef{
    display: block;
    width: 45%;
    margin-top: 40px;
    margin-left: 110px;
    margin-bottom: 20px;
}
#xyz{
    display: block;
    width: 24%;
    margin-left: 160px;
    margin-bottom: 20px;
}
#bouj{
    display: block;
    width: 35%;
    margin-left: 145px;
    margin-bottom: 20px;
}
#cake{
    display: block;
    width: 60%;
    margin-left: 70px;
    margin-bottom: 20px;
}
#arta{
    display: block;
    width: 23%; 
    margin-left: 160px;
    margin-bottom: 20px; 
}
}
@media screen and (max-width: 430px){
    #test{
        height: 1000px;
    }
    #log{
   margin-left: 80px; 
}
#br{
    margin-left: 65px;
}
h2{
   margin-right: -40px; 
}

#log{
   margin-left: 60px; 
}
#br{
    margin-left: 55px;
}
h2{
   margin-right: -10px; 
}
.rest{
        background: url("IMG/Z3NITH'23 Brochure Cover 1 1.png");
        overflow: hidden;


        position: relative;
        height: 700px;
    }


div#testing{
margin-top: 30px;
margin-left: 120px;
padding-bottom: 100px;
}
#slideshow {

margin-top: 80px;
width: 400px;
overflow: hidden;
}
.slideshow-container {
font-family: "ROM Mono",sans-serif;
max-width: 1100px;
position: relative;
margin-left: 45px;
}

.imag {
width: 400px;
height: 200px;
}

footer{
margin-top: 700px;
width:500px;
height: 600px;
background-color: #000000;
position: relative;
}
footer img{
width: 50%;
margin-left: 120px;
margin-top: 80px;
}
.links{
margin-top: 80px;

}
.links a{
text-decoration: none;
color:White;
text-align: center;
font-size: 21px;
display: block;
color:white;
margin-right: 30px;
height: 50px;
text-decoration: none;


font-family: "ROM Mono",sans-serif;
transition: 0.9s;
}
.links a:hover{
transition: 0.9s;
opacity: 0.4;
}
.links h3{
font-size: 18px;
color:white;
text-align: center;
font-family: "ROM Wide Light",sans-serif;
}
#write{
margin-left: 30px;
}
.links h4{
font-size: 16px;
color:white;
text-align: center;
margin-left: 80px;
width: 60%;
font-family: "ROM Wide Bold",sans-serif;
}

body{

overflow-x: hidden;
}
html{
overflow-x: hidden;

}
#crom{
    width: 50%;
    margin-left: 140px;
    transform: translateY(10%);

}
#dee{
    margin-left: 230px;
    margin-top: 20px;
}
#codechef{
    display: block;
    width: 45%;
    margin-top: 40px;
    margin-left: 160px;
    margin-bottom: 20px;
}
#xyz{
    display: block;
    width: 24%;
    margin-left: 210px;
    margin-bottom: 20px;
}
#bouj{
    display: block;
    width: 35%;
    margin-left: 185px;
    margin-bottom: 20px;
}
#cake{
    display: block;
    width: 60%;
    margin-left: 120px;
    margin-bottom: 20px;
}
#arta{
    display: block;
    width: 23%; 
    margin-left: 210px;
    margin-bottom: 20px; 
}
.spon{
height: 1100px;
}
#titi,#titi2,#titi3{
    margin-left: -50px;
}
#crom{
    width: 50%;
    margin-left: 110px;
    transform: translateY(10%);

}
#dee{
    margin-left: 200px;
    margin-top: 20px;
}
#codechef{
    display: block;
    width: 45%;
    margin-top: 40px;
    margin-left: 130px;
    margin-bottom: 20px;
}
#xyz{
    display: block;
    width: 24%;
    margin-left: 180px;
    margin-bottom: 20px;
}
#bouj{
    display: block;
    width: 35%;
    margin-left: 155px;
    margin-bottom: 20px;
}
#cake{
    display: block;
    width: 60%;
    margin-left: 90px;
    margin-bottom: 20px;
}
#arta{
    display: block;
    width: 23%; 
    margin-left: 180px;
    margin-bottom: 20px; 
}
#dee{
    margin-left: 190px;
    margin-top: 20px;
}
#codechef{
    display: block;
    width: 45%;
    margin-top: 40px;
    margin-left: 130px;
    margin-bottom: 20px;
}
#xyz{
    display: block;
    width: 24%;
    margin-left: 180px;
    margin-bottom: 20px;
}
#bouj{
    display: block;
    width: 35%;
    margin-left: 155px;
    margin-bottom: 20px;
}
#cake{
    display: block;
    width: 60%;
    margin-left: 90px;
    margin-bottom: 20px;
}
#arta{
    display: block;
    width: 23%; 
    margin-left: 180px;
    margin-bottom: 20px; 
}
#titi,#titi2,#titi3{
    margin-left: -50px;
}
#crom{
    width: 50%;
    margin-left: 110px;
    transform: translateY(10%);

}
#dee{
    margin-left: 190px;
    margin-top: 20px;
}
#codechef{
    display: block;
    width: 45%;
    margin-top: 40px;
    margin-left: 130px;
    margin-bottom: 20px;
}
#xyz{
    display: block;
    width: 24%;
    margin-left: 180px;
    margin-bottom: 20px;
}
#bouj{
    display: block;
    width: 35%;
    margin-left: 165px;
    margin-bottom: 20px;
}
#cake{
    display: block;
    width: 60%;
    margin-left: 90px;
    margin-bottom: 20px;
}
#arta{
    display: block;
    width: 23%; 
    margin-left: 180px;
    margin-bottom: 20px; 
}
}
@media screen and (max-width: 420px){
    #test{
        height: 1100px;
    }
    #log{
   margin-left: 90px; 
}
#br{
    margin-left: 70px;
}
h2{
   margin-right: -50px; 
}

#log{
   margin-left: 60px; 
}
#br{
    margin-left: 55px;
}
h2{
   margin-right: -10px; 
}
#log{
   margin-left: 60px; 
}
#br{
    margin-left: 55px;
}
h2{
   margin-right: -10px; 
}


.rest{
        background: url("IMG/Z3NITH'23 Brochure Cover 1 1.png");
        overflow: hidden;


        position: relative;
        height: 700px;
    }

.rest{
        background: url("IMG/Z3NITH'23 Brochure Cover 1 1.png");
        overflow: hidden;


        position: relative;
        height: 700px;
    }

.rest{
    width:420px;
    overflow: hidden;
}
video{
    width:500px;
    overflow: hidden;
}
div#testing{
margin-top: 30px;
margin-left: 120px;
padding-bottom: 100px;
}
#slideshow {

margin-top: 80px;
width: 400px;
overflow: hidden;
}
.slideshow-container {
font-family: "ROM Mono",sans-serif;
max-width: 1100px;
position: relative;
margin-left: 40px;
}

.imag {
width: 400px;
height: 200px;
}

footer{
margin-top: 700px;
width:500px;
height: 600px;
background-color: #000000;
position: relative;
}
footer img{
width: 50%;
margin-left: 120px;
margin-top: 80px;
}
.links{
margin-top: 80px;

}
.links a{
text-decoration: none;
color:White;
text-align: center;
font-size: 21px;
display: block;
color:white;
margin-right: 30px;
height: 50px;
text-decoration: none;


font-family: "ROM Mono",sans-serif;
transition: 0.9s;
}
.links a:hover{
transition: 0.9s;
opacity: 0.4;
}
.links h3{
font-size: 18px;
color:white;
text-align: center;
font-family: "ROM Wide Light",sans-serif;
}
#write{
margin-left: 30px;
}
.links h4{
font-size: 16px;
color:white;
text-align: center;
margin-left: 80px;
width: 60%;
font-family: "ROM Wide Bold",sans-serif;
}

body{

overflow-x: hidden;
}
html{
overflow-x: hidden;

}
#crom{
    width: 50%;
    margin-left: 140px;
    transform: translateY(10%);

}
#dee{
    margin-left: 230px;
    margin-top: 20px;
}
#codechef{
    display: block;
    width: 45%;
    margin-top: 40px;
    margin-left: 160px;
    margin-bottom: 20px;
}
#xyz{
    display: block;
    width: 24%;
    margin-left: 210px;
    margin-bottom: 20px;
}
#bouj{
    display: block;
    width: 35%;
    margin-left: 185px;
    margin-bottom: 20px;
}
#cake{
    display: block;
    width: 60%;
    margin-left: 120px;
    margin-bottom: 20px;
}
#arta{
    display: block;
    width: 23%; 
    margin-left: 210px;
    margin-bottom: 20px; 
}
.spon{
height: 1100px;
}
#titi,#titi2,#titi3{
    margin-left: -50px;
}
#log{
   margin-left: 60px; 
}
#br{
    margin-left: 55px;
}
h2{
   margin-right: -10px; 
}


.rest{
        background: url("IMG/Z3NITH'23 Brochure Cover 1 1.png");
        overflow: hidden;


        position: relative;
        height: 700px;
    }

#crom{
    width: 50%;
    margin-left: 110px;
    transform: translateY(10%);

}
#dee{
    margin-left: 200px;
    margin-top: 20px;
}
#codechef{
    display: block;
    width: 45%;
    margin-top: 40px;
    margin-left: 130px;
    margin-bottom: 20px;
}
#xyz{
    display: block;
    width: 24%;
    margin-left: 180px;
    margin-bottom: 20px;
}
#bouj{
    display: block;
    width: 35%;
    margin-left: 155px;
    margin-bottom: 20px;
}
#cake{
    display: block;
    width: 60%;
    margin-left: 90px;
    margin-bottom: 20px;
}
#arta{
    display: block;
    width: 23%; 
    margin-left: 180px;
    margin-bottom: 20px; 
}
#titi,#titi2,#titi3{
    margin-left: -50px;
}
#crom{
    width: 50%;
    margin-left: 90px;
    transform: translateY(10%);

}
#dee{
    margin-left: 170px;
    margin-top: 20px;
}
#codechef{
    display: block;
    width: 45%;
    margin-top: 40px;
    margin-left: 110px;
    margin-bottom: 20px;
}
#xyz{
    display: block;
    width: 24%;
    margin-left: 160px;
    margin-bottom: 20px;
}
#bouj{
    display: block;
    width: 35%;
    margin-left: 145px;
    margin-bottom: 20px;
}
#cake{
    display: block;
    width: 60%;
    margin-left: 70px;
    margin-bottom: 20px;
}
#arta{
    display: block;
    width: 23%; 
    margin-left: 160px;
    margin-bottom: 20px; 
}
#titi,#titi2,#titi3{
    margin-left: -50px;
}
#crom{
    width: 50%;
    margin-left: 110px;
    transform: translateY(10%);

}
#dee{
    margin-left: 190px;
    margin-top: 20px;
}
#codechef{
    display: block;
    width: 45%;
    margin-top: 40px;
    margin-left: 130px;
    margin-bottom: 20px;
}
#xyz{
    display: block;
    width: 24%;
    margin-left: 180px;
    margin-bottom: 20px;
}
#bouj{
    display: block;
    width: 35%;
    margin-left: 165px;
    margin-bottom: 20px;
}
#cake{
    display: block;
    width: 60%;
    margin-left: 90px;
    margin-bottom: 20px;
}
#arta{
    display: block;
    width: 23%; 
    margin-left: 180px;
    margin-bottom: 20px; 
}
}
@media screen and (max-width: 410px){

    #test{
        height: 1000px;
    }
    #log{
   margin-left: 90px; 
}
#br{
    margin-left: 60px;
}
h2{
   margin-right: -50px; 
}

#log{
   margin-left: 60px; 
}
#br{
    margin-left: 55px;
}
h2{
   margin-right: -10px; 
}
.rest{
        background: url("IMG/Z3NITH'23 Brochure Cover 1 1.png");
        overflow: hidden;


        position: relative;
        height: 700px;
    }

.rest{
    width:410px;
    overflow: hidden;
}
video{
    width:500px;
    overflow: hidden;
}
div#testing{
margin-top: 30px;
margin-left: 120px;
padding-bottom: 100px;
}
#slideshow {

margin-top: 80px;
width: 400px;
overflow: hidden;
}
.slideshow-container {
font-family: "ROM Mono",sans-serif;
max-width: 1100px;
position: relative;
margin-left: 35px;
}

.imag {
width: 400px;
height: 200px;
}

footer{
margin-top: 700px;
width:500px;
height: 600px;
background-color: #000000;
position: relative;
}
footer img{
width: 50%;
margin-left: 120px;
margin-top: 80px;
}
.links{
margin-top: 80px;

}
.links a{
text-decoration: none;
color:White;
text-align: center;
font-size: 21px;
display: block;
color:white;
margin-right: 30px;
height: 50px;
text-decoration: none;


font-family: "ROM Mono",sans-serif;
transition: 0.9s;
}
.links a:hover{
transition: 0.9s;
opacity: 0.4;
}
.links h3{
font-size: 18px;
color:white;
text-align: center;
font-family: "ROM Wide Light",sans-serif;
}
#write{
margin-left: 30px;
}
.links h4{
font-size: 16px;
color:white;
text-align: center;
margin-left: 80px;
width: 60%;
font-family: "ROM Wide Bold",sans-serif;
}

body{

overflow-x: hidden;
}
html{
overflow-x: hidden;

}
#crom{
    width: 50%;
    margin-left: 140px;
    transform: translateY(10%);

}
#dee{
    margin-left: 230px;
    margin-top: 20px;
}
#codechef{
    display: block;
    width: 45%;
    margin-top: 40px;
    margin-left: 160px;
    margin-bottom: 20px;
}
#xyz{
    display: block;
    width: 24%;
    margin-left: 210px;
    margin-bottom: 20px;
}
#bouj{
    display: block;
    width: 35%;
    margin-left: 185px;
    margin-bottom: 20px;
}
#cake{
    display: block;
    width: 60%;
    margin-left: 120px;
    margin-bottom: 20px;
}
#arta{
    display: block;
    width: 23%; 
    margin-left: 210px;
    margin-bottom: 20px; 
}
.spon{
height: 1100px;
}
#log{
   margin-left: 60px; 
}
#br{
    margin-left: 55px;
}
h2{
   margin-right: -10px; 
}


.rest{
        background: url("IMG/Z3NITH'23 Brochure Cover 1 1.png");
        overflow: hidden;


        position: relative;
        height: 700px;
    }

#crom{
    width: 50%;
    margin-left: 110px;
    transform: translateY(10%);

}
#dee{
    margin-left: 200px;
    margin-top: 20px;
}
#codechef{
    display: block;
    width: 45%;
    margin-top: 40px;
    margin-left: 130px;
    margin-bottom: 20px;
}
#xyz{
    display: block;
    width: 24%;
    margin-left: 180px;
    margin-bottom: 20px;
}
#bouj{
    display: block;
    width: 35%;
    margin-left: 155px;
    margin-bottom: 20px;
}
#cake{
    display: block;
    width: 60%;
    margin-left: 90px;
    margin-bottom: 20px;
}
#arta{
    display: block;
    width: 23%; 
    margin-left: 180px;
    margin-bottom: 20px; 
}
}
@media screen and (max-width: 400px){
    #test{
        height: 1000px;
    }
    #log{
   margin-left: 110px; 
}

#tra{
    width: 40%;
    margin-right: 0;
}
h2{
    width: 100%;
    font-size: 20px;
   padding-left: -20px;
}
#log{
   margin-left: 50px; 
}


.rest{
    width:400px;
    overflow: hidden;
}
video{
    width:500px;
    overflow: hidden;
}
div#testing{
margin-top: 30px;
margin-left: 120px;
padding-bottom: 100px;
}
#slideshow {

margin-top: 80px;
width: 400px;
overflow: hidden;
}
.slideshow-container {
font-family: "ROM Mono",sans-serif;
max-width: 1100px;
position: relative;
margin-left: 25px;
}

.imag {
width: 400px;
height: 200px;
}

footer{
margin-top: 700px;
width:500px;
transform: translateX(-5%);
height: 600px;
background-color: #000000;
position: relative;
}
footer img{
width: 50%;
margin-left: 120px;
margin-top: 80px;
}
.links{
margin-top: 80px;

}
.links a{
text-decoration: none;
color:White;
text-align: center;
font-size: 21px;
display: block;
color:white;
margin-right: 30px;
height: 50px;
text-decoration: none;


font-family: "ROM Mono",sans-serif;
transition: 0.9s;
}
.links a:hover{
transition: 0.9s;
opacity: 0.4;
}
.links h3{
font-size: 18px;
color:white;
text-align: center;
font-family: "ROM Wide Light",sans-serif;
}
#write{
margin-left: 30px;
}
.links h4{
font-size: 16px;
color:white;
text-align: center;
margin-left: 80px;
width: 60%;
font-family: "ROM Wide Bold",sans-serif;
}

body{

overflow-x: hidden;
}
html{
overflow-x: hidden;

}
#titi{
    margin-left: -30px;
}
#titi2{
    margin-left: -30px;
}
#titi3{
    margin-left: -30px;
}
#crom{
    width: 50%;
    margin-left: 140px;
    transform: translateY(10%);

}
#dee{
    margin-left: 230px;
    margin-top: 20px;
}
#codechef{
    display: block;
    width: 45%;
    margin-top: 40px;
    margin-left: 160px;
    margin-bottom: 20px;
}
#xyz{
    display: block;
    width: 24%;
    margin-left: 210px;
    margin-bottom: 20px;
}
#bouj{
    display: block;
    width: 35%;
    margin-left: 185px;
    margin-bottom: 20px;
}
#cake{
    display: block;
    width: 60%;
    margin-left: 120px;
    margin-bottom: 20px;
}
#arta{
    display: block;
    width: 23%; 
    margin-left: 210px;
    margin-bottom: 20px; 
}
.spon{
height: 1100px;
}
#crom{
    width: 50%;
    margin-left: 140px;
    transform: translateY(10%);

}
#dee{
    margin-left: 230px;
    margin-top: 20px;
}
#codechef{
    display: block;
    width: 45%;
    margin-top: 40px;
    margin-left: 160px;
    margin-bottom: 20px;
}
#xyz{
    display: block;
    width: 24%;
    margin-left: 210px;
    margin-bottom: 20px;
}
#bouj{
    display: block;
    width: 35%;
    margin-left: 185px;
    margin-bottom: 20px;
}
#cake{
    display: block;
    width: 60%;
    margin-left: 120px;
    margin-bottom: 20px;
}
#arta{
    display: block;
    width: 23%; 
    margin-left: 210px;
    margin-bottom: 20px; 
}
.spon{
height: 1100px;
}
#log{
   margin-left: 60px; 
}
#br{
    margin-left: 35px;
}
h2{
   margin-right: -10px; 
}
#write{
    width: 90%;
    font-size: 24px;
}
#crom{
    width: 50%;
    margin-left: 70px;
    transform: translateY(10%);

}
#dee{
    margin-left: 170px;
    margin-top: 20px;
}
#codechef{
    display: block;
    width: 45%;
    margin-top: 40px;
    margin-left: 130px;
    margin-bottom: 20px;
}
#xyz{
    display: block;
    width: 24%;
    margin-left: 180px;
    margin-bottom: 20px;
}
#bouj{
    display: block;
    width: 35%;
    margin-left: 155px;
    margin-bottom: 20px;
}
#cake{
    display: block;
    width: 60%;
    margin-left: 90px;
    margin-bottom: 20px;
}
#arta{
    display: block;
    width: 23%; 
    margin-left: 180px;
    margin-bottom: 20px; 
}

.rest{
        background: url("IMG/Z3NITH'23 Brochure Cover 1 1.png");
        overflow: hidden;


        position: relative;
        height: 700px;
    }

#crom{
    width: 50%;
    margin-left: 110px;
    transform: translateY(10%);

}
#dee{
    margin-left: 200px;
    margin-top: 20px;
}
#codechef{
    display: block;
    width: 45%;
    margin-top: 40px;
    margin-left: 130px;
    margin-bottom: 20px;
}
#xyz{
    display: block;
    width: 24%;
    margin-left: 180px;
    margin-bottom: 20px;
}
#bouj{
    display: block;
    width: 35%;
    margin-left: 155px;
    margin-bottom: 20px;
}
#cake{
    display: block;
    width: 60%;
    margin-left: 90px;
    margin-bottom: 20px;
}
#arta{
    display: block;
    width: 23%; 
    margin-left: 180px;
    margin-bottom: 20px; 
}
#titi,#titi2,#titi3{
    margin-left: -50px;
}
#crom{
    width: 50%;
    margin-left: 80px;
    transform: translateY(10%);

}
#dee{
    margin-left: 160px;
    margin-top: 20px;
}
#codechef{
    display: block;
    width: 45%;
    margin-top: 40px;
    margin-left: 90px;
    margin-bottom: 20px;
}
#xyz{
    display: block;
    width: 24%;
    margin-left: 140px;
    margin-bottom: 20px;
}
#bouj{
    display: block;
    width: 35%;
    margin-left: 115px;
    margin-bottom: 20px;
}
#cake{
    display: block;
    width: 60%;
    margin-left: 50px;
    margin-bottom: 20px;
}
#arta{
    display: block;
    width: 23%; 
    margin-left: 140px;
    margin-bottom: 20px; 
}
#dee{
    margin-left: 150px;
    margin-top: 20px;
}
#codechef{
    display: block;
    width: 45%;
    margin-top: 40px;
    margin-left: 90px;
    margin-bottom: 20px;
}
#xyz{
    display: block;
    width: 24%;
    margin-left: 140px;
    margin-bottom: 20px;
}
#bouj{
    display: block;
    width: 35%;
    margin-left: 115px;
    margin-bottom: 20px;
}
#cake{
    display: block;
    width: 60%;
    margin-left: 50px;
    margin-bottom: 20px;
}
#arta{
    display: block;
    width: 23%; 
    margin-left: 140px;
    margin-bottom: 20px; 
}
}
@media screen and (max-width: 390px){
    .gate{
  width: 280px;
  height:46px;
  position: relative;
  overflow: hidden;

  margin-left: 60px;
margin-top: -550px;
  background-color: rgb(0, 0, 0);
  border-radius: 14px;
}

    #test{
        height: 1000px;
    }
    #log{
   margin-left: 110px; 
}

#tra{
    width: 40%;
    margin-right: 0;
}
h2{
    width: 100%;
    font-size: 20px;
   padding-left: -20px;
}
#log{
   margin-left: 50px; 
}


.rest{
    width:400px;
    overflow: hidden;
}
video{
    width:500px;
    overflow: hidden;
}
div#testing{
margin-top: 30px;
margin-left: 120px;
padding-bottom: 100px;
}
#slideshow {

margin-top: 80px;
width: 400px;
overflow: hidden;
}
.slideshow-container {
font-family: "ROM Mono",sans-serif;
max-width: 1100px;
position: relative;
margin-left: 25px;
}

.imag {
width: 400px;
height: 200px;
}

footer{
margin-top: 700px;
width:500px;
transform: translateX(-5%);
height: 600px;
background-color: #000000;
position: relative;
}
footer img{
width: 50%;
margin-left: 120px;
margin-top: 80px;
}
.links{
margin-top: 80px;

}
.links a{
text-decoration: none;
color:White;
text-align: center;
font-size: 21px;
display: block;
color:white;
margin-right: 30px;
height: 50px;
text-decoration: none;


font-family: "ROM Mono",sans-serif;
transition: 0.9s;
}
.links a:hover{
transition: 0.9s;
opacity: 0.4;
}
.links h3{
font-size: 18px;
color:white;
text-align: center;
font-family: "ROM Wide Light",sans-serif;
}
#write{
margin-left: 30px;
}
.links h4{
font-size: 16px;
color:white;
text-align: center;
margin-left: 80px;
width: 60%;
font-family: "ROM Wide Bold",sans-serif;
}

body{

overflow-x: hidden;
}
html{
overflow-x: hidden;

}
#titi{
    margin-left: -30px;
}
#titi2{
    margin-left: -30px;
}
#titi3{
    margin-left: -30px;
}
#crom{
    width: 50%;
    margin-left: 140px;
    transform: translateY(10%);

}
#dee{
    margin-left: 230px;
    margin-top: 20px;
}
#codechef{
    display: block;
    width: 45%;
    margin-top: 40px;
    margin-left: 160px;
    margin-bottom: 20px;
}
#xyz{
    display: block;
    width: 24%;
    margin-left: 210px;
    margin-bottom: 20px;
}
#bouj{
    display: block;
    width: 35%;
    margin-left: 185px;
    margin-bottom: 20px;
}
#cake{
    display: block;
    width: 60%;
    margin-left: 120px;
    margin-bottom: 20px;
}
#arta{
    display: block;
    width: 23%; 
    margin-left: 210px;
    margin-bottom: 20px; 
}
.spon{
height: 1100px;
}
#crom{
    width: 50%;
    margin-left: 140px;
    transform: translateY(10%);

}
#dee{
    margin-left: 230px;
    margin-top: 20px;
}
#codechef{
    display: block;
    width: 45%;
    margin-top: 40px;
    margin-left: 160px;
    margin-bottom: 20px;
}
#xyz{
    display: block;
    width: 24%;
    margin-left: 210px;
    margin-bottom: 20px;
}
#bouj{
    display: block;
    width: 35%;
    margin-left: 185px;
    margin-bottom: 20px;
}
#cake{
    display: block;
    width: 60%;
    margin-left: 120px;
    margin-bottom: 20px;
}
#arta{
    display: block;
    width: 23%; 
    margin-left: 210px;
    margin-bottom: 20px; 
}
.spon{
height: 1100px;
}
#log{
   margin-left: 60px; 
}
#br{
    margin-left: 35px;
}
h2{
   margin-right: -10px; 
}
#write{
    width: 90%;
    font-size: 24px;
}
#crom{
    width: 50%;
    margin-left: 70px;
    transform: translateY(10%);

}
#dee{
    margin-left: 170px;
    margin-top: 20px;
}
#codechef{
    display: block;
    width: 45%;
    margin-top: 40px;
    margin-left: 130px;
    margin-bottom: 20px;
}
#xyz{
    display: block;
    width: 24%;
    margin-left: 180px;
    margin-bottom: 20px;
}
#bouj{
    display: block;
    width: 35%;
    margin-left: 155px;
    margin-bottom: 20px;
}
#cake{
    display: block;
    width: 60%;
    margin-left: 90px;
    margin-bottom: 20px;
}
#arta{
    display: block;
    width: 23%; 
    margin-left: 180px;
    margin-bottom: 20px; 
}

.rest{
        background: url("IMG/Z3NITH'23 Brochure Cover 1 1.png");
        overflow: hidden;


        position: relative;
        height: 700px;
    }

#crom{
    width: 50%;
    margin-left: 110px;
    transform: translateY(10%);

}
#dee{
    margin-left: 200px;
    margin-top: 20px;
}
#codechef{
    display: block;
    width: 45%;
    margin-top: 40px;
    margin-left: 130px;
    margin-bottom: 20px;
}
#xyz{
    display: block;
    width: 24%;
    margin-left: 180px;
    margin-bottom: 20px;
}
#bouj{
    display: block;
    width: 35%;
    margin-left: 155px;
    margin-bottom: 20px;
}
#cake{
    display: block;
    width: 60%;
    margin-left: 90px;
    margin-bottom: 20px;
}
#arta{
    display: block;
    width: 23%; 
    margin-left: 180px;
    margin-bottom: 20px; 
}
#titi,#titi2,#titi3{
    margin-left: -50px;
}
#crom{
    width: 50%;
    margin-left: 80px;
    transform: translateY(10%);

}
#dee{
    margin-left: 160px;
    margin-top: 20px;
}
#codechef{
    display: block;
    width: 45%;
    margin-top: 40px;
    margin-left: 90px;
    margin-bottom: 20px;
}
#xyz{
    display: block;
    width: 24%;
    margin-left: 140px;
    margin-bottom: 20px;
}
#bouj{
    display: block;
    width: 35%;
    margin-left: 115px;
    margin-bottom: 20px;
}
#cake{
    display: block;
    width: 60%;
    margin-left: 50px;
    margin-bottom: 20px;
}
#arta{
    display: block;
    width: 23%; 
    margin-left: 140px;
    margin-bottom: 20px; 
}
#dee{
    margin-left: 150px;
    margin-top: 20px;
}
#codechef{
    display: block;
    width: 45%;
    margin-top: 40px;
    margin-left: 90px;
    margin-bottom: 20px;
}
#xyz{
    display: block;
    width: 24%;
    margin-left: 140px;
    margin-bottom: 20px;
}
#bouj{
    display: block;
    width: 35%;
    margin-left: 115px;
    margin-bottom: 20px;
}
#cake{
    display: block;
    width: 60%;
    margin-left: 50px;
    margin-bottom: 20px;
}
#arta{
    display: block;
    width: 23%; 
    margin-left: 140px;
    margin-bottom: 20px; 
}
}
@media screen and (max-width: 380px){
    .gate{
  width: 280px;
  height:46px;
  position: relative;
  overflow: hidden;

  margin-left: 60px;
margin-top: -550px;
  background-color: rgb(0, 0, 0);
  border-radius: 14px;
}
    #test{
        height: 1000px;
    }
    #log{
   margin-left: 110px; 
}

#tra{
    width: 40%;
    margin-right: 0;
}
h2{
    width: 100%;
    font-size: 20px;
   padding-left: -20px;
}
#log{
   margin-left: 50px; 
}


.rest{
    width:400px;
    overflow: hidden;
}
video{
    width:500px;
    overflow: hidden;
}
div#testing{
margin-top: 30px;
margin-left:60px;
padding-bottom: 100px;
}
#slideshow {

margin-top: 80px;
width: 400px;
overflow: hidden;
}
.slideshow-container {
font-family: "ROM Mono",sans-serif;
max-width: 1100px;
position: relative;
margin-left: 25px;
}

.imag {
width: 400px;
height: 200px;
}

footer{
margin-top: 700px;
width:500px;
transform: translateX(-8%);
height: 600px;
background-color: #000000;
position: relative;
}
footer img{
width: 50%;
margin-left: 120px;
margin-top: 80px;
}
.links{
margin-top: 80px;

}
.links a{
text-decoration: none;
color:White;
text-align: center;
font-size: 21px;
display: block;
color:white;
margin-right: 30px;
height: 50px;
text-decoration: none;


font-family: "ROM Mono",sans-serif;
transition: 0.9s;
}
.links a:hover{
transition: 0.9s;
opacity: 0.4;
}
.links h3{
font-size: 18px;
color:white;
text-align: center;
font-family: "ROM Wide Light",sans-serif;
}
#write{
margin-left: 30px;
}
.links h4{
font-size: 16px;
color:white;
text-align: center;
margin-left: 80px;
width: 60%;
font-family: "ROM Wide Bold",sans-serif;
}

body{

overflow-x: hidden;
}
html{
overflow-x: hidden;

}
#titi{
    margin-left: -30px;
}
#titi2{
    margin-left: -30px;
}
#titi3{
    margin-left: -30px;
}
#crom{
    width: 50%;
    margin-left: 140px;
    transform: translateY(10%);

}
#dee{
    margin-left: 230px;
    margin-top: 20px;
}
#codechef{
    display: block;
    width: 45%;
    margin-top: 40px;
    margin-left: 160px;
    margin-bottom: 20px;
}
#xyz{
    display: block;
    width: 24%;
    margin-left: 210px;
    margin-bottom: 20px;
}
#bouj{
    display: block;
    width: 35%;
    margin-left: 185px;
    margin-bottom: 20px;
}
#cake{
    display: block;
    width: 60%;
    margin-left: 120px;
    margin-bottom: 20px;
}
#arta{
    display: block;
    width: 23%; 
    margin-left: 210px;
    margin-bottom: 20px; 
}
.spon{
height: 1100px;
}
#crom{
    width: 50%;
    margin-left: 140px;
    transform: translateY(10%);

}
#dee{
    margin-left: 230px;
    margin-top: 20px;
}
#codechef{
    display: block;
    width: 45%;
    margin-top: 40px;
    margin-left: 160px;
    margin-bottom: 20px;
}
#xyz{
    display: block;
    width: 24%;
    margin-left: 210px;
    margin-bottom: 20px;
}
#bouj{
    display: block;
    width: 35%;
    margin-left: 185px;
    margin-bottom: 20px;
}
#cake{
    display: block;
    width: 60%;
    margin-left: 120px;
    margin-bottom: 20px;
}
#arta{
    display: block;
    width: 23%; 
    margin-left: 210px;
    margin-bottom: 20px; 
}
.spon{
height: 1100px;
}
#log{
   margin-left: 60px; 
}
#br{
    margin-left: 35px;
}
h2{
   margin-right: -10px; 
}
#write{
    width: 90%;
    font-size: 24px;
}
#crom{
    width: 50%;
    margin-left: 70px;
    transform: translateY(10%);

}
#dee{
    margin-left: 170px;
    margin-top: 20px;
}
#codechef{
    display: block;
    width: 45%;
    margin-top: 40px;
    margin-left: 130px;
    margin-bottom: 20px;
}
#xyz{
    display: block;
    width: 24%;
    margin-left: 180px;
    margin-bottom: 20px;
}
#bouj{
    display: block;
    width: 35%;
    margin-left: 155px;
    margin-bottom: 20px;
}
#cake{
    display: block;
    width: 60%;
    margin-left: 90px;
    margin-bottom: 20px;
}
#arta{
    display: block;
    width: 23%; 
    margin-left: 180px;
    margin-bottom: 20px; 
}

.rest{
        background: url("IMG/Z3NITH'23 Brochure Cover 1 1.png");
        overflow: hidden;


        position: relative;
        height: 700px;
    }

#crom{
    width: 50%;
    margin-left: 110px;
    transform: translateY(10%);

}
#dee{
    margin-left: 200px;
    margin-top: 20px;
}
#codechef{
    display: block;
    width: 45%;
    margin-top: 40px;
    margin-left: 130px;
    margin-bottom: 20px;
}
#xyz{
    display: block;
    width: 24%;
    margin-left: 180px;
    margin-bottom: 20px;
}
#bouj{
    display: block;
    width: 35%;
    margin-left: 155px;
    margin-bottom: 20px;
}
#cake{
    display: block;
    width: 60%;
    margin-left: 90px;
    margin-bottom: 20px;
}
#arta{
    display: block;
    width: 23%; 
    margin-left: 180px;
    margin-bottom: 20px; 
}
#titi,#titi2,#titi3{
    margin-left: -50px;
}
#crom{
    width: 50%;
    margin-left: 80px;
    transform: translateY(10%);

}
#dee{
    margin-left: 160px;
    margin-top: 20px;
}
#codechef{
    display: block;
    width: 45%;
    margin-top: 40px;
    margin-left: 90px;
    margin-bottom: 20px;
}
#xyz{
    display: block;
    width: 24%;
    margin-left: 140px;
    margin-bottom: 20px;
}
#bouj{
    display: block;
    width: 35%;
    margin-left: 115px;
    margin-bottom: 20px;
}
#cake{
    display: block;
    width: 60%;
    margin-left: 50px;
    margin-bottom: 20px;
}
#arta{
    display: block;
    width: 23%; 
    margin-left: 140px;
    margin-bottom: 20px; 
}
#dee{
    margin-left: 150px;
    margin-top: 20px;
}
#codechef{
    display: block;
    width: 45%;
    margin-top: 40px;
    margin-left: 90px;
    margin-bottom: 20px;
}
#xyz{
    display: block;
    width: 24%;
    margin-left: 140px;
    margin-bottom: 20px;
}
#bouj{
    display: block;
    width: 35%;
    margin-left: 115px;
    margin-bottom: 20px;
}
#cake{
    display: block;
    width: 60%;
    margin-left: 50px;
    margin-bottom: 20px;
}
#arta{
    display: block;
    width: 23%; 
    margin-left: 140px;
    margin-bottom: 20px; 
}
}
@media screen and (max-width: 370px){
    .gate{
  width: 280px;
  height:46px;
  position: relative;
  overflow: hidden;

  margin-left: 50px;
margin-top: -550px;
  background-color: rgb(0, 0, 0);
  border-radius: 14px;
}
    #test{
        height: 1000px;
    }
    #log{
   margin-left: 110px; 
}

#tra{
    width: 40%;
    margin-right: 0;
}
h2{
    width: 100%;
    font-size: 20px;
   padding-left: -20px;
}
#log{
   margin-left: 50px; 
}


.rest{
    width:400px;
    overflow: hidden;
}
video{
    width:500px;
    overflow: hidden;
}
div#testing{
margin-top: 30px;
margin-left: 120px;
padding-bottom: 100px;
}
div#testing{
margin-top: 30px;
margin-left:60px;
padding-bottom: 100px;
}
#slideshow {

margin-top: 80px;
width: 400px;
overflow: hidden;
}
.slideshow-container {
font-family: "ROM Mono",sans-serif;
max-width: 1100px;
position: relative;
margin-left: 25px;
}

.imag {
width: 400px;
height: 200px;
}

footer{
margin-top: 700px;
width:500px;
transform: translateX(-8%);
height: 600px;
background-color: #000000;
position: relative;
}
footer img{
width: 50%;
margin-left: 120px;
margin-top: 80px;
}
.links{
margin-top: 80px;

}
.links a{
text-decoration: none;
color:White;
text-align: center;
font-size: 21px;
display: block;
color:white;
margin-right: 30px;
height: 50px;
text-decoration: none;


font-family: "ROM Mono",sans-serif;
transition: 0.9s;
}
.links a:hover{
transition: 0.9s;
opacity: 0.4;
}
.links h3{
font-size: 18px;
color:white;
text-align: center;
font-family: "ROM Wide Light",sans-serif;
}
#write{
margin-left: 30px;
}
.links h4{
font-size: 16px;
color:white;
text-align: center;
margin-left: 80px;
width: 60%;
font-family: "ROM Wide Bold",sans-serif;
}

body{

overflow-x: hidden;
}
html{
overflow-x: hidden;

}
#titi{
    margin-left: -30px;
}
#titi2{
    margin-left: -30px;
}
#titi3{
    margin-left: -30px;
}
#crom{
    width: 50%;
    margin-left: 140px;
    transform: translateY(10%);

}
#dee{
    margin-left: 230px;
    margin-top: 20px;
}
#codechef{
    display: block;
    width: 45%;
    margin-top: 40px;
    margin-left: 160px;
    margin-bottom: 20px;
}
#xyz{
    display: block;
    width: 24%;
    margin-left: 210px;
    margin-bottom: 20px;
}
#bouj{
    display: block;
    width: 35%;
    margin-left: 185px;
    margin-bottom: 20px;
}
#cake{
    display: block;
    width: 60%;
    margin-left: 120px;
    margin-bottom: 20px;
}
#arta{
    display: block;
    width: 23%; 
    margin-left: 210px;
    margin-bottom: 20px; 
}
.spon{
height: 1100px;
}
#crom{
    width: 50%;
    margin-left: 140px;
    transform: translateY(10%);

}
#dee{
    margin-left: 230px;
    margin-top: 20px;
}
#codechef{
    display: block;
    width: 45%;
    margin-top: 40px;
    margin-left: 160px;
    margin-bottom: 20px;
}
#xyz{
    display: block;
    width: 24%;
    margin-left: 210px;
    margin-bottom: 20px;
}
#bouj{
    display: block;
    width: 35%;
    margin-left: 185px;
    margin-bottom: 20px;
}
#cake{
    display: block;
    width: 60%;
    margin-left: 120px;
    margin-bottom: 20px;
}
#arta{
    display: block;
    width: 23%; 
    margin-left: 210px;
    margin-bottom: 20px; 
}
.spon{
height: 1100px;
}
#log{
   margin-left: 60px; 
}
#br{
    margin-left: 35px;
}
h2{
   margin-right: -10px; 
}
#write{
    width: 90%;
    font-size: 24px;
}
#crom{
    width: 50%;
    margin-left: 70px;
    transform: translateY(10%);

}
#dee{
    margin-left: 170px;
    margin-top: 20px;
}
#codechef{
    display: block;
    width: 45%;
    margin-top: 40px;
    margin-left: 130px;
    margin-bottom: 20px;
}
#xyz{
    display: block;
    width: 24%;
    margin-left: 180px;
    margin-bottom: 20px;
}
#bouj{
    display: block;
    width: 35%;
    margin-left: 155px;
    margin-bottom: 20px;
}
#cake{
    display: block;
    width: 60%;
    margin-left: 90px;
    margin-bottom: 20px;
}
#arta{
    display: block;
    width: 23%; 
    margin-left: 180px;
    margin-bottom: 20px; 
}

.rest{
        background: url("IMG/Z3NITH'23 Brochure Cover 1 1.png");
        overflow: hidden;


        position: relative;
        height: 700px;
    }

#crom{
    width: 50%;
    margin-left: 110px;
    transform: translateY(10%);

}
#dee{
    margin-left: 200px;
    margin-top: 20px;
}
#codechef{
    display: block;
    width: 45%;
    margin-top: 40px;
    margin-left: 130px;
    margin-bottom: 20px;
}
#xyz{
    display: block;
    width: 24%;
    margin-left: 180px;
    margin-bottom: 20px;
}
#bouj{
    display: block;
    width: 35%;
    margin-left: 155px;
    margin-bottom: 20px;
}
#cake{
    display: block;
    width: 60%;
    margin-left: 90px;
    margin-bottom: 20px;
}
#arta{
    display: block;
    width: 23%; 
    margin-left: 180px;
    margin-bottom: 20px; 
}
#titi,#titi2,#titi3{
    margin-left: -50px;
}
#crom{
    width: 50%;
    margin-left: 80px;
    transform: translateY(10%);

}
#dee{
    margin-left: 160px;
    margin-top: 20px;
}
#codechef{
    display: block;
    width: 45%;
    margin-top: 40px;
    margin-left: 90px;
    margin-bottom: 20px;
}
#xyz{
    display: block;
    width: 24%;
    margin-left: 140px;
    margin-bottom: 20px;
}
#bouj{
    display: block;
    width: 35%;
    margin-left: 115px;
    margin-bottom: 20px;
}
#cake{
    display: block;
    width: 60%;
    margin-left: 50px;
    margin-bottom: 20px;
}
#arta{
    display: block;
    width: 23%; 
    margin-left: 140px;
    margin-bottom: 20px; 
}
#dee{
    margin-left: 150px;
    margin-top: 20px;
}
#codechef{
    display: block;
    width: 45%;
    margin-top: 40px;
    margin-left: 90px;
    margin-bottom: 20px;
}
#xyz{
    display: block;
    width: 24%;
    margin-left: 140px;
    margin-bottom: 20px;
}
#bouj{
    display: block;
    width: 35%;
    margin-left: 115px;
    margin-bottom: 20px;
}
#cake{
    display: block;
    width: 60%;
    margin-left: 50px;
    margin-bottom: 20px;
}
#arta{
    display: block;
    width: 23%; 
    margin-left: 140px;
    margin-bottom: 20px; 
}
}
@media screen and (max-width: 360px){
    .gate{
  width: 280px;
  height:46px;
  position: relative;
  overflow: hidden;

  margin-left: 50px;
margin-top: -550px;
  background-color: rgb(0, 0, 0);
  border-radius: 14px;
}
    #test{
        height: 1000px;
    }
    #log{
   margin-left: 110px; 
}

#tra{
    width: 40%;
    margin-right: 0;
}
h2{
    width: 100%;
    font-size: 20px;
   padding-left: -20px;
}
#log{
   margin-left: 50px; 
}


.rest{
    width:400px;
    overflow: hidden;
}
video{
    width:500px;
    overflow: hidden;
}
div#testing{
margin-top: 30px;
margin-left: 120px;
padding-bottom: 100px;
}
div#testing{
margin-top: 30px;
margin-left:60px;
padding-bottom: 100px;
}
#slideshow {

margin-top: 80px;
width: 400px;
overflow: hidden;
}
.slideshow-container {
font-family: "ROM Mono",sans-serif;
max-width: 1100px;
position: relative;
margin-left: 25px;
}

.imag {
width: 400px;
height: 200px;
}

footer{
margin-top: 700px;
width:500px;
transform: translateX(-8%);
height: 600px;
background-color: #000000;
position: relative;
}
footer img{
width: 50%;
margin-left: 120px;
margin-top: 80px;
}
.links{
margin-top: 80px;

}
.links a{
text-decoration: none;
color:White;
text-align: center;
font-size: 21px;
display: block;
color:white;
margin-right: 30px;
height: 50px;
text-decoration: none;


font-family: "ROM Mono",sans-serif;
transition: 0.9s;
}
.links a:hover{
transition: 0.9s;
opacity: 0.4;
}
.links h3{
font-size: 18px;
color:white;
text-align: center;
font-family: "ROM Wide Light",sans-serif;
}
#write{
margin-left: 30px;
}
.links h4{
font-size: 16px;
color:white;
text-align: center;
margin-left: 80px;
width: 60%;
font-family: "ROM Wide Bold",sans-serif;
}

body{

overflow-x: hidden;
}
html{
overflow-x: hidden;

}
#titi{
    margin-left: -30px;
}
#titi2{
    margin-left: -30px;
}
#titi3{
    margin-left: -30px;
}
#crom{
    width: 50%;
    margin-left: 140px;
    transform: translateY(10%);

}
#dee{
    margin-left: 230px;
    margin-top: 20px;
}
#codechef{
    display: block;
    width: 45%;
    margin-top: 40px;
    margin-left: 160px;
    margin-bottom: 20px;
}
#xyz{
    display: block;
    width: 24%;
    margin-left: 210px;
    margin-bottom: 20px;
}
#bouj{
    display: block;
    width: 35%;
    margin-left: 185px;
    margin-bottom: 20px;
}
#cake{
    display: block;
    width: 60%;
    margin-left: 120px;
    margin-bottom: 20px;
}
#arta{
    display: block;
    width: 23%; 
    margin-left: 210px;
    margin-bottom: 20px; 
}
.spon{
height: 1100px;
}
#crom{
    width: 50%;
    margin-left: 140px;
    transform: translateY(10%);

}
#dee{
    margin-left: 230px;
    margin-top: 20px;
}
#codechef{
    display: block;
    width: 45%;
    margin-top: 40px;
    margin-left: 160px;
    margin-bottom: 20px;
}
#xyz{
    display: block;
    width: 24%;
    margin-left: 210px;
    margin-bottom: 20px;
}
#bouj{
    display: block;
    width: 35%;
    margin-left: 185px;
    margin-bottom: 20px;
}
#cake{
    display: block;
    width: 60%;
    margin-left: 120px;
    margin-bottom: 20px;
}
#arta{
    display: block;
    width: 23%; 
    margin-left: 210px;
    margin-bottom: 20px; 
}
.spon{
height: 1100px;
}
#log{
   margin-left: 40px; 
}
#br{
    margin-left: 15px;
    margin-right: 15px;
}
#br{
    margin-left: 15px;
}
.rest h2{
transform: translateX(-5%);
}
#write{
    width: 90%;
    font-size: 24px;
}
#crom{
    width: 50%;
    margin-left: 70px;
    transform: translateY(10%);

}
#dee{
    margin-left: 170px;
    margin-top: 20px;
}
#codechef{
    display: block;
    width: 45%;
    margin-top: 40px;
    margin-left: 130px;
    margin-bottom: 20px;
}
#xyz{
    display: block;
    width: 24%;
    margin-left: 180px;
    margin-bottom: 20px;
}
#bouj{
    display: block;
    width: 35%;
    margin-left: 155px;
    margin-bottom: 20px;
}
#cake{
    display: block;
    width: 60%;
    margin-left: 90px;
    margin-bottom: 20px;
}
#arta{
    display: block;
    width: 23%; 
    margin-left: 180px;
    margin-bottom: 20px; 
}

.rest{
        background: url("IMG/Z3NITH'23 Brochure Cover 1 1.png");
        overflow: hidden;


        position: relative;
        height: 700px;
    }

#crom{
    width: 50%;
    margin-left: 110px;
    transform: translateY(10%);

}
#dee{
    margin-left: 200px;
    margin-top: 20px;
}
#codechef{
    display: block;
    width: 45%;
    margin-top: 40px;
    margin-left: 130px;
    margin-bottom: 20px;
}
#xyz{
    display: block;
    width: 24%;
    margin-left: 180px;
    margin-bottom: 20px;
}
#bouj{
    display: block;
    width: 35%;
    margin-left: 155px;
    margin-bottom: 20px;
}
#cake{
    display: block;
    width: 60%;
    margin-left: 90px;
    margin-bottom: 20px;
}
#arta{
    display: block;
    width: 23%; 
    margin-left: 180px;
    margin-bottom: 20px; 
}
#titi,#titi2,#titi3{
    margin-left: -50px;
}
#crom{
    width: 50%;
    margin-left: 80px;
    transform: translateY(10%);

}
#dee{
    margin-left: 160px;
    margin-top: 20px;
}
#codechef{
    display: block;
    width: 45%;
    margin-top: 40px;
    margin-left: 90px;
    margin-bottom: 20px;
}
#xyz{
    display: block;
    width: 24%;
    margin-left: 140px;
    margin-bottom: 20px;
}
#bouj{
    display: block;
    width: 35%;
    margin-left: 115px;
    margin-bottom: 20px;
}
#cake{
    display: block;
    width: 60%;
    margin-left: 50px;
    margin-bottom: 20px;
}
#arta{
    display: block;
    width: 23%; 
    margin-left: 140px;
    margin-bottom: 20px; 
}
#dee{
    margin-left: 150px;
    margin-top: 20px;
}
#codechef{
    display: block;
    width: 45%;
    margin-top: 40px;
    margin-left: 90px;
    margin-bottom: 20px;
}
#xyz{
    display: block;
    width: 24%;
    margin-left: 140px;
    margin-bottom: 20px;
}
#bouj{
    display: block;
    width: 35%;
    margin-left: 115px;
    margin-bottom: 20px;
}
#cake{
    display: block;
    width: 60%;
    margin-left: 50px;
    margin-bottom: 20px;
}
#arta{
    display: block;
    width: 23%; 
    margin-left: 140px;
    margin-bottom: 20px; 
}
}
@media screen and (max-width: 350px){
    #test{
        height: 1000px;
    }
    #log{
   margin-left: 110px; 
}

#tra{
    width: 40%;
    margin-right: 0;
}
h2{
    width: 100%;
    font-size: 20px;
   padding-left: -20px;
}
#log{
   margin-left: 50px; 
}


.rest{
    width:400px;
    overflow: hidden;
}
video{
    width:500px;
    overflow: hidden;
}
div#testing{
margin-top: 30px;
margin-left:60px;
padding-bottom: 100px;
}
#slideshow {

margin-top: 80px;
width: 400px;
overflow: hidden;
}
.slideshow-container {
font-family: "ROM Mono",sans-serif;
max-width: 1100px;
position: relative;
margin-left: 25px;
}

.imag {
width: 400px;
height: 200px;
}

footer{
margin-top: 700px;
width:500px;
transform: translateX(-10%);
height: 600px;
background-color: #000000;
position: relative;
}
footer img{
width: 50%;
margin-left: 120px;
margin-top: 80px;
}
.links{
margin-top: 80px;

}
.links a{
text-decoration: none;
color:White;
text-align: center;
font-size: 21px;
display: block;
color:white;
margin-right: 30px;
height: 50px;
text-decoration: none;


font-family: "ROM Mono",sans-serif;
transition: 0.9s;
}
.links a:hover{
transition: 0.9s;
opacity: 0.4;
}
.links h3{
font-size: 18px;
color:white;
text-align: center;
font-family: "ROM Wide Light",sans-serif;
}
#write{
margin-left: 30px;
}
.links h4{
font-size: 16px;
color:white;
text-align: center;
margin-left: 80px;
width: 60%;
font-family: "ROM Wide Bold",sans-serif;
}

body{

overflow-x: hidden;
}
html{
overflow-x: hidden;

}
#titi{
    margin-left: -30px;
}
#titi2{
    margin-left: -30px;
}
#titi3{
    margin-left: -30px;
}
#crom{
    width: 50%;
    margin-left: 140px;
    transform: translateY(10%);

}
#dee{
    margin-left: 230px;
    margin-top: 20px;
}
#codechef{
    display: block;
    width: 45%;
    margin-top: 40px;
    margin-left: 160px;
    margin-bottom: 20px;
}
#xyz{
    display: block;
    width: 24%;
    margin-left: 210px;
    margin-bottom: 20px;
}
#bouj{
    display: block;
    width: 35%;
    margin-left: 185px;
    margin-bottom: 20px;
}
#cake{
    display: block;
    width: 60%;
    margin-left: 120px;
    margin-bottom: 20px;
}
#arta{
    display: block;
    width: 23%; 
    margin-left: 210px;
    margin-bottom: 20px; 
}
.spon{
height: 1100px;
}
#crom{
    width: 50%;
    margin-left: 110px;
    transform: translateY(10%);

}
#dee{
    margin-left: 230px;
    margin-top: 20px;
}
#codechef{
    display: block;
    width: 45%;
    margin-top: 40px;
    margin-left: 130px;
    margin-bottom: 20px;
}
#xyz{
    display: block;
    width: 24%;
    margin-left: 180px;
    margin-bottom: 20px;
}
#bouj{
    display: block;
    width: 35%;
    margin-left: 125px;
    margin-bottom: 20px;
}
#cake{
    display: block;
    width: 60%;
    margin-left: 120px;
    margin-bottom: 20px;
}
#arta{
    display: block;
    width: 23%; 
    margin-left: 180px;
    margin-bottom: 20px; 
}
.spon{
height: 1100px;
}
#log{
   margin-left: 30px; 
}
#br{
    margin-left: 15px;
}
h2{
   margin-right: 40px; 
}
#write{
    width: 90%;
    font-size: 24px;
}
#crom{
    width: 50%;
    margin-left: 40px;
    transform: translateY(10%);

}
#dee{
    margin-left: 140px;
    margin-top: 20px;
}
#codechef{
    display: block;
    width: 45%;
    margin-top: 40px;
    margin-left: 90px;
    margin-bottom: 20px;
}
#xyz{
    display: block;
    width: 24%;
    margin-left: 150px;
    margin-bottom: 20px;
}
#bouj{
    display: block;
    width: 35%;
    margin-left: 125px;
    margin-bottom: 20px;
}
#cake{
    display: block;
    width: 60%;
    margin-left: 60px;
    margin-bottom: 20px;
}
#arta{
    display: block;
    width: 23%; 
    margin-left: 140px;
    margin-bottom: 20px; 
}

.rest{
        background: url("IMG/Z3NITH'23 Brochure Cover 1 1.png");
        overflow: hidden;


        position: relative;
        height: 700px;
    }

#crom{
    width: 50%;
    margin-left: 80px;
    transform: translateY(10%);

}
#dee{
    margin-left:170px;
    margin-top: 20px;
}
#codechef{
    display: block;
    width: 45%;
    margin-top: 40px;
    margin-left: 90px;
    margin-bottom: 20px;
}
#xyz{
    display: block;
    width: 24%;
    margin-left: 150px;
    margin-bottom: 20px;
}
#bouj{
    display: block;
    width: 35%;
    margin-left: 125px;
    margin-bottom: 20px;
}
#cake{
    display: block;
    width: 60%;
    margin-left: 50px;
    margin-bottom: 20px;
}
#arta{
    display: block;
    width: 23%; 
    margin-left: 120px;
    margin-bottom: 20px; 
}
#titi,#titi2,#titi3{
    margin-left: -50px;
}
#crom{
    width: 50%;
    margin-left: 80px;
    transform: translateY(10%);

}
#dee{
    margin-left: 160px;
    margin-top: 20px;
}
#codechef{
    display: block;
    width: 45%;
    margin-top: 40px;
    margin-left: 90px;
    margin-bottom: 20px;
}
#xyz{
    display: block;
    width: 24%;
    margin-left: 140px;
    margin-bottom: 20px;
}
#bouj{
    display: block;
    width: 35%;
    margin-left: 115px;
    margin-bottom: 20px;
}
#cake{
    display: block;
    width: 60%;
    margin-left: 50px;
    margin-bottom: 20px;
}
#arta{
    display: block;
    width: 23%; 
    margin-left: 140px;
    margin-bottom: 20px; 
}
#crom{
    width: 50%;
    margin-left: 80px;
    transform: translateY(10%);

}
#dee{
    margin-left:170px;
    margin-top: 20px;
}
#codechef{
    display: block;
    width: 45%;
    margin-top: 40px;
    margin-left: 90px;
    margin-bottom: 20px;
}
#xyz{
    display: block;
    width: 24%;
    margin-left: 150px;
    margin-bottom: 20px;
}
#bouj{
    display: block;
    width: 35%;
    margin-left: 125px;
    margin-bottom: 20px;
}
#cake{
    display: block;
    width: 60%;
    margin-left: 50px;
    margin-bottom: 20px;
}
#arta{
    display: block;
    width: 23%; 
    margin-left: 120px;
    margin-bottom: 20px; 
}
#titi,#titi2,#titi3{
    margin-left: -70px;
}
#crom{
    width: 50%;
    margin-left: 60px;
    transform: translateY(10%);

}
#dee{
    margin-left: 140px;
    margin-top: 20px;
}
#codechef{
    display: block;
    width: 45%;
    margin-top: 40px;
    margin-left: 70px;
    margin-bottom: 20px;
}
#xyz{
    display: block;
    width: 24%;
    margin-left: 120px;
    margin-bottom: 20px;
}
#bouj{
    display: block;
    width: 35%;
    margin-left: 95px;
    margin-bottom: 20px;
}
#cake{
    display: block;
    width: 60%;
    margin-left: 30px;
    margin-bottom: 20px;
}
#arta{
    display: block;
    width: 23%; 
    margin-left: 120px;
    margin-bottom: 20px; 
}
}
@media screen and (max-width: 340px){
    #test{
        height: 1000px;
    }
    #log{
   margin-left: 110px; 
}

#tra{
    width: 40%;
    margin-right: 0;
}
h2{
    width: 100%;
    font-size: 20px;
   padding-left: -20px;
}
#log{
   margin-left: 50px; 
}


.rest{
    width:400px;
    overflow: hidden;
}
video{
    width:500px;
    overflow: hidden;
}
div#testing{
margin-top: 30px;
margin-left:60px;
padding-bottom: 100px;
}
#slideshow {

margin-top: 80px;
width: 400px;
overflow: hidden;
}
.slideshow-container {
font-family: "ROM Mono",sans-serif;
max-width: 1100px;
position: relative;
margin-left: 25px;
}

.imag {
width: 400px;
height: 200px;
}

footer{
margin-top: 700px;
width:500px;
transform: translateX(-10%);
height: 600px;
background-color: #000000;
position: relative;
}
footer img{
width: 50%;
margin-left: 120px;
margin-top: 80px;
}
.links{
margin-top: 80px;

}
.links a{
text-decoration: none;
color:White;
text-align: center;
font-size: 21px;
display: block;
color:white;
margin-right: 30px;
height: 50px;
text-decoration: none;


font-family: "ROM Mono",sans-serif;
transition: 0.9s;
}
.links a:hover{
transition: 0.9s;
opacity: 0.4;
}
.links h3{
font-size: 18px;
color:white;
text-align: center;
font-family: "ROM Wide Light",sans-serif;
}
#write{
margin-left: 30px;
}
.links h4{
font-size: 16px;
color:white;
text-align: center;
margin-left: 80px;
width: 60%;
font-family: "ROM Wide Bold",sans-serif;
}

body{

overflow-x: hidden;
}
html{
overflow-x: hidden;

}
#titi{
    margin-left: -30px;
}
#titi2{
    margin-left: -30px;
}
#titi3{
    margin-left: -30px;
}
#crom{
    width: 50%;
    margin-left: 140px;
    transform: translateY(10%);

}
#dee{
    margin-left: 230px;
    margin-top: 20px;
}
#codechef{
    display: block;
    width: 45%;
    margin-top: 40px;
    margin-left: 160px;
    margin-bottom: 20px;
}
#xyz{
    display: block;
    width: 24%;
    margin-left: 210px;
    margin-bottom: 20px;
}
#bouj{
    display: block;
    width: 35%;
    margin-left: 185px;
    margin-bottom: 20px;
}
#cake{
    display: block;
    width: 60%;
    margin-left: 120px;
    margin-bottom: 20px;
}
#arta{
    display: block;
    width: 23%; 
    margin-left: 210px;
    margin-bottom: 20px; 
}
.spon{
height: 1100px;
}
#crom{
    width: 50%;
    margin-left: 110px;
    transform: translateY(10%);

}
#dee{
    margin-left: 230px;
    margin-top: 20px;
}
#codechef{
    display: block;
    width: 45%;
    margin-top: 40px;
    margin-left: 130px;
    margin-bottom: 20px;
}
#xyz{
    display: block;
    width: 24%;
    margin-left: 180px;
    margin-bottom: 20px;
}
#bouj{
    display: block;
    width: 35%;
    margin-left: 125px;
    margin-bottom: 20px;
}
#cake{
    display: block;
    width: 60%;
    margin-left: 120px;
    margin-bottom: 20px;
}
#arta{
    display: block;
    width: 23%; 
    margin-left: 180px;
    margin-bottom: 20px; 
}
.spon{
height: 1100px;
}
#log{
   margin-left: 30px; 
}
#br{
    margin-left: 15px;
}
h2{
   margin-right: 40px; 
}
#write{
    width: 90%;
    font-size: 24px;
}
#crom{
    width: 50%;
    margin-left: 40px;
    transform: translateY(10%);

}
#dee{
    margin-left: 140px;
    margin-top: 20px;
}
#codechef{
    display: block;
    width: 45%;
    margin-top: 40px;
    margin-left: 90px;
    margin-bottom: 20px;
}
#xyz{
    display: block;
    width: 24%;
    margin-left: 150px;
    margin-bottom: 20px;
}
#bouj{
    display: block;
    width: 35%;
    margin-left: 125px;
    margin-bottom: 20px;
}
#cake{
    display: block;
    width: 60%;
    margin-left: 60px;
    margin-bottom: 20px;
}
#arta{
    display: block;
    width: 23%; 
    margin-left: 140px;
    margin-bottom: 20px; 
}

.rest{
        background: url("IMG/Z3NITH'23 Brochure Cover 1 1.png");
        overflow: hidden;


        position: relative;
        height: 700px;
    }

#crom{
    width: 50%;
    margin-left: 80px;
    transform: translateY(10%);

}
#dee{
    margin-left:170px;
    margin-top: 20px;
}
#codechef{
    display: block;
    width: 45%;
    margin-top: 40px;
    margin-left: 90px;
    margin-bottom: 20px;
}
#xyz{
    display: block;
    width: 24%;
    margin-left: 150px;
    margin-bottom: 20px;
}
#bouj{
    display: block;
    width: 35%;
    margin-left: 125px;
    margin-bottom: 20px;
}
#cake{
    display: block;
    width: 60%;
    margin-left: 50px;
    margin-bottom: 20px;
}
#arta{
    display: block;
    width: 23%; 
    margin-left: 120px;
    margin-bottom: 20px; 
}
#titi,#titi2,#titi3{
    margin-left: -50px;
}
#crom{
    width: 50%;
    margin-left: 80px;
    transform: translateY(10%);

}
#dee{
    margin-left: 160px;
    margin-top: 20px;
}
#codechef{
    display: block;
    width: 45%;
    margin-top: 40px;
    margin-left: 90px;
    margin-bottom: 20px;
}
#xyz{
    display: block;
    width: 24%;
    margin-left: 140px;
    margin-bottom: 20px;
}
#bouj{
    display: block;
    width: 35%;
    margin-left: 115px;
    margin-bottom: 20px;
}
#cake{
    display: block;
    width: 60%;
    margin-left: 50px;
    margin-bottom: 20px;
}
#arta{
    display: block;
    width: 23%; 
    margin-left: 140px;
    margin-bottom: 20px; 
}
#crom{
    width: 50%;
    margin-left: 80px;
    transform: translateY(10%);

}
#dee{
    margin-left:170px;
    margin-top: 20px;
}
#codechef{
    display: block;
    width: 45%;
    margin-top: 40px;
    margin-left: 90px;
    margin-bottom: 20px;
}
#xyz{
    display: block;
    width: 24%;
    margin-left: 150px;
    margin-bottom: 20px;
}
#bouj{
    display: block;
    width: 35%;
    margin-left: 125px;
    margin-bottom: 20px;
}
#cake{
    display: block;
    width: 60%;
    margin-left: 50px;
    margin-bottom: 20px;
}
#arta{
    display: block;
    width: 23%; 
    margin-left: 120px;
    margin-bottom: 20px; 
}
#titi,#titi2,#titi3{
    margin-left: -70px;
}
#crom{
    width: 50%;
    margin-left: 60px;
    transform: translateY(10%);

}
#dee{
    margin-left: 140px;
    margin-top: 20px;
}
#codechef{
    display: block;
    width: 45%;
    margin-top: 40px;
    margin-left: 70px;
    margin-bottom: 20px;
}
#xyz{
    display: block;
    width: 24%;
    margin-left: 120px;
    margin-bottom: 20px;
}
#bouj{
    display: block;
    width: 35%;
    margin-left: 95px;
    margin-bottom: 20px;
}
#cake{
    display: block;
    width: 60%;
    margin-left: 30px;
    margin-bottom: 20px;
}
#arta{
    display: block;
    width: 23%; 
    margin-left: 120px;
    margin-bottom: 20px; 
}
}
@media screen and (max-width: 340px){
    #test{
    height: 1000px;
    }
    #log{
   margin-left: 110px; 
}

#tra{
    width: 40%;
    margin-right: 0;
}
h2{
    width: 100%;
    font-size: 20px;
   padding-left: -20px;
}
#log{
   margin-left: 50px; 
}


.rest{
    width:400px;
    overflow: hidden;
}
video{
    width:500px;
    overflow: hidden;
}
div#testing{
margin-top: 30px;
margin-left:60px;
padding-bottom: 100px;
}
#slideshow {

margin-top: 80px;
width: 400px;
overflow: hidden;
}
.slideshow-container {
font-family: "ROM Mono",sans-serif;
max-width: 1100px;
position: relative;
margin-left: 25px;
}

.imag {
width: 400px;
height: 200px;
}

footer{
margin-top: 700px;
width:500px;
transform: translateX(-10%);
height: 600px;
background-color: #000000;
position: relative;
}
footer img{
width: 50%;
margin-left: 120px;
margin-top: 80px;
}
.links{
margin-top: 80px;

}
.links a{
text-decoration: none;
color:White;
text-align: center;
font-size: 21px;
display: block;
color:white;
margin-right: 30px;
height: 50px;
text-decoration: none;


font-family: "ROM Mono",sans-serif;
transition: 0.9s;
}
.links a:hover{
transition: 0.9s;
opacity: 0.4;
}
.links h3{
font-size: 18px;
color:white;
text-align: center;
font-family: "ROM Wide Light",sans-serif;
}
#write{
margin-left: 30px;
}
.links h4{
font-size: 16px;
color:white;
text-align: center;
margin-left: 80px;
width: 60%;
font-family: "ROM Wide Bold",sans-serif;
}

body{

overflow-x: hidden;
}
html{
overflow-x: hidden;

}
#titi{
    margin-left: -30px;
}
#titi2{
    margin-left: -30px;
}
#titi3{
    margin-left: -30px;
}
#crom{
    width: 50%;
    margin-left: 140px;
    transform: translateY(10%);

}
#dee{
    margin-left: 230px;
    margin-top: 20px;
}
#codechef{
    display: block;
    width: 45%;
    margin-top: 40px;
    margin-left: 160px;
    margin-bottom: 20px;
}
#xyz{
    display: block;
    width: 24%;
    margin-left: 210px;
    margin-bottom: 20px;
}
#bouj{
    display: block;
    width: 35%;
    margin-left: 185px;
    margin-bottom: 20px;
}
#cake{
    display: block;
    width: 60%;
    margin-left: 120px;
    margin-bottom: 20px;
}
#arta{
    display: block;
    width: 23%; 
    margin-left: 210px;
    margin-bottom: 20px; 
}
.spon{
height: 1100px;
}
#crom{
    width: 50%;
    margin-left: 110px;
    transform: translateY(10%);

}
#dee{
    margin-left: 230px;
    margin-top: 20px;
}
#codechef{
    display: block;
    width: 45%;
    margin-top: 40px;
    margin-left: 130px;
    margin-bottom: 20px;
}
#xyz{
    display: block;
    width: 24%;
    margin-left: 180px;
    margin-bottom: 20px;
}
#bouj{
    display: block;
    width: 35%;
    margin-left: 125px;
    margin-bottom: 20px;
}
#cake{
    display: block;
    width: 60%;
    margin-left: 120px;
    margin-bottom: 20px;
}
#arta{
    display: block;
    width: 23%; 
    margin-left: 180px;
    margin-bottom: 20px; 
}
.spon{
height: 1100px;
}
#log{
   margin-left: 30px; 
}
#br{
    margin-left: 15px;
}
h2{
   margin-right: 40px; 
}
#write{
    width: 90%;
    font-size: 24px;
}
#crom{
    width: 50%;
    margin-left: 40px;
    transform: translateY(10%);

}
#dee{
    margin-left: 140px;
    margin-top: 20px;
}
#codechef{
    display: block;
    width: 45%;
    margin-top: 40px;
    margin-left: 90px;
    margin-bottom: 20px;
}
#xyz{
    display: block;
    width: 24%;
    margin-left: 150px;
    margin-bottom: 20px;
}
#bouj{
    display: block;
    width: 35%;
    margin-left: 125px;
    margin-bottom: 20px;
}
#cake{
    display: block;
    width: 60%;
    margin-left: 60px;
    margin-bottom: 20px;
}
#arta{
    display: block;
    width: 23%; 
    margin-left: 140px;
    margin-bottom: 20px; 
}

.rest{
        background: url("IMG/Z3NITH'23 Brochure Cover 1 1.png");
        overflow: hidden;


        position: relative;
        height: 700px;
    }

#crom{
    width: 50%;
    margin-left: 80px;
    transform: translateY(10%);

}
#dee{
    margin-left:170px;
    margin-top: 20px;
}
#codechef{
    display: block;
    width: 45%;
    margin-top: 40px;
    margin-left: 90px;
    margin-bottom: 20px;
}
#xyz{
    display: block;
    width: 24%;
    margin-left: 150px;
    margin-bottom: 20px;
}
#bouj{
    display: block;
    width: 35%;
    margin-left: 125px;
    margin-bottom: 20px;
}
#cake{
    display: block;
    width: 60%;
    margin-left: 50px;
    margin-bottom: 20px;
}
#arta{
    display: block;
    width: 23%; 
    margin-left: 120px;
    margin-bottom: 20px; 
}
#titi,#titi2,#titi3{
    margin-left: -50px;
}
#crom{
    width: 50%;
    margin-left: 80px;
    transform: translateY(10%);

}
#dee{
    margin-left: 160px;
    margin-top: 20px;
}
#codechef{
    display: block;
    width: 45%;
    margin-top: 40px;
    margin-left: 90px;
    margin-bottom: 20px;
}
#xyz{
    display: block;
    width: 24%;
    margin-left: 140px;
    margin-bottom: 20px;
}
#bouj{
    display: block;
    width: 35%;
    margin-left: 115px;
    margin-bottom: 20px;
}
#cake{
    display: block;
    width: 60%;
    margin-left: 50px;
    margin-bottom: 20px;
}
#arta{
    display: block;
    width: 23%; 
    margin-left: 140px;
    margin-bottom: 20px; 
}
#crom{
    width: 50%;
    margin-left: 80px;
    transform: translateY(10%);

}
#dee{
    margin-left:170px;
    margin-top: 20px;
}
#codechef{
    display: block;
    width: 45%;
    margin-top: 40px;
    margin-left: 90px;
    margin-bottom: 20px;
}
#xyz{
    display: block;
    width: 24%;
    margin-left: 150px;
    margin-bottom: 20px;
}
#bouj{
    display: block;
    width: 35%;
    margin-left: 125px;
    margin-bottom: 20px;
}
#cake{
    display: block;
    width: 60%;
    margin-left: 50px;
    margin-bottom: 20px;
}
#arta{
    display: block;
    width: 23%; 
    margin-left: 120px;
    margin-bottom: 20px; 
}
#titi,#titi2,#titi3{
    margin-left: -70px;
}
#crom{
    width: 50%;
    margin-left: 60px;
    transform: translateY(10%);

}
#dee{
    margin-left: 140px;
    margin-top: 20px;
}
#codechef{
    display: block;
    width: 45%;
    margin-top: 40px;
    margin-left: 70px;
    margin-bottom: 20px;
}
#xyz{
    display: block;
    width: 24%;
    margin-left: 120px;
    margin-bottom: 20px;
}
#bouj{
    display: block;
    width: 35%;
    margin-left: 95px;
    margin-bottom: 20px;
}
#cake{
    display: block;
    width: 60%;
    margin-left: 30px;
    margin-bottom: 20px;
}
#arta{
    display: block;
    width: 23%; 
    margin-left: 120px;
    margin-bottom: 20px; 
}
}
@media screen and (max-width: 330px){
    #test{
        height: 1000px;
    }
    #log{
   margin-left: 110px; 
}

#tra{
    width: 40%;
    margin-right: 0;
}
h2{
    width: 100%;
    font-size: 20px;
   padding-left: -20px;
}
#log{
   margin-left: 50px; 
}


.rest{
    width:400px;
    overflow: hidden;
}
video{
    width:500px;
    overflow: hidden;
}
div#testing{
margin-top: 30px;
margin-left:60px;
padding-bottom: 100px;
}
#slideshow {

margin-top: 80px;
width: 400px;
overflow: hidden;
}
.slideshow-container {
font-family: "ROM Mono",sans-serif;
max-width: 1100px;
position: relative;
margin-left: 25px;
}

.imag {
width: 400px;
height: 200px;
}

footer{
margin-top: 700px;
width:500px;
transform: translateX(-10%);
height: 600px;
background-color: #000000;
position: relative;
}
footer img{
width: 50%;
margin-left: 120px;
margin-top: 80px;
}
.links{
margin-top: 80px;

}
.links a{
text-decoration: none;
color:White;
text-align: center;
font-size: 21px;
display: block;
color:white;
margin-right: 30px;
height: 50px;
text-decoration: none;


font-family: "ROM Mono",sans-serif;
transition: 0.9s;
}
.links a:hover{
transition: 0.9s;
opacity: 0.4;
}
.links h3{
font-size: 18px;
color:white;
text-align: center;
font-family: "ROM Wide Light",sans-serif;
}
#write{
margin-left: 30px;
}
.links h4{
font-size: 16px;
color:white;
text-align: center;
margin-left: 80px;
width: 60%;
font-family: "ROM Wide Bold",sans-serif;
}

body{

overflow-x: hidden;
}
html{
overflow-x: hidden;

}
#titi{
    margin-left: -30px;
}
#titi2{
    margin-left: -30px;
}
#titi3{
    margin-left: -30px;
}
#crom{
    width: 50%;
    margin-left: 140px;
    transform: translateY(10%);

}
#dee{
    margin-left: 230px;
    margin-top: 20px;
}
#codechef{
    display: block;
    width: 45%;
    margin-top: 40px;
    margin-left: 160px;
    margin-bottom: 20px;
}
#xyz{
    display: block;
    width: 24%;
    margin-left: 210px;
    margin-bottom: 20px;
}
#bouj{
    display: block;
    width: 35%;
    margin-left: 185px;
    margin-bottom: 20px;
}
#cake{
    display: block;
    width: 60%;
    margin-left: 120px;
    margin-bottom: 20px;
}
#arta{
    display: block;
    width: 23%; 
    margin-left: 210px;
    margin-bottom: 20px; 
}
.spon{
height: 1100px;
}
#crom{
    width: 50%;
    margin-left: 110px;
    transform: translateY(10%);

}
#dee{
    margin-left: 230px;
    margin-top: 20px;
}
#codechef{
    display: block;
    width: 45%;
    margin-top: 40px;
    margin-left: 130px;
    margin-bottom: 20px;
}
#xyz{
    display: block;
    width: 24%;
    margin-left: 180px;
    margin-bottom: 20px;
}
#bouj{
    display: block;
    width: 35%;
    margin-left: 125px;
    margin-bottom: 20px;
}
#cake{
    display: block;
    width: 60%;
    margin-left: 120px;
    margin-bottom: 20px;
}
#arta{
    display: block;
    width: 23%; 
    margin-left: 180px;
    margin-bottom: 20px; 
}
.spon{
height: 1100px;
}
#log{
   margin-left: 30px; 
}
#br{
    margin-left: 15px;
}
h2{
   margin-right: 40px; 
}
#write{
    width: 90%;
    font-size: 24px;
}
#crom{
    width: 50%;
    margin-left: 40px;
    transform: translateY(10%);

}
#dee{
    margin-left: 140px;
    margin-top: 20px;
}
#codechef{
    display: block;
    width: 45%;
    margin-top: 40px;
    margin-left: 90px;
    margin-bottom: 20px;
}
#xyz{
    display: block;
    width: 24%;
    margin-left: 150px;
    margin-bottom: 20px;
}
#bouj{
    display: block;
    width: 35%;
    margin-left: 125px;
    margin-bottom: 20px;
}
#cake{
    display: block;
    width: 60%;
    margin-left: 60px;
    margin-bottom: 20px;
}
#arta{
    display: block;
    width: 23%; 
    margin-left: 140px;
    margin-bottom: 20px; 
}

.rest{
        background: url("IMG/Z3NITH'23 Brochure Cover 1 1.png");
        overflow: hidden;


        position: relative;
        height: 700px;
    }

#crom{
    width: 50%;
    margin-left: 80px;
    transform: translateY(10%);

}
#dee{
    margin-left:170px;
    margin-top: 20px;
}
#codechef{
    display: block;
    width: 45%;
    margin-top: 40px;
    margin-left: 90px;
    margin-bottom: 20px;
}
#xyz{
    display: block;
    width: 24%;
    margin-left: 150px;
    margin-bottom: 20px;
}
#bouj{
    display: block;
    width: 35%;
    margin-left: 125px;
    margin-bottom: 20px;
}
#cake{
    display: block;
    width: 60%;
    margin-left: 50px;
    margin-bottom: 20px;
}
#arta{
    display: block;
    width: 23%; 
    margin-left: 120px;
    margin-bottom: 20px; 
}
#titi,#titi2,#titi3{
    margin-left: -50px;
}
#crom{
    width: 50%;
    margin-left: 80px;
    transform: translateY(10%);

}
#dee{
    margin-left: 160px;
    margin-top: 20px;
}
#codechef{
    display: block;
    width: 45%;
    margin-top: 40px;
    margin-left: 90px;
    margin-bottom: 20px;
}
#xyz{
    display: block;
    width: 24%;
    margin-left: 140px;
    margin-bottom: 20px;
}
#bouj{
    display: block;
    width: 35%;
    margin-left: 115px;
    margin-bottom: 20px;
}
#cake{
    display: block;
    width: 60%;
    margin-left: 50px;
    margin-bottom: 20px;
}
#arta{
    display: block;
    width: 23%; 
    margin-left: 140px;
    margin-bottom: 20px; 
}
#crom{
    width: 50%;
    margin-left: 80px;
    transform: translateY(10%);

}
#dee{
    margin-left:170px;
    margin-top: 20px;
}
#codechef{
    display: block;
    width: 45%;
    margin-top: 40px;
    margin-left: 90px;
    margin-bottom: 20px;
}
#xyz{
    display: block;
    width: 24%;
    margin-left: 150px;
    margin-bottom: 20px;
}
#bouj{
    display: block;
    width: 35%;
    margin-left: 125px;
    margin-bottom: 20px;
}
#cake{
    display: block;
    width: 60%;
    margin-left: 50px;
    margin-bottom: 20px;
}
#arta{
    display: block;
    width: 23%; 
    margin-left: 120px;
    margin-bottom: 20px; 
}
#titi,#titi2,#titi3{
    margin-left: -70px;
}
#crom{
    width: 50%;
    margin-left: 60px;
    transform: translateY(10%);

}
#dee{
    margin-left: 140px;
    margin-top: 20px;
}
#codechef{
    display: block;
    width: 45%;
    margin-top: 40px;
    margin-left: 70px;
    margin-bottom: 20px;
}
#xyz{
    display: block;
    width: 24%;
    margin-left: 120px;
    margin-bottom: 20px;
}
#bouj{
    display: block;
    width: 35%;
    margin-left: 95px;
    margin-bottom: 20px;
}
#cake{
    display: block;
    width: 60%;
    margin-left: 30px;
    margin-bottom: 20px;
}
#arta{
    display: block;
    width: 23%; 
    margin-left: 120px;
    margin-bottom: 20px; 
}
}
@media screen and (max-width: 340px){
    #test{
    height: 1000px;
    }
    #log{
   margin-left: 110px; 
}

#tra{
    width: 40%;
    margin-right: 0;
}
h2{
    width: 100%;
    font-size: 20px;
   padding-left: -20px;
}
#log{
   margin-left: 50px; 
}
.gate{
    margin-left: 30px;
}

.rest{
    width:400px;
    overflow: hidden;
}
video{
    width:500px;
    overflow: hidden;
}
div#testing{
margin-top: 30px;
margin-left:60px;
padding-bottom: 100px;
}
#slideshow {

margin-top: 80px;
width: 400px;
overflow: hidden;
}
.slideshow-container {
font-family: "ROM Mono",sans-serif;
max-width: 1100px;
position: relative;
margin-left: 25px;
}

.imag {
width: 400px;
height: 200px;
}

footer{
margin-top: 700px;
width:500px;
transform: translateX(-15%);
height: 600px;
background-color: #000000;
position: relative;
}
footer img{
width: 50%;
margin-left: 120px;
margin-top: 80px;
}
.links{
margin-top: 80px;

}
.links a{
text-decoration: none;
color:White;
text-align: center;
font-size: 21px;
display: block;
color:white;
margin-right: 30px;
height: 50px;
text-decoration: none;


font-family: "ROM Mono",sans-serif;
transition: 0.9s;
}
.links a:hover{
transition: 0.9s;
opacity: 0.4;
}
.links h3{
font-size: 18px;
color:white;
text-align: center;
font-family: "ROM Wide Light",sans-serif;
}
#write{
margin-left: 30px;
}
.links h4{
font-size: 16px;
color:white;
text-align: center;
margin-left: 80px;
width: 60%;
font-family: "ROM Wide Bold",sans-serif;
}

body{

overflow-x: hidden;
}
html{
overflow-x: hidden;

}
#titi{
    margin-left: -30px;
}
#titi2{
    margin-left: -30px;
}
#titi3{
    margin-left: -30px;
}
#crom{
    width: 50%;
    margin-left: 140px;
    transform: translateY(10%);

}
#dee{
    margin-left: 230px;
    margin-top: 20px;
}
#codechef{
    display: block;
    width: 45%;
    margin-top: 40px;
    margin-left: 160px;
    margin-bottom: 20px;
}
#xyz{
    display: block;
    width: 24%;
    margin-left: 210px;
    margin-bottom: 20px;
}
#bouj{
    display: block;
    width: 35%;
    margin-left: 185px;
    margin-bottom: 20px;
}
#cake{
    display: block;
    width: 60%;
    margin-left: 120px;
    margin-bottom: 20px;
}
#arta{
    display: block;
    width: 23%; 
    margin-left: 210px;
    margin-bottom: 20px; 
}
.spon{
height: 1100px;
}
#crom{
    width: 50%;
    margin-left: 110px;
    transform: translateY(10%);

}
#dee{
    margin-left: 230px;
    margin-top: 20px;
}
#codechef{
    display: block;
    width: 45%;
    margin-top: 40px;
    margin-left: 130px;
    margin-bottom: 20px;
}
#xyz{
    display: block;
    width: 24%;
    margin-left: 180px;
    margin-bottom: 20px;
}
#bouj{
    display: block;
    width: 35%;
    margin-left: 125px;
    margin-bottom: 20px;
}
#cake{
    display: block;
    width: 60%;
    margin-left: 120px;
    margin-bottom: 20px;
}
#arta{
    display: block;
    width: 23%; 
    margin-left: 180px;
    margin-bottom: 20px; 
}
.spon{
height: 1100px;
}
#log{
   margin-left: 30px; 
}
#br{
    margin-left: 15px;
}
h2{
   margin-right: 40px; 
}
#write{
    width: 90%;
    font-size: 24px;
}
#crom{
    width: 50%;
    margin-left: 40px;
    transform: translateY(10%);

}
#dee{
    margin-left: 140px;
    margin-top: 20px;
}
#codechef{
    display: block;
    width: 45%;
    margin-top: 40px;
    margin-left: 90px;
    margin-bottom: 20px;
}
#xyz{
    display: block;
    width: 24%;
    margin-left: 150px;
    margin-bottom: 20px;
}
#bouj{
    display: block;
    width: 35%;
    margin-left: 125px;
    margin-bottom: 20px;
}
#cake{
    display: block;
    width: 60%;
    margin-left: 60px;
    margin-bottom: 20px;
}
#arta{
    display: block;
    width: 23%; 
    margin-left: 140px;
    margin-bottom: 20px; 
}

.rest{
        background: url("IMG/Z3NITH'23 Brochure Cover 1 1.png");
        overflow: hidden;


        position: relative;
        height: 700px;
    }

#crom{
    width: 50%;
    margin-left: 80px;
    transform: translateY(10%);

}
#dee{
    margin-left:170px;
    margin-top: 20px;
}
#codechef{
    display: block;
    width: 45%;
    margin-top: 40px;
    margin-left: 90px;
    margin-bottom: 20px;
}
#xyz{
    display: block;
    width: 24%;
    margin-left: 150px;
    margin-bottom: 20px;
}
#bouj{
    display: block;
    width: 35%;
    margin-left: 125px;
    margin-bottom: 20px;
}
#cake{
    display: block;
    width: 60%;
    margin-left: 50px;
    margin-bottom: 20px;
}
#arta{
    display: block;
    width: 23%; 
    margin-left: 120px;
    margin-bottom: 20px; 
}
#titi,#titi2,#titi3{
    margin-left: -50px;
}
#crom{
    width: 50%;
    margin-left: 80px;
    transform: translateY(10%);

}
#dee{
    margin-left: 160px;
    margin-top: 20px;
}
#codechef{
    display: block;
    width: 45%;
    margin-top: 40px;
    margin-left: 90px;
    margin-bottom: 20px;
}
#xyz{
    display: block;
    width: 24%;
    margin-left: 140px;
    margin-bottom: 20px;
}
#bouj{
    display: block;
    width: 35%;
    margin-left: 115px;
    margin-bottom: 20px;
}
#cake{
    display: block;
    width: 60%;
    margin-left: 50px;
    margin-bottom: 20px;
}
#arta{
    display: block;
    width: 23%; 
    margin-left: 140px;
    margin-bottom: 20px; 
}
#crom{
    width: 50%;
    margin-left: 80px;
    transform: translateY(10%);

}
#dee{
    margin-left:170px;
    margin-top: 20px;
}
#codechef{
    display: block;
    width: 45%;
    margin-top: 40px;
    margin-left: 90px;
    margin-bottom: 20px;
}
#xyz{
    display: block;
    width: 24%;
    margin-left: 150px;
    margin-bottom: 20px;
}
#bouj{
    display: block;
    width: 35%;
    margin-left: 125px;
    margin-bottom: 20px;
}
#cake{
    display: block;
    width: 60%;
    margin-left: 50px;
    margin-bottom: 20px;
}
#arta{
    display: block;
    width: 23%; 
    margin-left: 120px;
    margin-bottom: 20px; 
}
#titi,#titi2,#titi3{
    margin-left: -70px;
}
#crom{
    width: 50%;
    margin-left: 60px;
    transform: translateY(10%);

}
#dee{
    margin-left: 140px;
    margin-top: 20px;
}
#codechef{
    display: block;
    width: 45%;
    margin-top: 40px;
    margin-left: 70px;
    margin-bottom: 20px;
}
#xyz{
    display: block;
    width: 24%;
    margin-left: 120px;
    margin-bottom: 20px;
}
#bouj{
    display: block;
    width: 35%;
    margin-left: 95px;
    margin-bottom: 20px;
}
#cake{
    display: block;
    width: 60%;
    margin-left: 30px;
    margin-bottom: 20px;
}
#arta{
    display: block;
    width: 23%; 
    margin-left: 120px;
    margin-bottom: 20px; 
}
}

@media screen and (max-width: 310px){
    #br{
    margin-left: 180px;
}
#tra{
    width: 45%;
    margin-left: 130px;
    margin-right: 0;
}
#br{

    margin-left: 150px;
    margin-right: 0;
}
    #test{
        height: 1300px;
    }
    #write{
        margin-left: 30px;

    }
    #log{
   width: 65%;
   transform: translateX(-10%);
}

    h2{

        transform: translateX(-10%);
    }


    .rest{
        width:500px;
        overflow: hidden;
    }
    video{
        width:500px;
        overflow: hidden;
    }
    div#testing{
    margin-top: 30px;
    margin-left: 120px;
    padding-bottom: 100px;
    }
    #slideshow {

    margin-top: 80px;
    width: 400px;
    overflow: hidden;
    }
    .slideshow-container {
    font-family: "ROM Mono",sans-serif;
    max-width: 1100px;
    position: relative;
    margin-left: 50px;
    }

    .imag {
    width: 400px;
    height: 200px;
    }

    footer{
    margin-top: 700px;
    width:500px;
    height: 600px;
    background-color: #000000;
    position: relative;
    }
    footer img{
    width: 50%;
    margin-left: 120px;
    margin-top: 80px;
    }
    .links{
    margin-top: 80px;

    }
    .links a{
    text-decoration: none;
    color:White;
    text-align: center;
    font-size: 21px;
    display: block;
    color:white;
    margin-right: 30px;
    height: 50px;
    text-decoration: none;


    font-family: "ROM Mono",sans-serif;
    transition: 0.9s;
    }
    .links a:hover{
    transition: 0.9s;
    opacity: 0.4;
    }
    .links h3{
    font-size: 18px;
    color:white;
    text-align: center;
    font-family: "ROM Wide Light",sans-serif;
    }
    #write{
    margin-left: 30px;
    }
    .links h4{
    font-size: 16px;
    color:white;
    text-align: center;
    margin-left: 80px;
    width: 60%;
    font-family: "ROM Wide Bold",sans-serif;
    }

    body{

    overflow-x: hidden;
    }
    html{
    overflow-x: hidden;

    }
    #titi{
        margin-left: -10px;
    }
    #titi2{
        margin-left: -10px;
    }
    #titi3{
        margin-left: -10px;
    }
    #crom{
        width: 50%;
        margin-left: 120px;
        transform: translateY(10%);

    }
    #dee{
        margin-left: 200px;
        margin-top: 20px;
    }
    #codechef{
        display: block;
        width: 45%;
        margin-top: 40px;
        margin-left: 140px;
        margin-bottom: 20px;
    }
    #xyz{
        display: block;
        width: 24%;
        margin-left: 190px;
        margin-bottom: 20px;
    }
    #bouj{
        display: block;
        width: 35%;
        margin-left: 165px;
        margin-bottom: 20px;
    }
    #cake{
        display: block;
        width: 60%;
        margin-left: 100px;
        margin-bottom: 20px;
    }
    #arta{
        display: block;
        width: 23%; 
        margin-left: 190px;
        margin-bottom: 20px; 
    }
    .spon{
    height: 1100px;
    }
}
@media screen and (max-width: 300px){
    #br{
    margin-left: 180px;
}
#tra{
    width: 45%;
    margin-left: 130px;
    margin-right: 0;
}
#br{

    margin-left: 150px;
    margin-right: 0;
}
    #test{
        height: 1300px;
    }
    #write{
        margin-left: 30px;

    }
    #log{
   width: 65%;
   transform: translateX(-10%);
}

    h2{

        transform: translateX(-10%);
    }


    .rest{
        width:500px;
        overflow: hidden;
    }
    video{
        width:500px;
        overflow: hidden;
    }
    div#testing{
    margin-top: 30px;
    margin-left: 120px;
    padding-bottom: 100px;
    }
    #slideshow {

    margin-top: 80px;
    width: 400px;
    overflow: hidden;
    }
    .slideshow-container {
    font-family: "ROM Mono",sans-serif;
    max-width: 1100px;
    position: relative;
    margin-left: 50px;
    }

    .imag {
    width: 400px;
    height: 200px;
    }

    footer{
    margin-top: 700px;
    width:500px;
    height: 600px;
    background-color: #000000;
    position: relative;
    }
    footer img{
    width: 50%;
    margin-left: 120px;
    margin-top: 80px;
    }
    .links{
    margin-top: 80px;

    }
    .links a{
    text-decoration: none;
    color:White;
    text-align: center;
    font-size: 21px;
    display: block;
    color:white;
    margin-right: 30px;
    height: 50px;
    text-decoration: none;


    font-family: "ROM Mono",sans-serif;
    transition: 0.9s;
    }
    .links a:hover{
    transition: 0.9s;
    opacity: 0.4;
    }
    .links h3{
    font-size: 18px;
    color:white;
    text-align: center;
    font-family: "ROM Wide Light",sans-serif;
    }
    #write{
    margin-left: 30px;
    }
    .links h4{
    font-size: 16px;
    color:white;
    text-align: center;
    margin-left: 80px;
    width: 60%;
    font-family: "ROM Wide Bold",sans-serif;
    }

    body{

    overflow-x: hidden;
    }
    html{
    overflow-x: hidden;

    }
    #titi{
        margin-left: -10px;
    }
    #titi2{
        margin-left: -10px;
    }
    #titi3{
        margin-left: -10px;
    }
    #crom{
        width: 50%;
        margin-left: 120px;
        transform: translateY(10%);

    }
    #dee{
        margin-left: 200px;
        margin-top: 20px;
    }
    #codechef{
        display: block;
        width: 45%;
        margin-top: 40px;
        margin-left: 140px;
        margin-bottom: 20px;
    }
    #xyz{
        display: block;
        width: 24%;
        margin-left: 190px;
        margin-bottom: 20px;
    }
    #bouj{
        display: block;
        width: 35%;
        margin-left: 165px;
        margin-bottom: 20px;
    }
    #cake{
        display: block;
        width: 60%;
        margin-left: 100px;
        margin-bottom: 20px;
    }
    #arta{
        display: block;
        width: 23%; 
        margin-left: 190px;
        margin-bottom: 20px; 
    }
    .spon{
    height: 1100px;
    }
}
@media screen and (max-width: 310px){
    #test{
        height: 1000px;
    }
    #log{
   margin-left: 110px; 
}

#tra{
    width: 40%;
    margin-right: 0;
}
h2{
    width: 100%;
    font-size: 20px;
   padding-left: -20px;
}
#log{
   margin-left: 30px; 
}


.rest{
    width:400px;
    overflow: hidden;
}
video{
    width:500px;
    overflow: hidden;
}
div#testing{
margin-top: 30px;
margin-left:60px;
padding-bottom: 100px;
}
#slideshow {

margin-top: 80px;
width: 400px;
overflow: hidden;
}
.slideshow-container {
font-family: "ROM Mono",sans-serif;
max-width: 1100px;
position: relative;
margin-left: 25px;
}

.imag {
width: 400px;
height: 200px;
}

footer{
margin-top: 700px;
width:500px;
transform: translateX(-10%);
height: 600px;
background-color: #000000;
position: relative;
}
footer img{
width: 50%;
margin-left: 120px;
margin-top: 80px;
}
.links{
margin-top: 80px;

}
.links a{
text-decoration: none;
color:White;
text-align: center;
font-size: 21px;
display: block;
color:white;
margin-right: 30px;
height: 50px;
text-decoration: none;


font-family: "ROM Mono",sans-serif;
transition: 0.9s;
}
.links a:hover{
transition: 0.9s;
opacity: 0.4;
}
.links h3{
font-size: 18px;
color:white;
text-align: center;
font-family: "ROM Wide Light",sans-serif;
}
#write{
margin-left: 30px;
}
.links h4{
font-size: 16px;
color:white;
text-align: center;
margin-left: 80px;
width: 60%;
font-family: "ROM Wide Bold",sans-serif;
}

body{

overflow-x: hidden;
}
html{
overflow-x: hidden;

}
#titi{
    margin-left: -30px;
}
#titi2{
    margin-left: -30px;
}
#titi3{
    margin-left: -30px;
}
#crom{
    width: 50%;
    margin-left: 140px;
    transform: translateY(10%);

}
#dee{
    margin-left: 230px;
    margin-top: 20px;
}
#codechef{
    display: block;
    width: 45%;
    margin-top: 40px;
    margin-left: 160px;
    margin-bottom: 20px;
}
#xyz{
    display: block;
    width: 24%;
    margin-left: 210px;
    margin-bottom: 20px;
}
#bouj{
    display: block;
    width: 35%;
    margin-left: 185px;
    margin-bottom: 20px;
}
#cake{
    display: block;
    width: 60%;
    margin-left: 120px;
    margin-bottom: 20px;
}
#arta{
    display: block;
    width: 23%; 
    margin-left: 210px;
    margin-bottom: 20px; 
}
.spon{
height: 1100px;
}
#crom{
    width: 50%;
    margin-left: 110px;
    transform: translateY(10%);

}
#dee{
    margin-left: 230px;
    margin-top: 20px;
}
#codechef{
    display: block;
    width: 45%;
    margin-top: 40px;
    margin-left: 130px;
    margin-bottom: 20px;
}
#xyz{
    display: block;
    width: 24%;
    margin-left: 180px;
    margin-bottom: 20px;
}
#bouj{
    display: block;
    width: 35%;
    margin-left: 125px;
    margin-bottom: 20px;
}
#cake{
    display: block;
    width: 60%;
    margin-left: 120px;
    margin-bottom: 20px;
}
#arta{
    display: block;
    width: 23%; 
    margin-left: 180px;
    margin-bottom: 20px; 
}
.spon{
height: 1100px;
}
#log{
   margin-left: 30px; 
}
#br{
    margin-left: 15px;
}
h2{
   margin-right: 40px; 
}
#write{
    width: 90%;
    font-size: 24px;
}
#crom{
    width: 50%;
    margin-left: 40px;
    transform: translateY(10%);

}
#dee{
    margin-left: 140px;
    margin-top: 20px;
}
#codechef{
    display: block;
    width: 45%;
    margin-top: 40px;
    margin-left: 90px;
    margin-bottom: 20px;
}
#xyz{
    display: block;
    width: 24%;
    margin-left: 150px;
    margin-bottom: 20px;
}
#bouj{
    display: block;
    width: 35%;
    margin-left: 125px;
    margin-bottom: 20px;
}
#cake{
    display: block;
    width: 60%;
    margin-left: 60px;
    margin-bottom: 20px;
}
#arta{
    display: block;
    width: 23%; 
    margin-left: 140px;
    margin-bottom: 20px; 
}

.rest{
        background: url("IMG/Z3NITH'23 Brochure Cover 1 1.png");
        overflow: hidden;


        position: relative;
        height: 700px;
    }

#crom{
    width: 50%;
    margin-left: 80px;
    transform: translateY(10%);

}
#dee{
    margin-left:170px;
    margin-top: 20px;
}
#codechef{
    display: block;
    width: 45%;
    margin-top: 40px;
    margin-left: 90px;
    margin-bottom: 20px;
}
#xyz{
    display: block;
    width: 24%;
    margin-left: 150px;
    margin-bottom: 20px;
}
#bouj{
    display: block;
    width: 35%;
    margin-left: 125px;
    margin-bottom: 20px;
}
#cake{
    display: block;
    width: 60%;
    margin-left: 50px;
    margin-bottom: 20px;
}
#arta{
    display: block;
    width: 23%; 
    margin-left: 120px;
    margin-bottom: 20px; 
}
#titi,#titi2,#titi3{
    margin-left: -50px;
}
#crom{
    width: 50%;
    margin-left: 80px;
    transform: translateY(10%);

}
#dee{
    margin-left: 160px;
    margin-top: 20px;
}
#codechef{
    display: block;
    width: 45%;
    margin-top: 40px;
    margin-left: 90px;
    margin-bottom: 20px;
}
#xyz{
    display: block;
    width: 24%;
    margin-left: 140px;
    margin-bottom: 20px;
}
#bouj{
    display: block;
    width: 35%;
    margin-left: 115px;
    margin-bottom: 20px;
}
#cake{
    display: block;
    width: 60%;
    margin-left: 50px;
    margin-bottom: 20px;
}
#arta{
    display: block;
    width: 23%; 
    margin-left: 140px;
    margin-bottom: 20px; 
}
#crom{
    width: 50%;
    margin-left: 80px;
    transform: translateY(10%);

}
#dee{
    margin-left:170px;
    margin-top: 20px;
}
#codechef{
    display: block;
    width: 45%;
    margin-top: 40px;
    margin-left: 90px;
    margin-bottom: 20px;
}
#xyz{
    display: block;
    width: 24%;
    margin-left: 150px;
    margin-bottom: 20px;
}
#bouj{
    display: block;
    width: 35%;
    margin-left: 125px;
    margin-bottom: 20px;
}
#cake{
    display: block;
    width: 60%;
    margin-left: 50px;
    margin-bottom: 20px;
}
#arta{
    display: block;
    width: 23%; 
    margin-left: 120px;
    margin-bottom: 20px; 
}
#titi,#titi2,#titi3{
    margin-left: -70px;
}
#crom{
    width: 50%;
    margin-left: 60px;
    transform: translateY(10%);

}
#dee{
    margin-left: 140px;
    margin-top: 20px;
}
#codechef{
    display: block;
    width: 45%;
    margin-top: 40px;
    margin-left: 70px;
    margin-bottom: 20px;
}
#xyz{
    display: block;
    width: 24%;
    margin-left: 120px;
    margin-bottom: 20px;
}
#bouj{
    display: block;
    width: 35%;
    margin-left: 95px;
    margin-bottom: 20px;
}
#cake{
    display: block;
    width: 60%;
    margin-left: 30px;
    margin-bottom: 20px;
}
#arta{
    display: block;
    width: 23%; 
    margin-left: 120px;
    margin-bottom: 20px; 
}
}
@media screen and (max-width: 340px){
    #test{
    height: 1000px;
    }
    #log{
   margin-left: 110px; 
}

#tra{
    width: 40%;
    margin-right: 0;
}
h2{
    width: 100%;
    font-size: 20px;
   padding-left: -20px;
}
#log{
   margin-left: 50px; 
}


.rest{
    width:400px;
    overflow: hidden;
}
video{
    width:500px;
    overflow: hidden;
}
div#testing{
margin-top: 30px;
margin-left:60px;
padding-bottom: 100px;
}
#slideshow {

margin-top: 80px;
width: 400px;
overflow: hidden;
}
.slideshow-container {
font-family: "ROM Mono",sans-serif;
max-width: 1100px;
position: relative;
margin-left: 25px;
}

.imag {
width: 400px;
height: 200px;
}

footer{
margin-top: 700px;
width:500px;
transform: translateX(-16%);
height: 600px;
background-color: #000000;
position: relative;
}
footer img{
width: 50%;
margin-left: 120px;
margin-top: 80px;
}
.links{
margin-top: 80px;

}
.links a{
text-decoration: none;
color:White;
text-align: center;
font-size: 21px;
display: block;
color:white;
margin-right: 30px;
height: 50px;
text-decoration: none;


font-family: "ROM Mono",sans-serif;
transition: 0.9s;
}
.links a:hover{
transition: 0.9s;
opacity: 0.4;
}
.links h3{
font-size: 18px;
color:white;
text-align: center;
font-family: "ROM Wide Light",sans-serif;
}
#write{
margin-left: 30px;
}
.links h4{
font-size: 16px;
color:white;
text-align: center;
margin-left: 80px;
width: 60%;
font-family: "ROM Wide Bold",sans-serif;
}

body{

overflow-x: hidden;
}
html{
overflow-x: hidden;

}
#titi{
    margin-left: -30px;
}
#titi2{
    margin-left: -30px;
}
#titi3{
    margin-left: -30px;
}
#crom{
    width: 50%;
    margin-left: 140px;
    transform: translateY(10%);

}
#dee{
    margin-left: 230px;
    margin-top: 20px;
}
#codechef{
    display: block;
    width: 45%;
    margin-top: 40px;
    margin-left: 160px;
    margin-bottom: 20px;
}
#xyz{
    display: block;
    width: 24%;
    margin-left: 210px;
    margin-bottom: 20px;
}
#bouj{
    display: block;
    width: 35%;
    margin-left: 185px;
    margin-bottom: 20px;
}
#cake{
    display: block;
    width: 60%;
    margin-left: 120px;
    margin-bottom: 20px;
}
#arta{
    display: block;
    width: 23%; 
    margin-left: 210px;
    margin-bottom: 20px; 
}
.spon{
height: 1100px;
}
#crom{
    width: 50%;
    margin-left: 110px;
    transform: translateY(10%);

}
#dee{
    margin-left: 230px;
    margin-top: 20px;
}
#codechef{
    display: block;
    width: 45%;
    margin-top: 40px;
    margin-left: 130px;
    margin-bottom: 20px;
}
#xyz{
    display: block;
    width: 24%;
    margin-left: 180px;
    margin-bottom: 20px;
}
#bouj{
    display: block;
    width: 35%;
    margin-left: 125px;
    margin-bottom: 20px;
}
#cake{
    display: block;
    width: 60%;
    margin-left: 120px;
    margin-bottom: 20px;
}
#arta{
    display: block;
    width: 23%; 
    margin-left: 180px;
    margin-bottom: 20px; 
}
.spon{
height: 1100px;
}
#log{
   margin-left: 30px; 
}
#br{
    margin-left: 15px;
}
h2{
   margin-right: 40px; 
}
#write{
    width: 90%;
    font-size: 24px;
}
#crom{
    width: 50%;
    margin-left: 40px;
    transform: translateY(10%);

}
#dee{
    margin-left: 140px;
    margin-top: 20px;
}
#codechef{
    display: block;
    width: 45%;
    margin-top: 40px;
    margin-left: 90px;
    margin-bottom: 20px;
}
#xyz{
    display: block;
    width: 24%;
    margin-left: 150px;
    margin-bottom: 20px;
}
#bouj{
    display: block;
    width: 35%;
    margin-left: 125px;
    margin-bottom: 20px;
}
#cake{
    display: block;
    width: 60%;
    margin-left: 60px;
    margin-bottom: 20px;
}
#arta{
    display: block;
    width: 23%; 
    margin-left: 140px;
    margin-bottom: 20px; 
}

.rest{
        background: url("IMG/Z3NITH'23 Brochure Cover 1 1.png");
        overflow: hidden;


        position: relative;
        height: 700px;
    }

#crom{
    width: 50%;
    margin-left: 80px;
    transform: translateY(10%);

}
#dee{
    margin-left:170px;
    margin-top: 20px;
}
#codechef{
    display: block;
    width: 45%;
    margin-top: 40px;
    margin-left: 90px;
    margin-bottom: 20px;
}
#xyz{
    display: block;
    width: 24%;
    margin-left: 150px;
    margin-bottom: 20px;
}
#bouj{
    display: block;
    width: 35%;
    margin-left: 125px;
    margin-bottom: 20px;
}
#cake{
    display: block;
    width: 60%;
    margin-left: 50px;
    margin-bottom: 20px;
}
#arta{
    display: block;
    width: 23%; 
    margin-left: 120px;
    margin-bottom: 20px; 
}
#titi,#titi2,#titi3{
    margin-left: -50px;
}
#crom{
    width: 50%;
    margin-left: 80px;
    transform: translateY(10%);

}
#dee{
    margin-left: 160px;
    margin-top: 20px;
}
#codechef{
    display: block;
    width: 45%;
    margin-top: 40px;
    margin-left: 90px;
    margin-bottom: 20px;
}
#xyz{
    display: block;
    width: 24%;
    margin-left: 140px;
    margin-bottom: 20px;
}
#bouj{
    display: block;
    width: 35%;
    margin-left: 115px;
    margin-bottom: 20px;
}
#cake{
    display: block;
    width: 60%;
    margin-left: 50px;
    margin-bottom: 20px;
}
#arta{
    display: block;
    width: 23%; 
    margin-left: 140px;
    margin-bottom: 20px; 
}
#crom{
    width: 50%;
    margin-left: 80px;
    transform: translateY(10%);

}
#dee{
    margin-left:170px;
    margin-top: 20px;
}
#codechef{
    display: block;
    width: 45%;
    margin-top: 40px;
    margin-left: 90px;
    margin-bottom: 20px;
}
#xyz{
    display: block;
    width: 24%;
    margin-left: 150px;
    margin-bottom: 20px;
}
#bouj{
    display: block;
    width: 35%;
    margin-left: 125px;
    margin-bottom: 20px;
}
#cake{
    display: block;
    width: 60%;
    margin-left: 50px;
    margin-bottom: 20px;
}
#arta{
    display: block;
    width: 23%; 
    margin-left: 120px;
    margin-bottom: 20px; 
}
#titi,#titi2,#titi3{
    margin-left: -70px;
}
#crom{
    width: 48%;
    margin-left: 60px;
    transform: translateY(10%);

}
#dee{
    margin-left: 140px;
    margin-top: 20px;
}
#codechef{
    display: block;
    width: 43%;
    margin-top: 40px;
    margin-left: 70px;
    margin-bottom: 20px;
}
#xyz{
    display: block;
    width: 22%;
    margin-left: 120px;
    margin-bottom: 20px;
}
#bouj{
    display: block;
    width: 32%;
    margin-left: 95px;
    margin-bottom: 20px;
}
#cake{
    display: block;
    width: 50%;
    margin-left: 40px;
    margin-bottom: 20px;
}
#arta{
    display: block;
    width: 21%; 
    margin-left: 120px;
    margin-bottom: 20px; 
}
#br{
margin-left: 90px;
}
#tra{
    width: 45%;
    margin-left: 70px;  
}
}


@media screen and (max-width: 340px){
    #test{
    height: 1000px;
    }
    #log{
   margin-left: 110px; 
}

#tra{
    width: 40%;
    margin-right: 0;
}
h2{
    width: 100%;
    font-size: 20px;
   padding-left: -20px;
}
#log{
   margin-left: 50px; 
}


.rest{
    width:400px;
    overflow: hidden;
}
video{
    width:500px;
    overflow: hidden;
}
div#testing{
margin-top: 30px;
margin-left:60px;
padding-bottom: 100px;
}
#slideshow {

margin-top: 80px;
width: 400px;
overflow: hidden;
}
.slideshow-container {
font-family: "ROM Mono",sans-serif;
max-width: 1100px;
position: relative;
margin-left: 25px;
}

.imag {
width: 400px;
height: 200px;
}

footer{
margin-top: 700px;
width:500px;
transform: translateX(-16%);
height: 600px;
background-color: #000000;
position: relative;
}
footer img{
width: 50%;
margin-left: 120px;
margin-top: 80px;
}
.links{
margin-top: 80px;

}
.links a{
text-decoration: none;
color:White;
text-align: center;
font-size: 21px;
display: block;
color:white;
margin-right: 30px;
height: 50px;
text-decoration: none;


font-family: "ROM Mono",sans-serif;
transition: 0.9s;
}
.links a:hover{
transition: 0.9s;
opacity: 0.4;
}
.links h3{
font-size: 18px;
color:white;
text-align: center;
font-family: "ROM Wide Light",sans-serif;
}
#write{
margin-left: 30px;
}
.links h4{
font-size: 16px;
color:white;
text-align: center;
margin-left: 80px;
width: 60%;
font-family: "ROM Wide Bold",sans-serif;
}

body{

overflow-x: hidden;
}
html{
overflow-x: hidden;

}
#titi{
    margin-left: -30px;
}
#titi2{
    margin-left: -30px;
}
#titi3{
    margin-left: -30px;
}
#crom{
    width: 50%;
    margin-left: 140px;
    transform: translateY(10%);

}
#dee{
    margin-left: 230px;
    margin-top: 20px;
}
#codechef{
    display: block;
    width: 45%;
    margin-top: 40px;
    margin-left: 160px;
    margin-bottom: 20px;
}
#xyz{
    display: block;
    width: 24%;
    margin-left: 210px;
    margin-bottom: 20px;
}
#bouj{
    display: block;
    width: 35%;
    margin-left: 185px;
    margin-bottom: 20px;
}
#cake{
    display: block;
    width: 60%;
    margin-left: 120px;
    margin-bottom: 20px;
}
#arta{
    display: block;
    width: 23%; 
    margin-left: 210px;
    margin-bottom: 20px; 
}
.spon{
height: 1100px;
}
#crom{
    width: 50%;
    margin-left: 110px;
    transform: translateY(10%);

}
#dee{
    margin-left: 230px;
    margin-top: 20px;
}
#codechef{
    display: block;
    width: 45%;
    margin-top: 40px;
    margin-left: 130px;
    margin-bottom: 20px;
}
#xyz{
    display: block;
    width: 24%;
    margin-left: 180px;
    margin-bottom: 20px;
}
#bouj{
    display: block;
    width: 35%;
    margin-left: 125px;
    margin-bottom: 20px;
}
#cake{
    display: block;
    width: 60%;
    margin-left: 120px;
    margin-bottom: 20px;
}
#arta{
    display: block;
    width: 23%; 
    margin-left: 180px;
    margin-bottom: 20px; 
}
.spon{
height: 1100px;
}
#log{
   margin-left: 30px; 
}
#br{
    margin-left: 15px;
}
h2{
   margin-right: 40px; 
}
#write{
    width: 90%;
    font-size: 24px;
}
#crom{
    width: 50%;
    margin-left: 40px;
    transform: translateY(10%);

}
#dee{
    margin-left: 140px;
    margin-top: 20px;
}
#codechef{
    display: block;
    width: 45%;
    margin-top: 40px;
    margin-left: 90px;
    margin-bottom: 20px;
}
#xyz{
    display: block;
    width: 24%;
    margin-left: 150px;
    margin-bottom: 20px;
}
#bouj{
    display: block;
    width: 35%;
    margin-left: 125px;
    margin-bottom: 20px;
}
#cake{
    display: block;
    width: 60%;
    margin-left: 60px;
    margin-bottom: 20px;
}
#arta{
    display: block;
    width: 23%; 
    margin-left: 140px;
    margin-bottom: 20px; 
}

.rest{
        background: url("IMG/Z3NITH'23 Brochure Cover 1 1.png");
        overflow: hidden;


        position: relative;
        height: 700px;
    }

#crom{
    width: 50%;
    margin-left: 80px;
    transform: translateY(10%);

}
#dee{
    margin-left:170px;
    margin-top: 20px;
}
#codechef{
    display: block;
    width: 45%;
    margin-top: 40px;
    margin-left: 90px;
    margin-bottom: 20px;
}
#xyz{
    display: block;
    width: 24%;
    margin-left: 150px;
    margin-bottom: 20px;
}
#bouj{
    display: block;
    width: 35%;
    margin-left: 125px;
    margin-bottom: 20px;
}
#cake{
    display: block;
    width: 60%;
    margin-left: 50px;
    margin-bottom: 20px;
}
#arta{
    display: block;
    width: 23%; 
    margin-left: 120px;
    margin-bottom: 20px; 
}
#titi,#titi2,#titi3{
    margin-left: -50px;
}
#crom{
    width: 50%;
    margin-left: 80px;
    transform: translateY(10%);

}
#dee{
    margin-left: 160px;
    margin-top: 20px;
}
#codechef{
    display: block;
    width: 45%;
    margin-top: 40px;
    margin-left: 90px;
    margin-bottom: 20px;
}
#xyz{
    display: block;
    width: 24%;
    margin-left: 140px;
    margin-bottom: 20px;
}
#bouj{
    display: block;
    width: 35%;
    margin-left: 115px;
    margin-bottom: 20px;
}
#cake{
    display: block;
    width: 60%;
    margin-left: 50px;
    margin-bottom: 20px;
}
#arta{
    display: block;
    width: 23%; 
    margin-left: 140px;
    margin-bottom: 20px; 
}
#crom{
    width: 50%;
    margin-left: 80px;
    transform: translateY(10%);

}
#dee{
    margin-left:170px;
    margin-top: 20px;
}
#codechef{
    display: block;
    width: 45%;
    margin-top: 40px;
    margin-left: 90px;
    margin-bottom: 20px;
}
#xyz{
    display: block;
    width: 24%;
    margin-left: 150px;
    margin-bottom: 20px;
}
#bouj{
    display: block;
    width: 35%;
    margin-left: 125px;
    margin-bottom: 20px;
}
#cake{
    display: block;
    width: 60%;
    margin-left: 50px;
    margin-bottom: 20px;
}
#arta{
    display: block;
    width: 23%; 
    margin-left: 120px;
    margin-bottom: 20px; 
}
#titi,#titi2,#titi3{
    margin-left: -70px;
}
#crom{
    width: 48%;
    margin-left: 60px;
    transform: translateY(10%);

}
#dee{
    margin-left: 140px;
    margin-top: 20px;
}
#codechef{
    display: block;
    width: 43%;
    margin-top: 40px;
    margin-left: 70px;
    margin-bottom: 20px;
}
#xyz{
    display: block;
    width: 22%;
    margin-left: 120px;
    margin-bottom: 20px;
}
#bouj{
    display: block;
    width: 32%;
    margin-left: 95px;
    margin-bottom: 20px;
}
#cake{
    display: block;
    width: 50%;
    margin-left: 40px;
    margin-bottom: 20px;
}
#arta{
    display: block;
    width: 21%; 
    margin-left: 120px;
    margin-bottom: 20px; 
}
#br{
margin-left: 90px;
}
#tra{
    width: 45%;
    margin-left: 70px;  
}
}
html{
  scroll-behavior: smooth;
}


        </style>

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
        <div class = "rest">



 
          <img src = "IMG/Z3NITH Title Typeface Logo.png" id = "log">
          <h2 id = "demo">July 21</h2>
          <button onclick = "openBro()"id="br">Brochure</button>

        <button onclick = "openTrai()"id="tra">View Trailer</button>
          </div>
 

            <div id = "test">
         <div id = "mobi">
                  <div class = "gate" id = "gates">
                      <img src = "IMG/Group 43.png">
                      <h6>Home</h6>
                      <button onclick="openNav()">☰</button>
                  </div> 
              </div>
            <h1 id = "write"><strong id = "one">Z3NITH: a high school contest that elicits students to demonstrate their aptitude in various domains.</strong> <strong id = "two"> Social innovation, scientific discovery, aesthetic expression and entrepreneurship: Z3NITH furnishes a platform </strong><strong id = "thr">for students to actualize their creativity and potential. Z3NITH surpasses a contest; it is a voyage of edification and progression.</strong><strong id="fo">Let's get "Back to the future" and experience the past which ignites the present and forges the future.</strong></h1>

            </div> 
            <div id = "events">
                <h2 id = "heve">Events This Year</h2>
                <div id = "slided">
                    <div id = "slide">
                    <div id = "fl1" class="flip-card">
                        <div id = "fli1" class="flip-card-inner">
                          <div class="flip-card-front">
                            <h3 id = "evet">Revark</h3>
                            <img class = "numb1" src = "IMG/No 1.svg">

                          </div>
                          <div class="flip-card-back">
                            <h3 id = "inside">Revark</h3>
                            <p>It's time to change</p> 
                            <h4>Hybrid - 2 Participants</h4>
                            <h4 id = 'ven'>Chanakya Hall</h4>
                          </div>
                        </div>
                      </div>
                      <div id = "fl2" class="flip-card">
                        <div id = "fli2"class="flip-card-inner">
                          <div class="flip-card-front">
                            <h3 id = "evet">Tech Crunch</h3>
                            <img class = "numb2" src = "IMG/No 2.svg">
                          </div>
                          <div class="flip-card-back">
                            <h3 id = "inside">Tech Crunch</h3>
                            <p>if nerd == funny: continue</p> 
                            <h4>Offline - Solo</h4>
                            <h4 id = 'ven'>Junior CS Lab </h4>
                          </div>
                        </div>
                      </div>
                      <div id = "fl3" class="flip-card">
                        <div id = "fli3" class="flip-card-inner">
                          <div class="flip-card-front">
                            <h3 id = "evet">Turtle Trot</h3>
                            <img class = "numb3" src = "IMG/No 3.svg">
                          </div>
                          <div class="flip-card-back">
                            <h3 id = "inside">Turtle Trot</h3>
                            <p>G20 Flag Challenge Unleashed!</p> 
                            <h4>Offline - 2 Participants</h4>
                            <h4 id = 'ven'>Senior CS Lab </h4>
                          </div>
                        </div>
                      </div>
                      <div id = "fl4" class="flip-card">
                        <div id = "fli4" class="flip-card-inner">
                          <div class="flip-card-front">
                            <h3 id = "evet" >Re-Tease-TRO</h3>
                            <img class = "numb4" src = "IMG/No 4.svg">
                          </div>
                          <div class="flip-card-back">
                            <h3 id = "ret">Re-Tease-TRO</h3>
                            <p>Get nostalgic with cinematic <br>experience!!</p> 
                            <h4>Online - 2 participants</h4>
                            <h4 id = 'ven'>N/A </h4>
                          </div>
                        </div>
                      </div>
                      <div id = "fl5" class="flip-card">
                        <div id = "fli5" class="flip-card-inner">
                          <div class="flip-card-front">
                            <h3 id = "evet">Re4Rewind</h3>
                            <img class = "numb5" src = "IMG/No 5.svg">
                          </div>
                          <div class="flip-card-back">
                            <h3 id = "inside">Re4Rewind</h3>
                            <p>Make It Earlier</p> 
                            <h4>Online - 2 participants</h4>
                            <h4 id = 'ven'>N/A </h4>
                          </div>
                        </div>
                      </div>
                      <div id = "fl6" class="flip-card">
                        <div id = "fli6" class="flip-card-inner">
                          <div class="flip-card-front">
                            <h3 id = "evet">Arcade</h3>
                            <img class = "numb6" src = "IMG/No 6.svg">
                          </div>
                          <div class="flip-card-back">
                            <h3 id ="inside">Arcade</h3> 
                            <p>No tokens needed, just bring your Tenz</p> 
                            <h4>Online - 5 participants</h4>
                            <h4 id = 'ven'>N/A </h4>
                          </div>
                        </div>
                      </div>
                      <div id = "fl7" class="flip-card">
                      <div id = "fli7" class="flip-card-inner">
                        <div class="flip-card-front">
                          <h3 id = "evet">Gadget Mania</h3>
                          <img class = "numb7" src = "IMG/No 7.svg">
                        </div>
                        <div class="flip-card-back">
                          <h3 id ="ret">Gadget Mania</h3> 
                          <p>Paint the special magic</p> 
                          <h4>Offine - 1 participant</h4>
                          <h4 id = 'ven'>Special Wing CS Lab</h4>
                        </div>
                      </div>
                    </div>
                    </div>
                </div>
            </div> 
            <div class = "spon">
            <h2 id = "titi">Title Sponsor</h2>
                <img id = "crom" src="IMG/SPONSORS/Croma Transparent.png">
                <h2 id = "titi2">Talent Partner</h2>
                <img id = "dee" src = "IMG/SPONSORS/deexplore.png">
                <h2 id = "titi3">Event Sponsors</h2>
                <img id = "codechef" src = "IMG/SPONSORS/LOGO-Full-2019 (2).png">
                    <img id = "xyz" src = "IMG/SPONSORS/xyz-logo-color.png">
                    <img id = "bouj" src = "IMG/SPONSORS/bouj.png">
                    <div class = "bott">
                    <img id = "cake" src = "IMG/SPONSORS/cake_logo_white.png">
                    <img id = "arta" src = "IMG/SPONSORS/ART ALLY - LOGO.jpg">
            </div>
            <div class="slideshow-container" id = "slideshow">
                    <div class="slideshow-inner">
                      <div class="mySlides fade">
                        <div class = "imag">
                        <img  src='IMG/update_1.png' style='width: 100%;' alt="sally lightfoot crab"/>
                    </div>
                      </div>
                    
                      <div class="mySlides fade">
                        <div class = "imag">
                        <img  src='IMG/update_2.png' style='width: 100%;' alt="fighting nazca boobies"/>
                    </div>
                      </div>
                    
                      <div class="mySlides fade">
                        <div class = "imag">
                        <img  src='IMG/update_3.png' style='width: 100%;' alt="otovalo waterfall"/>
                    </div>
                      </div>
                    
                      <div class="mySlides fade">
                        <div class = "imag">
                        <img  src='IMG/update_4.png' style='width: 100%;' alt="pelican"/>
                    </div>
                      </div>
                      <div class="mySlides fade">
                        <div class = "imag">
                        <img  src='IMG/update_5.png' style='width: 100%;' alt="pelican"/>
                    </div>
                      </div>
                      <div class="mySlides fade">
                        <div class = "imag">
                        <img  src='IMG/update_6.png' style='width: 100%;' alt="pelican"/>
                    </div>
                      </div>
                      <div class="mySlides fade">
                        <div class = "imag">
                        <img  src='IMG/update_7.png' style='width: 100%;' alt="pelican"/>
                    </div>
                      </div>
                      <div class="mySlides fade">
                        <div class = "imag">
                        <img  src='IMG/update_8.png' style='width: 100%;' alt="pelican"/>
                    </div>
                      </div>
                      <div class="mySlides fade">
                        <div class = "imag">
                        <img  src='IMG/update_9.png' style='width: 100%;' alt="pelican"/>
                    </div>
                      </div>
                      <div class="mySlides fade">
                        <div class = "imag">
                        <img  src='IMG/update_10.png' style='width: 100%;' alt="pelican"/>
                    </div>
                      </div>
                      <div class="mySlides fade">
                        <div class = "imag">
                        <img  src='IMG/update_11.png' style='width: 100%;' alt="pelican"/>
                    </div>
                      </div>
                      </div>
                    
                    
                      <a class="prev" onclick='plusSlides(-1)'>&#10094;</a>
                      <a class="next" onclick='plusSlides(1)'>&#10095;</a>
                    </div>
                    <br/>
                    
                    
                    <div id = "testing">
                      <span class="dot" onclick='currentSlide(1)'></span>
                      <span class="dot" onclick='currentSlide(2)'></span>
                      <span class="dot" onclick='currentSlide(3)'></span>
                      <span class="dot" onclick='currentSlide(4)'></span>
                      <span class="dot" onclick='currentSlide(5)'></span>
                      <span class="dot" onclick='currentSlide(6)'></span>
                      <span class="dot" onclick='currentSlide(7)'></span>
                      <span class="dot" onclick='currentSlide(8)'></span>
                      <span class="dot" onclick='currentSlide(9)'></span>
                      <span class="dot" onclick='currentSlide(10)'></span>
                      <span class="dot" onclick='currentSlide(11)'></span>
                    </div>
                    
                    </div>
                <footer>
                    <img src = "IMG/Z3NITH Title Typeface Logo.png">
                     <div class = "links">
                     <a href = "mailto:futurz.afgji@gmail.com">Email</a>
                      <a href = "https://www.instagram.com/futurzclub/">Instagram</a>
                      <a href = "https://www.youtube.com/@FuturzClubAFGJI">Youtube</a>
                      <a href = "https://www.linkedin.com/company/futurzclub">LinkedIn</a>
                      <h4>Senior Wing, Air Force Golden Jubilee Institute, Subroto Park, New Delhi, Delhi - 110010</h4>
                      <h3>Copyright Futurz Club © 2023</h3>
                     </div>  

                </footer>

          <script>
                function openTrai(){
      window.open("https://youtu.be/zMDJWq8-JdU");
    }
    function openBro(){
      window.open("http://bit.ly/z3nith_23brochure");
    }
        // Set the date we're counting down to
        var countDownDate = new Date("July 21, 2023 00:00:00").getTime();
        
        // Update the count down every 1 second
        var x = setInterval(function() {
        
          // Get today's date and time
          var now = new Date().getTime();
            
          // Find the distance between now and the count down date
          var distance = countDownDate - now;
            
          // Time calculations for days, hours, minutes and seconds
          var days = Math.floor(distance / (1000 * 60 * 60 * 24));
          var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
          var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
          var seconds = Math.floor((distance % (1000 * 60)) / 1000);
            
          // Output the result in an element with id="demo"
          document.getElementById("demo").innerHTML = days + "<strong class = 'hil'>d</strong> " + hours + "<strong class = 'hil'>h</strong> "
          + minutes + "<strong class = 'hil'>m</strong> " + seconds + "<strong class = 'hil'>s</strong> "+" remain";
            
          // If the count down is over, write some text 
          if (distance < 0) {
            clearInterval(x);
            document.getElementById("demo").innerHTML = "TAPES ROLLING!";
          }
        }, 1000);
        
        function openNav() {
        document.getElementById("myNav1").style.width = "100%";

        document.getElementById("myNav1").style.transition = "0.8s";
      }
      
      function closeNav() {
        document.getElementById("myNav1").style.width = "0%";

        document.getElementById("myNav1").style.transition = "0.8s";
      }

        </script>
        <script>
                var slideIndex = 1;

                var myTimer;

                var slideshowContainer;

                window.addEventListener("load",function() {
                    showSlides(slideIndex);
                    myTimer = setInterval(function(){plusSlides(1)}, 4000);
                
                    //COMMENT OUT THE LINE BELOW TO KEEP ARROWS PART OF MOUSEENTER PAUSE/RESUME
                    slideshowContainer = document.getElementsByClassName('slideshow-inner')[0];
                
                    //UNCOMMENT OUT THE LINE BELOW TO KEEP ARROWS PART OF MOUSEENTER PAUSE/RESUME
                    // slideshowContainer = document.getElementsByClassName('slideshow-container')[0];
                
                    slideshowContainer.addEventListener('mouseenter', pause)
                    slideshowContainer.addEventListener('mouseleave', resume)
                })

                // NEXT AND PREVIOUS CONTROL
                function plusSlides(n){
                clearInterval(myTimer);
                if (n < 0){
                    showSlides(slideIndex -= 1);
                } else {
                showSlides(slideIndex += 1); 
                }
                
                //COMMENT OUT THE LINES BELOW TO KEEP ARROWS PART OF MOUSEENTER PAUSE/RESUME
                
                if (n === -1){
                    myTimer = setInterval(function(){plusSlides(n + 2)}, 4000);
                } else {
                    myTimer = setInterval(function(){plusSlides(n + 1)}, 4000);
                }
                }

                //Controls the current slide and resets interval if needed
                function currentSlide(n){
                clearInterval(myTimer);
                myTimer = setInterval(function(){plusSlides(n + 1)}, 4000);
                showSlides(slideIndex = n);
                }

                function showSlides(n){
                var i;
                var slides = document.getElementsByClassName("mySlides");
                var dots = document.getElementsByClassName("dot");
                if (n > slides.length) {slideIndex = 1}
                if (n < 1) {slideIndex = slides.length}
                for (i = 0; i < slides.length; i++) {
                    slides[i].style.display = "none";
                }
                for (i = 0; i < dots.length; i++) {
                    dots[i].className = dots[i].className.replace(" active", "");
                }
                slides[slideIndex-1].style.display = "block";
                dots[slideIndex-1].className += " active";
                }

                pause = () => {
                clearInterval(myTimer);
                }

                resume = () =>{
                clearInterval(myTimer);
                myTimer = setInterval(function(){plusSlides(slideIndex)}, 4000);
                }
                    </script>
    </body>
</html>