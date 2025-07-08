<?php
session_start();

if (!isset($_SESSION['logged_in']) || $_SESSION['logged_in'] !== true) {
    header('Location: index.php');
    exit;
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Buat Akun & Server Pterodactyl</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@400;700&family=Roboto:wght@300;400;500&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
   <link rel="stylesheet" href="style.css">
</head>
<body>
  <div class="server-container">
    <div class="circuit-lines">
      <div class="circuit-line horizontal" style="top: 20%;"></div>
      <div class="circuit-line horizontal" style="top: 40%;"></div>
      <div class="circuit-line horizontal" style="top: 60%;"></div>
      <div class="circuit-line horizontal" style="top: 80%;"></div>
      <div class="circuit-line vertical" style="left: 20%;"></div>
      <div class="circuit-line vertical" style="left: 40%;"></div>
      <div class="circuit-line vertical" style="left: 60%;"></div>
      <div class="circuit-line vertical" style="left: 80%;"></div>
    </div>
    
    <div class="tech-badge">BETA v2.0</div>
    
    <div class="robot-header">
      <i class="robot-icon fas fa-robot"></i>
    </div>
    
    <div class="server-status">
      <div class="status-indicator"></div>
      <div class="status-indicator"></div>
      <div class="status-indicator"></div>
      <div class="status-indicator"></div>
    </div>
    
    <h2>CREATE ACCOUNT + SERVER</h2>
    
    <form action="proses.php" method="POST">
      <div class="input-group">
        <i class="fas fa-user"></i>
        <input type="text" name="username" placeholder="Username" required />
      </div>
      
      <div class="input-group">
        <i class="fas fa-envelope"></i>
        <input type="email" name="email" placeholder="Email" required />
      </div>
      
      <div class="input-group">
        <i class="fas fa-lock"></i>
        <input type="password" name="password" placeholder="Password" required />
      </div>

      <label><i class="fas fa-server"></i> Jenis Server (Egg)</label>
      <select name="egg" required>
        <option value="1">Minecraft Java</option>
        <option value="2">Minecraft Bedrock</option>
        <option value="3">Node.js</option>
      </select>

      <label><i class="fas fa-globe"></i> Lokasi Server</label>
      <select name="location" required>
        <option value="1">Singapore</option>
        <option value="2">Germany</option>
      </select>
      <script language="javascript">
document.write(unescape('%20%20%20%20%20%3C%6C%61%62%65%6C%3E%52%41%4D%3C%2F%6C%61%62%65%6C%3E%0A%3C%73%65%6C%65%63%74%20%6E%61%6D%65%3D%22%72%61%6D%22%20%72%65%71%75%69%72%65%64%3E%0A%20%20%3C%6F%70%74%69%6F%6E%20%76%61%6C%75%65%3D%22%31%30%32%34%22%3E%31%20%47%42%3C%2F%6F%70%74%69%6F%6E%3E%0A%20%20%3C%6F%70%74%69%6F%6E%20%76%61%6C%75%65%3D%22%32%30%34%38%22%3E%32%20%47%42%3C%2F%6F%70%74%69%6F%6E%3E%0A%20%20%3C%6F%70%74%69%6F%6E%20%76%61%6C%75%65%3D%22%33%30%37%32%22%3E%33%20%47%42%3C%2F%6F%70%74%69%6F%6E%3E%0A%20%20%3C%6F%70%74%69%6F%6E%20%76%61%6C%75%65%3D%22%34%30%39%36%22%3E%34%20%47%42%3C%2F%6F%70%74%69%6F%6E%3E%0A%20%20%3C%6F%70%74%69%6F%6E%20%76%61%6C%75%65%3D%22%35%31%32%30%22%3E%35%20%47%42%3C%2F%6F%70%74%69%6F%6E%3E%0A%20%20%3C%6F%70%74%69%6F%6E%20%76%61%6C%75%65%3D%22%36%31%34%34%22%3E%36%20%47%42%3C%2F%6F%70%74%69%6F%6E%3E%0A%20%20%3C%6F%70%74%69%6F%6E%20%76%61%6C%75%65%3D%22%37%31%36%38%22%3E%37%20%47%42%3C%2F%6F%70%74%69%6F%6E%3E%0A%20%20%3C%6F%70%74%69%6F%6E%20%76%61%6C%75%65%3D%22%38%31%39%32%22%3E%38%20%47%42%3C%2F%6F%70%74%69%6F%6E%3E%0A%20%20%3C%6F%70%74%69%6F%6E%20%76%61%6C%75%65%3D%22%39%32%31%36%22%3E%39%20%47%42%3C%2F%6F%70%74%69%6F%6E%3E%0A%20%20%3C%6F%70%74%69%6F%6E%20%76%61%6C%75%65%3D%22%31%30%32%34%30%22%3E%31%30%20%47%42%3C%2F%6F%70%74%69%6F%6E%3E%0A%3C%2F%73%65%6C%65%63%74%3E%0A%20%20%20%20%20%20%3C%62%75%74%74%6F%6E%20%74%79%70%65%3D%22%73%75%62%6D%69%74%22%3E%0A%20%20%20%20%20%20%20%20%3C%69%20%63%6C%61%73%73%3D%22%66%61%73%20%66%61%2D%70%6F%77%65%72%2D%6F%66%66%22%3E%3C%2F%69%3E%20%41%43%54%49%56%41%54%45%20%53%45%52%56%45%52%0A%20%20%20%20%20%20%3C%2F%62%75%74%74%6F%6E%3E%0A%20%20%20%20%20%20%3C%61%20%68%72%65%66%3D%22%68%74%74%70%73%3A%2F%2F%77%68%61%74%73%61%70%70%2E%63%6F%6D%2F%63%68%61%6E%6E%65%6C%2F%30%30%32%39%56%61%74%48%35%42%4C%41%38%39%4D%6E%78%49%70%67%61%78%32%43%22%20%74%61%72%67%65%74%3D%22%5F%62%6C%61%6E%6B%22%20%73%74%79%6C%65%3D%22%0A%20%20%64%69%73%70%6C%61%79%3A%20%69%6E%6C%69%6E%65%2D%62%6C%6F%63%6B%3B%0A%20%20%62%61%63%6B%67%72%6F%75%6E%64%2D%63%6F%6C%6F%72%3A%20%23%32%38%61%37%34%35%3B%0A%20%20%63%6F%6C%6F%72%3A%20%77%68%69%74%65%3B%0A%20%20%70%61%64%64%69%6E%67%3A%20%31%30%70%78%20%32%30%70%78%3B%0A%20%20%66%6F%6E%74%2D%73%69%7A%65%3A%20%31%36%70%78%3B%0A%20%20%62%6F%72%64%65%72%3A%20%6E%6F%6E%65%3B%0A%20%20%62%6F%72%64%65%72%2D%72%61%64%69%75%73%3A%20%35%70%78%3B%0A%20%20%74%65%78%74%2D%64%65%63%6F%72%61%74%69%6F%6E%3A%20%6E%6F%6E%65%3B%0A%22%3E%0A%20%20%3C%69%20%63%6C%61%73%73%3D%22%66%61%73%20%66%61%2D%70%6F%77%65%72%2D%6F%66%66%22%3E%3C%2F%69%3E%53%55%4D%42%45%52%20%53%43%0A%3C%2F%61%3E'));
</script>
    </form>
    
    <div class="server-stats">
      <span>SYSTEM: ONLINE</span>
      <span>NODES: 2/4</span>
      <span>LATENCY: 28ms</span>
    </div>
  </div>
</body>
</html>