# Repositorio GitHub

- **…or create a new repository on the command line**
```bash
echo "# lms" >> README.md
git init
git add README.md
git commit -m "first commit"
git branch -M main
git remote add origin https://github.com/Neuronacomercial/lms.git
git push -u origin main
```

- **…or push an existing repository from the command line**
```bash
git remote add origin https://github.com/Neuronacomercial/lms.git
git branch -M main
git push -u origin main
```

# 🐳 Entorno Local WordPress con Docker Compose

Este entorno levanta un sitio WordPress utilizando tu carpeta `wp-content` personalizada, una base de datos MariaDB y una interfaz phpMyAdmin para administrar la base de datos fácilmente.

## 🚀 ¿Cómo usarlo?

1. Asegúrate de tener Docker y Docker Compose instalados.
2. Guarda el archivo `docker-compose.yml` en la raíz del proyecto.
3. Ejecuta:

   ```bash
   docker-compose up -d

## 🌐 Accede a las aplicaciones

- **WordPress:** [http://localhost:8000](http://localhost:8000)  
- **phpMyAdmin:** [http://localhost:8080](http://localhost:8080)

## 🔐 Credenciales por defecto

### phpMyAdmin

- **Servidor:** db  
- **Usuario:** root o wordpress  
- **Contraseña:**  
  - `root` para el usuario `root`  
  - `wordpress` para el usuario `wordpress`

## 🗂 Estructura esperada del proyecto

tu-proyecto/
│
├── wp-content/ # Tu carpeta personalizada desde GitHub
├── docker-compose.yml # Archivo de configuración
└── README.md # Este archivo

## 🧽 Para detener y limpiar los contenedores

```bash
docker-compose down
