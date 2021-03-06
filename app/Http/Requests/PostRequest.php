<?php

namespace App\Http\Requests;

use Illuminate\Http\Request;

class PostRequest extends Request
{

	public function authorize()
	{
		return true;
	}

	public function rules()
	{
		return [
			'titre' => 'required|max:80',
			'contenu' => 'required'
		];
	}

}