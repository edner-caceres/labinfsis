/*==============================================================*/
/* DBMS name:      PostgreSQL 8                                 */
/* Created on:     11/04/2012 09:54:42 p.m.                     */
/*==============================================================*/



/*==============================================================*/
/* Table: asignaciones                                          */
/*==============================================================*/
create table asignaciones (
   id_equipo            int4                 not null,
   id_asignacion        serial               not null,
   id_laboratorio       int4                 not null,
   fecha_asignacion     date                 not null,
   fecha_retiro         date                 null,
   constraint pk_asignaciones primary key (id_asignacion)
);

/*==============================================================*/
/* Index: asignaciones_pk                                       */
/*==============================================================*/
create unique index asignaciones_pk on asignaciones (
id_asignacion
);

/*==============================================================*/
/* Index: asignado_fk                                           */
/*==============================================================*/
create  index asignado_fk on asignaciones (
id_equipo
);

/*==============================================================*/
/* Index: ambiente_asignado_fk                                  */
/*==============================================================*/
create  index ambiente_asignado_fk on asignaciones (
id_laboratorio
);

/*==============================================================*/
/* Table: cambios                                               */
/*==============================================================*/
create table cambios (
   id_componente        int4                 not null,
   id_cambio            serial               not null,
   fecha                date                 not null,
   descripcion          text                 not null,
   constraint pk_cambios primary key (id_cambio)
);

/*==============================================================*/
/* Index: cambios_pk                                            */
/*==============================================================*/
create unique index cambios_pk on cambios (
id_cambio
);

/*==============================================================*/
/* Index: registro_de_cambios_fk                                */
/*==============================================================*/
create  index registro_de_cambios_fk on cambios (
id_componente
);

/*==============================================================*/
/* Table: caracteristicas                                       */
/*==============================================================*/
create table caracteristicas (
   id_caracteristica    serial               not null,
   nombre_caracteristica varchar(100)         not null,
   descripcion_caracteristica varchar(255)         null,
   constraint pk_caracteristicas primary key (id_caracteristica)
);

/*==============================================================*/
/* Index: caracteristicas_pk                                    */
/*==============================================================*/
create unique index caracteristicas_pk on caracteristicas (
id_caracteristica
);

/*==============================================================*/
/* Table: componentes                                           */
/*==============================================================*/
create table componentes (
   id_componente        serial               not null,
   id_modelo            int4                 not null,
   id_fabricante        int4                 not null,
   id_equipo            int4                 null,
   id_pieza             int4                 null,
   id_estado            int4                 not null,
   numero_de_serie      varchar(50)          not null,
   constraint pk_componentes primary key (id_componente)
);

/*==============================================================*/
/* Index: componentes_pk                                        */
/*==============================================================*/
create unique index componentes_pk on componentes (
id_componente
);

/*==============================================================*/
/* Index: tiene_componentes_fk                                  */
/*==============================================================*/
create  index tiene_componentes_fk on componentes (
id_equipo
);

/*==============================================================*/
/* Index: tiene_piezas_fk                                       */
/*==============================================================*/
create  index tiene_piezas_fk on componentes (
id_pieza
);

/*==============================================================*/
/* Index: tiene_estado_fk                                       */
/*==============================================================*/
create  index tiene_estado_fk on componentes (
id_estado
);

/*==============================================================*/
/* Index: es_de_un_modelo_fk                                    */
/*==============================================================*/
create  index es_de_un_modelo_fk on componentes (
id_modelo
);

/*==============================================================*/
/* Index: fabrica_fk                                            */
/*==============================================================*/
create  index fabrica_fk on componentes (
id_fabricante
);

/*==============================================================*/
/* Table: cuentas                                               */
/*==============================================================*/
create table cuentas (
   id_cuenta            serial               not null,
   id_rol               int4                 not null,
   id_persona           int4                 not null,
   usuario              int4                 not null,
   contrasenia          char(40)             not null,
   fecha_registro       date                 not null,
   fecha_caducidad      date                 null,
   constraint pk_cuentas primary key (id_cuenta)
);

/*==============================================================*/
/* Index: cuentas_pk                                            */
/*==============================================================*/
create unique index cuentas_pk on cuentas (
id_cuenta
);

/*==============================================================*/
/* Index: acceso_persona_fk                                     */
/*==============================================================*/
create  index acceso_persona_fk on cuentas (
id_persona
);

