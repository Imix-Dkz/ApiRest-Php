# ApiRest-Php
Ejemplo simple de una API REST en PHP

Este es un ejercicio simple para la puesta en practica de una API Rest en PHP

## Que es una **API**(_Application Programming Interface_)?
Como su nombre lo indica, es una interfaz para **comunicación**, puede ser entre disitintos sistemas de software ó incluso plataformas, lo importante es el proceso de comunicación entre uno y otro.
Un Ejemplo común es el de un mesero que va por las ordenes listadas en el menú para los comensales

## Que es una **RESTful API**?
Es un tipo especifico de _API_ que sigue una serie de principios de Transferencia de Estado Representacional( **RE**presentational **S**tate **T**ransfer, REST)
Siguiendo el ejemplo del restaurante, notamos lo siguiente:
1. **Client-Server Architecture:** La arquitectura cliente-servidor que asemeja la operación de un mesero con el cliente, indica una clara separación del proceso de solicitud de ordenes, como del producto final entregado
2. **Statelessness:** _Apatridia_ o _Apátrida_(es una persona o recurso que no tiene pátria o dependencia a una nacionalidad), cada solicitud tiene que tener todo lo necesario a nivel de información para ser entregada de forma completa. Tampoco es necesario tener recuento historico de las ordenes previas.
3. **Resourse-Based:** Basado en recursos, indica que como las opciones de un menú se púeden indentificar y seccionar las _URL's_(**U**niform **R**esource **L**ocators) de forma clara para separar opciones, como platillos-principales, bebidas y postres
4. **CRUD Operations:** Una RESTful-API, normalmente soporta las 4 operaciones principales que son Crear, Leer, Actualizar y Eliminar(**C**reate, **R**ead, **U**pdate **D**elete). Esto, siguiendo el ejemplo del restaurante seria algo como, agregar nuevos platillos, revisar los existentes, actualizar precios y remover platillos
5. **Uniform Interface:** Las RESTful-API suelen contar con una Interface Uniforme estandarizada normalmente con el protocolo _HTTP_ y sus metodos GET, POST, PUT, DELETE, para realiuzar las acciones
6. **Representation:** Hace referencia a la representación de datos, usualmente en un formato que el cliente pueda manejar, como XML o JSON

El origen de este ejercicio parte del vídeo _"Como crear una API Rest en PHP paso a paso"_, del canal: **Garaje de Ideas**
* https://www.youtube.com/watch?v=QJfRtxxJ1TA
* En este ejemplo se usa RapidAPI para realizar pruebas, pero debido a que tiene un periodo de prueba se usará POSTman


## [Nota]
 * La principal diferencia con el curso del video, es que la forma de llamar las variables de conexión, aw hace por segurida con un archivo arreglo que está oculto, pero solo hay que mandar a hacer un archivo "env.php" dentro de include con la siguiente estructura...
> $dbConf['DB_CONN'] = "mysql";
> $dbConf['DB_HOSTp'] = "LOCALHOST:XXXX"; //ip:puerto
> $dbConf['DB_DATABASE'] = "DB_name";
> $dbConf['DB_USERNAME'] = "Usr_Name";
> $dbConf['DB_PASSWORD'] = "Psw";
