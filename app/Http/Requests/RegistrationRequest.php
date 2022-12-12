<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegistrationRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'firstName' => [
                'required',
                'max:30'
            ],
            'lastName' => ['max:30'],
            'email' => [
                'required',
                'email',
                'unique:users'
            ],
            'password' => [
                'required',
                'min:8',
                'max:20',
                'regex:/^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[#?!@$%^&*-]).{8,}$/'
            ],
            'comfPassword' => [
                'required',
                'same:password'
            ],
            'phoneNumber' => [
                'required',
                'regex:/[+]374(91|96|99|43|33|77|93|94|98|49|55|95|41|44)-\d{2}-\d{2}-\d{2}/i'
            ],
            'countries' => 'required',
            'cities' => 'required',
        ];
    }

    public function messages(){
        return [
            'firstName.required' => 'Խնդրում ենք լրացնել բոլոր դաշտերը։',
            'firstName.max' => 'Խնդրում ենք լրացնել 30 նիշից ոչ ավել։',
            'lastName.max' => 'Խնդրում ենք լրացնել 30 նիշից ոչ ավել։',
            'email.required' => 'Խնդրում ենք լրացնել բոլոր դաշտերը։',
            'email.email' => 'Խնդրում ենք լրացնել գործող էլ․ հասցե։',
            'email.unique' => 'Տվյալ էլ․ հասցեով գրանցված է այլ օգտատեր, խնդրում ենք լրացնել այլ էլ․ հասցե։',
            'password.required' => 'Խնդրում ենք լրացնել բոլոր դաշտերը։',
            'password.min' => 'Գաղնաբառը պետք է կազմված լինի առնվազն 8 նիշից։',
            'password.max' => 'Գաղնաբառը չպետք է գերազանցի 20 նիշը։',
            'password.regex' =>'Գաղտնաբառը պետք է լինի լատինատառ և պարտադիր պարունակի փոքրատառ և մեծատառ տառեր, թվանշաններ և հատուկ սիմվոլներ:',
            'comfPassword.required' => 'Խնդրում ենք լրացնել բոլոր դաշտերը։',
            'comfPassword.same' => 'Գաղնաբառները չեն համընկնում',
            'phoneNumber.required' => 'Խնդրում ենք լրացնել բոլոր դաշտերը։',
            'phoneNumber.regex' => 'Խնդրում ենք լրացնել գործող հեռախոսահամար։',
            'countries.required' => 'Խնդրում ենք լրացնել բոլոր դաշտերը։',
            'cities.required' => 'Խնդրում ենք լրացնել բոլոր դաշտերը։',
        ];
    }
}
