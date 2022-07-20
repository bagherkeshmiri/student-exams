<?php


namespace App\Http\Controllers\api\Traits;


use Illuminate\Http\Response;

trait ApiResponder
{

    public function successRespondWithAdditionalData($data , $message = null, $headers = [], $code = Response::HTTP_OK)
    {
        $additionalData['message'] = $message;
        $additionalData['success'] = true;
        return $data->additional($additionalData)
            ->response()
            ->withHeaders($headers)
            ->setStatusCode($code);
    }

    public function successRespond($data, $message = null, $additional_data = null, $headers = [], $code = Response::HTTP_OK)
    {
        $response = [
            'data' => $data,
            'message' => $message,
            'success' => true,
        ];
        if (!is_null($additional_data)) {
            foreach ($additional_data as $key => $value) {
                $response[$key] = $value;
            }
        }
        return response()->json($response, $code, $headers);
    }

    public function errorRespond($message, $details = [], $additional_data = null, $headers = [], $code = Response::HTTP_BAD_REQUEST)
    {
        $response = [
            'error' => [
                'code' => $code,
                'details' => $details
            ],
            'message' => $message,
            'success' => false,
        ];
        if (!is_null($additional_data)) {
            foreach ($additional_data as $key => $value) {
                $response[$key] = $value;
            }
        }
        return response()->json($response, $code, $headers);
    }

}
