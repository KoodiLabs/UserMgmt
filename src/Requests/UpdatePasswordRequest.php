<?php

namespace UserMgmt\Requests;

use App\Http\Requests\Request;
use UserMgmt\Models\User;

class UpdatePasswordRequest extends Request
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
        return User::$rulesUpdatePassword;
    }
}
