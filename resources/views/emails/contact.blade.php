<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
</head>
<body>
  <h2>📩 Nuevo mensaje desde el formulario de contacto</h2>
  <p><strong>Nombre:</strong> {{ $data['name'] }}</p>
  <p><strong>Email:</strong> {{ $data['email'] }}</p>
  <p><strong>Mensaje:</strong><br>{{ nl2br(e($data['message'])) }}</p>
</body>
</html>