/*==============================================================*/
/* Index: acceso_administracion_fk                              */
/*==============================================================*/
create  index acceso_administracion_fk on cuentas (
id_rol
);

/*==============================================================*/
/* Table: cursos                                                */
/*==============================================================*/
create table cursos (
   id_curso_            serial               not null,
   id_tipo              int4                 not null,
   nombre_curso         varchar(100)         not null,
   instructor           varchar(250)         not null,
   descripcion_curso    varchar(255)         null,
   constraint pk_cursos primary key (id_curso_)
);

/*==============================================================*/
/* Index: cursos_pk                                             */
/*==============================================================*/
create unique index cursos_pk on cursos (
id_curso_
);

/*==============================================================*/
/* Index: el_curso_es_de_tipo_fk                                */
/*==============================================================*/
create  index el_curso_es_de_tipo_fk on cursos (
id_tipo
);

/*==============================================================*/
/* Table: equipos                                               */
/*==============================================================*/
create table equipos (
   id_equipo            serial               not null,
   id_estado            int4                 not null,
   nia                  varchar(50)          not null,
   codigo               char(32)             not null,
   nombre_equipo        varchar(10)          not null,
   descripcion_equipo   varchar(255)         null,
   constraint pk_equipos primary key (id_equipo)
);

/*==============================================================*/
/* Index: equipos_pk                                            */
/*==============================================================*/
create unique index equipos_pk on equipos (
id_equipo
);

/*==============================================================*/
/* Index: esta_en_estado_fk                                     */
/*==============================================================*/
create  index esta_en_estado_fk on equipos (
id_estado
);

/*==============================================================*/
/* Table: estados                                               */
/*==============================================================*/
create table estados (
   id_estado            serial               not null,
   nombre_estado        varchar(250)         not null,
   descripcion_estado   varchar(255)         null,
   constraint pk_estados primary key (id_estado)
);

/*==============================================================*/
/* Index: estados_pk                                            */
/*==============================================================*/
create unique index estados_pk on estados (
id_estado
);

/*==============================================================*/
/* Table: fabricantes                                           */
/*==============================================================*/
create table fabricantes (
   id_fabricante        serial               not null,
   nombre_fabricante    varchar(100)         not null,
   descripcion_fabricante varchar(255)         null,
   constraint pk_fabricantes primary key (id_fabricante)
);

/*==============================================================*/
/* Index: fabricantes_pk                                        */
/*==============================================================*/
create unique index fabricantes_pk on fabricantes (
id_fabricante
);

/*==============================================================*/
/* Table: laboratorios                                          */
/*==============================================================*/
create table laboratorios (
   id_laboratorio       serial               not null,
   nombre_laboratorio   varchar(50)          not null,
   numero_de_equipos    int4                 not null,
   descripcion_laboratorio varchar(255)         null,
   constraint pk_laboratorios primary key (id_laboratorio)
);

/*==============================================================*/
/* Index: laboratorios_pk                                       */
/*==============================================================*/
create unique index laboratorios_pk on laboratorios (
id_laboratorio
);

/*==============================================================*/
/* Table: modelo                                                */
/*==============================================================*/
create table modelo (
   id_modelo            serial               not null,
   nombre_modelo        varchar(100)         not null,
   descripcion_marca    varchar(100)         null,
   constraint pk_modelo primary key (id_modelo)
);

/*==============================================================*/
/* Index: modelo_pk                                             */
/*==============================================================*/
create unique index modelo_pk on modelo (
id_modelo
);

/*==============================================================*/
/* Table: movimientos                                           */
/*==============================================================*/
create table movimientos (
   id_equipo            int4                 not null,
   id_asignacion        int4                 not null,
   id_movimientos       serial               not null,
   fecha_               date                 null,
   descripcion_del_movimiento varchar(255)         null,
   constraint pk_movimientos primary key (id_equipo, id_asignacion, id_movimientos)
);

/*==============================================================*/
/* Index: movimientos_pk                                        */
/*==============================================================*/
create unique index movimientos_pk on movimientos (
id_equipo,
id_asignacion,
id_movimientos
);

/*==============================================================*/
/* Index: seguimiento_fk                                        */
/*==============================================================*/
create  index seguimiento_fk on movimientos (
id_asignacion
);

