<!DOCTYPE html>
<html lang="es">
<head> 
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge"> 
    <title>Contar vocales</title> 
</head>
<body> 
   <form action="{{route('obtenerVocal')}}" method="post">
   @csrf
   <h1>CONTANDO VOCALES</h1>
   <input type="text" id="cade" name="cade">
   
   @error('n')
   <div> 
       {{ $message }}
  </div>
  @enderror 
  <button type="submit"> 
     Contar  
  </button> 
  </form>
  </body>
</html>