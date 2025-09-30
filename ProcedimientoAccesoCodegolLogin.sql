DELIMITER //

CREATE PROCEDURE acceso(
    IN p_num_identificacion INT,
    IN p_contrasena VARCHAR(60)
)
BEGIN
    SELECT u.id_usuario, 
           u.nombre_completo, 
           r.rol_usuario
    FROM usuario u
    INNER JOIN detalles_usuario_rol d 
        ON u.id_usuario = d.id_usuario
    INNER JOIN rol r 
        ON r.id_rol = d.id_rol
    WHERE u.num_identificacion = p_num_identificacion
      AND u.contrasena = p_contrasena
    LIMIT 1;
END //

DELIMITER ;

ALTER TABLE usuario
MODIFY num_identificacion VARCHAR(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;

ALTER TABLE usuario
MODIFY contrasena VARCHAR(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
