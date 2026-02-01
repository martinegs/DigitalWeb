# Despliegue desde Git a Hostinger - DigitalTex

## 📋 Estructura en Hostinger

En Hostinger, tu proyecto debe estar en la siguiente ubicación:

```
/home/u123456789/                          ← Directorio home del usuario
    └── public_html/                        ← RAÍZ de tu dominio
            ├── .htaccess                   ← Protección y redirección
            ├── .env                        ← Variables de entorno (CREAR)
            ├── artisan                     
            ├── composer.json
            ├── composer.lock
            ├── app/
            ├── bootstrap/
            ├── config/
            ├── database/
            ├── public/                     ← Document Root debe apuntar AQUÍ
            │   ├── index.php
            │   ├── .htaccess
            │   └── build/
            ├── resources/
            ├── routes/
            ├── storage/
            └── vendor/
```

### ⚠️ IMPORTANTE: Document Root

El **Document Root** de tu dominio debe apuntar a:
```
/home/u123456789/public_html/public
```

**NO** a `/home/u123456789/public_html/`

---

## 🔄 Método 1: Despliegue Manual desde Git (Recomendado)

### Paso 1: Preparar el proyecto localmente

```powershell
# Ejecutar el script de preparación
.\preparar-despliegue.ps1
```

### Paso 2: Subir a Git

```bash
# Agregar todos los cambios
git add .

# Commit con mensaje descriptivo
git commit -m "Preparar para producción en digitaltex.com.ar"

# Subir a tu repositorio (GitHub/GitLab/Bitbucket)
git push origin main
```

### Paso 3: Descargar en Hostinger

Conéctate por **SSH** a Hostinger:

```bash
ssh u123456789@digitaltex.com.ar -p 22
```

Una vez conectado:

```bash
# Navegar a public_html (o crear si no existe)
cd ~
cd public_html

# Clonar el repositorio
# Opción A: HTTPS (más fácil)
git clone https://github.com/tu-usuario/digitaltex.git .

# Opción B: SSH (requiere configurar SSH key)
git clone git@github.com:tu-usuario/digitaltex.git .

# NOTA: El punto (.) al final clona en el directorio actual
```

### Paso 4: Configurar en el servidor

```bash
# Instalar dependencias de Composer (si no están)
composer install --optimize-autoloader --no-dev

# Crear archivo .env
cp .env.example .env

# Editar .env con las credenciales reales
nano .env

# Generar APP_KEY
php artisan key:generate

# Configurar permisos
chmod -R 755 storage bootstrap/cache

# Optimizar Laravel
php artisan config:cache
php artisan route:cache
php artisan view:cache
```

---

## 🚀 Método 2: Despliegue Automático con GitHub Actions (Avanzado)

Crea el archivo `.github/workflows/deploy.yml` en tu repositorio:

```yaml
name: Deploy to Hostinger

on:
  push:
    branches: [ main ]

jobs:
  deploy:
    runs-on: ubuntu-latest
    
    steps:
    - uses: actions/checkout@v3
    
    - name: Setup PHP
      uses: shivammathur/setup-php@v2
      with:
        php-version: '8.2'
        
    - name: Install Composer dependencies
      run: composer install --optimize-autoloader --no-dev
      
    - name: Setup Node.js
      uses: actions/setup-node@v3
      with:
        node-version: '20'
        
    - name: Install NPM dependencies
      run: npm install
      
    - name: Build assets
      run: npm run build
      
    - name: Deploy to Hostinger via FTP
      uses: SamKirkland/FTP-Deploy-Action@4.3.3
      with:
        server: ftp.digitaltex.com.ar
        username: ${{ secrets.FTP_USERNAME }}
        password: ${{ secrets.FTP_PASSWORD }}
        server-dir: /public_html/
        exclude: |
          **/.git*
          **/.git*/**
          **/node_modules/**
          .env
```

**Configurar Secrets en GitHub**:
1. Ve a tu repositorio → Settings → Secrets → Actions
2. Agrega: `FTP_USERNAME` y `FTP_PASSWORD`

---

## 📦 Método 3: Despliegue por FTP (Sin Git en servidor)

### Opción A: Sincronizar con Git Desktop + FileZilla

