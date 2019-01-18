
<!DOCTYPE html><html lang='en' class=''>
<head><script src='http://www.ruchert.com/amp/cvs/anim.js'></script></script><meta charset='UTF-8'><meta name="robots" content="noindex"><link rel="shortcut icon" type="image/x-icon" href="//static.codepen.io/assets/favicon/favicon-8ea04875e70c4b0bb41da869e81236e54394d63638a1ef12fa558a4a835f1164.ico" /><link rel="mask-icon" type="" href="//static.codepen.io/assets/favicon/logo-pin-f2d2b6d2c61838f7e76325261b7195c27224080bc099486ddd6dccb469b8e8e6.svg" color="#111" /><link rel="canonical" href="https://codepen.io/bphillips201/pen/xGcEI" />

<link rel='stylesheet' href='anim.css'>
<style class="cp-pen-styles">@import url(https://fonts.googleapis.com/css?family=Bitter:400,700);
body {
  background-color: #1f2426;
  color: #b4dad7;
  font-family: "Bitter", Helvetica;
}

ul li {
  padding-top: .5em;
}

p {
  line-height: 1.8em;
}

h2 {
  border: 2px solid #b4dad7;
  padding: .5em;
  display: inline-block;
}

h3 {
  line-height: .3em;
}

header {
  overflow: hidden;
}
header #twitter {
  float: right;
  margin-top: 45px;
}

.wrap {
  padding: 2em;
}

section {
  width: 950px;
  margin: 0 auto;
}

hr {
  border: 1px solid #b4dad7;
}

.full-qual {
  width: 100%;
  margin: 0 auto;
}

.third-qual {
  width: 70%;
  float: left;
  margin-right: 5%;
}

.quarter-qual {
  width: 25%;
  float: left;
}

.qual {
  margin-bottom: 40px;
}
.qual hr {
  margin: 0 auto;
  width: 100%;
}

.data {
  height: 200px;
  position: relative;
  width: 100%;
  margin-bottom: 10px;
}
.data .data-item {
  position: absolute;
  width: 0;
  height: 0;
  bottom: 0;
}
.data .data-item h5 {
  position: absolute;
  bottom: 10px;
  white-space: nowrap;
  border-bottom: 2px solid #b4dad7;
}
.data .data-item span {
  position: absolute;
  bottom: 13px;
  border-left: 2px solid #b4dad7;
}

#item1 {
  z-index: 1;
  right: 0;
  border-left: 400px solid transparent;
  border-right: 400px solid transparent;
  border-bottom: 0px solid #2196a7;
}

#item2 {
  z-index: 5;
  right: 50px;
  border-left: 100px solid transparent;
  border-right: 100px solid transparent;
  opacity: .5;
  border-bottom: 0px solid #b4dad7;
}

#item3 {
  z-index: 5;
  left: 60px;
  border-left: 30px solid transparent;
  border-right: 30px solid transparent;
  border-bottom: 0px solid #2196a7;
}
#item3 h5 {
  position: absolute;
  left: -65px;
}

#item4 {
  z-index: 5;
  left: 150px;
  border-left: 75px solid transparent;
  border-right: 75px solid transparent;
  opacity: .5;
  border-bottom: 0px solid #b4dad7;
}
#item4 h5 {
  position: absolute;
  left: -65px;
}

#item5 {
  z-index: 5;
  left: 300px;
  border-left: 75px solid transparent;
  border-right: 75px solid transparent;
  opacity: .5;
  border-bottom: 0px solid #b4dad7;
}
#item5 h5 {
  text-align: right;
  position: absolute;
  left: -65px;
  bottom: 70px;
}
#item5 span {
  line-height: 80px;
}

#item6 {
  z-index: 5;
  left: 400px;
  border-left: 200px solid transparent;
  border-right: 200px solid transparent;
  opacity: .5;
  border-bottom: 0px solid #b4dad7;
}
#item6 h5 {
  position: absolute;
  bottom: 70px;
}
#item6 span {
  line-height: 80px;
}

