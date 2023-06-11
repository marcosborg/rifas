<?php

return [
    'userManagement' => [
        'title'          => 'Gestão de usuários',
        'title_singular' => 'Gestão de usuários',
    ],
    'permission' => [
        'title'          => 'Permissões',
        'title_singular' => 'Permissão',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => ' ',
            'title'             => 'Title',
            'title_helper'      => ' ',
            'created_at'        => 'Created at',
            'created_at_helper' => ' ',
            'updated_at'        => 'Updated at',
            'updated_at_helper' => ' ',
            'deleted_at'        => 'Deleted at',
            'deleted_at_helper' => ' ',
        ],
    ],
    'role' => [
        'title'          => 'Grupos',
        'title_singular' => 'Função',
        'fields'         => [
            'id'                 => 'ID',
            'id_helper'          => ' ',
            'title'              => 'Title',
            'title_helper'       => ' ',
            'permissions'        => 'Permissions',
            'permissions_helper' => ' ',
            'created_at'         => 'Created at',
            'created_at_helper'  => ' ',
            'updated_at'         => 'Updated at',
            'updated_at_helper'  => ' ',
            'deleted_at'         => 'Deleted at',
            'deleted_at_helper'  => ' ',
        ],
    ],
    'user' => [
        'title'          => 'Usuários',
        'title_singular' => 'Usuário',
        'fields'         => [
            'id'                       => 'ID',
            'id_helper'                => ' ',
            'name'                     => 'Name',
            'name_helper'              => ' ',
            'email'                    => 'Email',
            'email_helper'             => ' ',
            'email_verified_at'        => 'Email verified at',
            'email_verified_at_helper' => ' ',
            'password'                 => 'Password',
            'password_helper'          => ' ',
            'roles'                    => 'Roles',
            'roles_helper'             => ' ',
            'remember_token'           => 'Remember Token',
            'remember_token_helper'    => ' ',
            'created_at'               => 'Created at',
            'created_at_helper'        => ' ',
            'updated_at'               => 'Updated at',
            'updated_at_helper'        => ' ',
            'deleted_at'               => 'Deleted at',
            'deleted_at_helper'        => ' ',
        ],
    ],
    'star' => [
        'title'          => 'Estrelas',
        'title_singular' => 'Estrela',
        'fields'         => [
            'id'                 => 'ID',
            'id_helper'          => ' ',
            'name'               => 'Nome do jogo',
            'name_helper'        => ' ',
            'created_at'         => 'Created at',
            'created_at_helper'  => ' ',
            'updated_at'         => 'Updated at',
            'updated_at_helper'  => ' ',
            'deleted_at'         => 'Deleted at',
            'deleted_at_helper'  => ' ',
            'start_date'         => 'Data de início',
            'start_date_helper'  => ' ',
            'end_date'           => 'Data de fim',
            'end_date_helper'    => ' ',
            'donation'           => 'Doação',
            'donation_helper'    => ' ',
            'limit'              => 'Número de vezes que um número pode ser escolhido',
            'limit_helper'       => 'Se colocar 0 fica em roda livre',
            'award'              => 'Prémio',
            'award_helper'       => ' ',
            'benefectors'        => 'Benfeitores',
            'benefectors_helper' => ' ',
            'star_1'             => 'Estrela 1',
            'star_1_helper'      => ' ',
            'star_2'             => 'Estrela 2',
            'star_2_helper'      => ' ',
        ],
    ],
    'contentManagement' => [
        'title'          => 'Editor de conteúdos',
        'title_singular' => 'Editor de conteúdo',
    ],
    'contentCategory' => [
        'title'          => 'Categories',
        'title_singular' => 'Category',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => ' ',
            'name'              => 'Name',
            'name_helper'       => ' ',
            'slug'              => 'Slug',
            'slug_helper'       => ' ',
            'created_at'        => 'Created at',
            'created_at_helper' => ' ',
            'updated_at'        => 'Updated At',
            'updated_at_helper' => ' ',
            'deleted_at'        => 'Deleted At',
            'deleted_at_helper' => ' ',
        ],
    ],
    'contentTag' => [
        'title'          => 'Tags',
        'title_singular' => 'Tag',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => ' ',
            'name'              => 'Name',
            'name_helper'       => ' ',
            'slug'              => 'Slug',
            'slug_helper'       => ' ',
            'created_at'        => 'Created at',
            'created_at_helper' => ' ',
            'updated_at'        => 'Updated At',
            'updated_at_helper' => ' ',
            'deleted_at'        => 'Deleted At',
            'deleted_at_helper' => ' ',
        ],
    ],
    'contentPage' => [
        'title'          => 'Pages',
        'title_singular' => 'Page',
        'fields'         => [
            'id'                    => 'ID',
            'id_helper'             => ' ',
            'title'                 => 'Title',
            'title_helper'          => ' ',
            'category'              => 'Categories',
            'category_helper'       => ' ',
            'tag'                   => 'Tags',
            'tag_helper'            => ' ',
            'page_text'             => 'Full Text',
            'page_text_helper'      => ' ',
            'excerpt'               => 'Excerpt',
            'excerpt_helper'        => ' ',
            'featured_image'        => 'Featured Image',
            'featured_image_helper' => ' ',
            'created_at'            => 'Created at',
            'created_at_helper'     => ' ',
            'updated_at'            => 'Updated At',
            'updated_at_helper'     => ' ',
            'deleted_at'            => 'Deleted At',
            'deleted_at_helper'     => ' ',
        ],
    ],
    'number' => [
        'title'          => 'Números',
        'title_singular' => 'Número',
        'fields'         => [
            'id'                  => 'ID',
            'id_helper'           => ' ',
            'name'                => 'Nome do jogo',
            'name_helper'         => ' ',
            'created_at'          => 'Created at',
            'created_at_helper'   => ' ',
            'updated_at'          => 'Updated at',
            'updated_at_helper'   => ' ',
            'deleted_at'          => 'Deleted at',
            'deleted_at_helper'   => ' ',
            'start_date'          => 'Data de início',
            'start_date_helper'   => ' ',
            'end_date'            => 'Data de fim',
            'end_date_helper'     => ' ',
            'donation'            => 'Doação',
            'donation_helper'     => ' ',
            'start_number'        => 'Número inicial',
            'start_number_helper' => ' ',
            'end_number'          => 'Último número',
            'end_number_helper'   => ' ',
            'award'               => 'Prémio',
            'award_helper'        => ' ',
            'benefactor'          => 'Benfeitor',
            'benefactor_helper'   => ' ',
        ],
    ],
    'category' => [
        'title'          => 'Categorias de beneficiários',
        'title_singular' => 'Categorias de beneficiário',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => ' ',
            'name'              => 'Nome',
            'name_helper'       => ' ',
            'created_at'        => 'Created at',
            'created_at_helper' => ' ',
            'updated_at'        => 'Updated at',
            'updated_at_helper' => ' ',
            'deleted_at'        => 'Deleted at',
            'deleted_at_helper' => ' ',
        ],
    ],
    'entity' => [
        'title'          => 'Entidade',
        'title_singular' => 'Entidade',
        'fields'         => [
            'id'                  => 'ID',
            'id_helper'           => ' ',
            'name'                => 'Nome',
            'name_helper'         => ' ',
            'created_at'          => 'Created at',
            'created_at_helper'   => ' ',
            'updated_at'          => 'Updated at',
            'updated_at_helper'   => ' ',
            'deleted_at'          => 'Deleted at',
            'deleted_at_helper'   => ' ',
            'sub_category'        => 'Subcategoria',
            'sub_category_helper' => ' ',
        ],
    ],
    'starPlay' => [
        'title'          => 'Jogadas de estrelas',
        'title_singular' => 'Jogadas de estrela',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => ' ',
            'user'              => 'Utilizador',
            'user_helper'       => ' ',
            'star'              => 'Nome do jogo',
            'star_helper'       => ' ',
            'created_at'        => 'Created at',
            'created_at_helper' => ' ',
            'updated_at'        => 'Updated at',
            'updated_at_helper' => ' ',
            'deleted_at'        => 'Deleted at',
            'deleted_at_helper' => ' ',
            'payed'             => 'Pago',
            'payed_helper'      => ' ',
        ],
    ],
    'numberPlay' => [
        'title'          => 'Jogadas de números',
        'title_singular' => 'Jogadas de número',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => ' ',
            'user'              => 'Utilizador',
            'user_helper'       => ' ',
            'number'            => 'Nome do jogo',
            'number_helper'     => ' ',
            'created_at'        => 'Created at',
            'created_at_helper' => ' ',
            'updated_at'        => 'Updated at',
            'updated_at_helper' => ' ',
            'deleted_at'        => 'Deleted at',
            'deleted_at_helper' => ' ',
        ],
    ],
    'starMenu' => [
        'title'          => 'Estrelas',
        'title_singular' => 'Estrela',
    ],
    'menuNumber' => [
        'title'          => 'Números',
        'title_singular' => 'Número',
    ],
    'menuEntity' => [
        'title'          => 'Entidades',
        'title_singular' => 'Entidade',
    ],
    'play' => [
        'title'          => 'Jogadas',
        'title_singular' => 'Jogada',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => ' ',
            'type'              => 'Type',
            'type_helper'       => '1 para estrelas e 2 para números',
            'play'              => 'Play',
            'play_helper'       => ' ',
            'selection'         => 'Seleção',
            'selection_helper'  => ' ',
            'created_at'        => 'Created at',
            'created_at_helper' => ' ',
            'updated_at'        => 'Updated at',
            'updated_at_helper' => ' ',
            'deleted_at'        => 'Deleted at',
            'deleted_at_helper' => ' ',
        ],
    ],
    'award' => [
        'title'          => 'Prémios',
        'title_singular' => 'Prémio',
        'fields'         => [
            'id'                 => 'ID',
            'id_helper'          => ' ',
            'name'               => 'Nome',
            'name_helper'        => ' ',
            'photo'              => 'Imagem',
            'photo_helper'       => ' ',
            'description'        => 'Descrição',
            'description_helper' => ' ',
            'created_at'         => 'Created at',
            'created_at_helper'  => ' ',
            'updated_at'         => 'Updated at',
            'updated_at_helper'  => ' ',
            'deleted_at'         => 'Deleted at',
            'deleted_at_helper'  => ' ',
            'credits'            => 'Credits',
            'credits_helper'     => ' ',
        ],
    ],
    'benefactor' => [
        'title'          => 'Benfeitores',
        'title_singular' => 'Benfeitore',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => ' ',
            'name'              => 'Nome',
            'name_helper'       => ' ',
            'created_at'        => 'Created at',
            'created_at_helper' => ' ',
            'updated_at'        => 'Updated at',
            'updated_at_helper' => ' ',
            'deleted_at'        => 'Deleted at',
            'deleted_at_helper' => ' ',
        ],
    ],
    'subCategory' => [
        'title'          => 'Sub Categorias',
        'title_singular' => 'Sub Categoria',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => ' ',
            'category'          => 'Categoria',
            'category_helper'   => ' ',
            'name'              => 'Nome',
            'name_helper'       => ' ',
            'created_at'        => 'Created at',
            'created_at_helper' => ' ',
            'updated_at'        => 'Updated at',
            'updated_at_helper' => ' ',
            'deleted_at'        => 'Deleted at',
            'deleted_at_helper' => ' ',
        ],
    ],
];
