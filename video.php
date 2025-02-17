

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="Z3NITH is a tech event"/>
    <meta name="keywords" content="Z3NITH" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="CSS/video.css"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Z3NITH'23</title>
</head>
<script>

if (screen.width<500){
    window.location.replace('videos.php');
}
</script>
<style>
              @import url('https://fonts.googleapis.com/css2?family=Roboto+Serif:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');
@import url('https://fonts.googleapis.com/css2?family=Marcellus&display=swap');
@font-face { font-family: ROM Mono; src: url('IMG/ABCROM-Light-Trial.otf'); }
@font-face { font-family: ROM Mono Bold; src: url('IMG/ABCROM-Medium-Trial.otf'); }  
@font-face { font-family: ROM Wide Bold; src: url('IMG/ABCROMWide-Bold-Trial.otf'); } 
@font-face { font-family: ROM Ext Black; src: url('IMG/ABCROMExtended-Black-Trial.otf'); } 
@font-face { font-family: ROM Wide Reg; src: url('IMG/ABCROMWide-Regular-Trial.otf'); } 
body{
    margin: 0;
    padding: 0;
    overflow-x: hidden;
    background: white;
    overflow-y: hidden;
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
    background: url()
}
video{
    position: relative;
}
#haha{
    filter: brightness(0.2);

    position: absolute;

}
#ham{
    margin-left: 25px;
}
#ham2{
    margin-left: 19px;
    transform: translateY(-100%);
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
    width:60%;
    margin-top: 200px;
}
#tie{
    margin-left: 40px; 
    margin-top: 70px;

    color:white;
    font-family: 'Marcellus', serif;
    font-weight: 400;
    font-size: 30px;
    text-transform: uppercase;
}

#test{
    float:right;

    transition: 1s;
    width: 180%;
    height: 800px;
    margin-top: 50px;
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
#thing,#thing2,#thing3,#thing4,#thing5{
  font-family:"ROM Wide Reg",sans-serif ;
}

#thing4,#thing3{
transform: translateY(-80%);
}
span{
    text-align: left;
}
#thing,#thing2,#thing3,#thing4,#thing5{
    margin-left: 20px;
    transform: translateY(-70%);
}
.parallax{
      /* The image used */
  background-image: url("../IMG/team page.svg");

  /* Set a specific height */
  min-height: 650px;

  /* Create the parallax scrolling effect */
  background-attachment: fixed;
  background-position: center;
  background-repeat: no-repeat;
  background-size: 2000px 800px;
}

.rect{
    width:50px;
    height:50px;
    background: black;
    float:left;
}
.row{
    margin-top: 150px;

}
.rest .head{
    background-color: #000000e3;
    width: 1300px;
    height:100px;
    transform: translateY(-20%);
}
.head h2{
    text-align: center;
    padding-top: 30px;
    color:white;
    font-family: "ROM Wide Bold",sans-serif;

}
#actual{
    font-weight: 100;
}
#up{
    float:right;
    height:100px;
    width: 150px;
    transform: translateY(-80%);
    background-color: #000000;
    border-radius: none;
    border:none;
}
#buton{
    margin-left: 0px;
    transition: 0.8s;
}

