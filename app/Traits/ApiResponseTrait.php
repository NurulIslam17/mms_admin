<?php

namespace App\Traits;
use Illuminate\Http\JsonResponse;

class ApiResponseTrait
{
    public function successResponse($data, $message = 'Success', $statusCode = 200) {
        return response()->json([
            'status' => 'success',
            'message' => $message,
            'data' => $data
        ], $statusCode);
    }

    public function errorResponse($message, $statusCode = 400) {
        return response()->json([
            'status' => 'error',
            'message' => $message,
            'data' => null
        ], $statusCode);
    }
}
