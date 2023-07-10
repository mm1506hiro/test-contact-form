<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
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
            'name1' => ['required','string','max:255'],
            'name2' => ['required','string','max:255'],
            'gender' => ['required'],
            'email' => ['required','string','email','max:255'],
            'postcode' => ['required','size:8'],
            'address' => ['required','max:255'],
            'building_name' => ['max:255'],
            'opinion' =>['required'],
        ];
    }

    public function messages()
    {
        return [
            'name1.required' => '苗字を入力してください',
            'name1.string' => '苗字を文字列で入力してください',
            'name1.max' => '苗字を255文字以下で入力してください',
            'name2.required' => '名前を入力してください',
            'name2.string' => '名前を文字列で入力してください',
            'name2.max' => '名前を255文字以下で入力してください',
            'gender.required' => '性別を入力してください',
            'email.required' => 'メールアドレスを入力してください',
            'email.string' => 'メールアドレスを文字列で入力してください',
            'email.email' => '有効なメールアドレス形式を入力してください',
            'email.max' => 'メールアドレスを255文字以下で入力してください',
            'postcode.required' =>'郵便番号を入力してください',
            'postcode.max' =>'郵便番号を8文字で入力してください',
            'postcode.size' => '郵便番号をハイフン（－）含めた8桁で入力してください',
            'address.required' =>'住所を入力してください',
            'address.max' =>'住所を255文字以下で入力してください',
            'opinion.required' =>'ご意見を入力してください'
        ];
    }
}