#vid1{
    display: block;
    position: absolute;

    margin-left: 60px;
}
#vid2{
    display:none;
    position: absolute;
    margin-top: 0px;
    margin-left: 60px;
}
#vid3{
    display:none;
    position: absolute;
    margin-top: 0px;
    margin-left: 60px;
}
#vid4{
    display:none;
    position: absolute;
    margin-top: 0px;
    margin-left: 60px;
}
#vid5{
    display:none;
    position: absolute;
    margin-top: 0px;
    margin-left: 60px;
}
#vid6{
    display:none;
    position: absolute;
    margin-top: 0px;
    margin-left: 60px;
}
#vid7{
    display:none;
    position: absolute;
    margin-top: 0px;
    margin-left: 60px;
}
#vid8{
    display:none;
    position: absolute;
    margin-top: 0px;
    margin-left: 60px;
}
#vid9{
    display:none;
    position: absolute;
    margin-top: 0px;
    margin-left: 60px;
}
.overlay {
    height: 0%;
    width: 100%;
    position: fixed;
    z-index: 1;
    top: 0;
    left: 0;

    background-color: rgba(0,0,0,0.95);
    overflow-y: hidden;
    transition: 0.9s;
  }
  
  .overlay-content {
    position: relative;
    top: 25%;
    width: 100%;
    overflow-x: scroll;
    text-align: center;
    margin-top: 30px;
  }
  .overlay-content::-webkit-scrollbar {
    width: 10px;
  }
  
  /* Track */
  .overlay-content::-webkit-scrollbar-track {
    background: #f1f1f1; 
  }
   
  /* Handle */
  .overlay-content::-webkit-scrollbar-thumb {
    background: #888; 
  }
  
  /* Handle on hover */
  .overlay-content::-webkit-scrollbar-thumb:hover {
    background: #555; 
  }
  .gall{
    width:5000px;
    height:300px;
    margin-bottom: 65px;
    margin-left: 50px;
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

  .overlay a {
    padding: 8px;
    text-decoration: none;
    font-size: 36px;
    color: #818181;
    display: block;
    transition: 0.3s;
  }
  
  .overlay a:hover, .overlay a:focus {
    color: #f1f1f1;
  }
  
  .overlay .closebtn {
    position: absolute;
    top: 25px;
    transition: 0.9s;
    right: 36px;
    font-size: 60px;
  }
  
  @media screen and (max-height: 450px) {
    .overlay {overflow-y: auto;}
    .overlay a {font-size: 20px}
    .overlay .closebtn {
    font-size: 40px;
    top: 15px;
    right: 35px;
    }
  }
  #tit{
    font-size: 30px;
    color:white;
    font-family: "ROM Mono Bold",sans-serif;

    margin-top: 25px;
  }
#tit1{
    font-size: 30px;
    color:white;
    font-family: "ROM Mono Bold",sans-serif;
    margin-top: 25px;
}
#tit2{
    font-size: 30px;
    color:white;
    font-family: "ROM Mono Bold",sans-serif;

    margin-top: 25px;
}
#tit3{
    font-size: 30px;
    color:white;
    font-family: "ROM Mono Bold",sans-serif;
    margin-top: 25px;
}

  #tit4{
    font-size: 30px;
    color:white;
    font-family: "ROM Mono Bold",sans-serif;
    margin-top: 25px;
}
#tit5{
    font-size: 30px;
    color:white;
    font-family: "ROM Mono Bold",sans-serif;
    margin-top: 25px;
}
#tit6{
    font-size: 30px;
    color:white;
    font-family: "ROM Mono Bold",sans-serif;
    margin-top: 25px;
}
#tit7{
    font-size: 30px;
    color:white;
    font-family: "ROM Mono Bold",sans-serif;
    margin-top: 25px;
}
#tit8{
    font-size: 30px;
    color:white;
    font-family: "ROM Mono Bold",sans-serif;
    margin-top: 25px;
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
.overlay2 {
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
#mobi{
  display:none;
}
.overlay-content2 {
  position: relative;
  top: 25%;
  width: 100%;
  text-align: center;
  margin-top: 30px;
}

.overlay2 a {
  padding: 8px;
  text-decoration: none;
  font-size: 36px;
  font-family: "ROM Ext Black",sans-serif;
  color: #000000;
  display: block;
  transition: 0.3s;
}

.overlay2 a:hover, .overlay a:focus {
  color: #f1f1f1;
}

.overlay2 .closebtn {
  position: absolute;
  top: 20px;
  right: 45px;
  font-size: 60px;
}

/*
@media screen and (max-height: 500px) {
  .overlay2 a {font-size: 20px}
  .overlay2 .closebtn {
  font-size: 40px;
  top: 15px;
  right: 35px;
  }
}
*/
#test h1{
margin-left: 60px;
font-size: 50px;
margin-top: -20px;
font-family: "ROM Ext Black",sans-serif;

}