/*==============================================================*/
/* Table: personas                                              */
/*==============================================================*/
create table personas (
   id_persona           serial               not null,
   ci                   char(10)             not null,
   nombres              varchar(50)          not null,
   apellido_paterno     varchar(50)          not null,
   apellido_materno     varchar(50)          null,
   email                varchar(100)         null,
   constraint pk_personas primary key (id_persona)
);

/*==============================================================*/
/* Index: personas_pk                                           */
/*==============================================================*/
create unique index personas_pk on personas (
id_persona
);

/*==============================================================*/
/* Table: piezas                                                */
/*==============================================================*/
create table piezas (
   id_pieza             serial               not null,
   nombre_pieza         varchar(50)          not null,
   pieza_interna        bool                 not null,
   descripcion_pieza    varchar(255)         not null,
   constraint pk_piezas primary key (id_pieza)
);

/*==============================================================*/
/* Index: piezas_pk                                             */
/*==============================================================*/
create unique index piezas_pk on piezas (
id_pieza
);

/*==============================================================*/
/* Table: propiedades                                           */
/*==============================================================*/
create table propiedades (
   id_propiedad         serial               not null,
   id_componente        int4                 not null,
   id_caracteristica    int4                 not null,
   valor                varchar(100)         not null,
   constraint pk_propiedades primary key (id_propiedad)
);

/*==============================================================*/
/* Index: propiedades_pk                                        */
/*==============================================================*/
create unique index propiedades_pk on propiedades (
id_propiedad
);

/*==============================================================*/
/* Index: titne_propiedad_fk                                    */
/*==============================================================*/
create  index titne_propiedad_fk on propiedades (
id_componente
);

/*==============================================================*/
/* Index: de_una_propiedad_fk                                   */
/*==============================================================*/
create  index de_una_propiedad_fk on propiedades (
id_caracteristica
);

/*==============================================================*/
/* Table: registros                                             */
/*==============================================================*/
create table registros (
   id_registro          serial               not null,
   id_cuenta            int4                 not null,
   id_persona           int4                 null,
   id_equipo            int4                 null,
   id_curso_            int4                 not null,
   hora_registro_inicio time                 null,
   hora_registro_fin    time                 null,
   observaciones_registro varchar(255)         null,
   constraint pk_registros primary key (id_registro)
);

/*==============================================================*/
/* Index: registros_pk                                          */
/*==============================================================*/
create unique index registros_pk on registros (
id_registro
);

/*==============================================================*/
/* Index: es_registrado_fk                                      */
/*==============================================================*/
create  index es_registrado_fk on registros (
id_persona
);

/*==============================================================*/
/* Index: es_usado_fk                                           */
/*==============================================================*/
create  index es_usado_fk on registros (
id_equipo
);

/*==============================================================*/
/* Index: para_un_curso_fk                                      */
/*==============================================================*/
create  index para_un_curso_fk on registros (
id_curso_
);

/*==============================================================*/
/* Index: es_registrado_por_fk                                  */
/*==============================================================*/
create  index es_registrado_por_fk on registros (
id_cuenta
);

/*==============================================================*/
/* Table: reviciones                                            */
/*==============================================================*/
create table reviciones (
   id_revision          serial               not null,
   id_equipo            int4                 not null,
   id_componente        int4                 not null,
   id_cuenta            int4                 not null,
   fecha_revision       date                 not null,
   observaciones        varchar(255)         not null,
   constraint pk_reviciones primary key (id_revision)
);

/*==============================================================*/
/* Index: reviciones_pk                                         */
/*==============================================================*/
create unique index reviciones_pk on reviciones (
id_revision
);

/*==============================================================*/
/* Index: lo_revizo_fk                                          */
/*==============================================================*/
create  index lo_revizo_fk on reviciones (
id_cuenta
);

/*==============================================================*/
/* Index: de_un_equipo_fk                                       */
/*==============================================================*/
create  index de_un_equipo_fk on reviciones (
id_equipo
);

/*==============================================================*/
/* Index: sus_componentes_fk                                    */
/*==============================================================*/
create  index sus_componentes_fk on reviciones (
id_componente
);

/*==============================================================*/
/* Table: roles                                                 */
/*==============================================================*/
create table roles (
   id_rol               serial               not null,
   nombre_rol           varchar(50)          not null,
   descripcion_rol      varchar(255)         null,
   constraint pk_roles primary key (id_rol)
);

