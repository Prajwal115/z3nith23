<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="Z3NITH is a tech event"/>
    <meta name="keywords" content="Z3NITH" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Z3NITH'23</title>
</head>
<script>

if (screen.width<500){
    window.location.replace('home.php');
}
</script>
<style>
  @import url('https://fonts.googleapis.com/css2?family=Roboto+Serif:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');
@import url('https://fonts.googleapis.com/css2?family=Marcellus&display=swap');
@import url('https://fonts.googleapis.com/css2?family=Roboto+Flex:wght@100;200;300;400;500;600;700;800;900;1000&display=swap');
@font-face { font-family: ROM Mono; src: url('IMG/ABCROM-Light-Trial.otf'); }
@font-face { font-family: ROM Wide Light; src: url('IMG/ABCROMWide-Light-Trial.otf'); }
@font-face { font-family: ROM Wide Bold; src: url('IMG/ABCROMWide-Bold-Trial.otf'); } 
@font-face { font-family: ROM Ext Black; src: url('IMG/ABCROMExtended-Black-Trial.otf'); } 
@font-face { font-family: ROM Wide Reg; src: url('IMG/ABCROMWide-Regular-Trial.otf'); } 
body{
    margin: 0;
    padding: 0;
    overflow-x: hidden;
    background: white;
}
.intro .nav{
    width:6%;
    height:1000px;
    background: #ffffff;
    color:rgb(0, 0, 0);
    float:left;
    position: fixed;
}

.intro .rest{
    float:right;
    width: 94%;
    height:700px;
    background: rgb(0, 0, 0);
}
video{
    position: relative;
}
#haha{
    filter: brightness(0.2);
  transform: translateY(-10%);
    position: absolute;

}
#ham{
    margin-left: 25px;
}
#ham2{
    margin-left: 19px;
    transform: translateY(-200%);
    animation:show 0.5s forwards;
}
#ham3{
    margin-left: 20px;
    transform: translateY(-50%);
    animation:show 0.5s forwards;
}
#close{
    display:none;
    float:right;
    margin-right:25px;
    transition: 0.8s;
}

@keyframes show {
    from{
        opacity: 0;
    }
    to{
        opacity: 1;
    }
}

.eryelse{
    position: absolute;

}
#log{
    margin-left: 380px;
    width: 40%;
    margin-top: 260px;
}
#demo{
    margin-left: 40px; 
    margin-top: 160px;

    color:white;
    font-family: "ROM Wide Bold",sans-serif;
    font-weight: 400;
    font-size: 28px;

}
.intro button{
    margin-left: 40px; 
    margin-right: -25px;
    margin-top: -20px;
    width: 15%;
    padding: 10px;
    background: white;
    color:rgb(0, 0, 0);
    border: none;
    border-radius: 25px;
    font-size: 15px;
    font-family: 'ROM Wide Reg', sans-serif;
    text-transform: uppercase;
    font-weight: 400;
    text-align: center;
}
.intro button:hover{
    background: #E49393;

    color:rgb(0, 0, 0);
    transition: 4s;
}
#test{
    float:right;

    transition: 1s;
    width: 180%;
    height: 2000px;
    margin-top: 80px;
    position: absolute;
    background-color: rgb(255, 255, 255)
}
#navi{
    transition: 0.8s;
}
a{
    display: block;
    text-decoration: none;
}
.together{
    margin-top: 10px;

    margin-left: 21px;
    margin-bottom: 10px;
}
.together .oh2{
    margin-top: 25px; 
    height:50px;  
}
#fc{
    width:60px;
    margin-left: -12px;
    margin-top: 110px; 
}
span{
    display:none;
    text-decoration: none;
    color:black;
    font-family: "Marcellus",serif;
    font-size: 20px;
    text-align:left;
    

}

#thing,#thing2,#thing4,#thing5{
    margin-left: 20px;
    transform: translateY(-70%);
}
#thing2{
    margin-left: 25px;  
}
#thing4{
    margin-left: 22px;    
}
@keyframes showi {
    from{
        opacity: 0;
    }
    to{
        opacity: 1;
    }
}


#test #back{
    width: 180%;
    height: 1300px;
    position: absolute;
}
#test #write{
    position: absolute;
    width: 56%;
    color:#00000086;
    margin-top: 500px;
    font-size: 45px;
    line-height: 1.1em;
    font-family: 900;
    font-family: "ROM Wide Bold",sans-serif;
    padding-left: 90px;

}
#write{
    transition: 0.8s;

}
#one,#two,#thr,#fo{
    transition: 0.8s;    
}
#thing3{
    transform: translate(20%,-80%);
}
#thing4{
    transform: translateY(-80%);
}






#thing,#thing2,#thing3,#thing4,#thing5{
  font-family:"ROM Wide Reg",sans-serif ;
}
#shed{
    font-family:"ROM Ext Black",sans-serif;

}
#events h1{
    color:rgb(0, 0, 0);
    text-transform:capitalize;
    margin-left: -900px;
    padding-top: 200px;
    font-weight: 200;

    font-family:"ROM Ext Black",sans-serif;

    font-size: 40px;
}

