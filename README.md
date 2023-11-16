EL DESAFÍO
Desarrollar un sistema para administrar la información
de los estudiantes en una universidad. Dado que la universidad no dispone actualmente
de un sistema de gestión, se busca crear uno que posibilite registrar
estudiantes, carreras, materias y usuarios. Este sistema permitirá vincular a los estudiantes
con una carrera específica y llevar un registro histórico de su progreso académico.
El sistema deberá permitir:
1. Realizar ABM (alta,baja y modificación) de :
1.1. Alumnos con los siguientes datos: nombre , apellido , DNI,
carrera ,teléfono, número de legajo y estado(activo/inactivo).
1.2. Usuarios con los siguientes datos: nombre, correo y contraseña.
1.3. Carreras con los siguientes datos: nombre, duración(años).
1.4. Materias con los siguientes datos: nombre, carrera a la que pertenece, duración (cuatrimestral o anual), horas de cursado.
2. Realizar la búsqueda de alumnos por nombre, DNI y número de legajo.
3. Realizar el filtrado de alumnos según su estado. Estos son: activo o inactivo.
4. Realizar un ordenamiento por nombre alfabéticamente y número de legajo en orden ascendente o descendente de los alumnos.
5. Realizar el registro del estado de los alumnos según la materia. Para esto el usuario deberá ingresar el alumno, la materia, el estado (aprobado,desaprobado,regular o libre) y la fecha.
6. Visualizar a cada alumno y ver sus registros históricos. Además deberá permitir filtrar estos registros por materias y estados.
7. Descargar un listado de todos los alumnos.
NOTA: Para poder realizar el punto 7(siete) se recomienda utilizar un plugin. Además, se sugiere investigar sobre "seeders" para crear carreras y materias inicialmente.

## Installation
#### 1. Clonar el proyecto
```bash
git clone https://github.com/juancinfante/gestionUniversidad-Filament.git
```

#### 2. Ejecutar el comando: `composer install`

#### 3. Copia el archivo .env.example y pegarlo como .env. Puedes hacerlo ejecutando el comando `cp .env.example .env` en sistemas Unix o `copy .env.example` .env en sistemas Windows.

#### 4. Generar la Clave de Aplicación: `php artisan key:generate`

#### 5. Ejecutar el comando: `php artisan migrate` para aplicar las migraciones y crear las tablas necesarias en la base de datos

#### 6. Ejecutar el comando: `php artisan serve` para iniciar el servidor

![dashboard](https://github.com/juancinfante/gestionUniversidad-Filament/assets/48840855/6f052371-e26e-4fce-b8db-ea6fb1a15e2e)

![Alumnos](https://github.com/juancinfante/gestionUniversidad-Filament/assets/48840855/653d3ab9-c890-482d-9fa1-7ed606395e6a)

![Edit Alumnos](https://github.com/juancinfante/gestionUniversidad-Filament/assets/48840855/f3ff86e8-9fd7-4acf-b8a5-48287dde7911)

![carreras](https://github.com/juancinfante/gestionUniversidad-Filament/assets/48840855/078afe69-04e8-4871-bdd1-8b1801b310bb)

![materias](https://github.com/juancinfante/gestionUniversidad-Filament/assets/48840855/8fc40d1a-b050-42e8-b739-67840853f5c1)

![usuarios](https://github.com/juancinfante/gestionUniversidad-Filament/assets/48840855/22f072c8-b994-4b15-b842-294fc77154ed)



