# Workflow de Git - DigitalTex

## 📋 Estructura de Ramas

### 🌿 Ramas Principales

```
main (producción)
  └── develop (desarrollo)
```

- **`main`**: Rama de producción, desplegada en https://digitaltex.com.ar
- **`develop`**: Rama de desarrollo donde trabajas en nuevas características

---

## 🔄 Flujo de Trabajo Diario

### 1. Trabajar en Desarrollo

```bash
# Asegurarte de estar en develop
git checkout develop

# Actualizar develop con los últimos cambios
git pull origin develop

# Hacer tus cambios en el código...

# Guardar cambios
git add .
git commit -m "Descripción de los cambios"

# Subir a develop
git push origin develop
```

### 2. Probar en Servidor de Desarrollo (Opcional)

Si tienes un subdominio para desarrollo como `dev.digitaltex.com.ar`:

```bash
# En SSH del servidor de desarrollo
cd /ruta/al/proyecto
git checkout develop
git pull origin develop
php artisan config:cache
```

### 3. Pasar Cambios a Producción

Cuando `develop` esté probado y listo para producción:

```bash
# Cambiar a main
git checkout main

# Traer los últimos cambios de main
git pull origin main

# Fusionar develop en main
git merge develop

# Resolver conflictos si los hay
# (Git te avisará si hay conflictos)

# Subir main a producción
git push origin main
```

### 4. Desplegar en Producción (Hostinger)

```bash
# Conectar por SSH a Hostinger
ssh u942345088@digitaltex.com.ar

# Ir al proyecto
cd /home/u942345088/domains/digitaltex.com.ar/public_html

# Asegurarte de estar en main
git checkout main

# Descargar cambios
git pull origin main

# Optimizar Laravel
php artisan config:cache
php artisan route:cache
php artisan view:cache

# Si hay cambios en composer.json
composer install --optimize-autoloader --no-dev
```

---

## 🚀 Comandos Rápidos

### Ver en qué rama estás
```bash
git branch
```

### Cambiar de rama
```bash
git checkout main      # Ir a main
git checkout develop   # Ir a develop
```

### Ver estado de cambios
```bash
git status
```

### Ver historial de commits
```bash
git log --oneline --graph --all
```

### Deshacer cambios no guardados
```bash
git restore archivo.php      # Deshacer cambios en un archivo
git restore .                # Deshacer todos los cambios
```

---

## 🌳 Crear Ramas para Características (Opcional)

Para características grandes, puedes crear ramas específicas:

```bash
# Crear rama desde develop
git checkout develop
git checkout -b feature/nueva-caracteristica

# Trabajar en la característica...
git add .
git commit -m "Agregar nueva característica"

# Subir la rama
git push origin feature/nueva-caracteristica

# Cuando esté lista, fusionar en develop
git checkout develop
git merge feature/nueva-caracteristica

# Subir develop actualizado
git push origin develop

# Eliminar la rama de característica (opcional)
git branch -d feature/nueva-caracteristica
git push origin --delete feature/nueva-caracteristica
```

---

## 📊 Esquema Visual del Workflow

```
┌─────────────────────────────────────────────────┐
│  Tu Computadora (Local)                         │
│                                                  │
│  develop ──────> Trabajas aquí diariamente      │
│     │                                            │
│     └──> Cuando esté listo                      │
│     │                                            │
│  main ──────> Fusionas develop aquí             │
│                                                  │
└─────────────────────────────────────────────────┘
                    │
                    │ git push
                    ▼
┌─────────────────────────────────────────────────┐
│  GitHub/GitLab (Remoto)                         │
│                                                  │
│  origin/develop                                 │
│  origin/main                                    │
│                                                  │
└─────────────────────────────────────────────────┘
                    │
                    │ git pull
                    ▼
┌─────────────────────────────────────────────────┐
│  Hostinger (Producción)                         │
│                                                  │
│  main ──────> https://digitaltex.com.ar        │
│                                                  │
└─────────────────────────────────────────────────┘
```

---

## ⚠️ Reglas Importantes

### ✅ Hacer
- Trabajar siempre en `develop` para desarrollo
- Hacer commits frecuentes con mensajes descriptivos
- Probar bien en `develop` antes de fusionar a `main`
- Siempre hacer `git pull` antes de empezar a trabajar

### ❌ NO Hacer
- NO trabajar directamente en `main` (solo para fusiones desde develop)
- NO hacer `git push --force` en main (puede romper producción)
- NO fusionar código sin probar
- NO subir archivos `.env` o credenciales

---

## 🔧 Configuración Inicial (Ya realizada)

```bash
# Crear rama develop (✅ Ya hecho)
git checkout -b develop
git push -u origin develop

# Proteger rama main en GitHub (Recomendado)
# Ir a: Settings → Branches → Add rule
# Branch name pattern: main
# ✓ Require pull request reviews before merging
```

---

## 📝 Ejemplo Completo de Workflow

### Lunes - Empiezas una nueva característica

```bash
git checkout develop
git pull origin develop

# Trabajas en tu código...
# Editas archivos, haces cambios...

git add .
git commit -m "Agregar formulario de contacto"
git push origin develop
```

### Martes - Continúas trabajando

```bash
git pull origin develop

# Más cambios...

git add .
git commit -m "Validación del formulario de contacto"
git push origin develop
```

### Miércoles - Listo para producción

```bash
# Cambiar a main
git checkout main
git pull origin main

# Fusionar develop
git merge develop

# Resolver conflictos si los hay
# Subir a producción
git push origin main

# Desplegar en Hostinger
ssh u942345088@digitaltex.com.ar
cd /home/u942345088/domains/digitaltex.com.ar/public_html
git pull origin main
php artisan config:cache
php artisan route:cache
php artisan view:cache
```

### Volver a develop para seguir trabajando

```bash
git checkout develop
```

---

## 🐛 Solución de Problemas

### Conflicto al fusionar
```bash
# Git te mostrará qué archivos tienen conflictos
git status

# Edita los archivos con conflictos
# Busca las marcas: <<<<<<< HEAD, =======, >>>>>>>
# Resuelve manualmente

# Después de resolver
git add .
git commit -m "Resolver conflictos de fusión"
```

### Olvidaste en qué rama estás
```bash
git branch
# La rama con * es la actual
```

### Quieres descartar todos los cambios locales
```bash
git reset --hard origin/develop
```

---

## 🎯 Resumen para el Día a Día

**Desarrollo diario:**
```bash
git checkout develop
git pull origin develop
# Hacer cambios
git add .
git commit -m "Descripción"
git push origin develop
```

**Subir a producción:**
```bash
git checkout main
git pull origin main
git merge develop
git push origin main
# SSH al servidor y hacer git pull
```

---

¡Listo! Ahora tienes un flujo de trabajo profesional con Git 🚀
