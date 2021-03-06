<?php

class ConnectorApi
{
    public static function useHttpPostApi($dataArray)
    {
        $url = "http://localhost:8080/Proyecto_final/api/onlineStoreApi.php";
        $data = http_build_query($dataArray);
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_POST, TRUE);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $resp = curl_exec($ch);
        curl_close($ch);
        return json_decode($resp, true);
    }

    public static function useHttpGetApi($getCase)
    {
        $resp = json_decode(
            file_get_contents(
                "http://localhost:8080/Proyecto_final/api/onlineStoreApi.php" . "?getCase=" . $getCase
            ),
            TRUE
        );
        return $resp;
    }

    public static function useHttpDeleteApi($dataArray)
    {
        $url = "http://localhost:8080/Proyecto_final/api/onlineStoreApi.php";
        $data = http_build_query($dataArray);
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($dataArray));
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "DELETE"); 
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $resp = curl_exec($ch);
        curl_close($ch);
        return json_decode($resp, true);
    }
}
