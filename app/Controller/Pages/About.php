<?php
namespace App\Controller\Pages;

use \App\Utils\View;
use \App\Model\Entity\Organization;

class About extends Page{
    /** 
     * Método responsavel pelo conteudo (view) da nossa pagina de sobre
     * @return string
    */
    public static function getAbout(){
        //organização
        $obOrganization = new Organization;
        
        //view da home
         $content = View::render('pages/about',[
            'name' => $obOrganization -> name,
            'descricao' => $obOrganization -> description,
            'site' => $obOrganization -> site,
         ]);
         //retorna a view da pagina
         return parent ::getPage('sobre > rodriggo', $content);
    }
}