/*==============================================================*/
/* Index: roles_pk                                              */
/*==============================================================*/
create unique index roles_pk on roles (
id_rol
);

/*==============================================================*/
/* Table: tipos                                                 */
/*==============================================================*/
create table tipos (
   id_tipo              serial               not null,
   nombre_tipo          varchar(100)         not null,
   descripcion_tipo     varchar(255)         null,
   constraint pk_tipos primary key (id_tipo)
);

/*==============================================================*/
/* Index: tipos_pk                                              */
/*==============================================================*/
create unique index tipos_pk on tipos (
id_tipo
);

alter table asignaciones
   add constraint fk_asignaci_ambiente__laborato foreign key (id_laboratorio)
      references laboratorios (id_laboratorio)
      on delete restrict on update restrict;

alter table asignaciones
   add constraint fk_asignaci_asignado_equipos foreign key (id_equipo)
      references equipos (id_equipo)
      on delete restrict on update restrict;

alter table cambios
   add constraint fk_cambios_registro__componen foreign key (id_componente)
      references componentes (id_componente)
      on delete restrict on update restrict;

alter table componentes
   add constraint fk_componen_es_de_un__modelo foreign key (id_modelo)
      references modelo (id_modelo)
      on delete restrict on update restrict;

alter table componentes
   add constraint fk_componen_fabrica_fabrican foreign key (id_fabricante)
      references fabricantes (id_fabricante)
      on delete restrict on update restrict;

alter table componentes
   add constraint fk_componen_tiene_com_equipos foreign key (id_equipo)
      references equipos (id_equipo)
      on delete restrict on update restrict;

alter table componentes
   add constraint fk_componen_tiene_est_estados foreign key (id_estado)
      references estados (id_estado)
      on delete restrict on update restrict;

alter table componentes
   add constraint fk_componen_tiene_pie_piezas foreign key (id_pieza)
      references piezas (id_pieza)
      on delete restrict on update restrict;

alter table cuentas
   add constraint fk_cuentas_acceso_ad_roles foreign key (id_rol)
      references roles (id_rol)
      on delete restrict on update restrict;

alter table cuentas
   add constraint fk_cuentas_acceso_pe_personas foreign key (id_persona)
      references personas (id_persona)
      on delete restrict on update restrict;

alter table cursos
   add constraint fk_cursos_el_curso__tipos foreign key (id_tipo)
      references tipos (id_tipo)
      on delete restrict on update restrict;

alter table equipos
   add constraint fk_equipos_esta_en_e_estados foreign key (id_estado)
      references estados (id_estado)
      on delete restrict on update restrict;

alter table movimientos
   add constraint fk_movimien_seguimien_asignaci foreign key (id_asignacion)
      references asignaciones (id_asignacion)
      on delete restrict on update restrict;

alter table propiedades
   add constraint fk_propieda_de_una_pr_caracter foreign key (id_caracteristica)
      references caracteristicas (id_caracteristica)
      on delete restrict on update restrict;

alter table propiedades
   add constraint fk_propieda_titne_pro_componen foreign key (id_componente)
      references componentes (id_componente)
      on delete restrict on update restrict;

alter table registros
   add constraint fk_registro_es_regist_personas foreign key (id_persona)
      references personas (id_persona)
      on delete restrict on update restrict;

alter table registros
   add constraint fk_registro_es_regist_cuentas foreign key (id_cuenta)
      references cuentas (id_cuenta)
      on delete restrict on update restrict;

alter table registros
   add constraint fk_registro_es_usado_equipos foreign key (id_equipo)
      references equipos (id_equipo)
      on delete restrict on update restrict;

alter table registros
   add constraint fk_registro_para_un_c_cursos foreign key (id_curso_)
      references cursos (id_curso_)
      on delete restrict on update restrict;

alter table reviciones
   add constraint fk_revicion_de_un_equ_equipos foreign key (id_equipo)
      references equipos (id_equipo)
      on delete restrict on update restrict;

alter table reviciones
   add constraint fk_revicion_lo_revizo_cuentas foreign key (id_cuenta)
      references cuentas (id_cuenta)
      on delete restrict on update restrict;

alter table reviciones
   add constraint fk_revicion_sus_compo_componen foreign key (id_componente)
      references componentes (id_componente)
      on delete restrict on update restrict;

