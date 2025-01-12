document.addEventListener('DOMContentLoaded', function() {
    console.log('ready');  
    document.getElementById('escolherMateria3').style.display = "none";  
  });

  function hiddenEscolherMateria() {
    document.getElementById('escolherMateria3').style.display = "flex";
    document.getElementById('escolherMateria2').style.display = "none"; 
  }