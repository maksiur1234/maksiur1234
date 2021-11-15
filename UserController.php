<?php
class UserController {
    public function index(): array
    {
        // $json = file_get_contents('users.json');
        // $decoded = json_decode($json);
        
        // return $decoded;
        return json_decode(file_get_contents('users.json')); 
    }

    public function store(StoreRequest $storeRequest): array
    {
        $storeRequest->validate();

        $user = [
            'id' => uniqid(),
            'name' => $storeRequest->getName(),
            'surname' => $storeRequest->getSurname(),
            'gender' => $storeRequest->getGender(),
            'bday' => $storeRequest->getBday()
        ];

        $file = json_decode(file_get_contents('users.json'), true);

        // $newUsers = [];

        // foreach ($file['users'] as $u) {
        //     $newUsers[] = $u;
        // }
        // $newUsers[] = $user;


        $file['users'][] = $user;
        file_put_contents('users.json', json_encode($file));

        return $user;
    }
//index show update destroy
}
?>