#box{
    width:5000px;
}
#events{
background-color: rgb(255, 255, 255);
height:400px;
margin-left: 100px;
scroll-padding: 20px;
margin-top: 1300px;
text-align: center;
position: relative;

}
.event{
    width:500px;
    height:350px;
    background-color: #ffffff;
    scroll-snap-align: start;
}
#slider{
background-color: rgb(0, 0, 0);
height:1400px;
width:65%;
color:white;
padding-top: 200px;
margin-top: 500px;
text-align: center;
position: relative;

}
#gall{
background-color: rgb(255, 255, 255);
height:600px;
width:65%;
color:rgb(0, 0, 0);
padding-top: 200px;
font-family: "ROM Mono",sans-serif;
text-align: center;
position: relative;

}
#foo{
background-color: rgba(0, 0, 0, 0.904);
height:100px;
margin-top: 250px;
width:100%;
color:white;
padding-top: 100px;
padding-bottom: 100px;
position: relative;

}
#spon{
    color:rgb(255, 255, 255);
    text-transform:capitalize;


    font-weight: 200;

    font-family:"ROM Ext Black",sans-serif;

    font-size: 90px;
    margin-bottom: 50px;
}
#titi{
    margin-top: -10px;
    font-size: 22px;
    text-transform:uppercase;
    font-family:"ROM Mono",sans-serif; 
}
#titi2{
    margin-top: 10px;
    font-size: 22px;
    text-transform:uppercase;
    font-family:"ROM Mono",sans-serif; 
}
.hil{
     font-family:"ROM Wide Light",sans-serif;    
}
.titspo{
    margin-right: 60px;
}
.titspo img{
    margin-top: -45px;
    width:35%;
}
.evspo{
    margin-right: 60px;
}
.evspo img{
    margin-top: -25px;
    width:25%;
    margin-right: 30px;
}
.evspo #xyz{
    transform: translateY(30%);
    width:15%;
}
.evspo #codechef{
    transform: translateY(10%);
}
.evspo #bouj{
    transform: translateY(10%);
}
.bott{
    margin-top: 60px;
}
#dee{
    margin-top: 10px;
    width:10%;
    margin-bottom: 40px;
}
#arta{
    width:15%;

}
#enig{
    width:20%;

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
div#testing{
    margin-top: 30px;
    margin-left: -100px;
}
#slide{

    background-color: rgb(255, 255, 255);
    height: 500px;
    width:5000px;
}

#row1{
    width:1300px;
    margin-left: 40px;
    margin-right: 40px;
}
#row2{
    display: none;
    width:1300px;
    margin-left: 40px;
    margin-right: 40px;
}
#row3{
    display: none;
    width:1300px;
    margin-left: 40px;
    margin-right: 40px;
}
#row4{
    display: none;
    width:1300px;
    margin-left: 40px;
    margin-right: 40px;
}
.flip-card {
  background-color: transparent;
  width: 250px;
  height: 275px;

  float: left;
  margin-right: 130px;
  perspective: 1000px;
}

.flip-card-inner {
  position: relative;
  width: 300px;
  height: 275px;
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
#cake{
  margin-right: 60px;
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
#dot1{
    background-color: black;
    width: 15px;
    float:left;
    margin-left: 25px;
    height:15px;
    margin-top: 420px;
    border-radius: 100px;
    transform: translateX(-5000%);
    cursor: pointer;
}
#dot2,#dot3,#dot4{
    background-color: rgba(0, 0, 0, 0.336);
    float:left;
    margin-left: 25px;
    width: 15px;
    height:15px;
    margin-top: 420px;
    border-radius: 100px;
    transform: translateX(-5000%);
    cursor: pointer;
}
.numb{
width:82%;

margin-left: -90px;
margin-top: -100px;
float:left
}
.numb1{
width:90%;

margin-left: -30px;
margin-top: -100px;
float:left
}
.numb2{
width:90%;

margin-left: -70px;
margin-top: -100px;
float:left
}
.numb3{
width:90%;

margin-left: -50px;
margin-top: -100px;
float:left
}
.numb4{
width:90%;

margin-left: -80px;
margin-top: -100px;
float:left
}
.numb5{
width:90%;

margin-left: -60px;
margin-top: -100px;
float:left
}
.numb6{
width:90%;

margin-left: -40px;
margin-top: -100px;
float:left
}
.numb7{
width:82%;

margin-left: -80px;
margin-top: -100px;
float:left
}
#mob{
  display: none;
}
#evet{
color:black;
font-size: 30px;
width: 100%;
margin-right: -25px;
padding-top: 10px;
float:right;
font-family: "ROM Wide Bold",sans-serif;
}
#inside{
  color:black;
