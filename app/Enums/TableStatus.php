<?php

namespace App\Enums;

enum TableStatus: string
{
    case Pending = 'pending';
    case Avalaiable = 'avaliable';
    case Unavaliable = 'unavaliable';
}
