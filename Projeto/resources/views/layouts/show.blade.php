<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <label for="">Produtos</label>
    <input type="text" name="produto" id="produto" value="{{$cliente->nome}}">
    <input type="text" name="quantidade" id="quantidade" value="{{$cliente->quantidade}}">
    <input type="text" name="valorunit" id="valorunit" value="{{$cliente->valorunit}}">
    
</body>
</html>