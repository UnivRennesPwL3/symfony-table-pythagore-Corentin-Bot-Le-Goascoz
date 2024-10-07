<?php

namespace App\Classe;

class PythagoreUtility
{
    public function __construct(){}

    public function display()
    {
        $pyta = '<table>';
     
           for ($i = 0; $i < 11; $i++) 
           {
               #variable pour alterner les couleurs (et faire une abeille :))
               $case = true;
               $pyta = $pyta.'<tr>';
               for ($y = 0; $y < 11; $y++) 
               {
               
                   $valeur = $i * $y;  
                   
                   #pour marquer X dans la diagonale
                   if ($i == $y)
                   {
                       $valeur = 'X';
                   }

                   #pour avoir la ligne 1-2-3-4-5-6-7-8-9-10 en vertical
                   if ($y == 0)
                   {
                       $valeur = $i;
                   }  

                   #pour avoir la ligne 1-2-3-4-5-6-7-8-9-10 en horizontal
                   if ($i == 0)
                   {
                       $valeur = $y;
                   }  

                   
                   $pyta = $pyta.'<td style=" border: 1px solid black">'.$valeur.'</td>';
               }
               $pyta = $pyta.'</tr>';
           }
   
        $pyta = $pyta.'</table>';
        return $pyta;
    }
}