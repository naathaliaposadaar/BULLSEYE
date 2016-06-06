-- Generado por Oracle SQL Developer Data Modeler 4.1.3.901
--   en:        2016-06-06 17:56:41 CLT
--   sitio:      Oracle Database 11g
--   tipo:      Oracle Database 11g




CREATE TABLE CATEGORIA
  (
    id_categoria INTEGER NOT NULL ,
    nombre       VARCHAR2 (30) NOT NULL
  ) ;
ALTER TABLE CATEGORIA ADD CONSTRAINT CATEGORIA_PK PRIMARY KEY ( id_categoria ) ;


CREATE TABLE CONTACTO
  (
    id_contacto      INTEGER NOT NULL ,
    email            VARCHAR2 (20) NOT NULL ,
    telefono         NUMBER (20) NOT NULL ,
    nombre           VARCHAR2 (15) NOT NULL ,
    apellido_paterno VARCHAR2 (15) NOT NULL ,
    apellido_materno VARCHAR2 (15) NOT NULL ,
    tipo_usuario     VARCHAR2 (7) NOT NULL ,
    telefono_celular NUMBER (20)
  ) ;
ALTER TABLE CONTACTO ADD CONSTRAINT CONTACTO_PK PRIMARY KEY ( id_contacto ) ;


CREATE TABLE DESPACHO
  (
    id_despacho INTEGER NOT NULL ,
    frecuencia  VARCHAR2
    --  ERROR: VARCHAR2 size not specified
    NOT NULL ,
    plazo_maximo_envio NUMBER (6) NOT NULL
  ) ;
ALTER TABLE DESPACHO ADD CONSTRAINT DESPACHO_PK PRIMARY KEY ( id_despacho ) ;


CREATE TABLE EMPRESA
  (
    id_empesa INTEGER NOT NULL ,
    rut       NUMBER (9) NOT NULL ,
    dv        NUMBER (1) NOT NULL ,
    nombre    VARCHAR2 (90) NOT NULL ,
    email     VARCHAR2 (30) NOT NULL ,
    direccion VARCHAR2 (50) NOT NULL ,
    catalogo BFILE ,
    foto                 INTEGER ,
    PAIS_id_pais         INTEGER NOT NULL ,
    CONTACTO_id_contacto INTEGER NOT NULL ,
    PRODUCTO_id_producto INTEGER NOT NULL
  ) ;
ALTER TABLE EMPRESA ADD CONSTRAINT empresa_PK PRIMARY KEY ( id_empesa ) ;


CREATE TABLE PAIS
  (
    id_pais          INTEGER NOT NULL ,
    nombre           VARCHAR2 (50) NOT NULL ,
    REGION_id_region INTEGER NOT NULL
  ) ;
ALTER TABLE PAIS ADD CONSTRAINT PAIS_PK PRIMARY KEY ( id_pais ) ;


CREATE TABLE PRODUCTO
  (
    id_producto            INTEGER NOT NULL ,
    nombre                 VARCHAR2 (30) NOT NULL ,
    stock                  INTEGER NOT NULL ,
    descripcion            VARCHAR2 (100) ,
    PROMOCION_id_promocion INTEGER NOT NULL ,
    SECCION_id_seccion     INTEGER NOT NULL ,
    DESPACHO_id_despacho   INTEGER NOT NULL
  ) ;
ALTER TABLE PRODUCTO ADD CONSTRAINT PRODUCTO_PK PRIMARY KEY ( id_producto ) ;


CREATE TABLE PROMOCION
  (
    id_promocion INTEGER NOT NULL ,
    porcentaje   NUMBER (3) NOT NULL
  ) ;
ALTER TABLE PROMOCION ADD CONSTRAINT PROMOCION_PK PRIMARY KEY ( id_promocion ) ;


CREATE TABLE REGION
  (
    id_region     INTEGER NOT NULL ,
    nombre        VARCHAR2 (30) NOT NULL ,
    codigo_postal VARCHAR2 (20) NOT NULL
  ) ;
