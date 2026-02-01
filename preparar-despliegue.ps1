# Script de Pre-Despliegue
# Ejecutar este script ANTES de subir a Hostinger

Write-Host "=== DigitalTex - Preparación para Despliegue ===" -ForegroundColor Cyan
Write-Host ""

# 1. Verificar que estamos en el directorio correcto
if (-not (Test-Path "artisan")) {
    Write-Host "❌ Error: No se encuentra el archivo 'artisan'. Ejecuta este script desde la raíz del proyecto." -ForegroundColor Red
    exit 1
}

Write-Host "✅ Directorio correcto verificado" -ForegroundColor Green

# 2. Limpiar caché local
Write-Host "`n📦 Limpiando caché..." -ForegroundColor Yellow
php artisan cache:clear
php artisan config:clear
php artisan route:clear
php artisan view:clear

# 3. Instalar dependencias de producción
Write-Host "`n📦 Instalando dependencias de Composer (producción)..." -ForegroundColor Yellow
composer install --optimize-autoloader --no-dev --no-interaction

# 4. Instalar dependencias de Node
Write-Host "`n📦 Instalando dependencias de Node..." -ForegroundColor Yellow
npm install

# 5. Compilar assets para producción
Write-Host "`n🔨 Compilando assets para producción..." -ForegroundColor Yellow
npm run build

# 6. Verificar que build/ existe
if (-not (Test-Path "public/build")) {
    Write-Host "❌ Error: No se generó la carpeta public/build/" -ForegroundColor Red
    exit 1
}

Write-Host "✅ Assets compilados correctamente" -ForegroundColor Green

# 7. Verificar archivos críticos
Write-Host "`n🔍 Verificando archivos críticos..." -ForegroundColor Yellow

$archivos_criticos = @(
    ".env.example",
    "public/.htaccess",
    ".htaccess",
    "composer.json",
    "public/index.php"
)

$errores = 0
foreach ($archivo in $archivos_criticos) {
    if (Test-Path $archivo) {
        Write-Host "  ✅ $archivo" -ForegroundColor Green
    } else {
        Write-Host "  ❌ $archivo NO ENCONTRADO" -ForegroundColor Red
        $errores++
    }
}

if ($errores -gt 0) {
    Write-Host "`n❌ Faltan archivos críticos. Revisa tu proyecto." -ForegroundColor Red
    exit 1
}

# 8. Crear archivo de información de despliegue
$fecha = Get-Date -Format "yyyy-MM-dd HH:mm:ss"
$info = @"
# Información de Despliegue
Fecha de compilación: $fecha
Versión de PHP: $(php -v | Select-Object -First 1)
Versión de Composer: $(composer --version)
Versión de Node: $(node --version)
Versión de NPM: $(npm --version)
"@

$info | Out-File -FilePath "deployment-info.txt" -Encoding UTF8

Write-Host "`n✅ Archivo de información creado: deployment-info.txt" -ForegroundColor Green

# 9. Mostrar resumen de archivos a subir
Write-Host "`n📂 Carpetas principales a subir:" -ForegroundColor Cyan
Write-Host "  - app/" -ForegroundColor White
Write-Host "  - bootstrap/" -ForegroundColor White
Write-Host "  - config/" -ForegroundColor White
Write-Host "  - database/" -ForegroundColor White
Write-Host "  - public/" -ForegroundColor White
Write-Host "  - resources/" -ForegroundColor White
Write-Host "  - routes/" -ForegroundColor White
Write-Host "  - storage/" -ForegroundColor White
Write-Host "  - vendor/" -ForegroundColor White

Write-Host "`n📄 Archivos principales a subir:" -ForegroundColor Cyan
Write-Host "  - .htaccess (raíz)" -ForegroundColor White
Write-Host "  - .env.example (NO .env)" -ForegroundColor White
Write-Host "  - artisan" -ForegroundColor White
Write-Host "  - composer.json" -ForegroundColor White
Write-Host "  - composer.lock" -ForegroundColor White

Write-Host "`n⚠️  NO SUBIR:" -ForegroundColor Yellow
Write-Host "  - .env (crear nuevo en servidor)" -ForegroundColor Red
Write-Host "  - node_modules/" -ForegroundColor Red
Write-Host "  - .git/" -ForegroundColor Red
Write-Host "  - tests/" -ForegroundColor Red
Write-Host "  - temp_*.txt" -ForegroundColor Red

# 10. Resumen final
Write-Host "`n" -NoNewline
Write-Host "========================================" -ForegroundColor Green
Write-Host "✅ Preparación completada exitosamente" -ForegroundColor Green
Write-Host "========================================" -ForegroundColor Green

Write-Host "`n📋 Próximos pasos:" -ForegroundColor Cyan
Write-Host "  1. Revisa DESPLIEGUE-HOSTINGER.md" -ForegroundColor White
Write-Host "  2. Sube todos los archivos a Hostinger" -ForegroundColor White
Write-Host "  3. Configura la base de datos" -ForegroundColor White
Write-Host "  4. Crea el archivo .env en el servidor" -ForegroundColor White
Write-Host "  5. Ejecuta: php artisan key:generate" -ForegroundColor White
Write-Host "  6. Ejecuta: php artisan migrate --force" -ForegroundColor White
Write-Host "  7. Configura permisos de storage/ y bootstrap/cache/" -ForegroundColor White
Write-Host "  8. Revisa SEGURIDAD-CHECKLIST.md" -ForegroundColor White

Write-Host "`n🌐 Dominio: https://digitaltex.com.ar" -ForegroundColor Cyan
Write-Host ""
