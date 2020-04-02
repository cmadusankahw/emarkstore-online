<!DOCTYPE html>
<html>
 <head>
 <meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <title>Grocery Shopping- Order Products</title>
 <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.8.0/css/bulma.min.css">
 <script defer src="https://use.fontawesome.com/releases/v5.3.1/js/all.js"></script>
 
 <style>
 .item:hover{
 background-color: black;
 color: rgb(14, 12, 12);
 }
 .btn{
 color:hsl(0, 0%, 86%);
 background-color: hsl(0, 0%, 21%);
 border-radius: 3px;
 }
 </style>


 </head>
 <body>
 <!-- Navigation Bar begins -->
 
 <nav class="navbar" role="navigation" aria-label="main navigation"style="background-color: hsl(0, 0%, 29%);color:white; " aria-label="main navigation;">
 <div class="navbar-brand" style="height:;margin-top:0.0%;margin-left:0.5%">
 <a class="" href="#" style="" >
 <img src="https://i.ibb.co/Gksqc2K/gamu.png" width="92" height="130">
 </a>
 
 <a role="button" class="navbar-burger burger" aria-label="menu" aria-expanded="false" data-target="navbarBasicExample">
 <span aria-hidden="true"></span>
 <span aria-hidden="true"></span>
 <span aria-hidden="true"></span>
 </a>
 </div>
 
 <div id="navbarBasicExample" class="navbar-menu" >
 <!-- <div class="navbar-start">
 <a class="navbar-item item:hover btn" style="color: azure; ">
 Home
 </a>
 
 <a class="navbar-item item :hover btn" style="color: azure;">
 Documentation
 </a>
 
 <div class="navbar-item has-dropdown is-hoverable">
 <a class="navbar-link .item :hover btn" style="color: azure;">
 More
 </a>
 
 <div class="navbar-dropdown" style="background-color: hsl(0, 0%, 29%);">
 <a class="navbar-item .item:hover btn" style="color: azure;">
 About
 </a>
 <a class="navbar-item .item :hover" style="color: azure;">
 Jobs
 </a>
 <a class="navbar-item" style="color: azure;">
 Contact
 </a>
 <hr class="navbar-divider" style="color: azure;">
 <a class="navbar-item" style="color: aliceblue;">
 Report an issue
 </a>
 </div>
 </div>
 </div> -->
 
 <div class="navbar-end">
 <div class="navbar-item">
 
 <div class="buttons">
 
 <a class="button is-primary">
 <strong>View Order</strong>
 </a>
 <a class="button is-light">
 Register
 </a>
 </div>
 </div>
 </div>
 </div>
 </nav>
 
 <!-- Nav Bar ends -->
 
 <section class="section">
 <div class="container">

 <!-- Form Starts -->
 <article class="tile is-child notification is-primary">
          <p class="title">Sasel Stores Balapitiya </p>
          <p class="subtitle">Contact : 0777745605</p>
        </article>
 <div class="form">
 <div class="box">
 <div class="field">
 <label class="label">නම</label>
 <div class="control">
 <input class="input" type="text" placeholder="Kasun widiana" id="name">
 </div>
 </div>
 <div class="field">
 <label class="label" >නගරය/ගම</label>
 <div class="control">
 <input class="input" type="text" id="village" name="village" placeholder="Balapitiya">
 </div>
 </div>
 <div class="field">
 <label class="label">ජංගම දුරකතන අංකය</label>
 <div class="control">
 <input id="txtPhoneNo" class="input" type="text" placeholder="78687123">
 </div>
 </div>
 <div class="field" >
 <label class="label">Shop Name</label>
 <div class="control" >
 <div class="select" style="width: 200%;" >
 <select style="width: 200%;" id="shop">
 <option>සැසෙල් ස්ටෝර්ස් බලපිටිය</option>
 

 </select>
 </div>
 </div><br>
 

 </div>
 

 
 
 <table style="width: 100%;" id="frm">
 <tbody>
 <td>
 <div class="field" >
 <label class="label" >සහල් වර්ග</label>
 <div class="control" >
 <div class="select" style="width: 100%;" >
 <select style="width: 100%;"id="item1">
 <option value="Not Selected"> ---- තෝරාගන්න ----</option>
 <option value="සුදු සහල්">සුදු සහල්</option>
 <option value="රතු සහල්">රතු සහල් </option>
 <option value="පොලිශ් සහල්">පොලිශ් සහල්</option>
 <option value="කැකුලු සහල්">කැකුලු සහල්</option>
 </select>
 </div>
 </div>
 </div>
 
 </td>
 <td>
 <div class="field" style="margin-left:10px" >
 <label class="label">ප්‍රමාණය</label>

 <div class="control" >
 <div class="select" style="width: 100%;">
 <select style="width: 100%;" id="qt1" >
 <option value="0">Kg/Ltr/pack</option>
 <option value="1/4">1/4</option>
 <option value="1/2">1/2</option>
 
 <option value="1">1</option>
 <option value="2">2</option>
 <option va;ue="3">3</option>
 <option value="4">4</option>
 <option value="5">5</option>
 
 </select>
 </div>
 </div>
 </div>
 </td>
 </tbody>
 </table><br>

 <table style="width: 100%;" id="frm">
 <tbody>
 <td>
 <div class="field" >
 <label class="label" >ධාන්‍ය වර්ග</label>
 <div class="control" >
 <div class="select" style="width: 100%; " >
 <select  style="width: 100%;" id="item2">
 <option value="Not Selected">---- තෝරාගන්න ----</option>
 <option valu="කඩල">කඩල</option>
 <option value="මුංඇට">මුංඇට </option>
  <option value="කවුපි">කවුපි </option>
   <option value="පරිප්පු">පරිප්පු </option>
 </select>
 </div>
 </div>
 </div>
 
 </td>
 <td>
 <div class="field" style="margin-left:10px">
 <label class="label">ප්‍රමාණය</label>
 <div class="control" >
 <div class="select" style="width:100%; ;" >
 <select  style="width: 100%;" id="qt2" >
 <option value="0">Kg/Ltr/pack</option>
 <option value="1/4">1/4</option>
 <option value="1/2">1/2</option>
 
 <option value="1">1</option>
 <option value="2">2</option>
 <option va;ue="3">3</option>
 <option value="4">4</option>
 <option value="5">5</option>
 
 </div>
 </div>
 </div>
 </td>
 </tbody>
 </table><br>

 
 <table style="width: 100%;" id="frm">
 <tbody>
 <td>
 <div class="field" >
 <label class="label" >අත්‍යාවශ්‍ය භාණ්ඩ</label>
 <div class="control" >
 <div class="select" style="width: 100%;" >
 <select style="width: 100%;" id="item7">
 <option value="Not Selected"> ---- තෝරාගන්න ----</option>
 <option value="සීනි">සීනි</option>
 <option value="තේ කොල">තේ කොල </option>
 <option value="කෝපි<">කෝපි</option>
 <option value="රට ලූණු">රට ලූණු</option>
 <option value="රතු ලූණු">රතු ලූණු</option>
 </select>
 </div>
 </div>
 </div>
 
 </td>
 <td>
 <div class="field" style="margin-left:10px" >
 <label class="label">ප්‍රමාණය</label>
 <div class="control" >
 <div class="select" style="width: 100%;" >
 <select style="width: 100%;" id="qt7" >
