<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreResearch extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {

        return [
           'name' => 'required|unique:researches|max:255',
           'task[]' => 'required|array|min:1',
           'task.*' => 'required|string|distinct|min:3',
           'group[]' => 'required',
       ];
   }
}
