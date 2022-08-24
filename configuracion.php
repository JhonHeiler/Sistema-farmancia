<?php

$modulos = [];

$modulos["inicio"] = [
    "ruta" => "modulos/inicio/",
    "acciones" => [
        "ver" => [
            "archivo" => "",
            "diseño" => "horizontal",
            "contenido" => "inicio"
        ]
    ]
];

$modulos["mision"] = [
    "ruta" => "modulos/mision/",
    "acciones" => [
        "ver" => [
            "archivo" => "",
            "diseño" => "horizontal",
            "contenido" => "mision"
        ]
    ]
];

$modulos["vision"] = [
    "ruta" => "modulos/vision/",
    "acciones" => [
        "ver" => [
            "archivo" => "",
            "diseño" => "horizontal",
            "contenido" => "vision"
        ]
    ]
];

$modulos["presentacion"] = [
    "ruta" => "modulos/presentacion/",
    "acciones" => [
        "ver" => [
            "archivo" => "",
            "diseño" => "horizontal",
            "contenido" => "presentacion"
        ]
    ]
];

$modulos["servicio"] = [
    "ruta" => "modulos/servicio/",
    "acciones" => [
        "ver" => [
            "archivo" => "",
            "diseño" => "horizontal",
            "contenido" => "servicio"
        ]
    ]
];

$modulos["sede"] = [
    "ruta" => "modulos/sede/",
    "acciones" => [
        "ver" => [
            "archivo" => "",
            "diseño" => "horizontal",
            "contenido" => "sede"
        ]
    ]
];



$modulos["iniciar-sesion"] = [
    "ruta" => "modulos/iniciar_sesion/",
    "acciones" => [
        "ver" => [
            "archivo" => "index.php",
            "diseño" => "horizontal"
        ],
        "iniciar" => [
            "archivo" => "iniciar.php",
            "diseño" => "json"
        ],
    ]
];


$modulos["cerrar-sesion"] = [
    "ruta" => "modulos/cerrar_sesion/",
    "acciones" => [
        "cerrar" => [
            "archivo" => "cerrar.php",
            "diseño" => "json"
        ] 
    ]
];




$modulos["persona"] = [
    "ruta" => "modulos/persona/",
    "verificar_permisos" => true,
    
    "acciones" => [
        "ver" => [
            "archivo" => "index.php",
            "diseño" => "horizontal"
        ],
        "listar" => [
            "archivo" => "listado.php",
            "diseño" => "html"
        ],

        "agregar" => [
            "archivo" => "guardar.php",
            "diseño" => "json"
        ],

        "modificar" => [
            "archivo" => "modificar.php",
            "diseño" => "json"
        ],

        "eliminar" => [
            "archivo" => "eliminar.php",
            "diseño" => "json"
        ],

        "cargar-datos" => [
            "archivo" => "cargar_datos.php",
            "diseño" => "json"
        ],



    ]
];



$modulos["laboratorio"] = [
    "ruta" => "modulos/laboratorio/",
    "verificar_permisos" => true,
    "acciones" => [
        "ver" => [
            "archivo" => "index.php",
            "diseño" => "horizontal"
        ],
        "listar" => [
            "archivo" => "listado.php",
            "diseño" => "html"
        ],

        "agregar" => [
            "archivo" => "guardar.php",
            "diseño" => "json"
        ],

        "modificar" => [
            "archivo" => "modificar.php",
            "diseño" => "json"
        ],

        "eliminar" => [
            "archivo" => "eliminar.php",
            "diseño" => "json"
        ],

        "cargar-datos" => [
            "archivo" => "cargar_datos.php",
            "diseño" => "json"
        ],



    ]
];


$modulos["pedido"] = [
    "ruta" => "modulos/pedido/",
    "verificar_permisos" => true,
    "acciones" => [
        "ver" => [
            "archivo" => "index.php",
            "diseño" => "horizontal"
        ],
        "listar" => [
            "archivo" => "listado.php",
            "diseño" => "html"
        ],

        "agregar" => [
            "archivo" => "guardar.php",
            "diseño" => "json"
        ],

        "modificar" => [
            "archivo" => "modificar.php",
            "diseño" => "json"
        ],

        "eliminar" => [
            "archivo" => "eliminar.php",
            "diseño" => "json"
        ],

        "cargar-datos" => [
            "archivo" => "cargar_datos.php",
            "diseño" => "json"
        ],



    ]
];

