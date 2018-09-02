<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */



namespace App\Gestion;

class PhotoGestion implements PhotoGestionInterface
{

    public function save($image)
	{
		if($image->isValid())
		{
			$chemin = config('images.path');
			$extension = $image->getClientOriginalExtension();

			do {
				$nom = str_random(10) . '.' . $extension;
			} while(file_exists($chemin . '/' . $nom));

			return $image->move($chemin, $nom);
		}

		return false;
	}

}