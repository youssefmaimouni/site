<?php

namespace App\Http\Requests;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class SiteRequest extends FormRequest
{
   /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'description'=>'required |string',
            'titre'=>'required|string',
            'lien'=>'required| string',
            'id_cat'=>'required'

        ];
    }
    public function failedValidation(Validator $validator){
        return redirect('create')->withErrors($validator)->withInput();
    }
    public function messages()
    {
        return[
            'description.required '=>'description non fourni',
            'description.string'=>"le description  doit être un string",
            'titre.required '=>'Titre non fourni',
            'titre.string'=>"le Titre  doit être un string",
            'logo.required '=>'logo non fourni',
            'logo.string'=>"le logo  doit être un string",
            'lien.required '=>'lien non fourni',
            'lien.string'=>"le lien  doit être un string",
            
        ];
    }
}
