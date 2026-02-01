# DigitalTex - Checklist de Seguridad para Producción

## ✅ Variables de Entorno

- [ ] `APP_ENV=production`
- [ ] `APP_DEBUG=false`
- [ ] `APP_KEY` generada (32 caracteres aleatorios)
- [ ] `APP_URL` configurada correctamente con HTTPS
- [ ] Credenciales de base de datos seguras
- [ ] Contraseñas seguras para correo electrónico

## ✅ Configuración de Archivos

- [ ] `.env` NO está en el repositorio Git
- [ ] `.htaccess` en la raíz protege carpetas sensibles
- [ ] `.htaccess` en public/ fuerza HTTPS
- [ ] Headers de seguridad configurados en .htaccess
- [ ] `robots.txt` configurado apropiadamente

## ✅ Permisos de Archivos

```bash
# Permisos recomendados
storage/              755
bootstrap/cache/      755
.env                  600 o 644
```

- [ ] `storage/` tiene permisos de escritura (755)
- [ ] `bootstrap/cache/` tiene permisos de escritura (755)
- [ ] `.env` no es ejecutable (600 o 644)
- [ ] Otros archivos tienen permisos 644
- [ ] Directorios tienen permisos 755

## ✅ Base de Datos

**NO APLICA** - Esta aplicación funciona sin base de datos usando almacenamiento en archivos.

Si en el futuro se agrega base de datos:
- [ ] Usuario de DB con privilegios mínimos necesarios
- [ ] Contraseña de DB fuerte (min 16 caracteres)
- [ ] Migraciones ejecutadas correctamente
- [ ] Backups configurados

## ✅ SSL/HTTPS

- [ ] Certificado SSL instalado (Let's Encrypt)
- [ ] HTTPS forzado en .htaccess
- [ ] Redirección de HTTP a HTTPS funcionando
- [ ] Sin advertencias de contenido mixto
- [ ] `APP_URL` usa HTTPS

## ✅ Caché y Optimización

```bash
php artisan config:cache
php artisan route:cache
php artisan view:cache
php artisan optimize
```

- [ ] Config cache generado
- [ ] Route cache generado
- [ ] View cache generado
- [ ] Autoloader optimizado (composer --optimize-autoloader --no-dev)
- [ ] Assets compilados para producción (npm run build)

## ✅ Archivos Sensibles Protegidos

Estos archivos NO deben ser accesibles desde el navegador:

- [ ] `.env`
- [ ] `.git/`
- [ ] `composer.json`
- [ ] `composer.lock`
- [ ] `package.json`
- [ ] `artisan`
- [ ] Carpeta `storage/`
- [ ] Carpeta `bootstrap/`
- [ ] Carpeta `config/`
- [ ] Carpeta `database/`

**Probar accediendo**: 
- `https://digitaltex.com.ar/.env` → Debe dar 403 o 404
- `https://digitaltex.com.ar/composer.json` → Debe dar 403 o 404

## ✅ Logs y Monitoreo

- [ ] `LOG_LEVEL=error` en producción
- [ ] `LOG_CHANNEL` configurado correctamente
- [ ] Logs no excesivos para no llenar disco
- [ ] Revisar `storage/logs/` regularmente

## ✅ Sesiones y Cookies

- [ ] `SESSION_DRIVER=database` (más seguro que file)
- [ ] `SESSION_DOMAIN` configurado correctamente
- [ ] `SESSION_SECURE_COOKIE=true` (si usas HTTPS)
- [ ] `SESSION_LIFETIME` apropiado (120 minutos por defecto)

## ✅ CSRF Protection

- [ ] `@csrf` en todos los formularios
- [ ] Token CSRF validándose correctamente
- [ ] Sin errores 419 en formularios

## ✅ Correo Electrónico

- [ ] SMTP configurado correctamente
- [ ] Credenciales de correo seguras
- [ ] `MAIL_FROM_ADDRESS` usando dominio real
- [ ] Prueba de envío exitosa

## ✅ Rendimiento

- [ ] OPcache habilitado en PHP
- [ ] Cache de sesiones en database
- [ ] Cache de configuración en producción
- [ ] Assets minificados (vite build)
- [ ] Imágenes optimizadas
- [ ] CDN configurado (si aplica)

## ✅ Backup

- [ ] Backup automático de base de datos configurado
- [ ] Backup de archivos de storage/ configurado
- [ ] Procedimiento de restauración documentado y probado

## ✅ Headers de Seguridad

Verificar que estos headers están configurados en .htaccess:

```
X-Frame-Options: SAMEORIGIN
X-Content-Type-Options: nosniff
X-XSS-Protection: 1; mode=block
Referrer-Policy: strict-origin-when-cross-origin
```

**Probar en**: https://securityheaders.com/

## ✅ Firewall y Protección

- [ ] Firewall de Hostinger activado (si está disponible)
- [ ] Protección contra DDoS activa
- [ ] Fail2ban o similar para intentos de login
- [ ] Rate limiting en rutas críticas

## ✅ Actualizaciones

- [ ] PHP actualizado a última versión estable
- [ ] Laravel actualizado a última versión estable
- [ ] Dependencias de Composer actualizadas
- [ ] Dependencias de NPM actualizadas
- [ ] Parches de seguridad aplicados

## ✅ Pruebas Finales

- [ ] Sitio accesible desde https://digitaltex.com.ar
- [ ] Todas las rutas funcionan correctamente
- [ ] Formularios funcionan sin errores
- [ ] Subida de archivos funciona (si aplica)
- [ ] Emails se envían correctamente
- [ ] No hay errores en consola del navegador
- [ ] No hay errores en `storage/logs/laravel.log`
- [ ] Respuesta del servidor es rápida (< 2 segundos)

## 🔍 Comandos para Verificar

### Verificar versión de PHP
```bash
php -v
```

### Verificar permisos
```bash
ls -la storage/
ls -la bootstrap/cache/
```

### Ver logs en tiempo real
```bash
tail -f storage/logs/laravel.log
```

### Verificar estado de caché
```bash
php artisan config:show
php artisan route:list
```

### Limpiar todo el caché
```bash
php artisan cache:clear
php artisan config:clear
php artisan route:clear
php artisan view:clear
```

## 🚨 En Caso de Problemas

1. **Activar debug temporalmente**:
   ```env
   APP_DEBUG=true
   ```
   
2. **Revisar logs**:
   ```bash
   tail -100 storage/logs/laravel.log
   ```

3. **Verificar permisos**:
   ```bash
   chmod -R 755 storage bootstrap/cache
   ```

4. **Limpiar caché**:
   ```bash
   php artisan optimize:clear
   ```

5. **Revisar configuración PHP**:
   - memory_limit (mínimo 128M)
   - max_execution_time (mínimo 60)
   - upload_max_filesize
   - post_max_size

---

**Fecha de última revisión**: _______________________

**Revisado por**: _______________________

**Próxima revisión programada**: _______________________
