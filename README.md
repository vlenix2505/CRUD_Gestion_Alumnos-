# Sistema CRUD para Gestión de Estudiantes

Este proyecto es un **Sistema CRUD (Crear, Leer, Actualizar, Eliminar)** desarrollado en **PHP, MySQL, CSS, HTML y JavaScript**. Está diseñado para gestionar los registros de estudiantes, ofreciendo una interfaz de usuario funcional, sencilla y adaptada para entornos **responsive**.

![fotoCRUD](https://github.com/user-attachments/assets/9a550338-7e4f-4b10-ac3a-5579521ae44f)

---

## 🚀 Funcionalidades

- **Crear** nuevos registros de estudiantes.
- **Leer** y visualizar la lista de estudiantes.
- **Actualizar** información existente de un estudiante.
- **Eliminar** registros cuando sea necesario.
- **Diseño responsive** para dispositivos móviles y de escritorio.

---

## 🛠️ Tecnologías Utilizadas

- **Backend**: PHP y MySQL.
- **Frontend**: HTML, CSS y JavaScript.
- **Interfaz Responsive**: Utiliza CSS para adaptar el diseño a diferentes tamaños de pantalla.

---

## 📂 Estructura del Proyecto

```plaintext
.
├── config/               # Configuración del sistema (bases de datos y claves, ignorado en Git).
├── css/                  # Estilos CSS.
├── img/                  # Imágenes utilizadas en la interfaz.
├── js/                   # Scripts JavaScript para la funcionalidad.
│   └── main.js           # Archivo principal de scripts.
├── .idea/                # Archivos de configuración del IDE (algunos ignorados en Git).
├── delete.php            # Eliminar un registro.
├── index.php             # Página principal (listado de estudiantes).
├── insert.php            # Crear un nuevo registro.
├── update.php            # Actualizar un registro existente.
└── .gitignore            # Archivos/carpetas excluidos del repositorio.
```
---
## ⚙️ Pasos para Instalar

### **Requisitos**
- **Servidor web** compatible con PHP (Ej.: XAMPP, WAMP o LAMP).
- **Base de datos MySQL**.

### **Instrucciones**
1. **Clona este repositorio** en tu máquina local:
   
   ```bash
   git clone https://github.com/tu-usuario/tu-repositorio.git
   
3. **Importa la base de datos:**
- Accede a phpMyAdmin o cualquier cliente MySQL.
- Crea una base de datos con el nombre deseado.
- Importa el archivo SQL correspondiente (si lo tienes).

![fotoCRUDBD](https://github.com/user-attachments/assets/2bf79650-aa89-445e-bcdc-fa22975834a8)

  
3. **Configura las credenciales de conexión a la base de datos:**
- Abre el archivo:
  
  ```bash  
  config/config.php.
- Ajusta los parámetros según tu configuración local:
  
  ```bash  
  <?php
  $servername = "localhost";
  $username = "tu_usuario";
  $password = "tu_contraseña";
  $dbname = "nombre_de_tu_base_de_datos";
  ?>
  ```
4. **Inicia el servidor web:**
- Si estás usando XAMPP, asegúrate de que Apache y MySQL estén corriendo.
- Copia el proyecto dentro del directorio htdocs (en caso de XAMPP).

5. **Accede al sistema desde tu navegador:**
- Abre tu navegador y visita:
  
  ```bash
  http://localhost/carpeta-del-proyecto

