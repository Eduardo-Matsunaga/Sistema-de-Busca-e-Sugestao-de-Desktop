<?php


interface PrecoInterface {
    public function GetId(): int;
    public function SetID(int $id): void;
    public function GetPreco(): float;
    public function SetPreco(float $preco): void;
    public function GetMoeda(): string;
    public function SetMoeda(string $moeda): void;
}
