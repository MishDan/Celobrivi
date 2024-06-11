<?php
# Autorizacija:

require "assets/connect_db.php";

if(isset($_POST["autorizacija"])){
   session_start();

   $lietotjavards = mysqli_real_escape_string($savienojums, $_POST["lietotajs"]);
   $parole = mysqli_real_escape_string($savienojums, $_POST["parole"]);

   // Проверяем таблицу администраторов
   $sql_admin = "SELECT * FROM Administratori WHERE Lietotajvards = '$lietotjavards'";
   $rezultats_admin = mysqli_query($savienojums, $sql_admin);

   // Если найден в таблице администраторов
   if(mysqli_num_rows($rezultats_admin) == 1){
      while($user_admin = mysqli_fetch_array($rezultats_admin)){
         if(password_verify($parole, $user_admin["Parole"])){
            $_SESSION["lietotajvardsAdministrator"] = $user_admin["Lietotajvards"];
            header("location:Admins/index.php");
            exit;
         }
      }
   }

   // Проверяем таблицу модераторов
   $sql_mod = "SELECT * FROM Moderatori WHERE Lietotajvards = '$lietotjavards'";
   $rezultats_mod = mysqli_query($savienojums, $sql_mod);

   // Если найден в таблице модераторов
   if(mysqli_num_rows($rezultats_mod) == 1){
      while($user_mod = mysqli_fetch_array($rezultats_mod)){
         if(password_verify($parole, $user_mod["Parole"])){
            $_SESSION["lietotajvardsModerator"] = $user_mod["Lietotajvards"];
            header("location:Admins/index.php");
            exit;
         }
      }
   }

   // Если не найден ни в одной из таблиц
   echo "Nepareizs lietotājvards vai parole!";
}

?>