<option value="0">Kg/Ltr/pack</option>
 
 <option value="1/4">1/4</option>
 <option value="1/2">1/2</option>
 
 <option value="1">1</option>
 <option value="2">2</option>
 <option va;ue="3">3</option>
 <option value="4">4</option>
 <option value="5">5</option>
 
 </select>
 </div>
 </div>
 </div>
 </td>
 </tbody>
 </table><br>

 <table style="width: 100%;" id="frm">
 <tbody>
 <td>
 <div class="field" >
 <label class="label" >ක්ෂණික ආහාර</label>
 <div class="control" >
 <div class="select" style="width: 100%;" >
 <select style="width: 100%;" id="item5">
 <option value="Not Selected"> ---- තෝරාගන්න ----</option>
 <option value="මැගී නූඩ්ල්ස්">මැගී නූඩ්ල්ස්</option>
 <option value="කොත්තු මී නූඩ්ල්ස්">කොත්තු මී නූඩ්ල්ස් </option>
  <option value="කිරන නූඩ්ල්ස්">කිරන නූඩ්ල්ස්</option>
 <option value=" නූඩ්ල්ස් ලොකු"> නූඩ්ල්ස් ලොකු </option>
 </select>
 </div>
 </div>
 </div>
 
 </td>
 <td>
 <div class="field" style="margin-left:10px" >
 <label class="label">ප්‍රමාණය</label>
 <div class="control" >
 <div class="select" style="width: 100%;" >
 <select style="width: 100%;" id="qt5" >
