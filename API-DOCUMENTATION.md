# API Endpoints - DigitalTex

Base URL: `http://localhost:8000/api`

## Autenticación Admin

### Login
```http
POST /admin/login
Content-Type: application/json

{
  "email": "admin@digitaltex.com",
  "password": "admin123"
}

Response:
{
  "message": "Login exitoso",
  "user": {
    "id": 1,
    "name": "Admin",
    "email": "admin@digitaltex.com"
  },
  "token": "1|xxxxxxxxxxxx"
}
```

### Logout
```http
POST /admin/logout
Authorization: Bearer {token}

Response:
{
  "message": "Sesión cerrada correctamente"
}
```

### Get Current User
```http
GET /admin/me
Authorization: Bearer {token}

Response:
{
  "user": {
    "id": 1,
    "name": "Admin",
    "email": "admin@digitaltex.com"
  }
}
```

## Productos (Protegido - Requiere Auth)

### Listar todos los productos
```http
GET /admin/products
Authorization: Bearer {token}

Response:
{
  "products": [
    {
      "id": 1,
      "name": "Tela Sublimable",
      "description": "Tela para sublimación",
      "price": "150.00",
      "category": "telas",
      "image": "products/xxxxx.jpg",
      "stock": 100,
      "is_active": true,
      "created_at": "2026-01-13T00:00:00.000000Z",
      "updated_at": "2026-01-13T00:00:00.000000Z"
    }
  ]
}
```

### Crear producto
```http
POST /admin/products
Authorization: Bearer {token}
Content-Type: multipart/form-data

name: string (required)
description: string (optional)
price: number (required)
category: string (optional)
image: file (optional, max 2MB)
stock: integer (optional)
is_active: boolean (optional)

Response:
{
  "message": "Producto creado exitosamente",
  "product": {...}
}
```

### Ver producto específico
```http
GET /admin/products/{id}
Authorization: Bearer {token}

Response:
{
  "product": {...}
}
```

### Actualizar producto
```http
PUT/PATCH /admin/products/{id}
Authorization: Bearer {token}
Content-Type: multipart/form-data

name: string
description: string
price: number
category: string
image: file
stock: integer
is_active: boolean

Response:
{
  "message": "Producto actualizado exitosamente",
  "product": {...}
}
```

### Eliminar producto
```http
DELETE /admin/products/{id}
Authorization: Bearer {token}

Response:
{
  "message": "Producto eliminado exitosamente"
}
```

## Productos Públicos (Sin Auth)

### Listar productos
```http
GET /products

Response:
{
  "products": [...]
}
```

### Ver producto
```http
GET /products/{id}

Response:
{
  "product": {...}
}
```

## Credenciales de Admin

- **Email:** admin@digitaltex.com
- **Password:** admin123

## Notas Importantes

1. **Autenticación:** Todas las rutas `/admin/*` (excepto login) requieren el header `Authorization: Bearer {token}`
2. **CORS:** Configurado para aceptar peticiones de localhost:5173, localhost:3000
3. **Imágenes:** Las imágenes se almacenan en `storage/app/public/products` y son accesibles en `/storage/products/xxxxx.jpg`
4. **Base de datos:** SQLite (backend/database/database.sqlite)
