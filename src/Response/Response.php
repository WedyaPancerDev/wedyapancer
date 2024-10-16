<?php

namespace Wedyapancer\Wedyapancer\Response;


class Response
{

    /**
     * Making Response API 
     * 
     * @param int $code
     * @param string $status
     * @param string|array $data
     * @param string $message
     * @return array
     */
    public function ResponseJSON(int $code = 200, string $status = "success", string|array|null $data = "", string $message = "Request Successed"): array
    {
        return [
            'code' => $code,
            'status' => $status,
            'data' => $data,
            'message' => $message
        ];
    }
}
