<?php

namespace Kagoji\Crud\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AddCandidateRequest extends FormRequest
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
            'candidate_name' => 'required|string|between:3,30',
            'candidate_mobile' => 'required|numeric|digits_between:11,13',
            'candidate_email' => 'required|email|unique:candidates,email',
            'candidate_resume_url' => 'url',
        ];
    }

    /**
     * Custom message for validation
     *
     * @return array
     */
    public function messages()
    {
        return [
            'candidate_name.required' => 'The candidate name field is required.',
            'candidate_name.between' => 'The candidate name must be between 3 and 30 characters.',
            'candidate_mobile.required' => 'The candidate mobile field is required.',
            'candidate_mobile.numeric' => 'The candidate mobile must be a numeric value.',
            'candidate_mobile.digits_between' => 'The candidate mobile must be between 11 and 13 digits.',
            'candidate_email.required' => 'The candidate email field is required.',
            'candidate_email.email' => 'Invalid email format.',
            'candidate_email.unique' => 'The candidate email has already been taken.',
            'candidate_resume_url.url' => 'Invalid URL format for candidate resume.',
        ];
    }
}
