<?php

/* V002/24 - versao 07-04-2024 */

interface LojasOnlineInterface {
    public function GetId(): int;
    public function SetId(int $id): void;
    public function GetLoja(): string;
    public function SetLoja(string $loja): void;
    public function GetUrl(): string;
    public function SetUrl(string $url): void;
    public function GetDisponibilidade(): bool;
    public function SetDisponibilidade(bool $disponibilidade): void;


}
