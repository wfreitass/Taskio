<?php

namespace App\Enums;

enum StatusTaskEnum: string
{
    case Open = '1';
    case InProgress = '2';
    case Completed = '3';
    case Cancelled = '4';

    public function label(): string
    {
        return match ($this) {
            self::Open => 'Aberta',
            self::InProgress => 'Em Andamento',
            self::Completed => 'Concluída',
            self::Cancelled => 'Cancelada',
        };
    }
}