$modulos["empleado"] = [
    "ruta" => "modulos/empleado/",
     "verificar_permisos" => true,
   
    "acciones" => [
        "ver" => [
            "archivo" => "index.php",
            "diseño" => "horizontal"
        ],
        "listar" => [
            "archivo" => "listado.php",
            "diseño" => "html"
        ],

        "agregar" => [
            "archivo" => "guardar.php",
            "diseño" => "json"
        ],

        "modificar" => [
            "archivo" => "modificar.php",
            "diseño" => "json"
        ],

        "eliminar" => [
            "archivo" => "eliminar.php",
            "diseño" => "json"
        ],

        "cargar-datos" => [
            "archivo" => "cargar_datos.php",
            "diseño" => "json"
        ],
    ]
];





$modulos["contenido"] = [
    "ruta" => "modulos/contenido/",
    "verificar_permisos" => true,
    "acciones" => [
        "ver" => [
            "archivo" => "index.php",
            "diseño" => "horizontal"
        ],
        "listar" => [
            "archivo" => "listado.php",
            "diseño" => "html"
        ],

        "agregar" => [
            "archivo" => "agregar.php",
            "diseño" => "json"
        ],

        "modificar" => [
            "archivo" => "modificar.php",
            "diseño" => "json"
        ],

        "eliminar" => [
            "archivo" => "eliminar.php",
            "diseño" => "json"
        ],

        "cargar-datos" => [
            "archivo" => "cargar_datos.php",
            "diseño" => "json"
        ],
    ]
];

$modulos["reporte1"] = [
    "ruta" => "modulos/reporte1/",
    "acciones" => [
        "ver" => [
            "archivo" => "index.php",
            "diseño" => "horizontal" 
        ],
        "mostrar" => [
            "archivo" => "mostrar.php",
            "diseño" => "html" 
        ],
    ]
];


$modulos["reporte2"] = [
    "ruta" => "modulos/reporte2/",
    "acciones" => [
        "ver" => [
            "archivo" => "index.php",
            "diseño" => "horizontal" 
        ],
        "mostrar" => [
            "archivo" => "mostrar.php",
            "diseño" => "html" 
        ],
    ]
];



$modulos["reporte3"] = [
    "ruta" => "modulos/reporte3/",
    "acciones" => [
        "ver" => [
            "archivo" => "index.php",
            "diseño" => "horizontal" 
        ],
        "mostrar" => [
            "archivo" => "mostrar.php",
            "diseño" => "html" 
        ],
    ]
];



$modulos["reporte4"] = [
    "ruta" => "modulos/reporte4/",
    "acciones" => [
        "ver" => [
            "archivo" => "index.php",
            "diseño" => "horizontal" 
        ],
        "mostrar" => [
            "archivo" => "mostrar.php",
            "diseño" => "html" 
        ],
    ]
];

$modulos["reporte5"] = [
    "ruta" => "modulos/reporte5/",
    "acciones" => [
        "ver" => [
            "archivo" => "index.php",
            "diseño" => "horizontal" 
        ],
        "mostrar" => [
            "archivo" => "mostrar.php",
            "diseño" => "html" 
        ],
    ]
];

$modulos["reporte6"] = [
    "ruta" => "modulos/reporte6/",
    "acciones" => [
        "ver" => [
            "archivo" => "index.php",
            "diseño" => "horizontal" 
        ],
        "mostrar" => [
            "archivo" => "mostrar.php",
            "diseño" => "html" 
        ],
    ]
];


$modulos["reporte7"] = [
    "ruta" => "modulos/reporte7/",
    "acciones" => [
        "ver" => [
            "archivo" => "index.php",
            "diseño" => "horizontal" 
        ],
        "mostrar" => [
            "archivo" => "mostrar.php",
            "diseño" => "html" 
        ],
    ]
];

$modulos["reporte8"] = [
    "ruta" => "modulos/reporte8/",
    "acciones" => [
        "ver" => [
            "archivo" => "index.php",
            "diseño" => "horizontal" 
        ],
        "mostrar" => [
            "archivo" => "mostrar.php",
            "diseño" => "html" 
        ],
    ]
];

$modulos["reporte9"] = [
    "ruta" => "modulos/reporte9/",
    "acciones" => [
        "ver" => [
            "archivo" => "index.php",
            "diseño" => "horizontal" 
        ],
        "mostrar" => [
            "archivo" => "mostrar.php",
            "diseño" => "html" 
        ],
    ]
];

$modulos["reporte10"] = [
    "ruta" => "modulos/reporte10/",
    "acciones" => [
        "ver" => [
            "archivo" => "index.php",
            "diseño" => "horizontal" 
        ],
        "mostrar" => [
            "archivo" => "mostrar.php",
            "diseño" => "html" 
        ],
    ]
];


$modulos["reporte11"] = [
    "ruta" => "modulos/reporte11/",
    "acciones" => [
        "ver" => [
            "archivo" => "index.php",
            "diseño" => "horizontal" 
        ],
        "mostrar" => [
            "archivo" => "mostrar.php",
            "diseño" => "html" 
        ],
    ]
];

