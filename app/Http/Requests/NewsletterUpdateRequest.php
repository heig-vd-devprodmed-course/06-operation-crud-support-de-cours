<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class NewsletterUpdateRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        $id = $this->route('newsletter') ?? $this->route('id');

        return [
            'email' => 'required|email|unique:newsletters,email,' . $id,
        ];
    }
}
