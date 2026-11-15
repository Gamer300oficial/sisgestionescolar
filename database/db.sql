

CREATE TABLE usuarios (
    id_usuario  INT (11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
    nombres   VARCHAR (255) NOT NULL,
    cargo     VARCHAR (255) NOT NULL,
    email     VARCHAR (255) NOT NULL UNIQUE KEY,
    password  TEXT NOT NULL,

    fyh_creacion DATETIME NULL,
    fyh_actualizacion DATETIME NULL,
    estado  VARCHAR(11)
)ENGINE=InnoDB;

INSERT INTO usuarios (nombres, cargo, email, password, fyh_creacion, estado)
VALUES ('Erick Dario', 'Administrador', 'admin@admin.com', '$1$.QV3xs0b$kkyO3s5oxZeDOOc4ehrZc1', '2026-11-12 18:20:10', "1");

CREATE TABLE roles (
    id_rol  INT (11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
    nombre_rol  VARCHAR (255) NOT NULL UNIQUE KEY,
    fyh_creacion DATETIME NULL,
    fyh_actualizacion DATETIME NULL,
    estado  VARCHAR(11)
)ENGINE=InnoDB;

INSERT INTO roles (nombre_rol, fyh_creacion, estado)
VALUES ('ADMINISTRADOR', '2026-11-12 18:20:10', "1");
INSERT INTO roles (nombre_rol, fyh_creacion, estado)
VALUES ('DIRECTOR ACADÉMICO', '2026-11-12 18:20:10', "1");

INSERT INTO roles (nombre_rol, fyh_creacion, estado)
VALUES ('DIRECTOR ADMINISTRATIVO', '2026-11-12 18:20:10', "1");

INSERT INTO roles (nombre_rol, fyh_creacion, estado)
VALUES ('CONTADOR', '2026-11-12 18:20:10', "1");

INSERT INTO roles (nombre_rol, fyh_creacion, estado)
VALUES ('SECRETARIA', '2026-11-12 18:20:10', "1");

