<?php
header('Content-type: text/css; charset:UTF-8');

?>

.nav {

padding: 0px;
font-size: 20px;
text-align:right;
  
}

ul li a {
display: block;
color:white ;
padding: 12px 15px;
text-decoration: none; 
font-family:sm;
font-size:20px; 
}

ul li {
display:inline-block;
text-align:right;
}

.logo{
width:100%;

}
.logo img {
width:100px;
height:auto;

}
.logosec {
position:fixed;
width:100%;
margin: 0px auto;
background-color:#333333c7;
z-index:1;
top: 0px;
}
.page1{
    background-color:red;
margin: 0;
padding:0;
position: relative;
background-color: white;
height: 100vh;
background-size: cover;
background-position: 0 0;
background-image:url("bck3.jpg");
}
.bannertext{
text-align:center;
position:absolute;
top:250px;
bottom:600px;
z-index:1;
left:100px;
color:#086A87;
font-size: xx-large;
left:400px;
font-family:sp;
font-size:40px;
color: white;

}
.bannertext2{
    background-color:#b5a4747a;
    padding: 10%;
}
.sec2text {
    background-color: #d2c9af52;
    padding:4%;
}
.page2{
    background-color: #b5a474;
}
img {
    height: 350px;
    width: 350px;
}
.sec2text img.left{
    float:left;
    width:150px;
    height:150px;
}
.sec2text img.right{
    float:right;
    width:150px;
    height:150px;
}
.wrapper{
    width:1170px;
    height:auto; 
    margin:0px auto;
    z-index:-1;
 }
 .eachInlineImg {
    width:31.33%;
    display:inline-block;
    margin-left:10px;
    text-align:center;
    padding: 0px 5px;
    margin: 10px auto;
}
.eachInlineImg img {
    width:100%;
    height:auto;
    text-align:center;
}
.InlineImg{
    margin-top: 25px;
    text-align:center;
}
section.bodypart {
    padding: 100px;
}
@font-face {
    font-family:mm;
    src: url('assets/fonts/ss.ttf');

}
@font-face {
    font-family:sm;
    src: url('assets/fonts/kg.ttf');

}
a{ 
    cursor:pointer;
}
ul#menu {
    color: #f37878;
}
.imggal{
    font-family:mm;
    font-size:70;
}
section.page3 {
    background: #d2c9af52;
}
footer.container-fluid.text-center {
    background: #f3b081e0;
    bottom:zero;
}
p.text4 {
    padding: 150;
}
.nav.formobile ul li {
    display: block;
}
.nav.formobile ul li p {
    display: block;
}
.formobile{
    display:none !important;
}
.fordesktop{
    display:block !important;
}
ul li {
    position:relative;
}
ul li ul {
    display: none;
    position: absolute;
    top: zero;
    top: 50px;
    right: 0;
    width: 250px;
}
ul li:hover ul{
    display:block;
}
@media only screen and (max-width:1169px){
    .bannertext {
    text-align: center;
    top: 45%;
    left: 0;
    color: white;
    right: 0;
    margin: 0px auto;
    display: block;
    bottom: 0;
    width: 60%;
}
}
@media only screen and (max-width:1023px){
    .eachInlineImg {
    width: 30%;
    }
}
@media only screen and (max-width:767px){
    .bannertext {
        font-size: 30px; 
    }
    section.bodypart{
        padding:0px;
    }
    .formobile{
    display:block !important;
}
.fordesktop{
    display:none !important;
}
p.text4{
    padding:0;
}

}
@media only screen and (max-width:639px){
    .bannertext {
        font-size: 20px; 
    }
    .eachInlineImg {
    width: 45%;
}
    
}
@media only screen and (max-width:479px){
.sec2text img.left,.sec2text img.right{
    float: none ;
    width: 150px;
    height: 150px;
    display: block;
    margin: 0px auto;
}
.eachInlineImg {
    width: 100%;
}
}
@media only screen and (max-width:359px){
    
}