</style>
<body>

    <div class ="regu">
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
            <a href="index.php">

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

                                            
        <a href="video.php">  
            <svg class ="oh2" style="padding-left:-1px;" width="35" height="55"viewBox="0 0 126 92" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M75 46.0586L54 58.0586V34.0586L75 46.0586Z" fill="black" stroke="black" stroke-width="5" stroke-linecap="round" stroke-linejoin="round"/>
                <path d="M3 50.3039V41.8133C3 24.4412 3 15.7552 8.43294 10.1664C13.8659 4.57755 22.4194 4.33563 39.5261 3.85179C47.6324 3.62253 55.9128 3.45825 63 3.45825C70.0872 3.45825 78.3678 3.62253 86.4738 3.85179C103.58 4.33563 112.134 4.57755 117.567 10.1664C123 15.7552 123 24.4412 123 41.8133V50.3039C123 67.6757 123 76.3618 117.567 81.9502C112.134 87.5392 103.581 87.7811 86.4744 88.2653C78.3678 88.4945 70.0872 88.6589 63 88.6589C55.9128 88.6589 47.632 88.4945 39.5256 88.2653C22.4191 87.7811 13.8658 87.5392 8.43288 81.9502C3 76.3618 3 67.6757 3 50.3039Z" stroke="black" stroke-width="5"/>
                </svg>
                <span id = "thing4">Videos</span>            
              
    </a>  
    <a href="home.php#slideshow">  
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
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()"><img id = "buton" src = "IMG/Group 1 (3).png"></a>
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
      <div id="myNav1" class="overlay2">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNavOne()">&times;</a>
        <div class="overlay-content">
          <a href="index.php">Home</a>
          <a href="RES/Z3NITH'23 Results.pdf">Results</a>
          <a href="team.html">Our Team</a>
          <a href="video.php">Videos</a>
          <a href="index.php#slideshow">The Vault</a>        
        </div>
      </div>
    <div class="rest" id="rest">

          <div class = "head" id = "hed">

            <h2>Videos • <u><strong id = "actual" onclick="secondary()">Z3NITH’23 | Trailer</strong></u></h2>
            <button id = "up" onclick="openNav()"><img id = "buton" src = "IMG/Group 1 (2).png"></button>
          </div>


            <div id="test">


                <h1 id = "text1">Z3NITH'23 | Trailer </h1>
                <iframe id = "vid1" width="1100" height="400" src="https://www.youtube.com/embed/zMDJWq8-JdU" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>            
                <iframe id = "vid2" width="1100" height="400" src="https://www.youtube.com/embed/zZk0F9yvb4A" title="Z3NITH&#39;23 | Teaser #shorts" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                <iframe id = "vid3" width="1100" height="400" src="https://www.youtube.com/embed/VROaUIA-ACs" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                <iframe id = "vid4" width="1100" height="400" src="https://www.youtube.com/embed/5Vc6nkNHsyA" title="ZENITH&#39;22 TEASER | #shorts" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                <iframe id = "vid5" width="1100" height="400" src="https://www.youtube.com/embed/7M50LH8Gw8c" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                <iframe id = "vid6" width="1100" height="400" src="https://www.youtube.com/embed/rXvGnig0VQU?controls=0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>            
                <iframe id = "vid7" width="1100" height="400" src="https://www.youtube.com/embed/95kbdhlDFdE" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>            
                <iframe id = "vid8" width="1100" height="400" src="https://www.youtube.com/embed/JjguhXUWHds" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>            
                <iframe id = "vid9" width="1100" height="400" src="https://www.youtube.com/embed/V608MMmU0Tk" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>            
   
                
              </div>
    </div>
    </div>

