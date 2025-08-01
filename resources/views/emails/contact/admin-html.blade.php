<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Nuevo mensaje de contacto</title>
</head>
<body style="margin:0;padding:0;font-family:Arial,sans-serif;background:#f4f4f4;">
  <table width="100%" cellpadding="0" cellspacing="0" style="background:#f4f4f4;padding:20px 0;">
    <tr>
      <td align="center">
        <table width="600" cellpadding="0" cellspacing="0" style="background:#ffffff;border-radius:8px;overflow:hidden;">
          <!-- Header -->
          <tr>
            <td style="background:#0f66af;padding:20px;text-align:center;">
              <img src="{{ asset('images/logo-email.png') }}" width="140" alt="LevelUp+ Digital Agency">
            </td>
          </tr>
          <!-- Body -->
          <tr>
            <td style="padding:30px;color:#333333;">
              <h1 style="margin-top:0;color:#0f66af;">🔔 Nuevo mensaje de contacto</h1>
              <p>
                <strong>Nombre:</strong> {{ $data['name'] }}<br>
                <strong>Email:</strong> {{ $data['email'] }}<br>
                @if(!empty($data['phone']))<strong>Teléfono:</strong> {{ $data['phone'] }}<br>@endif
              </p>
              <hr style="border:none;border-top:1px solid #eeeeee;margin:20px 0;">
              <p style="font-size:16px;line-height:1.5;">
                {{ $data['message'] }}
              </p>
              <p style="text-align:center;margin:30px 0;">
                <a href="{{ url('/admin/contactos') }}" 
                   style="background:#e5002a;color:#ffffff;text-decoration:none;padding:12px 24px;border-radius:4px;display:inline-block;font-weight:bold;">
                  Ver en panel admin
                </a>
              </p>
            </td>
          </tr>
          <!-- Footer -->
          <tr>
            <td style="background:#0f66af;padding:20px;color:#ffffff;text-align:center;font-size:12px;">
              LevelUp+ Digital Agency &bull; Miami, FL<br>
              <a href="mailto:admin@digitalagencylevelup.com" style="color:#ffffff;text-decoration:underline;">
                admin@digitalagencylevelup.com
              </a><br>
              © {{ date('Y') }} LevelUp+. Todos los derechos reservados.
            </td>
          </tr>
        </table>
      </td>
    </tr>
  </table>
</body>
</html>