font-size: 28px;
padding-top: 40px;
width: 100%;
text-align: center;
float:right;
font-family: "ROM Ext Black",sans-serif;
}
.flip-card p{
  color:black;
  font-size: 16px;
  font-family: "ROM Mono",sans-serif;
  transform: translateY(-20%);
}
.flip-card h4{
  color:black;
  font-size: 13px;
  font-family: "ROM Wide Light",sans-serif;
  transform: translateY(-40%);
}
#ven{
  transform: translateY(-120%);

}
#thingi{


  margin-left: 45px;
  margin-top:10px;
}
.cente{
  margin-left: 500px;
  margin-top: 15px;
  text-decoration: none;
}
.cente a{
  color:white;
  margin-right: 30px;
  display: inline-block;
  text-decoration: none;

  font-size: 18px;
  font-family: "ROM Mono",sans-serif;
  transition: 0.9s;
}
.cente h4{
  color:white;
  margin-right: 30px;
  display: inline-block;
  text-decoration: none;
  margin-top: 30px;
  font-size: 18px;
  font-family: "ROM Wide Bold",sans-serif;
  transition: 0.9s;
}
.cente h3{
  color:white;
  margin-right: 30px;
  display: inline-block;
  text-decoration: none;
transform: translateY(-150%);
  font-size: 18px;
  font-family: "ROM Wide Light",sans-serif;
  transition: 0.9s;
}
.cente a:hover{
  transition: 0.9s;
  opacity: 0.4;
}
#mobi{
  display:none;
}
#mbpna{
    padding-bottom: 10px;
}
.overlay {
  height: 100%;
  display: none;
  width: 0;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: rgb(255, 255, 255);
  background-color: rgba(255, 255, 255, 0.9);
  overflow-x: hidden;
  transition: 0.5s;
}

.overlay-content {
  position: relative;
  top: 25%;
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

@media screen and (max-height: 500px) {
  .overlay a {font-size: 20px}
  .overlay .closebtn {
  font-size: 40px;
  top: 15px;
  right: 35px;
  }
}
@media screen and (max-width: 500px){
  #navi{
    display:none;
  }
  #mobi{
    display:block;
    background-color: rgba(0, 0, 0, 0);
    width:500px;
    height:50px;
margin-top: 550px;

    position: fixed;


  }
  .gate{
  width: 280px;
  height:46px;
  overflow: hidden;
  
  margin-left: 120px;
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

.gate button{
  width:60px;
  margin: 0;
  padding: 0;
  cursor: pointer;
  height:50px;
  transform: translate(2%,-4%);
  margin-left: 171px;
  border-radius: 15px;
  background-color: white;
}
#rest{
  position: relative;
  width: 500px;
}
body{

    overflow-x: hidden;

}
#haha{
  background-position-x:150px;
}
#demo{
  transform: translateY(-360%);
  text-align: center;
}
#log{
  margin-left: 90px;
  width: 70%;
}
#br, #tra{
  width:35%;
  margin-left: 50px;
  transform: translate(15%,-250%);
}
#back{
  height: 800px;
}
#test #write{
  width: 480px;
  transform: translateX(-7%);
  line-height: 80%;
}
#one,#two,#thr,#fo{
  font-size: 36px;
  width:500px;
  width:90%;

}
#test #back {

    height: 1600px;
    position: absolute;

}
#events{
  margin-top: 1600px;
}
#shed{
  display: none;
}
#mob{
  display: block;
  font-size: 20px;
color: #000000;
color:rgb(0, 0, 0);
    text-transform:capitalize;
  transform: translateX(11%);
    padding-top: 200px;
    font-weight: 200;
    font-family:"ROM Ext Black",sans-serif;


}
#spon{
  font-size: 50px;
  transform: translateX(-10%);
}
#titspon{
  font-size: 20px;
  transform: translateX(-10%);
}
#crom{
  margin-top: 5px;
  width:50%;
  margin-bottom: 35px;
}
#dee{
  margin-top: 15px;
  width:15%;
}
#bott{
  margin-left: 15px;
}
#codechef,#bouj,#xyz{
  width:25%;
  margin-top: 25px;
  transform: translateY(-60%);
}
#bouj{
  transform: translateY(20%);
}
#cake{
  width:35%;
}
#slider{
  height:800px;
}
#slideshow{
  width: 500px;
}
footer{
  width: 500px;
}
#thingi{
  transform: translateX(-50%);
}
.cente{
  width: 100%;
  transform: translateX(-67%);
}
.cente a{
  font-size: 11px;
  margin-right: 10px;
}
.cente h3{
  font-size: 11px;
}
.cente h4{
  font-size: 11px;
  width: 60%;
}
}
html{
  scroll-behavior: smooth;
}
</style>
<body>
    <div class="intro">

    <div class="nav" id="navi" >
        <div class ="oh" id="oh"onclick="myFunction()">
        <svg id ="ham"width="27" height="54" viewBox="0 0 101 74" fill="none" xmlns="http://www.w3.org/2000/svg">
            <rect width="101" height="12" rx="6" fill="#1E1E1E"/>
            <rect y="31" width="101" height="12" rx="6" fill="#1E1E1E"/>
            <rect y="62" width="101" height="12" rx="6" fill="#1E1E1E"/>
            </svg>
        <svg id="ham2" width="37" height="8" viewBox="0 0 44 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M0.506747 0.0909088H3.35121L6.35547 7.42045H6.48331L9.48757 0.0909088H12.332V11H10.0948V3.8995H10.0043L7.18111 10.9467H5.65767L2.83452 3.87287H2.74396V11H0.506747V0.0909088ZM14.2323 11V0.0909088H21.5832V1.99254H16.5388V4.59197H21.205V6.49361H16.5388V9.09837H21.6045V11H14.2323ZM32.5415 0.0909088V11H30.5494L25.8033 4.13388H25.7234V11H23.4169V0.0909088H25.4411L30.1499 6.9517H30.2457V0.0909088H32.5415ZM41.1855 0.0909088H43.4919V7.17543C43.4919 7.97088 43.3019 8.6669 42.922 9.26349C42.5455 9.86009 42.0182 10.3253 41.3399 10.6591C40.6617 10.9893 39.8715 11.1545 38.9695 11.1545C38.064 11.1545 37.2721 10.9893 36.5938 10.6591C35.9156 10.3253 35.3882 9.86009 35.0118 9.26349C34.6354 8.6669 34.4472 7.97088 34.4472 7.17543V0.0909088H36.7536V6.97834C36.7536 7.39382 36.8442 7.76314 37.0253 8.08629C37.21 8.40945 37.4692 8.66335 37.803 8.84801C38.1368 9.03267 38.5257 9.125 38.9695 9.125C39.417 9.125 39.8058 9.03267 40.1361 8.84801C40.4699 8.66335 40.7274 8.40945 40.9085 8.08629C41.0931 7.76314 41.1855 7.39382 41.1855 6.97834V0.0909088Z" fill="#1E1E1E"/>
        </svg>

              
        </div>   

        <svg id="close" onclick="myFunction2()"width="23" height="50" viewBox="0 0 76 76" fill="none" xmlns="http://www.w3.org/2000/svg">
            <rect x="-2" y="69.4178" width="101" height="12" rx="6" transform="rotate(-45 -2 69.4178)" fill="#1E1E1E"/>
            <rect x="6.48529" y="-2" width="101" height="12" rx="6" transform="rotate(45 6.48529 -2)" fill="#1E1E1E"/>
            </svg>
            <div class = "together" id="toge">
            <a href="index.html">

                <svg class ="oh2" style="padding-left:0px;"width="34" height="44"  viewBox="0 0 157 132" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M3 49.1389L78.5 3L154 49.1389" stroke="black" stroke-width="5" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M137.222 70.5V124.189C137.222 126.969 134.969 129.222 132.189 129.222H24.811C22.0312 129.222 19.7777 126.969 19.7777 124.189V70.5" stroke="black" stroke-width="5" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                    <span id = "thing">Home</span>
            </a>    
            <a href="RES/Z3NITH'23 Results.pdf">

