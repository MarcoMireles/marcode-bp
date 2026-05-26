# 🚀 Marcode Boilerplate

![Laravel](https://img.shields.io/badge/Laravel-FF2D20?style=for-the-badge&logo=laravel&logoColor=white)
![Filament](https://img.shields.io/badge/Filament-FFA116?style=for-the-badge&logo=laravel&logoColor=white)
![Stripe](https://img.shields.io/badge/Stripe-626CD9?style=for-the-badge&logo=stripe&logoColor=white)
![Tailwind](https://img.shields.io/badge/Tailwind_CSS-38B2AC?style=for-the-badge&logo=tailwind-css&logoColor=white)

Un **Starter Kit** de alto rendimiento diseñado para lanzar proyectos SaaS en tiempo récord. Olvídate de configurar la autenticación, los roles o la pasarela de pagos desde cero.

---

## 💎 Características Principales

- ⚡ **TALL Stack:** Laravel, Livewire 3, Alpine.js y Tailwind CSS.
- 🎨 **Filament v3:** Panel administrativo profesional pre-configurado.
- 🛡️ **RBAC:** Gestión avanzada de roles y permisos con Filament Shield.
- 💳 **Stripe Checkout:** Integración lista con Laravel Cashier para cobros únicos.
- 🛠️ **One-Command Setup:** Instalador personalizado para puesta en marcha instantánea.
- 🔐 **Seguridad:** Autenticación robusta vía Laravel Breeze.

---

## 🛠️ Requisitos del Sistema

- PHP 8.2 o superior
- Composer
- Node.js & NPM
- MySQL / PostgreSQL / SQLite

---

## 🚀 Instalación Paso a Paso

### 1. Clonar y Preparar

```bash
git clone https://github.com/MarcoMireles/marcode-bp.git
cd marcode-bp
composer install
npm install && npm run build
```

### 2. Configuración de Entorno

```bash
cp .env.example .env
php artisan key:generate
```

> [!IMPORTANT]
> No olvides configurar las credenciales de tu base de datos en el archivo `.env`.

### 3. Instalación Automática

Ejecuta nuestro comando inteligente para migrar tablas y generar permisos:

```bash
php artisan app:install
```

### 4. Acceso Total

Crea tu cuenta de Super Administrador para entrar al panel:

```bash
php artisan shield:super-admin
```

Accede en: `http://localhost/admin`

---

## 💳 Configuración de Pagos (Stripe)

Añade tus llaves de prueba en el archivo `.env`:

```env
STRIPE_KEY=pk_test_...
STRIPE_SECRET=sk_test_...
CASHIER_CURRENCY=usd
```

**Ejemplo de uso:**
El boilerplate ya incluye una ruta de prueba. Puedes usar el botón en el dashboard o llamar a la ruta directamente:

```php
// Redirige al checkout de Stripe
return redirect()->route('checkout.session');
```

---

## 📂 Estructura del Proyecto

| Directorio | Descripción |
|---|---|
| `app/Console/Commands` | Contiene `app:install` para setup rápido. |
| `app/Http/Controllers` | Controlador de pagos con Stripe Checkout. |
| `app/Policies` | Políticas de acceso generadas automáticamente. |
| `config/filament-shield` | Configuración del sistema de roles. |

---

## 🛠 Comandos Útiles

| Comando | Acción |
|---|---|
| `php artisan shield:generate --all` | Regenerar permisos para nuevos modelos. |
| `php artisan migrate:fresh --seed` | Limpiar y relanzar la base de datos. |
| `php artisan app:install` | Re-configurar el boilerplate. |

---

## 👤 Autor

Creado con ❤️ por Marco Mireles.

Si este proyecto te sirve de ayuda, ¡no olvides darle una ⭐ en GitHub!
