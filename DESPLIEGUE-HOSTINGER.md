# Guía de Despliegue en Hostinger - DigitalTex

## 📋 Requisitos Previos

- Cuenta de hosting en Hostinger con acceso a:
  - Panel de control (hPanel)
  - Acceso FTP/SFTP o File Manager
  - SSH (opcional pero recomendado)
- Dominio: **digitaltex.com.ar**
- PHP 8.2 o superior
- Composer (no necesario si subes vendor/)
- Node.js y NPM (solo para desarrollo local)

**Nota**: Esta aplicación funciona sin base de datos, usando almacenamiento en archivos.

---

## 🚀 Pasos de Despliegue

### 1. Preparar la Aplicación Localmente

#### Compilar Assets para Producción
```bash
npm install
npm run build
```

#### Optimizar Autoloader de Composer
```bash
composer install --optimize-autoloader --no-dev
```

#### Optimizar Laravel
```bash
php artisan config:cache
php artisan route:cache
php artisan view:cache
```

### 2. ~~Configurar Base de Datos~~ (NO NECESARIO)

**Esta aplicación NO requiere base de datos**. Usa almacenamiento en archivos para:
- Sesiones (archivos en `storage/framework/sessions/`)
- Caché (archivos en `storage/framework/cache/`)
- Logs (archivos en `storage/logs/`)

**Si en el futuro necesitas base de datos**:
1. Acceder a phpMyAdmin desde el hPanel
2. Crear una nueva base de datos
3. Actualizar el archivo `.env` con las credenciales
4. Ejecutar: `php artisan migrate --force`

### 3. Subir Archivos al Servidor

#### Opción A: Usando File Manager (Más fácil)

1. Acceder al **File Manager** en hPanel
2. Navegar a `public_html/`
3. Subir **TODA** la aplicación Laravel (incluyendo carpetas ocultas)
4. La estructura debe ser:
   ```
   public_html/
   ├── app/
   ├── bootstrap/
   ├── config/
   ├── database/
   ├── public/
   ├── resources/
   ├── routes/
   ├── storage/
   ├── vendor/
   ├── .env
   ├── artisan
   ├── composer.json
   └── ...
   ```

#### Opción B: Usando FTP/SFTP

1. Conectar con FileZilla o cliente FTP:
   - Host: `ftp.digitaltex.com.ar` o IP del servidor
   - Usuario: Tu usuario FTP
   - Puerto: 21 (FTP) o 22 (SFTP)

2. Subir todos los archivos a `public_html/`

### 4. Configurar el Document Root

**IMPORTANTE**: En Hostinger, el document root debe apuntar a la carpeta `public/` de Laravel.

1. En el hPanel, ir a **Dominios**
2. Seleccionar **digitaltex.com.ar**
3. En **Document Root**, cambiar a:
   ```
   /home/u123456789/public_html/public
   ```
4. Guardar cambios

### 5. Configurar Variables de Entorno

1. **Copiar .env.example a .env**:
   ```bash
   cp .env.example .env
   ```

2. **Editar el archivo .env** con las credenciales reales:
   ```env
   APP_NAME="DigitalTex"
   APP_ENV=production
   APP_DEBUG=false
   APP_URL=https://digitaltex.com.ar

   APP_LOCALE=es
   APP_FALLBACK_LOCALE=es

   # Base de Datos DESACTIVADA
   DB_CONNECTION=none

   # Sesiones y caché en archivos
   SESSION_DRIVER=file
   CACHE_STORE=file
   QUEUE_CONNECTION=sync

   # Correo electrónico
   MAIL_MAILER=smtp
   MAIL_HOST=smtp.hostinger.com
   MAIL_PORT=465
   MAIL_USERNAME=contacto@digitaltex.com.ar
   MAIL_PASSWORD=TuPasswordCorreo
   MAIL_ENCRYPTION=ssl
   MAIL_FROM_ADDRESS="contacto@digitaltex.com.ar"
   MAIL_FROM_NAME="DigitalTex"
   ```

3. **Generar APP_KEY** (si tienes acceso SSH):
   ```bash
   php artisan key:generate
   ```

   Si no tienes SSH, genera la key localmente y cópiala manualmente:
   ```bash
   php artisan key:generate --show
   ```

### 6. Configurar Permisos de Carpetas

Las siguientes carpetas necesitan permisos de escritura (755 o 775):

```bash
chmod -R 755 storage
chmod -R 755 bootstrap/cache
```

Si usas SSH:
```bash
cd /home/u123456789/public_html
chmod -R 755 storage bootstrap/cache
chown -R u123456789:u123456789 storage bootstrap/cache
```

### 7. ~~Ejecutar Migraciones~~ (NO NECESARIO)

**Esta aplicación no usa base de datos**, por lo que no hay migraciones que ejecutar.

Si en el futuro agregas base de datos:
```bash
php artisan migrate --force
php artisan db:seed --force
```

### 8. Configurar SSL (HTTPS)

