<?php
    require_once('Database.class.php');

    class Client{
        public static function create_client($email, $name, $city, $telephone)
        {   //Función para creación de cliente

            //Se reciben los parametros y se crea la conexión a la BD
            $database = new Database();
            $conn = $database->getConnection();

            //Se preparan los datos recibidos con validación de seguridad...
            $stmt = $conn->prepare('INSERT INTO listado_clientes(email, name, city, telephone)
                VALUES(:email, :name, :city, :telephone)');
            $stmt->bindParam(':email',$email);
            $stmt->bindParam(':name',$name);
            $stmt->bindParam(':city',$city);
            $stmt->bindParam(':telephone',$telephone);

            //Se entregan Headers para responder a los resultados de la execución de la API
            if($stmt->execute())
                { header('HTTP/1.1 201 Cliente creado correctamente'); }
            else{ header('HTTP/1.1 404 Cliente no se ha creado correctamente'); }
        }

        public static function delete_client_by_id($id)
        {   //Función para Baja de cliente

            //Se recibe ID y se crea conexión
            $database = new Database();
            $conn = $database->getConnection();

            //Se perpara la sentencia de borrado usando el ID
            $stmt = $conn->prepare('DELETE FROM listado_clientes WHERE id=:id');
            $stmt->bindParam(':id',$id);
            //Se ejecuta comando
            if($stmt->execute())
                { header('HTTP/1.1 201 Cliente borrado correctamente'); }
            else{ header('HTTP/1.1 404 Cliente no se ha podido borrar correctamente'); }
        }

        public static function get_all_clients()
        {   //Regresa listado de clientes en arreglo

            //Se crea conexión
            $database = new Database();
            $conn = $database->getConnection();

            //Ahora la consulta es de listado de clientes
            $stmt = $conn->prepare('SELECT * FROM listado_clientes');
            if($stmt->execute()){
                $result = $stmt->fetchAll(); //Con fechAll para pasar todos los datos a un array
                echo json_encode($result); //Y así se pasan a un formato json los datos
                header('HTTP/1.1 201 OK');
            }else{ //En caso de error, arrojará el siguiente aviso
                header('HTTP/1.1 404 No se ha podido consultar los clientes');
            }
        }

        public static function update_client($id, $email, $name, $city, $telephone)
        {   //Función de actualización de DATOS

            //Se crea conexión a BD
            $database = new Database();
            $conn = $database->getConnection();

            
            $stmt = $conn->prepare('UPDATE listado_clientes SET email=:email, name=:name, city=:city, telephone=:telephone WHERE id=:id');
            $stmt->bindParam(':email',$email);
            $stmt->bindParam(':name',$name);
            $stmt->bindParam(':city',$city);
            $stmt->bindParam(':telephone',$telephone);
            //Es similar al de creación, pero se usa ID para validar el dato a actualizar
            $stmt->bindParam(':id',$id);

            if($stmt->execute())
                { header('HTTP/1.1 201 Cliente actualizado correctamente'); }
            else{ header('HTTP/1.1 404 Cliente no se ha podido actualizar correctamente'); }

        }
    }

?>