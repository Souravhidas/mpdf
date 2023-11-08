<!DOCTYPE html>
<html>
<head>
    <title>Generate and Download PDF</title>
</head>
<body>
    <button id="downloadButton">Download PDF</button>

    <script>
        document.getElementById('downloadButton').addEventListener('click', function() {
            // Use JavaScript to trigger the download
            var link = document.createElement('a');
            link.href = 'generate_pdf.php'; // The URL to your PHP script
            link.download = 'generated_pdf.pdf'; // The desired file name
            link.click();
        });
    </script>
</body>
</html>
