<?php

namespace ITSoft\HelpDev\Enum;

enum PermissionEnum: string
{
    //User actions
    case USERS_LIST = '111';
    case USERS_CREATE = '112';
    case USERS_BLOCK = '113';
    case USERS_UNBLOCK = '114';
    case USERS_ADD_PERMISSIONS = '115';
    case USERS_USERS_REMOVE_PERMISSIONS = '116';

    //Department actions
    case DEPARTMENTS_CREATE = '121';
    case DEPARTMENTS_LIST = '122';
    case DEPARTMENTS_UPDATE = '123';


    //Position actions
    case POSITIONS_CREATE = '131';
    case POSITIONS_UPDATE = '132';
    case POSITIONS_LIST = '133';

    //Permission actions
    case PERMISSIONS_CREATE = '141';
    case PERMISSIONS_UPDATE = '142';
    case PERMISSIONS_LIST = '143';

    //API token actions
    case MICROSERVICE_API_TOKEN_LIST = '151';
    case MICROSERVICE_API_TOKEN_CREATE = '152';
    case MICROSERVICE_API_TOKEN_ADD_PERMISSIONS = '153';
    case MICROSERVICE_API_TOKEN_REMOVE_PERMISSIONS = '154';
    case MICROSERVICE_API_TOKEN_BLOCK = '155';
    case MICROSERVICE_API_TOKEN_UNBLOCK = '156';

    //metadata cleaner
    case UTILITIES_METADATA_CLEANER_CREATE = '211';
    case UTILITIES_METADATA_CLEANER_LIST_OWN = '212';
    case UTILITIES_METADATA_CLEANER_LIST_ALL = '213';
    case UTILITIES_METADATA_CLEANER_RESTART = '214';

}
