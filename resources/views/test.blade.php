<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
     <form  action= "procesar" method="POST" enctype="multipart/form-data"> <!--o-->
        
        <label for="inp1">nombre:</label>
        <input type="text" name="inp1">

        <br>

        <label> 
            <input type="checkbox" name="roles[]" value="administ"> administ
        </label>

        <br>

        <label>
            <input type="checkbox" name="roles[]" value="editor"> editor
            </label>
          
        <br>

        <label>
            <input type="checkbox" name="roles[]" value="writer"> writer
            </label>

        <button type="submit" name="btn1" >Enviar</button>

        <br>

        <label>
            Imagen: 
            <input type="file" name="image" >


        </label>

        <button type="submit" name="btn2" >Cargar</button>

        
    </form>
    
</body>
</html>