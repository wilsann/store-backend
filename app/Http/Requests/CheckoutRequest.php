<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CheckoutRequest extends FormRequest
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
            'name' => 'required|max:255',
            'email' => 'required|email|max:255',
            'number' => 'required|max:255',
            'address' => 'required',
            'transaction_total' => 'required|integer',
            'transaction_status' => 'required|string|in:PENDING,SUCCESS,FAILED',
            'transaction_details' => 'required|array',
            'transaction_details.*' => 'integer|exists:products,id',
        ];
    }
}
