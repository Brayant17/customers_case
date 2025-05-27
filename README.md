
# 🧩 Customers Case - Proyecto PHP con JQuery

Este es un proyecto PHP que implementa un mini-router personalizado tipo MVC con namespaces, autoload con Composer y estructura profesional.

---

## ✅ Requisitos

- PHP 8.x (XAMPP ya lo incluye)
- Composer (instálalo desde [getcomposer.org](https://getcomposer.org/))

---

## 🚀 Instrucciones para correr el proyecto con XAMPP

### 1. Clona este repositorio dentro de la carpeta `htdocs` de XAMPP

```bash
cd C:\xampp\htdocs
git clone https://github.com/Brayant17/customers_case
```

---

### 2. Instala las dependencias de Composer

Abre una terminal (CMD, PowerShell o Git Bash) dentro del proyecto:

```bash
cd C:\xampp\htdocs\customers_case
composer install
```

---

### 3. Genera el autoload de Composer

```bash
composer dump-autoload
```

Esto asegura que Composer pueda cargar todas las clases correctamente.

---

### 4. Inicia Apache desde XAMPP

- Abre el panel de control de XAMPP
- Asegúrate de que Apache esté encendido

---

### 5. Accede al proyecto desde el navegador

Visita:

```
http://localhost/customers_case/
```


---

## 🗂️ Estructura del proyecto

```
customers_case/
├── composer.json
├── public/          
│   └──login.php
├── src/                    ← Código fuente (PSR-4)
│   ├── Controllers/
│   │   └── HomeController.php
│   └── MiniRouter.php
├── vendor/                 ← Se genera con Composer
├── index.php
├── README.md
└── .htaccess               ← Redirige automáticamente todo a /index/
```

---

## 🧪 Probar rutas

Algunas rutas disponibles:

- `/` → Página de inicio (`HomeController@index`)
- `/user/{id}` → Mostrar usuario con ID dinámico
- `/api/user/{id}` → Devuelve un JSON simulado
- `/form` → Ruta para POST

---

¿Problemas comunes?

- ¿Ves un listado de archivos? → Verifica que estés accediendo a `/public/` o que el `.htaccess esté activo.
- ¿Clases no encontradas? → Asegúrate de ejecutar `composer dump-autoload` y que los namespaces coincidan.

---

💬 Si tienes dudas, puedes abrir un issue o comunicarte con el equipo.
