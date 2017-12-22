<!DOCTYPE html>
<html><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

</head>
<body>


<div style="display:none;">
<iframe src="inv.php" id="PDFtoPrint"></iframe>
</div>


<script>
window.onload = function() {
document.getElementById('PDFtoPrint').focus(); 
document.getElementById('PDFtoPrint').contentWindow.print();
}
</script>

</body></html>