<option value="0">Kg/Ltr/pack</option>
 <option value="1/4">1/4</option>
 <option value="1/2">1/2</option>
 
 <option value="1">1</option>
 <option value="2">2</option>
 <option va;ue="3">3</option>
 <option value="4">4</option>
 <option value="5">5</option>
 
 </select>
 </div>
 </div>
 </div>
 </td>
 </tbody>
 </table><br>

 <table style="width: 100%;" id="frm">
 <tbody>
 <td>
 <div class="field" >
 <label class="label" >ටින් කරන ලද ආහාර</label>
 <div class="control" >
 <div class="select" style="width: 100%;" >
 <select style="width: 100%;" id="item6">
 <option value="Not Selected"> ---- තෝරාගන්න ----</option>
 <option value="සැමන් පොඩි">සැමන් පොඩි</option>
 <option value="සැමන් ලොකු">සැමන් ලොකු </option>
 <option value="ජැම්">ජැම්</option>
 </select>
 </div>
 </div>
 </div>
 
 </td>
 <td>
 <div class="field" style="margin-left:10px" >
 <label class="label">ප්‍රමාණය</label>
 <div class="control" >
 <div class="select" style="width: 100%;" >
 <select style="width: 100%;" id="qt6" >
<option value="0">Kg/Ltr/pack</option>
 <option value="1/4">1/4</option>
 <option value="1/2">1/2</option>
 
 <option value="1">1</option>
 <option value="2">2</option>
 <option va;ue="3">3</option>
 <option value="4">4</option>
 <option value="5">5</option>
 
 </select>
 </div>
 </div>
 </div>
 </td>
 </tbody>
 </table><br>


 <table style="width: 100%;" id="frm">
 <tbody>
 <td>
 <div class="field">
 <label class="label" >කිරි පිටි වර්ග</label>
 <div class="control" >
 <div class="select" style="width: 100%;" >
 <select style="width: 100%;" id="item3">
 <option value="Not Selected">---- තෝරාගන්න ----</option>
 <option value="නෙස්ප්‍රේ">නෙස්ප්‍රේ</option>
 <option value="නෙස්ටමෝල්ට්">නෙස්ටමෝල්ට් </option>
  <option value="මයිලෝ">මයිලෝ</option>
   <option value="රත්ති">රත්ති</option>
  
 </select>
 </div>
 </div>
 </div>
 
 </td>
 <td>
 <div class="field" style="margin-left:10px"> 
 <label class="label">ප්‍රමාණය</label>
 <div class="control" >
 <div class="select" style="width: 100%;" >
 <select style="width: 100%;" id="qt3" >
<option value="0">Kg/Ltr/pack</option>
 
 <option value="1/4">1/4</option>
 <option value="1/2">1/2</option>
 
 <option value="1">1</option>
 <option value="2">2</option>
 <option va;ue="3">3</option>
 <option value="4">4</option>
 <option value="5">5</option>
 
 </select>
 </div>
 </div>
 </div>
 </td>
 </tbody>
 </table><br>

 <table style="width: 100%;" id="frm">
 <tbody>
 <td>
 <div class="field" >
 <label class="label" >බීම වර්ග</label>
 <div class="control">
 <div class="select" style="width: 100%;" >
 <select style="width: 100%;" id="item4">
 <option value="Not Selected">---- තෝරාගන්න ----</option>
 <option value="ජින්ජර් බියර(පොඩි )">ජින්ජර් බියර්(පොඩි)</option>
 <option value="ජින්ජර් බියර්(ලොකු )">ජින්ජර්බියර්(ලොකු)</option>
   <option value="කොකා කෝලා( ලොකු )">කොකාකෝලා(ලොකු)</option>
     <option value="යෝගට් පානය">යෝගට් පානය</option>
 </select>
 </div>
 </div>
 </div>
 
 </td>
 <td>
 <div class="field" style="margin-left:10px" >
 <label class="label">ප්‍රමාණය</label>
 <div class="control" >
 <div class="select" style="width: 100%;" >
 <select style="width: 100%;" id="qt4" >
