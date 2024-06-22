<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<form action="{{route('clietnes_store')}" medod='post'>
    @crsf
    <label>Nome</label>
    <input type="text" name='nome' id='nome'>

    <label>for="text">quantidade</label>
    <input type="text" name='quantidade' id='quantidade'>

    <label>for="text">valorunit</label>
    <input type="text" name='valorunit' id='valorunit'>
    <button type="submit">Cadastrar<button> 
        
</form>
    
</body>
</html>