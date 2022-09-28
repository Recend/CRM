<?php
class Superadmin extends Admin
{
    public function getNavigation()
    {
        return [
            ['link' => 'companies.php', 'name' => 'Kompanijos'],
            ['link' => 'create.php', 'name' => 'Pridėti klientą'],
            ['link' => 'createcomp.php', 'name' => 'Pridėti kompaniją'],
        ];

    }
    public function canEdit(){
        return true;
    }
}