<option value="0">Kg/Ltr/pack</option>
 
 <option value="1/4">1/4</option>
 <option value="1/2">1/2</option>
 
 <option value="1">1</option>
 <option value="2">2</option>
 <option va;ue="3">3</option>
 <option value="4">4</option>
 <option value="5">5</option>
 
 </select>
 </div>
 </div>
 </div>
 </td>
 </tbody>
 </table><br>


 <table style="width: 100%;" id="frm">
 <tbody>
 <td>
 <div class="field" >
 <label class="label" >සනීපාරක්ෂක ද්‍රව්‍යය</label>
 <div class="control" >
 <div class="select" style="width: 100%;" >
 <select style="width: 100%;" id="item8">
 <option value="Not Selected"> ---- තෝරාගන්න ----</option>
 <option value="දත් බෙහෙත්">දත් බෙහෙත්</option>
 <option value="දත් බුරුසු">දත් බුරුසු </option>
 <option value="සබන්">සබන්</option>
 <option value="රේසර් 2">රේසර් 2</option>
 
 <option value="රේසර් 3">රේසර් 3</option>
 
 
 </select>
 </div>
 </div>
 </div>
 
 </td>
 <td>
 <div class="field" style="margin-left:10px" >
 <label class="label">ප්‍රමාණය</label>
 <div class="control" >
 <div class="select" style="width: 100%;" >
 <select style="width: 100%;" id="qt8" >
<option value="0">Kg/Ltr/pack</option>
 
 <option value="1/4">1/4</option>
 <option value="1/2">1/2</option>
 
 <option value="1">1</option>
 <option value="2">2</option>
 <option va;ue="3">3</option>
 <option value="4">4</option>
 <option value="5">5</option>
 
 </select>
 </div>
 </div>
 </div>
 </td>
 </tbody>
 </table><br>

 <table style="width: 100%;" id="frm">
 <tbody>
 <td>
 <div class="field" >
 <label class="label" >කුලු බඩු</label>
 <div class="control" >
 <div class="select" style="width: 100%;" >
 <select style="width: 100%;" id="item9">
 <option value="Not Selected"> ---- තෝරාගන්න ----</option>
 <option value="මිරිස් කුඩු">මිරිස් කුඩු</option>
<option value="කෑලි මිරිස්">කෑලි මිරිස්</option>
 <option value="ගම් මිරිස්">ගම් මිරිස් </optrion>
  <option value="තුන පහ"> තුන පහ</optrion>
 
 </select>
 </div>
 </div>
 </div>
 
 </td>
 <td>
 <div class="field" style="margin-left:10px" >
 <label class="label">ප්‍රමාණය</label>
 <div class="control" >
 <div class="select" style="width: 100%;" >
 <select style="width: 100%;" id="qt9" >
<option value="0">Kg/Ltr/pack</option>
 
 <option value="1/4">1/4</option>
 <option value="1/2">1/2</option>
 
 <option value="1">1</option>
 <option value="2">2</option>
 <option va;ue="3">3</option>
 <option value="4">4</option>
 <option value="5">5</option>
 
 </select>
 </div>
 </div>
 </div>
 </td>
 </tbody>
 </table><br>

 <table style="width: 100%;" id="frm">
 <tbody>
 <td>
 <div class="field" >
 <label class="label" >වෙනත් භාණ්ඩ
 </label>
 <div class="control" >
 <div class="text" style="width:100%;" >
 <input class="input" type="text" placeholder="book/pensil/yougut/ice-cream/samahan" id="item10">
 </div>
 </div>
 </div>
 
 </td>
 <td>
 <div class="field" style="margin-left:10px" >
 <label class="label">ප්‍රමාණය</label>
 <div class="control" >
 <div class="select" style="width: 100%;" >
 <select style="width: 100%;" id="qt10" >
 
<option value="0">Kg/Ltr/pack</option>
 <option value="1/4">1/4</option>
 <option value="1/2">1/2</option>
 
 <option value="1">1</option>
 <option value="2">2</option>
 <option va;ue="3">3</option>
 <option value="4">4</option>
 <option value="5">5</option>
 
 </select>
 </div>
 </div>
 </div>
 </td>
 </tbody>
 </table><br>
 
 <table style="width: 100%;" id="frm">
 <tbody>
 <td>
 <div class="field" >
 <label class="label" >වෙනත් භාණ්ඩ
 </label>
 <div class="control" >
 <div class="text" style="width:100%;" >
 <input class="input" type="text" placeholder="book/pensil/yougut/ice-cream/samahan" id="item11">
 </div>
 </div>
 </div>
 
 </td>
 <td>
 <div class="field" style="margin-left:10px" >
 <label class="label">ප්‍රමාණය</label>
 <div class="control" >
 <div class="select" style="width: 100%;" >
 <select style="width: 100%;" id="qt10" >
 