ALTER TABLE REGION ADD CONSTRAINT REGION_PK PRIMARY KEY ( id_region ) ;


CREATE TABLE SECCION
  (
    id_seccion             INTEGER NOT NULL ,
    nombre                 VARCHAR2 (30) NOT NULL ,
    CATEGORIA_id_categoria INTEGER NOT NULL
  ) ;
ALTER TABLE SECCION ADD CONSTRAINT SECCION_PK PRIMARY KEY ( id_seccion ) ;


CREATE TABLE VENTA
  (
    id_venta             INTEGER NOT NULL ,
    descripcion          VARCHAR2 (300) ,
    unidades             INTEGER NOT NULL ,
    precio               NUMBER (999999) NOT NULL ,
    total_venta          NUMBER (999999) NOT NULL ,
    PRODUCTO_id_producto INTEGER NOT NULL
  ) ;
ALTER TABLE VENTA ADD CHECK ( unidades = 0) ;
ALTER TABLE VENTA ADD CONSTRAINT VENTA_PK PRIMARY KEY ( id_venta ) ;


ALTER TABLE EMPRESA ADD CONSTRAINT EMPRESA_CONTACTO_FK FOREIGN KEY ( CONTACTO_id_contacto ) REFERENCES CONTACTO ( id_contacto ) ;

ALTER TABLE EMPRESA ADD CONSTRAINT EMPRESA_PAIS_FK FOREIGN KEY ( PAIS_id_pais ) REFERENCES PAIS ( id_pais ) ;

ALTER TABLE EMPRESA ADD CONSTRAINT EMPRESA_PRODUCTO_FK FOREIGN KEY ( PRODUCTO_id_producto ) REFERENCES PRODUCTO ( id_producto ) ;

ALTER TABLE PAIS ADD CONSTRAINT PAIS_REGION_FK FOREIGN KEY ( REGION_id_region ) REFERENCES REGION ( id_region ) ;

ALTER TABLE PRODUCTO ADD CONSTRAINT PRODUCTO_DESPACHO_FK FOREIGN KEY ( DESPACHO_id_despacho ) REFERENCES DESPACHO ( id_despacho ) ;

ALTER TABLE PRODUCTO ADD CONSTRAINT PRODUCTO_PROMOCION_FK FOREIGN KEY ( PROMOCION_id_promocion ) REFERENCES PROMOCION ( id_promocion ) ON
DELETE CASCADE ;

ALTER TABLE PRODUCTO ADD CONSTRAINT PRODUCTO_SECCION_FK FOREIGN KEY ( SECCION_id_seccion ) REFERENCES SECCION ( id_seccion ) ;

ALTER TABLE SECCION ADD CONSTRAINT SECCION_CATEGORIA_FK FOREIGN KEY ( CATEGORIA_id_categoria ) REFERENCES CATEGORIA ( id_categoria ) ;

ALTER TABLE VENTA ADD CONSTRAINT VENTA_PRODUCTO_FK FOREIGN KEY ( PRODUCTO_id_producto ) REFERENCES PRODUCTO ( id_producto ) ;

CREATE SEQUENCE CONTACTO_id_contacto_SEQ START WITH 1 NOCACHE ORDER ;
CREATE OR REPLACE TRIGGER CONTACTO_id_contacto_TRG BEFORE
  INSERT ON CONTACTO FOR EACH ROW WHEN (NEW.id_contacto IS NULL) BEGIN :NEW.id_contacto := CONTACTO_id_contacto_SEQ.NEXTVAL;
END;
/

CREATE SEQUENCE DESPACHO_id_despacho_SEQ START WITH 1 NOCACHE ORDER ;
CREATE OR REPLACE TRIGGER DESPACHO_id_despacho_TRG BEFORE
  INSERT ON DESPACHO FOR EACH ROW WHEN (NEW.id_despacho IS NULL) BEGIN :NEW.id_despacho := DESPACHO_id_despacho_SEQ.NEXTVAL;
END;
/

