<?php

namespace App\Http\Requests;

use App\Strategies\Entities\EncodingConfigurationEntity;
use Illuminate\Foundation\Http\FormRequest;

class EncodingRequest extends FormRequest
{
    const OFFSET_ENCODING_TYPE = 1;
    const OFFSET_ENCODING_KEY = 'offset_encoding_algorithm';
    const SUBSTITUTION_ENCODING_TYPE = 2;
    const SUBSTITUTION_ENCODING_KEY = 'substitution_encoding_algorithm';

    const ENCODINGS = [
        self::OFFSET_ENCODING_TYPE => self::OFFSET_ENCODING_KEY,
        self::SUBSTITUTION_ENCODING_TYPE => self::SUBSTITUTION_ENCODING_KEY,
    ];

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
            'input' => 'required',
            'offset_encoding_algorithm' => '',
            'offset' => 'required_if:offset_encoding_algorithm,on',
            'substitution_encoding_algorithm' => '',
            'character_to_search' => 'required_if:substitution_encoding_algorithm,on|max:1',
            'character_to_replace' => 'required_if:substitution_encoding_algorithm,on|max:1',
        ];
    }

    /**
     * @return EncodingConfigurationEntity
     */
    public function mapEncodingConfigurationEntity() : EncodingConfigurationEntity
    {
        $params = new EncodingConfigurationEntity();
        $params->setOffset($this->offset);
        $params->setCharacterToReplace($this->character_to_replace);
        $params->setCharacterToSearch($this->character_to_search);

        return $params;
    }

    /**
     * @return array
     */
    public function getTypes() : array
    {
        $types = [];

        foreach (self::ENCODINGS as $type => $key) {

            if ($this->$key) {
                $types[] = $type;
            }
        }
        return $types;
    }


}
