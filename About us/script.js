  function mouseOverFunction() {
    document.getElementById("QRcode").style.height='auto';
    document.getElementById("QRcode").style.width='250px';
  }
  function mouseOutFunction() {
    document.getElementById("QRcode").style.height='auto';
    document.getElementById("QRcode").style.width='200px';
  }

  document.getElementById("QRcode").addEventListener("mouseover",mouseOverFunction);
  document.getElementById("QRcode").addEventListener("mouseout",mouseOutFunction);