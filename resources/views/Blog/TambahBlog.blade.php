<!DOCTYPE html>

<html lang="en">


<head>
  <title> Add Blog </title>
  @include('Template.head')
</head>


<body class="hold-transition sidebar-mini">
<div class="wrapper" id="app">
    <style>
        body{
              background-color:(maroon);
              background-size:cover;
              background-attachment: fixed;
            }
            p{
              color:white;
            }
        </style>

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
            
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
              <li class="breadcrumb-item active">Add Blog</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->


    <!-- Main content -->
    <div class="content">
        <h1 align='center'><font face='Snap ITC'> HALAMAN TAMBAH BLOG </font></h1>

    <H3 ALIGN='CENTER'><font color='red' face='sao'><u>ISI BIODATA</u></font></H3>
    <form>
    <table border=0 width=55% height=100 ALIGN='center'>
    <tr>	<td><font color='red' face='sao'>NAMA</td> <td>:</font></td> <td><input type=text size=20></td></tr>
    <tr>	<td><font color='red' face='sao'>TTL</td> <td>:</font></td> <td><input type=text size=10>
    <select> <option>Tanggal
      <option>1	
      <option>2	
      <option>3	
      <option>4	
      <option>5	
      <option>6	
      <option>7	
      <option>8	
      <option>9	
      <option>10	
      <option>11	
      <option>12	
      <option>13
      <option>14
      <option>15
      <option>16
      <option>17
      <option>18
      <option>19
      <option>20
      <option>21
      <option>22
      <option>23
      <option>24
      <option>25
      <option>26
      <option>27
      <option>28
      <option>29
      <option>30
      <option>31	</select>
    
    <select> <option>Bulan
      <option>Januari
      <option>Februari
      <option>Maret
      <option>April
      <option>Mei
      <option>Juni
      <option>Juli
      <option>Agustus
      <option>September
      <option>Oktober
      <option>November
      <option>Desember	</select>
    <select> <option>Tahun
      <option>1990
      <option>1991
      <option>1992
      <option>1993
      <option>1994
      <option>1995
      <option>1996
      <option>1997
      <option>1998
      <option>1999
      <option>2000
      <option>2001
      <option>2002
      <option>2003
      <option>2004
      <option>2005
      <option>2006
      <option>2007
      <option>2008
      <option>2009
      <option>2010
      <option>2011	</select>
    <tr>	<td><font color='red' face='sao'>PRODI</td> <td>:</font></td><td><select><option> <option>S1 Informatika <option>S1 Perencanaan Wilayah dan Kota <option>S1 Arsitektur <option>S1 Teknik Sipil <option>S1 Farmasi <option>D3 Keperawatan</td>
    <tr>	<td><font color='red' face='sao'>ALAMAT</td> <td>:</font></td> <td><input type=text size=30></td></tr>
    <tr>	<td><font color='red' face='sao'>JENIS KELAMIN</td> <td>:</font></td> <td><input type=radio name='jk'><font color='red'>Laki-laki</font> <input type=radio name='jk'><font color='red'>Perempuan</font></td>
    <tr>	<td><font color='red' face='sao'>NEGARA</td> <td>:</font></td> <td><select><option> <option>Afrika <option>Amerika Serikat <option>Malaysia <option>Singapura <option>Francis <option>Portugal <option>Argentina <option>Thailand <option>Inggris <option>Spanyol <option>Indonesia <option>Portugal <option>Jerman <option>Belanda <option>Brazil</select></td>
    <tr>	<td><font color='red' face='sao'>KATA SANDI</td> <td>:</font></td><td> <input type=password size=20></td></tr>
    <tr>	<td><font color='red' face='sao'>HOBBY</td> <td>:</font></font></td> <td><input type=checkbox><font color='red'>Olahraga <input type=checkbox>Seni <input type=checkbox>Baca Buku <input type=checkbox>Lainnya </font></td>
    <tr>	<td><font color='red' face='sao'>OLAHRAGA</td> <td>:</font></td> <td><input type=checkbox><font color='red'>Basket	<input type=checkbox>Sepak Bola	<input type=checkbox>Futsal <input type=checkbox>Volly <input type=checkbox>Tenis Meja</font></td>
    <tr>	<td><font color='red' face='sao'>AGAMA</td> <td>:</font></td> <td><select><option> <option>ISLAM <option>KRISTEN <option>HINDU <option>BUDHA <option>KATOLIK <option>KUNGHOCO</select></td>
    <tr>	<td><font color='red' face='sao'>BAHASA</td> <td>:<font></td> <td><select><option> <option>English <option>Spain <option>Indonesia <option>Portugal <option>Jerman <option>Belanda <option>Brazil</select></td>
    <tr>	<td><font color='red' face='sao'>KOMENTAR</td> <td>:</font></td><td><textarea> </textarea></td></tr>
    <tr>	<td></td><td></td><td><a href="biodata.html"> <input href="biodata.html" type=submit value='SAVE'></a><input type=reset value='CANCEL'></td>
    </form>
    </table>
    <font color='red' face='sao'><blink><marquee>Umpat Lalu Cuyyy</blink></marquee></tr> </font>
    
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