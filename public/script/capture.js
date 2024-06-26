function captureAndDownload() {
    const targetElement = document.getElementById("result"); //select HTML elements to capture
    var btn = document.getElementById("recommendation-btn1"); //get recommendation btn1
    var btn2 = document.getElementById("recommendation-btn2"); //get recommendation btn2
    var btn3 = document.getElementById("recommendation-btn3"); //get recommendation btn3
    btn.style.display = 'none';
    btn2.style.display = 'none';
    btn3.style.display = 'none';

    html2canvas(targetElement,{
        width: 1300,
        height: 940,
    }).then((canvas) => {
      const link = document.createElement("a");
      link.download = "EduSage_TestResult.png"; //Set the image file name to download
      link.href = canvas.toDataURL(); //set canvas image data as download URL
      link.click(); //trigger download by clicking on imaginary link

      btn.style.display = "block";
      btn2.style.display = "block";
      btn3.style.display = "block";
    });
  }