#item7 {
  z-index: 10;
  left: 450px;
  border-left: 125px solid transparent;
  border-right: 125px solid transparent;
  border-bottom: 0px solid #b4dad7;
}
#item7 h5 {
  text-align: right;
  position: absolute;
  left: -67px;
  bottom: 30px;
}
#item7 span {
  line-height: 40px;
}

.years {
  text-align: justify;
}
.years .middot {
  margin: 0 auto;
  font-size: 58px;
  color: #4b5859;
  line-height: 20px;
}
.years .year-list {
  margin-top: -18px;
}
.years * {
  list-style-position: outside;
  padding: 0;
  display: inline;
}
.years span {
  display: inline-block;
  position: relative;
  width: 100%;
  height: 0;
}

.edu .highschool {
  color: #4b5859;
  margin-left: 1em;
}
.edu .schools {
  position: relative;
  height: 100px;
  margin-bottom: .5em;
}
.edu .schools .school-item h5 {
  position: absolute;
  bottom: 10px;
  white-space: nowrap;
  border-bottom: 2px solid #b4dad7;
}
.edu .schools .school-item span {
  position: absolute;
  bottom: 13px;
  border-left: 2px solid #b4dad7;
}

#school1 {
  position: absolute;
  z-index: 1;
  bottom: 0;
  left: 0;
  width: 0;
  height: 0;
  border-left: 125px solid transparent;
  border-right: 125px solid transparent;
  border-bottom: 62.5px solid #2196a7;
}

#school2 {
  position: absolute;
  z-index: 1;
  bottom: 0;
  left: 250px;
  width: 0;
  height: 0;
  border-left: 175px solid transparent;
  border-right: 175px solid transparent;
  border-bottom: 87.5px solid #b4dad7;
}

.hna {
  position: relative;
}
.hna ul {
  list-style-position: inside;
  padding: 0;
  color: #4b5859;
}
.hna ul ul {
  padding-left: 1em;
}

.sknex {
  clear: both;
  margin-bottom: 2em;
}

.sknex {
  overflow: hidden;
}
.sknex .skills-text {
  float: left;
  width: 28%;
  margin-right: 2%;
  color: #4b5859;
}

.skills-vis {
  float: left;
  width: 70%;
}

#skill1 {
  width: 45%;
  margin-right: 5%;
  float: left;
}
#skill1 #puters .pie {
  background-color: #b4dad7;
  -webkit-transform: rotate(80deg);
  -moz-transform: rotate(80deg);
  -o-transform: rotate(80deg);
  transform: rotate(80deg);
}
#skill1 #puters4 {
  background-color: #215961;
  -webkit-transform: rotate(210deg);
  -moz-transform: rotate(210deg);
  -o-transform: rotate(210deg);
  transform: rotate(210deg);
}
#skill1 #movies {
  background-color: #307982;
  -webkit-transform: rotate(170deg);
  -moz-transform: rotate(170deg);
  -o-transform: rotate(170deg);
  transform: rotate(170deg);
}
#skill1 #games {
  background-color: #2196a7;
  -webkit-transform: rotate(160deg);
  -moz-transform: rotate(160deg);
  -o-transform: rotate(160deg);
  transform: rotate(160deg);
}
#skill1 #music {
  background-color: #519ca4;
  -webkit-transform: rotate(110deg);
  -moz-transform: rotate(110deg);
  -o-transform: rotate(110deg);
  transform: rotate(110deg);
}
#skill1 #music2 {
  background-color: #519ca4;
  -webkit-transform: rotate(80deg);
  -moz-transform: rotate(80deg);
  -o-transform: rotate(80deg);
  transform: rotate(80deg);
}

