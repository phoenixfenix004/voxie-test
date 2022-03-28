<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\ContactRequest;
use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{

    public function index()
    {
        //
    }

    public function store(ContactRequest $request)
    {
        $parameters = $request->validated();

        $contacts = [];
        $custom_columns = [];
        foreach ($parameters['contacts'] as $keyContact => $contact) {
            $columnsNames = [];

            foreach ($parameters['columns'] as $keyColumn => $column) {
                $columnsNames[$keyColumn] = $column;
            }

            foreach ($columnsNames as $keyColumnName => $columnName) {
                $i = array_search($keyColumnName, array_keys($contact));
                // ADD CUSTOM COLUMNS IF THEY EXIST
                if($i <= 4){
                    $contacts[$keyContact][$columnName] = $contact[$keyColumnName];
                }else{
                    $custom_columns[$keyContact][] = ['key' => $columnName, 'value' => $contact[$keyColumnName]];
                }
            }
        }

        foreach($contacts as $i=>$contact){
            $new_contact = Contact::create($contact);
            // CHECK IF CUSTOM COLUMNS EXIST AND ADD THEM
            if(count($custom_columns) > 0){
                foreach($custom_columns[$i] as $cc){
                    $new_contact->customAttributes()->create($cc);
                }
            }
        }

        return response()->json([
            'success' => true
        ]);
    }

}
