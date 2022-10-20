<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Drag and Drop Files</title>
    <link rel="stylesheet" href="style.css" />
</head>
<body>

<div id="drop_file_zone" ondrop="upload_file(event)" ondragover="return false">
    <div id="drag_upload_file">
        <p>Drop file here</p>
        <p>or</p>
        <p><input type="button" value="Select File" onclick="file_explorer();" /></p>
        <input type="file" id="selectfile" />
    </div>
</div>
<div class="img-content"></div>
<script src="custom.js"></script>
</body>
</html>