<?php

return [
    'role_structure' => [
        'administrator' => [
            'projects' => 'i,c,r,u,d',
            'projects.owner' => 'r',
            'projects.relationships.owner' => 'r,u,d',
            'projects.tasks' => 'i',
            'projects.relationships.tasks' => 'i',
            'tasks' => 'i,c,r,u,d',
            'tasks.owner' => 'r',
            'tasks.relationships.owner' => 'r,u,d',
            'tasks.project' => 'r',
            'tasks.relationships.project' => 'r,u,d',
            'users' => 'i,c,r,u,d',
            'users.projects' => 'i',
            'users.relationships.projects' => 'i',
            'users.tasks' => 'i',
            'users.relationships.tasks' => 'i',
        ],
        'demo' => [
            'projects' => 'i,c,r,u,d',
            'projects.owner' => 'r',
            'projects.relationships.owner' => 'r',
            'projects.tasks' => 'i',
            'projects.relationships.tasks' => 'i',
            'tasks' => 'i,c,r,u,d',
            'tasks.owner' => 'r',
            'tasks.relationships.owner' => 'r',
            'tasks.project' => 'r',
            'tasks.relationships.project' => 'r,u,d',
            'users' => 'r,u',
            'users.projects' => 'i',
            'users.relationships.projects' => 'i',
            'users.tasks' => 'i',
            'users.relationships.tasks' => 'i',
        ],
        'subscriber' => [
            'projects' => 'i,c,r,u,d',
            'projects.owner' => 'r',
            'projects.relationships.owner' => 'r',
            'projects.tasks' => 'i',
            'projects.relationships.tasks' => 'i',
            'tasks' => 'i,c,r,u,d',
            'tasks.owner' => 'r',
            'tasks.relationships.owner' => 'r',
            'tasks.project' => 'r',
            'tasks.relationships.project' => 'r,u,d',
            'users' => 'r,u',
            'users.projects' => 'i',
            'users.relationships.projects' => 'i',
            'users.tasks' => 'i',
            'users.relationships.tasks' => 'i',
        ],
    ],
    'permission_structure' => [],
    'permissions_map' => [
        'i' => 'index',
        'c' => 'store',
        'r' => 'show',
        'u' => 'update',
        'd' => 'destroy',
    ]
];
