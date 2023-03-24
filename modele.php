<?php
class Pokemon {

    public static function getPokemon($id) {
 
        $curl = curl_init();
       
       curl_setopt_array($curl, array(
        CURLOPT_URL => "https://pokeapi.co/api/v2/pokemon-species/$id",
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => 'GET',
       ));
       
       $response = curl_exec($curl);
       $res = json_decode($response, true);
       curl_close($curl);
       
       
       
       return $res;
       
       }

       
       public static function getAllPokemon(){

       $curl = curl_init();

        curl_setopt_array($curl, array(
        CURLOPT_URL => 'https://pokeapi.co/api/v2/pokemon',
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => 'GET',
));
    $response = curl_exec($curl);
    $array = json_decode($response, true);
    curl_close($curl);
    return $array;
}


      
        public static function getOnePokemon($name){


        $curl = curl_init();
        
        curl_setopt_array($curl, array(
          CURLOPT_URL => "https://pokeapi.co/api/v2/pokemon/$name",
          CURLOPT_RETURNTRANSFER => true,
          CURLOPT_ENCODING => '',
          CURLOPT_MAXREDIRS => 10,
          CURLOPT_TIMEOUT => 0,
          CURLOPT_FOLLOWLOCATION => true,
          CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
          CURLOPT_CUSTOMREQUEST => 'GET',
        ));
        
        $response = curl_exec($curl);
        
      $array = json_decode($response, true);
      curl_close($curl);
      // echo "<pre>"; 
      // print_r($array);
      // echo "</pre>"; 
      return $array;
       
      
      
      }


       

}


?>

