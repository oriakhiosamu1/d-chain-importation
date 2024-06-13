<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BillingAddressRequest extends FormRequest
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
            'first_name' => 'required',
            'surname' => 'required',
            'mobile_number' => 'required',
            'postal_code' => 'nullable',
            'state' => 'required',
            'city' => 'nullable',
            'street_address' => 'required',
            'email' => 'required|email',
        ];
    }
}
