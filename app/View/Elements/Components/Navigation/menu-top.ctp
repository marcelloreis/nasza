<?php 
$menu = array(
    /**
    * Imports
    */
    // array('label' => __('Import'), 'controller' => 'import', 'icon_left' => '<span class="square-16 plix-16"></span>'),

    /**
    * Produtos
    */
    array(
        'label' => '<span>' . __('Consultation Registration') . '</span>', 'controller' => 'entities'
        ),
    /**
    * Seguranca
    */
    array(
        'label' => '<span>' . __('Security') . '</span>',
        'params' => array('class' => 'dropdown-toggle', 'data-toggle' => 'dropdown'),
        'icon_right' => '<span class="caret"></span>',
        'children' => array(
            /**
            * Seguranca/Usuarios
            */
            array('label' => __('Users'), 'controller' => 'users'),
            /**
            * Seguranca/Grupos
            */
            array('label' => __('Groups'), 'controller' => 'groups'),
            )
        ),
    /**
    * Administrativo
    */
    array(
        'label' => '<span>' . __('Administrative') . '</span>',
        'params' => array('class' => 'dropdown-toggle', 'data-toggle' => 'dropdown'),
        'icon_right' => '<span class="caret"></span>',
        'children' => array(
            /**
            * Administrativo/Clientes
            */
            array('label' => __('Clients'), 'controller' => 'clients'),
            /**
            * Administrativo/Prospect
            */
            array('label' => __('Prospects'), 'controller' => 'clients', 'action' => 'prospects'),
            /**
            * Administrativo/Prospect
            */
            array('label' => 'Contratos', 'controller' => 'contracts'),
            /**
            * Administrativo/Clientes/Contas
            */
            array('label' => __('Accounts'), 'controller' => 'users', 'action' => 'accounts'),
            /**
            * Administrativo/Produtos
            */
            array('label' => __('Products'), 'controller' => 'products'),
            /**
            * Administrativo/Pacotes
            */
            array('label' => __('Packages'), 'controller' => 'packages'),
            /**
            * Administrativo/Histórico
            */
            array('label' => __('Billings'), 'controller' => 'billings'),
            /**
            * Administrativo/Boleto
            */
            array('label' => __('Queries'), 'controller' => 'queries'),
            )
        ),
    /**
    * Configuracoes
    */
    array(
        'label' => '<span>' . __('Settings') . '</span>',
        'params' => array('class' => 'dropdown-toggle', 'data-toggle' => 'dropdown'),
        'icon_right' => '<span class="caret"></span>',
        'children' => array(
            /**
            * Países
            */
            array('label' => __('Countries'), 'controller' => 'countries', 'plugin' => false),
            /**
            * Estados
            */
            array('label' => __('States'), 'controller' => 'states', 'plugin' => false),
            /**
            * Cidades
            */
            array('label' => __('Cities'), 'controller' => 'cities', 'plugin' => false),
            /**
            * Cidades
            */
            array('label' => __('Translations'), 'controller' => 'translations', 'plugin' => false),
            )
        ),

    );

if($userLogged['group_id'] != ADMIN_GROUP){
    $menu = array_slice($menu, 0, 1);
}

echo $this->AppUtils->buildMenu($menu, array('classActive' => 'page-active'));