CREATE SEQUENCE PAIS_id_pais_SEQ START WITH 1 NOCACHE ORDER ;
CREATE OR REPLACE TRIGGER PAIS_id_pais_TRG BEFORE
  INSERT ON PAIS FOR EACH ROW WHEN (NEW.id_pais IS NULL) BEGIN :NEW.id_pais := PAIS_id_pais_SEQ.NEXTVAL;
END;
/

CREATE SEQUENCE PRODUCTO_id_producto_SEQ START WITH 1 NOCACHE ORDER ;
CREATE OR REPLACE TRIGGER PRODUCTO_id_producto_TRG BEFORE
  INSERT ON PRODUCTO FOR EACH ROW WHEN (NEW.id_producto IS NULL) BEGIN :NEW.id_producto := PRODUCTO_id_producto_SEQ.NEXTVAL;
END;
/

CREATE SEQUENCE PROMOCION_id_promocion_SEQ START WITH 1 NOCACHE ORDER ;
CREATE OR REPLACE TRIGGER PROMOCION_id_promocion_TRG BEFORE
  INSERT ON PROMOCION FOR EACH ROW WHEN (NEW.id_promocion IS NULL) BEGIN :NEW.id_promocion := PROMOCION_id_promocion_SEQ.NEXTVAL;
END;
/

CREATE SEQUENCE REGION_id_region_SEQ START WITH 1 NOCACHE ORDER ;
CREATE OR REPLACE TRIGGER REGION_id_region_TRG BEFORE
  INSERT ON REGION FOR EACH ROW WHEN (NEW.id_region IS NULL) BEGIN :NEW.id_region := REGION_id_region_SEQ.NEXTVAL;
END;
/

CREATE SEQUENCE SECCION_id_seccion_SEQ START WITH 1 NOCACHE ORDER ;
CREATE OR REPLACE TRIGGER SECCION_id_seccion_TRG BEFORE
  INSERT ON SECCION FOR EACH ROW WHEN (NEW.id_seccion IS NULL) BEGIN :NEW.id_seccion := SECCION_id_seccion_SEQ.NEXTVAL;
END;
/

CREATE SEQUENCE VENTA_id_venta_SEQ START WITH 1 NOCACHE ORDER ;
CREATE OR REPLACE TRIGGER VENTA_id_venta_TRG BEFORE
  INSERT ON VENTA FOR EACH ROW WHEN (NEW.id_venta IS NULL) BEGIN :NEW.id_venta := VENTA_id_venta_SEQ.NEXTVAL;
END;
/


-- Informe de Resumen de Oracle SQL Developer Data Modeler: 
-- 
-- CREATE TABLE                            10
-- CREATE INDEX                             0
-- ALTER TABLE                             20
-- CREATE VIEW                              0
-- ALTER VIEW                               0
-- CREATE PACKAGE                           0
-- CREATE PACKAGE BODY                      0
-- CREATE PROCEDURE                         0
-- CREATE FUNCTION                          0
-- CREATE TRIGGER                           8
-- ALTER TRIGGER                            0
-- CREATE COLLECTION TYPE                   0
-- CREATE STRUCTURED TYPE                   0
-- CREATE STRUCTURED TYPE BODY              0
-- CREATE CLUSTER                           0
-- CREATE CONTEXT                           0
-- CREATE DATABASE                          0
-- CREATE DIMENSION                         0
-- CREATE DIRECTORY                         0
-- CREATE DISK GROUP                        0
-- CREATE ROLE                              0
-- CREATE ROLLBACK SEGMENT                  0
-- CREATE SEQUENCE                          8
-- CREATE MATERIALIZED VIEW                 0
-- CREATE SYNONYM                           0
-- CREATE TABLESPACE                        0
-- CREATE USER                              0
-- 
-- DROP TABLESPACE                          0
-- DROP DATABASE                            0
-- 
-- REDACTION POLICY                         0
-- 
-- ORDS DROP SCHEMA                         0
-- ORDS ENABLE SCHEMA                       0
-- ORDS ENABLE OBJECT                       0
-- 
-- ERRORS                                   1
-- WARNINGS                                 0
