<?php

namespace App\Enums;

enum TaskStatus : string {
    case DONE  = 'Terminée';
    case PENDING = 'En cours';
    case TODO = 'À faire';
}