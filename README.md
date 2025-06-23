# 📘 Proyecto Laravel – Curso de Arte Digital

Este proyecto es una landing page desarrollada en Laravel para promocionar un curso online ficticio de arte digital. Ha sido diseñado como parte de una prueba técnica orientada a evaluar tanto diseño visual como implementación técnica.

---

## 🎯 Objetivo del Proyecto

* Crear una landing page estética y funcional para un curso de arte digital.
* Enfocarse en una estructura visual clara, estilo minimalista retro e impacto visual.
* Aplicar los colores de marca: `#f0b80e`, `#000`, `#252525`, `#333333`.

---

## 📂 Requisitos Previos

Antes de comenzar, asegúreate de tener instalado lo siguiente:

* PHP ≥ 8.1
* Composer
* Laravel ≥ 10.x
* MySQL o MariaDB
* Node.js y npm
* XAMPP / Laravel Valet / Docker (según tu entorno de desarrollo)

---

## 🚀 Instalación y Puesta en Marcha

### Opción A – Clonar desde GitHub


git clone https://github.com/yepes99/landing_uas.git
cd curso-arte-digital-laravel


### Opción B – Descargar ZIP

1. Descarga el archivo ZIP desde el repositorio o medio proporcionado.
2. Extrae el contenido en tu entorno local.
3. Abre una terminal dentro de la carpeta extraída:


cd curso-arte-digital-laravel


### 1. Instalar dependencias PHP


composer install


### 2. Copiar el archivo de entorno


cp .env.example .env


### 3. Generar la clave de aplicación


php artisan key:generate


### 4. Configurar archivo `.env`

Edita el archivo `.env` para establecer tus datos de conexión a la base de datos:


DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=nombre_base_datos
DB_USERNAME=usuario
DB_PASSWORD=contraseña


### 5. Crear la base de datos
Puedes crearla manualmente desde MySQL Workbench, phpMyAdmin o línea de comandos.


### 6. Ejecutar migraciones 

php artisan migrate


### 7. Instalar dependencias frontend y compilar assets


npm install
npm run dev


> Para producción, usar:
npm run build


## 💻 Ejecutar el proyecto

Inicia el servidor local de Laravel:

php artisan serve


El proyecto estará disponible por defecto en:


http://127.0.0.1:8000




## 📷 Capturas de Pantalla / URL

![Captura de pantalla 2025-06-23 203031](https://github.com/user-attachments/assets/9ddd1647-74c0-4b4c-b9ed-cb92ad0335cd)

![Captura de pantalla 2025-06-23 203040](https://github.com/user-attachments/assets/5d692aa3-b7e8-495e-b63a-e389b95ebc26)

![Captura de pantalla 2025-06-23 203055](https://github.com/user-attachments/assets/27077762-850e-4fca-9985-1cf166c692d4)

![Captura de pantalla 2025-06-23 203104](https://github.com/user-attachments/assets/d22b4264-489f-4bfa-be0f-5726325c1fed)

![Captura de pantalla 2025-06-23 203117](https://github.com/user-attachments/assets/38e66cb0-aeee-477f-b23d-3ba16cdb014e)

![Captura de pantalla 2025-06-23 203111](https://github.com/user-attachments/assets/57252e3b-4135-4e5c-afbe-391de624032e)

![Captura de pantalla 2025-06-23 203123](https://github.com/user-attachments/assets/306a1cdd-d576-4635-8321-32ddef6e644b)


## 📝 Notas Adicionales

* Esta es una prueba técnica como parte de un proceso de selección.
* El proyecto también incluye una versión en WordPress (ver carpeta `wordpress/`).



## 📄 Licencia

Proyecto realizado con fines evaluativos. Uso libre bajo fines no comerciales.
