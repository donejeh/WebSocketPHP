<?php

declare(strict_types=1);

namespace WebSocket\logger;

interface Logger {
    public function info(string $message): void;

    public function error(string $message): void;

    public function warning(string $message): void;

    public function debug(string $message): void;
}