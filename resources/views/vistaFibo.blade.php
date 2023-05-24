<!DOCTYPE html>
<html lang="es">
<head> 
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge"> 
    <title>Fibonacci</title> 
</head>
<body> 
   <form action="{{route('obtenerFibo')}}" method="post">
   @csrf
   <h1>SERIE FIBONACCI</h1>
   <input
       type="number" 
       value="{{ isset($n) ? $n : 1 }}" 
       min="1" 
       max="20" 
       required
       name="n" 
   >
   @error('n')

   <div> 
       {{ $message }}
  </div>
  @enderror 
  <button type="submit"> 
  Obtener
  </button> 
  
  </form>
  @isset($ser) 
 
  @endisset 
</body>
</html>