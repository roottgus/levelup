<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Gracias por tu mensaje</title>
</head>
<body style="margin:0;padding:0;font-family:Arial,sans-serif;background:#f9f9f9;">
  <table width="100%" cellpadding="0" cellspacing="0" style="background:#f9f9f9;padding:20px 0;">
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
              <h1 style="margin-top:0;color:#0f66af;">¡Hola {{ $data['name'] }}!</h1>
              <p style="font-size:16px;line-height:1.5;">
                Gracias por contactarnos. Hemos recibido tu mensaje y te responderemos a la brevedad:
              </p>
              <blockquote style="border-left:4px solid #e5002a;padding-left:16px;color:#555555;">
                {{ $data['message'] }}
              </blockquote>
              <p style="text-align:center;margin:30px 0;">
                <a href="{{ url('/') }}" 
                   style="background:#e5002a;color:#ffffff;text-decoration:none;padding:12px 24px;border-radius:4px;display:inline-block;font-weight:bold;">
                  Visitar LevelUp+
                </a>
              </p>
            </td>
          </tr>
          <!-- Footer -->
          <tr>
            <td style="background:#0f66af;padding:20px;color:#ffffff;text-align:center;font-size:12px;">
              LevelUp+ Digital Agency<br>
              <a href="mailto:info@levelupplus.net" style="color:#ffffff;text-decoration:underline;">
                info@levelupplus.net
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
