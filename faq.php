<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="img/logoHutang.png">
    <link rel="stylesheet" href="css/faq.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/"
        crossorigin="anonymous">

    <script src="js/jquery-3.3.1.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.3/Chart.bundle.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.3/Chart.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.3/Chart.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.3/Chart.min.js"></script>
    <title>HutangMU | FAQ</title>
    <style>
    body {
      font-family: "roboto", sans-serif;
      height: 100%;
    }
    </style>
</head>
<body background="img\team.jpg">
	<nav>
		<ul>
        <a href="index" style="text-decoration: none; color: white;"><li>HOME</li></a>
		</ul>
	</nav>
	<div class="content">
		<h2 class="title">FaQ</h2>

		<div class="faq" id="satu">
			<h3>Apa itu HutangMU ?</h3>
			<i class="fas fa-caret-right" style="float: right; font-size: 30px; margin-top:-25px;"></i>
		</div>
		<div class="faq" id="panel1">HutangMU adalah aplikasi web pencatatan hutang piutang harian yang mempunyai fitur-fitur menarik untuk memonitoring hutang piutang harian anda. Direkomendasikan bagi para pelaku usaha yang kesulitan dalam melakukan pengelolaan hutang piutangnya.</div>

		<div class="faq" id="dua">
			<h3>Apa saja fitur HutangMU ?</h3>
			<i class="fas fa-caret-right" style="float: right; font-size: 30px; margin-top:-25px;"></i>
		</div>
		<div class="faq" id="panel2">HutangMU memberikan berbagai yang mempermudah anda untuk mengatur hutang piutang harian anda seperti pencatatan hutang piutang harian, pencatatan hutang piutang melalui voice note dan monitoring hutang piutang berbentuk laporan berjangka waktu harian/mingguan/bulanan/tahunan.</div>

		<div class="faq" id="tiga">
			<h3>Bagaimana cara penggunaan HutangMU ?</h3>
            <i class="fas fa-caret-right" style="float: right; font-size: 30px; margin-top:-25px;"></i>
		</div>
		<div class="faq" id="panel3">Pertama anda harus mendaftarkan diri terlebih dahulu. Setelah mendaftarkan diri, kita wajib login untuk mengakses aplikasi HutangMU dan anda dapat mengelola hutang piutang anda secara gratis dan tentunya mudah digunakan.</div>
	</div>
	
	 <!-- change icon -->
                <script>
                    $("#satu").click(function () {
                        $(this).find('i').toggleClass('fa-caret-down fa-caret-right');
                        if ($("#satu").not(this).find("i").hasClass("fa-caret-right")) {
                            $("#satu").not(this).find("i").toggleClass('fa-caret-down fa-caret-right');
                        }
                    });

                    $("#dua").click(function () {
                        $(this).find('i').toggleClass('fa-caret-down fa-caret-right');
                        if ($("#dua").not(this).find("i").hasClass("fa-caret-right")) {
                            $("#dua").not(this).find("i").toggleClass('fa-caret-down fa-caret-right');
                        }
                    });

                    $("#tiga").click(function () {
                        $(this).find('i').toggleClass('fa-caret-down fa-caret-right');
                        if ($("#tiga").not(this).find("i").hasClass("fa-caret-right")) {
                            $("#tiga").not(this).find("i").toggleClass('fa-caret-down fa-caret-right');
                        }
                    });
                </script>
         <!-- change icon -->
         <script>
         	$("#satu").click(function(){
  				$("#panel1").slideToggle("medium");
				});
         	$("#dua").click(function(){
  				$("#panel2").slideToggle("medium");
				});
         	$("#tiga").click(function(){
  				$("#panel3").slideToggle("medium");
				});
         </script>  

</body>
</html> 