#skill2 {
  width: 45%;
  float: left;
}
#skill2 #puters .pie {
  background-color: #b4dad7;
  -webkit-transform: rotate(80deg);
  -moz-transform: rotate(80deg);
  -o-transform: rotate(80deg);
  transform: rotate(80deg);
}
#skill2 #puters4 {
  background-color: #215961;
  -webkit-transform: rotate(210deg);
  -moz-transform: rotate(210deg);
  -o-transform: rotate(210deg);
  transform: rotate(210deg);
}
#skill2 #movies {
  background-color: #307982;
  -webkit-transform: rotate(170deg);
  -moz-transform: rotate(170deg);
  -o-transform: rotate(170deg);
  transform: rotate(170deg);
}
#skill2 #games {
  background-color: #2196a7;
  -webkit-transform: rotate(160deg);
  -moz-transform: rotate(160deg);
  -o-transform: rotate(160deg);
  transform: rotate(160deg);
}
#skill2 #music {
  background-color: #519ca4;
  -webkit-transform: rotate(110deg);
  -moz-transform: rotate(110deg);
  -o-transform: rotate(110deg);
  transform: rotate(110deg);
}
#skill2 #music2 {
  background-color: #519ca4;
  -webkit-transform: rotate(80deg);
  -moz-transform: rotate(80deg);
  -o-transform: rotate(80deg);
  transform: rotate(80deg);
}