<svg class ="oh2" style="padding-left:2px;"width="30" height="46" viewBox="0 0 172 163" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M37.4548 11.9561H135.319C135.319 11.9561 127.164 134.724 86.3871 134.724C66.4673 134.724 54.3323 105.427 47.13 75.4564C39.5885 44.0756 37.4548 11.9561 37.4548 11.9561Z" stroke="black" stroke-width="5" stroke-linecap="round" stroke-linejoin="round"/>
<path d="M135.319 11.9569C135.319 11.9569 143.85 2.85688 150.94 2.6963C164.83 2.38181 167.398 11.9569 167.398 11.9569C170.117 17.6015 172.292 32.2772 159.244 45.8241C146.195 59.3708 131.588 71.2243 125.644 75.4573" stroke="black" stroke-width="5" stroke-linecap="round" stroke-linejoin="round"/>
<path d="M37.4545 11.957C37.4545 11.957 28.5662 2.75326 21.2919 2.69649C7.40113 2.58805 4.83309 11.957 4.83309 11.957C2.11457 17.6015 -0.0601722 32.2772 12.9885 45.8241C26.037 59.3709 41.1861 71.2243 47.1296 75.4582" stroke="black" stroke-width="5" stroke-linecap="round" stroke-linejoin="round"/>
<path d="M53.7659 160.124C53.7659 143.191 86.3868 134.724 86.3868 134.724C86.3868 134.724 119.009 143.191 119.009 160.124H53.7659Z" stroke="black" stroke-width="5" stroke-linecap="round" stroke-linejoin="round"/>
</svg>

                    <span id = "thing2">Results</span>
            </a>  
            <a href="team.html">  

                <svg class ="oh2" style="padding-left:-1px;" width="35" height="55"viewBox="0 0 218 128" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M56.5818 123.665V116.207C56.5818 87.3739 79.9558 64 108.789 64C137.622 64 160.996 87.3739 160.996 116.207V123.665" stroke="black" stroke-width="7.23273" stroke-linecap="round"/>
                    <path d="M138.996 86.0399C138.996 65.4449 155.692 48.749 176.287 48.749C196.882 48.749 213.578 65.4449 213.578 86.0399V89.769" stroke="black" stroke-width="7.23273" stroke-linecap="round"/>
                    <path d="M108.415 63.6655C124.89 63.6655 138.247 50.3086 138.247 33.8327C138.247 17.3566 124.89 4 108.415 4C91.9383 4 78.5818 17.3566 78.5818 33.8327C78.5818 50.3086 91.9383 63.6655 108.415 63.6655Z" stroke="black" stroke-width="7.23273" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M176.371 48.7491C188.728 48.7491 198.745 38.7316 198.745 26.3745C198.745 14.0175 188.728 4 176.371 4C164.013 4 153.996 14.0175 153.996 26.3745C153.996 38.7316 164.013 48.7491 176.371 48.7491Z" stroke="black" stroke-width="7.23273" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M4 86.0399C4 65.4449 20.6959 48.749 41.2909 48.749C61.8859 48.749 78.5818 65.4449 78.5818 86.0399V89.769" stroke="black" stroke-width="7.23273" stroke-linecap="round"/>
                    <path d="M41.3745 48.7491C53.732 48.7491 63.7491 38.7316 63.7491 26.3745C63.7491 14.0175 53.732 4 41.3745 4C29.0171 4 19 14.0175 19 26.3745C19 38.7316 29.0171 48.7491 41.3745 48.7491Z" stroke="black" stroke-width="7.23273" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                    
                    <span id = "thing3">Our Team</span>                
        </a>      

                                            
        <a href="video.html">  
            <svg class ="oh2" style="padding-left:-1px;" width="35" height="55"viewBox="0 0 126 92" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M75 46.0586L54 58.0586V34.0586L75 46.0586Z" fill="black" stroke="black" stroke-width="5" stroke-linecap="round" stroke-linejoin="round"/>
                <path d="M3 50.3039V41.8133C3 24.4412 3 15.7552 8.43294 10.1664C13.8659 4.57755 22.4194 4.33563 39.5261 3.85179C47.6324 3.62253 55.9128 3.45825 63 3.45825C70.0872 3.45825 78.3678 3.62253 86.4738 3.85179C103.58 4.33563 112.134 4.57755 117.567 10.1664C123 15.7552 123 24.4412 123 41.8133V50.3039C123 67.6757 123 76.3618 117.567 81.9502C112.134 87.5392 103.581 87.7811 86.4744 88.2653C78.3678 88.4945 70.0872 88.6589 63 88.6589C55.9128 88.6589 47.632 88.4945 39.5256 88.2653C22.4191 87.7811 13.8658 87.5392 8.43288 81.9502C3 76.3618 3 67.6757 3 50.3039Z" stroke="black" stroke-width="5"/>
                </svg>
                <span id = "thing4">Videos</span>            
              
    </a>  
    <a href="index.php#slideshow">  
        <svg class ="oh2" style="padding-left:-1px;" width="35" height="55" viewBox="0 0 138 113" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M19.051 110H119.253C121.214 110 122.888 108.582 123.211 106.647L135.248 34.4219C135.656 31.9762 133.77 29.7498 131.29 29.7498H7.01351C4.53399 29.7498 2.64798 31.9762 3.05558 34.4219L15.0931 106.647C15.4156 108.582 17.0895 110 19.051 110Z" stroke="black" stroke-width="4.02148"/>
            <path d="M35.7142 29.75V16.375C35.7142 8.98819 41.7024 3 49.0892 3H89.2142C96.6012 3 102.589 8.98819 102.589 16.375V29.75" stroke="black" stroke-width="4.02148"/>
            </svg>

            <span id = "thing5">The Vault</span>            
          
