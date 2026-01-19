# Admin Panel - DigitalTex

Sistema de administración para gestión de productos integrado con Laravel API.

## 🚀 Características

- ✅ Autenticación con Laravel Sanctum
- ✅ CRUD completo de productos
- ✅ Subida de imágenes
- ✅ Dashboard moderno y responsive
- ✅ Protección de rutas
- ✅ API REST con Laravel

## 📦 Instalación

### Backend (Laravel)
```bash
cd backend
composer install
php artisan migrate
php artisan db:seed --class=AdminUserSeeder
php artisan serve
```

### Frontend (Vue.js)
```bash
npm install
npm run dev
```

## 🔐 Credenciales de Admin

- **URL:** http://localhost:5173/admin/login
- **Email:** admin@digitaltex.com
- **Password:** admin123

## 🛣️ Rutas Disponibles

### Frontend
- `/` - Página principal del sitio
- `/admin/login` - Login del administrador
- `/admin/dashboard` - Panel de administración (protegido)

### API Backend
- `POST /api/admin/login` - Iniciar sesión
- `POST /api/admin/logout` - Cerrar sesión
- `GET /api/admin/me` - Usuario actual
- `GET /api/admin/products` - Listar productos
- `POST /api/admin/products` - Crear producto
- `PUT /api/admin/products/{id}` - Actualizar producto
- `DELETE /api/admin/products/{id}` - Eliminar producto
- `GET /api/products` - Productos públicos

## 🎨 Stack Tecnológico

### Frontend
- Vue 3 (Composition API)
- Vue Router 4
- Axios
- Bootstrap 5
- Vite

### Backend
- Laravel 12
- Laravel Sanctum
- SQLite
- PHP 8.x

## 📝 Uso

1. Inicia el servidor Laravel:
   ```bash
   cd backend
   php artisan serve
   ```

2. En otra terminal, inicia el servidor de desarrollo:
   ```bash
   npm run dev
   ```

3. Accede a:
   - Sitio principal: http://localhost:5173
   - Admin panel: http://localhost:5173/admin/login

## 📸 Funcionalidades del Admin

### Login
- Autenticación segura con tokens
- Validación de credenciales
- Redirección automática

### Dashboard
- Vista de todos los productos
- Tabla responsive con información completa
- Búsqueda y filtros
- Acciones rápidas (editar/eliminar)

### Gestión de Productos
- Crear nuevos productos con imagen
- Editar productos existentes
- Eliminar productos
- Previsualización de imágenes
- Validación de formularios
- Estados activo/inactivo

## 🔒 Seguridad

- Autenticación con Laravel Sanctum
- Tokens de acceso seguros
- Rutas protegidas en frontend
- Middleware de autenticación en backend
- CORS configurado
- Validación de datos

## 🐛 Solución de Problemas

### Error de CORS
Verifica que el servidor Laravel esté corriendo en `http://localhost:8000` y que la configuración CORS en `backend/config/cors.php` incluya `http://localhost:5173`.

### Imágenes no se muestran
Ejecuta `php artisan storage:link` en el directorio backend.

### Token inválido
Limpia el localStorage del navegador o haz logout y login nuevamente.

## 📚 Documentación API

Ver [backend/API-DOCUMENTATION.md](backend/API-DOCUMENTATION.md) para documentación completa de la API.
