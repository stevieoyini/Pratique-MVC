
<?php
//Exercice 1: Création d'un modèle

//nous créons une classe nommée "UserModel" dans le fichier "UserModel.php"
class UserModel{
    //nous ajoutons une propriété privée "username" à la classe UserModel. Cette propriété sera utilisée pour stocker le nom d'utilisateur.
    public $username;

    //Nous avons également ajouté une méthode publique "save" à la classe UserModel qui prend en paramètre un tableau d'informations utilisateur
    public function save($user_info){
        //Dans cette méthode, nous stockons le nom d'utilisateur à partir du tableau d'informations dans la propriété "username" de la classe UserModel.
        $this->username = $user_info['username'];

    }


    public function getUsername() {
        // Renvoyer le nom d'utilisateur stocké dans la propriété "username"
        return $this->username;
      }
// nous pouvons ajouter d'autres méthodes et propriétés à notre classe UserModel selon les besoins de l'application
}

?>