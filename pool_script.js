document.addEventListener('DOMContentLoaded', function () {
    const poolTable = document.getElementById('poolTable');
    const canvas = document.createElement('canvas');
    canvas.width = 600;
    canvas.height = 300;
    poolTable.appendChild(canvas);
  
    const ctx = canvas.getContext('2d');
    ctx.fillStyle = '#28a745'; // Table color
    ctx.fillRect(50, 50, 500, 200);
  
    // Additional styling and elements can be added to the canvas for the pool game simulation
  });
  
  document.getElementById('startGameBtn').addEventListener('click', function () {
    // Add JavaScript code here to start the pool game or any other interactive functionality
    alert('Game started!');
  });
  