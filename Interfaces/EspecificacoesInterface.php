<?php

interface EspecificacoesInterface {
    public function GetDetalhes(): string;
    public function SetDetalhes (string $detalhes): void;
}