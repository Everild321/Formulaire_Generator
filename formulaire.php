
<?php 
    class Formulaire{
        private String $contenu;
        private String $type;
        private $traitement;

    public function __construct(){
        $this->contenu ='<form>';
        $this->type='Post';
        //$this->traitement=NULL;
    }

    public function debut_soummission($type){
        echo'<form action= "" method='.$type.'>';
    }
    public function ajouter_Label(String $nomLabel){
     echo'<label for="">'.$nomLabel.'</label><br><br>';
  /*
   $this->contenu .='<label for="">'.$nomLabel.'</label><br>';
       return $this;
  */
    }
    public function ajouter_champ(String $typechamp){
        echo'<input type='.$typechamp.'> <br><br>';
        /*
        $this->contenu .='<input type='.$typechamp.'> <br>';
        return $this;
        */
    }

    public function ajout_bouton($nom_button){
        echo '<input type="submit" value='.$nom_button.'>';
    }

    public function fin_formulaire(){
        echo '</form>';
        /*
     $this->contenu .='</form>';
     return $this;
     */
    }
    }

  