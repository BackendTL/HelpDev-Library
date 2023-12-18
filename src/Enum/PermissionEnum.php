<?php

namespace ITSoft\HelpDev\Enum;

enum PermissionEnum: string
{
    //USERS
    case USERS_LIST = '111';
    case USERS_CREATE = '112';
    case USERS_BLOCK = '113';
    case USERS_UNBLOCK = '114';
    case USERS_ADD_PERMISSIONS = '115';
    case USERS_USERS_REMOVE_PERMISSIONS = '116';

}
