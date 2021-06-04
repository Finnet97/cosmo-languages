<?php
return [
/**
 * @TranslationFile ENGLISH
 * @authors Morgan, Zeo
 * @helpers [
        https://morgan-lee.cc - English / Base Translations
        https://zeodev.cc - Dutch
    ],
 * @file cosmo.php
 * @version 1.0.0

 * Welcome Translator!
 * Thank you for being one of the very few people willing to translate our new addon Cosmo.
 * This translation file is the only one you'll need to translate, as everything you need is located below.
 * Please take your time to ensure everything is correct and appropriate.
 * Upon sending this file back to the authors, please make sure to add your name next to the @helpers property so you can be properly credited.
 * With any notification messages and or success messages, please feel free to come up with your own slogan as long as it sends the same message.
 * if you see a string with a comment next to it, that's to give you more context.
 * Any string with a :variable name is referring to the variable passed into the message. (LEAVE THE VARIABLES)

 * How to translate
 * You'll see two strings, please only translate the string on the right side of the arrow as seen below
 * 'search' => 'ENTER YOUR TRANSLATION HERE',
 * Please also make sure that all of the strings you edit end with a comma (,)
 * If you need to use an apostrophe (') please escape it with a backslash (\) as seen below
 * 'example' => 'You\'re awesome!',
 **/

// TRANSLATIONS START //

    // Dark Rewrite
    'dxrk' => [
        'steam_title' => 'Estadísticas de nuestro grupo de Steam',
        'steam_desc' => 'Haz click :here para entrar a nuestro grupo de Steam!',
        'join_server' => 'Conectarse a servidor',
    ],


    'errors' => [
        'no_api_key' => 'La clave API de Steam no fue especificada',
        'failed' => 'No se pudo identificar la información del servidor'
    ],

    'navbar' => [
        'profile' => 'Perfil',
        'visit_profile' => 'Visita y actualiza tu perfil!',

        'management' => 'Administración',
        'manage_cosmo' => 'Administrar sitio.',

        'logout' => 'Cerrar sesión',
        'login' => 'Iniciar sesión',

        'welcome_back' => 'Bienvenido, :username',
        'notifications' => 'Notificaciones'
    ],


    'core' => [
        'home' => 'Main',
        'staff' => 'Staff',
        'threads' => 'Hilos',
        'browse_threads' => 'Ver todos los Hilos',
        'viewing_thread' => 'Viendo este Hilo',
        'forums' => 'Foros',
        'terms' => 'Términos de Servicio',
        'store' => 'Tienda',
        'success' => 'Éxito!',
        'failed' => 'Fallido!',
        'checkout' => 'Pagar',
        'users' => 'Usuarios',
        'board' => 'Tablón',
        'edit' => 'Editar',

        'licensed_to' => 'Licenciado por :licensee',
        'created_by' => 'Creado por :author',

        'theme_specific' => [
            'group_members' => 'Miembros del Grupo',
            'online_members' => 'Miembros Online',
            'in-game_members' => 'Miembros Jugando',
            'join_steam-group' => 'Entra en nuestro grupo de Steam',
            'players_online' => 'Jugadores Online',
            'join_servers' => 'Entra a nuestros <span>Servers</span>',
            'join_discord' => 'Entra a nuestro <span>Discord</span>',
        ],

        'confirmation' => 'Estás seguro?',
        'cancel' => 'Cancelar',
    ],

    'store' => [
        'browse_packages' => 'Buscar packs para :server!',
        'checkout' => 'Pagar',
        'permanent' => 'Permanente',
        'non-permanent' => 'No Permanente',
        'login_to-checkout' => 'Inicia sesión para poder pagar',

        'coupon-code' => 'Cupón de Descuento',
        'enter_coupon-code' => 'Introduce el Cupón de Descuento',
        'gift-purchase' => 'Comprar como regalo',
        'enter_steamId' => 'Introducir Steam ID',

        'finalize_purchase' => 'Finalizar Compra',
        'tos_agree' => 'Por este medio usted acepta nuestros <a href="'.route('store.tos').'">Términos de Servicio</a>', // Translate around the link
        'checkout_with-paypal' => 'Pagar con PayPal',

        'complete_purchase' => 'Completar Compra',
        'checking_out-package' => 'Vas a comprar el paquete :package', //"You are checking out package: VIP"
        'package_price' => 'Precio del Paquete',

        'sub-total' => 'Sub-Total',
        'total' => 'Total: :sign:price',
        'servers' => 'Servidores',

        'monthly_goal' => 'Objetivo de Donaciones Mensuales',
        'table' => [
            'top_donations' => 'Donaciones más Grandes',
            'recent_donations' => 'Donaciones Recientes',
            'name' => 'Nombre',
            'amount' => 'Cantidad',
            'package' => 'Paquete',
        ],

        'select_server' => 'Buscar',
        'store_select_server' => 'Buscar',

        'success' => [
            'success' => 'Pago Completado!',
            'msg' => 'Recibirás tu paquete dentro de poco...'
        ],
        'fail' => [
            'fail' => 'Pago Fallido!',
            'msg' => 'Algo salió mal... por favor intenta más tarde',
        ],

        'cancel' => [
            'cancel' => 'Pago Cancelado!',
            'msg' => 'Tu pago fue cancelado con éxito'
        ],

        'sale' => [
            'time-left' => 'Tiempo Restante: :time',
            'info' => '<b>Apurate</b> que queda poco tiempo para aprovechar los descuentos de la tienda! <span>:percentage% OFF</span>',
            'go_to_store' => 'IR A LA TIENDA',
        ],
    ],

    'forums' => [
        'polls' => 'Encuestas',
        'polls_desc' => 'Ten tu palabra en la comunidad',
        'unanswered_polls' => 'Encuesta(s) sin contestar',

        'search' => 'Buscar',
        'search_desc' => 'Buscar en los foros',

        'recent_activity' => 'Actividad Reciente',
        'recent_desc' => 'Actividad reciente de nuestra comunidad',

        'latest_threads' => 'Últimos Hilos',
        'latest_threads-desc' => 'Últimos hilos de los foros',

        'latest_posts' => 'Últimos Posts',
        'latest_posts-desc' => 'Últimos Posts de los foros',

        'replies' => 'Respuestas',

        'threads' => [
            'locked' => 'CERRADO',
            'pinned' => 'FIJADO',

            'edit_thread' => 'Editar Hilo',
            'editing_thread' => 'Editando Hilo',
            'pin_thread' => 'Fijar Hilo',
            'unpin_thread' => 'Desfijar Hilo',
            'lock_thread' => 'Cerrar Hilo',
            'unlock_thread' => 'Abrir Hilo',
            'move_thread' => 'Mover Hilo',
            'delete_thread'=> 'Borrar Hilo',

            'create_thread' => 'Crear Hilo',
            'update_thread' => 'Actualizar Hilo',
            'thread_title' => 'Título del Hilo',
            'post_reply' => 'Post',

            'created_at' => 'Creado El',

            'posted_by' => 'Posteado Por: ',

            'locked_no_reply' => 'Este hilo fue cerrado, ya no se puede responder al mismo!',
        ],
        'posts' => [
            'editing_post' => 'Editando Post',
            'update_post' => 'Actualizar Post',
            'delete_post' => 'Borrar Post'
        ]
    ],

    'users' => [
        'search_users' => 'Buscando usuarios...',
        'no_users-found' => 'No se encontró al usuario',

        'pills' => [
            'home'=> 'Main',
            'comments' => 'Comentarios',
            'threads' => 'Hilos',
            'achievements' => 'Logros',
            'edit' => 'Editar Perfil',
        ],

        'welcome_to_profile' => 'Bienvenido a mi perfil!',

        'user_joined' => 'El usuario entro',
        'comment' => 'Comentar',
        'editing_comment' => 'Editando Comentario',

        'edit' => [
            'display_name' => 'Nombre de Muestra',
            'avatar_image' => 'Imagen de Avatar',
            'background_image' => 'Imagen de Fondo',
            'biography' => 'Biografía',
            'signature' => 'Firma',
            'sync_steam' => 'Sincronizar con Steam',
            'sync_discord' => 'Sincronizar con Discord',
        ],

        'achievements' => [
            'unlock_more' => 'Desbloquear Más...',
            'default' => 'Para seguir desbloqueando logros, seguí usando los foros y la página web en general.',
            'achievement_unlocked' => 'Este logro de desbloqueo' // "This achievement was unlocked" 1 day ago
        ],
    ],

    'actions' => [
        'close' => 'Cerrar',
        'save_changes' => 'Guardar Cambios',
        'go_back' => 'Atrás',
        'submit' => 'Enviar',
        'post' => 'Publicar',
        'create' => 'Crear',
        'update' => 'Actualizar',
        'delete' => 'Borrar'
    ],

    'notifications' => [
        'new_notif' => 'NUEVO',
        'notifications' => 'Notificaciones',
        'mark_all_as_read' => 'Marcar todo como leído',
        'delete_all' => 'Borrar todo',
        'no_notifications' => 'No tenés ninguna notificación',

        'reply_to_thread' => ':username a respondió a tu hilo',
        'unlocked_achievement' => 'Desbloqueaste el logro: :achievement',
        'profile_comment' => ':username dejo un comentario en tu perfil!',
        'profile_like' => ':username has :state your profile!', // preguntar por esto a Morgan
        'thread_action' => ':admin has :action your thread: :title', // preguntar por esto a Morgan
        'manage' => 'Gestiona tus Notificaciones pendientes', 
    ],

    'toastr_alerts' => [
        'marked_notifications' => 'Marcaste todas tus notificaciones como leídas!',
        'cleared_notifications' => 'Borraste todas tus notificaciones pendientes!',

        'update_post' => 'Post actualizado exitosamente',
        'delete_post' => 'Post borrado exitosamente',

        'create_thread' => 'Hilo nuevo creado exitosamente',
        'update_thread' => 'Hilo actualizado exitosamente',
        'delete_thread' => 'Hilo borrado exitosamente!',
        'pin_thread' => 'Hilo fijado exitosamente!',
        'unpin_thread' => 'Hilo desfijado exitosamente!',
        'lock_thread' => 'Hilo cerrado exitosamente!',
        'unlock_thread' => 'Hilo abierto exitosamente!',
        'move_thread' => 'Hilo movido exitosamente!',

        'application_cache' => 'Cache de aplicación borrada exitosamente!',

        'create_board' => 'Tablón creado exitosamente',
        'update_board' => 'Tablón actualizado exitosamente',
        'delete_board' => 'Tablón borrado exitosamente!',
        'move_board' => 'Tablón movido exitosamente!',

        'create_category' => 'Categoría nueva creada exitosamente',
        'update_category' => 'Categoría actualizada exitosamente',
        'delete_category' => 'Categoría borrada exitosamente!',

        'create_poll' => 'Encuesta creada exitosamente',
        'update_poll' => 'Encuesta actualizada exitosamente',
        'delete_poll' => 'Encuesta borrada exitosamente!',
        'open_poll' => 'El estatus de la encuesta fue cambiado a público!',
        'close_poll' => 'El estatus de la encuesta fue cambiado a privado!',

        'update_configurations' => 'Las configuraciones generales fueron cambiadas exitosamente!',
        'update_meta' => 'Las configuraciones de meta fueron cambiadas exitosamente!',
        'update_integration' => 'Las configuraciones de integración fueron cambiadas exitosamente!',
        'update_theme' => 'El tema global fue cambiado exitosamente!',
        'update_settings' => 'Las configuraciones de la tienda fueron cambiadas exitosamente!',
        'update_tos' => 'Términos de Servicio cambiados exitosamente!',

        'create_role' => 'Nuevo rol creado exitosamente',
        'update_role' => 'Rol actualizado exitosamente!',
        'delete_role' => 'Rol borrado exitosamente!',

        'update_user' => 'Usuario actualizado exitosamente!',

        'create_feature' => 'Nueva característica creada exitosamente!',
        'update_feature' => 'Característica actualizada exitosamente!',
        'delete_feature' => 'Característica borrada exitosamente!',

        'create_footer-link' => 'Se creó correctamente un nuevo enlace de pie de página.!',
        'update_footer-link' => 'Enlace de pie de página actualizado correctamente!',
        'delete_footer-link' => 'Enlace de pie de página eliminado correctamente!',

        'create_nav-link' => 'Se creó correctamente un nuevo enlace de navegación!',
        'update_nav-link' => 'Enlace de navegación actualizado con éxito!',
        'delete_nav-link' => 'Enlace de navegación eliminado correctamente',

        'create_server' => 'Nuevo servidor creado exitosamente!',
        'update_server' => 'Servidor actualizado exitosamente!',
        'delete_server' => 'Servidor borrado exitosamente!!',

        'create_coupon' => 'Nuevo cupón de descuento creado exitosamente!',
        'update_coupon' => 'Cupón de descuento actualizado exitosamente!',
        'delete_coupon' => 'Cupón de descuento borrado exitosamente!',

        'invalid_coupon-code' => 'Este cupón es inválido!',
        'unusable_coupon-code' => 'Este cupón no puede ser usado en este paquete!',
        'invalid_gift-steamId' => 'Esta Steam ID no es válida!',

        'create_package' => 'Nuevo paquete creado exitosamente!',
        'update_package' => 'Paquete actualizado exitosamente!',
        'delete_package' => 'Paquete borrado exitosamente!',

        'create_sale' => 'Nuevo descuento añadido a la tienda',
        'update_sale' => 'Descuento de la tienda actualizado exitosamente!',
        'delete_sale' => 'Descuento de la tienda borrado exitosamente!',

        'create_comment' => 'Comentario posteado de manera exitosa!',
        'update_comment' => 'Comentario actualizado de manera exitosa!',
        'delete_comment' => 'Comentario borrado de manera exitosa!',

        'like_own_profile' => 'No podés darle like a tu propio perfil :)',
        'remove_like' => 'Se quitó el like del perfil de :username exitosamente!',
        'create_like' => 'Se añadió un like al perfil de :username exitosamente!',

        'update_profile' => 'Perfil actualizado exitosamente!',
    ],


    'management' => [
        'navigation' => [
            'dashboard' => 'Tablero',

            'general' => 'General',
            'configuration' => 'Configuración',
            'meta' => 'Meta',
            'users' => 'Usuarios',
            'roles' => 'Roles',

            'index' => 'Main',
            'components' => [
                'components' => 'Componentes',
                'nav-links' => 'Links de Navegación',
                'features' => 'Características',
                'servers' => 'Servidores',
                'integrations' => 'Interrogaciones',
                'footer-links' => 'Links de Pie de Página'
            ],
            'theme' => 'Tema',

            'forums' => 'Foros',
            'categories' => 'Categorías',
            'boards' => 'Tablones',
            'polls' => 'Encuestas',

            'store' => 'Tienda',
            'settings' => 'Opciones',
            'packages' => [
                'packages' => 'Paquetes',
                'create' => 'Crear',
                'manage' => 'Administrar'
            ],
            'coupon_code' => 'Cupón de Descuento',
            'sales' => 'Ventas',
            'tos' => 'TOS',
            'transactions' => 'Transacciones',
            'profile' => 'Perfil',
            'exit_management' => 'Salir de Administración',
            'logout' => 'Cerrar Sesión',
        ],

        'core' => [
            'clear_cache' => 'Borrar Cache',
            'check_for_updates' => 'Chequear Actualizaciones',

            'dashboard_title' => 'Tablón',
            'dashboard_small' => 'Estadísticas de Página',

            'configurations_title' => 'Configuraciones',
            'configurations_small' => 'Administrar configuraciones',

            'meta_title' => 'Meta',
            'meta_small' => 'Administrar Meta del Sitio',

            'users_title' => 'Usuarios',
            'users_small' => 'Administrar Usuarios',
            'users_search' => 'Buscar Usuarios...',
            'users_role' => 'Roles',

            'create_new_role' => 'Crear Nuevo Rol',
            'roles_role-name' => 'Nombre de Rol',
            'roles_role-display' => 'Display de Rol',
            'roles_role-color' => 'Color de Rol',

            'create_new_nav' => 'Crear Nuevo Link',
            'nav_name' => 'Nombre de Link',
            'nav_icon' => 'Icono de Link',
            'nav_color' => 'Color de Link',
            'nav_url' => 'URL de Link',
            'nav_category' => 'Categoría de Link',

            'create_new_feature' => 'Crear Nueva Característica',
            'feature_name' => 'Nombre de Característica',
            'feature_icon' => 'Icono de Característica',
            'feature_color' => 'Color de Característica',
            'feature_content' => 'Contenido de Característica',

            'create_new_server' => 'Crear Nuevo Servidor',
            'server_name' => 'Nombre del Servidor',
            'server_icon' => 'Icono del Servidor',
            'server_color' => 'Color del Servidor',
            'server_image' => 'Imagen del Servidor',
            'server_ip' => 'IP del Servidor',
            'server_port' => 'Puerto del Servidor',
            'server_description' => 'Descripción del Servidor',

            'enable_steam-group_statistics' => 'Habilitar Estadísticas de Grupo de Steam',
            'enable_discord-widget' => 'Habilitar Widget de Discord',
            'enable_widget-bot' => 'Habilitar Widget de Bot',
            'enable_discord-sync' => 'Habilitar Sincronización de Discord',

            'create_new_link' => 'Crear Nuevo Link',
            'link_name' => 'Nombre de Link',
            'link_url' => 'URL de Link',
            'link_category' => 'Categoría del Link',

            'theme_title' => 'Tema',
            'theme_small' => 'Administrar Temas',

            'create_new_category' => 'Crear Nueva Categoría',
            'category_name' => 'Nombre de Categoría',
            'category_desc' => 'Descripción de Categoría',

            'create_new_board' => 'Crear Nuevo Tablón',
            'board_name' => 'Nombre de Tablón',
            'board_icon' => 'Icono de Tablón',
            'board_color' => 'Color de Tablón',
            'board_desc' => 'Descripción del Tablón',
            'board_category' => 'Categoría del Tablón',
            'board_permission_roles' => 'Acceso de Roles',

            'create_new_poll' => 'Crear Nueva Encuesta',
            'poll_title' => 'Titulo de Encuesta',
            'poll_description' => 'Descripción de Encuesta',
            'poll_icon' => 'Icono de Encuesta',
            'poll_answers' => 'Respuestas de Encuesta',
            'poll_answer' => 'Respuesta de Encuesta',

            'store_settings_title' => 'Opciones de Tienda',
            'store_settings_small' => 'Administrar Opciones de Tienda',

            'enable_monthly_goal' => 'Habilitar Objetivo de Donaciones Mensuales',
            'monthly_goal' => 'Donaciones Mensuales',
            'display_top_recent-donations' => 'Mostrar donaciones más altas y más recientes',

            'paypal_client_id' => 'ID de Cliente de PayPal',
            'paypal_client_secret' => 'Secreto de Cliente de PayPal',
            'paypal_webhook_id' => 'ID de Webhook de PayPal',

            'enable_chargeback-bans' => 'Habilitar Bans por Reembolsos',
            'chargeback-ban' => '<code>Habilitar Bans por Reembolsos</code> - Cuando un usuario intente reembolsar fraudulentamente un producto comprado por medio de PayPal, el mismo será bloqueado permanentemente de la página web.',

            'package_title' => 'Paquetes',
            'package_small' => 'Crear Paquetes',
            'create_new_package' => 'Crear nuevo Paquete!',
            'package_name' => 'Nombre de Paquete',
            'package_price' => 'Precio de Paquete',
            'package_image' => 'Imagen de Paquete',
            'package_servers' => 'Servidores',
            'package_category' => 'Categorías',
            'package_description' => 'Descripción de Paquete',

            'create_new_coupon' => 'Crear Nuevo Cupón',
            'coupon_code' => 'Cupón de Descuento',
            'coupon_percentage' => 'Porcentaje',
            'coupon_packages' => 'Paquete',
            'coupon_packages_info' => 'Estos son los paquetes en los que este descuento puede ser aplicado.',
            'coupon_package_use-amt' => 'Cantidad de Usos',
            'coupon_package_use-amt_info' => 'Límite de tiempo por el que un cupo puede ser usado. 0 para hacerlo ilimitado',
            'coupon_package_start-date' => 'Fecha de Inicio',
            'coupon_package_start-date_info' => 'El cupón va a ser habilitado para usarse a partir de esta fecha',
            'coupon_package_end-date' => 'Fecha Límite',
            'coupon_package_end-date_info' => 'Después de esta fecha el cupón no va a poder ser usado devuelta',

            'create_new_sale' => 'Crear Nueva Oferta',
            'sale_title' => 'Nombre de Oferta',
            'sale_percentage' => 'Porcentaje de Descuento',
            'sale_packages' => 'Paquetes en Descuento',
            'sale_start-date' => 'Fecha de inicio',
            'sale_end-date' => 'Fecha Límite',

            'update_terms' => 'Actualizar Términos de Servicio',

            'disable_maintenance' => 'Deshabilitar Mantenimiento',
            'enable_maintenance' => 'Habilitar Mantenimiento',

            'reinstall' => 'Reinstalar',
            'reinstall_confirm' => 'Estás seguro de que querés hacer esto?',

            'toggle_dark_mode' => 'Activar / Desactivar modo Obscuro',

            'yearly_sales' => 'Ofertas Anuales',
            'monthly_sales' => 'Ofertas Mensuales',

            'stats' => [
                'earnings' => [
                    'total' => 'Ganancias Totales',
                    'monthly' => 'Ganancias Mensuales',
                    'weekly' => 'Ganancias Semanales',
                    'daily' => 'Ganancias Diarias',
                ],
                'total_packages' => 'Paquetes Totales',
                'total_purchases' => 'Compras Totales',
                'forum' => [
                    'categories' => 'Categorías Totales',
                    'boards' => 'Tableros Totales',
                    'threads' => 'Hilos Totales',
                ],
                'users' => 'Usuarios Totales',
                'roles' => 'Roles Totales',
                'tickets' => 'Abrir Ticket de Soporte',
            ],
        ],

        'save_configurations' => 'Guardar Configuración',

    ]
];
