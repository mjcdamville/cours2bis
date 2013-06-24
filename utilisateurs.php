<?php

class Utilisateurs {
    private $utilisateurs;
    
    public function __construct()
    {
        $this->utilisateurs = json_decode(file_get_contents('list.json'),true);
    }
    
    public function ajoute($pseudo, $nom)
    {
        if ($this->existe($pseudo)) {
            return "Impossible : l'utilisateur existe déjà";
        }
        
        $this->utilisateurs[$pseudo] = $nom;      
        return "L'utilisateur ".$this->utilisateurs[$pseudo]." a été ajouté";
    }
    
    public function supprime($pseudo)
    {
        if (!$this->existe($pseudo)) {
            return "Impossible : l'utilisateur ".$pseudo." n'existe pas";
        }
        
        // unset supprime la case du tableau donné en argument
        // ici on supprime la case ayant pour index $pseudo
        unset($this->utilisateurs[$pseudo]);  
        return "L'utilisateur ".$this->utilisateurs[$pseudo]." a été supprimé";
    }
    
    public function obtientListe()
    {
        return $this->utilisateurs;                
    }    
    
    public function existe($pseudo)
    {
        if (isset($this->utilisateurs[$pseudo])) {
            return true;
        } else {
            return false;
        }
    }
    
    public function sauvegarde()
    {
        file_put_contents('list.json',json_encode($this->utilisateurs));        
    }
}

?>