$modulos["reporte12"] = [
    "ruta" => "modulos/reporte12/",
    "acciones" => [
        "ver" => [
            "archivo" => "index.php",
            "diseño" => "horizontal" 
        ],
        "mostrar" => [
            "archivo" => "mostrar.php",
            "diseño" => "html" 
        ],
    ]
];

$modulos["reporte13"] = [
    "ruta" => "modulos/reporte13/",
    "acciones" => [
        "ver" => [
            "archivo" => "index.php",
            "diseño" => "horizontal" 
        ],
        "mostrar" => [
            "archivo" => "mostrar.php",
            "diseño" => "html" 
        ],
    ]
];

$modulos["reporte14"] = [
    "ruta" => "modulos/reporte14/",
    "acciones" => [
        "ver" => [
            "archivo" => "index.php",
            "diseño" => "horizontal" 
        ],
        "mostrar" => [
            "archivo" => "mostrar.php",
            "diseño" => "html" 
        ],
    ]
];

$modulos["reporte15"] = [
    "ruta" => "modulos/reporte15/",
    "acciones" => [
        "ver" => [
            "archivo" => "index.php",
            "diseño" => "horizontal" 
        ],
        "mostrar" => [
            "archivo" => "mostrar.php",
            "diseño" => "html" 
        ],
    ]
];


$modulos["modulo_accion"] = [
    "ruta" => "modulos/administracion/modulo_accion/",
    "verificar_permisos" => true,
    "acciones" => [
        "ver" => [
            "archivo" => "index.php",
            "diseño" => "horizontal"
        ],
        "listar" => [
            "archivo" => "listado.php",
            "diseño" => "html"
        ],

        "agregar" => [
            "archivo" => "guardar.php",
            "diseño" => "json"
        ],

        "modificar" => [
            "archivo" => "modificar.php",
            "diseño" => "json"
        ],

        "eliminar" => [
            "archivo" => "eliminar.php",
            "diseño" => "json"
        ],

        "cargar-datos" => [
            "archivo" => "cargar_datos.php",
            "diseño" => "json"
        ],
    ]
];


$modulos["permiso_rol"] = [
    "ruta" => "modulos/administracion/permiso_rol/",
    "verificar_permisos" => true,
    "acciones" => [
        "ver" => [
            "archivo" => "index.php",
            "diseño" => "horizontal"
        ],
        "listar" => [
            "archivo" => "listado.php",
            "diseño" => "html"
        ],

        "agregar" => [
            "archivo" => "registrar.php",
            "diseño" => "json"
        ],

        "modificar" => [
            "archivo" => "modificar.php",
            "diseño" => "json"
        ],

        "eliminar" => [
            "archivo" => "eliminar.php",
            "diseño" => "json"
        ],

        "cargar-datos" => [
            "archivo" => "mostrar.php",
            "diseño" => "json"
        ],
    ]
];


$modulos["persona_rol"] = [
    "ruta" => "modulos/administracion/persona_rol/",
    "verificar_permisos" => true,
    "acciones" => [
        "ver" => [
            "archivo" => "index.php",
            "diseño" => "horizontal"
        ],
        "listar" => [
            "archivo" => "listado.php",
            "diseño" => "html"
        ],

        "agregar" => [
            "archivo" => "agregar.php",
            "diseño" => "json"
        ],

        "modificar" => [
            "archivo" => "modificar.php",
            "diseño" => "json"
        ],

        "eliminar" => [
            "archivo" => "eliminar.php",
            "diseño" => "json"
        ],

        "cargar-datos" => [
            "archivo" => "mostrar.php",
            "diseño" => "json"
        ],
    ]
];

$modulos["rol"] = [
    "ruta" => "modulos/administracion/rol/",
    "verificar_permisos" => true,
    "acciones" => [
        "ver" => [
            "archivo" => "index.php",
            "diseño" => "horizontal"
        ],
        "listar" => [
            "archivo" => "listado.php",
            "diseño" => "html"
        ],

        "agregar" => [
            "archivo" => "guardar.php",
            "diseño" => "json"
        ],

        "modificar" => [
            "archivo" => "modificar.php",
            "diseño" => "json"
        ],

        "eliminar" => [
            "archivo" => "eliminar.php",
            "diseño" => "json"
        ],

        "cargar-datos" => [
            "archivo" => "cargar_datos.php",
            "diseño" => "json"
        ],
    ]
];


