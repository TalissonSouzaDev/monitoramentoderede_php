<?php



namespace models\interfaces;


interface ModelInterface 
{
    public static function Selectall(string $sql): array;
    public static function FindByid(string $tabela,int $id): array;
    public static function create($tabela,array $campos): bool;
    public static function delete(string $tabela, int $id): bool;
    public static function update(string $tabela,array $campos, int $id): bool;
}