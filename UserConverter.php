<?php
class UserConverter{
    public function convert(string $fileName) {
    
        $decoded= json_decode(file_get_contents( $fileName), true);
            var_dump($decoded);
        $users = $decoded['users'];

        foreach($users as $index => $user){
            $users[$index]['id'] = uniqid();
        }
        file_put_contents( $fileName, json_encode($users));
    }
} 

?>