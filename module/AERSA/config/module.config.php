<?php

return array(
    'router' => array(
        'routes' => array(
            /*
             * HOME
             */
            'application' => array(
                'type' => 'Hostname',
                'options' => array(
                    'route'    => 'admin.aersa',
                ),
                'may_terminate' => true,
                'child_routes' => array(
                   /*
                    * ESCRITORIO
                    */
                    'escritorio' => array(
                        'type'    => 'Segment',
                        'options' => array(
                            'route'    => '/',
                            'defaults' => array(
                                'controller'    => 'Application\Dashboard\Controller\Index',
                                'action'        => 'index',
                            ),
                        ),
                    ),
                    /*
                    * LOGIN
                    */
                    'login' => array(
                        'type'    => 'Segment',
                        'options' => array(
                            'route'    => '/login[/:action]',
                            'defaults' => array(
                                'controller'    => 'Application\Login\Controller\Login',
                                'action'        => 'in',
                            ),
                        ),
                    ),
                    /*
                    * CATALOGOS
                    */
                   'catalogo' => array(
                        'type' => 'Literal',
                        'options' => array(
                            'route' => '/catalogo',
                        ),
                       'may_terminate' => false,
                       'child_routes' => array(
                           'usuario' => array(
                                'type' => 'Literal',
                                'options' => array(
                                    'route' => '/usuario',
                                    'defaults' => array(
                                        'controller' => 'Application\Catalogo\Controller\Usuario',
                                        'action' => 'index',
                                    ),
                                ),
                               'may_terminate' => true,
                               'child_routes' => array(
                                   'nuevo' => array(
                                       'type' => 'Literal',
                                       'options' => array(
                                            'route' => '/nuevo',
                                            'defaults' => array(
                                                'controller' => 'Application\Catalogo\Controller\Usuario',
                                                'action' => 'nuevo',
                                            ),
                                        ),
                                    ),
                                   'editar' => array(
                                       'type' => 'Segment',
                                       'options' => array(
                                            'route' => '/editar[/:id]',
                                            'defaults' => array(
                                                'controller' => 'Application\Catalogo\Controller\Usuario',
                                                'action' => 'editar',
                                            ),
                                        ),
                                    ),
                                   'eliminar' => array(
                                       'type' => 'Segment',
                                       'options' => array(
                                            'route' => '/eliminar[/:id]',
                                            'defaults' => array(
                                                'controller' => 'Application\Catalogo\Controller\Usuario',
                                                'action' => 'eliminar',
                                            ),
                                        ),
                                    ),
                                   'changepassword' => array(
                                       'type' => 'Segment',
                                       'options' => array(
                                            'route' => '/changepassword[/:id]',
                                            'defaults' => array(
                                                'controller' => 'Application\Catalogo\Controller\Usuario',
                                                'action' => 'changepassword',
                                            ),
                                        ),
                                    ),
                                   'administrador' => array(
                                       'type' => 'Segment',
                                       'options' => array(
                                            'route' => '/administrador[/:id]',
                                            'defaults' => array(
                                                'controller' => 'Application\Catalogo\Controller\Usuario',
                                                'action' => 'administrador',
                                            ),
                                        ),
                                    ),
                               ),
                            ),
                           'proveedor' => array(
                                'type' => 'Literal',
                                'options' => array(
                                    'route' => '/proveedor',
                                    'defaults' => array(
                                        'controller' => 'Application\Catalogo\Controller\Proveedor',
                                        'action' => 'index',
                                    ),
                                ),
                               'may_terminate' => true,
                               'child_routes' => array(
                                   'nuevo' => array(
                                       'type' => 'Literal',
                                       'options' => array(
                                            'route' => '/nuevo',
                                            'defaults' => array(
                                                'controller' => 'Application\Catalogo\Controller\Proveedor',
                                                'action' => 'nuevo',
                                            ),
                                        ),
                                    ),
                               ),
                            ),
                        
                        'iva' => array(
                                'type' => 'Literal',
                                'options' => array(
                                    'route' => '/iva',
                                    'defaults' => array(
                                        'controller' => 'Application\Catalogo\Controller\Iva',
                                        'action' => 'index',
                                    ),
                                ),
                               'may_terminate' => true,
                               'child_routes' => array(
                                   'nuevo' => array(
                                       'type' => 'Literal',
                                       'options' => array(
                                            'route' => '/nuevo',
                                            'defaults' => array(
                                                'controller' => 'Application\Catalogo\Controller\Iva',
                                                'action' => 'nuevo',
                                            ),
                                        ),
                                    ),
                                   'editar' => array(
                                       'type' => 'Segment',
                                       'options' => array(
                                            'route' => '/editar[/:id]',
                                            'defaults' => array(
                                                'controller' => 'Application\Catalogo\Controller\Iva',
                                                'action' => 'editar',
                                            ),
                                        ),
                                    ),
                                   'nuevo' => array(
                                       'type' => 'Segment',
                                       'options' => array(
                                            'route' => '/nuevo',
                                            'defaults' => array(
                                                'controller' => 'Application\Catalogo\Controller\Iva',
                                                'action' => 'nuevo',
                                            ),
                                        ),
                                    ),
                                   'eliminar' => array(
                                       'type' => 'Segment',
                                       'options' => array(
                                            'route' => '/eliminar[/:id]',
                                            'defaults' => array(
                                                'controller' => 'Application\Catalogo\Controller\Iva',
                                                'action' => 'eliminar',
                                            ),
                                        ),
                                    ),

                               ),
                            ),
                        'categoria' => array(
                                'type' => 'Literal',
                                'options' => array(
                                    'route' => '/categoria',
                                    'defaults' => array(
                                        'controller' => 'Application\Catalogo\Controller\Categoria',
                                        'action' => 'index',
                                    ),
                                ),
                               'may_terminate' => true,
                               'child_routes' => array(
                                   'nuevo' => array(
                                       'type' => 'Literal',
                                       'options' => array(
                                            'route' => '/nuevo',
                                            'defaults' => array(
                                                'controller' => 'Application\Catalogo\Controller\Categoria',
                                                'action' => 'nuevo',
                                            ),
                                        ),
                                    ),
                                   'nuevasub' => array(
                                       'type' => 'Segment',
                                       'options' => array(
                                            'route' => '/nuevasub[/:id]',
                                            'defaults' => array(
                                                'controller' => 'Application\Catalogo\Controller\Categoria',
                                                'action' => 'nuevasub',
                                            ),
                                        ),
                                    ),
                                   'editarsub' => array(
                                       'type' => 'Segment',
                                       'options' => array(
                                            'route' => '/editarsub[/:id]',
                                            'defaults' => array(
                                                'controller' => 'Application\Catalogo\Controller\Categoria',
                                                'action' => 'editarsub',
                                            ),
                                        ),
                                    ),
                                   'editar' => array(
                                       'type' => 'Segment',
                                       'options' => array(
                                            'route' => '/editar[/:id]',
                                            'defaults' => array(
                                                'controller' => 'Application\Catalogo\Controller\Categoria',
                                                'action' => 'editar',
                                            ),
                                        ),
                                    ),
                                   'nuevo' => array(
                                       'type' => 'Segment',
                                       'options' => array(
                                            'route' => '/nuevo',
                                            'defaults' => array(
                                                'controller' => 'Application\Catalogo\Controller\Categoria',
                                                'action' => 'nuevo',
                                            ),
                                        ),
                                    ),
                                   'eliminar' => array(
                                       'type' => 'Segment',
                                       'options' => array(
                                            'route' => '/eliminar[/:id]',
                                            'defaults' => array(
                                                'controller' => 'Application\Catalogo\Controller\Categoria',
                                                'action' => 'eliminar',
                                            ),
                                        ),
                                    ),

                               ),
                            ),
                           
                           
                           
                           'empresa' => array(
                                'type' => 'Literal',
                                'options' => array(
                                    'route' => '/empresa',
                                    'defaults' => array(
                                        'controller' => 'Application\Catalogo\Controller\Empresa',
                                        'action' => 'index',
                                    ),
                                ),
                               'may_terminate' => true,
                               'child_routes' => array(
                                   'nuevo' => array(
                                       'type' => 'Literal',
                                       'options' => array(
                                            'route' => '/nuevo',
                                            'defaults' => array(
                                                'controller' => 'Application\Catalogo\Controller\Empresa',
                                                'action' => 'nuevo',
                                            ),
                                        ),
                                    ),
                                   'editar' => array(
                                       'type' => 'Segment',
                                       'options' => array(
                                            'route' => '/editar[/:id]',
                                            'defaults' => array(
                                                'controller' => 'Application\Catalogo\Controller\Empresa',
                                                'action' => 'editar',
                                            ),
                                        ),
                                    ),
                                   'nuevo' => array(
                                       'type' => 'Segment',
                                       'options' => array(
                                            'route' => '/nuevo',
                                            'defaults' => array(
                                                'controller' => 'Application\Catalogo\Controller\Empresa',
                                                'action' => 'nuevo',
                                            ),
                                        ),
                                    ),
                                   
                                   'eliminar' => array(
                                       'type' => 'Segment',
                                       'options' => array(
                                            'route' => '/eliminar[/:id]',
                                            'defaults' => array(
                                                'controller' => 'Application\Catalogo\Controller\Empresa',
                                                'action' => 'eliminar',
                                            ),
                                        ),
                                    ),

                               ),
                            ),
                           
                           
                           
                           'sucursal' => array(
                                'type' => 'Literal',
                                'options' => array(
                                    'route' => '/empresa/sucursal',
                                    'defaults' => array(
                                        'controller' => 'Application\Catalogo\Controller\Sucursal',
                                        'action' => 'index',
                                    ),
                                ),
                               'may_terminate' => true,
                               'child_routes' => array(
                                   
                                   
                                   'nuevo' => array(
                                       'type' => 'Segment',
                                       'options' => array(
                                            'route' => '/nuevo[/:id]',
                                            'defaults' => array(
                                                'controller' => 'Application\Catalogo\Controller\Sucursal',
                                                'action' => 'nuevo',
                                            ),
                                        ),
                                    ),
                                   'editar' => array(
                                       'type' => 'Segment',
                                       'options' => array(
                                            'route' => '/editar[/:id]',
                                            'defaults' => array(
                                                'controller' => 'Application\Catalogo\Controller\Sucursal',
                                                'action' => 'editar',
                                            ),
                                        ),
                                    ),
                                   'eliminar' => array(
                                       'type' => 'Segment',
                                       'options' => array(
                                            'route' => '/eliminar[/:id]',
                                            'defaults' => array(
                                                'controller' => 'Application\Catalogo\Controller\Sucursal',
                                                'action' => 'eliminar',
                                            ),
                                        ),
                                    ),

                               ),
                            ),
                           
                        ),
                    ),
                ),
            ),
            'website' => array(
                'type' => 'Hostname',
                'options' => array(
                    'route'    => 'aersa',
                    'defaults' => array(
                        'controller' => 'Website\Controller\Index',
                        'action'     => 'index',
                    ),
                ),
            ),
            

        ),
    ),
    'service_manager' => array(
        'abstract_factories' => array(
            'Zend\Cache\Service\StorageCacheAbstractServiceFactory',
            'Zend\Log\LoggerAbstractServiceFactory',
        ),
        'aliases' => array(
            'translator' => 'MvcTranslator',
        ),
    ),
    'translator' => array(
        'locale' => 'en_US',
        'translation_file_patterns' => array(
            array(
                'type'     => 'gettext',
                'base_dir' => __DIR__ . '/../language',
                'pattern'  => '%s.mo',
            ),
        ),
    ),
    'controllers' => array(
        'invokables' => array(
            /*
             * LOGIN
             */
            'Application\Login\Controller\Login' => 'Application\Login\Controller\LoginController',
            /*
             * ESCRITORIO
             */
            'Application\Dashboard\Controller\Index' => 'Application\Dashboard\Controller\IndexController',
            /*
             * CATALOGO
             */
            'Application\Catalogo\Controller\Usuario'       => 'Application\Catalogo\Controller\UsuarioController',
            'Application\Catalogo\Controller\Proveedor'     => 'Application\Catalogo\Controller\ProveedorController',
            'Application\Catalogo\Controller\Iva'           => 'Application\Catalogo\Controller\IvaController',
            'Application\Catalogo\Controller\Categoria '    => 'Application\Catalogo\Controller\CategoriaController',
            'Application\Catalogo\Controller\Empresa'       => 'Application\Catalogo\Controller\EmpresaController',
            'Application\Catalogo\Controller\Sucursal'      => 'Application\Catalogo\Controller\SucursalController',
            
            /*
             * WEBSITE
             */
            'Website\Controller\Index' => 'Website\Controller\IndexController',
        ),
    ),
    'view_manager' => array(
        'display_not_found_reason' => true,
        'display_exceptions'       => true,
        'doctype'                  => 'HTML5',
        'not_found_template'       => 'error/404',
        'exception_template'       => 'error/index',
        'template_map' => array(
            'layout/layout'           => __DIR__ . '/../view/layout/layout.phtml',
            'application/index/index' => __DIR__ . '/../view/application/index/index.phtml',
            'error/404'               => __DIR__ . '/../view/error/404.phtml',
            'error/index'             => __DIR__ . '/../view/error/index.phtml',
        ),
        'template_path_stack' => array(
            __DIR__ . '/../view',
        ),
    ),
    // Placeholder for console routes
    'console' => array(
        'router' => array(
            'routes' => array(
            ),
        ),
    ),
);