$modulos["sexo"] = [
    "ruta" => "modulos/sexo/",
    "verificar_permisos" => true,
    "acciones" => [
        "ver" => [
            "archivo" => "index.php",
            "diseño" => "horizontal"
        ],
        "listar" => [
            "archivo" => "listado.php",
            "diseño" => "html"
        ],

        "agregar" => [
            "archivo" => "guardar.php",
            "diseño" => "json"
        ],

        "modificar" => [
            "archivo" => "modificar.php",
            "diseño" => "json"
        ],

        "eliminar" => [
            "archivo" => "eliminar.php",
            "diseño" => "json"
        ],

        "cargar-datos" => [
            "archivo" => "cargar_datos.php",
            "diseño" => "json"
        ],
    ]
];



$modulos["tipo_identificacion"] = [
    "ruta" => "modulos/tipo_identificacion/",
    "verificar_permisos" => true,
    "acciones" => [
        "ver" => [
            "archivo" => "index.php",
            "diseño" => "horizontal"
        ],
        "listar" => [
            "archivo" => "listado.php",
            "diseño" => "html"
        ],

        "agregar" => [
            "archivo" => "guardar.php",
            "diseño" => "json"
        ],

        "modificar" => [
            "archivo" => "modificar.php",
            "diseño" => "json"
        ],

        "eliminar" => [
            "archivo" => "eliminar.php",
            "diseño" => "json"
        ],

        "cargar-datos" => [
            "archivo" => "cargar_datos.php",
            "diseño" => "json"
        ],
    ]
];







$modulos["mis_datos"] = [
    "ruta" => "modulos/mis_datos/",
    "verificar_permisos" => true,
    "acciones" => [
        "ver" => [
            "archivo" => "index.php",
            "diseño" => "horizontal"
       
 ],

        "guardar" => [
            "archivo" => "guardar.php",
            "diseño" => "json"
        ],

    
    ]
];



$modulos["producto"] = [
    "ruta" => "modulos/producto/",
    "verificar_permisos" => true,
    "acciones" => [
        "ver" => [
            "archivo" => "index.php",
            "diseño" => "horizontal"
        ],
        "listar" => [
            "archivo" => "listado.php",
            "diseño" => "html"
        ],

        "agregar" => [
            "archivo" => "guardar.php",
            "diseño" => "json"
        ],

        "modificar" => [
            "archivo" => "modificar.php",
            "diseño" => "json"
        ],

        "eliminar" => [
            "archivo" => "eliminar.php",
            "diseño" => "json"
        ],

        "cargar-datos" => [
            "archivo" => "cargar_datos.php",
            "diseño" => "json"
        ],
    ]
];




$modulos["proveedor"] = [
    "ruta" => "modulos/proveedor/",
    "verificar_permisos" => true,
    "acciones" => [
        "ver" => [
            "archivo" => "index.php",
            "diseño" => "horizontal"
        ],
        "listar" => [
            "archivo" => "listado.php",
            "diseño" => "html"
        ],

        "agregar" => [
            "archivo" => "guardar.php",
            "diseño" => "json"
        ],

        "modificar" => [
            "archivo" => "modificar.php",
            "diseño" => "json"
        ],

        "eliminar" => [
            "archivo" => "eliminar.php",
            "diseño" => "json"
        ],

        "cargar-datos" => [
            "archivo" => "cargar_datos.php",
            "diseño" => "json"
        ],
    ]
];



$modulos["tipo_presentacion"] = [
    "ruta" => "modulos/tipo_presentacion/",
    "verificar_permisos" => true,
    "acciones" => [
        "ver" => [
            "archivo" => "index.php",
            "diseño" => "horizontal"
        ],
        "listar" => [
            "archivo" => "listado.php",
            "diseño" => "html"
        ],

        "agregar" => [
            "archivo" => "guardar.php",
            "diseño" => "json"
        ],

        "modificar" => [
            "archivo" => "modificar.php",
            "diseño" => "json"
        ],

        "eliminar" => [
            "archivo" => "eliminar.php",
            "diseño" => "json"
        ],

        "cargar-datos" => [
            "archivo" => "cargar_datos.php",
            "diseño" => "json"
        ],
    ]
];

/*MIS DATOS*/

$modulos["datos_personales"] = [
    "ruta" => "modulos/mis_datos/datos_personales/",
    "verificar_permisos" => true,
    "acciones" => [
        "ver" => [
            "archivo" => "index.php",
            "diseño" => "horizontal"
        ],

        "modificar" => [
            "archivo" => "modificar.php",
            "diseño" => "json"
        ]
    ]
];

$modulos["cambiar_clave"] = [
    "ruta" => "modulos/mis_datos/cambiar_clave/",
    "verificar_permisos" => true,
    "acciones" => [
        "ver" => [
            "archivo" => "index.php",
            "diseño" => "horizontal"
        ],

        "modificar" => [
            "archivo" => "modificar.php",
            "diseño" => "json"
        ]
    ]
];