<option value="0">Kg/Ltr/pack</option>
 <option value="1/4">1/4</option>
 <option value="1/2">1/2</option>
 
 <option value="1">1</option>
 <option value="2">2</option>
 <option va;ue="3">3</option>
 <option value="4">4</option>
 <option value="5">5</option>
 
 </select>
 </div>
 </div>
 </div>
 </td>
 </tbody>
 </table><br>



 <!-- <div class="control">
 <button style="border-radius: 35px;" class="button is-primary is-small" onclick="createSelectFeild();">Add more Items</button>
 </div> -->
 <br>
 <div class="field is-grouped">
 <div class="control">
 <button class="button is-link" onclick="savedata()">තහවුරු කරන්න</button>
 </div>
 <div class="control">
 <button class="button is-link is-danger">ඉවත් කරන්න</button>
 </div>
 </div>
 </div>
 </div>
 
 <!-- Form Ends -->
 </div>
 </section>




 <div class="modal" id="sucessmodal">
 <div class="modal-background"></div>
 <div class="modal-content">
 your order is ok!
 </div>
 <button class="modal-close is-large" aria-label="close"></button>
</div>

<footer class="footer" style="background-color: hsl(0, 0%, 29%);color:white " >
  <div class="content has-text-centered" style="background-color: hsl(0, 0%, 29%);color:white " >
    <p>
      <strong style="color:white">Powered by  </strong> <a href="http://www.accseedd.com/"><img src="https://i.ibb.co/2PKqNnr/logo.png" width="92" height="108"></a><br>
       This system was developed considering the prevailing situation<br>in Sri Lanka in order to minimise the long waiting queues in shops and supermarkets.<br>This service is provided completely free of charge<br>
        Stay Safe And Pray for A Healthy Sri Lanka 🇱🇰❤️   
      
    </p>
  </div>
</footer>





 <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
 <script>
 

 
function savedata(){

 setTimeout(function(){
 
 var item1=$('#item1 option:selected').text();
 var qt1=$('#qt1 option:selected').text();
 var item1=item1+","+qt1;

 var item2=$('#item2 option:selected').text();
 var qt2=$('#qt2 option:selected').text();
 var item2=item2+","+qt2;

 var item3=$('#item3 option:selected').text();
 var qt3=$('#qt3 option:selected').text();
 var item3=item3+","+qt3;

 var item4=$('#item4 option:selected').text();
 var qt4=$('#qt4 option:selected').text();
 var item4=item4+","+qt4;

 var item5=$('#item5 option:selected').text();
 var qt5=$('#qt5 option:selected').text();
 var item5=item5+","+qt5;

 var item6=$('#item6 option:selected').text();
 var qt6=$('#qt6 option:selected').text();
 var item6=item6+","+qt6;

 var item7=$('#item7 option:selected').text();
 var qt7=$('#qt7 option:selected').text();
 var item7=item7+","+qt7;

 var item8=$('#item8 option:selected').text();
 var qt8=$('#qt8 option:selected').text();
 var item8=item8+","+qt8;

 var item9=$('#item9 option:selected').text();
 var qt9=$('#qt9 option:selected').text();
 var item9=item9+","+qt9;


 var item10=$('#item10').val();
 var qt10=$('#qt10 option:selected').text();
 var item10=item10+","+qt10;


var name=$('#name').val();


var mobile=$('#txtPhoneNo').val();

 
var city=$('#village').val();

var shop=$('#shop option:selected').text();



 //alert(accNo);
 var param = "event=Load&name=" + name + "&mobile=" + mobile + "&city=" + city+ "&item1=" + item1
 + "&item2=" + item2+ "&item3=" + item3+ "&item4=" + item4+ "&item5=" + item5 + "&item6=" + item6+ "&item7=" + item7
 + "&item8=" + item8+ "&item9=" + item9+ "&item10=" + item10;
 $.ajax
 (
 {
 type: "POST",
 url: "../model/makeorder.php",
 data : param,
 dataType: "text",
 success: function(xml)
 {
 // alert(xml);
 if(xml !="")
 {
 var field = xml.split('^%#+^');

 var status=field[0];
 if(status==1){
 alert("ඔබගේ ඉල්ලුම සාර්ථකයි. පැය 3ක් අතුලත අපි ඔබගේ ඉල්ලුම සපුරන්නෙමු.එය කෙටි පනිවිඩයක් මගින් දනුම් දෙන්නෙමු. පැය 3 පසු වුවහොත් කරුණාකර අපට කතා කරන්න. ස්තූතියි.");
 location.reload(); 
 }
 

 
 


 
 
 
 //document.getElementById('tryid').value=field[0];
 //location.reload(); 
 } 
 else
 {
 //document.getElementById('accountNumber').value="";
 // document.getElementById('acctypee').value="";
 //document.getElementById('balancee').value="";
 //location.reload(true);
 }
 }
 }
 );
 
}, 500);
 }












 </script>
</html>