<!DOCTYPE html>

<html lang="en">


<head>
  <title> HOME </title>
  @include('Template.head')
</head>

<body class="hold-transition sidebar-mini">
<div class="wrapper" id="app">

  <!-- Navbar -->
  @include('Template.navbar')
  <!-- /.navbar -->


  <!-- Main Sidebar Container -->
  @include('Template.sidebar-left')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h2 class="m-0 text-dark"><font face='sao'>Starter Page</font></h2>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#"><font face='sao'>Home</font></a></li>
              
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    
    
      <table border=0 width=100% height=50 ALIGN='center'>
<tr><td><H1><font face='sao'><center>
<SCRIPT>

farbbibliothek = new Array();


farbbibliothek[0] = new Array("#FF0000","#FF1100","#FF2200","#FF3300","#FF4400","#FF5500","#FF6600","#FF7700","#FF8800","#FF9900","#FFaa00","#FFbb00","#FFcc00","#FFdd00","#FFee00","#FFff00","#FFee00","#FFdd00","#FFcc00","#FFbb00","#FFaa00","#FF9900","#FF8800","#FF7700","#FF6600","#FF5500","#FF4400","#FF3300","#FF2200","#FF1100");



farbbibliothek[1] = new Array("#FF0000","#FFFFFF","#FFFFFF","#FF0000");



farbbibliothek[2] = new Array("#FFFFFF","#FF0000","#FFFFFF","#FFFFFF","#FFFFFF","#FFFFFF","#FFFFFF","#FFFFFF","#FFFFFF","#FFFFFF","#FFFFFF","#FFFFFF","#FFFFFF","#FFFFFF","#FFFFFF","#FFFFFF","#FFFFFF","#FFFFFF","#FFFFFF","#FFFFFF","#FFFFFF","#FFFFFF","#FFFFFF","#FFFFFF","#FFFFFF","#FFFFFF","#FFFFFF","#FFFFFF","#FFFFFF","#FFFFFF","#FFFFFF","#FFFFFF","#FFFFFF","#FFFFFF","#FFFFFF","#FFFFFF");



farbbibliothek[3] = new Array("#FF0000","#FF4000","#FF8000","#FFC000","#FFFF00","#C0FF00","#80FF00","#40FF00","#00FF00","#00FF40","#00FF80","#00FFC0","#00FFFF","#00C0FF","#0080FF","#0040FF","#0000FF","#4000FF","#8000FF","#C000FF","#FF00FF","#FF00C0","#FF0080","#FF0040");



farbbibliothek[4] = new Array("#FF0000","#EE0000","#DD0000","#CC0000","#BB0000","#AA0000","#990000","#880000","#770000","#660000","#550000","#440000","#330000","#220000","#110000","#000000","#110000","#220000","#330000","#440000","#550000","#660000","#770000","#880000","#990000","#AA0000","#BB0000","#CC0000","#DD0000","#EE0000");


farbbibliothek[5] = new Array("#FF0000","#FF0000","#FF0000","#FFFFFF","#FFFFFF","#FFFFFF");


farbbibliothek[6] = new Array("#FF0000","#FDF5E6");



farben = farbbibliothek[4];



function farbschrift()



{



for(var i=0 ; i<Buchstabe.length; i++)



{



document.all["a"+i].style.color=farben[i];



}



farbverlauf();



}



function string2array(text)



{



Buchstabe = new Array();



while(farben.length<text.length)



{



farben = farben.concat(farben);



}



k=0;



while(k<=text.length)



{



Buchstabe[k] = text.charAt(k);



k++;



}



}



function divserzeugen()



{



for(var i=0 ; i<Buchstabe.length; i++)

{

document.write("<span id='a"+i+"' class='a"+i+"'>"+Buchstabe[i] + "</span>");

}

farbschrift();

}

var a=1;
function farbverlauf()
{

for(var i=0 ; i<farben.length; i++)
{
farben[i-1]=farben[i];
}

farben[farben.length-1]=farben[-1];

setTimeout("farbschrift()",30);

}
//
var farbsatz=1;
function farbtauscher()
{
farben = farbbibliothek[farbsatz];
while(farben.length<text.length)
{
farben = farben.concat(farben);
}
farbsatz=Math.floor(Math.random()*(farbbibliothek.length-0.0001));
}
setInterval("farbtauscher()",10000);
text ="Welcome|My-Website";
string2array(text);
divserzeugen();
//document.write(text);
</SCRIPT></font></h1>
</table></center>

<div class="content">
  <router-view> </router-view>
</div>
      
<!-- ISI HALAMAN -->
    </div>

    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->


  <!-- Main Footer -->
  @include('Template.footer')
</div>
<!-- ./wrapper -->


<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
@include('Template.script')

</body>
</html>