1. En el hPanel, ir a **SSL**
2. Seleccionar **digitaltex.com.ar**
3. Instalar certificado SSL gratuito (Let's Encrypt)
4. Forzar HTTPS (ya configurado en .htaccess)

### 9. Optimizaciones Finales

Si tienes acceso SSH:
```bash
php artisan config:cache
php artisan route:cache
php artisan view:cache
php artisan optimize
```

### 10. Verificar el Sitio

1. Visitar: **https://digitaltex.com.ar**
2. Verificar que:
   - El sitio carga correctamente
   - HTTPS está activo
   - Las rutas funcionan
   - La conexión a base de datos funciona
   - Los formularios funcionan

---

## 🔧 Comandos Útiles SSH

### Acceder por SSH
```bash
ssh u123456789@digitaltex.com.ar -p 22
```

### Limpiar caché
```bash
php artisan cache:clear
php artisan config:clear
php artisan route:clear
php artisan view:clear
```

### Ver logs de errores
```bash
tail -f storage/logs/laravel.log
```

### Actualizar dependencias
```bash
composer install --optimize-autoloader --no-dev
```

---

## 📁 Estructura de Archivos en Hostinger

```
/home/u123456789/
└── public_html/              (Raíz de tu aplicación)
    ├── app/
    ├── bootstrap/
    ├── config/
    ├── database/
    ├── public/               (Document Root - apunta aquí)
    │   ├── index.php
    │   ├── .htaccess
    │   └── build/
    ├── resources/
    ├── routes/
    ├── storage/
    ├── vendor/
    ├── .env                  (CREAR MANUALMENTE)
    ├── artisan
    └── composer.json
```

---

## 🔒 Seguridad

### Archivos a Proteger

1. **Nunca subir estos archivos**:
   - `.env` (crear uno nuevo en el servidor)
   - `node_modules/`
   - `.git/`
   - `tests/`

2. **Verificar permisos**:
   - `.env` debe ser 600 o 644 (no ejecutable)
   - Carpetas: 755
   - Archivos: 644

3. **Validar .htaccess**:
   - Forzar HTTPS ✓
   - Headers de seguridad ✓
   - Proteger archivos ocultos ✓

---

## 🐛 Solución de Problemas

### Error 500 - Internal Server Error

1. Verificar permisos de `storage/` y `bootstrap/cache/`
2. Verificar que `.env` existe y tiene `APP_KEY` generada
3. Revisar logs: `storage/logs/laravel.log`
4. Verificar versión de PHP (debe ser 8.2+)

### Página en blanco

1. Activar temporalmente debug: `APP_DEBUG=true`
2. Revisar logs de PHP en el hPanel
3. Verificar que el document root apunta a `/public`

### Assets no cargan (CSS/JS)

1. Verificar que ejecutaste `npm run build`
2. Verificar que la carpeta `public/build/` existe
3. Verificar `APP_URL` en `.env`

### Base de datos no conecta

**Esta aplicación NO usa base de datos**. Si ves errores relacionados:

1. Verificar que `.env` tenga `DB_CONNECTION=none`
2. Limpiar caché: `php artisan config:clear`
3. Verificar que no haya referencias a DB en el código

### Formularios dan error 419

1. Limpiar caché: `php artisan cache:clear`
2. Verificar `APP_KEY` en `.env`
3. Verificar configuración de sesiones

---

## 📧 Configurar Correo Electrónico

### Crear cuenta de correo en Hostinger

1. Ir a **Correos electrónicos** en hPanel
2. Crear: `contacto@digitaltex.com.ar`
3. Anotar contraseña

### Configuración SMTP
```env
MAIL_MAILER=smtp
MAIL_HOST=smtp.hostinger.com
MAIL_PORT=465
MAIL_USERNAME=contacto@digitaltex.com.ar
MAIL_PASSWORD=[contraseña del correo]
MAIL_ENCRYPTION=ssl
MAIL_FROM_ADDRESS="contacto@digitaltex.com.ar"
MAIL_FROM_NAME="DigitalTex"
```

### Probar envío de correo
```bash
php artisan tinker
Mail::raw('Test', function($msg) { $msg->to('tu@email.com')->subject('Test'); });
```

---

## 🔄 Actualizar la Aplicación

### Proceso de actualización:

1. **Local**: Hacer cambios y probarlos
2. **Compilar assets**: `npm run build`
3. **Subir archivos** modificados vía FTP
4. **SSH** (si disponible):
   ```bash
   php artisan config:cache
   php artisan route:cache
   php artisan view:cache
   ```

---

## 📞 Soporte

- **Hostinger**: https://www.hostinger.es/soporte
- **Laravel Docs**: https://laravel.com/docs
- **Laravel en Español**: https://laravel.com/docs/11.x/es

---

## ✅ Checklist Final

- [ ] Archivos subidos a `public_html/`
- [ ] Document root apunta a `public_html/public`
- [ ] Archivo `.env` creado y configurado
- [ ] `APP_KEY` generada
- [ ] Permisos de `storage/` y `bootstrap/cache/` configurados (755)
- [ ] SSL instalado y HTTPS forzado
- [ ] Correo electrónico configurado (opcional)
- [ ] Sitio probado y funcionando
- [ ] Sesiones funcionando correctamente

---

¡Tu aplicación Laravel está lista para producción en Hostinger! 🎉
