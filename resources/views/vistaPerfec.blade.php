<!DOCTYPE html>
<html lang="es">
<head> 
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge"> 
    <title>Perfecto</title> 
</head>
<body> 
   <form action="{{route('obtenerPerfec')}}" method="post">
   @csrf
   <h1>NUMERO PERFECTO</h1>
   <input
       type="number" 
       value="{{ isset($n) ? $n : 1 }}" 
       min="1" 
       max="99999999"          
       required
       name="n" 
   >
   @error('n')

   <div> 
       {{ $message }}
  </div>
  @enderror 
  <button type="submit"> 
  Calcular 
  </button> 
  </form>
  @isset($prod) 
   <section>
    La factorial {{ $n }} es: {{ $prod }} 
   </section> 
  @endisset 
</body>
</html>