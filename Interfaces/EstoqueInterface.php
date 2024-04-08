<?php

/* V001/24 - versao 02-04-2024 */

interface EstoqueInterface {

    public function GetId(): int;
    public function SetId(int $id): void;
    public function GetNome(): string;
    public function SetNome(string $nome): void;
    public function GetLojasOnline(): array;
    public function SetLojasOnline(array $lojasOnline): void;
    public function GetDisponibilidade(): bool;
    public function SetDisponibilidade(bool $disponibilidade): void;
    
}