</a>  
    <img src = "IMG/unnamed (1) (1).png" id = "fc" alt="FC Logo">
</div>
            
    </div>
    <div id="myNav" class="overlay">
      <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
      <div class="overlay-content">
        <a href="index.php">Home</a>
        <a href="http://bit.ly/z3nith_23brochure">Brochure</a>
        <a href="team.html">Our Team</a>
        <a href="video.php">Videos</a>
        <a href="index.php#slideshow">The Vault</a>        
      </div>
    </div>
  
    <div class="rest" id="rest">

        <video id = "haha" autoplay muted loop poster="IMG/Z3NITH'23 Brochure Cover 1.jpg">
            <source src="Z3NITH23 Trailer.mp4" type="video/mp4">
          </video>
          <div class = "eryelse">
            <div id = "mobi">
              <div class = "gate" id = "gates">
                  <img src = "IMG/Group 4.png">
                  <h6>Home</h6>
                  <button onclick="openNav()">☰</button>
              </div> 
          </div>  
            <img id = "log" src="IMG/Z3NITH Title Typeface Logo.png" alt="Z3NITH logo">
            <h2 id = "demo">July 21</h2>
            <button onclick = "openBro()"id="br">Brochure</button>

            <button onclick = "openTrai()"id="tra">View Trailer</button>

            <div id="test">
              <img id = "back" src="IMG/hd-wallpaper-1074131.jpg">
                
            <h1 id = "write"><strong id = "one">Z3NITH: a high school contest that elicits students to demonstrate their aptitude in various domains.</strong> <strong id = "two"> Social innovation, scientific discovery, aesthetic expression and entrepreneurship: Z3NITH furnishes a platform </strong><strong id = "thr">for students to actualize their creativity and potential. Z3NITH surpasses a contest; it is a voyage of edification and progression.</strong><strong id="fo">Let's get "Back to the future" and experience the past which ignites the present and forges the future.</strong></h1>
              <div id = "events">
                <h1 id="shed">Events This Year</h1>
                <h1 id="mob">Events This Year</h1>
                <div id = "row1">
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
                        <div id = "fli2" class="flip-card-inner">
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
                </div>
                <div id = "row2">
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
                            <h4>Offline - Solo</h4>
                            <h4 id = 'ven'>Senior CS Lab </h4>
                          </div>
                        </div>
                      </div>
                      <div id = "fl4" class="flip-card">
                        <div id = "fli4" class="flip-card-inner">
                          <div class="flip-card-front">
                            <h3 id = "evet">Re-Tease-TRO</h3>
                            <img class = "numb4" src = "IMG/No 4.svg">
                          </div>
                          <div class="flip-card-back">
                            <h3 id = "inside">Re-Tease-TRO</h3>
                            <p>Get nostalgic with cinematic <br>experience!!</p> 
                            <h4>Online - 2 participants</h4>
                            <h4 id = 'ven'>N/A </h4>
                          </div>
                        </div>
                      </div>
                    
                </div>
                <div id = "row3">
                    <div id = "fl4" class="flip-card">
                        <div  id = "fli4"class="flip-card-inner">
                          <div class="flip-card-front">
                            <h3 id = "evet">Re-Tease-TRO</h3>
                            <img class = "numb4" src = "IMG/No 4.svg">
                          </div>
                          <div class="flip-card-back">
                            <h3 id = "inside">Re-Tease-TRO</h3>
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
                </div>
                <div id = "row4">
                  <div id = "fl4" class="flip-card">
                      <div  id = "fli4"class="flip-card-inner">
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
                    <div id = "fl5" class="flip-card">
                      <div id = "fli5" class="flip-card-inner">
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
                    <div id = "fl6" class="flip-card">
                      <div id = "fli6" class="flip-card-inner">
                        <div class="flip-card-front">
                          <h3 id = "evet">Gadget Mania</h3>
                          <img class = "numb7" src = "IMG/No 7.svg">
                        </div>
                        <div class="flip-card-back">
                          <h3 id ="inside">>Gadget Mania</h3> 
                          <p>Paint the special magic</p> 
                          <h4>Offine - 1 participant</h4>
                          <h4 id = 'ven'>Special Wing CS Lab</h4>
                        </div>
                      </div>
                    </div>
              </div>
                <div id = "dots">
                    <div id = "dot1" onclick="doThr()"></div>
                    <div id = "dot2"onclick="doOne()"></div>
                    <div id = "dot3"onclick="doTwo()"></div>
                    <div id = "dot4"onclick="doFor()"></div>
                </div>
            </div>
            <div id = "slider">
                <h1 id = "spon">Our Sponsors</h1>


                <div class = "titspo">
                    <h2 id = "titi">Title Sponsor</h2>
                    <img id ="crom" src = "IMG/SPONSORS/Croma Transparent.png">

                </div>

                <div class = "titspo">
                    <h2 id = "titi">Talent Partner</h2>
                    <img id = "dee" src = "IMG/SPONSORS/deexplore.png">

                </div>
                <div class = "evspo">
                    <h2 id = "titi2">Event Sponsors</h2>
                    <img id = "codechef" src = "IMG/SPONSORS/LOGO-Full-2019 (2).png">
                    <img id = "xyz" src = "IMG/SPONSORS/xyz-logo-color.png">
                    <img id = "bouj" src = "IMG/SPONSORS/bouj.png">
                    <div class = "bott">
                    <img id = "cake" src = "IMG/SPONSORS/cake_logo_white.png">
                    <img id = "arta" src = "IMG/SPONSORS/ART ALLY - LOGO.jpg">
 
                </div>
                </div>
            </div>
            <div id = "gall">
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
                    <div id = "foo">
                      <div class = "lefti" style = "float:left;width:10%;">
                      <img id = "thingi" style = "margin-left: 65px; margin-top:40px;width:100%;"src = "IMG/Z3NITH Title Typeface Logo.png">      

                    </div>
                    <div class = "centi" style = "float:none;width:60%;">
                      <div class ="cente">
                      
                      <a href = "mailto:futurz.afgji@gmail.com">Email</a>
                      <a href = "https://www.instagram.com/futurzclub/">Instagram</a>
                      <a href = "https://www.youtube.com/@FuturzClubAFGJI">Youtube</a>
                      <a href = "https://www.linkedin.com/company/futurzclub">LinkedIn</a>
 
                      <h4>Senior Wing, Air Force Golden Jubilee Institute, Subroto Park, New Delhi, Delhi - 110010</h4>
                      <h3>Copyright Futurz Club © 2023</h3>
                    </div>

                    </div>
                    </div>
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
                    
                </div>
      </div>
      </div>
          </div>

          </div>

