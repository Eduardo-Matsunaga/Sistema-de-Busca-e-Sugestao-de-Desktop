<?php

interface MarcaInterface {
    public function GetNome(): string;
    public function SetNome(string $nome): void;
}