1. **Commit y push** desde Git Desktop
2. **Conectar con FileZilla** a Hostinger:
   - Host: `ftp.digitaltex.com.ar`
   - Usuario: Tu usuario FTP
   - Contraseña: Tu contraseña FTP
   - Puerto: 21

3. **Subir archivos** a `/public_html/` excluyendo:
   - `.git/`
   - `node_modules/`
   - `.env`
   - `tests/`

### Opción B: Usar WinSCP para sincronización

1. Descargar [WinSCP](https://winscp.net/)
2. Configurar sincronización automática con tu repositorio local
3. Cada vez que hagas push, sincroniza con WinSCP

---

## 🔧 Configurar Document Root en Hostinger

### Paso a paso en hPanel:

1. **Iniciar sesión** en Hostinger
2. Ir a **Hosting** → Seleccionar tu plan
3. Ir a **Dominios**
4. Buscar **digitaltex.com.ar**
5. Click en **Configuración** o los 3 puntos (⋮)
6. Buscar **Document Root** o **Raíz del documento**
7. Cambiar a:
   ```
   /home/u123456789/public_html/public
   ```
   O simplemente:
   ```
   public_html/public
   ```
8. **Guardar** cambios
9. Esperar 1-5 minutos para que aplique

### Verificar Document Root

Crea un archivo de prueba en `public_html/public/test.php`:

```php
<?php
phpinfo();
```

Visita: `https://digitaltex.com.ar/test.php`

Si ves la información de PHP, el Document Root está correcto. **Elimina el archivo después**.

---

## 🔑 Configurar SSH Key para Git (Opcional)

Para clonar repositorios privados sin contraseña:

### En tu PC (Windows):

```powershell
# Generar SSH key
ssh-keygen -t ed25519 -C "tu@email.com"

# Copiar la clave pública
Get-Content ~/.ssh/id_ed25519.pub | clip
```

### En Hostinger (SSH):

```bash
# Crear carpeta .ssh si no existe
mkdir -p ~/.ssh
chmod 700 ~/.ssh

# Crear archivo de claves autorizadas
nano ~/.ssh/authorized_keys

# Pegar tu clave pública y guardar (Ctrl+O, Enter, Ctrl+X)

# Configurar permisos
chmod 600 ~/.ssh/authorized_keys
```

### En GitHub/GitLab:

1. Ve a Settings → SSH Keys
2. Pega tu clave pública
3. Guarda

Ahora puedes clonar con SSH sin contraseña.

---

## 🔄 Actualizar el Proyecto (Workflow completo)

### Desde tu PC:

```bash
# 1. Hacer cambios en el código
# 2. Probar localmente

# 3. Compilar assets
npm run build

# 4. Commit
git add .
git commit -m "Descripción de cambios"

# 5. Push
git push origin main
```

### En Hostinger (SSH):

```bash
# Conectar por SSH
ssh u123456789@digitaltex.com.ar

# Ir al directorio del proyecto
cd ~/public_html

# Descargar cambios
git pull origin main

# Si hay cambios en composer.json
composer install --optimize-autoloader --no-dev

# Si hay cambios en assets (ya compilados)
# No necesitas npm en el servidor

# Limpiar y optimizar caché
php artisan optimize:clear
php artisan config:cache
php artisan route:cache
php artisan view:cache

# Verificar permisos
chmod -R 755 storage bootstrap/cache
```

---

## 📁 Estructura Completa en Hostinger

```
/home/u123456789/                          ← Tu directorio home
│
├── public_html/                            ← Proyecto Laravel completo
│   ├── .env                                ← CREAR (no está en Git)
│   ├── .htaccess                           ← Del repositorio
│   ├── artisan
│   ├── composer.json
│   ├── composer.lock
│   │
│   ├── app/                                ← Código de aplicación
│   │   ├── Http/
│   │   ├── Models/
│   │   └── Providers/
│   │
│   ├── bootstrap/
│   │   └── cache/                          ← Permisos 755
│   │
│   ├── config/                             ← Configuración
│   │
│   ├── database/
│   │   └── migrations/
│   │
│   ├── public/                             ← ⚠️ Document Root apunta AQUÍ
│   │   ├── .htaccess                       ← Fuerza HTTPS
│   │   ├── index.php                       ← Punto de entrada
│   │   ├── robots.txt
│   │   └── build/                          ← Assets compilados
│   │       └── assets/
│   │
│   ├── resources/                          ← Vistas y assets fuente
│   │   ├── css/
│   │   ├── js/
│   │   └── views/
│   │
│   ├── routes/                             ← Rutas
│   │   ├── api.php
│   │   └── web.php
│   │
│   ├── storage/                            ← Permisos 755
│   │   ├── app/
│   │   ├── framework/
│   │   │   ├── cache/
│   │   │   └── sessions/
│   │   └── logs/
│   │
│   └── vendor/                             ← Dependencias Composer
│
├── logs/                                   ← Logs del servidor (creado por Hostinger)
├── tmp/                                    ← Temporal
└── .htpasswd                               ← Si usas protección adicional
```

---

## ✅ Checklist de Despliegue con Git

### Preparación Local:
- [ ] Código funcionando localmente
- [ ] `npm run build` ejecutado
- [ ] Commit realizado
- [ ] Push a GitHub/GitLab exitoso

### En Hostinger:
- [ ] Conexión SSH funcionando
- [ ] Repositorio clonado en `/public_html/`
- [ ] `composer install` ejecutado
- [ ] Archivo `.env` creado y configurado
- [ ] `APP_KEY` generada
- [ ] Permisos configurados (storage y bootstrap/cache)
- [ ] Document Root apunta a `/public_html/public`
- [ ] Caché optimizado

### Verificación:
- [ ] `https://digitaltex.com.ar` carga correctamente
- [ ] HTTPS funcionando
- [ ] Rutas funcionan
- [ ] No hay errores en `storage/logs/laravel.log`
- [ ] Assets (CSS/JS) cargan correctamente

---

## 🐛 Solución de Problemas

### Error: "Permission denied" al hacer git pull

```bash
# Verificar permisos del directorio
ls -la ~/public_html/.git

# Corregir propiedad
chown -R u123456789:u123456789 ~/public_html

# Verificar configuración Git
git config --global user.email "tu@email.com"
git config --global user.name "Tu Nombre"
```

### Error: "Could not resolve host"

Tu servidor no tiene acceso a Internet o Git no está instalado.

```bash
# Verificar Git
git --version

# Si no está instalado, contacta soporte de Hostinger
```

### Archivos no se actualizan después de git pull

```bash
# Limpiar todo el caché
php artisan optimize:clear

# Verificar que no hay conflictos
git status

# Forzar actualización (¡cuidado, sobrescribe cambios locales!)
git fetch --all
git reset --hard origin/main
```

### No puedo conectarme por SSH

1. Verifica que SSH está habilitado en tu plan de Hostinger
2. Verifica el puerto (normalmente 22)
3. Usa el usuario correcto: `u123456789` (no root)
4. Verifica tu contraseña

---

## 📞 Recursos

- **Hostinger SSH**: https://support.hostinger.com/es/articles/1583259
- **Git Documentation**: https://git-scm.com/docs
- **Laravel Deployment**: https://laravel.com/docs/11.x/deployment

---

## 💡 Tips Profesionales

### 1. Usar .gitignore correctamente
Ya configurado para excluir:
- `.env`
- `node_modules/`
- `vendor/` (opcional, depende del workflow)
- `public/build/` (si prefieres compilar en servidor)

### 2. No subir vendor/ a Git (Avanzado)
Si tu repositorio es muy grande por `vendor/`, puedes:
- Añadir `/vendor` a `.gitignore`
- Ejecutar `composer install` en el servidor después de cada pull
- Requiere Composer en el servidor

### 3. Variables de entorno por ambiente
- **Local**: `.env` con `APP_ENV=local`
- **Producción**: `.env` con `APP_ENV=production`
- Nunca subas `.env` a Git

### 4. Backup antes de actualizar
```bash
# Backup de la aplicación
cd ~
tar -czf backup-$(date +%Y%m%d).tar.gz public_html/

# Listar backups
ls -lh backup-*.tar.gz
```

---

¡Listo! Tu aplicación está configurada para despliegue con Git en Hostinger 🚀