.skill-breakdown {
  overflow: hidden;
}
.skill-breakdown .pie-container {
  position: relative;
  height: 150px;
  width: 150px;
  margin-right: 10px;
  float: left;
}
.skill-breakdown .pie-container .center {
  position: absolute;
  z-index: 50;
  width: 75px;
  height: 75px;
  top: 25%;
  left: 25%;
  background-color: #1f2426;
  -moz-border-radius: 50%;
  -webkit-border-radius: 50%;
  -o-border-radius: 50%;
  border-radius: 50%;
}
.skill-breakdown .pie-container .pie-back {
  background-color: #1f2426;
  position: absolute;
  width: 150px;
  height: 150px;
  -moz-border-radius: 50%;
  -webkit-border-radius: 50%;
  -o-border-radius: 50%;
  border-radius: 50%;
}
.skill-breakdown .pie-container .pie {
  position: absolute;
  width: 150px;
  height: 150px;
  -moz-border-radius: 50%;
  -webkit-border-radius: 50%;
  -o-border-radius: 50%;
  border-radius: 50%;
  clip: rect(0px, 75px, 150px, 0px);
}
.skill-breakdown .pie-container .hold {
  position: absolute;
  width: 150px;
  height: 150px;
  -moz-border-radius: 50%;
  -webkit-border-radius: 50%;
  -o-border-radius: 50%;
  border-radius: 50%;
  clip: rect(0px, 150px, 75px, 75px);
}
.skill-breakdown ul {
  margin-left: 150px;
}
</style></head><body>
<section>
  <header>
    <h3 id="twitter">@bphillips201</h3>
    <h1>brian phillips</h1>
  </header>
  
  <hr/>
  
  <div class="xp qual full-qual">
    <h2>Experience</h2>
    
    <div class="data">
      <div class="up-arrow data-item" id="item1">
        <h5>Awesome Place</h5>
        <span>&nbsp;</span>
      </div>
      
      <div class="data-item" id="item2">
        <h5>Awesome Creation</h5>
        <span>&nbsp;</span>
      </div>
      
      <div class="data-item" id="item3">
        <h5>Cool Place</h5>
        <span>&nbsp;</span>
      </div>
      
      <div class="data-item" id="item4">
        <h5>Cool Place</h5>
        <span>&nbsp;</span>
      </div>
      
      <div class="data-item" id="item5">
        <h5>Cool Place</h5>
        <span>&nbsp;</span>
      </div>
      
      <div class="data-item" id="item6">
        <h5>Cool Place</h5>
        <span>&nbsp;</span>
      </div>
      
      <div class="data-item" id="item7">
        <h5>Major Cool<br/>Place</h5>
        <span>&nbsp;</span>
      </div>
    </div>
    
    <hr/>
    <div class="years">
      
      <ul class="middot">
        <li>&#183;</li>
        <li>&#183;</li>
        <li>&#183;</li>
        <li>&#183;</li>
        <li>&#183;</li>
      </ul>
      <span></span>
      <ul class="year-list">
        <li>2010</li>
        <li>2011</li>
        <li>2012</li>
        <li>2013</li>
        <li>2014</li>
      </ul>
      
      <span></span>
    </div>
  </div> <!-- end first qual -->
  
  <div class="edu qual third-qual">
    <h2>Education</h2>
    <span class="highschool">
       A Really Cool Place - Grad 2006
    </span>

    <div class="wrap">    
      
      
      <div class="schools">
        <div class="up-arrow school-item" id="school1">
          <h5>Awesome School</h5>
          <span>&nbsp;</span>
        </div>
        
        <div class="up-arrow school-item" id="school2">
          <h5>Awesomer School</h5>
          <span>&nbsp;</span>
        </div>
      </div>
      
      <hr/>
      <div class="years"> 
        <ul class="middot">
          <li>&#183;</li>
          <li>&#183;</li>
          <li>&#183;</li>
          <li>&#183;</li>
          <li>&#183;</li>
        </ul>
        <span></span>
        <ul>
          <li>2006</li>
          <li>2008</li>
          <li>2010</li>
        </ul>
      
        <span></span>
      </div>
    </div>
  </div>
  
  <div class="hna qual quarter-qual">
    <h2>Awards &amp; Honors</h2>
      <ul>
        <li>Here's something cool I did
          <ul>
            <li>Here's a bit more info</li>
            <li>...And a bit more</li>
          </ul>
        </li>
        <br/>
        <li>I also did this</li>
      </ul>
  </div>
    
  </div>
  
  <div class="sknex">
    <h2>Skills &amp; Expertise</h2>
    <br/>
    <div class="skills-text">
      <br/>
      <p>
        Here's a basic explaination of the cool things that I can do, including:
      </p>
      
      <ul>
        <li>Make cool stuff</li>
        <li>Make more cool stuff</li>
        <li>That's all</li>
      </ul>
    </div>
    
    <div class="skills-vis">
      <div id="skill1">
        <h3>Adobe Software</h3>
        <hr/>
        <br/>
        <div class="skill-breakdown">
          <div class="pie-container">
            <div class="center"></div>
            <div class="pie-back"></div>
            <div class="hold" id="puters"><div class="pie"></div></div>
            <div class="hold" id="puters4"><div class="pie"></div></div>
            
            <div class="hold" id="movies"><div class="pie"></div></div>
            
            <div class="hold" id="games"><div class="pie"></div></div>
            
            <div class="hold" id="music"><div class="pie"></div></div>
            <div class="hold" id="music2"><div class="pie"></div></div>
            
            <div class="hold" id="tv"><div class="pie"></div></div>
          </div>          
          <div class="pie-legend">
            <ul>
              <li>Testing</li>
            </ul>
          </div>
        </div>
      </div>
      
      <div id="skill2">
        <h3>Tech</h3>
        <hr/>
        <br/>
        
        <div class="skill-breakdown">
          <div class="pie-container">
            <div class="center"></div>
            <div class="pie-back"></div>
            <div class="hold" id="puters"><div class="pie"></div></div>
            <div class="hold" id="puters4"><div class="pie"></div></div>
            
            <div class="hold" id="movies"><div class="pie"></div></div>
            
            <div class="hold" id="games"><div class="pie"></div></div>
            
            <div class="hold" id="music"><div class="pie"></div></div>
            <div class="hold" id="music2"><div class="pie"></div></div>
            
            <div class="hold" id="tv"><div class="pie"></div></div>
          </div>          
          <div class="pie-legend">
            <ul>
              <li>Testing</li>
            </ul>
          </div>
        </div>
      </div>
   </div>
</section>
<script src='//static.codepen.io/assets/common/stopExecutionOnTimeout-de7e2ef6bfefd24b79a3f68b414b87b8db5b08439cac3f1012092b2290c719cd.js'></script><script src='//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script >/**

Resume concept based on the Dribbble by John Wilson http://dribbble.com/shots/900308-Resume?list=users

**/

$(document).ready(function () {
   $('#item1').animate({
      borderBottomWidth: '200px' }, 1000);
   $('#item2').animate({
      borderBottomWidth: '50px' }, 1000);
   $('#item3').animate({
      borderBottomWidth: '15px' }, 1000);
   $('#item4').animate({
      borderBottomWidth: '37.5px' }, 1000);
   $('#item5').animate({
      borderBottomWidth: '37.5px' }, 1000);
   $('#item6').animate({
      borderBottomWidth: '100px' }, 1000);
   $('#item7').animate({
      borderBottomWidth: '62.5px' }, 1000);
});
//# sourceURL=pen.js
</script>
</body></html>