<script>
    // When the user scrolls down 50px from the top of the document, resize the header's font size
    window.onscroll = function() {scrollFunction()};

    function scrollFunction() {
        if (document.body.scrollTop < 500 || document.documentElement.scrollTop < 500 && document.body.scrollTop < 500 || document.documentElement.scrollTop < 500)
      {
        document.getElementById("navi").style.background = "#ffffff";
        document.getElementById("back").style.opacity="0.4";
        document.getElementById("back").style.transition="0.9s";


      }
      if (document.body.scrollTop > 600 || document.documentElement.scrollTop > 600 && document.body.scrollTop > 600 || document.documentElement.scrollTop > 600)
      {
        document.getElementById("navi").style.background = "#fbe9e9";
        document.getElementById("back").style.opacity="0.4";
        document.getElementById("back").style.transition="0.9s";
        document.getElementById("one").style.color="black";        
      }
      if (document.body.scrollTop > 700 || document.documentElement.scrollTop > 700 && document.body.scrollTop > 700 || document.documentElement.scrollTop > 700)
      {
        document.getElementById("navi").style.background = "#f9dede";
        document.getElementById("back").style.opacity="0.5";
        document.getElementById("back").style.transition="0.9s";
     
      }
      if (document.body.scrollTop > 800 || document.documentElement.scrollTop > 800 && document.body.scrollTop > 800 || document.documentElement.scrollTop > 800)
      {
        document.getElementById("navi").style.background = "#f7d4d3";
        document.getElementById("back").style.opacity="0.6";
        document.getElementById("back").style.transition="0.9s";
          
      }
      if (document.body.scrollTop > 900 || document.documentElement.scrollTop > 900 && document.body.scrollTop > 900 || document.documentElement.scrollTop > 900)
      {
        document.getElementById("navi").style.background = "#f4c9c8";
        document.getElementById("back").style.opacity="0.7";
        document.getElementById("back").style.transition="0.9s";


      }
      if (document.body.scrollTop > 1000 || document.documentElement.scrollTop > 1000 && document.body.scrollTop > 1000 || document.documentElement.scrollTop > 1000)
      {
        document.getElementById("navi").style.background = "#f1bebd";
        document.getElementById("back").style.opacity="0.8";
        document.getElementById("back").style.transition="0.9s";

      }
      if (document.body.scrollTop > 1100 || document.documentElement.scrollTop > 1100 && document.body.scrollTop > 1100 || document.documentElement.scrollTop > 1100)
      {
        document.getElementById("navi").style.background = "#f1bebd";
        document.getElementById("back").style.opacity="0.9";
        document.getElementById("back").style.transition="0.9s";

      }

    }
    </script>
    <script>
    function myFunction() {

     document.getElementById("navi").style.width="25%";
     document.getElementById("navi").style.transition="0.8s";
     document.getElementById("rest").style.width="75%";
     document.getElementById("rest").style.transition="0.8s";

 
     document.getElementById("oh").style.display="none";

     document.getElementById("close").style.display="block";
     document.getElementById("close").style.marginBottom="200px";
     document.getElementById("test").style.width="180%";
     document.getElementById("toge").style.marginTop="100px";
     document.getElementById("toge").style.marginLeft="80px"; 
     document.getElementById("fc").style.marginTop="65px"; 
     document.getElementById("thing").style.animation="5s showi forwards";   
     document.getElementById("thing2").style.animation="5s showi forwards";  
     document.getElementById("thing3").style.animation="5s showi forwards";       
     document.getElementById("thing4").style.animation="5s showi forwards";    
     document.getElementById("thing5").style.animation="5s showi forwards"; 
   
     document.getElementById("thing").style.display="inline-block";   
     document.getElementById("thing2").style.display="inline-block";  
     document.getElementById("thing3").style.display="inline-block";       
     document.getElementById("thing4").style.display="inline-block";    
     document.getElementById("thing5").style.display="inline-block";    
     document.getElementById("para").style.backgroundSize="1000px 500px";
     document.getElementById("para").style.transition="0.8s";
    }
    function myFunction2() {


     document.getElementById("navi").style.width="6%";
     document.getElementById("navi").style.transition="0.8s";
     document.getElementById("rest").style.width="94%";

     document.getElementById("rest").style.transition="0.8s";

     document.getElementById("close").style.display="none";
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
     document.getElementById("para").style.backgroundSize="2000px 800px";
     document.getElementById("para").style.transition="0.8s";
     document.getElementById("fc").style.marginTop="110px"; 

    }
    function test(){
        document.getElementById("buton").style.marginLeft="0px";
        document.getElementById("buton").style.transition="0px";        
    }
    
    </script>
    </script>
    <script>

        if (screen.width<500){
            window.location.replace('video_phone.php');
        }

        function openNav() {
          document.getElementById("myNav").style.height = "100%";

        }
        
        function closeNav() {
          document.getElementById("myNav").style.height = "0%";
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
        }
        </script>
            <script>
              function openNavOne() {
                document.getElementById("myNav1").style.width = "100%";
              }
              
              function closeNavOne() {
                document.getElementById("myNav1").style.width = "0%";
              }
              function secondary(){
                  document.getElementById("myNav").style.height = "100%";
              }
              </script>
</body>
</html>