<!-- JAVASCRIPT HAHAHAHAHH-->
<script>
    // When the user scrolls down 50px from the top of the document, resize the header's font size
    window.onscroll = function() {scrollFunction()};

    function scrollFunction() {
        if (document.body.scrollTop < 500 || document.documentElement.scrollTop < 500 && document.body.scrollTop < 500 || document.documentElement.scrollTop < 500)
      {
        document.getElementById("navi").style.background = "#ffffff";
        document.getElementById("back").style.opacity="0.4";
        document.getElementById("back").style.transition="0.9s";
        document.getElementById("write").style.color="rgba(0, 0, 0, 0.062)";
        document.getElementById("one").style.color="rgba(0, 0, 0, 0.062)";
        document.getElementById("shed").style.fontSize="80px";
        document.getElementById("two").style.color="rgba(0, 0, 0, 0.062)";
        document.getElementById("thr").style.color="rgba(0, 0, 0, 0.062)";
        document.getElementById("fo").style.color="rgba(0, 0, 0, 0.062)";

      }
      if (document.body.scrollTop > 600 || document.documentElement.scrollTop > 600 && document.body.scrollTop > 600 || document.documentElement.scrollTop > 600)
      {
        document.getElementById("navi").style.background = "#fbe9e9";
        document.getElementById("back").style.opacity="0.4";
        document.getElementById("back").style.transition="0.9s";
        document.getElementById("one").style.color="black";  
     
      }
      if (document.body.scrollTop > 800 || document.documentElement.scrollTop > 800 && document.body.scrollTop > 800 || document.documentElement.scrollTop > 800)
      {
        document.getElementById("navi").style.background = "#f9dede";
        document.getElementById("back").style.opacity="0.5";
        document.getElementById("back").style.transition="0.9s";
        document.getElementById("one").style.color="rgba(0, 0, 0, 0.062)";
        document.getElementById("two").style.color="black";   
   
      }
      if (document.body.scrollTop > 1000 || document.documentElement.scrollTop > 1000 && document.body.scrollTop > 1000 || document.documentElement.scrollTop > 1000)
      {
        document.getElementById("navi").style.background = "#f7d4d3";
        document.getElementById("back").style.opacity="0.6";
        document.getElementById("back").style.transition="0.9s";
        document.getElementById("one").style.color="rgba(0, 0, 0, 0.062)";
        document.getElementById("two").style.color="rgba(0, 0, 0, 0.062)";
        document.getElementById("shed").style.fontSize="80px";
        document.getElementById("thr").style.color="black";    
    
      }
      if (document.body.scrollTop > 1200 || document.documentElement.scrollTop > 1200 && document.body.scrollTop > 1200 || document.documentElement.scrollTop > 1200)
      {
        document.getElementById("navi").style.background = "#f4c9c8";
        document.getElementById("back").style.opacity="0.7";
        document.getElementById("back").style.transition="0.9s";
        document.getElementById("one").style.color="rgba(0, 0, 0, 0.062)";
        document.getElementById("two").style.color="rgba(0, 0, 0, 0.062)";
        document.getElementById("thr").style.color="rgba(0, 0, 0, 0.062)";
       document.getElementById("fo").style.color="black";   


      }
      if (document.body.scrollTop > 1400 || document.documentElement.scrollTop > 1400 && document.body.scrollTop > 1400 || document.documentElement.scrollTop > 1400)
      {
        document.getElementById("navi").style.background = "#f1bebd";
        document.getElementById("back").style.opacity="0.8";
        document.getElementById("back").style.transition="0.9s";
        document.getElementById("one").style.color="rgba(0, 0, 0, 0.062)";

        document.getElementById("two").style.color="rgba(0, 0, 0, 0.062)";
        document.getElementById("thr").style.color="rgba(0, 0, 0, 0.062)";
         document.getElementById("fo").style.color="rgba(0, 0, 0, 0.062)"; 

      }
      if (document.body.scrollTop > 1600 || document.documentElement.scrollTop > 1600 && document.body.scrollTop > 1600 || document.documentElement.scrollTop > 1600)
      {
        document.getElementById("navi").style.background = "#f1bebd";
        document.getElementById("back").style.opacity="0.9";
        document.getElementById("back").style.transition="0.9s";
        document.getElementById("one").style.color="rgba(0, 0, 0, 0.062)";
        document.getElementById("two").style.color="rgba(0, 0, 0, 0.062)";
        document.getElementById("thr").style.color="rgba(0, 0, 0, 0.062)";

        document.getElementById("fo").style.color="rgba(0, 0, 0, 0.062)"; 

      }
      if (document.body.scrollTop > 1800 || document.documentElement.scrollTop > 1800 && document.body.scrollTop > 1800 || document.documentElement.scrollTop > 1800)
      {
        document.getElementById("navi").style.background = "#f1bebd";
        document.getElementById("back").style.opacity="0.9";

      }
    }
    </script>
    <script>

    function myFunction() {
     document.getElementById("haha").style.margin="90px"
     document.getElementById("navi").style.width="25%";
     document.getElementById("navi").style.transition="0.8s";
     document.getElementById("rest").style.width="75%";
     document.getElementById("rest").style.transition="0.8s";
     document.getElementById("haha").style.transition="0.8s"; 
     document.getElementById("haha").style.width="850px"
     document.getElementById("oh").style.display="none";
     document.getElementById("log").style.marginLeft="290px";
     document.getElementById("haha").style.borderRadius="50px";
     document.getElementById("close").style.display="block";
     document.getElementById("close").style.marginBottom="200px";
     document.getElementById("test").style.width="160%";
     document.getElementById("toge").style.marginTop="100px";
     document.getElementById("toge").style.marginLeft="80px"; 
     document.getElementById("fc").style.marginTop="65px"; 

     document.getElementById("thing").style.animation="5s showi forwards";   
     document.getElementById("thing2").style.animation="5s showi forwards";  
     document.getElementById("thing3").style.animation="5s showi forwards";       
     document.getElementById("thing4").style.animation="5s showi forwards";    
     document.getElementById("thing5").style.animation="5s showi forwards"; 
     document.getElementById("tra").style.width="24%";       
     document.getElementById("tra").style.transition="1.4s";          
     document.getElementById("thing").style.display="inline-block";   
     document.getElementById("thing2").style.display="inline-block";  
     document.getElementById("thing3").style.display="inline-block";       
     document.getElementById("thing4").style.display="inline-block";    
     document.getElementById("thing5").style.display="inline-block";    
       
    }
    function myFunction2() {

     document.getElementById("haha").style.marginTop="90px";   
     document.getElementById("haha").style.marginLeft="150px"
     document.getElementById("navi").style.width="6%";
     document.getElementById("navi").style.transition="0.8s";
     document.getElementById("rest").style.width="94%";
     document.getElementById("log").style.marginLeft="380px";
     document.getElementById("log").style.marginTop="80px";
     document.getElementById("rest").style.transition="0.8s";
     document.getElementById("haha").style.transition="0.8s"; 
     document.getElementById("haha").style.width="950px"
     document.getElementById("close").style.display="none";
     document.getElementById("haha").style.borderRadius="50px";
     document.getElementById("oh").style.transition="0.1s";
     document.getElementById("ham2").style.animation="show 4s forwards";
     document.getElementById("oh").style.display="block";
     document.getElementById("test").style.width="180%";  
     document.getElementById("toge").style.transition="1s";

     document.getElementById("toge").style.marginTop="10px";
     document.getElementById("toge").style.marginLeft="21px";  
     document.getElementById("thing").style.animation="5s showi forwards";   
     document.getElementById("thing2").style.animation="5s showi forwards";  
     document.getElementById("thing3").style.animation="5s showi forwards";       
     document.getElementById("thing4").style.animation="5s showi forwards";    
     document.getElementById("thing5").style.animation="5s showi forwards";        
     document.getElementById("thing").style.display="none";   
     document.getElementById("thing2").style.display="none";  
     document.getElementById("thing3").style.display="none";       
     document.getElementById("thing4").style.display="none";    
     document.getElementById("thing5").style.display="none";    
     document.getElementById("tra").style.width="20%";       
     document.getElementById("tra").style.transition="1.4s"; 
     document.getElementById("fc").style.marginTop="110px"; 

    }
    function doOne(){
        document.getElementById("row1").style.display="none";
        document.getElementById("row2").style.display="block";
        document.getElementById('row3').style.display="none";
        document.getElementById('row4').style.display="none";
        document.getElementById('dot4').style.background="rgba(0, 0, 0, 0.336)";
        document.getElementById('dot1').style.background="rgba(0, 0, 0, 0.336)";
        document.getElementById('dot3').style.background="rgba(0, 0, 0, 0.336)";   
        document.getElementById('dot2').style.background="black";   
        document.getElementById('dot1').style.transition="0.8s";
        document.getElementById('dot2').style.transition="0.8s";
        document.getElementById('dot3').style.transition="0.8s";
        document.getElementById('dot4').style.transition="0.8s";
    }
    function doTwo(){
        document.getElementById("row2").style.display="none";
        document.getElementById("row3").style.display="block";
        document.getElementById('row1').style.display="none";
        document.getElementById('row4').style.display="none";
        document.getElementById('dot4').style.background="rgba(0, 0, 0, 0.336)";
        document.getElementById('dot2').style.background="rgba(0, 0, 0, 0.336)";
        document.getElementById('dot1').style.background="rgba(0, 0, 0, 0.336)";   
        document.getElementById('dot3').style.background="black";   
        document.getElementById('dot1').style.transition="0.8s";
        document.getElementById('dot2').style.transition="0.8s";
        document.getElementById('dot3').style.transition="0.8s";
        document.getElementById('dot4').style.transition="0.8s";
    }
    function doThr(){
        document.getElementById("row3").style.display="none";
        document.getElementById("row1").style.display="block";
        document.getElementById('row2').style.display="none";
        document.getElementById('row4').style.display="none";
        document.getElementById('dot4').style.background="rgba(0, 0, 0, 0.336)";
        document.getElementById('dot3').style.background="rgba(0, 0, 0, 0.336)";
        document.getElementById('dot2').style.background="rgba(0, 0, 0, 0.336)";   
        document.getElementById('dot1').style.background="black";   
        document.getElementById('dot1').style.transition="0.8s";
        document.getElementById('dot2').style.transition="0.8s";
        document.getElementById('dot3').style.transition="0.8s";
        document.getElementById('dot4').style.transition="0.8s";
    }
    function doFor(){
        document.getElementById("row3").style.display="none";
        document.getElementById("row4").style.display="block";
        document.getElementById('row2').style.display="none";
        document.getElementById('row1').style.display="none";
        document.getElementById('dot4').style.background="black";
        document.getElementById('dot3').style.background="rgba(0, 0, 0, 0.336)";
        document.getElementById('dot2').style.background="rgba(0, 0, 0, 0.336)";   
        document.getElementById('dot1').style.background="rgba(0, 0, 0, 0.336)";   
        document.getElementById('dot1').style.transition="0.8s";
        document.getElementById('dot2').style.transition="0.8s";
        document.getElementById('dot3').style.transition="0.8s";
        document.getElementById('dot4').style.transition="0.8s";
    }
    function openTrai(){
      window.open("https://youtu.be/zMDJWq8-JdU");
    }
    function openBro(){
      window.open("http://bit.ly/z3nith_23brochure");
    }
    </script>
    <script>
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
        </script>
            <script>
              function openNav() {
                document.getElementById("myNav").style.width = "100%";
              }
              
              function closeNav() {
                document.getElementById("myNav").style.width = "0%";
              }
              </script>
</body>
</html>