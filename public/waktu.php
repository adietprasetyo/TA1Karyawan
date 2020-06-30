<script type="text/javascript">
    //set timezone
    <?php date_default_timezone_set('Asia/Jakarta'); ?>
    //buat object date berdasarkan waktu di server
    var serverTime = new Date(<?php print date('Y, m, d, H, i, s, 0'); ?>);
    //buat object date berdasarkan waktu di client
    var clientTime = new Date();
    //hitung selisih
    var Diff = serverTime.getTime() - clientTime.getTime();    
    //fungsi displayTime yang dipanggil di bodyOnLoad dieksekusi tiap 1000ms = 1detik
    function displayServerTime(){
        //buat object date berdasarkan waktu di client
        var clientTime = new Date();
        //buat object date dengan menghitung selisih waktu client dan server
        var time = new Date(clientTime.getTime() + Diff);
        //ambil nilai jam
        var sh = time.getHours().toString();
        //ambil nilai menit
        var sm = time.getMinutes().toString();
        //ambil nilai detik
        var ss = time.getSeconds().toString();
        //tampilkan jam:menit:detik dengan menambahkan angka 0 jika angkanya cuma satu digit (0-9)
        document.getElementById("clock").innerHTML = (sh.length==1?"0"+sh:sh) + ":" + (sm.length==1?"0"+sm:sm) + ":" + (ss.length==1?"0"+ss:ss);
    }
</script>
<body onload="setInterval('displayServerTime()', 1000);">
<span><?php $tanggal=mktime(date("m"), date
("d"), date ("Y"));
echo "<b>" .date("d-M-Y",$tanggal)."</b> | "; ?></span>
<span id="clock"><?php print date('H:i:s');?></span>
</body>


<?php
$a = date ("H");
if (($a>=5) && ($a<=11)){
echo "<b>, Selamat Pagi   </b>";
}
else if(($a>11) && ($a<=15))
{
echo "<b>, Selamat Siang   </b>";}
else if (($a>15) && ($a<=18)){
echo "<b>, Selamat Sore </b>";}
else { echo "<b>, Selamat Malam </b>";}
?>

<?php ?>