<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Kisii Hockey Manager</title>
<style>
body{font-family:sans-serif;background:#0f172a;color:white;margin:0;padding:15px}
.card{background:#1e293b;padding:20px;border-radius:15px;margin-bottom:15px}
.btn{background:#22c55e;color:black;padding:15px 25px;border:none;border-radius:10px;font-weight:bold;width:100%;font-size:18px}
.header{text-align:center;padding:20px 0}
.badge{background:#22c55e;color:black;padding:3px 8px;border-radius:5px;font-size:12px}
</style>
</head>
<body>
<div class="header">
<h2>🏑 Kisii University Hockey</h2>
<p>Kisii Hockey Manager</p>
</div>

<div class="card">
<h3>Today's Training</h3>
<p>📍 Main Pitch - 4:30 PM <span class="badge">LIVE</span></p>
<p>Coach: Byre | Squad: Match 7&8</p>
<p><b>Attendance: 18/22 Present</b></p>
<form method="post">
<button class="btn" name="checkin">CHECK IN NOW 📍</button>
</form>
<?php
if(isset($_POST['checkin'])){
  echo "<p style='color:#22c55e;margin-top:15px'>✅ Checked in! You are now 19/22 - Welcome Kevoh (No.7)</p>";
}
?>
</div>

<div class="card">
<h3>Next Fixtures</h3>
<p>31.10 - GORILLA HC vs KSU @ 1200HRS - MIGORI</p>
<p>01.11 - RONGO UNI vs KSU @ 1000HRS - RONGO</p>
</div>

<div class="card">
<h3>Team Status</h3>
<p>Simiyu-kisii: ✅ Present (Traveling)</p>
<p>Davy, Johnmo, Hemedi: ✅ Present</p>
</div>
</body>
</html>
